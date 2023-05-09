<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class Scopes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:scopes';

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
        $adminLogs = User::query()->adminUsers()->get()->pluck('id');
        dd($adminLogs);
    }
}
