<?php
include "../koneksi/koneksi.php";
	
	if(isset($_POST['id'])){

	$edit = "UPDATE register SET nama='$_POST[nama]', username='$_POST[username]', password='$_POST[password]', jenis_kelamin='$_POST[jenis_kelamin]', email='$_POST[email]', no_telp='$_POST[no_telp]' WHERE id='$_POST[id]'";
	
$hasil=mysqli_query($conn, $edit);

if($hasil){
		echo"<script>alert('data berhasil diedit');window.location.href='?module=profil_user#pos';</script>";
}
	}
?>