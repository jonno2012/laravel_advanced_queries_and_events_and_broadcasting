<?php

namespace App\Console\Commands\query_builder;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class WhereJsonContains extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:where-json-contains';

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
            ->whereJsonContains('options->languages', ['en', 'de'])
            ->get();
    }
}
