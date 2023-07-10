<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobApplicationConfirmationMail;

class JobApplicationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        try {
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
                'criminal_offence' => 'required|string',
                'cv' => 'required|file|mimes:pdf,doc,docx|max:2048', // Add validation for the CV file
            ]);

            // Get the uploaded file
            $cvFile = $request->file('cv');

            // Generate the unique file name
            $firstName = $request->input('firstname');
            $surname = $request->input('surname');
            $originalFileName = $cvFile->getClientOriginalName();
            $uniqueFileName = $firstName . '_' . $surname . '_' . $originalFileName;

            // Store the CV file with the unique name
            $cvPath = $cvFile->storeAs('cv_files', $uniqueFileName);

            $data['cv'] = $cvPath;

            $jobApplication = JobApplication::create($data);

            // Send confirmation email to the applicant
            Mail::to($jobApplication->email)->send(new JobApplicationConfirmationMail($jobApplication));

            return redirect()->back()->with('success', 'You have successfully applied for this job!');
        } catch (\Exception $e) {
            // Handle the exception
            return redirect()->back()->with('error', 'An error occurred while processing your job application. Please try again later.');
        }
    }
}
