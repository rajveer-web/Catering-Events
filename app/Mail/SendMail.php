<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
  
    public $details;
   
    /**
     * Create a new message instance.
     *
     * @return void
     */
    // public function __construct($details)
    // {
    //     $this->details = $details;
    // }
   
    /**
     * Build the message.
     *
     * @return $this
     */
     public function build()
    {
        return $this->subject('Mail from Real Programmer')
                    ->view('emails.sendmail');
    }
    // public function mail()
    // {
    //     $reservations = Reservation::find(1)->toArray();
    //     Mail::send('emails.active', $reservations, function($message) use ($reservations) {
    //         $message->to($user->email);
    //         $message->subject('Mailgun Testing');
    //     });
    //     dd('Mail Send Successfully');
    // }
}