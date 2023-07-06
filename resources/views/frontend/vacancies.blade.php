@extends('layouts.frontend')

@section('carousel')
@endsection

@section('content')
    <div class="flex flex-col">
        <div class="bg-cover bg-left-top bg-no-repeat h-full"
            style="background-image: url('{{ asset('assets/img/contact-us.jpg') }}');">
            <div class="bg-blue-500 bg-opacity-20 p-28">
                <div class="text-6xl text-center text-white">
                    <h1 class="my-4 font-semibold">Vacancies</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-40 my-20">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($jobs as $job)
                <div
                    class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <p>
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $job->title }}
                    </h5>
                    </p>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">{{ $job->description }}</p>
                    <p class="inline-flex items-center text-blue-600">
                        {{ $job->location }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
