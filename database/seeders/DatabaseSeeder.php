<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Admin user
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@ubsi.ac.id',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // Create Editor user
        User::factory()->create([
            'name' => 'Editor',
            'email' => 'editor@ubsi.ac.id',
            'password' => bcrypt('password'),
            'role' => 'editor',
        ]);
    }
}
