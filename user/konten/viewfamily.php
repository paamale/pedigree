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

<form action="?module=add_family#pos" method="post" class="style3">
	<button class="back">BACK</button>
</form>
<div align="center" class="style1">
		<h2>FAMILY</h2>
</div>

<?php 
    include "../koneksi/koneksi.php";

    $query = "SELECT * FROM family WHERE (no_family='$_SESSION[no_family]' and stat='$_POST[stat]')";
    $buff=(mysqli_fetch_assoc(mysqli_query($conn,$query)));
?>

<form action="?module=viewfamilyproc#pos" method="post" enctype="multipart/form-data">
    <input type="hidden" name="stat" value="<?php echo $_POST['stat'] ?>">
    <input type="hidden" name="no_family" value="<?php echo $_SESSION['no_family']?>">
	<!-- <p>&nbsp;</p> -->
		<b>

	<table width="496" border="0" align="center">
		<!-- <tr> 
			<td> <img src="../Malik.JPG" width="100px" height="100px" float="center" /> </td>	
		</tr> -->
		<tr>
			<td>Photo</td>
            <td><input type="file" name="file" value="><?php echo $buff['photo'] ?>"style="margin-left: 90px;"></td>        
        </tr>
		
		<input type="hidden" name='id_family' value="<?php echo $buff['id_family'];?>"/>
		
		<tr>
			<td >Nama : </td>
			<td><input type="text" name="nama" value="<?php echo $buff['nama'];?>" /></td>
		</tr>
		<tr>
			<td>TTL: </td>
			<td><input type="text" name="ttl" value="<?php echo $buff['ttl'];?>" /></td>
		</tr>
		<tr>
			<td>Alamat :</td>
			<td><input type="text" name="alamat" value="<?php echo $buff['alamat'];?>" /></td>
		</tr>


			<td height="90" align="right">
				<input type="reset" value="RESET" style="padding: 10px; background-color: #8ACD79;font-size: 14px; font-family: 'Lato'; margin-top: 15px;margin-left: 100px;"/>
			</td>
		
			<td height="90" align="center">
				<input type="submit" value="SUBMIT" style="padding: 10px; background-color: #8ACD79;font-size: 14px; font-family: 'Lato'; margin-top: 15px;margin-left: 100px;" />
			</td>


		<h2>Upload Foto</h2>
   		 <form action="proses_upload.php" method="post" enctype="multipart/form-data">
      	<table>
        <tr>
          <td>Pilih Foto : </td>
          <td> <input type="file" name="foto" value=""> </td>
        </tr>
    	</table>
    	</form>

		
	</table>
<!-- 	<button  height="90" align="left" class="button">ADD</button> -->
		</b>
</form>

		