<?php
// backend/admin/products.php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header('Location: ../login.php');
    exit;
}
require_once __DIR__ . '/../db.php';

// Ensure products table exists (minimal safe schema)
$create_sql = "CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL DEFAULT 0.00,
    quantity INT UNSIGNED NOT NULL DEFAULT 0,
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
$conn->query($create_sql);

// Ensure categories table exists for product categorization
$conn->query("CREATE TABLE IF NOT EXISTS categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    slug VARCHAR(150) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

// In case the existing database was created with an older schema that lacks the `description` column,
// add it without destroying existing data.
$colRes = $conn->query("SHOW COLUMNS FROM products LIKE 'description'");
if ($colRes && $colRes->num_rows === 0) {
    $conn->query("ALTER TABLE products ADD COLUMN description TEXT NULL AFTER name");
}

// Ensure products has category_id column
$colCat = $conn->query("SHOW COLUMNS FROM products LIKE 'category_id'");
if ($colCat && $colCat->num_rows === 0) {
    $conn->query("ALTER TABLE products ADD COLUMN category_id INT UNSIGNED NULL AFTER image");
    // try add FK silently
    @ $conn->query("ALTER TABLE products ADD CONSTRAINT fk_products_category FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE SET NULL ON UPDATE CASCADE");
}

// Handle add category
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'add_category') {
    $cat_name = trim($_POST['cat_name'] ?? '');
    $cat_slug = trim($_POST['cat_slug'] ?? '');
    if ($cat_name !== '') {
        $stmtc = $conn->prepare('INSERT INTO categories (name, slug) VALUES (?, ?)');
        $stmtc->bind_param('ss', $cat_name, $cat_slug);
        $stmtc->execute();
        $stmtc->close();
        header('Location: products.php');
        exit;
    }
}

// Handle Add product
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'add') {
    $name = trim($_POST['name'] ?? '');
    $category_id = (int) ($_POST['category_id'] ?? 0);
    $description = trim($_POST['description'] ?? '');
    $price = (float) ($_POST['price'] ?? 0);
    $quantity = (int) ($_POST['quantity'] ?? 0);
    $image_path = '';

    // Handle uploaded file (optional)
    if (!empty($_FILES['image_file']) && $_FILES['image_file']['error'] === UPLOAD_ERR_OK) {
        $tmp = $_FILES['image_file']['tmp_name'];
        $orig = $_FILES['image_file']['name'];
        $ext = strtolower(pathinfo($orig, PATHINFO_EXTENSION));
        $allowed = ['jpg','jpeg','png','gif','webp'];
        if (in_array($ext, $allowed)) {
            $newName = uniqid('prod_', true) . '.' . $ext;
            $destDir = __DIR__ . '/../../assets/images/uploads/';
            if (!is_dir($destDir)) mkdir($destDir, 0755, true);
            $dest = $destDir . $newName;
            if (move_uploaded_file($tmp, $dest)) {
                // store path relative to project root for web
                $image_path = '../assets/images/uploads/' . $newName;
            }
        }
    } else {
        // optional text field fallback
        $image_path = trim($_POST['image'] ?? '');
    }

    if ($name !== '') {
        $stmt = $conn->prepare('INSERT INTO products (name, category_id, description, price, quantity, image) VALUES (?, ?, ?, ?, ?, ?)');
        $stmt->bind_param('sisdis', $name, $category_id, $description, $price, $quantity, $image_path);
        $stmt->execute();
        $stmt->close();
        header('Location: products.php');
        exit;
    }
}

// Handle Update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'edit') {
    $id = (int) ($_POST['id'] ?? 0);
    $name = trim($_POST['name'] ?? '');
    $category_id = (int) ($_POST['category_id'] ?? 0);
    $description = trim($_POST['description'] ?? '');
    $price = (float) ($_POST['price'] ?? 0);
    $quantity = (int) ($_POST['quantity'] ?? 0);
    $image_path = trim($_POST['image'] ?? '');

    // Handle uploaded file (optional)
    if (!empty($_FILES['image_file']) && $_FILES['image_file']['error'] === UPLOAD_ERR_OK) {
        $tmp = $_FILES['image_file']['tmp_name'];
        $orig = $_FILES['image_file']['name'];
        $ext = strtolower(pathinfo($orig, PATHINFO_EXTENSION));
        $allowed = ['jpg','jpeg','png','gif','webp'];
        if (in_array($ext, $allowed)) {
            $newName = uniqid('prod_', true) . '.' . $ext;
            $destDir = __DIR__ . '/../../assets/images/uploads/';
            if (!is_dir($destDir)) mkdir($destDir, 0755, true);
            $dest = $destDir . $newName;
            if (move_uploaded_file($tmp, $dest)) {
                $image_path = '../assets/images/uploads/' . $newName;
            }
        }
    }

    if ($id > 0 && $name !== '') {
        $stmt = $conn->prepare('UPDATE products SET name = ?, category_id = ?, description = ?, price = ?, quantity = ?, image = ? WHERE id = ?');
        $stmt->bind_param('sisdisi', $name, $category_id, $description, $price, $quantity, $image_path, $id);
        $stmt->execute();
        $stmt->close();
        header('Location: products.php');
        exit;
    }
}

// Handle Delete product
if (isset($_GET['delete'])) {
    $del_id = (int) $_GET['delete'];
    if ($del_id > 0) {
        $stmt = $conn->prepare('DELETE FROM products WHERE id = ?');
        $stmt->bind_param('i', $del_id);
        $stmt->execute();
        $stmt->close();
        header('Location: products.php');
        exit;
    }
}

// Handle delete category
if (isset($_GET['del_cat'])) {
    $del_cat = (int) $_GET['del_cat'];
    if ($del_cat > 0) {
        $conn->query("DELETE FROM categories WHERE id = " . $del_cat);
        header('Location: products.php');
        exit;
    }
}

// Fetch products
$result = $conn->query('SELECT id, name, description, price, quantity, image, created_at, category_id FROM products ORDER BY id DESC');
$products = [];
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

// Fetch categories for the select lists
$catsRes = $conn->query('SELECT id, name FROM categories ORDER BY name ASC');
$categories = [];
if ($catsRes) {
    while ($c = $catsRes->fetch_assoc()) $categories[] = $c;
}

// simple id->name map for display
$catMap = [];
foreach ($categories as $c) $catMap[(int)$c['id']] = $c['name'];

$editing = null;
if (isset($_GET['edit'])) {
    $edit_id = (int) $_GET['edit'];
    foreach ($products as $p) {
        if ((int)$p['id'] === $edit_id) {
            $editing = $p; break;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>إدارة المنتجات</title>
    <link rel="stylesheet" href="admin-style.css">
</head>
<body>
<div class="container-admin">
    <h1>لوحة تحكم - المنتجات</h1>
    <div class="top-actions">
        <div class="note"><a class="btn-ghost" href="index.php">العودة للوحة</a></div>
        <div class="note"><a class="btn-ghost" href="../logout.php">تسجيل خروج</a></div>
        <div class="note">مجموع المنتجات: <?= count($products) ?></div>
    </div>

    <div class="grid">
        <!-- left: products -->
        <div>
            <div class="panel">
                <h2 class="small">قائمة المنتجات</h2>
                <div class="products-grid">
                    <?php if (!empty($products)): foreach ($products as $p): ?>
                        <div class="card">
                            <div class="media">
                                <img src="<?= htmlspecialchars($p['image'] ?: '../assets/images/uploads/placeholder.png') ?>" alt="<?= htmlspecialchars($p['name']) ?>">
                            </div>
                            <div class="body">
                                <h3><?= htmlspecialchars($p['name']) ?></h3>
                                <div class="price"><?= htmlspecialchars($p['price']) ?> ر.ي</div>
                                <div class="desc"><?= nl2br(htmlspecialchars($p['description'])) ?></div>
                                <div class="meta">
                                    <div class="small">الكمية: <?= (int)$p['quantity'] ?></div>
                                    <div class="small">الفئة: <?= htmlspecialchars($catMap[(int)$p['category_id']] ?? '-') ?></div>
                                </div>
                                <div class="actions">
                                    <a href="products.php?edit=<?= htmlspecialchars($p['id']) ?>">تعديل</a>
                                    <a class="danger" href="products.php?delete=<?= htmlspecialchars($p['id']) ?>" onclick="return confirm('هل أنت متأكد من الحذف؟')">حذف</a>
                                    <a href="../deliveryOrder.php?product=<?= htmlspecialchars($p['id']) ?>">عرض على الموقع</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; else: ?>
                        <div class="note">لا توجد منتجات بعد.</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- right: forms & categories -->
        <aside>
            <div class="panel">
                <?php if ($editing): ?>
                    <h2>تعديل المنتج #<?= htmlspecialchars($editing['id']) ?></h2>
                    <form method="post" enctype="multipart/form-data">
                        <input type="hidden" name="action" value="edit">
                        <input type="hidden" name="id" value="<?= htmlspecialchars($editing['id']) ?>">
                        <label>الاسم:<br><input type="text" name="name" value="<?= htmlspecialchars($editing['name']) ?>" required></label>
                        <label>الفئة:<br>
                            <select name="category_id">
                                <option value="0">-- بدون فئة --</option>
                                <?php foreach ($categories as $c): ?>
                                    <option value="<?= htmlspecialchars($c['id']) ?>" <?= ($editing['category_id'] == $c['id']) ? 'selected' : '' ?>><?= htmlspecialchars($c['name']) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </label>
                        <label>الوصف:<br><textarea name="description"><?= htmlspecialchars($editing['description']) ?></textarea></label>
                        <label>السعر:<br><input type="number" step="0.01" name="price" value="<?= htmlspecialchars($editing['price']) ?>"></label>
                        <label>الكمية:<br><input type="number" name="quantity" value="<?= htmlspecialchars($editing['quantity'] ?? 0) ?>" min="0"></label>
                        <label>صورة جديدة (اختياري):<br><input type="file" name="image_file" accept="image/*"></label>
                        <?php if ($editing['image']): ?>
                            <div>الصورة الحالية:<br><img class="preview" src="<?= htmlspecialchars($editing['image']) ?>" alt=""></div>
                        <?php endif; ?>
                        <input type="hidden" name="image" value="<?= htmlspecialchars($editing['image']) ?>">
                        <div style="margin-top:10px"><button type="submit">حفظ التعديل</button> <a class="btn-ghost" href="products.php">إلغاء</a></div>
                    </form>
                <?php else: ?>
                    <h2>إضافة منتج جديد</h2>
                    <form method="post" enctype="multipart/form-data">
                        <input type="hidden" name="action" value="add">
                        <label>الاسم:<br><input type="text" name="name" required></label>
                        <label>الفئة:<br>
                            <select name="category_id">
                                <option value="0">-- بدون فئة --</option>
                                <?php foreach ($categories as $c): ?>
                                    <option value="<?= htmlspecialchars($c['id']) ?>"><?= htmlspecialchars($c['name']) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </label>
                        <label>الوصف:<br><textarea name="description"></textarea></label>
                        <label>السعر:<br><input type="number" step="0.01" name="price" value="0.00"></label>
                        <label>الكمية:<br><input type="number" name="quantity" value="0" min="0"></label>
                        <label>صورة المنتج:<br><input type="file" name="image_file" accept="image/*"></label>
                        <label>أو رابط/مسار صورة (اختياري):<br><input type="text" name="image"></label>
                        <div style="margin-top:10px"><button type="submit">إضافة</button></div>
                    </form>
                <?php endif; ?>
            </div>

            <div class="panel">
                <h3 class="small">إدارة الفئات</h3>
                <div class="categories-list">
                    <?php if (!empty($categories)): foreach ($categories as $c): ?>
                        <div class="category-item"><div><?= htmlspecialchars($c['name']) ?></div><div><a class="btn-ghost" href="products.php?del_cat=<?= htmlspecialchars($c['id']) ?>" onclick="return confirm('حذف الفئة سيترك المنتجات بدون فئة. موافق؟')">حذف</a></div></div>
                    <?php endforeach; else: ?>
                        <div class="note">لا توجد فئات بعد.</div>
                    <?php endif; ?></div>

                <form method="post" style="margin-top:12px">
                    <input type="hidden" name="action" value="add_category">
                    <label>اسم الفئة:<br><input type="text" name="cat_name" required></label>
                    <label>slug (اختياري):<br><input type="text" name="cat_slug" placeholder="مثال: sweets"></label>
                    <div style="margin-top:10px"><button type="submit">إضافة فئة</button></div>
                </form>
            </div>
        </aside>
    </div>

</div>
</body>
</html>