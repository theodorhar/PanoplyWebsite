<?php session_start();?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Panoply | Register</title>
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
							<li><a href="cookbook.php">Saved Recipes</a></li>
							<li><a href="account.php">Preferences</a></li>
							<li><a href="logout.php">Sign Out</a></li>
						</ul>
					</nav>
				<?php } else { ?>
					<nav id="nav">
						<ul>               
							<li><a href="index.php">Home</a></li>
							<li><a href="login.php">Login</a></li>
						</ul>
					</nav>
				<?php } ?>
			</header>
		<!-- Main -->
			<section id="main" class="wrapper style4">
				<header class = "major special">
						<h2>LOGIN</h2>
				</header>
			</section>
			<form target = "_blank" action="php/create_account.php" method="post">
				  <label>
					<p class="label-txt">FIRST NAME</p>
					<input type="text" class="input" name = "fname">
					<div class="line-box">
					  <div class="line"></div>
					</div>
				  </label>
				  <label>
					<p class="label-txt">LAST NAME</p>
					<input type="text" class="input" name = "lname">
					<div class="line-box">
					  <div class="line"></div>
					</div>
				  </label>
				  <label>
					<p class="label-txt">EMAIL ADDRESS</p>
					<input type="text" class="input" name = "email">
					<div class="line-box">
					  <div class="line"></div>
					</div>
				  </label>
				  <label>
					<p class="label-txt">ENTER A USERNAME</p>
					<input type="text" class="input" name = "uname">
					<div class="line-box">
					  <div class="line"></div>
					</div>
				  </label>
				  <label>
					<p class="label-txt">ENTER A PASSWORD</p>
					<input type="password" class="input" name = "psw">
					<div class="line-box">
					  <div class="line"></div>
					</div>
				  </label>
				  <label>
					<p class="label-txt">CONFIRM PASSWORD</p>
					<input type="password" class="input" name = "pswconfirm">
					<div class="line-box">
					  <div class="line"></div>
					</div>
				  </label>
				  <button onclick="window.location.href = 'preferences.php';" type="submit">Create Account</button>
					<br>
			</form>

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