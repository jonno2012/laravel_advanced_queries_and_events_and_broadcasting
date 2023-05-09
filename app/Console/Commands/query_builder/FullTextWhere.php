<?php

namespace App\Console\Commands\query_builder;

use Illuminate\Console\Command;

class FullTextWhere extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:full-text-where';

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
            ->whereFullText('bio', 'web developer')
            ->get();
    }
}
