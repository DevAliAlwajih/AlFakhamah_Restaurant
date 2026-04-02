<?php
// backend/login.php
session_start();
require_once 'db.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        $error = 'يرجى إدخال اسم المستخدم وكلمة المرور.';
    } else {
        $stmt = $conn->prepare('SELECT id, password FROM admins WHERE username = ?');
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows === 1) {
            $stmt->bind_result($id, $hash);
            $stmt->fetch();
            if (password_verify($password, $hash)) {
                // تسجيل الدخول ناجح
                $_SESSION['admin_id']   = $id;
                $_SESSION['admin_user'] = $username;
                header('Location: admin/index.php');
                exit;
            }
        }
        $error = 'اسم المستخدم أو كلمة المرور غير صحيحة.';
    }
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="UTF-8">
    <title>دخول المدير</title>
</head>
<body>
    <h1>تسجيل الدخول</h1>
    <?php if ($error): ?>
        <p style="color:red;"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
    <form method="post">
        <label>اسم المستخدم:<br>
            <input type="text" name="username">
        </label><br><br>
        <label>كلمة المرور:<br>
            <input type="password" name="password">
        </label><br><br>
        <button type="submit">دخول</button>
    </form>
</body>
</html>