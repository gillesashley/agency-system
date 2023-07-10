@extends('layouts.backend')

@section('sidenav')
@endsection

@section('header')
@endsection

@section('content')
    <div class="container">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <div class="bg-white dark:bg-gray-700 shadow p-6 rounded-lg">
                    <h3 class="mb-4 text-xl font-medium">{{ __('Reset Password') }}</h3>
                    @if (session('status'))
                        <div class="text-green-500 mb-4">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="email" class="block mb-2 text-sm font-medium">{{ __('Email Address') }}</label>

                            <input id="email" type="email"
                                class="border border-gray-300 rounded-lg px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="text-red-500 text-sm mt-1" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end">
                            <button type="submit"
                                class="bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 text-white font-medium py-2 px-4 rounded-lg text-sm">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
