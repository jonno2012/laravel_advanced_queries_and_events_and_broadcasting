<?php

namespace App\Console\Commands\query_builder;

use Illuminate\Console\Command;

class AdvancedJoins extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:advanced-joins';

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
//        DB::table('users')
//            ->join('contacts', function (JoinClause $join) {
//                $join->on('users.id', '=', 'contacts.user_id')->orOn(/* ... */);
//            })
//            ->get();
    }
}
