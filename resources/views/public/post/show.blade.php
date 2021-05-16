@section('cdn')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endsection



@extends('layouts.app')

@section('content')
    <div class="xl:w-8/12 md:w-10/12 mx-auto pt-20 ">
        <div class="dark:text-white mb-12 pb-12 border-b-2">
            <h1 class="text-4xl inline pr-5">{{config('app.name')}}</h1> ||
            <p class="inline pl-5">Just Random Sharing Blog for tech</p>
        </div>

        <div class="flex flex-wrap -m-4 dark:text-white w-full mx-auto mb-4">
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
            <div id="editor" class="text-4xl w-full">
                {!! $post->content !!}
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <script>

        const editor = new Quill('#editor', {
            theme: 'snow',
            module: {toolbar: []},
            scrollingContainer: null,
            readonly: true
        });


        document.querySelector(".ql-toolbar").remove()


    </script>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
