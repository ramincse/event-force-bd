<?php

namespace App\Http\Controllers;

use App\Mail\EventMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EventMailController extends Controller
{
    public function sendEventMail(Request $request){
        $mail_details = [
            'name'      => $request->name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'subject'   => $request->subject,
            'message'   => $request->message,
        ];

        Mail::to('flag3force@gmail.com') -> send(new EventMail($mail_details));
    }
}
