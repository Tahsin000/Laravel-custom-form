<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submission;


class FormController extends Controller
{
    //
    public function showForm()
    {
        return view('public_form');
    }

    public function submitForm(Request $request)
    {
        $submission = new Submission();
        $rules = [
            'email' => 'required|email',
            'name' => 'required|string|max:255',
            'occupation' => 'required|string|max:255',
            'institute' => 'required|string|max:255',
            'contact_no' => 'required|numeric',
            'whatsapp_number' => 'nullable|numeric',
            'facebook_profile' => 'nullable|url',
            'reason' => 'required|string',
            'facebook_business_profile' => 'nullable|url',
        ];

        // Validate the request data
        $validatedData = $request->validate($rules);

        // Create and save the new Submission using mass assignment
        $submission = Submission::create($validatedData);
        return redirect()->route('submission.success');
    }

    public function submissionSuccess()
    {
        return view('submission_success');
    }
}
