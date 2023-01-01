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
            <div class="mb-2 rounded-md border border-gray-500 bg-white py-3 px-5 text-base">
                <ul class="flex">
                    <li><a href="{{ route('admin.home') }}" class="underline hover:text-gray-500">{{ __('Home') }}</a>
                    </li>
                    <li><span class="mx-2">/</span></li>
                    <li>
                        <a href="{{ route('admin.posts.index') }}" class="underline hover:text-gray-500">
                            {{ __('Posts') }}
                        </a>
                    </li>
                    <li><span class="mx-2">/</span></li>
                    <li>{{ __('Create') }}</li>
                </ul>
            </div>
            @include('partial.error-card')
            <div class="rounded-md bg-white p-6 shadow-md">
                <h2 class="text-lg font-semibold capitalize text-gray-700">{{ __('Create') }} </h2>

                <form action="{{ route('admin.posts.store') }}" method="POST">
                    @csrf
                    <div class="mt-4 grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div class="sm:col-span-2">
                            <label class="text-gray-700">{{ __('Title') }}
                                <x-input type="text" name="title" value="{{ old('title') }}" />
                            </label>
                        </div>

                        <div>
                            <label class="text-gray-700">{{ __('Tags') }}
                                <select id="tags" name="tags[]" multiple
                                    class="focus:shadow-outline w-full rounded border border-gray-400 px-3 py-2 text-gray-800 placeholder-gray-400 focus:border-transparent focus:outline-none">
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->name }}"
                                            {{ old('$tags')?->contains($tag->name) ? 'selected' : '' }}>
                                            {{ $tag->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </label>
                        </div>

                        <div>
                            <label class="text-gray-700">{{ __('Status') }}
                                <select id="status" name="status"
                                    class="focus:shadow-outline w-full rounded border border-gray-400 px-3 py-2 text-gray-800 placeholder-gray-400 focus:border-transparent focus:outline-none">
                                    @foreach (\App\Models\Post::STATUS as $key => $value)
                                        <option value="{{ $key }}" {{ old('status') == $key ? 'selected' : '' }}>
                                            {{ $value }}
                                        </option>
                                    @endforeach
                                </select>
                            </label>
                        </div>

                        <div class="col-span-2">
                            <label class="text-gray-700">{{ __('Content') }}
                                <textarea name="content" id="editor"
                                    class="focus:shadow-outline w-full rounded border border-gray-400 px-3 py-2 text-gray-800 placeholder-gray-400 focus:border-transparent focus:outline-none">{!! old('content') !!}</textarea>
                            </label>
                        </div>
                    </div>

                    <div class="mt-4 flex">
                        <button
                            class="rounded-md bg-gray-800 px-4 py-2 text-gray-200 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                            {{ __('Submit') }}
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
