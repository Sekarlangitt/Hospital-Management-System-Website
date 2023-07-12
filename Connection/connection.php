<?php
// Detail koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myhmsdb";

// Buat koneksi
$con = mysqli_connect($servername, $username, $password, $dbname);

// Periksa koneksi
if (!$con) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>