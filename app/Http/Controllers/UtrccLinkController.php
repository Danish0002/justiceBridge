<?php

namespace App\Http\Controllers;

use App\Models\UtrccLink;
use App\Models\Prisoner;
use App\Models\Lawyer;
use Illuminate\Http\Request;

class UtrccLinkController extends Controller
{
    public function index()
    {
        $utrccLinks = UtrccLink::all();
        return view('utrcc_links.index', compact('utrccLinks'));
    }

    public function create()
    {
        $prisoners = Prisoner::all();
        $lawyers = Lawyer::all();
        return view('utrcc_links.create', compact('prisoners', 'lawyers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'prisoner_id' => 'required|exists:prisoners,id',
            'lawyer_id' => 'required|exists:lawyers,id',
            'assigned_date' => 'required|date',
        ]);

        UtrccLink::create($request->all());
        return redirect()->route('utrcc-links.index');
    }

    public function show(UtrccLink $utrccLink)
    {
        return view('utrcc_links.show', compact('utrccLink'));
    }

    public function edit(UtrccLink $utrccLink)
    {
        $prisoners = Prisoner::all();
        $lawyers = Lawyer::all();
        return view('utrcc_links.edit', compact('utrccLink', 'prisoners', 'lawyers'));
    }

    public function update(Request $request, UtrccLink $utrccLink)
    {
        $request->validate([
            'prisoner_id' => 'required|exists:prisoners,id',
            'lawyer_id' => 'required|exists:lawyers,id',
            'assigned_date' => 'required|date',
        ]);

        $utrccLink->update($request->all());
        return redirect()->route('utrcc-links.index');
    }

    public function destroy(UtrccLink $utrccLink)
    {
        $utrccLink->delete();
        return redirect()->route('utrcc-links.index');
    }
}
