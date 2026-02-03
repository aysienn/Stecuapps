<?php
// config.php

$server   = "localhost";
$user     = "root";
$password = "root"; // sesuaikan dengan password MySQL kamu
$namadb   = "mahasiswaaburu";

// Membuat koneksi
$db = mysqli_connect($server, $user, $password, $namadb);

// Cek koneksi
if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>
