<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class resetpassword extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $mailcontent;
    public function __construct($mailcontent)
    {
        $this->mailcontent = $mailcontent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   

        return $this->subject('şifre sıfırlama')
                    ->view('emails.sifreSıfırlama',["mailcontent"=>$this->mailcontent]);
        
    }
}
