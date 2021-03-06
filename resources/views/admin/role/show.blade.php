@php
/* @var \Spatie\Permission\Models\Role $role */
/* @var \Illuminate\Support\Collection $roles */
@endphp

@extends('layouts.admin')

@section('header')
    {{ __('Roles') }}
@endsection

@section('content')
    <div class="mt-8">
        <div class="w-full h-auto p-2">
            <div class="py-3 px-5 mb-2 rounded-md text-base border border-gray-500 bg-white">
                <ul class="flex">
                    <li><a href="{{ route('admin.home') }}" class="underline hover:text-gray-500">{{ __('Home') }}</a>
                    </li>
                    <li><span class="mx-2">/</span></li>
                    <li>
                        <a href="{{ route('admin.roles.index') }}" class="underline font-semibold hover:text-gray-500">
                            {{ __('Roles') }}
                        </a>
                    </li>
                    <li><span class="mx-2">/</span></li>
                    <li>{{ __('Detail') }}</li>
                </ul>
            </div>
            <div class="mt-6">
                <div class="bg-white shadow rounded-md overflow-hidden my-6">
                    <table class="text-left w-full border-collapse">
                        <thead class="border-b">
                            <tr class="hover:bg-gray-200">
                                <td class="py-4 px-6 border-b text-gray-700 text-lg">{{ __('Name') }}</td>
                                <td class="py-4 px-6 border-b text-gray-500">{{ $role->name }} </td>
                            </tr>
                            <tr class="hover:bg-gray-200">
                                <td class="py-4 px-6 border-b text-gray-700 text-lg">{{ __('Permissions') }}</td>
                                <td class="py-4 px-6 border-b text-gray-500 space-y-1 space-x-1">
                                    @foreach ($role->permissions as $permission)
                                        <span
                                            class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mt-1">
                                            {{ $permission->name }}
                                        </span>
                                    @endforeach
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-200">
                                <td class="py-4 px-6 border-b text-gray-700 text-lg">{{ __('Users') }}</td>
                                <td class="py-4 px-6 border-b text-gray-500 space-y-1 space-x-1">
                                    @foreach ($role->users as $user)
                                        <a href="{{ route('admin.users.show', $user) }}"
                                            class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mt-1">
                                            {{ $user->name }}
                                        </a>
                                    @endforeach
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
