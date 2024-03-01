<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Mail\SendMessageToEndUser;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function maildata(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $mess = $request->message;
        $mailData = [
            'url' => ['https://sandroft.com/'],
        ];
        $send_mail = "mesho.moris@gmail.com";
        Mail::to($send_mail)->send(new SendMail($name, $email, $mess));
        $senderMessage = "thanks for your message , we will reply you in later";
        Mail::to($email)->send(new
            SendMessageToEndUser($name, $senderMessage, $mailData));
        return view('index');
    }
}
