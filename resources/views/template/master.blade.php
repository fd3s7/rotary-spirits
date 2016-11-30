<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>@yield('title') |Rotary spirits</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
    @yield('css')
    @yield('plug')
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header">
				<h1><a href="rotary">Rotary spirits</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="rotary">Home</a></li>
						<li><a href="democar">democar</a></li>
						<li><a href="cart">cart</a></li>
						<li><a href="login">login</a></li>
					</ul>

				</nav>
			</header>

				<div class="container">
            @yield('main')
				</div>


		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<div class="row">
						<section class="4u$ 12u$(medium) 12u$(small)">
							<h3>Contact Us</h3>
							<ul class="icons">
								<li><a href="#" class="icon rounded fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon rounded fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon rounded fa-google-plus"><span class="label">Google+</span></a></li>
							</ul>
							<ul class="tabular">
								<li>
									<h3>Address</h3>
									Somewhere in Osaka
								</li>
								<li>
									<h3>Mail</h3>
									<a href="#">someone@untitled.tld</a>
								</li>
								<li>
									<h3>Phone</h3>
									(000) 000-0000
								</li>
							</ul>
						</section>
					</div>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li>
					</ul>
				</div>
			</footer>
      @yield('script')
	</body>
</html>
