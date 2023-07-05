<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;

class JobsTable extends Component
{
    public function render()
    {
        $jobs = Job::all();

        return view('livewire.jobs-table', compact('jobs'));
    }
}
