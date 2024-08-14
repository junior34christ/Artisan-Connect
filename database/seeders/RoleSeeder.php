<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Role::create(['name' => 'Admin', 'guard_name' => 'web']);
        Role::create(['name' => 'Artisan', 'guard_name' => 'web']);
        // Role::create(['name' => 'Restaurant', 'guard_name' => 'web']);
        Role::create(['name' => 'Client', 'guard_name' => 'web']);
    }
}