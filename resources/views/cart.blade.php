@extends('template/master')

@section('title', 'カート')

@section('css')
<link rel="stylesheet" href="/css/cart.css">
@endsection

@section('main')
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
            <th class="kakaku">
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
              <td class="kakaku">
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
      <div class="main_cart">
  							<ul class="actions">
  								<li><a href="rotary" class="button alt">ショッピングを続ける</a></li>
  								<li><a href="/rezi" class="button">レジへ進む</a></li>
  							</ul>
      </div>
      <!---商品が入っていないとき--->
      @else
      <p style="margin-top:5%;">
        カートに商品は入っていません。
      </p>

      <div class="main_cart">
  							<ul class="actions">
  								<li><a href="rotary" class="button alt">ショッピングを続ける</a></li>
  							</ul>
      </div>
      @endif
    </div>

  </div>
</section>
@endsection
