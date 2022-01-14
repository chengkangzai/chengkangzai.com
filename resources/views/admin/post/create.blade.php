@php
    /* @var \Spatie\Tags\Tag $tags */
@endphp

@push('cdn')
    <link href="https://cdn.jsdelivr.net/npm/tom-select@1.1/dist/css/tom-select.css" rel="stylesheet">
@endpush

@extends('layouts.admin')

@section('header')
    {{ __('Posts') }}
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
                        <a href="{{route('admin.posts.index')}}" class="underline hover:text-gray-500">
                            {{__('Posts')}}
                        </a>
                    </li>
                    <li><span class="mx-2">/</span></li>
                    <li>{{__('Create')}}</li>
                </ul>
            </div>
            @include('partial.error-card')
            <div class="p-6 bg-white rounded-md shadow-md">
                <h2 class="text-lg text-gray-700 font-semibold capitalize">{{__('Create')}} </h2>

                <form action="{{route('admin.posts.store')}}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                        <div class="sm:col-span-2">
                            <label class="text-gray-700">{{__('Title')}}
                                <x-input type="text" name="title" value="{{old('title')}}"/>
                            </label>
                        </div>

                        <div>
                            <label class="text-gray-700">{{__('Tags')}}
                                <select id="tags" name="tags[]" multiple
                                        class="w-full border border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-3 py-2">
                                    @foreach($tags as $tag)
                                        <option value="{{$tag->name}}"
                                            {{old('$tags')?->contains($tag->name) ? 'selected' : ''}}>
                                            {{$tag->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </label>
                        </div>

                        <div>
                            <label class="text-gray-700">{{__('Status')}}
                                <select id="status" name="status"
                                        class="w-full border border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-3 py-2">
                                    @foreach(\App\Models\Post::STATUS as $key => $value)
                                        <option value="{{$key}}" {{old('status') == $key ? 'selected' : ''}}>
                                            {{$value}}
                                        </option>
                                    @endforeach
                                </select>
                            </label>
                        </div>

                        <div class="col-span-2">
                            <label class="text-gray-700">{{__('Content')}}
                                <textarea name="content" id="editor"
                                          class="w-full border border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-3 py-2">{!! old('content') !!}</textarea>
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
@endsection


@push('script')
    @include('partial.CKEDITOR')
    <script src="https://cdn.jsdelivr.net/npm/tom-select@1.1/dist/js/tom-select.complete.min.js"></script>
    <script>
        new TomSelect('#tags', {
            items: [],
            maxItems: 10
        });
    </script>
@endpush
