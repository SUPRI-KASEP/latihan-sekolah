<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'username' => 'Administrator',
            'email'    => 'administrator@gmail.com',
            'password' =>bcrypt('admin123'),
            'level'    => 'admin'
        ]);

        User::factory()->create([
            'username' => 'Operator',
            'email'    => 'operator@gmail.com',
            'password' =>bcrypt('operator12'),
            'level'    => 'operator'
        ]);
    }
}
