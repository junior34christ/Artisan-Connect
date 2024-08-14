<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Country;
use App\Models\State;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $customers = Customer::where('user_id', $user->id)->get(); // Récupère uniquement les produits de l'utilisateur connecté
        return view('backend.customers.indexcustomer', compact('customers'));
    }

    public function create()
    {
        $user = Auth::user();
        $countries = Country::where('user_id', $user->id)->get();
        $states = State::where('user_id', $user->id)->get();
        return view('backend.customers.createcustomer', compact('countries', 'states'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:customers',
            'phone' => 'required|string|max:15',
            'country_id' => 'required|exists:countries,id',
            'state_id' => 'required|exists:states,id',
            'address' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('images', 'public') : null;


        $user = Auth::user(); // Récupère l'utilisateur connecté

        // Ajoute le user_id aux données avant de créer l'enregistrement
        $data = $request->all();
        $data['user_id'] = $user->id;

        try {
            Customer::create($data);
            Toastr::success('Customer created successfully :)', 'Success');
        } catch (\Exception $e) {
            Toastr::error('Failed to create Customer :(', 'Error');
        }

        return redirect()->route('customers.indexcustomer')->with('success', 'Customer created successfully.');
    }

    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return view('backend.customers.showcustomer', compact('customer'));
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        $countries = Country::all();
        $states = State::all();
        return view('backend.customers.editcustomer', compact('customer', 'countries', 'states'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:customers,email,' . $customer->id,
            'phone' => 'required|string|max:15',
            'country_id' => 'required|exists:countries,id',
            'state_id' => 'required|exists:states,id',
            'address' => 'required|string|max:255',
            'description' => 'nullable|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('avatar')) {
            if ($customer->avatar) {
                Storage::disk('public')->delete($customer->avatar);
            }
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $validated['avatar'] = $avatarPath;
        }

        try {
            $customer->update($validated);
            Toastr::success('Customer created successfully :)', 'Success');
        } catch (\Exception $e) {
            Toastr::error('Failed to create Customer :(', 'Error');
        }
        

        return redirect()->route('customers.indexcustomer')->with('success', 'Customer updated successfully.');
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        if ($customer->avatar) {
            Storage::disk('public')->delete($customer->avatar);
        }
        
        try {
            $customer->delete();
            Toastr::success('Customer created successfully :)', 'Success');
        } catch (\Exception $e) {
            Toastr::error('Failed to create Customer :(', 'Error');
        }

        return redirect()->route('customers.indexcustomer')->with('success', 'Customer deleted successfully.');
    }
}