<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Support\Str; 

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => 'password', // Auto-hashed by your model's cast
            'phone' => '+1234567890',
            'address' => '123 Main Street',
            'country' => 'United States',
            'state' => 'California',
            'city' => 'Los Angeles',
            'zip' => '90001',
            'photo' => '',
            'token' => Str::random(60),
            'status' => 'active',

         ]);
}
}
