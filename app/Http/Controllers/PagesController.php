<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function apply()
    {
        return view('frontend.apply');
    }

    public function vacancies()
    {
        $jobs = Job::all();
        return view('frontend.vacancies', compact('jobs'));
    }
}
