<?php
require_once __DIR__ . '/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../deliveryOrder.php');
    exit;
}

$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$address = trim($_POST['address'] ?? '');
$order_text = trim($_POST['order'] ?? '');
$product_ids = $_POST['product_id'] ?? [];
$qtys = $_POST['qty'] ?? [];

// ensure orders tables
$conn->query("CREATE TABLE IF NOT EXISTS orders (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(100) NOT NULL,
    phone VARCHAR(30) DEFAULT NULL,
    address TEXT DEFAULT NULL,
    order_text TEXT DEFAULT NULL,
    status ENUM('pending','confirmed','cancelled','completed') NOT NULL DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

$conn->query("CREATE TABLE IF NOT EXISTS order_items (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    order_id INT UNSIGNED NOT NULL,
    product_id INT UNSIGNED NOT NULL,
    quantity INT UNSIGNED NOT NULL,
    price DECIMAL(10,2) DEFAULT 0,
    FOREIGN KEY (order_id) REFERENCES orders(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

// Basic validation
if ($name === '' || $phone === '') {
    header('Location: ../deliveryOrder.php?error=1');
    exit;
}

// Start transaction
$conn->begin_transaction();
try {
    $stmt = $conn->prepare('INSERT INTO orders (customer_name, phone, address, order_text) VALUES (?, ?, ?, ?)');
    $stmt->bind_param('ssss', $name, $phone, $address, $order_text);
    $stmt->execute();
    $order_id = $conn->insert_id;
    $stmt->close();

    // If structured items provided, update stock and insert items
    if (!empty($product_ids) && is_array($product_ids)) {
        for ($i = 0; $i < count($product_ids); $i++) {
            $pid = (int) $product_ids[$i];
            $q = (int) ($qtys[$i] ?? 0);
            if ($pid <= 0 || $q <= 0) continue;

            // Check availability
            $check = $conn->prepare('SELECT quantity, price FROM products WHERE id = ? FOR UPDATE');
            $check->bind_param('i', $pid);
            $check->execute();
            $check->bind_result($available, $price);
            if ($check->fetch() === null) {
                $check->close();
                throw new Exception('منتج غير موجود');
            }
            $check->close();

            if ($available < $q) {
                throw new Exception('الكمية غير متوفرة');
            }

            // decrement
            $upd = $conn->prepare('UPDATE products SET quantity = quantity - ? WHERE id = ? AND quantity >= ?');
            $upd->bind_param('iii', $q, $pid, $q);
            $upd->execute();
            if ($upd->affected_rows === 0) {
                $upd->close();
                throw new Exception('تعذر تحديث الكمية');
            }
            $upd->close();

            // insert order item
            $ins = $conn->prepare('INSERT INTO order_items (order_id, product_id, quantity, price) VALUES (?, ?, ?, ?)');
            $ins->bind_param('iiid', $order_id, $pid, $q, $price);
            $ins->execute();
            $ins->close();
        }
    }

    $conn->commit();
    header('Location: ../deliveryOrder.php?success=1');
    exit;
} catch (Exception $e) {
    $conn->rollback();
    header('Location: ../deliveryOrder.php?error=2');
    exit;
}
