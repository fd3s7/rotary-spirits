<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>cart</title>
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

<!--- main --->

<section id="main" class="wrapper">
  <div class="container">
    <h1 style="font-size:25px;margin-top: 50px;">
      ショッピングカート
    </h1>
    <div class="main_cart">
      <a href="delete/all" class="button alt big" style="margin-top:20px;">カートを空にする</a>
    </div>

    <div class="comment-wrapper" style="margin-top:30px;">
      <!---商品が入っているとき--->
      @if($items)
      <table>
        <thead>
          <tr>
            <th>
              商品名
            </th>
            <th>
              価格
            </th>
            <th>
              商品説明
            </th>
          </tr>
        </thead>
        <tbody>
          <!---sessionで入っているデータをループで回す--->
          @foreach ($items as $index=>$item)
            <tr>
              <td>
                {{ $item->name }}
              </td>
              <td>
                {{ $item->price }} ¥
              </td>
              <td>
                {{ $item->description }}
              </td>
              <td>
                <a href="/delete?index={{ $index }}" class="button">削除</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <!---商品が入っていないとき--->
      @else
      <p style="margin-top:5%;">
        カートに商品は入っていません。
      </p>
      @endif
    </div>

    <div class="main_cart">
							<ul class="actions">
								<li><a href="rotary" class="button alt">ショッピングを続ける</a></li>
								<li><a href="/rezi" class="button">レジへ進む</a></li>
							</ul>
    </div>
  </div>
</section>


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





    </body>
  </html>
