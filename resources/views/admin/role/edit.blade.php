@php
    /* @var \Spatie\Permission\Models\Role $role */
@endphp

@push('cdn')
    <link href="https://cdn.jsdelivr.net/npm/tom-select@1.1/dist/css/tom-select.css" rel="stylesheet">
@endpush

@extends('layouts.admin')

@section('header')
    {{ __('Edit Role') }}
@endsection

@section('content')
    <div class="mt-8">
        <div class="mt-4">
            <div
                class="py-3 px-5 mb-2 rounded-md text-base border border-gray-500 bg-white">
                <ul class="flex">
                    <li><a href="{{route('admin.home')}}" class="underline hover:text-gray-500">{{__('Home')}}</a>
                    </li>
                    <li><span class="mx-2">/</span></li>
                    <li>
                        <a href="{{route('admin.roles.index')}}" class="underline font-semibold hover:text-gray-500">
                            {{__('Roles')}}
                        </a>
                    </li>
                    <li><span class="mx-2">/</span></li>
                    <li>{{__('Update')}}</li>
                </ul>
            </div>
            @include('partial.error-card')
            <div class="p-6 bg-white rounded-md shadow-md">
                <h2 class="text-lg text-gray-700 font-semibold capitalize">{{__('Edit')}} {{$role->name}}</h2>

                <form action="{{route('admin.roles.update',$role)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="space-y-4 mt-4">
                        <div class="md:w-1/2">
                            <label class="text-gray-700">{{__('Name')}}
                                <x-input type="text" name="name" value="{{old('name',$role->name)}}"/>
                            </label>
                        </div>

                        <div class="md:w-1/2">
                            <label for="permissions"
                                   class="block font-medium tracking-tight">{{__('Permissions')}}</label>
                            <select id="permissions" name="permissions[]" multiple
                                    class="w-full border border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-3 py-2">
                                @foreach($permissions as $permission)
                                    <option value="{{$permission->id}}"
                                            @if(in_array($permission->id,$role->permissions->pluck('id')->toArray())) selected @endif>{{$permission->name}}
                                    </option>
                                @endforeach
                            </select>
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
@endsection



@push('script')
    <script src="https://cdn.jsdelivr.net/npm/tom-select@1.1/dist/js/tom-select.complete.min.js"></script>
    <script>
        new TomSelect('#permissions');
    </script>

@endpush
