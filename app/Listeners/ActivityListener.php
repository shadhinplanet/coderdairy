<?php

namespace App\Listeners;

use App\Events\ActivityEvent;
use App\Models\Activity;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ActivityListener
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
     * @param  \App\Events\ActivityEvent  $event
     * @return void
     */
    public function handle(ActivityEvent $event)
    {
        Activity::create([
            'message'   => $event->message,
            'model'     => $event->model,
            'user_id'   => $event->user_id
        ]);
    }
}
