		<?php
		$i=0;
		while($buff=mysqli_fetch_array($hasil)){
			
		$i++;
		if($i==1){
			echo '<table width="760px" border="1" style="table-layout:fixed">
			<col width="30px" />
			<col width="120px" />
			<col width="100px" />
			<col width="100px" />
			<col width="90px" />
			<col width="150px" />
			<col width="120px" />
			<col width="112px" />
			<tr>
				<td style="overflow:hidden; text-overflow:ellipsis;">id</td>
				<td style="overflow:hidden; text-overflow:ellipsis;">nama</td>
				<td style="overflow:hidden; text-overflow:ellipsis;">username</td>
				<td style="overflow:hidden; text-overflow:ellipsis;">password</td>
				<td style="overflow:hidden; text-overflow:ellipsis;">jenis kelamin</td>
				<td style="overflow:hidden; text-overflow:ellipsis;">email</td>
				<td style="overflow:hidden; text-overflow:ellipsis;">nomor telepon</td>
				<td style="overflow:hidden; text-overflow:ellipsis;">aksi</td>
			</tr>
		</table>';
		}
			
		?>

		<table width="760px" border="1" style="table-layout:fixed" >
			<col width="30px" />
			<col width="120px" />
			<col width="100px" />
			<col width="100px" />
			<col width="90px" />
			<col width="150px" />
			<col width="120px" />
			<col width="50px" />
			<col width="60px" />
			<tr>
				<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $i;?></td>
				<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['nama'];?></td>
				<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['username'];?></td>
				<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['password'];?></td>
				<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['jenis_kelamin'];?></td>
				<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['email'];?></td>
				<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['no_telp'];?></td>
				<td style="overflow:hidden; text-overflow:ellipsis;"><a href="?module=edit&id=<?php echo $buff['id'];?>">edit</td>
				<td style="overflow:hidden; text-overflow:ellipsis;"><a href="?module=hapus&id=<?php echo $buff['id'];?>">hapus</td>
			</tr>
		</table>
		<?php
		};
		if($i==0)
			echo "Username Not Found!";
		mysqli_close($conn);
		?><br/>