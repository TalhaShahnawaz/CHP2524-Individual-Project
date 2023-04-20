<?php

namespace App\Http\Controllers;

use App\Models\MentalHealthForm1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MentalFormSubmissionController extends Controller
{
    public function store(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'mobile' => 'required',
        'emergency_mobile' => 'required',
        'current_location' => 'required',
        'message' => 'required',
        
    ]);

    // Create a new instance of the MentalHealthForm1 model and store the form data
    $mentalHealthForm1 = new MentalHealthForm1();
    $mentalHealthForm1->fill($validatedData);
    $mentalHealthForm1->save();

   // Store a flash message in the session
   $request->session()->flash('success', 'Your form submission was successful!');

   // Redirect back to the form page
   return redirect('/mentalwellbeing1');
}
}