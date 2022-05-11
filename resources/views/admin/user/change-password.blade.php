@extends('layouts.admin')

@section('content')
    <div class="mt-8">
        <div class="mt-4">
            <div class="py-3 px-5 mb-2 rounded-md text-base border border-gray-500 bg-white">
                <ul class="flex">
                    <li><a href="{{ route('admin.home') }}" class="underline hover:text-gray-500">{{ __('Home') }}</a>
                    </li>
                    <li><span class="mx-2">/</span></li>
                    <li>{{ __('My Profile') }}</li>
                </ul>
            </div>
            @include('partial.error-card')
            <div class="p-6 bg-white rounded-md shadow-md">
                <h2 class="text-lg text-gray-700 font-semibold capitalize">{{ __('Edit') }} {{ __('My Profile') }}</h2>

                <form action="{{ route('admin.user.changePassword', auth()->user()) }}" method="POST">
                    @csrf
                    <div class="space-y-4 mt-4">
                        <div class="md:w-1/2">
                            <label class="text-gray-700">{{ __('Name') }}
                                <x-input type="text" name="name" id="name" value="{{ old('name', auth()->user()->name) }}"
                                    required />
                            </label>
                        </div>

                        <div class="md:w-1/2">
                            <label class="text-gray-700">{{ __('Email') }}
                                <x-input type="email" name="email" id="email"
                                    value="{{ old('email', auth()->user()->email) }}" required />
                            </label>
                        </div>

                        <div class="md:w-1/2">
                            <x-divider />
                        </div>

                        <div class="md:w-1/2">
                            <label class="text-gray-700">{{ __('Password') }}
                                <x-input type="password" name="password" id="password" />
                            </label>
                        </div>

                        <div class="md:w-1/2">
                            <label class="text-gray-700">{{ __('Confirm Password') }}
                                <x-input type="password" name="password_confirmation" id="password_confirmation" />
                            </label>
                        </div>


                    </div>

                    <div class="flex mt-4">
                        <button
                            class="px-4 py-2 bg-gray-800 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">
                            {{ __('Submit') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
