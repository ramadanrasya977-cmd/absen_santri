<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Security',
            'email' => 'security@gmail.com',
            'password' => Hash::make('security123'),
            'role' => 'security',
        ]);

        User::create([
            'name' => 'Santri',
            'email' => 'santri@gmail.com',
            'password' => Hash::make('santri123'),
            'role' => 'santri',
        ]);
    }
}