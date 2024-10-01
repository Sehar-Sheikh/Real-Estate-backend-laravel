{{-- <x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
 --}}




@extends('auth.partials.app')
@section('content')

    <!-- Login Form -->
    <div class="login-form" style="
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
        <h1 class="text-2xl mb-4 mt-4 font-bold text-teal-700" style=" text-align: center;">Reset Password</h1>
        {{-- <form action="/login" method="POST" style="width: 100%;"> --}}
            <form method="POST" action="{{ route('password.store') }}" style="width: 100%;">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <label for="email" :value="__('Email')">Email</label>
                <input type="email" id="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" placeholder="abc@example.com">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

            <label for="password"  :value="__('Password')">Password</label>
            <input type="password" id="password" name="password" required autocomplete="new-password" placeholder="Enter new password (min 8 characters)">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <label for="password_confirmation" :value="__('Confirm Password')">Confirm New Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation"  required autocomplete="new-password" placeholder="********">
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />


            <button type="submit" class="bg-teal-800 mt-3">
                Reset Password
            </button>
        </form>

    </div>
@endsection
