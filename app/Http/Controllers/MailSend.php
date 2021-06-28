<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\SendMail;

class MailSend extends Controller
{
    public function mailsend()
    {
        $details = [
            'title' => 'Title: Vintage Daisy',
            'body' => 'Body: Thank for the Reservation. We will contact you soon.'
        ];

      
       

        Mail::send('SendMail', array('key' => 'value'), function($message)
{
    $message->to('EmailId@hotmail.com', 'Sender Name')->subject('Welcome!');
    return view('emails.thanks');
});
    }

}
