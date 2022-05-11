@php
/* @var App\Models\Post $post */
/* @var \Illuminate\Support\Collection $roles */
@endphp

@extends('layouts.admin')

@section('header')
    {{ __('Posts') }}
@endsection

@section('content')
    <div class="mt-8">
        <div class="w-full h-auto p-2">
            <div class="py-3 px-5 mb-2 rounded-md text-base border border-gray-500 bg-white">
                <ul class="flex">
                    <li><a href="{{ route('admin.home') }}" class="underline hover:text-gray-500">{{ __('Home') }}</a>
                    </li>
                    <li><span class="mx-2">/</span></li>
                    <li>
                        <a href="{{ route('admin.posts.index') }}" class="underline font-semibold hover:text-gray-500">
                            {{ __('Posts') }}
                        </a>
                    </li>
                    <li><span class="mx-2">/</span></li>
                    <li>{{ __('Detail') }}</li>
                </ul>
            </div>
            <div class="mt-6">
                <div class="bg-white shadow rounded-md overflow-hidden my-6">
                    <table class="text-left w-full border-collapse">
                        <thead class="border-b">
                            <tr class="hover:bg-gray-200">
                                <td class="py-4 px-6 border-b text-gray-700 text-lg">{{ __('Title') }}</td>
                                <td class="py-4 px-6 border-b text-gray-500">{{ $post->title }} </td>
                            </tr>
                            <tr class="hover:bg-gray-200">
                                <td class="py-4 px-6 border-b text-gray-700 text-lg">{{ __('Status') }}</td>
                                <td class="py-4 px-6 border-b text-gray-500">
                                    @if ($post->status == \App\Models\Post::STATUS['PUBLISH'])
                                        {{ __('Published') }}
                                    @else
                                        {{ __('Draft') }}
                                    @endif
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-200">
                                <td class="py-4 px-6 border-b text-gray-700 text-lg">{{ __('Tags') }}</td>
                                <td class="py-4 px-6 border-b text-gray-500">
                                    @foreach ($post->tags as $tag)
                                        <a href="{{ route('admin.tags.index', $tag) }}"
                                            class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                            {{ $tag->name }}
                                        </a>
                                    @endforeach
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-200">
                                <td class="py-4 px-6 border-b text-gray-700 text-lg">{{ __('Created at') }}</td>
                                <td class="py-4 px-6 border-b text-gray-500">{{ $post->created_at }}</td>
                            </tr>
                            <tr>
                                <td class="py-4 px-6 border-b text-gray-700 text-lg">{{ __('Updated at') }}</td>
                                <td class="py-4 px-6 border-b text-gray-500">{{ $post->updated_at }}</td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>

            <div class="p-6 bg-white rounded-md shadow-md">
                <div id="editor">
                    {!! $post->content !!}
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
