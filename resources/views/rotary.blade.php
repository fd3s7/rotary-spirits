@extends('template/master')

@section('title', 'トップ')

@section('css')

@endsection

@section('main')
<body class="landing">
	<!-- Banner -->
		<section id="banner">
			<h2>Rotary spirits</h2>
			<p>It offers the best parts to all of the rotary fan</p>
		</section>

	<!-- One--->
		<section id="one" class="wrapper style1 align-center">
			<div class="container">
				<header>
					<h2>FEATURE</h2>
					<p>ロータリーエンジンに特化したパーツやデモカーの開発、販売を主に多く取り扱っております</p>
				</header>
				<div class="row 200%">
					<section class="4u 12u$(small)">

					</section>
				</div>
			</div>
		</section>

	<!-- Two -->
		<section id="two" class="wrapper style2 align-center">
			<div class="container">
				<header>
					<h2>Recommended parts</h2>
					<p></p>
				</header>
				<div class="row">
					<section class="feature 6u 12u$(small)">
						<a href="/detail?id=1"><img class="image fit" src="images/product01.jpg" alt="" /></a>
						<h3 class="title">FD3S 大容量スロットルボディ16bit</h3>
					</section>

					<section class="feature 6u$ 12u$(small)">
						<a href="/detail?id=2"><img class="image fit" src="images/product02.jpg" alt="" /></a>
						<h3 class="title">FD3S ALUMI PULLEY KIT</h3>
					</section>

					<section class="feature 6u 12u$(small)">
						<a href="/detail?id=3"><img class="image fit" src="images/product03.jpg" alt="" /></a>
						<h3 class="title">Wide tread spacer</h3>
					</section>

					<section class="feature 6u$ 12u$(small)">
						<a href="/detail?id=4"><img class="image fit" src="images/product04.jpg" alt="" /></a>
						<h3 class="title">FD3S REAR SPOILER-GTⅢ</h3>
					</section>
				</div>
				<footer>
					<ul class="actions">
						<li>
							<a href="#" class="button alt big">Learn More</a>
						</li>
					</ul>
				</footer>
			</div>
		</section>
</body>

@endsection
