<?php

namespace App\Console\Commands\query_builder;

use Illuminate\Console\Command;

class GroupByRaw extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:group-by-raw';

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
//        $orders = DB::table('orders')
//            ->select('city', 'state')
//            ->groupByRaw('city, state')
//            ->get();
    }
}
