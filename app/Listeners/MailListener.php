<?php

namespace App\Listeners;

use App\Events\MailEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactFormMessage;
use App\Mail\MessageReceivedMail;

class MailListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(MailEvent $event): void
    {
          Mail::to($event->contactFormMessage->email)
            ->send(new MessageReceivedMail($event->contactFormMessage));
    }
}
