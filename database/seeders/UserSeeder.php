<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'User 1',
            'email' => 'user1@gmail.com',
            'role' => 'User',
            'password' => bcrypt('123')
        ]);

        User::create([
            'name' => 'Alumni 1',
            'email' => 'alumni1@gmail.com',
            'role' => 'Alumni',
            'password' => bcrypt('123')
        ]);
    }
}
