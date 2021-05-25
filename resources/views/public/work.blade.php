@extends('layouts.app')

@section('content')
    <div class="md:w-8/12 mx-auto pt-20 ">
        <div class="dark:text-white mb-12 pb-12 border-b-2">
            <h1 class="text-4xl inline pr-5">{{config('app.name')}}</h1> ||
            <p class="inline pl-5">Just Random Sharing Blog for tech</p>
        </div>

        <div class="flex flex-wrap -m-4 dark:text-white w-full mx-auto pb-32">
            <div class="w-full">
                <h1 class="mb-2 text-2xl font-black text-black text-center dark:text-white lg:text-3xl md:text-2xl">
                    These is some of my Work :3 </h1>
            </div>

            @foreach($works as $work)
                <div class=" md:w-1/2 p-4 block sm:w-full">
                    <div class="border border-gray-300 p-6 rounded-lg bg-gray-100 dark:bg-gray-900 block">
                        <div>
                            <a href="{{$work->url}}" target="_blank">
                                <img src="{{$work->imgLink}}" alt="" class="w-full rounded-lg mb-3" loading="lazy">
                            </a>
                        </div>
                        <h2 class="text-2xl font-bold title-font mb-2">{{$work->name}} </h2>
                        <p class="leading-relaxed text-base">{{$work->description}}</p>

                        <div
                            class="text-center mt-2 leading-none flex items-start w-full mt-4 text-blue-700 dark:text-blue-400 mb-4">
                            <a rel="noopener" target="_blank" href="{{$work->url}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                                     class="dark:text-blue-400 fill-current">
                                    <path
                                        d="M16.36,14C16.44,13.34 16.5,12.68 16.5,12C16.5,11.32 16.44,10.66 16.36,10H19.74C19.9,10.64 20,11.31 20,12C20,12.69 19.9,13.36 19.74,14M14.59,19.56C15.19,18.45 15.65,17.25 15.97,16H18.92C17.96,17.65 16.43,18.93 14.59,19.56M14.34,14H9.66C9.56,13.34 9.5,12.68 9.5,12C9.5,11.32 9.56,10.65 9.66,10H14.34C14.43,10.65 14.5,11.32 14.5,12C14.5,12.68 14.43,13.34 14.34,14M12,19.96C11.17,18.76 10.5,17.43 10.09,16H13.91C13.5,17.43 12.83,18.76 12,19.96M8,8H5.08C6.03,6.34 7.57,5.06 9.4,4.44C8.8,5.55 8.35,6.75 8,8M5.08,16H8C8.35,17.25 8.8,18.45 9.4,19.56C7.57,18.93 6.03,17.65 5.08,16M4.26,14C4.1,13.36 4,12.69 4,12C4,11.31 4.1,10.64 4.26,10H7.64C7.56,10.66 7.5,11.32 7.5,12C7.5,12.68 7.56,13.34 7.64,14M12,4.03C12.83,5.23 13.5,6.57 13.91,8H10.09C10.5,6.57 11.17,5.23 12,4.03M18.92,8H15.97C15.65,6.75 15.19,5.55 14.59,4.44C16.43,5.07 17.96,6.34 18.92,8M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                </svg>
                            </a>
                            <a href="{{$work->github_url}}" rel="noopener" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                                     class="dark:text-white fill-current">
                                    <path
                                        d="M12,2A10,10 0 0,0 2,12C2,16.42 4.87,20.17 8.84,21.5C9.34,21.58 9.5,21.27 9.5,21C9.5,20.77 9.5,20.14 9.5,19.31C6.73,19.91 6.14,17.97 6.14,17.97C5.68,16.81 5.03,16.5 5.03,16.5C4.12,15.88 5.1,15.9 5.1,15.9C6.1,15.97 6.63,16.93 6.63,16.93C7.5,18.45 8.97,18 9.54,17.76C9.63,17.11 9.89,16.67 10.17,16.42C7.95,16.17 5.62,15.31 5.62,11.5C5.62,10.39 6,9.5 6.65,8.79C6.55,8.54 6.2,7.5 6.75,6.15C6.75,6.15 7.59,5.88 9.5,7.17C10.29,6.95 11.15,6.84 12,6.84C12.85,6.84 13.71,6.95 14.5,7.17C16.41,5.88 17.25,6.15 17.25,6.15C17.8,7.5 17.45,8.54 17.35,8.79C18,9.5 18.38,10.39 18.38,11.5C18.38,15.32 16.04,16.16 13.81,16.41C14.17,16.72 14.5,17.33 14.5,18.26C14.5,19.6 14.5,20.68 14.5,21C14.5,21.27 14.66,21.59 15.17,21.5C19.14,20.16 22,16.42 22,12A10,10 0 0,0 12,2Z"></path>
                                </svg>
                            </a>

                        </div>
                        <div class="">
                            <span class=" inline-flex items-center leading-none text-sm">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                        </svg>
                                @foreach($work->tags as $tag)
                                    @if ($loop->last)
                                        {{$tag->name}}
                                    @else
                                        {{$tag->name}},
                                    @endif
                                @endforeach

                    </span>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
