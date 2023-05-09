<?php

namespace App\Listeners;

use App\Events\MyEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class DoSomethingWithMyEvent
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
    public function handle(MyEvent $event): void
    {
        echo 'in the DoSomethingWithMyEvent Listener';

    }
}
