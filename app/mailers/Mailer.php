<?php namespace AcmeMailers;

class Mailer{
/*
  public function sendTo(){

    Mail::send('emails.welcome', $data, function($message){
      $message->to('manabu.bannai@gmail.com')
              ->subject('ここがタイトルです');
    });

  }
}

*/

public function sendTo( $user, $subject, $view, $data =[] ){

  Mail::send($view, $data, function($message) use($user, $subject){
    $message->to($user->email)
              ->subject($subject);
  });

 }
}
