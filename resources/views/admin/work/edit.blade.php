@php
    /* @var \Spatie\Tags\Tag $tags */
    /* @var \App\Models\Works $work */
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
                    <li>{{__('Update')}}</li>
                </ul>
            </div>
            @include('partial.error-card')
            <div class="p-6 bg-white rounded-md shadow-md">
                <h2 class="text-lg text-gray-700 font-semibold capitalize">{{__('Update')}} {{$work->name}} </h2>

                <form action="{{route('admin.works.update', $work)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                        <div>
                            <label class="text-gray-700">{{__('Name')}}
                                <x-input type="text" name="name" value="{{old('name',$work->name)}}"/>
                            </label>
                        </div>

                        <div>
                            <label class="text-gray-700">{{__('Tags')}}
                                <select id="tags" name="tags[]" multiple
                                        class="w-full border border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-3 py-2">
                                    @foreach($tags as $tag)
                                        <option value="{{$tag->name}}"
                                            {{$work->tags->contains($tag->name) ? 'selected' : ''}}>
                                            {{$tag->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </label>
                        </div>

                        <div>
                            <label class="text-gray-700">{{__('Project URL')}}
                                <x-input type="url" name="url" value="{{old('project_url',$work->url)}}"/>
                            </label>
                        </div>

                        <div>
                            <label class="text-gray-700">{{__('Project Repo')}}
                                <x-input type="url" name="github_url"
                                         value="{{old('project_repo',$work->github_url)}}"/>
                            </label>
                        </div>

                        <div>
                            <label class="text-gray-700">{{__('Picture')}}
                                <input type="file" name="picture" value="{{old('picture')}}" accept="image/*"
                                       class="block border border-gray-400 text-gray-800 placeholder-gray-400 rounded px-3 py-2 w-full focus:border-indigo-600 text-black"/>
                            </label>
                        </div>

                        <div>
                            <label class="text-gray-700">{{__('Status')}}
                                <select id="status" name="status"
                                        class="w-full border border-gray-400 text-gray-800 placeholder-gray-400 rounded px-3 py-2">
                                    {{--                                    @foreach(\App\Models\Works::STATUS as $key => $status)--}}
                                    {{--                                        <option value="{{$status}}"--}}
                                    {{--                                            {{$work->status == $status ? 'selected' : ''}}>--}}
                                    {{--                                            {{$key}}--}}
                                    {{--                                        </option>--}}
                                    {{--                                    @endforeach--}}
                                </select>
                            </label>
                        </div>

                        <div class="mt-4 md:col-span-2">
                            <label class="text-gray-700">{{__('Description')}} ({{__('English')}})
                                <textarea name="description[en]"
                                          class="w-full border border-gray-400 text-gray-800 placeholder-gray-400 rounded px-3 py-2">{{old('description[en]',$work->translations['description']['en'])}}</textarea>
                            </label>
                        </div>

                        <div class="mt-4 md:col-span-2">
                            <label class="text-gray-700">{{__('Description')}} ({{__('Chinese')}})
                                <textarea name="description[zh]"
                                          class="w-full border border-gray-400 text-gray-800 placeholder-gray-400 rounded px-3 py-2">{{old('description[zh]',$work->translations['description']['zh'])}}</textarea>
                            </label>
                        </div>


                        <div class="flex mt-4">
                            <button
                                class="px-4 py-2 bg-gray-800 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">
                                {{__('Submit')}}
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
            items: [@foreach($work->tags as $tag)"{{$tag->name}}",@endforeach],
            maxItems: 10
        });

    </script>

@endpush
