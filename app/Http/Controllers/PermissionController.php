<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        $roles = [1, 2, 3, 4];

        $permissions = Permission::select('permissions.*', 'role_has_permissions.role_id AS pivot_role_id', 'role_has_permissions.permission_id AS pivot_permission_id')
            ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
            ->whereIn('role_has_permissions.role_id', $roles)
            ->get();

        return view('permissions.index', ['permissions' => $permissions]);
    }
}
