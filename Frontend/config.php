<?php
define('BASE_URL', 'http://localhost:3000/Frontend/');

// Database configuration
$host = "127.0.0.1";
$user = "root";
$pass = "";
$db   = "car_tuning_db";
$port = 3306; // change to 3307 if your MySQL uses 3307

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Start session (needed for login & cart)
session_start();