<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Admin User
        User::updateOrCreate(
            ['email' => 'admin@lsp-ubsi.ac.id'],
            [
                'name' => 'Admin',
                'email' => 'admin@lsp-ubsi.ac.id',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'email_verified_at' => now(),
            ]
        );

        // Create Editor User
        User::updateOrCreate(
            ['email' => 'editor@lsp-ubsi.ac.id'],
            [
                'name' => 'Editor',
                'email' => 'editor@lsp-ubsi.ac.id',
                'password' => Hash::make('editor123'),
                'role' => 'editor',
                'email_verified_at' => now(),
            ]
        );
    }
}
