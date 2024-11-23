<?php
$host = 'localhost'; // database host
$username = 'root'; // database username
$password = ''; // database password
$database = 'webprojek'; // database name
// buat koneksi
$conn = new mysqli($host, $username, $password, $database);
// Check koneksi
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>