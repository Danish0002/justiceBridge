<?php

namespace App\Http\Controllers;

use App\Models\LegalCase;
use App\Models\Prisoner;
use Illuminate\Http\Request;

class LegalCaseController extends Controller
{
    public function index()
    {
        $cases = LegalCase::all();
        return view('legal_cases.index', compact('cases'));
    }

    public function create()
    {
        $prisoners = Prisoner::all();
        return view('legal_cases.create', compact('prisoners'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'prisoner_id' => 'required|exists:prisoners,id',
            'case_number' => 'required|string|max:255',
            'court_name' => 'required|string|max:255',
            'next_hearing_date' => 'required|date',
        ]);

        LegalCase::create($request->all());
        return redirect()->route('legal-cases.index');
    }

    public function show(LegalCase $legalCase)
    {
        return view('legal_cases.show', compact('legalCase'));
    }

    public function edit(LegalCase $legalCase)
    {
        $prisoners = Prisoner::all();
        return view('legal_cases.edit', compact('legalCase', 'prisoners'));
    }

    public function update(Request $request, LegalCase $legalCase)
    {
        $request->validate([
            'prisoner_id' => 'required|exists:prisoners,id',
            'case_number' => 'required|string|max:255',
            'court_name' => 'required|string|max:255',
            'next_hearing_date' => 'required|date',
        ]);

        $legalCase->update($request->all());
        return redirect()->route('legal-cases.index');
    }

    public function destroy(LegalCase $legalCase)
    {
        $legalCase->delete();
        return redirect()->route('legal-cases.index');
    }
}
