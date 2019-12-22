<?php
include "koneksi/koneksi.php";

$mysql = "INSERT INTO register (nama, username, password, jenis_kelamin, email, no_telp) VALUES
('$_POST[nama]','$_POST[username]', '$_POST[password]', '$_POST[jenis_kelamin]', '$_POST[email]','$_POST[no_telp]')";

if(!mysqli_query($conn, $mysql))
die (mysqli_error($conn));

echo"<script>alert('Selamat, Anda telah terdaftar, Silakan Tunggu Validasi Akun Anda dari Admin');window.location.href='index.php';</script>";

mysqli_close();
?>