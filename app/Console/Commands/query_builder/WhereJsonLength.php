<?php

namespace App\Console\Commands\query_builder;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class WhereJsonLength extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:where-json-length';

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
            ->whereJsonLength('options->languages', 0)
            ->get();

        $users = DB::table('users')
            ->whereJsonLength('options->languages', '>', 1)
            ->get();
    }
}
