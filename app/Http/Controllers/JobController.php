<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jobTitle' => 'required|string|max:255',
            'jobDescription' => 'required|string',
            'jobLocation' => 'required|string|max:255',
        ]);

        $job = Job::create([
            'title' => $validatedData['jobTitle'],
            'description' => $validatedData['jobDescription'],
            'location' => $validatedData['jobLocation'],
        ]);

        return redirect()->back()->with('success', 'Job posted successfully');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'jobTitle' => 'required|string|max:255',
            'jobDescription' => 'required|string',
            'jobLocation' => 'required|string|max:255',
        ]);

        $job = Job::findOrFail($id);

        $job->update([
            'title' => $validatedData['jobTitle'],
            'description' => $validatedData['jobDescription'],
            'location' => $validatedData['jobLocation'],
        ]);

        return redirect()->back()->with('success', 'Job updated successfully');
    }

    public function delete($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect()->back()->with('success', 'Job deleted successfully');
    }
}
