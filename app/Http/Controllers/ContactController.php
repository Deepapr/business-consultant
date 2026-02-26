<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Show the Contact Us form
    public function showForm()
    {
        return view('contact');
    }

    // Handle the form submission
    public function submitForm(Request $request)
    {
        // Validation and storage logic will be added here
        return back()->with('success', 'Your message has been sent.');
    }
}
