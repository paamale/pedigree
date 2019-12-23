<style type="text/css">
.tree{
	margin-left: 40px;
}

.tree ul {
	padding-top: 20px; 
	position: relative;
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
	background: rgba(30,30,30, .55);


}

.tree li {
	float: left; 
	text-align: center;
	list-style-type: none;
	position: relative;
	padding: 20px 5px 0 5px;

	
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

/*We will use ::before and ::after to draw the connectors*/

.tree li::before, .tree li::after{
	content: '';
	position: absolute; 
	top: 0; 
	right: 50%;
	border-top: 3px solid #566B3F;
	width: 50%; 
	height: 20px;
}
.tree li::after{
	right: auto; 
	left: 50%;
	border-left: 3px solid #566B3F;
}

/*We need to remove left-right connectors from elements without 
any siblings*/
.tree li:only-child::after, .tree li:only-child::before {
	display: none;
}

/*Remove space from the top of single children*/
.tree li:only-child{ padding-top: 0;}

/*Remove left connector from first child and 
right connector from last child*/
.tree li:first-child::before, .tree li:last-child::after{
	border: 0 none;
}

/*Adding back the vertical connector to the last nodes*/
.tree li:last-child::before{
	border-right: 3px solid #566B3F;
	border-radius: 0 5px 0 0;
	-webkit-border-radius: 0 5px 0 0;
	-moz-border-radius: 0 5px 0 0;
}
.tree li:first-child::after{
	border-radius: 5px 0 0 0;
	-webkit-border-radius: 5px 0 0 0;
	-moz-border-radius: 5px 0 0 0;
}

/*Time to add downward connectors from parents*/
.tree ul ul::before{
	content: '';
	position: absolute; 
	top: 0; 
	left: 50%;
	border-left: 3px solid #566B3F; /*garis horizontal*/
	width: 0; height: 20px;
}

.tree li a{
	border: 3px solid #566B3F;
	padding: 5px 10px;
	text-decoration: none;
	color: #666;
	font-family: arial, verdana, tahoma;
	font-size: 18px;
	display: inline-block;
	min-height: 150px;
	min-width: 130px;

	background : #6F7E5E; /*ini background yg kotak*/

	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

/*Time for some hover effects*/
/*We will apply the hover effect the the lineage of the element also*/
.tree li a:hover, .tree li a:hover+ul li a {
	background: #c8e4f8; 
	color: #000; 
	border: 3px solid #94a0b4;
}
/*Connector styles on hover*/
.tree li a:hover+ul li::after, 
.tree li a:hover+ul li::before, 
.tree li a:hover+ul::before, 
.tree li a:hover+ul ul::before{
	border-color:  #94a0b4;
}
.print{
	float: right;
	margin-right: 10px;
	height: 60px;
	width: 66px;
	border: none;
	background: url(img/print.svg);
	background-repeat: no-repeat;
}
</style>

<body>
<form action="?module=print#pos" method="post" target="_BLANK">
	<button class="print"> </button>
</form>
	<?php 	
			session_start();
			include"content/koneksi.php";
			$id_user=$_SESSION['id_user'];
			$select = "SELECT * FROM family f inner join user_id ud on ud.id_user=f.id_user inner join family f on f.id_family=f.id_family WHERE id_user ='$id_user'";
			$buff=mysqli_fetch_array(mysqli_query($conn, $select));
	?>
	<div class="tree">
		<ul>
			<li>
				<a href="?module=viewfamily#pos"><img src="img/container.jpg" width="150px" height="150px"><br>
					<?php echo "Nabila cantik banget";?></a>
				<ul>
					<li>
						<a href="?module=viewfamily#pos"><?php echo $buff['ayah'];?></a>
						<ul>
							<li>
								<a href="?module=viewfamily#pos"><?php echo $buff['kakek_a'];?></a>
								<ul>
									<li>
										<a href="?module=viewfamily#pos"><?php echo $buff['ayah_ka'];?></a>
									</li>
									<li>
										<a href="?module=viewfamily#pos"><?php echo $buff['ibu_ka'];?></a>
									</li>
								</ul>
							</li>
							<li>
								<a href="?module=viewfamily#pos"><?php echo $buff['nenek_a'];?></a>
								<ul>
									<li>
										<a href="?module=viewfamily#pos"><?php echo $buff['ayah_na'];?></a>
									</li>
									<li>
										<a href="?module=viewfamily#pos"><?php echo $buff['ibu_na'];?></a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="?module=viewfamily#pos"><?php echo $buff['ibu'];?></a>
						<ul>
							<li>
								<a href="?module=viewfamily#pos"><?php echo $buff['kakek_i'];?></a>
								<ul>
									<li>
										<a href="?module=viewfamily#pos"><?php echo $buff['ayah_ki'];?></a>
									</li>
									<li>
										<a href="?module=viewfamily#pos"><?php echo $buff['ibu_ki'];?></a>
									</li>
								</ul>
							</li>
							<li>
								<a href="?module=viewfamily#pos"><?php echo $buff['nenek_i'];?></a>
								<ul>
									<li>
										<a href="?module=viewfamily#pos"><?php echo $buff['ayah_ni'];?></a>
									</li>
									<li>
										<a href="?module=viewfamily#pos"><?php echo $buff['ibu_ni'];?></a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</body>