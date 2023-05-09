<?php

namespace App\Console\Commands\query_builder;

use Illuminate\Console\Command;

class Unions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:unions';

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
//    use Illuminate\Support\Facades\DB;
//
//        $first = DB::table('users')
//            ->whereNull('first_name');
//
//        $users = DB::table('users')
//            ->whereNull('last_name')
//            ->union($first)
//            ->get();
    }
}
