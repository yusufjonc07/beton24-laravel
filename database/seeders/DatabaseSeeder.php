<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Workplace::factory(1)->create();
        \App\Models\Department::factory(1)->create();
        \App\Models\Shift::factory(1)->create();
        \App\Models\User::factory(1)->create();
    }
}
