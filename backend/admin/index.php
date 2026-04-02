<?php
// backend/admin/index.php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header('Location: ../login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
      <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="UTF-8">
    <title>لوحة التحكم</title>
    <link rel="stylesheet" href="admin-style.css">
</head>
<body>
    <div class="container-admin panel">
        <h1>مرحباً، <?=htmlspecialchars($_SESSION['admin_user'])?></h1>
        <ul>
            <li><a href="products.php">إدارة المنتجات</a></li>
            <li><a href="../logout.php">تسجيل خروج</a></li>
        </ul>
    </div>
</body>
</html>