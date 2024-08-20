<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    //
    function sendEmail(){
        $to="abiodunemma769@gmail.com";
        $msg="betano go bleed";
        $subject="God abeg";
        Mail::to($to)->send(new WelcomeMail($msg,$subject));
        return "sendEmail";
    }
}
