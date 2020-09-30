<?php

namespace App\Http\Controllers;

use App\Mail\Mailer;
use Illuminate\Support\Facades\Mail;

class MailerController extends Controller
{
    public function index()
    {
        Mail::to('alexandro_02@hotmail.com')->send(new Mailer());
        dd( env('MAIL_ENCRYPTION', 'tls') );

    }
}
