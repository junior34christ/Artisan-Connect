<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role; // Assurez-vous d'importer le modèle Role
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('backend.users.indexuser', compact('users'));
    }

    public function create()
    {
        $roles = Role::all(); // Récupérer tous les rôles
        return view('backend.users.createuser', compact('roles'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8',
            'phone' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:users',
            'role_id' => 'required|exists:roles,id', // Validation pour le rôle
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $validated['avatar'] = $avatarPath;
        }

        $user = User::create($validated);
        $user->roles()->attach($validated['role_id']); // Assigner le rôle à l'utilisateur

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function show(User $user)
    {
        return view('backend.users.showuser', compact('user'));
    }

    public function edit(User $user)
    {
        $roles = Role::all(); // Récupérer tous les rôles
        return view('backend.users.edituser', compact('user', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'password' => 'nullable|string|min:8',
            'phone' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'role_id' => 'required|exists:roles,id', // Validation pour le rôle
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->filled('password')) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        if ($request->hasFile('avatar')) {
            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $validated['avatar'] = $avatarPath;
        }

        $user->update($validated);
        $user->roles()->sync($validated['role_id']); // Mettre à jour le rôle de l'utilisateur

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        if ($user->avatar) {
            Storage::disk('public')->delete($user->avatar);
        }

        $user->roles()->detach(); // Détacher les rôles de l'utilisateur
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}