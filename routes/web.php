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
Route::get('/logintest',function() {
    return view('logintest');
});
Route::get('/rezi',function() {
    return view('rezi');
});

//order
Route::get('/contact','ContactController@index');
Route::post('/contact','ContactController@send');


Route::resource('users', 'UsersController'); //mailのcontrollerg



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

//reziの表示
Route::get('/rezi', function(){
    $items = session()->get('items');
    $total = 0;
    foreach($items as $item){
      $prices = $item->price;
      $total += $prices;
    }
    return view("rezi", compact('items','total'));
});

//カートに入っている商品の合計金額を表示


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


Auth::routes();

Route::get('/home', 'HomeController@index');
