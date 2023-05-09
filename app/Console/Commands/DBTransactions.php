<?php

namespace App\Console\Commands;

use App\Models\Role;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DBTransactions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:db-transactions';

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
        $this->info('Creating user roless');

        DB::transaction(function() {
//            $newRole = Role::factory()->create(['name' => 'janitor', 'whatever' => 'thtee']);
            User::factory()->create();
        });




//        dd($newRole->id);
//        $id = $newRole->save();
//        dd($id);

//        $userName = $this->ask('Enter username...');
//        $role = Role::find(9);

//        $userRoles = User::find(10)->roles->toArray();
//        $userRoles->roles()->attach($role->id);
//        dd($userRoles->roles()->get()->toArray());
//dd($userRoles);
//        echo "User is {$userName}";
    }
}
