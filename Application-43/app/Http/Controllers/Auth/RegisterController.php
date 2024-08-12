<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Carbon\Carbon;
use App\Models\Artisan;
// use App\Models\Restaurant;
use App\Models\Client; // Corrected the model name
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        $roles = DB::table('roles')->get();
        return view('auth.register', compact('roles'));
    }

    public function storeUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'role_name' => 'required|string|max:255',
            'password' => ['required', 'string', 'min:8', 'confirmed', Password::defaults()],
            'password_confirmation' => 'required|string|min:8'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $todayDate = Carbon::now()->toDayDateTimeString();

        // Create the user
        $user = User::create([
            'first_name' => $request->first_name,
            'avatar' => 'photo_defaults.jpg', // Default avatar
            'email' => $request->email,
            'join_date' => $todayDate,
            'password' => Hash::make($request->password),
        ]);

        // Récupérer le rôle et l'assigner à l'utilisateur
        $role = Role::where('name', $request->role_name)->first();
        if ($role) {
            $user->assignRole($role);
        }
        
        // Ajouter l'utilisateur à la table appropriée
        switch ($role->name) {
            case 'Artisan':
                \App\Models\Artisan::create([
                    'user_id' => $user->id,
                    'phone' => 'N/A',
                    'current_address' => 'N/A',
                    'permanent_address' => 'N/A',
                ]);
                break;
            case 'Restaurant':
                \App\Models\Restaurant::create([
                    'user_id' => $user->id,
                    'phone' => 'N/A',
                    'current_address' => 'N/A',
                    'permanent_address' => 'N/A',
                ]);
                break;
            case 'Client':
                \App\Models\Client::create([
                    'user_id' => $user->id,
                    'phone' => 'N/A',
                    'current_address' => 'N/A',
                    'permanent_address' => 'N/A',
                ]);
                break;
        }

        Toastr::success('Votre compte a été enregistré avec succès :)', 'Succès');
        return redirect()->route('login');
    }
}