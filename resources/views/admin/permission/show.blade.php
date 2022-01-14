@php
    /* @var \Spatie\Permission\Models\Permission $permission */
    /* @var \Illuminate\Support\Collection $permissions */
@endphp

@extends('layouts.admin')

@section('header')
    {{ __('Permissions') }}
@endsection

@section('content')
    <div class="mt-8">
        <div class="w-full h-auto p-2">
            <div
                class="py-3 px-5 mb-2 rounded-md text-base border border-gray-500 bg-white">
                <ul class="flex">
                    <li><a href="{{route('admin.home')}}" class="underline hover:text-gray-500">{{__('Home')}}</a>
                    </li>
                    <li><span class="mx-2">/</span></li>
                    <li>
                        <a href="{{route('admin.permissions.index')}}"
                           class="underline font-semibold hover:text-gray-500">
                            {{__('Permissions')}}
                        </a>
                    </li>
                    <li><span class="mx-2">/</span></li>
                    <li>{{__('Detail')}}</li>
                </ul>
            </div>
            <div class="mt-6">
                <div class="bg-white shadow rounded-md overflow-hidden my-6">
                    <table class="text-left w-full border-collapse">
                        <thead class="border-b">
                        <tr class="hover:bg-gray-200">
                            <td class="py-4 px-6 border-b text-gray-700 text-lg">{{__('Name')}}</td>
                            <td class="py-4 px-6 border-b text-gray-500">{{$permission->name}} </td>
                        </tr>
                        <tr class="hover:bg-gray-200">
                            <td class="py-4 px-6 border-b text-gray-700 text-lg">{{__('Roles')}}</td>
                            <td class="py-4 px-6 border-b text-gray-500 space-y-1 space-x-1">
                                @foreach($permission->roles as $role)
                                    <a href="{{route('admin.roles.show', $role)}}"
                                       class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mt-1">
                                        {{$role->name}}
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
