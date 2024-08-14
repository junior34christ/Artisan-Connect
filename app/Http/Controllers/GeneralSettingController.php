<?php

namespace App\Http\Controllers;

use App\Models\GeneralSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Brian2694\Toastr\Facades\Toastr;

class GeneralSettingController extends Controller
{
    public function index()
    {
        $generalSettings = GeneralSetting::first();
        return view('backend.generalsettings.index', compact('generalSettings'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'time_zone' => 'nullable|string|max:255',
            'currency' => 'required|string|max:255',
            'date_format' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('product_image')) {
            $imagePath = $request->file('product_image')->store('general_settings', 'public');
            $validated['product_image'] = $imagePath;
        }

        GeneralSetting::updateOrCreate(['id' => 1], $validated);

        Toastr::success('Paramètres mis à jour avec succès.', 'Succès');
        return redirect()->route('generalsettings.index');
    }
}