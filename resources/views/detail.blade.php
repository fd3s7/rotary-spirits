<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>datail</title>
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

      <section id="main" class="wrapper">
				<div class="container">
          <section class="12u$">
					<a class="image fit"><img src="{{ $page->img }}" style="margin-top: 100px;margin-left: auto;margin-right: auto;display: block;" alt="" /></a>
            <div class="container">
              <div class="comment">
                <h2 class="comment_detail">{{  $page->name }}<br>{{$page->price}}¥</h2>
                <p class="p_comment_detail">{{ $page->description }}</p>
              </div>
                <!-- cartに入れる -->
                <div class="form">
                 <form action="/cart?id={{$page->id}}" method="post">
                   {{csrf_field()}}
              <!--   <button type="button" class="button">Add to cart</button> --->
              <ul style="list-style:none;">
                 <li><input type="submit" class="button fit" value="add cart"></li>
                 <li><a href="rotary" class="button fit">back</a></li>
              </ul>
                 </form>
                </div>
            </div>
        </div>
			</section>


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

    </body>
</html>
