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
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <!-- Table header -->
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Job Title</th>
                        <th scope="col" class="px-6 py-3">Description</th>
                        <th scope="col" class="px-6 py-3">Location</th>
                        <th scope="col" class="px-6 py-3">Image</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table rows -->
                    @foreach ($jobs as $job)
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $job->title }}</th>
                            <td class="px-6 py-4">{{ Str::limit($job->description, 30, '...') }}</td>
                            <td class="px-6 py-4">{{ $job->location }}</td>
                            {{-- <td class="px-6 py-4">{{ $job->image }}</td> --}}
                            <td class="px-6 py-4">
                                <a href="{{ asset('storage/' . $job->image) }}" target="_blank" class="text-lg text-blue-600">
                                    View Image
                                </a>
                            </td>
                            <td class="px-6 py-4">
                                {{-- Edit button --}}
                                <button type="button" data-modal-target="edit-job-modal-{{ $job->id }}"
                                    data-modal-toggle="edit-job-modal-{{ $job->id }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 mr-6">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-blue-600" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                        <path
                                            d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                    </svg>
                                </button>

                                {{-- Delete form --}}
                                <form action="{{ route('jobs.destroy', [$job->id]) }}" class="delete-job" method="POST"
                                    style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return false;"
                                        class="font-medium text-red-600 dark:text-red-500">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-red-600" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @include('backend.jobs.edit', ['job' => $job])
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var deleteButtons = document.querySelectorAll('.delete-job');

            deleteButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    event.preventDefault();

                    var confirmation = confirm('Are you sure you want to delete this job?');
                    if (confirmation) {
                        var form = button.closest('form');
                        form.submit();
                    }
                });
            });
        });
    </script>
@endpush
