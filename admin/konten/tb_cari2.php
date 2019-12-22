		<?php
		$i=0;
		while($buff=mysqli_fetch_array($hasil)){
			
		$i++;
		if($i==1){
			echo '<table width="600px" border="1" style="table-layout:fixed">
			<col width="35px" />
			<col width="140px" />
			<col width="140px" />
			<col width="100px" />
			<col width="35px" />
			<col width="160px" />
			<col width="122px" />
			<tr>
				<td style="overflow:hidden; text-overflow:ellipsis;">id</td>
				<td style="overflow:hidden; text-overflow:ellipsis;">nama depan</td>
				<td style="overflow:hidden; text-overflow:ellipsis;">nama belakang</td>
				<td style="overflow:hidden; text-overflow:ellipsis;">username</td>
				<td style="overflow:hidden; text-overflow:ellipsis;">jk</td>
				<td style="overflow:hidden; text-overflow:ellipsis;">email</td>
				<td style="overflow:hidden; text-overflow:ellipsis;">aksi</td>
			</tr>
		</table>';
		}
			
		?>

		<table width="600px" border="1" style="table-layout:fixed" >
			<col width="35px" />
			<col width="140px" />
			<col width="140px" />
			<col width="100px" />
			<col width="35px" />
			<col width="160px" />
			<col width="60px" />
			<col width="60px" />
			<tr>
				<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $i;?></td>
				<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['namadep'];?></td>
				<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['namabel'];?></td>
				<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['username'];?></td>
				<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['jk'];?></td>
				<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['email'];?></td>
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