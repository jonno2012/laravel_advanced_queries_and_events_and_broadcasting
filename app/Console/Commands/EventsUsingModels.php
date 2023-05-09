<?php

namespace App\Console\Commands;

use App\Events\MyEvent;
use App\Models\LogValue;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class EventsUsingModels extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:events-using-models';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $logValue = LogValue::find(1);
        $logValue->save();

        MyEvent::dispatch('Passed to constructor of event');

        Log::debug('sdfsdf');
    }
}
