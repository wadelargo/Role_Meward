<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin123')
        ])->assignRole('admin');

        User::create([
            'name' => 'writer',
            'email' => 'writer@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('writer123')
        ])->assignRole('writer');

        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('user123')
        ])->assignRole('user');
    }
}
