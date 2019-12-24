<style type="text/css">
<!--
.style1{
	color: black;
	font-weight: bold;
	font-size: 35px;
	margin-top: 30px;
	padding-bottom: 10px;	
}

.style2{
	line-height: 5px;
	padding-left: 10px;
	font-size: 20px;
	color: white;
}

.style3 button{
	font-size: 20px;
	color: black;
	font-weight: bold;
	float: left;
	font-weight: bold;
	background-color: #EDDBB2;
	border-radius: 5px;
    box-shadow: 0px 4px 12px 0px rgba(0, 0, 0, 0.2);
    text-align: center;
    font-size: 19px;
    font-family: monospace;
    margin: 5px 2px;
    padding: 10px 15px;
    cursor: pointer;
}
	
.style3 button:hover{
	box-sizing: border-box;
	background-color: #FBCE75;
	border-radius: 5px;
    box-shadow: 0px 4px 12px 0px rgba(0, 0, 0, 0.2);
    text-align: center;
    font-size: 19px;
    font-family: monospace;
    margin: 5px 2px;
    padding: 10px 15px;
}
-->
</style>

<form action="?module=cobaduluyas#pos" method="post" class="style3">
	<button class="back">BACK</button>
</form>
<div align="center" class="style1">
		<h2>FAMILY</h2>
</div>

<?php 
    include "../koneksi/koneksi.php";
    session_start();
    $role = $_GET['role'];
	$id = $_SESSION['id'];
	$query = "SELECT * FROM family WHERE (id ='$id') and (keluarga ='$role')";
	$result = mysqli_query($conn,$query);
	$buff = mysqli_fetch_array($result);

	if(mysqli_num_rows($result)==1){?>
		<form action="?module=editfamilyproc#pos" method="post" enctype="multipart/form-data" class="style2">
			<p>&nbsp;</p>
				<b>

			<table width="496" border="0" align="center">
				<input type="hidden" name="id" value="<?php echo $id ?>">
				<input type="hidden" name="keluarga" value="<?php echo $role ?>">
				<tr>
					<h2>Upload Foto</h2>
					<td>Foto :</td>
					<td><input type="file" name="file" /></td>
				</tr>
				<tr>
					<td width="163">Nama     :</td>
					<td width="317"><input type="text" name="nama" value="<?php echo $buff['nama']?>" /></td>
				</tr>
				<tr>
					<td>TTL :</td>
					<td><input type="text" name="ttl" value="<?php echo $buff['ttl']?>"/></td>
				</tr>
				<tr>
					<td>Alamat :</td>
					<td><input type="text" name="alamat" value="<?php echo $buff['alamat']?>"/></td>
				</tr>
				<tr>
					<td>Nomor Telepon :</td>
					<td><input type="text" name="no_telp" value="<?php echo $buff['no_telp']?>"/></td>
				</tr>
				<tr>
					<td height="90" align="right">
						<input type="reset" value="RESET" />
					</td>
				</tr>
			</table>
			<input type="submit" name="submit" value="EDIT" class="tombol">
				</b>
		</form>

<?php } 

	else{ ?>
<form action="?module=addfamilyproc#pos" method="post" enctype="multipart/form-data" class="style2">
			<p>&nbsp;</p>
				<b>

			<table width="496" border="0" align="center">
				<input type="hidden" name="id_user" value="<?php echo $id_user ?>">
				<input type="hidden" name="family_role" value="<?php echo $role ?>">
				<tr>
					<h2>Upload Foto</h2>
					<td>Foto :</td>
					<td><input type="file" name="file" /></td>
				</tr>
				<tr>
					<td width="163">Nama     :</td>
					<td width="317"><input type="text" name="nama" /></td>
				</tr>
				<tr>
					<td>TTL :</td>
					<td><input type="text" name="ttl" /></td>
				</tr>
				<tr>
					<td>Alamat :</td>
					<td><input type="text" name="alamat" /></td>
				</tr>
				<tr>
					<td>Nomor Telepon :</td>
					<td><input type="text" name="no_telp" /></td>
				</tr>
				<tr>
					<td height="90" align="right">
						<input type="reset" value="RESET" />
					</td>
				</tr>
			</table>
			<input type="submit" name="submit" value="ADD" class="tombol">
				</b>
		</form>

<?php } ?>	




		