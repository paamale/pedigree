<?php
include "../koneksi/koneksi.php";
if(isset($_POST['username'])){
	$edit="update register set 
	nama='$_POST[nama]',username='$_POST[username]',password='$_POST[password]',
	jenis_kelamin='$_POST[jenis_kelamin]',email='$_POST[email]',no_telp='$_POST[no_telp]', where username='$_POST[username]'";
	
$hasil=mysqli_query($edit);
if($hasil){
	echo"<script>alert('Data Berhasil di Edit');window.location.href='indexuser.php?module=profil_user#pos';</script>";
}
}?>