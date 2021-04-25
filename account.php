<?php session_start();?>
<!doctype html>
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
<!-- Header -->
			<header id="header">
				
				<?php
				if (isset($_SESSION['isLoggedIntoPanoply']) && $_SESSION['isLoggedIntoPanoply'] == true){ ?>
					<h1><strong><a href="index.php">Panoply</a></strong></h1>
					<nav id="nav">
						<ul>               
							<li><a href="index.php">Home</a></li>
							<li><a href="cookbook.php">Saved Recipes</a></li>
							<li><u>Preferences</u></li>
							<li><a href="logout.php">Sign Out</a></li>
						</ul>
					</nav>
				<?php } else { ?>
					 <script type='text/javascript'>
    					window.location.replace("index.php");
					</script>
				<?php } ?>
			</header>
<!--	TODO: add delete account-->
<body>
</body>
</html>
