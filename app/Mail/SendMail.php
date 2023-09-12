<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;

        $this->to('ksentini.dalila@gmail.com'); // Remplacez par l'adresse e-mail du destinataire réel
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->email->getSubject())
                    ->view('welcome'); // Utilisez 'welcome' comme vue pour le contenu de l'e-mail
    }
}
