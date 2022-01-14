@extends('layouts.admin')

@section('content')
    <div class="mt-8">
        <div class="mt-4">
            <div
                class="py-3 px-5 mb-2 rounded-md text-base border border-gray-500 bg-white">
                <ul class="flex">
                    <li><a href="{{route('admin.home')}}" class="underline hover:text-gray-500">{{__('Home')}}</a>
                    </li>
                    <li><span class="mx-2">/</span></li>
                    <li>{{__('My Profile')}}</li>
                </ul>
            </div>
            @include('partial.error-card')
            <div class="p-6 bg-white rounded-md shadow-md">
                <h2 class="text-lg text-gray-700 font-semibold capitalize">{{__('Edit')}} {{__('My Profile')}}</h2>

                <form action="{{route('admin.user.changePassword',auth()->user())}}" method="POST">
                    @csrf
                    <div class="space-y-4 mt-4">
                        <div class="md:w-1/2">
                            <label class="text-gray-700">{{__('Name')}}
                                <x-input type="text" name="name" id="name"
                                         value="{{ old('name', auth()->user()->name) }}" required/>
                            </label>
                        </div>

                        <div class="md:w-1/2">
                            <label class="text-gray-700">{{__('Email')}}
                                <x-input type="email" name="email" id="email"
                                         value="{{ old('email', auth()->user()->email) }}" required/>
                            </label>
                        </div>

                        <div class="md:w-1/2">
                            <x-divider/>
                        </div>

                        <div class="md:w-1/2">
                            <label class="text-gray-700">{{__('Password')}}
                                <x-input type="password" name="password" id="password"/>
                            </label>
                        </div>

                        <div class="md:w-1/2">
                            <label class="text-gray-700">{{__('Confirm Password')}}
                                <x-input type="password" name="password_confirmation" id="password_confirmation"/>
                            </label>
                        </div>


                    </div>

                    <div class="flex mt-4">
                        <button
                            class="px-4 py-2 bg-gray-800 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">
                            {{__('Submit')}}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{--    <div class="relative h-screen overflow-hidden relative w-full">--}}
    {{--        <div class="flex items-start justify-between">--}}
    {{--            <div class="flex flex-col w-full">--}}
    {{--                <div class="overflow-auto h-screen">--}}
    {{--                    <div class="table w-full h-auto p-2">--}}
    {{--                        <div--}}
    {{--                            class="py-3 px-5 mb-2 rounded-md text-sm border border-gray-200">--}}
    {{--                            <ul class="flex">--}}
    {{--                                <li>--}}
    {{--                                    <a href="{{route('admin.home')}}" class="underline hover:text-gray-500">{{__('Home')}}</a>--}}
    {{--                                </li>--}}
    {{--                                <li><span class="mx-2">/</span></li>--}}
    {{--                                <li>{{__('My Profile')}}</li>--}}
    {{--                            </ul>--}}
    {{--                        </div>--}}
    {{--                        @include('partial.error-card')--}}
    {{--                        <form action="{{route('admin.user.changePassword',auth()->user())}}"--}}
    {{--                              method="POST" id="createPostForm"--}}
    {{--                              class="space-y-3 mb-2 px-5 w-full sm:w-2/3 mx-auto">--}}
    {{--                            @csrf--}}

    {{--                            <div class="space-y-2">--}}
    {{--                                <label for="name" class="block font-medium tracking-tight">{{__('Name')}}</label>--}}
    {{--                                <input id="name" type="text" placeholder="{{__('Name')}}" name="name"--}}
    {{--                                       value="{{auth()->user()->name}}"--}}
    {{--                                       class="w-full border border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-3 py-2"/>--}}
    {{--                            </div>--}}

    {{--                            <div class="space-y-2">--}}
    {{--                                <label for="old_password" class="block font-medium tracking-tight">--}}
    {{--                                    {{__('Current Password')}}--}}
    {{--                                </label>--}}
    {{--                                <input id="old_password" type="password" placeholder="{{__('Current Password')}}"--}}
    {{--                                       name="old_password"--}}
    {{--                                       class="w-full border border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-3 py-2"/>--}}
    {{--                            </div>--}}

    {{--                            <hr class="border border-t-4">--}}

    {{--                            <div class="space-y-2">--}}
    {{--                                <label for="new_password"--}}
    {{--                                       class="block font-medium tracking-tight">{{__('Password')}}</label>--}}
    {{--                                <input id="new_password" type="password" placeholder="{{__('Password')}}"--}}
    {{--                                       name="new_password"--}}
    {{--                                       class="w-full border border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-3 py-2"/>--}}
    {{--                            </div>--}}

    {{--                            <div class="space-y-2">--}}
    {{--                                <label for="new_password_confirmation" class="block font-medium tracking-tight">--}}
    {{--                                    {{__('Confirm Password')}}--}}
    {{--                                </label>--}}
    {{--                                <input id="new_password_confirmation" type="password" name="new_password_confirmation"--}}
    {{--                                       placeholder="{{__('Confirm Password')}}"--}}
    {{--                                       class="w-full border border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-3 py-2"/>--}}
    {{--                            </div>--}}

    {{--                            <div class="flex justify-end pt-2">--}}
    {{--                                <input type="submit" value="{{__('Submit')}}"--}}
    {{--                                       class="inline-flex items-center text-white px-5 py-2 rounded-lg overflow-hidden focus:outline-none bg-indigo-500 hover:bg-indigo-600 font-semibold tracking-tight">--}}
    {{--                            </div>--}}
    {{--                        </form>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

@endsection

