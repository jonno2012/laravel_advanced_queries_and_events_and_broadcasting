<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory()->count(10)->create();
        \App\Models\Log::factory()->count(10)->create();
         foreach (['admin', 'user', 'partner', 'associate'] as $role){
             \App\Models\Role::factory()->create(['name' => $role]);
         }

         \App\Models\RoleUser::factory()->count(10)->create();
         \App\Models\LogValue::factory()->count(1000)->create();
         \App\Models\Classification::factory()->count(10)->create();
         \App\Models\LogClassification::factory()->count(1000)->create();
    }
}
