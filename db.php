<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'study_module';

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
