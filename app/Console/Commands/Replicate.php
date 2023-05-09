<?php

namespace App\Console\Commands;

use App\Models\Role;
use Illuminate\Console\Command;

class Replicate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:replicate';

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
        $role = Role::create([
            'type' => 'replicated',
            'line_1' => 'test2@test.com',
            'password' => 'sdfdsfsdfsdf'
        ]);

        $replicant = $role->replicate()->fill([
            'password' => 'sdfdsfsdfsdf'
        ]);

        $replicant->save();
    }
}
