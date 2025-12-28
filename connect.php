<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "ishi_clinic";

try {
    // Create PDO connection
    $conn = new PDO(
        "mysql:host=$servername;dbname=$dbname",
        $username,
        $password
    );

    // Set error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "Database connected successfully!";
} catch (PDOException $e) {
    // If connection fails
    die("Connection failed: " . $e->getMessage());
}
?>
