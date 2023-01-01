@extends('layouts.app')

@section('content')
    <div class="flex h-screen w-full items-center justify-center bg-gray-200 px-6 dark:bg-gray-800">
        <div class="w-full max-w-sm rounded-md bg-white p-6 shadow-md">
            <div class="flex items-center justify-center">
                <svg class="h-10 w-10" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M364.61 390.213C304.625 450.196 207.37 450.196 147.386 390.213C117.394 360.22 102.398 320.911 102.398 281.6C102.398 242.291 117.394 202.981 147.386 172.989C147.386 230.4 153.6 281.6 230.4 307.2C230.4 256 256 102.4 294.4 76.7999C320 128 334.618 142.997 364.608 172.989C394.601 202.981 409.597 242.291 409.597 281.6C409.597 320.911 394.601 360.22 364.61 390.213Z"
                        fill="#4C51BF" stroke="#4C51BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                    <path
                        d="M201.694 387.105C231.686 417.098 280.312 417.098 310.305 387.105C325.301 372.109 332.8 352.456 332.8 332.8C332.8 313.144 325.301 293.491 310.305 278.495C295.309 263.498 288 256 275.2 230.4C256 243.2 243.201 320 243.201 345.6C201.694 345.6 179.2 332.8 179.2 332.8C179.2 352.456 186.698 372.109 201.694 387.105Z"
                        fill="white"></path>
                </svg>
                <span class="text-2xl font-semibold text-gray-700">{{ __('Dashboard') }}</span>
            </div>

            @include('partial.error-card')
            @if (session('status'))
                <div class="mx-auto mb-2 w-full">
                    <div class="block flex h-auto items-center rounded-lg border border-violet-400 bg-violet-200 p-4 text-left text-sm font-bold text-black"
                        role="alert">
                        {{ session('status') }}
                    </div>
                </div>
            @endif

            <form class="mt-4" action="{{ route('login') }}" method="POST">
                @csrf
                <label class="block">
                    <span class="text-sm text-gray-700">{{ __('Email') }}</span>
                    <input type="email" name="email"
                        class="form-input mt-1 block w-full rounded-md focus:border-indigo-600">
                </label>

                <label class="mt-3 block">
                    <span class="text-sm text-gray-700">{{ __('Password') }}</span>
                    <input type="password" name="password"
                        class="form-input mt-1 block w-full rounded-md focus:border-indigo-600">
                </label>

                <div class="mt-4 flex items-center justify-between">
                    <div>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}
                                class="form-checkbox rounded text-indigo-600" />
                            <span class="mx-2 text-sm text-gray-600">{{ __('Remember Me') }}</span>
                        </label>
                    </div>

                    <div>
                        <a class="fontme block text-sm text-indigo-700 hover:underline"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                </div>

                <div class="mt-6">
                    <input type="submit" value="{{ __('Login') }}" role="button"
                        class="w-full rounded-md bg-indigo-600 py-2 px-4 text-center text-sm text-white hover:bg-indigo-500" />
                </div>
            </form>

            @if (Route::has('register'))
                <x-divider />
                <div class="mt-4">

                    <a href="{{ route('register') }}"
                        class="block w-full rounded-md bg-gray-800 py-2 px-4 text-center text-sm text-white hover:bg-gray-700">
                        {{ __('First time? Register here') }}
                    </a>
                </div>
            @endif
        </div>
    </div>
@endsection
