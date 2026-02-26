<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    // Show the Book a Consultation form
    public function showForm()
    {
        return view('consultation');
    }

    // Handle the form submission
    public function submitForm(Request $request)
    {
        // Validation and storage logic will be added here
        return back()->with('success', 'Your consultation request has been submitted.');
    }
}
