<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
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

    public function update(Request $request, $id)
    {
        try {
            $data = $request->validate([
                'title' => 'required|string',
                'firstname' => 'required|string',
                'middlename' => 'nullable|string',
                'surname' => 'required|string',
                'email' => 'required|email|unique:job_applications,email,' . $id,
                'phonenumber' => 'required|string|unique:job_applications,phonenumber,' . $id,
                'position' => 'required|string',
                'address' => 'required|string',
                'postcode' => 'required|string',
                'criminal_offence' => 'required|string',
                'cv' => 'nullable|file|mimes:pdf,doc,docx|max:2048', // Update the validation for the CV file
            ]);

            $jobApplication = JobApplication::findOrFail($id);

            // Update the CV file if a new file is provided
            if ($request->hasFile('cv')) {
                // Get the uploaded file
                $cvFile = $request->file('cv');

                // Generate the unique file name
                $firstName = $request->input('firstname');
                $surname = $request->input('surname');
                $originalFileName = $cvFile->getClientOriginalName();
                $uniqueFileName = $firstName . '_' . $surname . '_' . $originalFileName;

                // Store the CV file with the unique name
                $cvPath = $cvFile->storeAs('cv_files', $uniqueFileName);

                // Delete the previous CV file
                if ($jobApplication->cv) {
                    Storage::delete($jobApplication->cv);
                }

                $data['cv'] = $cvPath;
            }

            $jobApplication->update($data);

            return redirect()->back()->with('success', 'Job application updated successfully!');
        } catch (\Exception $e) {
            // Handle the exception
            return redirect()->back()->with('error', 'An error occurred while updating the job application. Please try again later.');
        }
    }

    public function openCV($id)
    {
        // Find the job application by ID
        $jobApplication = JobApplication::findOrFail($id);

        // Get the CV file path
        $cvFilePath = $jobApplication->cv;

        // Check if the CV file exists
        if (Storage::exists($cvFilePath)) {
            // Get the file's extension
            $extension = pathinfo($cvFilePath, PATHINFO_EXTENSION);

            // Determine the appropriate Content-Type based on the file extension
            $mimeType = '';
            switch ($extension) {
                case 'pdf':
                    $mimeType = 'application/pdf';
                    break;
                case 'doc':
                    $mimeType = 'application/msword';
                    break;
                case 'docx':
                    $mimeType = 'application/vnd.openxmlformats-officedocument.wordprocessingml.document';
                    break;
                default:
                    // Invalid file extension
                    abort(404, 'Invalid CV file format.');
            }

            // Get the original filename
            $originalFileName = pathinfo($cvFilePath, PATHINFO_FILENAME);

            // Generate the filename for display in the browser
            $displayFileName = $originalFileName . '.' . $extension;

            // Set the Content-Disposition header to 'inline' with the display filename
            $headers = [
                'Content-Type' => $mimeType,
                'Content-Disposition' => 'inline; filename="' . $displayFileName . '"',
            ];

            // Return the file response with the headers
            return Storage::response($cvFilePath, null, $headers);
        }

        // CV file not found
        abort(404, 'CV file not found.');
    }
}
