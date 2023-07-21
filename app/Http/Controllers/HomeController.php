<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jobCount = Job::count();
        $applicantCount = JobApplication::count();

        return view('backend.dashboard', [
            'jobCount' => $jobCount,
            'applicantCount' => $applicantCount,
        ]);
    }
}
