@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center h-screen bg-gray-200 px-6 w-full dark:bg-gray-800">
        <div class="p-6 max-w-sm w-full bg-white shadow-md rounded-md">
            <div class="flex justify-center items-center">
                <svg class="h-10 w-10" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M364.61 390.213C304.625 450.196 207.37 450.196 147.386 390.213C117.394 360.22 102.398 320.911 102.398 281.6C102.398 242.291 117.394 202.981 147.386 172.989C147.386 230.4 153.6 281.6 230.4 307.2C230.4 256 256 102.4 294.4 76.7999C320 128 334.618 142.997 364.608 172.989C394.601 202.981 409.597 242.291 409.597 281.6C409.597 320.911 394.601 360.22 364.61 390.213Z"
                        fill="#4C51BF" stroke="#4C51BF" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path
                        d="M201.694 387.105C231.686 417.098 280.312 417.098 310.305 387.105C325.301 372.109 332.8 352.456 332.8 332.8C332.8 313.144 325.301 293.491 310.305 278.495C295.309 263.498 288 256 275.2 230.4C256 243.2 243.201 320 243.201 345.6C201.694 345.6 179.2 332.8 179.2 332.8C179.2 352.456 186.698 372.109 201.694 387.105Z"
                        fill="white"></path>
                </svg>
                <span class="text-gray-700 font-semibold text-2xl">
                    {{__('Reset Password')}}
                </span>
            </div>
            @include('partial.error-card')
            <form class="mt-4" action="{{route('password.email')}}" method="POST">
                @csrf
                <label class="block">
                    <span class="text-gray-700 text-sm">{{ __('Email') }}</span>
                    <input type="email" name="email"
                           class="form-input mt-1 block w-full rounded-md focus:border-indigo-600">
                </label>

                <div class="mt-6">
                    <input type="submit" value="{{ __('Send Password Reset Link') }}" role="button"
                           class="py-2 px-4 text-center bg-indigo-600 rounded-md w-full text-white text-sm hover:bg-indigo-500"/>
                </div>
            </form>

            @if (Route::has('login'))
                <div class="relative flex justify-center items-center w-full border-b-2 border-gray-300 mt-4 ">
                    <span class="absolute bg-gray-100 px-2"></span>
                </div>
                <div class="mt-4">

                    <a href="{{route('login')}}"
                       class="block py-2 px-4 text-center bg-gray-800 rounded-md w-full text-white text-sm hover:bg-gray-700">
                        {{ __('Already have an account? Login here') }}
                    </a>
                </div>
            @endif
        </div>
    </div>
@endsection
