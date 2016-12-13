@extends('template/master')

@section('title', '商品詳細')

@section('css')
@endsection

@section('main')
      <section id="main" class="wrapper">
				<div class="container">
          <section class="12u$">
            <div class="imagebox">
              <img src="{{ $page->img }}" alt="" />
            </div>
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
@endsection
