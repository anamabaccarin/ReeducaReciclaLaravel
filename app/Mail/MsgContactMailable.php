<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MsgContactMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->msg =  $message;
    }

    /**
     * Build the message.
     *  
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.msgcontato');
    }
}   
