@php
/* @var \Spatie\Permission\Models\Permission $permissions */
/* @var \Illuminate\Support\Collection $roles */
@endphp

@extends('layouts.admin')

@section('header')
    {{ __('Permissions') }}
@endsection

@section('content')
    <div class="py-3 px-5 mb-2 rounded-md text-base border border-gray-500 bg-white">
        <ul class="flex">
            <li><a href="{{ route('admin.home') }}" class="underline hover:text-gray-500">{{ __('Home') }}</a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li>{{ __('Permissions') }}</li>
        </ul>
    </div>

    <div class="flex flex-col mt-8">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                {{ __('Name') }}
                            </th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                        @foreach ($permissions as $permission)
                            <tr>
                                <td class="px-6 py-2 whitespace-no-wrap border-b border-gray-200">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img src="https://ui-avatars.com/api/?name={{ $permission->name }}&background=random&size=128"
                                                alt="avatar" class="h-10 w-10 rounded-full object-cover">
                                        </div>

                                        <div class="ml-4">
                                            <div class="text-sm leading-5 font-medium text-gray-900">
                                                {{ $permission->name }}</div>
                                        </div>
                                    </div>
                                </td>

                                <td
                                    class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                    <x-button :href="route('admin.permissions.show', $permission)" bg="bg-green-600" hoverBg="hover:bg-green-500">
                                        {{ __('View') }}
                                    </x-button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="flex flex-col items-center px-5 py-3 bg-white border-t xs:flex-row xs:justify-between">
                    {{ $permissions->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
