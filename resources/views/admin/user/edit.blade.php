@php
/* @var App\Models\User $user */
@endphp

@extends('layouts.admin')

@section('header')
    {{ __('Users') }}
@endsection

@section('content')
    <div class="mt-8">
        <div class="mt-4">
            <div class="py-3 px-5 mb-2 rounded-md text-base border border-gray-500 bg-white">
                <ul class="flex">
                    <li><a href="{{ route('admin.home') }}" class="underline hover:text-gray-500">{{ __('Home') }}</a>
                    </li>
                    <li><span class="mx-2">/</span></li>
                    <li>
                        <a href="{{ route('admin.users.index') }}" class="underline font-semibold hover:text-gray-500">
                            {{ __('Users') }}
                        </a>
                    </li>
                    <li><span class="mx-2">/</span></li>
                    <li>{{ __('Update') }}</li>
                </ul>
            </div>
            @include('partial.error-card')
            <div class="p-6 bg-white rounded-md shadow-md">
                <h2 class="text-lg text-gray-700 font-semibold capitalize">{{ __('Edit') }} {{ $user->name }}</h2>

                <form action="{{ route('admin.users.update', $user) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="space-y-4 mt-4">
                        <div class="md:w-1/2">
                            <label class="text-gray-700">{{ __('Name') }}
                                <x-input type="text" name="name" value="{{ old('name', $user->name) }}" />
                            </label>
                        </div>

                        <div class="md:w-1/2">
                            <label class="text-gray-700">{{ __('Email') }}
                                <x-input type="email" name="email" value="{{ old('email', $user->email) }}" />
                            </label>
                        </div>

                        <div class="md:w-1/2">
                            <label class="text-gray-700" for="role">{{ __('Role') }}
                                <select class="form-input w-full mt-2 rounded-md focus:border-indigo-600 text-black"
                                    name="role">
                                    <option value="" disabled hidden>{{ __('Select Role') }}</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}"
                                            @if ($user->roles->first()->id == $role->id) selected @endif>{{ $role->name }}</option>
                                    @endforeach
                                </select>
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
