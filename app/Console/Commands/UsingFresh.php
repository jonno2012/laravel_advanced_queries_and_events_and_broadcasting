<?php

namespace App\Console\Commands;

use App\Models\Role;
use Illuminate\Console\Command;

class UsingFresh extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:using-fresh';

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
        $role = Role::find(1);
        echo $role->name . PHP_EOL;

        $role->name = 'new role';

        $role->refresh();

        echo $role->name . PHP_EOL;
    }
}
