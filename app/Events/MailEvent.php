<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\ContactFormMessage;
use Illuminate\Support\Facades\Log;


class MailEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $contactFormMessage;
    /**
     * Create a new event instance.
     */
    public function __construct(ContactFormMessage $contactFormMessage)
    {
        Log::debug('Confirmation: Mail sent');
        $this->contactFormMessage = $contactFormMessage;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
