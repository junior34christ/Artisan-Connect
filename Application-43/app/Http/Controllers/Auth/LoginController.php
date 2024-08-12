<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Brian2694\Toastr\Facades\Toastr;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        DB::beginTransaction();
        try {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                DB::commit();
                Toastr::success('Connexion réussie :)','Succès');
                return redirect()->intended($this->redirectTo);
            } else {
                DB::rollBack();
                Toastr::error('Échec, NOM UTILISATEUR OU MOT DE PASSE INCORRECT :)','Erreur');
                return redirect()->route('login');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            Toastr::error('Échec, CONNEXION :)','Erreur');
            return redirect()->back();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        Toastr::success('Logout successfully :)','Success');
        return redirect()->route('login');
    }
}