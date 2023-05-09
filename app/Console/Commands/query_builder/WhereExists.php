<?php

namespace App\Console\Commands\query_builder;

use Illuminate\Console\Command;

class WhereExists extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:where-exists';

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
        $users = DB::table('users')
            ->whereExists(function (Builder $query) {
                $query->select(DB::raw(1))
                    ->from('orders')
                    ->whereColumn('orders.user_id', 'users.id');
            })
            ->get();
    }
}
