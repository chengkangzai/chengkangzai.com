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
        <div class="h-auto w-full p-2">
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
                    <li>{{ __('Detail') }}</li>
                </ul>
            </div>
            <div class="mt-6">
                <div class="my-6 overflow-hidden rounded-md bg-white shadow">
                    <table class="w-full border-collapse text-left">
                        <thead class="border-b">
                            <tr class="hover:bg-gray-200">
                                <td class="border-b py-4 px-6 text-lg text-gray-700">{{ __('Name') }}</td>
                                <td class="border-b py-4 px-6 text-gray-500">{{ $user->name }} </td>
                            </tr>
                            <tr class="hover:bg-gray-200">
                                <td class="border-b py-4 px-6 text-lg text-gray-700">{{ __('Email') }}</td>
                                <td class="border-b py-4 px-6 text-gray-500">
                                    <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-200">
                                <td class="border-b py-4 px-6 text-lg text-gray-700">{{ __('Role') }}</td>
                                <td class="border-b py-4 px-6 text-gray-500">
                                    @foreach ($user->roles as $role)
                                        <a href="{{ route('admin.roles.show', $role) }}"
                                            class="mr-2 inline-block rounded-full bg-gray-100 px-3 py-1 text-sm font-semibold text-gray-700">
                                            {{ $role->name }}
                                        </a>
                                    @endforeach
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-200">
                                <td class="border-b py-4 px-6 text-lg text-gray-700">{{ __('Join at') }}</td>
                                <td class="border-b py-4 px-6 text-gray-500">{{ $user->created_at }}</td>
                            </tr>
                            <tr class="hover:bg-gray-200">
                                <td class="border-b py-4 px-6 text-lg text-gray-700">{{ __('Action') }}</td>
                                <td class="border-b py-4 px-6 text-gray-500">
                                    <form action="{{ route('admin.users.sendForgetPassword', $user->id) }}" method="post">
                                        @csrf
                                        <x-button-lg type="submit">
                                            {{ __('Send forget password link') }}
                                        </x-button-lg>
                                    </form>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
