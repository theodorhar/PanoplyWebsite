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
						<h2>REGISTER</h2>
				</header>
			</section>
			<section>
				<form id = "registerform" target = "_blank" action="php/create_account.php" onsubmit="setTimeout(function(){window.location.reload();},2000);" method="post">
					  <label <?php
						if (isset($_SESSION['usernametaken']) && $_SESSION['usernametaken'] == true){ ?>
							style = "color:darkred;font-size:20px"
						<?php } else { ?>
							class = "invisible"
						<?php } ?>
						   >Username already taken- please try again.
					  </label>
					  <label <?php
						if (isset($_SESSION['isLoggedIntoPanoply']) && $_SESSION['isLoggedIntoPanoply'] == true){ ?>
							style = "color:darkgreen;font-size:20px"
						<?php } else { ?>
							class = "invisible"
						<?php } ?>
						   >Redirecting to Account Settings...
					  </label>
					    <?php if (isset($_SESSION['isLoggedIntoPanoply']) && $_SESSION['isLoggedIntoPanoply'] == true){ ?>
							<script>window.location="account.php";</script>
						<?php } ?>
					  <label>
						<p class="label-txt">FIRST NAME</p>
						<input type="text" class="input" name = "fname" required>
						<div class="line-box">
						  <div class="line"></div>
						</div>
					  </label>
					  <label>
						<p class="label-txt">LAST NAME</p>
						<input type="text" class="input" name = "lname" required>
						<div class="line-box">
						  <div class="line"></div>
						</div>
					  </label>
					  <label>
						<p class="label-txt">EMAIL ADDRESS</p>
						<input type="email" class="input" name = "email" required>
						<div class="line-box">
						  <div class="line"></div>
						</div>
					  </label>
					  <label>
						<p class="label-txt">ENTER A USERNAME</p>
						<input type="text" class="input" name = "uname" required minlength = "8">
						<div class="line-box">
						  <div class="line"></div>
						</div>
					  </label>
					  <label>
						<p class="label-txt">ENTER A PASSWORD</p>
						<input type="password" class="input" id = "psw" name = "psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" oninput="check(this)" required>
						  <script src="/js/pass_formatcheck.js"></script>
						<div class="line-box">
						  <div class="line"></div>
						</div>
					  </label>
					  <label class = formatmessage id = "psw_message">
						  <p class="label-txt">Password must contain the following:</p> <br>
						  <span id="letter" class="invalid">- A lowercase letter &nbsp;&nbsp;</span>
						  <span id="capital" class="invalid">- A capital (uppercase) letter&nbsp;&nbsp;</span>
						  <span id="number" class="invalid">- A number&nbsp;&nbsp;</span> <br>
						  <span id="length" class="invalid">- Minimum 12 characters</span>
					  </label>
					  <label>
						<p class="label-txt">CONFIRM PASSWORD</p>
						<input type="password" class="input" oninput="check(this)" id = "pswconfirm" name = "pswconfirm" required>
						<script> 
							function check(input) {
								if (document.getElementById('pswconfirm').value != document.getElementById('psw').value) {
									input.setCustomValidity('Passwords Must be Matching.');
								} else {
									document.getElementById('pswconfirm').setCustomValidity('');
									document.getElementById('psw').setCustomValidity('');
								}
							}
						  </script>
						<div class="line-box">
						  <div class="line"></div>
						</div>
					  </label>
					  <label class = formatmessage id = "pswmatch_message">
							<span id="pswmatch" class="invalid">- Passwords must match</span>
					  </label>
					  <br>
					  <button type="submit"> Create Account</button>
					  <br>
					  
				</form>
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