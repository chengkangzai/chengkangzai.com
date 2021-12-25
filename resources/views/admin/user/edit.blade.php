@extends('layouts.app')

@section('content')
    <div class="bg-gray-100 dark:bg-gray-800 relative h-screen overflow-hidden relative w-full">
        <div class="flex items-start justify-between">
            <div class="flex flex-col w-full">
                <div class="overflow-auto h-screen">
                    <div class="table w-full h-auto p-2">
                        <div
                            class="py-3 px-5 mb-2 bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-gray-100 rounded-md text-sm border border-gray-200 dark:border-gray-600">
                            <ul class="flex">
                                <li><a href="{{route('admin.home')}}" class="underline font-semibold">{{__('Home')}}</a>
                                </li>
                                <li><span class="mx-2">/</span></li>
                                <li>
                                    <a href="{{route('admin.users.index')}}" class="underline font-semibold">
                                        {{__('User')}}
                                    </a>
                                </li>
                                <li><span class="mx-2">/</span></li>
                                <li>{{__('Update')}}</li>
                            </ul>
                        </div>
                        @include('partial.error-card')
                        <form action="{{route('admin.users.update',$user)}}"
                              method="POST" id="createUserForm" class="space-y-3 dark:text-white mb-2 px-5">
                            @method('PUT')
                            @csrf
                            <div class="space-y-2">
                                <label for="name" class="block font-medium tracking-tight">{{__('Name')}}</label>
                                <input id="name" type="text" placeholder="{{__('Name')}}" name="name"
                                       value="{{old('name',$user->name)}}"
                                       class="w-full border border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-3 py-2"/>
                            </div>

                            <div class="space-y-2">
                                <label for="email" class="block font-medium tracking-tight">{{__('Email')}}</label>
                                <input id="email" type="email" placeholder="{{__('Email')}}" name="email"
                                       value="{{old('email',$user->email)}}"
                                       class="w-full border border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-3 py-2"/>
                            </div>

                            <div class="space-y-2">
                                <label for="role" class="block font-medium tracking-tight">{{__('Role')}}</label>
                                <select id="role" name="role"
                                        class="w-full border border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-3 py-2">
                                    <option value="" disabled hidden>{{__('Select Role')}}</option>
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}"
                                                @if($user->roles->first()->id == $role->id) selected @endif>{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex justify-end pt-2">
                                <input type="submit" value="{{__('Submit')}}"
                                       class="inline-flex items-center text-white px-5 py-2 rounded-lg overflow-hidden focus:outline-none bg-indigo-500 hover:bg-indigo-600 font-semibold tracking-tight">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

