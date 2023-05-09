<?php

namespace App\Listeners;

use App\Models\LogValue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class LogSaved
{
    /**
     * Create the event listener.
     */
    public function __construct(public LogValue $logValue)
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
//        Log::log(1, serialize($this->logValue));
//        Log::log(1, 'Logging from listener');
        echo 'Hello from LogSaved Listener' . PHP_EOL;
    }
}
