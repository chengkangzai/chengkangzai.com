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
        <div class="h-auto w-full p-2">
            <div class="mb-2 rounded-md border border-gray-500 bg-white py-3 px-5 text-base">
                <ul class="flex">
                    <li><a href="{{ route('admin.home') }}" class="underline hover:text-gray-500">{{ __('Home') }}</a>
                    </li>
                    <li><span class="mx-2">/</span></li>
                    <li>
                        <a href="{{ route('admin.posts.index') }}" class="font-semibold underline hover:text-gray-500">
                            {{ __('Posts') }}
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
                                <td class="border-b py-4 px-6 text-lg text-gray-700">{{ __('Title') }}</td>
                                <td class="border-b py-4 px-6 text-gray-500">{{ $post->title }} </td>
                            </tr>
                            <tr class="hover:bg-gray-200">
                                <td class="border-b py-4 px-6 text-lg text-gray-700">{{ __('Status') }}</td>
                                <td class="border-b py-4 px-6 text-gray-500">
                                    @if ($post->status == \App\Models\Post::STATUS['PUBLISH'])
                                        {{ __('Published') }}
                                    @else
                                        {{ __('Draft') }}
                                    @endif
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-200">
                                <td class="border-b py-4 px-6 text-lg text-gray-700">{{ __('Tags') }}</td>
                                <td class="border-b py-4 px-6 text-gray-500">
                                    @foreach ($post->tags as $tag)
                                        <a href="{{ route('admin.tags.index', $tag) }}"
                                            class="mr-2 inline-block rounded-full bg-gray-100 px-3 py-1 text-sm font-semibold text-gray-700">
                                            {{ $tag->name }}
                                        </a>
                                    @endforeach
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-200">
                                <td class="border-b py-4 px-6 text-lg text-gray-700">{{ __('Created at') }}</td>
                                <td class="border-b py-4 px-6 text-gray-500">{{ $post->created_at }}</td>
                            </tr>
                            <tr>
                                <td class="border-b py-4 px-6 text-lg text-gray-700">{{ __('Updated at') }}</td>
                                <td class="border-b py-4 px-6 text-gray-500">{{ $post->updated_at }}</td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>

            <div class="rounded-md bg-white p-6 shadow-md">
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
