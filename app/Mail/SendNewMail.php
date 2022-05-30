<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendNewMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $authorMail;
    protected $emai_title;
    protected $emai_text;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($authorMail,$email_title,$email_text)
    {
        $this->authorMail = $authorMail;
        $this->email_title = $email_title;
        $this->email_text = $email_text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->replyTo($this->authorMail)->view('guest.email_body',
            [ 
            "email_title" => $this->email_title ,
            "email_text" => $this->email_text,
            ]);
        
    }
}
    

