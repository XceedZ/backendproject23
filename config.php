<?php
$servername = "localhost";
$username = "xceedz";
$password = "AlexC349";
$dbname = "auth";

// Buat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
?>
