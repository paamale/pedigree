<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Untitled Document</title>
	</head>
<body>
	<?php
		$id=$_GET['id'];
		include"../koneksi/koneksi.php";
		$select="select*from register where id='$id'";
		$hasil=mysqli_query($conn,$select);
		$buff=mysqli_fetch_array($hasil);
	?>
<h2> Edit Data </h2><br/>
<form action="?module=edit2_user" method="post">
<form action="?module=edit2_user" method="post">
<table width="487" border="0">
<input type="hidden" name="id" value="<?php echo $buff['id'];?>"/>
	<tr>
		<td width="150"> Nama </td>
		<td width="327"><input type="text" name="nama" value="<?php echo $buff['nama'];?>"/></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" value="<?php echo $buff['email'];?>"/></td>
	</tr>
	<tr>
		<td> username</td>
		<td><input type="text" name="username" value="<?php echo $buff['username'];?>"/></td>
	</tr>
	<tr>
		<td> password</td>
		<td><input type="text" name="password" value="<?php echo $buff['password'];?>"/></td>
	</tr>
	
	<tr>
		<td> jenis kelamin</td>
		<td><input type="text" name="jenis_kelamin" value="<?php echo $buff['jenis_kelamin'];?>"/></td>
	</tr>
	
	<tr>
		<td> no telp</td>
		<td><input type="text" name="no_telp" value="<?php echo $buff['no_telp'];?>"/></td>
	</tr>
	
	<tr>
	<td height="68" align="right"><input type="reset" value="reset" /></td>
	<td><input type="submit" value="submit" /></td>
	</tr>
	</table>
	</form>
	<?php
		mysqli_close($conn);
	?>
</body>
</html>