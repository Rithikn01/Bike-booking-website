<?php
// Database configuration settings
$host = 'localhost';       // Database host
$dbname = 'user_db';  // Database name
$username = 'root';        // Database username
$password = '';            // Database password (leave blank for default XAMPP/MAMP)

try {
    // Create a new PDO instance
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle connection errors
    die("Database connection failed: " . $e->getMessage());
}
?>
