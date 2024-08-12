<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Models\Courturier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
// use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CourturierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courturiers = Courturier::all();
        return view('courturiers.index', compact('courturiers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courturiers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gender' => 'required|in:male,female',
            'phone' => 'required|string|max:15',
            'dateofbirth' => 'required|date',
            'current_address' => 'nullable|string|max:255',
            'permanent_address' => 'nullable|string|max:255',
            'user_id' => 'nullable|exists:users,id',
        ]);

        Courturier::create($request->all());

        return redirect()->route('courturiers.index')->with('success', 'Courturier created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Courturier $courturier)
    {
        return view('courturiers.show', compact('courturier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Courturier $courturier)
    {
        return view('courturiers.edit', compact('courturier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Courturier $courturier)
    {
        $request->validate([
            'gender' => 'required|in:male,female',
            'phone' => 'required|string|max:15',
            'dateofbirth' => 'required|date',
            'current_address' => 'nullable|string|max:255',
            'permanent_address' => 'nullable|string|max:255',
            'user_id' => 'nullable|exists:users,id',
        ]);

        $courturier->update($request->all());

        return redirect()->route('courturiers.index')->with('success', 'Courturier updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Courturier $courturier)
    {
        $courturier->delete();

        return redirect()->route('courturiers.index')->with('success', 'Courturier deleted successfully.');
    }
}