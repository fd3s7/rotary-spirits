<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use App\Mail\Ordered;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    //

    public function index() {

      return view('rezi');
    }

    /**
    * メール送信処理
    * @param  Request $request フォームで入力された値
    * @return redirector       入力画面へリダイレクト
    */
   public function send(Request $request)
   {

       $user = Auth::user();
       $userId = $user->id;
       $items = session()->get('items');
       $total = 0;
       foreach($items as $item){
         $prices = $item->price;
         $total += $prices;
       }
       Mail::send('mail.ordermail', compact('user','items','total'), function($message) use($user,$items,$total) {
       $message->to($user->email)->subject('注文確認');
       session()->forget('items'); //sessionの全データを削除

       });
       return redirect('/order/complete');
   }

   public function complete()
   {
     return view('/order_complete');
   }

}
