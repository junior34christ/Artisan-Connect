<?php

namespace App\Http\Controllers;

use App\Models\Product;
// use App\Models\User;
// use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Brian2694\Toastr\Facades\Toastr;
// use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
// use App\Model\Role;
// use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified')->only('index'); // S'applique uniquement à la méthode index
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->hasRole('Admin')) {

            return view('dashboard.home');
        } elseif ($user->hasRole('Client')) {

            return view('dashboard.home');
        } elseif ($user->hasRole('Artisan')) {

            $user = Auth::user();
            $products = Product::where('user_id', $user->id)
                ->orderBy('created_at', 'desc')
                ->take(5)
                ->get();
            return view('dashboard.home', compact('products'));
        } else {
            return 'NO ROLE ASSIGNED YET!';
        }

        return view('home');
    }

    // public function comment(Request $request, $id)
    // {
    //     $artisan = Artisan::findOrFail($id);
    //     // Traitement du commentaire
    //     return back()->with('success', 'Commentaire ajouté avec succès');
    // }

    public function editProfile()
    {
        return view('dashboard.profile');
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:15',
            'password' => 'nullable|string|min:8|confirmed',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        if ($request->hasFile('avatar')) {
            // Supprimer l'ancien avatar s'il existe
            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }
            // Stocker le nouvel avatar
            $path = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = $path;
        }

        $user->save();

        Toastr::success('Category updated successfully :)', 'Success');
        return redirect()->route('dashboard.profile')->with('success', 'Profile updated successfully.');
    }

    public function AdminDashboardIndex()
    {
        return view('dashboard.admin_dashboard');
    }

    public function couturierDashboardIndex()
    {
        return view('dashboard.artisan_dashboard');
    }

    public function normaluserDashboardIndex()
    {
        return view('dashboard.clients_dashboard');
    }
}