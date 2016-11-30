<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Mail;
use App\Mail\Ordered;

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
       Mail::to('B5021@oic.jp')->send(new Ordered($request));
       return redirect('/complete');
   }

}
