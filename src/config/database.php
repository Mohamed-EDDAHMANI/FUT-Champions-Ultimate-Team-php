<?php
$host = '127.0.0.1';
$db = 'test';
$user = 'root';
$password = '';
$port = 3306;

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // echo "Connected successfully!";
}


