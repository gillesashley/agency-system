<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;

class ApplicantsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $job_applications = JobApplication::all();

        return view('backend.applicants.index', compact('job_applications'));
    }
}
