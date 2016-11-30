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
      注文確認画面
    </h1>

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
          </tr>
        @endforeach
      </tbody>
    </table>

    <div class="main_cart">
							<ul class="actions">
								<li><a href="/cart" class="button alt">カートに戻る</a></li>
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
								<li><a href="/contact" type="submit" class="button">注文の確定</a></li>
                <button type="submit">送信</button>
							</ul>
    </div>

  <form action="/contact" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <button type="submit">送信</button>
  </form>
  </div>
</section>

@endsection
