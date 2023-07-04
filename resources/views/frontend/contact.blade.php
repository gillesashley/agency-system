@extends('layouts.frontend')

@section('carousel')
@endsection

@section('content')
    <div class="flex flex-col">
        <div class="bg-cover bg-left-top bg-no-repeat h-full"
            style="background-image: url('{{ asset('assets/img/contact-us.jpg') }}');">
            <div class="bg-blue-500 bg-opacity-20 p-28">
                <div class="text-6xl text-center text-white">
                    <h1 class="my-4 font-semibold">Contact Us</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="py-4 mx-40">
        <div class="flex flex-col md:flex-row">
            <!-- Office Location -->
            <div class="w-full md:w-1/2 p-4 mr-10">
                <h2 class="text-2xl font-bold mb-4">Office Location</h2>
                <p>123 Street, City</p>
                <p>State, Country</p>
                <div class="mt-4">
                    <!-- Embed Google Maps iframe -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5915.609940925184!2d-0.31009932398335527!3d5.557039059609097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdfbd56adba901d%3A0x65a98c5580646225!2sWeija%20Junction%20Bus%20Stop!5e0!3m2!1sen!2sgh!4v1688461431103!5m2!1sen!2sgh"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="w-full md:w-1/2 p-4">
                <h2 class="text-2xl font-bold mb-4">Contact Us</h2>
                @if (session('success'))
                    <div class="bg-green-200 text-green-800 px-4 py-2 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif
                <form class="space-y-4" action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div>
                        <label class="block mb-2 font-bold" for="name">Name</label>
                        <input type="text" id="name" name="name"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 @error('title') is-invalid @enderror"
                            placeholder="Your Name" value="{{ old('name') }}" required>

                        @error('name')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block mb-2 font-bold" for="email">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 @error('email') is-invalid @enderror"
                            placeholder="Your Email" value="{{ old('email') }}" required>
                        @error('email')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block mb-2 font-bold" for="message">Message</label>
                        <textarea id="message" name="message" rows="10"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 @error('message') is-invalid @enderror" rows="4"
                            placeholder="Your Message" value="{{ old('message') }}" required></textarea>

                        @error('message')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Send
                        Message</button>
                </form>
            </div>
        </div>
    </div>
@endsection
