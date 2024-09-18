<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;


    
    /**
     * Create a new message instance.
      * @return void
     */

    public $contact_name;
    public $contact_email;
    public $contact_message;
    public function __construct($name,$email,$message)
    {   
        $this->contact_name = $name;
        $this->contact_email = $email;
        $this->contact_message = $message;


        //
    }
    public function build(){
        return $this->from($this->contact_email, $this->contact_name)
                    ->subject('Email contact from'.$this->contact_name)
                    ->view('mails.contactmail');
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Mail',
        );
    }

    /**
     * Get the message content definition.
     */
   

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
