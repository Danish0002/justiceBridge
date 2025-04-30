<?php

namespace App\Http\Controllers;

use App\Models\Rehabilitation;
use App\Models\Prisoner;
use Illuminate\Http\Request;

class RehabilitationController extends Controller
{
    // Show all rehabilitation programs
    public function index()
    {
        // Fetch all rehabilitation records
        $rehabilitations = Rehabilitation::all();
        
        // Pass the data to the view
        return view('rehabilitations.index', compact('rehabilitations'));
    }

    // Show the form for creating a new rehabilitation program
    public function create()
    {
        $prisoners = Prisoner::all(); // Get all prisoners
        return view('rehabilitations.create', compact('prisoners'));
    }

    // Store the newly created rehabilitation program
    public function store(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'prisoner_id' => 'required|exists:prisoners,id',
            'program_name' => 'required|string|max:255',
            'description' => 'required|string',
            'is_completed' => 'required|boolean',
        ]);

        // Save the rehabilitation program data
        Rehabilitation::create([
            'prisoner_id' => $request->prisoner_id,
            'program_name' => $request->program_name,
            'description' => $request->description,
            'is_completed' => $request->is_completed,
        ]);

        // Redirect with success message
        return redirect()->route('rehabilitations.index')->with('success', 'Rehabilitation program created successfully!');
    }

    // Show a single rehabilitation program's details
    public function show(Rehabilitation $rehabilitation)
    {
        return view('rehabilitations.show', compact('rehabilitation'));
    }

    // Show the form for editing a rehabilitation program
    public function edit(Rehabilitation $rehabilitation)
    {
        $prisoners = Prisoner::all(); // Get all prisoners
        return view('rehabilitations.edit', compact('rehabilitation', 'prisoners'));
    }

    // Update an existing rehabilitation program
    public function update(Request $request, Rehabilitation $rehabilitation)
    {
        // Validation
        $validated = $request->validate([
            'prisoner_id' => 'required|exists:prisoners,id',
            'program_name' => 'required|string|max:255',
            'description' => 'required|string',
            'is_completed' => 'required|boolean',
        ]);

        // Update the rehabilitation program data
        $rehabilitation->update([
            'prisoner_id' => $request->prisoner_id,
            'program_name' => $request->program_name,
            'description' => $request->description,
            'is_completed' => $request->is_completed,
        ]);

        // Redirect with success message
        return redirect()->route('rehabilitations.index')->with('success', 'Rehabilitation program updated successfully!');
    }

    // Delete a rehabilitation program
    public function destroy(Rehabilitation $rehabilitation)
    {
        // Delete the rehabilitation program
        $rehabilitation->delete();

        // Redirect with success message
        return redirect()->route('rehabilitations.index')->with('success', 'Rehabilitation program deleted successfully!');
    }
}
