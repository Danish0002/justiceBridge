<?php

namespace App\Http\Controllers;

use App\Models\Lawyer;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    public function index()
    {
        $lawyers = Lawyer::all();
        return view('lawyers.index', compact('lawyers'));
    }

    public function create()
    {
        return view('lawyers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:15',
            'specialization' => 'required|string|max:255',
            'is_available' => 'required|boolean',
        ]);

        Lawyer::create($request->all());
        return redirect()->route('lawyers.index');
    }

    public function show(Lawyer $lawyer)
    {
        return view('lawyers.show', compact('lawyer'));
    }

    public function edit(Lawyer $lawyer)
    {
        return view('lawyers.edit', compact('lawyer'));
    }

    public function update(Request $request, Lawyer $lawyer)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:15',
            'specialization' => 'required|string|max:255',
            'is_available' => 'required|boolean',
        ]);

        $lawyer->update($request->all());
        return redirect()->route('lawyers.index');
    }

    public function destroy(Lawyer $lawyer)
    {
        $lawyer->delete();
        return redirect()->route('lawyers.index');
    }
}
