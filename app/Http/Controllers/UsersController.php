<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use AcmeMailersMailer;

class UsersController extends BaseController {

  protected $mailer;

  public function __construct(Mailer $mailer){
    $this->mailer = $mailer;
  }

}
