<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MessageReceivedMail extends Mailable
{
    use Queueable, SerializesModels;
    public $contactFormMessage;
    /**
     * Create a new message instance.
     */
    public function __construct($contactFormMessage)
    {
        $this->contactFormMessage = $contactFormMessage;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Message Received Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.message-received',
            with: [
                'email' => $this->contactFormMessage->email,
                'messageContent' => $this->contactFormMessage->message,
            ],
           
        );
    }

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
