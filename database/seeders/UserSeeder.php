<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        User::create([
            'nama' => 'Admin Utama',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'remember_token' => Str::random(10),
        ]);

        // Kasir 1
        User::create([
            'nama' => 'Kasir Toko',
            'email' => 'kasir@gmail.com',
            'password' => Hash::make('kasir123'),
            'role' => 'kasir',
            'remember_token' => Str::random(10),
        ]);

        // Kasir 2
        User::create([
            'nama' => 'Kasir Dua',
            'email' => 'kasir2@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'kasir',
            'remember_token' => Str::random(10),
        ]);
    }
}
