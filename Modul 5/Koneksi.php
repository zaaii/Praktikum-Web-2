<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perpus";

$koneksi = mysqli_connect($servername, $username, $password) or die ('Koneksi Gagal'.mysqli_connect_error());

$database = mysqli_select_db($koneksi, $dbname) or die ('Database Tidak Ditemukan'.mysqli_error($koneksi));
?>