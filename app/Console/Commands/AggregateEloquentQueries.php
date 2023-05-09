<?php

namespace App\Console\Commands;

use App\Models\Log;
use App\Models\Role;
use Illuminate\Console\Command;

class AggregateEloquentQueries extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:aggregate-eloquent-queries';

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
        $numberOfLogs = Log::all()->count();
        echo $numberOfLogs . PHP_EOL;

        $maxRoleId = Role::all()->max('id');
        echo $maxRoleId . PHP_EOL;
    }
}
