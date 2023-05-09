<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class AttributeChanges extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:attribute-changes';

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
        $firstUser = User::find(1);

        var_dump($firstUser->isDirty());
        var_dump($firstUser->isDirty('name'));
        var_dump($firstUser->wasChanged('name'));

        var_dump($firstUser->isClean());
        var_dump($firstUser->isClean('name'));

        $firstUser->name = 'whatever';

        var_dump($firstUser->isDirty());
    }
}
