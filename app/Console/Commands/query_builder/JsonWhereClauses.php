<?php

namespace App\Console\Commands\query_builder;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
class JsonWhereClauses extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:json-where-clauses';

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
        $products = DB::table('products')
            ->whereNot(function (Builder $query) {
                $query->where('clearance', true)
                    ->orWhere('price', '<', 10);
            })
            ->get();
    }
}
