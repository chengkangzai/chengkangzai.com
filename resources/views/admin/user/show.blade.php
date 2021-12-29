@extends('layouts.app')

@section('content')
    <div class="bg-gray-100 dark:bg-gray-800 relative h-screen overflow-hidden relative w-full">
        <div class="flex items-start justify-between">
            <div class="flex flex-col w-full">
                <div class="overflow-auto h-screen">

                    <div class="w-full h-auto p-2">
                        <div
                            class="py-3 px-5 mb-2 bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-gray-100 rounded-md text-sm border border-gray-200 dark:border-gray-600">
                            <ul class="flex">
                                <li><a href="{{route('admin.home')}}" class="underline font-semibold">{{__('Home')}}</a>
                                </li>
                                <li><span class="mx-2">/</span></li>
                                <li><a href="{{route('admin.users.index')}}"
                                       class="underline font-semibold">{{__('User')}}</a>
                                </li>
                                <li><span class="mx-2">/</span></li>
                                <li>{{__('Show')}}</li>
                            </ul>
                        </div>
                        <table class="table w-full sm:w-1/2 border mx-auto mb-4">
                            <thead>
                            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                                <td class="border p-2">{{__('ID')}}</td>
                                <td>{{$user->id}} </td>
                            </tr>
                            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                                <td class="border p-2">{{__('Name')}}</td>
                                <td>{{$user->name}} </td>
                            </tr>
                            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                                <td class="border p-2">{{__('Email')}}</td>
                                <td><a href="mailto:{{$user->email}}" class="underline cursor-pointer">{{$user->email}}</a> </td>
                            </tr>
                            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                                <td class="border p-2">{{__('Role')}}</td>
                                <td>{{$user->roles->first()->name}} </td>
                            </tr>
                            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                                <td class="border p-2">{{__('Join at')}}</td>
                                <td>{{$user->created_at}} </td>
                            </tr>
                            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                                <td class="border p-2">{{__('Action')}}</td>
                                <td>
                                    <form action="{{route('admin.users.sendForgetPassword', $user->id)}}"
                                          method="post">
                                        @csrf
                                        <button type="submit"
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            {{__('Send forget password link')}}
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
