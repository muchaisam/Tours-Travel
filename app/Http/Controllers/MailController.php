<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EmailDemo;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function sendEmail() {
        $email = 'samlaravel20@gmail.com';
   
        $mailData = [
            'title' => 'Demo Email',
            'url' => ''
        ];
  
        Mail::to($email)->send(new EmailDemo($mailData));
   
        return response()->json([
            'message' => 'Email has been sent.'
        ]);
    }

}
