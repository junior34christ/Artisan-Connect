<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Support\Facades\DB;
use App\Models\Country;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class StateController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $states = State::with('country')->where('user_id', $user->id)->get();
        return view('backend.states.indexstate', compact('states'));
    }

    public function create()
    {
        $user = Auth::user();
        $countries = Country::where('user_id', $user->id)->get();
        return view('backend.states.createstate', compact('countries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'country_id' => 'required|exists:countries,id',
            'description' => 'nullable|string',
        ]);

        $user = Auth::user();
        $data = $request->all();
        $data['user_id'] = $user->id;

        DB::beginTransaction();
        try {
            State::create($data);
            Toastr::success('State created successfully :)', 'Success');
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            Toastr::error('Failed to create State :(', 'Error');
            return redirect()->back()->withErrors(['message' => 'An error occurred while creating the state.']);
        }

        return redirect()->route('states.indexstate')->with('success', 'State created successfully.');
    }

    public function edit(State $state)
    {
        $user = Auth::user();
        $countries = Country::where('user_id', $user->id)->get();
        return view('backend.states.editstate', compact('state', 'countries'));
    }

    public function update(Request $request, State $state)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'country_id' => 'required|exists:countries,id',
            'description' => 'nullable|string',
        ]);

        try {
            $state->update($request->all());
            Toastr::success('State updated successfully :)', 'Success');
        } catch (\Exception $e) {
            Toastr::error('Failed to update State :(', 'Error');
            return redirect()->back()->withErrors(['message' => 'An error occurred while updating the state.']);
        }

        return redirect()->route('states.indexstate')->with('success', 'State updated successfully.');
    }

    public function destroy(State $state)
    {
        try {
            $state->delete();
            Toastr::success('State deleted successfully :)', 'Success');
        } catch (\Exception $e) {
            Toastr::error('Failed to delete State :(', 'Error');
            return redirect()->back()->withErrors(['message' => 'An error occurred while deleting the state.']);
        }

        return redirect()->route('states.indexstate')->with('success', 'State deleted successfully.');
    }
}