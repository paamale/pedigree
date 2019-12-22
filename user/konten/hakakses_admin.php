<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title> Untitled Document </title>
</head>

<body>
<h2 align="center"> DAFTAR SELURUH ANGGOTA </h2><br />
	<?php
	
	include"koneksi/koneksi.php";
	$select="select * from register where approval=1";
	$hasil=mysqli_query($select);
	$no=0;
	?>

<form action="?module=proses_hakakses" method="post"> 
<table border="1" width="100%">
	<tr>
		<td  width="30px"  align="center">No</td>
		<td  width="120px"   align="center">nama</td>
		<td  width="100px"   align="center">username</td>
		<td  width="90px"  align="center">password</td>
		<td  width="90px"   align="center">jenis kelamin</td>
		<td  width="40px"   align="center">email</td>
		<td  width="100px"   align="center">nomor telepon</td>
		<td  width="100px"   align="center">status</td>
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
		<td  width="90px" align="center" ><?php echo $buff['jk'];?></td>
		<td  width="40px" align="center" ><?php echo $buff['email'];?></td>
		<td  width="40px" align="center" ><?php echo $buff['notel'];?></td>
		<td  width="100px" align="center" ><?php echo $buff['status'];?></td>
		<td align = "center"><input class="btn" type="button" value="Jadikan Admin" onclick="jadiadmin(<?php echo $buff['id'];?>)" /></td>

	</tr>

	<script type="text/javascript">
	
	function jadiadmin(obj){
		window.location.href="?module=proses_hakakses&id="+obj;
	}
</script>

	<?php
};
mysql_close();
?>
</table><br />
</body>
</html>