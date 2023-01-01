@php
/* @var \Spatie\Permission\Models\Permission $permissions */
/* @var \Illuminate\Support\Collection $roles */
@endphp

@extends('layouts.admin')

@section('header')
    {{ __('Permissions') }}
@endsection

@section('content')
    <div class="mb-2 rounded-md border border-gray-500 bg-white py-3 px-5 text-base">
        <ul class="flex">
            <li><a href="{{ route('admin.home') }}" class="underline hover:text-gray-500">{{ __('Home') }}</a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li>{{ __('Permissions') }}</li>
        </ul>
    </div>

    <div class="mt-8 flex flex-col">
        <div class="-my-2 overflow-x-auto py-2 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="inline-block min-w-full overflow-hidden border-b border-gray-200 align-middle shadow sm:rounded-lg">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-left text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                {{ __('Name') }}
                            </th>
                            <th class="border-b border-gray-200 bg-gray-50 px-6 py-3"></th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                        @foreach ($permissions as $permission)
                            <tr>
                                <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-2">
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 flex-shrink-0">
                                            <img src="https://ui-avatars.com/api/?name={{ $permission->name }}&background=random&size=128"
                                                alt="avatar" class="h-10 w-10 rounded-full object-cover">
                                        </div>

                                        <div class="ml-4">
                                            <div class="text-sm font-medium leading-5 text-gray-900">
                                                {{ $permission->name }}</div>
                                        </div>
                                    </div>
                                </td>

                                <td
                                    class="whitespace-no-wrap border-b border-gray-200 px-6 py-4 text-right text-sm font-medium leading-5">
                                    <x-button :href="route('admin.permissions.show', $permission)" bg="bg-green-600" hoverBg="hover:bg-green-500">
                                        {{ __('View') }}
                                    </x-button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="xs:flex-row xs:justify-between flex flex-col items-center border-t bg-white px-5 py-3">
                    {{ $permissions->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
