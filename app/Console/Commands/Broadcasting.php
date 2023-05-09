<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Broadcasting extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:broadcasting';

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
        // run composer require pusher/pusher-php-server

        // configure pusher credentials in env and change driver to pusher. There are a range of laravel community drivers
        // available for a range of protocols eg websockets etc.

        // run npm install --save-dev laravel-echo pusher-js
        // see https://www.youtube.com/watch?v=xKru8j9LXjA
    }
}
