<?php
$servername = "localhost";
$username = "root"; // Ubah sesuai dengan username MySQL Anda
$password = ""; // Ubah sesuai dengan password MySQL Anda
$dbname = "registrasi";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
