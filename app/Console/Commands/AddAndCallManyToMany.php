<?php

namespace App\Console\Commands;

use App\Models\Role;
use App\Models\User;
use Illuminate\Console\Command;

class AddAndCallManyToMany extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:add-and-call-many-to-many';

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
        $firstRole = Role::all()->first();

        $user = User::find(2);

        $user->roles()->attach($firstRole->id);

        dd($user->roles->toArray());
    }
}
