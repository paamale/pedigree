<?php

include "../koneksi/koneksi.php";

$foto = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
move_uploaded_file($file_tmp, 'file/'.$foto);

$mysql = "INSERT INTO family
(nama, ttl, alamat, no_telp, photo, id, keluarga) VALUES ('$_POST[nama]', '$_POST[ttl]', '$_POST[alamat]','$_POST[no_telp]', '$foto', '$_POST[id]', '$_POST[keluarga]')";

 
if(!mysqli_query($conn, $mysql))
	die (mysqli_error($conn));
 
echo"<script>alert('Keluarga Berhasil Ditambahkan');
window.location.href='?module=familytree';
</script>";

mysqli_close($conn);
?>