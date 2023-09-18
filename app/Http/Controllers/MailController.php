<?php

namespace App\Http\Controllers;

use App\Mail\MailSend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request){
        Mail::to('fikrinurhakim911@gmail.com')->send(new MailSend($request));

        return redirect()->back();
    }
}