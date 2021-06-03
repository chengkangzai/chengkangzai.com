@push('cdn')
    <script src="{{asset('ckeditor5/build/ckeditor.js')}}"></script>
@endpush

@extends('layouts.app')

@section('content')
    @include('partial.rocket')
    <div class="xl:w-8/12 md:w-10/12 mx-auto pt-20 ">
        <div class="dark:text-white mb-12 pb-12 border-b-2">
            <h2 class="text-4xl inline pr-5">{{config('app.name')}}</h2> ||
            <p class="inline pl-5">Just Random Sharing Blog for tech</p>
        </div>

        <div class="flex flex-wrap -m-4 dark:text-white w-full mx-auto mb-6">
            <div class="mx-auto text-center pb-8 ">
                <h1 class="text-4xl font-bold py-4"> {{$post->title}} </h1>
                <span class=" mr-3 inline-flex items-center leading-none text-sm py-1 ">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                           stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                      {{$post->updated_at->diffForHumans()}}
                    </span>
                <span class=" mr-3 inline-flex items-center leading-none text-sm py-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                            </svg>
                            {{--TODO: add image and description--}}
                    @foreach($post->tags as $tag)
                        @if ($loop->last)
                            {{$tag->name}}
                        @else
                            {{$tag->name}},
                        @endif
                    @endforeach
                    </span>
            </div>
            <div class="w-screen">
                <div id="editor" class="w-screen mx-auto">
                    {!! $post->content !!}
                </div>
            </div>
        </div>

        <div class="flex flex-wrap dark:text-white w-full mx-auto pb-4 pt-4">
            <div class="mx-auto mb-6">
                <h3 class="text-2xl text-center">Comment Section</h3>
            </div>
            <div class="w-full mb-2">
                @include('partial.error-card')
            </div>
            <section class="rounded-b-lg w-full">
                <form action="{{route('public.posts.comments.store',['post'=>$post])}}" method="post">
                    @csrf
                    <div class="w-full space-x-4 mx-auto flex mb-3">
                        <input id="name" type="text" placeholder="Name (required) " name="name" required
                               class="w-1/2 text-center border border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:shadow-outline py-2"/>
                        <input id="email" type="email" placeholder="Email (required) " name="email" required
                               class="w-1/2 text-center border border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:shadow-outline py-2"/>
                    </div>
                    <textarea required
                        class="w-full shadow-inner p-4 border border-gray-400 mb-4 rounded-lg focus:shadow-outline text-2xl dark:text-black"
                        placeholder="Drop your Comment here" cols="6" rows="6" id="comment_content" name="comment"
                        spellcheck="false"></textarea>
                    <button
                        class="font-bold py-2 px-4 w-full bg-purple-400 text-lg text-white shadow-md rounded-lg ">
                        Comment
                    </button>
                </form>

                <div id="task-comments" class="pt-4">

                    @forelse($post->comments as $comment)
                        <div
                            class="bg-white dark:bg-gray-700 rounded-lg p-3 flex flex-col justify-center items-center md:items-start shadow-lg mb-4">
                            <div class="flex flex-row justify-center mr-2">
                                <img alt="avatar" width="48" height="48"
                                     class="rounded-full w-10 h-10 mr-4 shadow-lg mb-4 bg-white"
                                     src="https://cdn1.iconfinder.com/data/icons/technology-devices-2/100/Profile-512.png">
                                <h3 class="text-purple-600 dark:text-purple-300 font-semibold text-lg text-center md:text-left ">{{$comment->name}}</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-200 text-lg text-center md:text-left w-9/12 ">
                                {{$comment->comment}}
                            </p>
                        </div>
                    @empty
                        <p class="text-gray-600 text-lg block text-center w-full ">
                            Its empty down here...
                        </p>
                    @endforelse
                </div>
            </section>
        </div>
    </div>


@endsection


@push('script')
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                window.editor = editor;
                editor.isReadOnly = true;
            });
    </script>
@endpush

@section('footer')
    @include('layouts.footer')
@endsection
