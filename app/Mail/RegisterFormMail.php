<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $userrestaurant;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userrestaurant)
    {
        $this->userrestaurant = $userrestaurant;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.register-form');
    }
}
