@extends('layouts.app')

@section('content')

    <div
        class="rounded-lg sm:border-2 px-4 my-40 lg:px-24 py-16 lg:max-w-xl sm:max-w-md w-full text-center bg-white dark:bg-gray-700 mx-auto">

        <form class="text-center" method="POST" action="{{ route('password.update') }}">
            @csrf
            <h1 class="tracking-wider mb-8 w-full text-gray-600 text-3xl dark:text-white">
                {{ __('Reset Password') }}
            </h1>
            @if ($errors->any())
                <div
                    class="block text-sm text-left text-red-600 bg-red-200 border border-red-400 h-auto flex items-center p-4 rounded-sm"
                    role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="flex items-start">
                                <p class="ml-2">
                                    {{$error}}
                                </p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <div class="py-2 text-left">
                <input type="password" name="password"
                       class="bg-gray-200 border-2 border-gray-100 focus:outline-none bg-gray-100 block w-full py-2 px-4 rounded-lg focus:border-gray-700"
                       placeholder="{{ __('Password') }}"/>
            </div>

            <div class="py-2 text-left">
                <input name="password_confirmation" autocomplete="new-password"
                       class="bg-gray-200 border-2 border-gray-100 focus:outline-none bg-gray-100 block w-full py-2 px-4 rounded-lg focus:border-gray-700"
                       placeholder="{{ __('Confirm Password') }}"/>
            </div>

            <div class="py-2">
                <button type="submit"
                        class="border-2 border-gray-100 focus:outline-none bg-purple-600 text-white font-bold tracking-wider block w-full p-2 rounded-lg from-blue-400 bg-gradient-to-r to-purple-600 dark:text-white">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </form>
    </div>
@endsection
