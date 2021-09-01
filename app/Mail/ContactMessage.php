<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $sub = '';

    public function __construct(string $subject)
    {
        $this->sub = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@techug.org')
            ->subject($this->sub)
            ->markdown('emails.contact');

//        return $this->subject('Contact')
//            ->markdown('emails.contact');
    }
}
