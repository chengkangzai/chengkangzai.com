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
                                <li><a href="{{route('admin.posts.index')}}" class="underline font-semibold">Post</a>
                                </li>
                                <li><span class="mx-2">/</span></li>
                                <li>Show</li>
                            </ul>
                        </div>
                        <table class="table w-1/2 border mx-auto">
                            <thead>
                            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                                <td class="border p-2">ID</td>
                                <td>{{$post->id}} </td>
                            </tr>
                            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                                <td class="border p-2">Title</td>
                                <td>{{$post->title}} </td>
                            </tr>
                            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                                <td class="border p-2">Tag</td>
                                <td>
                                    @foreach($post->tags as $tag)
                                    ~ {{$tag->name}}
                                    @endforeach
                                </td>
                            </tr>
                            </thead>
                        </table>
                        <div class="dark:text-white" id="editor">
                            {{$post->content}}
                        </div>

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
            scrollingContainer: null
        });

        setTimeout(function () {
            //Set dark theme
            document.querySelector(".ql-toolbar").classList.add("bg-white")
        }, 50)



    </script>
@endsection
