<div>
    <!-- jobs-table.blade.php -->
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
                        <td class="px-6 py-4">{{ $job->description }}</td>
                        <td class="px-6 py-4">{{ $job->location }}</td>
                        <td class="px-6 py-4">{{ $job->image }}</td>
                        <td class="px-6 py-4">
                            {{-- Edit button --}}
                            <button type="button" data-modal-target="edit-job-modal-{{ $job->id }}"
                                data-modal-toggle="edit-job-modal-{{ $job->id }}"
                                class="font-medium text-blue-600 dark:text-blue-500 mr-6">
                                <svg class="w-6 h-6 text-gray-800 dark:text-green-600" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                    <path
                                        d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm-1.391 7.361.707-3.535a3 3 0 0 1 .82-1.533L7.929 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h4.259a2.975 2.975 0 0 1-.15-1.639ZM8.05 17.95a1 1 0 0 1-.981-1.2l.708-3.536a1 1 0 0 1 .274-.511l6.363-6.364a3.007 3.007 0 0 1 4.243 0 3.007 3.007 0 0 1 0 4.243l-6.365 6.363a1 1 0 0 1-.511.274l-3.536.708a1.07 1.07 0 0 1-.195.023Z" />
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
