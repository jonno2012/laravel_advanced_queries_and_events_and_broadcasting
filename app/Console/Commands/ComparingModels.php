<?php

namespace App\Console\Commands;

use App\Models\Log;
use Illuminate\Console\Command;

class ComparingModels extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:comparing-models';

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
        $log = Log::find(1);
        $log2 = Log::find(2);

        var_dump($log->is($log2));

        var_dump($log->isNot($log2));
    }
}
