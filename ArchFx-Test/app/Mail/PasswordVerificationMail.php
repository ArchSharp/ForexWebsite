<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PasswordVerificationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $userpassreset;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userpassreset)
    {
        $this->user=$userpassreset;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.auth.password_verification_mail')->with([
            'user'=>$this->user
        ]);
    }
}
