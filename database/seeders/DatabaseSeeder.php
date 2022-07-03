<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'olszewskik',
            'password' => bcrypt('Olszakkamil1!'),
            'first_name' => 'Kamil',
            'last_name' => 'Olszewski',
            'email' => 'kamil.web@gmail.com',
            'phone' => '604944382',
        ]);

        // \App\Models\Group::factory(6)->create();
    }
}