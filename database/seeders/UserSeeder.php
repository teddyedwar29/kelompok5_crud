<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(['name' => 'admin', 'email' => 'admin@gmail.com', 'status' => 'active', 'role' => 'admin', 'password' => 'admin123']);
        User::create(['name' => 'teddy', 'email' => 'teddy@gmail.com', 'status' => 'active', 'role' => 'user', 'password' => 'teddy123']);
        User::create(['name' => 'hafiz', 'email' => 'hafiz@gmail.com', 'status' => 'active', 'role' => 'user', 'password' => 'hafiz123']);
        User::create(['name' => 'kiff', 'email' => 'kiff@gmail.com', 'status' => 'active', 'role' => 'user', 'password' => 'kiff123']);
    }
}
