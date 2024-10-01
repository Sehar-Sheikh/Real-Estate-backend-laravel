{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


@extends('auth.partials.app')
@section('content')
    <div class="login-form"
        style="
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #ffffff;
        margin: 80px auto;
        padding: 20px;
        max-width: 400px;
        width: 90%;
        display: flex;
        flex-direction: column;
        border-radius: 8px;
        box-shadow: 0px 0px 15px 9px rgba(0, 0, 0, 0.1);">
        <h1 class="text-2xl mb-4 mt-4 font-bold text-teal-700" style=" text-align: center;">Login</h1>
        <x-auth-session-status class="mb-4" :status="session('status')" />

        {{-- <form action="/login" method="POST" style="width: 100%;"> --}}
        <form method="POST" action="{{ route('login') }}" style="width: 100%;">
            @csrf
            <label for="email" :value="__('Email')">Email</label>
            <input type="email" id="email" name="email" placeholder="abc@example.com" :value="old('email')" required
                autofocus autocomplete="username"
                style="
                width: 100%;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 4px;
            ">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            <label for="password" :value="__('Password')">Password</label>
            <input type="password" id="password" name="password" placeholder="********" required
                autocomplete="current-password"
                style="
                width: 100%;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 4px;
            ">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />


            <button type="submit" class="bg-teal-800 mt-3">
                {{ __('Login') }}

            </button>
        </form>
        <div class="links" style="margin-top: 10px; text-align: center;">
            <a href="{{ route('register') }}">Register</a>
            | @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot password') }}
                </a>
            @endif
        </div>
    </div>
@endsection
