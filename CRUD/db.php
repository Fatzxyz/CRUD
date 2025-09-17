<?php
$host = "localhost";
$user = "root"; // default user
$pass = "";     // password MySQL (isi sesuai punya lo)
$db   = "crud_db";

// koneksi
$conn = new mysqli($host, $user, $pass, $db);

// cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
