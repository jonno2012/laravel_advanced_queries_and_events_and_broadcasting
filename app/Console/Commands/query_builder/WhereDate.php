<?php

namespace App\Console\Commands\query_builder;

use Illuminate\Console\Command;

class WhereDate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:where-date';

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
            ->whereDate('created_at', '2016-12-31')
            ->get();
    }
}
