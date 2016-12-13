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

class OrdermailController extends Controller
{
    //

    public function index() {

      return view('complete');
    }

    /**
    * メール送信処理
    * @param  Request $request フォームで入力された値
    * @return redirector       入力画面へリダイレクト
    */
   public function send(Request $request)
   {

     $userId = $user->id;

     Mail::send('mail.ordermail', $data, function($message) use($data) {
         $message->to($data["email"])->subject('注文確認');
         return redirect('/complete');
     });
   }

}
