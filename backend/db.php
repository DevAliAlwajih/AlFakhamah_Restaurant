<?php
// backend/db.php
// تستخدم mysqli، يمكنك تعديلها لـ PDO إذا رغبت.

$host = 'localhost';
$user = 'root';
$pass = '';          // افتراضي في XAMPP
$db   = 'fakhamah';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
$conn->set_charset('utf8mb4');