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
                        <td class="px-6 py-4">
                            <a href="#"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> |
                            <a href="#"
                                class="font-medium text-red-600 dark:text-red-500 hover:underline">DELETE</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
