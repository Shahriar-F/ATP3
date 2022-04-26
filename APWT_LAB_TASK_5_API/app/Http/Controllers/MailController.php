<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function sendEmail(){
        $details= [
            'title'=>'Mail From ShahriarxD',
            'body'=>'This is for testing mail using email'
        ];
        Mail::to("shahriarfahim20@gmail.com")->send(new TestMail($details));
        return 'Email Sent';

    }
}
