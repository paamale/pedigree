<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title> Untitled Document </title>
	</head>
<body>
<?php
$id=$_GET['id'];
include"../koneksi/koneksi.php";
$select="Select * from register where id='$id'";
$hasil=mysqli_query($conn,$select);
($buff=mysqli_fetch_array($hasil));{
?>
	<h2 align="center"> EDIT DATA </h2><br />
<form action="?module=edit2_user&id=" method="post">
<table align="center" width="487" border="0">
<input type="hidden" name="id" value="<?php echo $buff['id'];?>"/>


	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" value="<?php echo $buff['nama'];?>"/></td>
	</tr>
	<tr>
		<td>Username</td>
		<td><input type="text" name="username" value="<?php echo $buff['username'];?>"/></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password" value="<?php echo $buff['password'];?>"/></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td><input type="text" name="jenis_kelamin" value="<?php echo $buff['jenis_kelamin'];?>"/></td>
	</tr>
	<tr>
		<td>E-Mail</td>
		<td><input type="text" name="email" value="<?php echo $buff['email'];?>"/></td>
	</tr>
	<tr>
		<td>No. Telepon</td>
		<td><input type="text" name="no_telp" value="<?php echo $buff['no_telp'];?>"/></td>
	</tr>
	<tr>
		<td>Status</td>
		<td><input type="text" name="status" readonly="readonly" value="<?php echo $buff['status'];?>"/></td>
	</tr>
	
	<tr>
		
		<td height="68" align="right"> <input class="btn" type="reset" value="Reset" /></td>
		<td> <input class="btn" type="submit" value="Submit"  /></td>
	</tr>
</table>
</form>
<?php
};
mysqli_close($conn);


?>
</body>
</html>