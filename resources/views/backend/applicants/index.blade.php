@extends('layouts.backend')

@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-14 mb-14">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                {{-- Search --}}

                <form class="mb-20">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search Name, email..." required>
                        <button type="submit"
                            class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>

                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Title
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Firstname
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Middlename
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Surname
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Phonenumber
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($job_applications as $index => $job_application)
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $job_application->title }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $job_application->firstname }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $job_application->middlename }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $job_application->surname }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $job_application->email }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $job_application->phonenumber }}
                                </td>
                                <td class="px-6 py-4">
                                    {{-- View applicant's details button --}}
                                    <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                        type="button" data-drawer-target="drawer-right-example"
                                        data-drawer-show="drawer-right-example" data-drawer-placement="right"
                                        aria-controls="drawer-right-example">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-blue-600" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                            <path
                                                d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Include the right drawer component -->
                @include('backend.inc.right-drawer')
            </div>
        </div>
    </div>
@endsection
