<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterMail extends Mailable
{
    use Queueable, SerializesModels;
    public $nom;
    public $msg;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nom,$msg)
    {
        $this->nom=$nom;
        $this->msg=$msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('nazam@email.com')->view('mail.register');
    }
}
