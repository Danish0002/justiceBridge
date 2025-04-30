<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Show the contact form
    public function show()
    {
        return view('contact');
    }

    // Handle the form submission
    public function submit(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Process the form (send email, save data, etc.)
        // For now, just redirect with a success message
        return redirect('/contact')->with('success', 'Your message has been sent!');
    }
}

