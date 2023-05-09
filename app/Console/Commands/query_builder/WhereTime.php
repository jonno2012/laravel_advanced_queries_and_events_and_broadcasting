<?php

namespace App\Console\Commands\query_builder;

use Illuminate\Console\Command;

class WhereTime extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:where-time';

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
            ->whereTime('created_at', '=', '11:20:45')
            ->get();
    }
}
