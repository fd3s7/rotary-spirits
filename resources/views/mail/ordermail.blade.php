<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <p>
            以下の内容で注文が確定しました。<br>
        </p>
        <br>

        <br>
        <div>
            <p>--お届け先情報--</p>
            <div>名前: {{$user->name}}</div>
            <div>住所: {{$user->address1.$user->address2.$user->address3}}</div>
            <div>電話番号: {{$user->tel}}</div>
        </div>
        <br>
        <div>
            <p>--注文内容--</p>
            @foreach ($items as $index=>$item)
                <div>商品名: {{ $item->name }}</div>
                <div>金額: {{number_format( $item->price)}}円</div>
            @endforeach
        </div>
        <br>

        <br>
        <div>
            <p>--合計金額--</p>
            <div>{{number_format($total)}}円</div>
        </div>
        <br>
        <br>
        <p>
            ＊--------------------------------------------------------＊<br>
            　EC Shop rotary spirits<br>
            　〒000-0000 大阪府XX区XX XX<br>
            　TEL: 00-0000-0000 FAX: 00-0000-0000<br>
            　Email: ecshop.rotaryspirits@gmail.com<br>
            ＊--------------------------------------------------------＊<br>
        </p>
    </body>
</html>
