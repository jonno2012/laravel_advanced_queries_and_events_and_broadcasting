<?php

namespace App\Console\Commands\query_builder;

use App\Models\Role;
use Illuminate\Console\Command;

class OrderByRaw extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:order-by-raw';

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
        $quickestToBeUpdated = Role::query()
            ->select('name')
            ->orderByRaw('created_at - updated_at DESC')
            ->get()
            ->toArray();

        dd($quickestToBeUpdated);

    }
}
