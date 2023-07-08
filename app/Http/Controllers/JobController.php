<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JobController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jobTitle' => 'required|string|max:255',
            'jobDescription' => 'required|string',
            'jobLocation' => 'required|string|max:255',
            'jobImage' => 'nullable|image|max:2048', // Add validation for the image field
        ]);

        $imagePath = null;

        if ($request->hasFile('jobImage')) {
            $image = $request->file('jobImage');
            $imageName = uniqid() . '.' . $image->getClientOriginalName();
            $image->storeAs('public/images', $imageName);
            $imagePath = 'images/' . $imageName;
        }

        $job = Job::create([
            'title' => $validatedData['jobTitle'],
            'description' => $validatedData['jobDescription'],
            'location' => $validatedData['jobLocation'],
            'image' => $imagePath, // Assign the image path to the 'image' field
        ]);

        return redirect()->back()->with('success', 'Job posted successfully');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'jobTitle' => 'required|string|max:255',
            'jobDescription' => 'required|string',
            'jobLocation' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $job = Job::findOrFail($id);

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($job->image) {
                Storage::delete($job->image);
            }

            // Generate a unique and meaningful image name
            $imageName = 'images/' . uniqid() . '.' . $request->file('image')->getClientOriginalName();

            // Store the new image
            $imagePath = $request->file('image')->storeAs('', $imageName);
            $validatedData['image'] = $imagePath;
        }

        $job->update($validatedData);

        return redirect()->back()->with('success', 'Job updated successfully');
    }

    public function destroy($id)
    {
        $job = Job::findOrFail($id);

        // Delete the associated image file
        if ($job->image) {
            // Assuming the image is stored in the public directory
            $imagePath = public_path('storage/') . $job->image;

            // Check if the file exists before attempting to delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $job->delete();

        return redirect()->back()->with('success', 'Job deleted successfully');
    }
}
