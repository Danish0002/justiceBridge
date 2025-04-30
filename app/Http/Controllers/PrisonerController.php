<?php

namespace App\Http\Controllers;

use App\Models\Prisoner;
use Illuminate\Http\Request;

class PrisonerController extends Controller
{
    public function index()
    {
        $prisoners = Prisoner::all();
        return view('prisoners.index', compact('prisoners'));
    }

    public function create()
    {
        return view('prisoners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
            'age' => 'required|integer',
            'case_details' => 'required|string',
            'prison_name' => 'required|string',
            'arrest_date' => 'required|date',
        ]);

        Prisoner::create($request->all());
        return redirect()->route('prisoners.index');
    }

    public function show(Prisoner $prisoner)
    {
        return view('prisoners.show', compact('prisoner'));
    }

    public function edit(Prisoner $prisoner)
    {
        return view('prisoners.edit', compact('prisoner'));
    }

    public function update(Request $request, Prisoner $prisoner)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
            'age' => 'required|integer',
            'case_details' => 'required|string',
            'prison_name' => 'required|string',
            'arrest_date' => 'required|date',
        ]);

        $prisoner->update($request->all());
        return redirect()->route('prisoners.index');
    }

    public function destroy(Prisoner $prisoner)
    {
        $prisoner->delete();
        return redirect()->route('prisoners.index');
    }
}
