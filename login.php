<?php session_start();?>
<!DOCTYPE HTML>
<!--
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Panoply | Login</title>
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
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</nav>
				<?php } else { ?>
					<h1><strong><a href="index.php">Panoply</a></strong></h1>
					<nav id="nav">
						<ul>               
							<li><a href="index.php">Home</a></li>
							<li><u>Login</u></li>
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
			<form target = "_blank" action="php/check_login.php" method="post">
				  <label>
					<p class="label-txt">ENTER YOUR USERNAME</p>
					<input type="text" class="input" name = "uname">
					<div class="line-box">
					  <div class="line"></div>
					</div>
				  </label>
				  <label>
					<p class="label-txt">ENTER YOUR PASSWORD</p>
					<input type="password" class="input" name = "psw">
					<div class="line-box">
					  <div class="line"></div>
					</div>
				  </label>
				  <button onclick="window.location.href = 'cookbook.php';" type="submit">Login</button>
					<br>
				  <label>
					<a style="float: left;" href = "forgotpsw.php">FORGOT YOUR PASSWORD?</a>
					<span style="float: right;"><a href = "register.php">NEED AN ACCOUNT?</a></span>
				  </label>
			</form>
		<!-- Footer --account	<footer id="footer">
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