<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class CountryController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $countries = Country::where('user_id', $user->id)->get(); // Récupère uniquement les produits de l'utilisateur connecté
        return view('backend.countries.indexcountry', compact('countries'));
    }

    public function create()
    {
        return view('backend.countries.createcountry');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $user = Auth::user(); // Récupère l'utilisateur connecté

        // Ajoute le user_id aux données avant de créer l'enregistrement
        $data = $request->all();
        $data['user_id'] = $user->id;

        try {
            Country::create($data);
            Toastr::success('Country created successfully :)', 'Success');
        } catch (\Exception $e) {
            Toastr::error('Failed to create country :(', 'Error');
        }

        return redirect()->route('countries.indexcountry');
    }

    public function edit(Country $country)
    {
        return view('backend.countries.editcountry', compact('country'));
    }

    public function update(Request $request, Country $country)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        try {
            $country->update($request->all());
            Toastr::success('Country updated successfully :)', 'Success');
        } catch (\Exception $e) {
            Toastr::error('Failed to update country :(', 'Error');
        }

        return redirect()->route('countries.indexcountry');
    }

    public function destroy(Country $country)
    {
        try {
            $country->delete();
            Toastr::success('Country deleted successfully :)', 'Success');
        } catch (\Exception $e) {
            Toastr::error('Failed to delete country :(', 'Error');
        }

        return redirect()->route('countries.indexcountry');
    }
}