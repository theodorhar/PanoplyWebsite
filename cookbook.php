<?php session_start();?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Mealme | Cookbook</title>
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
				if (isset($_SESSION['isLoggedIntoPanoply']) && $_SESSION['isLoggedIntoPanoply'] == true){ ?>
					<h1><strong><a href="index.php">Panoply</a></strong></h1>
					<nav id="nav">
						<ul>               
							<li><a href="index.php">Home</a></li>
							<li><u>Saved Recipes</u></li>
							<li><a href="account.php">My Account</a></li>
							<li><a href="logout.php">Sign Out</a></li>
						</ul>
					</div>
				<?php } else { ?>
					 <script type='text/javascript'>
    					window.location.replace("index.php");
					</script>
				<?php } ?>
			</header>
		<!-- Main -->
			<section id="main" class="wrapper style4">
				<header class = "major special">
						<h2>Saved Recipes</h2>
				</header>
				<div>
				M
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