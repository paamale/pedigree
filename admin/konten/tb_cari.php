		<?php
		$i=0;
		while($buff=mysqli_fetch_array($hasil)){
			
		$i++;
		if($i==1){
			echo '<table border="1" width="100%" style="table-layout:fixed>
			<tr>
				<td  width="30px"  align="center">No</td>
				<td  width="120px"   align="center">nama</td>
				<td  width="100px"   align="center">username</td>
				<td  width="90px"  align="center">password</td>
				<td  width="90px"   align="center">jenis kelamin</td>
				<td  width="40px"   align="center">email</td>
				<td  width="100px"   align="center">nomor telepon</td>
				<td  align="center">Aksi</td>
			</tr>';
		}
			
		?>

			<tr>
		<input type="hidden" name="id" value="<?php echo $buff['id'];?>"/>
		<td  width="30px" align="center" ><?php echo $i;?></td> 
		<td  width="120px" align="center" ><?php echo $buff['nama'];?></td>
		<td  width="100px" align="center" ><?php echo $buff['username'];?></td>
		<td  width="90px" align="center" ><?php echo $buff['password'];?></td>
		<td  width="90px" align="center" ><?php echo $buff['jenis_kelamin'];?></td>
		<td  width="40px" align="center" ><?php echo $buff['email'];?></td>
		<td  width="40px" align="center" ><?php echo $buff['no_telp'];?></td>
		<td  align="center" style="overflow:hidden; text-overflow:ellipsis;"><a href="?module=hapus&id=<?php echo $buff['id'];?>">Hapus</td>
	</tr>
		<?php
		};
		if($i==0)
			echo "Username Not Found!";
		mysqli_close($conn);
		?><br/>