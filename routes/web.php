<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/rotary', function () {
    return view('rotary');
});
Route::get('/democar', function () {
    return view('democar');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/loginhome',function() {
    return view('loginhome');
});



Route::get('/', function (Request $request) {
    $page = DB::table('page')->get();
   return view('rotary', [
       "page" => $page
   ]);
});
Route::get('/detail', function(Request $request){
   $id = $request->get("id");
   $page = DB::table('page')->where('id', $id)->first();
   return view('detail', [
       "page" => $page
   ]);
});


// カートに入れる
Route::post('/cart', function(Request $request){
    $id = $request->get("id"); //idを取得
    $cart = new \App\Service\CartService();
    $cart->addItem($id);
    return redirect("/cart"); //カートのページへリダイレクト
});
// カートの中を一覧表示
Route::get('/cart', function(){
    $cart = new \App\Service\CartService();
    return view("cart", [ //データを渡してビューを表示
        "items" => $cart->getItems()
    ]);
});
// 商品を削除
Route::get('/delete', function(Request $request){
    $index = $request->get("index"); //削除した商品のindexを取得
    $cart = new \App\Service\CartService();
    $cart->removeItem($index);
    return redirect("/cart");
});
// カートを空にする
Route::get('/delete/all', function(){
    $cart = new \App\Service\CartService();
    $cart->clear();
    return redirect("/cart"); //カートのページへリダイレクト
});

/*
// カートに入れる
Route::post('/cart', function(Request $request){
    $id = $request->get("id"); //idを取得
    $item = DB::table('page')->where('id', $id)->first(); //idが一致するものをpageテーブルから検索、取得
    $items = session()->get("items",[]); //セッションデータを取得
    $items[] = $item; // 取得したデータにオブジェクトを保存
    session()->put("items", $items); //取得したデータをsessionに保存
    return redirect("/cart"); //リダイレクト
});
// カートの中を一覧表示
Route::get('/cart', function(){
    $items = session()->get("items",[]); //セッションデータを取得
    return view("cart", [ //データを渡してビューを表示
        "items" => $items
    ]);
});
// 商品を削除
Route::get('/delete', function(Request $request){
    $index = $request->get("index"); //削除した商品のindexを取得
    session()->forget("items.$index"); //sessionから選んだ商品を削除
    return redirect("/cart");
});
// カートを空にする
Route::get('/delete/all', function(){
    session()->flush(); //sessionの全データを削除
    return redirect("/cart"); //カートのページへリダイレクト
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index');
