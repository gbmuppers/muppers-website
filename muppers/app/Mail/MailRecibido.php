<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailRecibido extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Solicitud cliente";
    public $msj;    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msj)
    {
        $this->msj = $msj;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('contenidoemail');
    }
}
