<?php

namespace App\Console\Commands\query_builder;

use App\Models\LogValue;
use Illuminate\Console\Command;

class HavingRaw extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:having-raw';

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
        // WHERE cannot be used with aggregate functions so we use HAVING instead
        $valueTotals = LogValue::query()
            ->selectRaw('user_id as user, SUM(value) as total_log_values_by_user')
            ->groupBy('user_id')
            ->havingRaw('SUM(value) > ?', [500000.00])
            ->get()
            ->toArray();

        dd($valueTotals);
    }
}
