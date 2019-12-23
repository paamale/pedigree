<style type="text/css">

.style{
		margin-right: 100px;
}
.style ul{
	padding-top: 20px; 
	position: relative;
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
	
}

.style ul::after{
	border: 1px solid #ccc;
}

/*.style li::before, .style li::after{
	content: '';
	position: absolute; 
	top: 0; 
	border-top: 1px solid #ccc;
	right: 10%;
	width: 50%; 
	height: 20px;
}
*/
.style li{
	list-style-type: none;
	position: relative;
	padding: 10px 5px 0 10px;
	
	
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
	background: rgba(30,30,30, .55);



}

.style li a{
	border: 1px solid #ccc;
	padding: 5px 10px;
	text-decoration: none;
	color: #666;
	font-family: arial, verdana, tahoma;
	font-size: 11px;
	display: inline-block;

	
	
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}
.style a{
	padding-left: 100px;
}
</style>

<div class=style>
	<ul>
		<ul>	
			<li>	
				<ul>
						<ul>
								<ul>	
									<li><a href="#">Ayahnya kakek dari ibu</a></li>
								</ul>
							<li><a href="#">Kakek</a></li>	
								<ul>	
									<li><a href="#">ibunya kakek dari ibu</a></li>
								</ul>
						</ul>
					<li><a href="#">ibu</a></li>
						<ul>
								<ul>	
									<li><a href="#">ayahnya nenek dari ibu</a></li>
								</ul>	
							<li><a href="#">Nenek</a></li>
								<ul>	
									<li><a href="#">Ibunya nenek dari ibuss</a></li>
								</ul>
						</ul>
				</ul>
			<li><a href="#">anak</a>
				<ul>
						<ul>
								<ul>	
									<li><a href="#">Ayahnya kakek dari ibu</a></li>
								</ul>
							<li><a href="#">Kakek</a></li>	
								<ul>	
									<li><a href="#">ibunya kakek dari ibu</a></li>
								</ul>
						</ul>
					<li><a href="#">ibu</a></li>
						<ul>
								<ul>	
									<li><a href="#">ayahnya nenek dari ibu</a></li>
								</ul>	
							<li><a href="#">Nenek</a></li>
								<ul>	
									<li><a href="#">Ibunya nenek dari ibuss</a></li>
								</ul>
						</ul>
				</ul>
			</li>
		</ul>	
	</ul>
</div>