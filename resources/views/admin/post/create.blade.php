@section('cdn')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tom-select@1.1/dist/css/tom-select.css" rel="stylesheet">

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
                                <li><a href="{{route('home')}}" class="underline font-semibold">Home</a></li>
                                <li><span class="mx-2">/</span></li>
                                <li><a href="{{route('admin.posts.index')}}" class="underline font-semibold">Post</a>
                                </li>
                                <li><span class="mx-2">/</span></li>
                                <li>Create</li>
                            </ul>
                        </div>
                        <form onsubmit="return onSubmitCreatePostForm(event)" action="{{route('admin.posts.store')}}"
                              method="POST" id="createPostForm"
                              class="space-y-3 dark:text-white mb-2 px-5">
                            @csrf
                            <div class="space-y-2">
                                <label for="title" class="block font-medium tracking-tight">Title</label>
                                <input id="title" type="text" placeholder="Title" name="title"
                                       class="w-full border border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-3 py-2"/>
                            </div>
                            {{-- https://tom-select.js.org/--}}
                            <div class="space-y-2">
                                <label for="tags" class="block font-medium tracking-tight">Tags</label>
                                <select id="tags" name="tags[]"
                                        class="w-full border bg-white border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-3 py-2">
                                    @foreach(\Spatie\Tags\Tag::all() as $tag)
                                        <option value="{{$tag->name}}">{{$tag->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="space-y-2">
                                <label for="status" class="block font-medium tracking-tight">Status</label>
                                <select name="status" id="status"
                                        class="w-full border border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-3 py-2">
                                    @foreach(\App\Models\Post::STATUS as $key => $status)
                                        <option value="{{$key}}">{{$status}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <input name="content" type="hidden" id="content">

                            <div id="editor" class="dark:bg-white dark:text-black bg-white">
                                <br><br><br><br><br><br><br><br><br><br><br><br><br>
                            </div>

                            <div class="flex justify-end pt-2">
                                {{--                                <button type="button"--}}
                                {{--                                        class="inline-flex items-center text-white px-5 py-2 rounded-lg overflow-hidden focus:outline-none bg-indigo-500 hover:bg-indigo-600 font-semibold tracking-tight">--}}
                                {{--                                    Publish--}}
                                {{--                                </button>--}}
                                <input type="submit" value="Submit"
                                       class="inline-flex items-center text-white px-5 py-2 rounded-lg overflow-hidden focus:outline-none bg-indigo-500 hover:bg-indigo-600 font-semibold tracking-tight">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <script>
        const toolbarOptions = [
            [{'header': [1, 2, 3, 4, 5, 6, false]}],
            [{'size': ['small', false, 'large', 'huge']}],  // custom dropdown
            [{'font': []}],

            ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
            ['blockquote', 'code-block'],

            [{'header': 1}, {'header': 2}],               // custom button values
            [{'list': 'ordered'}, {'list': 'bullet'}],
            [{'script': 'sub'}, {'script': 'super'}],      // superscript/subscript
            [{'indent': '-1'}, {'indent': '+1'}],          // outdent/indent
            [{'direction': 'rtl'}],                         // text direction

            [{'color': []}, {'background': []}],          // dropdown with defaults from theme
            [{'align': []}],

            ['clean'],                                         // remove formatting button
        ];

        const editor = new Quill('#editor', {
            modules: {
                toolbar: toolbarOptions,
            },
            theme: 'snow',
            scrollingContainer: null
        });

        setTimeout(function () {
            //Set dark theme
            document.querySelector(".ql-toolbar").classList.add("bg-white")
        }, 50)

        //https://stackoverflow.com/questions/46840665/how-to-submit-forms-with-quilljs-and-body-parser
        function onSubmitCreatePostForm() {
            var laHidden = document.querySelector("#content");
            laHidden.value = document.querySelector(".ql-editor").innerHTML;
        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/tom-select@1.1/dist/js/tom-select.complete.min.js"></script>
    <script>
        new TomSelect('#tags', {
            items: [],
            maxItems: 10
        });
    </script>

@endsection
