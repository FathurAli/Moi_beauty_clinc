<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'phone' => '08123456789',
            'address' => 'Jakarta',
            'password' => Hash::make('password'), // Enkripsi password
            'role' => 'admin'
        ]);
    }
}
