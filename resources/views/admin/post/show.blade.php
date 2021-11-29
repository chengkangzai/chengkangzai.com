@extends('layouts.app')

@section('content')
    <div class="bg-gray-100 dark:bg-gray-800 relative h-screen overflow-hidden relative w-full">
        <div class="flex items-start justify-between">
            <div class="flex flex-col w-full">
                <div class="overflow-auto h-screen">

                    <div class="w-full h-auto p-2">
                        <div
                            class="py-3 px-5 mb-2 bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-gray-100 rounded-md text-sm border border-gray-200 dark:border-gray-600">
                            <ul class="flex">
                                <li><a href="{{route('admin.home')}}" class="underline font-semibold">{{__('Home')}}</a></li>
                                <li><span class="mx-2">/</span></li>
                                <li><a href="{{route('admin.posts.index')}}" class="underline font-semibold">{{__('Post')}}</a>
                                </li>
                                <li><span class="mx-2">/</span></li>
                                <li>{{__('Show')}}</li>
                            </ul>
                        </div>
                        <table class="table w-1/2 border mx-auto mb-4">
                            <thead>
                            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                                <td class="border p-2">{{__('ID')}}</td>
                                <td>{{$post->id}} </td>
                            </tr>
                            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                                <td class="border p-2">{{__('Title')}}</td>
                                <td>{{$post->title}} </td>
                            </tr>
                            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                                <td class="border p-2">{{__('Tag')}}</td>
                                <td>
                                    <ul class="list-inside list-disc">
                                        @foreach($post->tags as $tag)
                                            <li> {{$tag->name}} </li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>
                            </thead>
                        </table>
                        <div class="pb-8 w-4/5  mx-auto border-black">
                            <div class="dark:text-white dark:bg-dark" id="editor">
                                {!!  $post->content!!}
                            </div>
                        </div>

                    </div>
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
