@php
/* @var \Spatie\Tags\Tag $tags */
@endphp

@push('cdn')
    <link href="https://cdn.jsdelivr.net/npm/tom-select@1.1/dist/css/tom-select.css" rel="stylesheet">
@endpush

@extends('layouts.admin')

@section('header')
    {{ __('Works') }}
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
                        <a href="{{ route('admin.works.index') }}" class="underline hover:text-gray-500">
                            {{ __('Works') }}
                        </a>
                    </li>
                    <li><span class="mx-2">/</span></li>
                    <li>{{ __('Create') }}</li>
                </ul>
            </div>
            @include('partial.error-card')
            <div class="rounded-md bg-white p-6 shadow-md">
                <h2 class="text-lg font-semibold capitalize text-gray-700">{{ __('Create') }} </h2>

                <form action="{{ route('admin.works.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-4 grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <label class="text-gray-700">{{ __('Name') }}
                                <x-input type="text" name="name" value="{{ old('name') }}" />
                            </label>
                        </div>

                        <div>
                            <label class="text-gray-700">{{ __('Tags') }}
                                <select id="tags" name="tags[]" multiple
                                    class="focus:shadow-outline w-full rounded border border-gray-400 px-3 py-2 text-gray-800 placeholder-gray-400 focus:border-transparent focus:outline-none">
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->name }}"
                                            {{ in_array($tag->name, old('tags', [])) ? 'selected' : '' }}>
                                            {{ $tag->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </label>
                        </div>

                        <div>
                            <label class="text-gray-700">{{ __('Project URL') }}
                                <x-input type="url" name="url" value="{{ old('url') }}" />
                            </label>
                        </div>

                        <div>
                            <label class="text-gray-700">{{ __('Project Repo') }}
                                <x-input type="url" name="github_url" value="{{ old('github_url') }}" />
                            </label>
                        </div>

                        <div>
                            <label class="text-gray-700">{{ __('Picture') }}
                                <input type="file" name="picture" value="{{ old('picture') }}" accept="image/*"
                                    class="block w-full rounded border border-gray-400 px-3 py-2 text-gray-800 text-black placeholder-gray-400 focus:border-indigo-600" />
                            </label>
                        </div>

                        <div>
                            <label class="text-gray-700">{{ __('Status') }}
                                <select id="status" name="status"
                                    class="w-full rounded border border-gray-400 px-3 py-2 text-gray-800 placeholder-gray-400">
                                    @foreach (\App\Models\Works::STATUS as $key => $status)
                                        <option value="{{ $status }}"
                                            {{ old('status') == $status ? 'selected' : '' }}>
                                            {{ $key }}
                                        </option>
                                    @endforeach
                                </select>
                            </label>
                        </div>

                        <div class="mt-4 md:col-span-2">
                            <label class="text-gray-700">{{ __('Description') }} ({{ __('English') }})
                                <textarea name="description[en]"
                                    class="w-full rounded border border-gray-400 px-3 py-2 text-gray-800 placeholder-gray-400">{{ old('description[en]') }}</textarea>
                            </label>
                        </div>

                        <div class="mt-4 md:col-span-2">
                            <label class="text-gray-700">{{ __('Description') }} ({{ __('Chinese') }})
                                <textarea name="description[zh]"
                                    class="w-full rounded border border-gray-400 px-3 py-2 text-gray-800 placeholder-gray-400">{{ old('description[zh]') }}</textarea>
                            </label>
                        </div>


                        <div class="mt-4 flex">
                            <button
                                class="rounded-md bg-gray-800 px-4 py-2 text-gray-200 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                                {{ __('Submit') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/tom-select@1.1/dist/js/tom-select.complete.min.js"></script>
    <script>
        new TomSelect('#tags', {
            @if (old('tags'))
                @foreach (old('tags') as $tag)
                    "{{ $tag }}",
                @endforeach
            @endif ],
        maxItems: 10
        });
    </script>
@endpush
