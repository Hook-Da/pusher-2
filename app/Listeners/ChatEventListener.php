<?php

namespace App\Listeners;

use App\Event\ChatEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ChatEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ChatEvent  $event
     * @return void
     */
    public function handle(ChatEvent $event)
    {
    }
}
