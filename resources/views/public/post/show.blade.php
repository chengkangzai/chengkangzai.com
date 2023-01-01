@php
/* @var App\Models\Post $post */
@endphp
@extends('layouts.app')

@section('content')
    @include('partial.rocket')
    <div class="mx-auto pt-20 md:w-10/12 xl:w-8/12">
        @include('partial.public-heading', [
            'title' => __('Just Random Sharing Blog for tech'),
        ])

        <div class="-m-4 mx-auto mb-6 flex w-full flex-wrap dark:text-white">
            <div class="mx-auto pb-8 text-center">
                <h1 class="py-4 text-4xl font-bold"> {{ $post->title }} </h1>
                <span class="mr-3 inline-flex items-center py-1 text-sm leading-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    {{ $post->updated_at->diffForHumans() }}
                </span>
                <span class="mr-3 inline-flex items-center py-1 text-sm leading-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                    </svg>
                    {{-- TODO: add image and description --}}
                    @foreach ($post->tags as $tag)
                        @if ($loop->last)
                            {{ $tag->name }}
                        @else
                            {{ $tag->name }},
                        @endif
                    @endforeach
                </span>
            </div>
            <div class="w-screen">
                <div id="editor" class="mx-auto hidden w-screen">
                    {!! $post->content !!}
                </div>
            </div>
        </div>

        <div class="mx-auto flex w-full flex-wrap pb-4 pt-4 dark:text-white">
            <div class="mx-auto mb-6">
                <h3 class="text-center text-2xl">{{ __('Comment Section') }}</h3>
            </div>
            <div class="mb-2 w-full">
                @include('partial.error-card')
            </div>
            <section class="w-full rounded-b-lg">
                <form action="{{ route('public.posts.comments.store', $post) }}" method="post">
                    @csrf
                    <div class="mx-auto mb-3 flex w-full space-x-4">
                        <input id="name" type="text" placeholder="{{ __('Name (required)') }} " name="name"
                            required aria-label="Name"
                            class="focus:shadow-outline w-1/2 rounded border border-gray-400 py-2 text-center text-gray-800 placeholder-gray-400" />
                        <input id="email" type="email" placeholder="{{ __('Email (required)') }} " name="email"
                            required aria-label="Email"
                            class="focus:shadow-outline w-1/2 rounded border border-gray-400 py-2 text-center text-gray-800 placeholder-gray-400" />
                    </div>
                    <textarea required aria-label="Your Comment" name="comment"
                        class="focus:shadow-outline mb-4 w-full rounded-lg border border-gray-400 p-4 text-2xl shadow-inner dark:text-black"
                        placeholder="{{ __('Drop your Comment here') }}" cols="6" rows="6" id="comment_content"></textarea>
                    <button class="w-full rounded-lg bg-violet-600 py-2 px-4 text-lg font-bold text-white shadow-md">
                        {{ __('Comment') }}
                    </button>
                </form>

                <div id="task-comments" class="pt-4">
                    @forelse($post->comments as $comment)
                        <div
                            class="mb-4 flex flex-col items-center justify-center rounded-lg bg-white p-3 shadow-lg dark:bg-gray-700 md:items-start">
                            <div class="mr-2 flex flex-row justify-center">
                                <img alt="avatar" width="48" height="48"
                                    class="mr-4 mb-4 h-10 w-10 rounded-full bg-white shadow-lg"
                                    src="https://cdn1.iconfinder.com/data/icons/technology-devices-2/100/Profile-512.png">
                                <h3
                                    class="text-center text-lg font-semibold text-violet-600 dark:text-violet-300 md:text-left">
                                    {{ $comment->name }}</h3>
                            </div>
                            <p class="w-9/12 text-center text-lg text-gray-600 dark:text-gray-200 md:text-left">
                                {{ $comment->comment }}
                            </p>
                        </div>
                    @empty
                        <p class="block w-full text-center text-lg text-gray-800 dark:text-white">
                            {{ __('Its empty down here...') }}
                        </p>
                    @endforelse
                </div>
            </section>
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
            });
    </script>
@endpush

@section('footer')
    @include('layouts.footer')
@endsection
