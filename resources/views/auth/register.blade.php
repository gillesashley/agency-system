@extends('layouts.backend')

@section('header')
@endsection

@section('sidenav')
@endsection

@section('content')
<div class="flex justify-center items-center h-screen">
    <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-6" action="{{ route('register') }}" method="POST">
            @csrf
            <h5 class="text-xl font-medium text-gray-900 dark:text-white">Register for an account</h5>
            <div class="mb-3">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    {{ __('Name') }}
                </label>
                <input id="name" type="text" name="name"
                    class="form-control @error('name') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback text-red-600" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    {{ __('Email Address') }}
                </label>
                <input id="email" type="email" name="email"
                    class="form-control @error('email') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback text-red-600" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    {{ __('Password') }}
                </label>
                <input id="password" type="password" name="password"
                    class="form-control @error('password') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback text-red-600" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password-confirm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    {{ __('Confirm Password') }}
                </label>
                <input id="password-confirm" type="password" name="password_confirmation"
                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    required autocomplete="new-password">
            </div>
            <div class="mb-0">
                <button type="submit"
                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
