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
        <div class="w-full h-auto p-2">
            <div
                class="py-3 px-5 mb-2 rounded-md text-base border border-gray-500 bg-white">
                <ul class="flex">
                    <li><a href="{{route('admin.home')}}" class="underline hover:text-gray-500">{{__('Home')}}</a>
                    </li>
                    <li><span class="mx-2">/</span></li>
                    <li>
                        <a href="{{route('admin.works.index')}}" class="underline hover:text-gray-500">
                            {{__('Works')}}
                        </a>
                    </li>
                    <li><span class="mx-2">/</span></li>
                    <li>{{__('Detail')}}</li>
                </ul>
            </div>
            <div class="mt-6">
                <div class="bg-white shadow rounded-md overflow-hidden my-6">
                    <table class="text-left w-full border-collapse">
                        <thead class="border-b">
                        <tr class="hover:bg-gray-200">
                            <td class="py-4 px-6 border-b text-gray-700 text-lg">{{__('Name')}}</td>
                            <td class="py-4 px-6 border-b text-gray-500">{{$work->name}}
                                @if($work->status == \App\Models\Works::STATUS['ACTIVE'])
                                    <span
                                        class="inline-flex bg-green-100 rounded-full px-3 py-1 text-sm font-semibold text-green-700 mr-2">
                                    {{__('Active')}}
                                </span>
                                @else
                                    <span
                                        class="inline-flex bg-yellow-100 rounded-full px-3 py-1 text-sm font-semibold text-yellow-700 mr-2">
                                    {{__('Inactive')}}
                                </span>
                                @endif
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-200">
                            <td class="py-4 px-6 border-b text-gray-700 text-lg">{{__('Image')}}</td>
                            <td class="py-4 px-6 border-b text-gray-500">
                                <a href="{{$work->img_link}}">
                                    <img src="{{$work->img_link}}"
                                         alt="{{$work->name}}"
                                         class="w-1/3">
                                </a>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-200">
                            <td class="py-4 px-6 border-b text-gray-700 text-lg">{{__('Description')}}</td>
                            <td class="py-4 px-6 border-b text-gray-500">
                                <span>EN : {{$work->translations['description']['en']}}</span>
                                <span>ZH : {{$work->translations['description']['zh']}}</span>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-200">
                            <td class="py-4 px-6 border-b text-gray-700 text-lg">{{__('Project URL')}}</td>
                            <td class="py-4 px-6 border-b text-gray-500">
                                <a href="{{$work->url}}">
                                    {{$work->url}}
                                </a>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-200">
                            <td class="py-4 px-6 border-b text-gray-700 text-lg">{{__('Project Repo')}}</td>
                            <td class="py-4 px-6 border-b text-gray-500">
                                <a href="{{$work->github_url}}">
                                    {{$work->github_url}}
                                </a>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-200">
                            <td class="py-4 px-6 border-b text-gray-700 text-lg">{{__('Tags')}}</td>
                            <td class="py-4 px-6 border-b text-gray-500">
                                @foreach($work->tags as $tag)
                                    <a href="{{route('admin.tags.index', $tag)}}"
                                       class="inline-flex bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                        {{$tag->name}}
                                    </a>
                                @endforeach
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-200">
                            <td class="py-4 px-6 border-b text-gray-700 text-lg">{{__('Created at')}}</td>
                            <td class="py-4 px-6 border-b text-gray-500">{{$work->created_at}}</td>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('script')
    <script src="{{asset('ckeditor5/build/ckeditor.js')}}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                window.editor = editor;
                editor.isReadOnly = true;
            })
    </script>
@endpush
