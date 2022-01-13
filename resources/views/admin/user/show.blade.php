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
        <div class="w-full h-auto p-2">
            <div
                class="py-3 px-5 mb-2 rounded-md text-base border border-gray-500 bg-white">
                <ul class="flex">
                    <li><a href="{{route('admin.home')}}" class="underline hover:text-gray-500">{{__('Home')}}</a>
                    </li>
                    <li><span class="mx-2">/</span></li>
                    <li>
                        <a href="{{route('admin.users.index')}}" class="underline font-semibold hover:text-gray-500">
                            {{__('Users')}}
                        </a>
                    </li>
                    <li><span class="mx-2">/</span></li>
                    <li>{{__('Update')}}</li>
                </ul>
            </div>
            <div class="mt-6">
                <div class="bg-white shadow rounded-md overflow-hidden my-6">
                    <table class="text-left w-full border-collapse">
                        <thead class="border-b">
                        <tr class="hover:bg-gray-200">
                            <td class="py-4 px-6 border-b text-gray-700 text-lg">{{__('Name')}}</td>
                            <td class="py-4 px-6 border-b text-gray-500">{{$user->name}} </td>
                        </tr>
                        <tr class="hover:bg-gray-200">
                            <td class="py-4 px-6 border-b text-gray-700 text-lg">{{__('Email')}}</td>
                            <td class="py-4 px-6 border-b text-gray-500">
                                <a href="mailto:{{$user->email}}">{{$user->email}}</a>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-200">
                            <td class="py-4 px-6 border-b text-gray-700 text-lg">{{__('Role')}}</td>
                            <td class="py-4 px-6 border-b text-gray-500">
                                @foreach($user->roles as $role)
                                    {{$role->name}}
                                @endforeach
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-200">
                            <td class="py-4 px-6 border-b text-gray-700 text-lg">{{__('Join at')}}</td>
                            <td class="py-4 px-6 border-b text-gray-500">{{$user->created_at}}</td>
                        </tr>
                        <tr class="hover:bg-gray-200">
                            <td class="py-4 px-6 border-b text-gray-700 text-lg">{{__('Action')}}</td>
                            <td class="py-4 px-6 border-b text-gray-500">
                                <form action="{{route('admin.users.sendForgetPassword', $user->id)}}"
                                      method="post">
                                    @csrf
                                    <x-button-lg type="submit">
                                        {{__('Send forget password link')}}
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
