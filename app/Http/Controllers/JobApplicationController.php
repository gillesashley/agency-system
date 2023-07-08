<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApplication;

class JobApplicationController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'firstname' => 'required|string',
            'middlename' => 'nullable|string',
            'surname' => 'required|string',
            'email' => 'required|email|unique:job_applications,email',
            'phonenumber' => 'required|string|unique:job_applications,phonenumber',
            'position' => 'required|string',
            'address' => 'required|string',
            'postcode' => 'required|string',
            'criminal_conviction' => 'required|string',
            'criminal_offence' => 'required|string',
            'employment_history' => 'required|string',
        ]);

        $jobApplication = JobApplication::create($data);

        return redirect()->back()->with('success', 'You have successfully applied for this job!');
    }
}
