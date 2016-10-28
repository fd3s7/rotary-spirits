<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>loginhome</title>
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
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
  </head>
  <body>

    <!-- Header -->
			<header id="header">
				<h1><a href="rotary">Rotary spirits</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="rotary">Home</a></li>
						<li><a href="democar">democar</a></li>
						<li><a href="cart">cart</a></li>
						<li><a href="login">login</a></li>
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
					</ul>
				</nav>
			</header>

      <!---login--->
      <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <!-- Left Side Of Navbar -->
          <ul class="nav navbar-nav">
              &nbsp;
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <ul class="dropdown-menu" role="menu">
                          <li>
                              <a href="{{ url('/logout') }}"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                  Logout
                              </a>

                              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>
                      </ul>
                  </li>
              @endif
          </ul>
      </div>
  </div>
</nav>

@yield('content')

<!-- Scripts -->
<script src="/js/app.js"></script>


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
  						<li>Design: <a href="#">Renka</a></li>
  						<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
  					</ul>
  				</div>
  			</footer>
--->
  </body>
</html>
