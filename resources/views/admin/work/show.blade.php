@section('cdn')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endsection
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
                                <li><a href="{{route('admin.home')}}" class="underline font-semibold">Home</a></li>
                                <li><span class="mx-2">/</span></li>
                                <li><a href="{{route('admin.works.index')}}" class="underline font-semibold">Work</a>
                                </li>
                                <li><span class="mx-2">/</span></li>
                                <li>Show</li>
                            </ul>
                        </div>
                        <table class="table w-2/3 border mx-auto mb-4">
                            <thead>
                            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                                <td class="border p-2">ID</td>
                                <td>{{$work->id}} </td>
                            </tr>
                            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                                <td class="border p-2">Name</td>
                                <td>{{$work->name}} </td>
                            </tr>
                            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                                <td class="border p-2">Description</td>
                                <td>{{$work->description}} </td>
                            </tr>
                            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                                <td class="border p-2">Image</td>
                                <td><img src="{{$work->imageLink}}" alt="Image for Work"></td>
                            </tr>
                            @if($work->url)
                            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                                <td class="border p-2">Project URL</td>
                                <td><a href="{{$work->url}}" class="underline">Project URL</a></td>
                            </tr>
                            @endif
                            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                                <td class="border p-2">Project Repo</td>
                                <td><a href="{{$work->github_url}}" class="underline">Github Url</a></td>
                            </tr>
                            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                                <td class="border p-2">Tag</td>
                                <td>
                                    @foreach($work->tags as $tag)
                                        ~ {{$tag->name}}
                                    @endforeach
                                </td>
                            </tr>
                            </thead>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <script>

        const editor = new Quill('#editor', {
            theme: 'snow',
            readonly: true,
            scrollingContainer: null
        });

        document.querySelector(".ql-toolbar").remove()


    </script>
@endsection
