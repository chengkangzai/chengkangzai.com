<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! SEO::generate(true) !!}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('cdn')
    @stack('style')
</head>
<body>
<div class="h-screen bg-white dark:bg-black ">
    <header class="bg-teal-100 w-full" style="width: 100% !important;">
        <nav class="flex justify-between w-full from-blue-400 bg-gradient-to-r to-purple-600 text-white p-4">
            <div class="flex align-middle my-auto">
                <a href="{{route('public.index')}}">
                    <span class="font-semibold text-xl tracking-tight align-middle">{{ config('app.name') }}</span>
                </a>
            </div>
            <div class="md:items-center md:w-auto flex">

                {{--Big Sreen--}}
                <div class="md:flex hidden">
                    @if(request()->is('/'))
                        <a class="block font-medium md:text-white mr-4 " href="#about-me">About Me</a>
                        <a class="block font-medium md:text-white mr-4" href="#work">My Work</a>
                        <a class="block font-medium md:text-white mr-4" href="#experience">Experience</a>
                    @else
                        <a class="block font-medium md:text-white mr-4 " href="{{route('public.index')}}">About Me</a>
                    @endif
                    <a class="block md:text-white mr-4" href="{{route('public.posts.index')}}">Blog</a>
                </div>

                {{--Mobile--}}
                @if(request()->is('/'))
                    <div class="flex md:hidden">
                        <a class="leading-none border border-teal-600 rounded border p-2 font-medium md:text-white "
                           href="{{route('public.posts.index')}}">Blog</a>
                    </div>
                @endif
                <div class="flex text-sm">
                    @auth
                        @if(request()->is("admin/*"))
                            <a class="hidden md:block p-2 ml-2 bg-teal-500 text-gray-100 font-semibold leading-none border border-teal-600 rounded hover:border-transparent hover:bg-teal-600"
                               href="{{url('/')}}">{{__('Main Page')}}</a>
                        @else
                            <a class="hidden md:block p-2 ml-2 bg-teal-500 text-gray-100 font-semibold leading-none border border-teal-600 rounded hover:border-transparent hover:bg-teal-600"
                               href="{{route('admin.home')}}">{{__('Home')}}</a>
                        @endif
                        <a class=" p-2 ml-2 bg-white text-gray-500 font-semibold leading-none border border-gray-100 rounded hover:border-transparent hover:bg-gray-100"
                           href="{{route('logout')}}"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    @endauth
                </div>
            </div>
        </nav>
    </header>
    <main class="bg-white dark:bg-black w-full px-3 md:px-0 @if(request()->is('admin/*')) flex @else min-h-screen  @endif">
        @yield('content')
    </main>
    @yield('footer')
</div>
</body>
@stack('script')
</html>
