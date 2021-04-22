<?php include("php/check_login.php");?>
<!DOCTYPE HTML>
<!--
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Mealme | Login</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
	  	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				
				<?php 
				if ($_SESSION['isLoggedIntoPanoply'] == true){ ?>
					<h1><strong><a href="index.php">Panoply</a></strong></h1>
					<nav id="nav">
						<ul>               
							<li><a href="index.php">Home</a></li>
							<li><a href="cookbook.php">Saved Recipes</a></li>
<!--
							<li><a href="account.php">My Account</a></li>
							<li><a href="logout.php">Sign Out</a</li>
-->
						</ul>
					</div>
				<?php } else { ?>
					<h1><strong><a href="index.php">Panoply</a></strong></h1>
					<nav id="nav">
						<ul>               
							<li><a href="index.php">Home</a></li>
							<li><u>Login</u></li>
						</ul>
					</div> 
				<?php } ?>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<header class="major special">
						<h2>Login</h2>
				</header>
				<div>
				<form action="index.php" method="post">

					  <div class="container">
						<label for="uname"><b>Username</b></label>
						<input type="text" placeholder="Enter Username" name="uname" required>

						<label for="psw"><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="psw" required>

						<button type="submit">Login</button>
					  </div>

					  <div class="container" style="background-color:#f1f1f1">
						<input type="checkbox" checked="checked" name="remember"> Remember me
						<span class="psw">Forgot <a href="#">password?</a></span>
				  	  </div>
					</form> 
				</div>
				
					  
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
<!--
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook"></a></li>
						<li><a href="#" class="icon fa-twitter"></a></li>
						<li><a href="#" class="icon fa-instagram"></a></li>
					</ul>
-->
					<ul class="copyright">
						<li>&copy; Theodor Har 2021</li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
					</ul>
				</div>
			</footer>

	</body>
</html>