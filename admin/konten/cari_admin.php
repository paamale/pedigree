
	<?php
	
	if(isset($_GET['username'])){
			
		include"../koneksi/koneksi.php";
		$username=$_GET['username'];
		$select="select*from register where username like '$username'";
		$hasil=mysqli_query($conn,$select);
		
		if($username==null)
			echo "Username tidak ditemukan";
		else
		include"tb_cari2.php";}
	?>