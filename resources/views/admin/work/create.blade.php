@push('cdn')
    <link href="https://cdn.jsdelivr.net/npm/tom-select@1.1/dist/css/tom-select.css" rel="stylesheet">
@endpush

@extends('layouts.app')

@section('content')
    @include('layouts.sidebar')
    <div class="bg-gray-100 dark:bg-gray-800 relative h-screen overflow-hidden relative w-full">
        <div class="flex items-start justify-between">
            <div class="flex flex-col w-full">
                <div class="overflow-auto h-screen">
                    <div class="table w-full h-auto p-2">
                        <div
                            class="py-3 px-5 mb-2 bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-gray-100 rounded-md text-sm border border-gray-200 dark:border-gray-600">
                            <ul class="flex">
                                <li><a href="{{route('admin.home')}}" class="underline font-semibold">{{__('Home')}}</a>
                                </li>
                                <li><span class="mx-2">/</span></li>
                                <li><a href="{{route('admin.works.index')}}"
                                       class="underline font-semibold">{{__('Work')}}</a>
                                </li>
                                <li><span class="mx-2">/</span></li>
                                <li>{{__('Create')}}</li>
                            </ul>
                        </div>
                        @include('partial.error-card')
                        <form action="{{route('admin.works.store')}}"
                              method="POST" id="createPostForm" enctype="multipart/form-data"
                              class="space-y-3 dark:text-white mb-2 px-5">
                            @csrf
                            <div class="space-y-2">
                                <label for="name" class="block font-medium tracking-tight">{{__('Name')}}</label>
                                <input id="name" type="text" placeholder="{{__('Name')}}" name="name"
                                       value="{{old('name')}}"
                                       class="w-full border border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-3 py-2"/>
                            </div>
                            {{-- https://tom-select.js.org/--}}
                            <div class="space-y-2">
                                <label for="tags" class="block font-medium tracking-tight">{{__('Tags')}}</label>
                                <select id="tags" name="tags[]"
                                        class="w-full border bg-white border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-3 py-2">
                                    @foreach(\Spatie\Tags\Tag::all() as $tag)
                                        <option value="{{$tag->name}}">{{$tag->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="space-y-2">
                                <label for="url" class="block font-medium tracking-tight">Project URL</label>
                                <input id="url" name="url" type="text" value="{{old('url')}}"
                                       class="w-full border bg-white border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-3 py-2"/>
                            </div>

                            <div class="space-y-2">
                                <label for="github_url" class="block font-medium tracking-tight">Project Repo</label>
                                <input id="github_url" name="github_url" type="text" value="{{old('github_url')}}"
                                       class="w-full border bg-white border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-3 py-2"/>
                            </div>

                            <div class="space-y-2">
                                <label for="picture" class="block font-medium tracking-tight">{{__('Picture')}}</label>
                                <input id="picture" name="picture" type="file" accept="image/*"
                                       value="{{old('picture')}}"
                                       class="w-full border bg-white border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-3 py-2"/>
                            </div>

                            <div class="space-y-2">
                                <label for="status" class="block font-medium tracking-tight">{{__('Status')}}</label>
                                <select name="status" id="status"
                                        class="w-full border border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-3 py-2">
                                    @foreach(\App\Models\Works::STATUS as $key => $status)
                                        <option value="{{$status}}">{{$key}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="space-y-2">
                                <label for="description" class="block font-medium tracking-tight">
                                    {{__('Description')}} ({{__('English')}})
                                </label>
                                <textarea name="description[en]" id="description[en]" cols="30" rows="2"
                                          class="w-full border bg-white border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-3 py-2">{{old('description[en]')}}</textarea>
                            </div>

                            <div class="space-y-2">
                                <label for="description" class="block font-medium tracking-tight">
                                    {{__('Description')}} ({{__('Chinese')}})
                                </label>
                                <textarea name="description[zh]" id="description[zh]" cols="30" rows="2"
                                          class="w-full border bg-white border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-3 py-2">{{old('description[zh]')}}</textarea>
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
        new TomSelect('#tags', {
            items: [],
            maxItems: 10
        });
    </script>

@endpush
