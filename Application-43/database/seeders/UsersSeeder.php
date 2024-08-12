<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $artisan = User::create([
            'name' => 'Artisan User',
            'email' => 'Artisan@example.com',
            'password' => bcrypt('password123')
        ]);
        $artisan->assignRole('Artisan');

        $client = User::create([
            'name' => 'Client User',
            'email' => 'Client@example.com',
            'password' => bcrypt('password123')
        ]);
        $client->assignRole('Client');
    }
}