<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function createRole()
    {
        // Créer un rôle
        $role = Role::create(['name' => 'Admin']);
        $role = Role::create(['name' => 'Courturier']);
        $role = Role::create(['name' => 'Restaurant']);
        $role = Role::create(['name' => 'Client']);

        // Assigner le rôle à un utilisateur
        $user = User::find(1);
        $user->assignRole('Courturier');
        
        $user = User::find(2);
        $user->assignRole('Restaurant');
        
        $user = User::find(3);
        $user->assignRole('Client');

        return "Rôle assigné avec succès.";
    }
}