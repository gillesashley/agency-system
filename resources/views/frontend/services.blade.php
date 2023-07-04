@extends('layouts.frontend')

@section('carousel')
@endsection

@section('content')
    <div class="flex flex-col">
        <div class="bg-cover bg-left-top bg-no-repeat h-full"
            style="background-image: url('{{ asset('assets/img/pexels-anna-shvets-fotor-2023070492326.jpg') }}');">
            <div class="bg-blue-500 bg-opacity-20 p-28">
                <div class="text-6xl text-center text-white">
                    <h1 class="my-4 font-semibold">Client Services</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="py-4 mx-40">
        <p class="text-lg">
            We are highly experienced and skilled at providing high quality temporary staffing solutions to the UK
            healthcare including the Workforce Alliance and Health Trust Europe Frameworks and private sector nursing homes
            along with other healthcare providers.
        </p>
        <h3 class="text-xl font-bold my-4">
            We have a large database of qualified and experienced healthcare professionals including:
        </h3>
        <ul class="list-disc ml-6">
            <li class="mb-2">Hospitality section:
                <ul class="list-disc ml-6">
                    <li class="mb-1">Kitchen assistants</li>
                    <li class="mb-1">Porters</li>
                    <li class="mb-1">Cleaners</li>
                    <li class="mb-1">Chef</li>
                    <li class="mb-1">Waitresses</li>
                </ul>
            </li>
            <li class="mb-2">Warehouse staff:
                <ul class="list-disc ml-6">
                    <li class="mb-1">Order pickers and packers</li>
                    <li class="mb-1">Forklift drivers</li>
                </ul>
            </li>
            <li class="mb-2">Offstead:
                <ul class="list-disc ml-6">
                    <li class="mb-1">Nursery nurses</li>
                    <li class="mb-1">Children homes and 16plus</li>
                </ul>
            </li>
        </ul>
        <div class="px-40 pt-5 pb-14 mb-16 bg-blue-400 flex flex-col items-center">
            <p class="my-6 text-4xl text-white font-bold">Let us know your staffing needs, we’re here to help</p>
            <a href="{{ route('contact.index') }}" class="bg-white rounded-full text-lg font-bold px-4 py-3">
                CONTACT US
            </a>
        </div>
    </div>
@endsection
