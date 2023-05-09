<?php

namespace App\Console\Commands\query_builder;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class RawBasics extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:raw-basics';

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
        $userLogs = DB::table('log_values')
            ->selectRaw('user_id, value as Log_Value')
            ->whereRaw('user_id in (1,2)')
            ->whereRaw('value > IF(user_id = "1", 7000, 1000)')
            ->whereRaw('value < IF(user_id = ?, ?, ?)', [2,2000,10000])
            ->limit(5)
            ->get()
            ->toArray();

        // WHERE cannot be used with aggregate functions:


        var_dump($userLogs);
    }
}
