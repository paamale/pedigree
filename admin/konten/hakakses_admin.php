<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Untitled Document</title>
	</head>
	
	<body>
		<div align="center" class="style1">
		<h2>MEMBER LIST</h2>

		<p align="center">Telusuri Nama</p>
		<form action="indexadmin.php" method="get">
		<input type="hidden" name="module" value="cari_admin" />
		<input type="text" name="username" placeholder="type username" />
		<input type="submit" value="cari" />
		</form>

		</div>

		<?php
		include"../koneksi/koneksi.php";
		$select="SELECT * FROM register WHERE approval='1'";
		$hasil=mysqli_query($conn, $select);
		$no =1;
		?>
		
		<form action="?module=proses_approve" method="post"> 
		<table border="1" width="100%">
			<tr>
				<td  width="30px"  align="center">No</td>
				<td  width="120px"   align="center">nama</td>
				<td  width="100px"   align="center">username</td>
				<td  width="90px"  align="center">password</td>
				<td  width="90px"   align="center">jenis kelamin</td>
				<td  width="40px"   align="center">email</td>
				<td  width="100px"   align="center">nomor telepon</td>
				<td  align="center">Aksi</td>
			</tr>
		

		<?php

while($buff=mysqli_fetch_array($hasil)){

	$no++;
?>
	<tr>
		<input type="hidden" name="id" value="<?php echo $buff['id'];?>"/>
		<td  width="30px" align="center" ><?php echo $no;?></td> 
		<td  width="120px" align="center" ><?php echo $buff['nama'];?></td>
		<td  width="100px" align="center" ><?php echo $buff['username'];?></td>
		<td  width="90px" align="center" ><?php echo $buff['password'];?></td>
		<td  width="90px" align="center" ><?php echo $buff['jenis_kelamin'];?></td>
		<td  width="40px" align="center" ><?php echo $buff['email'];?></td>
		<td  width="40px" align="center" ><?php echo $buff['no_telp'];?></td>
		<td  align="center" style="overflow:hidden; text-overflow:ellipsis;"><a href="?module=hapus&id=<?php echo $buff['id'];?>">Hapus</td>
	</tr>

		<?php 
		$no++;
		};
		mysqli_close($conn);
		?><br />

</table>
</body>
</html>