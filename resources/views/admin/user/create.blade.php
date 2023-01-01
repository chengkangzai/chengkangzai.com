@php
/* @var App\Models\User $user */
/* @var \Illuminate\Support\Collection $roles */
@endphp

@extends('layouts.admin')

@section('header')
    {{ __('Users') }}
@endsection

@section('content')
    <div class="mt-8">
        <div class="mt-4">
            <div class="mb-2 rounded-md border border-gray-500 bg-white py-3 px-5 text-base">
                <ul class="flex">
                    <li><a href="{{ route('admin.home') }}" class="underline hover:text-gray-500">{{ __('Home') }}</a>
                    </li>
                    <li><span class="mx-2">/</span></li>
                    <li>
                        <a href="{{ route('admin.users.index') }}" class="font-semibold underline hover:text-gray-500">
                            {{ __('Users') }}
                        </a>
                    </li>
                    <li><span class="mx-2">/</span></li>
                    <li>{{ __('Create') }}</li>
                </ul>
            </div>
            @include('partial.error-card')
            <div class="rounded-md bg-white p-6 shadow-md">
                <h2 class="text-lg font-semibold capitalize text-gray-700">{{ __('Create User') }}</h2>

                <form action="{{ route('admin.users.store') }}" method="POST">
                    @csrf
                    <div class="mt-4 space-y-4">
                        <div class="md:w-1/2">
                            <label class="text-gray-700">{{ __('Name') }}
                                <x-input type="text" name="name" value="{{ old('name') }}" />
                            </label>
                        </div>

                        <div class="md:w-1/2">
                            <label class="text-gray-700">{{ __('Email') }}
                                <x-input type="email" name="email" value="{{ old('email') }}" />
                            </label>
                        </div>

                        <div class="md:w-1/2">
                            <label class="text-gray-700">{{ __('Password') }}
                                <x-input type="password" name="password" value="{{ old('password') }}" />
                            </label>
                        </div>

                        <div class="md:w-1/2">
                            <label class="text-gray-700">{{ __('Confirm Password') }}
                                <x-input type="password" name="password_confirmation"
                                    value="{{ old('password_confirmation') }}" />
                            </label>
                        </div>

                        <div class="md:w-1/2">
                            <label class="text-gray-700" for="role">{{ __('Role') }}
                                <select class="form-input mt-2 w-full rounded-md text-black focus:border-indigo-600"
                                    name="role">
                                    <option value="" disabled hidden>{{ __('Select Role') }}</option>
                                    @foreach ($roles->reverse() as $role)
                                        <option value="{{ $role->id }}"
                                            @if (old('role') == $role->id) selected @endif>{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>
                    </div>

                    <div class="mt-4 flex">
                        <button
                            class="rounded-md bg-gray-800 px-4 py-2 text-gray-200 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                            {{ __('Submit') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
