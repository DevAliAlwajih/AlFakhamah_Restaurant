<?php
// backend/admin/create_admin.php
// استخدم هذا الملف لمرة واحدة لإنشاء حساب مدير. بعد الإنشاء احذف الملف.
session_start();
require_once __DIR__ . '/../db.php';

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    if ($username === '' || $password === '') {
        $message = 'يرجى إدخال اسم المستخدم وكلمة المرور.';
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare('INSERT INTO admins (username, password) VALUES (?, ?)');
        $stmt->bind_param('ss', $username, $hash);
        if ($stmt->execute()) {
            $message = "تم إنشاء المستخدم '$username' بنجاح. احذف هذا الملف بعد الاستخدام.";
        } else {
            if ($conn->errno === 1062) {
                $message = 'اسم المستخدم موجود بالفعل.';
            } else {
                $message = 'خطأ في الإنشاء: ' . htmlspecialchars($conn->error);
            }
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="utf-8">
<title>إنشاء مدير</title>
<link rel="stylesheet" href="admin-style.css">
</head>
<body>
    <div class="container-admin panel">
    <h1>إنشاء حساب مدير (مرة واحدة)</h1>
    <?php if ($message): ?>
        <p class="note" style="color:lightgreen"><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>
    <form method="post">
        <label>اسم المستخدم:<br><input type="text" name="username" required></label><br><br>
        <label>كلمة المرور:<br><input type="password" name="password" required></label><br><br>
        <button type="submit">إنشاء</button>
    </form>
    <p class="note">بعد الإنشاء، احذف هذا الملف لأسباب أمنيّة: <code>backend/admin/create_admin.php</code></p>
    </div>
</body>
</html>