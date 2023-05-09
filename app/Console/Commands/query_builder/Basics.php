<?php

namespace App\Console\Commands\query_builder;

use App\Models\Log;
use App\Models\LogValue;
use Illuminate\Console\Command;

class Basics extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:basics';

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
        $someLogs = LogValue::query()
            ->select('value as whatever')
            ->where('user_id', '1')
            ->limit(5)
            ->addSelect('user_id')
            ->get()
            ->toArray();
//            ->pluck('value');
        var_dump($someLogs);
    }
}
