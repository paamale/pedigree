<?php 	
	include"../koneksi/koneksi.php";
	$select = "SELECT * FROM family WHERE (id ='$_SESSION[id]') and (keluarga ='$role')";
	$buff=mysqli_fetch_array(mysqli_query($conn, $select));
?>

<img src="file/<?php echo $buff['photo']; ?>" width="100px" height="100px">
<p><?php echo $buff['nama']; ?></p>
