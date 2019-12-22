<?php
	include"../koneksi/koneksi.php";

	$id=$_GET['id'];
	$hapus="DELETE FROM register WHERE id='$id'";
	$hasil=mysqli_query($conn,$hapus);

	if($hapus){
		echo
		"<script>alert('data berhasil dihapus');window.location.href='?module=hakakses_admin#pos';</script>";
}?>