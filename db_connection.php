<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Local XAMPP database credentials
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "smart_cultivation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Set charset
$conn->set_charset("utf8mb4");

?>