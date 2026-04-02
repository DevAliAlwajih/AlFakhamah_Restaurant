<?php
require_once __DIR__ . '/db.php';

// Accepts POST with `email_address` (from footer forms)
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php');
    exit;
}

$email = trim($_POST['email_address'] ?? '');
if ($email === '') {
    header('Location: ../index.php?sub_error=1');
    exit;
}

// Create subscriptions table if missing (safe)
$create = "CREATE TABLE IF NOT EXISTS subscriptions (
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(100) NOT NULL,
    phone VARCHAR(30) DEFAULT '',
    start_date DATE NOT NULL,
    status ENUM('active','paused','cancelled') NOT NULL DEFAULT 'active',
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
$conn->query($create);

$stmt = $conn->prepare('INSERT INTO subscriptions (customer_name, phone, start_date, status) VALUES (?, ?, CURDATE(), "active")');
$name = $email;
$phone = '';
$stmt->bind_param('ss', $name, $phone);
if ($stmt->execute()) {
    $stmt->close();
    header('Location: ../index.php?sub_ok=1');
    exit;
} else {
    header('Location: ../index.php?sub_error=1');
    exit;
}
