<style type="text/css">

.style{
	margin-left: -240px;
		
}
.style ul{
	padding: 0 0 0 240px; 
	position: relative;
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
	
}

.style li{
	list-style-type: none;
	text-align: left;
	position: relative;
	
	
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;

}


.style li::after{
	content: '';
	position: absolute; 
	top: 50%; 
	right:auto;
	left: 171px;
	border-top: 1px solid #ccc;
	width: 30px; 
	height: 28%;
}



/*.style ul::after, .style::before{
	display: none;
}*/

.style li::before{
	content: '';
	position: absolute;
	left: 200px;
	right: auto;
	height: 58%;
	width: 38px;
	border-top: 1px solid #ccc;
	bottom:21% ;
	top: 21%
}

/*Adding back the vertical connector to the last nodes*/
.style li:last-child::before{
	position: absolute;
	border-left: 1px solid #ccc;
	border-bottom: 1px solid #ccc;
	border-radius: 0 5px 0 0;
	-webkit-border-radius: 0 5px 0 0;
	-moz-border-radius: 0 5px 0 0;
}
.style li:first-child::after{
	position: absolute;
	border-radius: 5px 0 0 0;
	-webkit-border-radius: 5px 0 0 0;
	-moz-border-radius: 5px 0 0 0;
}

.style li a:hover {
	background: #c8e4f8; 
	color: #000; 
	border: 3px solid #94a0b4;
}
/*.style li a:hover li::after, 
.style li a:hover li::before, 
.style li a:hover li::before, 
.style li a:hover li::before{
	border-color:  #94a0b4;
}*/




.style li a {
	border: 1px solid #ccc;
	padding: 5px 5px;
	min-height: 35px;
	width: 160px;
	text-decoration: none;
	color: #666;
	font-family: arial, verdana, tahoma;
	font-size: 18px;
	display: inline-block;
	text-align: center;

	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

/*before after conector li*/

/*.style ul::after{
	border: 1px solid #ccc;
}*/

</style>
<div class="style">
		<ul>
			<li>
					<ul>
				<li>
					<ul>
						<li>
							<ul>
								<li><a href="#">buyut laki-laki</a></li>
							</ul>
							<a href="#">Kekek</a>
							<ul>
								<li><a href="#">Buyut perempuan</a></li>
							</ul>
						</li>
					</ul>
					<a href="#">ayah</a>
					<ul>
						<li>
							<ul>
								<li><a href="#">buyut laki-laki</a></li>
							</ul>
							<a href="#">Nenek</a>
							<ul>
								<li><a href="#">Buyut Perempuan</a></li>
							</ul>
						</li>
					</ul>
				</li>
				</ul>
				<a href="#"><img src="../malik.jpg" width="80px" height="80px"><br>anak</a>
				<ul>
				<li>
					<ul>
						<li>
							<ul>
								<li><a href="#">buyut laki-laki</a></li>
							</ul>
							<a href="#">Kekek</a>
							<ul>
								<li><a href="#">Buyut perempuan</a></li>
							</ul>
						</li>
					</ul>
					<a href="#">ibu</a>
					<ul>
						<li>
							<ul>
								<li><a href="#">buyut laki-laki</a></li>
							</ul>
							<a href="#">Nenek</a>
							<ul>
								<li><a href="#">Buyut Perempuan</a></li>
							</ul>
						</li>
					</ul>
				</li>
				</ul>
			</li>
		</ul>
</div>