<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailVerification extends Mailable
{
    use Queueable, SerializesModels;

    private $params = null;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($params = null)
    {
        if ($params) $this->params = $params;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('mindblendr@gmail.com', 'Test')->markdown('emails.verify', $this->params);
    }
}
