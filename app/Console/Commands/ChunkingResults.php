<?php

namespace App\Console\Commands;

use App\Models\Log;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;

class ChunkingResults extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:chunking-results';

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
        // use when you need to iterate through a large data set and you want to minimise the amount of memory which is
        // used up. An example might be when you are running queued jobs to process email notifications for a large number of users.
        Log::chunk(10, function (Collection $flights) {
            foreach ($flights as $flight) {
                echo $flight->name . '<br/>';
            }
        });
    }
}
