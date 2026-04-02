<?php
// backend/reserve.php
// Handles reservation form submissions
require_once __DIR__ . '/db.php';

// Ensure reservations table exists
$create_sql = "CREATE TABLE IF NOT EXISTS reservations (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    table_number VARCHAR(20) NOT NULL,
    customer_name VARCHAR(100) NOT NULL,
    phone VARCHAR(30) NULL,
    date DATETIME NOT NULL,
    status ENUM('pending','confirmed','cancelled','completed') NOT NULL DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
$conn->query($create_sql);

// ensure orders/order_items exist (for reservations that include product orders)
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

// Simple availability: max concurrent reservations per slot
$MAX_SLOTS = 10;

$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$people = trim($_POST['people'] ?? '');
$date = trim($_POST['reservation-date'] ?? '');
$time = trim($_POST['reservation-time'] ?? '');
$message = trim($_POST['message'] ?? '');

// optional: ordered products with reservation
$product_ids = $_POST['product_id'] ?? [];
$qtys = $_POST['qty'] ?? [];

if ($name === '' || $phone === '' || $date === '' || $time === '') {
    $err = urlencode('يرجى ملء الحقول الأساسية (الاسم، الهاتف، التاريخ، الوقت).');
    header('Location: ../booking.php?error=' . $err);
    exit;
}

// Combine date and time into datetime
$datetime_str = $date . ' ' . $time;
$datetime = date('Y-m-d H:i:s', strtotime($datetime_str));
if (!$datetime) {
    $err = urlencode('تنسيق التاريخ/الوقت غير صالح.');
    header('Location: ../booking.php?error=' . $err);
    exit;
}

// Check availability for exact slot
$stmt = $conn->prepare("SELECT COUNT(*) FROM reservations WHERE date = ? AND status != 'cancelled'");
$stmt->bind_param('s', $datetime);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();

if ($count >= $MAX_SLOTS) {
    $err = urlencode('عذراً، لا تتوفر طاولات في هذا التوقيت. الرجاء اختيار توقيت آخر.');
    header('Location: ../booking.php?error=' . $err);
    exit;
}

// Start transaction: insert reservation and optional order atomically
$conn->begin_transaction();
try {
    // Insert reservation
    $table_number = 'auto';
    $insert = $conn->prepare('INSERT INTO reservations (table_number, customer_name, phone, date, status) VALUES (?, ?, ?, ?, ?)');
    $status = 'pending';
    $insert->bind_param('sssss', $table_number, $name, $phone, $datetime, $status);
    $insert->execute();
    $reservation_id = $conn->insert_id;
    $insert->close();

    // If products provided, create an order and items and decrement stock
    if (!empty($product_ids) && is_array($product_ids)) {
        $stmtOrder = $conn->prepare('INSERT INTO orders (customer_name, phone, order_text, status) VALUES (?, ?, ?, ?)');
        $order_text = $message;
        $order_status = 'pending';
        $stmtOrder->bind_param('ssss', $name, $phone, $order_text, $order_status);
        $stmtOrder->execute();
        $order_id = $conn->insert_id;
        $stmtOrder->close();

        for ($i = 0; $i < count($product_ids); $i++) {
            $pid = (int) $product_ids[$i];
            $q = (int) ($qtys[$i] ?? 0);
            if ($pid <= 0 || $q <= 0) continue;

            // Lock and check availability
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
    header('Location: ../booking.php?success=1');
    exit;
} catch (Exception $e) {
    $conn->rollback();
    $err = urlencode('حدث خطأ أثناء حفظ الحجز أو الطلب: ' . $e->getMessage());
    header('Location: ../booking.php?error=' . $err);
    exit;
}
