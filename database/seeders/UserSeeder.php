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
            'name' => 'Admin Utama',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin123'), // ubah sesuai kebutuhan
            'remember_token' => Str::random(10),
        ]);

        // Kasir
        User::create([
            'name' => 'Kasir Toko',
            'email' => 'kasir@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('kasir123'), // ubah sesuai kebutuhan
            'remember_token' => Str::random(10),
        ]);
        
        User::create([
            'name' => 'Kasir2',
            'email' => 'kasir2@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // ubah sesuai kebutuhan
            'remember_token' => Str::random(10),
        ]);
    }
}
