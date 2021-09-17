<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns:x-transition="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    {!! SEO::generate(true) !!}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-G0TL352WKG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'G-G0TL352WKG');
    </script>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('cdn')
    @stack('style')
    @laravelPWA
    @livewireStyles
</head>
<body class="bg-white dark:bg-black">

<header class="text-gray-600 body-font bg-gray-100 dark:bg-gray-900">
    <div x-data="{ open: false }" class="container mx-auto flex flex-wrap py-2 flex-col md:flex-row items-center">
        <div  class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <a href="{{route('public.index')}}">
                <img src="{{asset('favicon.ico')}}" alt="" class="w-8"/>
            </a>
            <a href="{{route('public.pandemic.index')}}">
                <span class="ml-3 text-xl dark:text-white">{{__('COVID Dashboard')}}</span>
            </a>
            <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline absolute right-2" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd" clip-rule="evenodd" class="fill-current text-white dark:hover:text-black"
                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"></path>
                    <path x-show="open" fill-rule="evenodd" clip-rule="evenodd" class="fill-current text-white dark:hover:text-black"
                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"></path>
                </svg>
            </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}"
            class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row dark:text-white">
            <a href="{{route('public.pandemic.index')}}"
               class="cursor-pointer dark:hover:text-white hover:text-gray-900 dark:hover:bg-gray-600 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline rounded-lg px-2 py-2 text-bold @if(request()->is('pandemic'))) bg-gray-50 dark:bg-gray-800 font-bold @endif">
                {{__('Dashboard')}}
            </a>
            <a href="{{route('public.pandemic.clusters')}}"
               class="cursor-pointer dark:hover:text-white hover:text-gray-900 dark:hover:bg-gray-600 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline rounded-lg px-2 py-2 text-bold @if(request()->is('pandemic/clusters'))) bg-gray-50 dark:bg-gray-800 font-bold @endif">
                {{__('Clusters')}}
            </a>
{{--            <a class="cursor-pointer dark:hover:text-white hover:text-gray-900 dark:hover:bg-gray-600 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline rounded-lg px-2 py-2 text-bold">--}}
{{--                Third Link--}}
{{--            </a>--}}
{{--            <a class="cursor-pointer dark:hover:text-white hover:text-gray-900 dark:hover:bg-gray-600 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline rounded-lg px-2 py-2 text-bold">--}}
{{--                Fourth Link--}}
{{--            </a>--}}
            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open" aria-label="Drop Down trigger"
                        class="hover:text-black flex flex-row dark:text-white text-black items-center w-full px-2 py-2 mt-2 text-bold text-md text-left bg-transparent rounded-lg dark:bg-transparent dark:focus:text-white dark:hover:text-white dark:focus:bg-gray-600 dark:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span>{{__('Select Language')}}</span>
                    <svg viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                         class="inline w-4 h-4 mt-1 ml-1 text-black dark:text-white fill-current transition-transform duration-200 transform md:-mt-1">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"></path>
                    </svg>
                </button>
                <div x-show="open"
                     x-transition:enter="transition ease-out duration-100"
                     x-transition:enter-start="transform opacity-0 scale-95"
                     x-transition:enter-end="transform opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-75"
                     x-transition:leave-start="transform opacity-100 scale-100"
                     x-transition:leave-end="transform opacity-0 scale-95"
                     class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                    <div class="px-2 py-2 bg-white rounded-md shadow dark:bg-gray-800">
                        <a class="@if(app()->getLocale()=='en') bg-gray-200 dark:bg-gray-600 @endif block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                           href="{{route('public.setLocale','en')}}">English</a>
                        <a class="@if(app()->getLocale()=='zh') bg-gray-200 dark:bg-gray-600 @endif block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                           href="{{route('public.setLocale','zh')}}">简体中文</a>
                        <a class="@if(app()->getLocale()=='ms') bg-gray-200 dark:bg-gray-600 @endif block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                           href="{{route('public.setLocale','ms')}}">Bahasa Malaysia</a>
                    </div>
                </div>

            </div>
        </nav>
    </div>
</header>
<main class="container w-full mx-auto text-center bg-white dark:bg-black">
    @yield('content')
</main>

@yield('footer')
</body>
@stack('script')
@livewireScripts
</html>
