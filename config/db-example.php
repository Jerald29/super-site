<?php
// Database connection settings (example file)
$dsn = "mysql:host=YOUR_HOST;dbname=YOUR_DATABASE";
$dbusername = "YOUR_USERNAME";
$dbpassword = "YOUR_PASSWORD";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES 'utf8'");
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}