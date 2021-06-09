<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmationCompte extends Mailable
{
    use Queueable, SerializesModels;
    public $UserRestaurant;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($UserRestaurant)
    {
        $this->UserRestaurant = $UserRestaurant;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.ConfirmationCompte');
    }
}
