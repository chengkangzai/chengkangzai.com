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
        <div class="h-auto w-full p-2">
            <div class="mb-2 rounded-md border border-gray-500 bg-white py-3 px-5 text-base">
                <ul class="flex">
                    <li><a href="{{ route('admin.home') }}" class="underline hover:text-gray-500">{{ __('Home') }}</a>
                    </li>
                    <li><span class="mx-2">/</span></li>
                    <li>
                        <a href="{{ route('admin.roles.index') }}" class="font-semibold underline hover:text-gray-500">
                            {{ __('Roles') }}
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
                                <td class="border-b py-4 px-6 text-gray-500">{{ $role->name }} </td>
                            </tr>
                            <tr class="hover:bg-gray-200">
                                <td class="border-b py-4 px-6 text-lg text-gray-700">{{ __('Permissions') }}</td>
                                <td class="space-y-1 space-x-1 border-b py-4 px-6 text-gray-500">
                                    @foreach ($role->permissions as $permission)
                                        <span
                                            class="mr-2 mt-1 inline-block rounded-full bg-gray-100 px-3 py-1 text-sm font-semibold text-gray-700">
                                            {{ $permission->name }}
                                        </span>
                                    @endforeach
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-200">
                                <td class="border-b py-4 px-6 text-lg text-gray-700">{{ __('Users') }}</td>
                                <td class="space-y-1 space-x-1 border-b py-4 px-6 text-gray-500">
                                    @foreach ($role->users as $user)
                                        <a href="{{ route('admin.users.show', $user) }}"
                                            class="mr-2 mt-1 inline-block rounded-full bg-gray-100 px-3 py-1 text-sm font-semibold text-gray-700">
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
