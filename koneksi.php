<?php
$hostmysql = "localhost";
$username = "root";
$password = "";
$database = "db_praktik";


$conn = mysqli_connect($hostmysql, $username, $password);

if (!$conn) die ("Koneksi gagal");
mysqli_select_db($conn, $database) or die ("Database tidak ditemukan");
?>