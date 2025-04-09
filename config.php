<?php
$host = "localhost";
$user = "root"; // atau 'annisa' kalau kamu buat user baru
$pass = "";     // kosong karena tadi kamu pakai auth_socket
$db   = "web_porto";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
