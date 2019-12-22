<?php

	include "../koneksi/koneksi.php";

	$id = $_GET['id'];
	$sql = "UPDATE register SET approval='1', status='user' WHERE id='$id'";
	$hasil = mysqli_query($conn,$sql);

	if($hasil){
		header("refresh:1; url:lihatuser_admin.php");
	}
	else{
		echo "user gagal ter-approve";
	}
?>

