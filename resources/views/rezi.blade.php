@extends('template/master')

@section('title', '注文内容確認')

@section('css')
<link rel="stylesheet" href="/css/rezi.css">
@endsection

@section('main')
<!--- main --->

<section id="main" class="wrapper">
  <div class="container">
    <h1>
      注文確定画面
    </h1>

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
              ¥ {{ $item->price }}
            </td>
            <td>
              {{ $item->description }}
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

    <div class="sum-money">
      <h1 class="sum-title">
        合計金額 : {{ $total }} 円
      </h1>
    </div>

    <div class="main_cart">
      <form action="/order" method="post">
        <a href="/cart" class="button alt">カートに戻る</a>
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <button type="submit" class="orderbutton">注文確定</button>
      </form>
    </div>


  </div>
</section>

@endsection
