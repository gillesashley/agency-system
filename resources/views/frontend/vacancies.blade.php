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
@endsection
