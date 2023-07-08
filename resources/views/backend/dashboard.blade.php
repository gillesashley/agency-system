@extends('layouts.backend')

@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-14 mb-14">
            <div class="flex justify-end">
                <button type="button" data-modal-target="create-job-modal" data-modal-toggle="create-job-modal"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Post A Job
                </button>
                {{-- Job Posting Modal --}}
                @include('backend.jobs.create')
            </div>
        </div>
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-200" role="alert">
                <span class="font-medium">{{ session('success') }}!</span>
            </div>
        @endif
        <livewire:jobs-table />
    </div>
@endsection
