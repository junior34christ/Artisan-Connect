<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Brian2694\Toastr\Facades\Toastr;

class StoreController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $stores = Store::where('user_id', $user->id)->get();
        return view('backend.stores.indexstore', compact('stores'));
    }

    public function create()
    {
        return view('backend.stores.createstore');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:stores',
            'password' => 'required|string|min:8',
            'phone' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:stores',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('store_images', 'public');
            $validated['image'] = $imagePath;
        }

        $validated['password'] = bcrypt($validated['password']);
        $validated['user_id'] = Auth::id(); // Ajoute l'user_id aux données validées

        try {
            Store::create($validated);
            Toastr::success('Store created successfully :)', 'Success');
        } catch (\Exception $e) {
            Toastr::error('Failed to create Store :(', 'Error');
        }

        return redirect()->route('stores.indexstore');
    }

    public function show(Store $store)
    {
        return view('backend.stores.showstore', compact('store'));
    }

    public function edit(Store $store)
    {
        return view('backend.stores.editstore', compact('store'));
    }

    public function update(Request $request, Store $store)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:stores,username,' . $store->id,
            'password' => 'nullable|string|min:8',
            'phone' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:stores,email,' . $store->id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($store->image) {
                Storage::delete('public/' . $store->image);
            }
            $imagePath = $request->file('image')->store('store_images', 'public');
            $validated['image'] = $imagePath;
        }

        if (!empty($validated['password'])) {
            $validated['password'] = bcrypt($validated['password']);
        } else {
            unset($validated['password']);
        }

        $store->update($validated);

        Toastr::success('Store updated successfully.', 'Success');
        return redirect()->route('stores.indexstore');
    }

    public function destroy(Store $store)
    {
        if ($store->image) {
            Storage::delete('public/' . $store->image);
        }

        $store->delete();

        Toastr::success('Store deleted successfully.', 'Success');
        return redirect()->route('stores.indexstore');
    }
}