@extends('template/master')

@section('title', '注文確定')

@section('css')
<link rel="stylesheet" href="/css/rezi.css">
@endsection

@section('main')
<!--- main --->

<section id="main" class="wrapper">
  <div class="container">

    <h1>
      ARIGATO!!<br>
      注文が確定されました
    </h1>

    <div class="main_cart">
							<ul class="actions">
								<li><a href="/rotary" class="button alt">トップへ戻る</a></li>
							</ul>
    </div>

  </div>
</section>

@endsection