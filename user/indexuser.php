<head>
	<title>Selamat Datang</title>
	<link rel="stylesheet" type="text/css" href="style/style_user.css" />
	<link href="../fontawesome/css/all.css" rel="stylesheet"> 
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<!--load all styles -->
</head>


<body>
	<div id="container">
		<div id="header">
			<img src="../pink.gif" width="200px" height="180px" align="left"/>
			<h1>SELAMAT DATANG DI PEDIGREE FAMILY</h1>
			<br><br><br><br>
			
		</div>

		<div id="sidebar-sticky">
			<ul id="navmenu">
				<li><a href="?module=home_user#pos"><i class="fas fa-home"></i> Home</a></li>
				<li><a href="?module=profil_user#pos"> <i class="fas fa-user"></i> Profil</a></li>
				<li><a href="?module=add_family#pos"><i class="fas fa-plus-circle"></i> ADD </a></li>
				<li><a href="?module=cobaduluya#pos"><i class="fas fa-users"></i> Family Tree</a></li>
				<li><a href="?module=logout_user#pos"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
				
			</ul>
		</div>

		

		<div id="page">

			<?php if(isset($_GET['module']))
				include "konten/$_GET[module].php";
			else
				include "konten/home_user.php";
			?>
		</div>

		<div id="clear">
			
		</div>

		<div id="footer" >
			Ahmad Malik Fajar & Nida Putri Dzakiyyah<br/>
			Teknik Informatika 2018<br/>
			UIN Syarif Hidayatullah Jakarta<br/>
			&copy; 2019 
		</div>
	</div>
</body>
