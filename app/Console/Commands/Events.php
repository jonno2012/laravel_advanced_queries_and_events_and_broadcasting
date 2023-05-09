<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Events extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:events';

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
        //  We can create our own arbitrary events, or we can get a regular laravel actions, like adding a record to
        // the db. To enable event notifications on a model we add the Notifiable trait on the model and declare the
        // event handlers. See Log.php
    }
}
