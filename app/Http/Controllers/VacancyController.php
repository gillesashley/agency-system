<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('frontend.vacancies', compact('jobs'));
    }
}
