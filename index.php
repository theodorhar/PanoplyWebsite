<!DOCTYPE HTML>
<!--
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Panoply</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
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
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<nav id="nav">
					<?php include("check.php");?>
					<?php 
					if ($loginst == 1){ ?>
						<div id="nav">
							<ul >               
								<li><a href="index.php">Home</a></li>
								<li><a href="elements.html">My Recipes</a></li>
<!--
								<li><a href="account.php">My Account</a></li>
								<li><a href="logout.php">Sign Out</a</li>
-->
							</ul>
						</div>
					<?php } else { ?>
						<div id="nav">
							<ul >               
								<li><a href="index.php">Home</a></li>
								<li><a href="login.php">Login</a</li>
							</ul>
						</div> 
					<?php } ?>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<h2>Test</h2>
				<p>Lorem ipsum dolor sit amet nullam consequat <br /> interdum vivamus donce sed libero.</p>
				<ul class="actions">
					<li><a href="#" class="button special big">Get Started</a></li>
				</ul>
			</section>

			<!-- One -->
				<section id="one" class="wrapper style1">
					<div class="container 75%">
						<div class="row 200%">
							<div class="6u 12u$(medium)">
								<header class="major">
									<h2>Maecenas luctus lectus</h2>
									<p>Perspiciatis doloremque recusandae dolor</p>
								</header>
							</div>
							<div class="6u$ 12u$(medium)">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non ea mollitia corporis id, distinctio sunt veritatis officiis dolore reprehenderit deleniti voluptatibus harum magna, doloremque alias quisquam minus, eaque. Feugiat quod, nesciunt! Iste quos ipsam, iusto sit esse.</p>
								<p>Dolorum aspernatur maxime libero ratione quidem distinctio, placeat fugiat laborum voluptatum enim neque soluta vel sunt id ex veritatis. Labore rerum, odit sapiente, alias mollitia magnam exercitationem modi amet earum quia atque ipsum voluptas asperiores quas laboriosam.</p>
							</div>
						</div>
					</div>
				</section>
<!--

			 Two 
				<section id="two" class="wrapper style2 special">
					<div class="container">
						<header class="major">
							<h2>Fusce ultrices fringilla</h2>
							<p>Maecenas vitae tellus feugiat eleifend</p>
						</header>
						<div class="row 150%">
							<div class="6u 12u$(xsmall)">
								<div class="image fit captioned">
									<img src="images/pic02.jpg" alt="" />
									<h3>Lorem ipsum dolor sit amet.</h3>
								</div>
							</div>
							<div class="6u$ 12u$(xsmall)">
								<div class="image fit captioned">
									<img src="images/pic03.jpg" alt="" />
									<h3>Illum, maiores tempora cupid?</h3>
								</div>
							</div>
						</div>
						<ul class="actions">
							<li><a href="#" class="button special big">Nulla luctus</a></li>
							<li><a href="#" class="button big">Sed vulputate</a></li>
						</ul>
					</div>
				</section>
-->

			<!-- Three -->
				<section id="three" class="wrapper style1">
					<div class="container">
						<header class="major special">
							<h2>Mauris vulputate dolor</h2>
							<p>Feugiat sed lorem ipsum magna</p>
						</header>
						<div class="feature-grid">
							<div class="feature">
								<div class="image rounded"><img src="images/pic04.jpg" alt="" /></div>
								<div class="content">
									<header>
										<h4>Lorem ipsum</h4>
										<p>Lorem ipsum dolor sit</p>
									</header>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore esse tenetur accusantium porro omnis, unde mollitia totam sit nesciunt consectetur.</p>
								</div>
							</div>
							<div class="feature">
								<div class="image rounded"><img src="images/pic05.jpg" alt="" /></div>
								<div class="content">
									<header>
										<h4>Recusandae nemo</h4>
										<p>Ratione maiores a, commodi</p>
									</header>
									<p>Animi mollitia optio culpa expedita. Dolorem alias minima culpa repellat. Dolores, fuga maiores ut obcaecati blanditiis, at aperiam doloremque.</p>
								</div>
							</div>
							<div class="feature">
								<div class="image rounded"><img src="images/pic06.jpg" alt="" /></div>
								<div class="content">
									<header>
										<h4>Laudantium fugit</h4>
										<p>Possimus ex reprehenderit eaque</p>
									</header>
									<p>Maiores iusto inventore fugit architecto est iste expedita commodi sed, quasi feugiat nam neque mollitia vitae omnis, ea natus facere.</p>
								</div>
							</div>
							<div class="feature">
								<div class="image rounded"><img src="images/pic07.jpg" alt="" /></div>
								<div class="content">
									<header>
										<h4>Porro aliquam</h4>
										<p>Quaerat, excepturi eveniet laboriosam</p>
									</header>
									<p>Vitae earum unde, autem labore voluptas ex, iste dolorum inventore natus consequatur iure similique obcaecati aut corporis hic in! Porro sed.</p>
								</div>
							</div>
						</div>
					</div>
				</section>
		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook"></a></li>
						<li><a href="#" class="icon fa-twitter"></a></li>
						<li><a href="#" class="icon fa-instagram"></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Theodor Har 2021</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
					</ul>
				</div>
			</footer>

	</body>
</html>