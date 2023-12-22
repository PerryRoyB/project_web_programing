<?php
// database.php
$dbhost = 'localhost';
$dbuser = '*****'; // isi dengan username phpmyadmin
$dbpass = '*****'; // isi dengan password phpmyadmin
$dbname = 'data_pelanggan_estehcimone';

// Menciptakan koneksi
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
