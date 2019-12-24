<?php 
	include '../koneksi/koneksi.php';

	$foto = $_FILES['file']['name'];
	$file_tmp = $_FILES['file']['tmp_name'];
	move_uploaded_file($file_tmp, 'file/'.$foto);

	$query = "UPDATE family SET nama='$_POST[nama]', ttl='$_POST[ttl]', alamat='$_POST[alamat]', no_telp='$_POST[no_telp]', photo='$foto'
		WHERE (id='$_POST[id]') and (keluarga='$_POST[keluarga]')";
	$hasil=mysqli_query($conn, $query);
	if($hasil){
		echo"<script>alert('data berhasil diedit');window.location.href='?module=familytree#pos';</script>";
}
 ?>