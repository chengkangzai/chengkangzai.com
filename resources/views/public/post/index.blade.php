@php
/* @var App\Models\Post $post */
@endphp

@extends('layouts.app')

@section('content')
    @include('partial.rocket')
    <div class="md:w-10/12 mx-auto pt-20 ">
        @include('partial.public-heading', [
            'title' => __('Just Random Sharing Blog for tech'),
        ])

        <div class="flex flex-wrap -m-4 dark:text-white w-full mx-auto pb-32">
            @foreach ($posts as $post)
                <div class="xl:w-1/3 md:w-1/2 p-4 block sm:w-full">
                    <a class="border border-gray-300 p-6 rounded-lg bg-gray-100 dark:bg-gray-900 block"
                        href="{{ route('public.posts.show', $post) }}">
                        <h2 class="text-2xl font-bold title-font mb-2">{{ $post->title }} </h2>
                        <p class="leading-relaxed text-base">{{ Str::words(strip_tags($post->content), 20) }}</p>

                        <div class="text-center mt-2 leading-none flex justify-between w-full">
                            <span class="mr-3 inline-flex items-center leading-none text-sm  py-1 ">
                                <svg class="fill-current w-4 h-4 mr-2 text-blue-500" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z" />
                                </svg>
                                {{ $post->updated_at->diffForHumans() }}
                            </span>
                            <span class="inline-flex items-center leading-none text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
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

                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
