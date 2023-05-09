<?php

namespace App\Console\Commands\query_builder;

use Illuminate\Console\Command;

class WhereDay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:where-day';

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
            ->whereDay('created_at', '31')
            ->get();
    }
}
