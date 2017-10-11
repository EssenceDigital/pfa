<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendContact extends Mailable
{
    use Queueable, SerializesModels;

    public $messageDetails;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $messageDetails)
    {
        $this->messageDetails = $messageDetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->messageDetails['from'], $this->messageDetails['name'])
                    ->subject('PFA Website | Question / Comment')
                    ->view('emails.contact');
    }
}
