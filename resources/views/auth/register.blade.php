{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

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
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
 --}}


@extends('auth.partials.app')
@section('content')

 <!-- Register Form -->
 <div class="login-form"
 style="
font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
background-color: #ffffff;
margin: 50px auto;
padding: 30px;
max-width: 400px;
width: 90%;
display: flex;
flex-direction: column;
border-radius: 8px;
box-shadow: 0px 0px 15px 9px rgba(0, 0, 0, 0.1);">
 <h1 class="text-2xl mb-4 mt-4 font-bold text-teal-700" style=" text-align: center;">Register</h1>
 {{-- <form action="/register" method="POST"> --}}
 <form method="POST" action="{{ route('register') }}">
     @csrf

     <label for="name" :value="__('Name')">Name</label>
     <input type="text" id="name" name="name" :value="old('name')" required autofocus
         autocomplete="name" placeholder="e.g. John Doe">
     <x-input-error :messages="$errors->get('name')" class="mt-2" />

     <label for="email" :value="__('Email')">Email</label>
     <input type="email" id="email" name="email" :value="old('email')" required autocomplete="username"
         placeholder="abc@example.com">
     <x-input-error :messages="$errors->get('email')" class="mt-2" />

     <label for="password" :value="__('Password')">Password</label>
     <input type="password" id="password" name="password" required autocomplete="new-password"
         placeholder="********">
     <x-input-error :messages="$errors->get('password')" class="mt-2" />

     <label for="password_confirmation" :value="__('Confirm Password')">Confirm Password</label>
     <input type="password" id="password_confirmation" name="password_confirmation" placeholder="********"
         required autocomplete="new-password">
     <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

     <button type="submit" class="register-button">
         {{ __('Register') }}
     </button>

 </form>
 <div class="links">
     <a href="{{ route('login') }}"> {{ __('Already have an account?') }}
         <span class="font-bold">Login</span></a>
 </div>
</div>
@endsection
