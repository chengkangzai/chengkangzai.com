@php
/* @var App\Models\Works $work */
/* @var \Illuminate\Support\Collection $tags */
@endphp

@extends('layouts.admin')

@section('header')
    {{ __('Works') }}
@endsection

@section('content')
    <div class="mt-8">
        <div class="h-auto w-full p-2">
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
                    <li>{{ __('Detail') }}</li>
                </ul>
            </div>
            <div class="mt-6">
                <div class="my-6 overflow-hidden rounded-md bg-white shadow">
                    <table class="w-full border-collapse text-left">
                        <thead class="border-b">
                            <tr class="hover:bg-gray-200">
                                <td class="border-b py-4 px-6 text-lg text-gray-700">{{ __('Name') }}</td>
                                <td class="border-b py-4 px-6 text-gray-500">{{ $work->name }}
                                    @if ($work->status == \App\Models\Works::STATUS['ACTIVE'])
                                        <span
                                            class="mr-2 inline-flex rounded-full bg-green-100 px-3 py-1 text-sm font-semibold text-green-700">
                                            {{ __('Active') }}
                                        </span>
                                    @else
                                        <span
                                            class="mr-2 inline-flex rounded-full bg-yellow-100 px-3 py-1 text-sm font-semibold text-yellow-700">
                                            {{ __('Inactive') }}
                                        </span>
                                    @endif
                                </td>
                            </tr>

                            <tr class="hover:bg-gray-200">
                                <td class="border-b py-4 px-6 text-lg text-gray-700">{{ __('Image') }}</td>
                                <td class="border-b py-4 px-6 text-gray-500">
                                    <a href="{{ $work->img_link }}">
                                        <img src="{{ $work->img_link }}" alt="{{ $work->name }}" class="w-1/3">
                                    </a>
                                </td>
                            </tr>

                            <tr class="hover:bg-gray-200">
                                <td class="border-b py-4 px-6 text-lg text-gray-700">{{ __('Description') }}</td>
                                <td class="border-b py-4 px-6 text-gray-500">
                                    <span class="inline-block">EN : {{ $work->translations['description']['en'] }}</span>
                                    <span class="inline-block">ZH : {{ $work->translations['description']['zh'] }}</span>
                                </td>
                            </tr>

                            <tr class="hover:bg-gray-200">
                                <td class="border-b py-4 px-6 text-lg text-gray-700">{{ __('Project URL') }}</td>
                                <td class="border-b py-4 px-6 text-gray-500">
                                    <a href="{{ $work->url }}">
                                        {{ $work->url }}
                                    </a>
                                </td>
                            </tr>

                            <tr class="hover:bg-gray-200">
                                <td class="border-b py-4 px-6 text-lg text-gray-700">{{ __('Project Repo') }}</td>
                                <td class="border-b py-4 px-6 text-gray-500">
                                    <a href="{{ $work->github_url }}">
                                        {{ $work->github_url }}
                                    </a>
                                </td>
                            </tr>

                            <tr class="hover:bg-gray-200">
                                <td class="border-b py-4 px-6 text-lg text-gray-700">{{ __('Tags') }}</td>
                                <td class="border-b py-4 px-6 text-gray-500">
                                    @foreach ($work->tags as $tag)
                                        <a href="{{ route('admin.tags.index', $tag) }}"
                                            class="mr-2 inline-flex rounded-full bg-gray-100 px-3 py-1 text-sm font-semibold text-gray-700">
                                            {{ $tag->name }}
                                        </a>
                                    @endforeach
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-200">
                                <td class="border-b py-4 px-6 text-lg text-gray-700">{{ __('Created at') }}</td>
                                <td class="border-b py-4 px-6 text-gray-500">{{ $work->created_at }}</td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('script')
    <script src="{{ asset('ckeditor5/build/ckeditor.js') }}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                window.editor = editor;
                editor.isReadOnly = true;
            })
    </script>
@endpush
