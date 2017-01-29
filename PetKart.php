<?php
	session_start();
 	//Connect to server
 	$con = mysqli_connect("localhost","root","","petshop");
 	$link = mysql_connect('localhost','root','');
 	//Select the database
 	mysql_select_db("petshop");
	
?>
<!DOCTYPE html>
	<head>
		<title>PetKart- One stop for all your pet's needs! </title>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
      <link rel="stylesheet" href="assets/css/style.css">
      
		<script src="assets/js/jquery-1.11.1.min.js"></script>
      <script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/js/scripts.js"></script>
        
		<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
		<style>
			@font-face{
				font-family: headingfont;
    			src: url(assets/Fonts/Biko_Black.otf);
			}
			@font-face{
				font-family:calibri;
				src: url(assets/Fonts/calibrib.ttf);
			}
			@font-face{
				font-family:Candara;
				src: url(assets/Fonts/Candarab.ttf);
			}
			body
			{
				background: url('assets/img/backgrounds/1.jpg') no-repeat center center fixed;
				-webkit-background-size: cover;
 				-moz-background-size: cover;
 				-o-background-size: cover;
 				background-size: cover;
			}
			h1
		 	{
		 		font-size:3.7em;
		 		font-family:headingfont,Arial, Sans-Serif;
		 	}	
		 
		 	.nav li 
         {
           	font-family:Candara,Arial, Sans-Serif;
           	font-size: 25px;
           	text-align: left;
           	text-transform: uppercase;
           	float: left;
         }
         .nav li ul li
         {
         	border-bottom: 2px solid #f8f8f8;
            text-align: left; 
            float:left;
         }
         .nav li ul li a
         {
         	text-decoration: none;
         }
         .nav li:hover ul
         {
            display: block;
         }
         .container-fluid
         {
				background:#f8f8f8;
				margin-top:2%;
				margin-bottom:2%;
			}
			h2{
				text-align:center;
				font-weight:700;
				font-size:50px;
				padding:2%;
			}
			h3{
				font-family: headingfont,arial,sans-serif;
				display:inline;
				font-size: 50px;
				
			}
			h4{
				font-family: headingfont,arial,sans-serif;
				display:inline;
				font-size: 25px;
				color: white;
			}
			.heading
			{
				color: #000000;
			}
			.heading:hover
			{
				text-decoration: none;
				color: #000000;
			}
			.prod
			{
				top: 200px;
			}
		</style>
	</head>
	<body>
			<nav class='navbar navbar-default navbar-fixed-top bar' style='height:10%' role='navigation'>
			<div class='container-fluid' style="margin:0;">
				<div class='navbar-header'>
					<a  class='nav-brand heading' href='#' style="height:100%; vertical-align:middle;">
						<h3 class=''>PetKart</h3>
					</a>
					<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#data'>
					<span class='sr-only'>Toggle Navigation</span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
					
				</div>
				<div class="collapse navbar-collapse" id="data">
					<ul class='nav navbar-nav navbar-right'>
						<li><a href='#'>Home</a></li>
						<li class="dropdown" ><a href='#' class="dropdown-toggle" data-toggle="dropdown">Categories</a>
                            <ul class="dropdown-menu">
                                <li><a href='Category_Prod.php#dog'>Dog</a></li>
                                <li><a href='Category_Prod.php#cat'>Cat</a></li>
                                <li><a href='Category_Prod.php#birdy'>Bird</a></li>
                                <li><a href='Category_Prod.php#hammy'>Hamster</a></li>
                            </ul>
                        </li>
                        <li><a href='login.html'>Login/Register</a></li>
                        <li ><a class="#" data-toggle="dropdown" href='#'>About</a>
                            <ul class="dropdown-menu">
                                <li><a href='#'>Contact Us</a></li>
                            </ul>
                        </li>
					</ul>
				</div>
			</div> 
		</nav>
		<div class="container">
			<br /><br /><br />
			<div class="row" >
            <div class="col-sm-12 col-sm-offset-3 social-login">
					<?php 
					if(isset($_SESSION['name'])) 
					{
						$name=$_SESSION['name'];
						echo "<h4> Hello, $name </h4>"; 
					}
					else
						echo "<h4> Hello, New User </h4>"; 
					?>
				</div>
			</div>
			<div class="row" >
            <div class="col-sm-6 col-sm-offset-3 social-login">
					<a class="btn btn-link-1" href="ProductsNew.php" >All Products</a>
				</div>
			</div>
			<div class="row" >
            <div class="col-sm-6 col-sm-offset-3 social-login">
					<a class="btn btn-link-1" href="c1.php" >Display Products Sold by UnitedPet and PurelyPets</a>
				</div>
			</div>
			<div class="row" >
            <div class="col-sm-6 col-sm-offset-3 social-login">
					<a class="btn btn-link-2" href="c2.php" >Display All Products of Category same as Kennel</a>
				</div>
			</div>
		</div>
	</body>
</html>