<?php

namespace App\Console\Commands;

use App\Models\Log;
use Illuminate\Console\Command;

class UsingCursor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:using-cursor';

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
        foreach (Log::where('id', '!=', 10000)->cursor() as $log) {
            echo $log . PHP_EOL;
        }
    }
}
