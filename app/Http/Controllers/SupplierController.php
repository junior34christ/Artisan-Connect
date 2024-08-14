<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Models\Country;
use App\Models\State;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SupplierController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $suppliers= Supplier::where('user_id', $user->id)->get(); // Récupère uniquement les produits de l'utilisateur connecté
        return view('backend.suppliers.indexsupplier', compact('suppliers'));
    }

    public function create()
    {
        $user = Auth::user();
        $countries= Country::where('user_id', $user->id)->get();        
        $states= State::where('user_id', $user->id)->get();
        return view('backend.suppliers.createsupplier', compact('countries', 'states'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:suppliers',
            'phone' => 'required|string|max:15',
            'country_id' => 'required|exists:countries,id',
            'state_id' => 'required|exists:states,id',
            'address' => 'required|string|max:255',
            'description' => 'nullable|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $validated['avatar'] = $avatarPath;
        }

        $user = Auth::user(); // Récupère l'utilisateur connecté

        // Ajoute le user_id aux données avant de créer l'enregistrement
        $data = $request->all();
        $data['user_id'] = $user->id;
        Supplier::create($data);

        return redirect()->route('suppliers.indexsupplier')->with('success', 'Supplier created successfully.');
    }

    public function show(Supplier $supplier)
    {
        return view('backend.suppliers.showsupplier', compact('supplier'));
    }

    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        $countries = Country::all();
        $states = State::all();
        return view('backend.suppliers.editsupplier', compact('supplier', 'countries', 'states'));
    }

    public function update(Request $request, Supplier $supplier)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:suppliers,email,' . $supplier->id,
            'phone' => 'required|string|max:15',
            'country_id' => 'required|exists:countries,id',
            'state_id' => 'required|exists:states,id',
            'address' => 'required|string|max:255',
            'description' => 'nullable|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('avatar')) {
            if ($supplier->avatar) {
                Storage::disk('public')->delete($supplier->avatar);
            }
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $validated['avatar'] = $avatarPath;
        }

        $supplier->update($validated);

        return redirect()->route('suppliers.indexsupplier')->with('success', 'Supplier updated successfully.');
    }

    public function destroy(Supplier $supplier)
    {
        if ($supplier->avatar) {
            Storage::disk('public')->delete($supplier->avatar);
        }

        $supplier->delete();

        return redirect()->route('suppliers.indexsupplier')->with('success', 'Supplier deleted successfully.');
    }
}