@push('cdn')
    <link href="https://cdn.jsdelivr.net/npm/tom-select@1.1/dist/css/tom-select.css" rel="stylesheet">
@endpush

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
                                <li><a href="{{route('admin.roles.index')}}"
                                       class="underline font-semibold">{{__('Role')}}</a>
                                </li>
                                <li><span class="mx-2">/</span></li>
                                <li>{{__('Create')}}</li>
                            </ul>
                        </div>
                        @include('partial.error-card')
                        <form action="{{route('admin.roles.store')}}" method="POST" id="createPostForm"
                              class="space-y-3 dark:text-white mb-2 px-5">
                            @csrf
                            <div class="space-y-2">
                                <label for="name" class="block font-medium tracking-tight">{{__('Name')}}</label>
                                <input id="name" type="text" placeholder="{{__('Name')}}" name="name"
                                       class="w-full border border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-3 py-2"/>
                            </div>
                            <div class="space-y-2">
                                <label for="permissions" class="block font-medium tracking-tight">{{__('Permissions')}}</label>
                                <select id="permissions" name="permissions[]"
                                        class="w-full border bg-white border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-3 py-2">
                                    @foreach($permissions as $key=> $permission)
                                        <option value="{{$key}}">{{$permission}}</option>
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


@push('script')
    <script src="https://cdn.jsdelivr.net/npm/tom-select@1.1/dist/js/tom-select.complete.min.js"></script>
    <script>
        new TomSelect('#permissions', {
            items: [],
            maxItems: 10
        });
    </script>

@endpush

