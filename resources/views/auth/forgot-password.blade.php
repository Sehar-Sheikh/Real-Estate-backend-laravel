{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}



@extends('auth.partials.app')
@section('content')
    <!-- Login Form -->
    <div class="login-form"
        style="
font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
background-color: #ffffff;
margin: 80px auto;
padding: 30px;
max-width: 400px;
width: 90%;
display: flex;
flex-direction: column;
border-radius: 8px;
box-shadow: 0px 0px 15px 9px rgba(0, 0, 0, 0.1);">
        <h1 class="text-2xl mb-4 mt-4 font-bold text-teal-700" style=" text-align: center;">Forget Password</h1>
        <x-auth-session-status class="mb-4" :status="session('status')" />

        {{-- <form action="/login" method="POST" style="width: 100%;"> --}}
        <form method="POST" action="{{ route('password.email') }}" style="width: 100%;">
            @csrf
            <label for="email" :value="__('Email')">Email</label>
            <input type="email" id="email" name="email" placeholder="abc@example.com" :value="old('email')"
                required autofocus
                style="
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    ">
            <x-input-error :messages="$errors->get('email')" class="mt-1" />

            <button type="submit" class="bg-teal-800 mt-3">
                Reset Password
            </button>
        </form>
        <div class="links" style="margin-top: 10px; text-align: center;">
            <a href="{{ route('login') }}">Back to Login</a>
        </div>
    </div>
@endsection
