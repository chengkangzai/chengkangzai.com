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
<!-- Global site tag (gtag.js) - Google Analytics -->
    <script defer src="https://www.googletagmanager.com/gtag/js?id=G-G0TL352WKG"></script>
    <script defer>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'G-G0TL352WKG', {cookie_flags: 'SameSite=None;Secure'});
    </script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @laravelPWA
    @livewireStyles
    @stack('cdn')
    @stack('style')
</head>
<body>
<div class="min-h-screen flex flex-col overscroll-none">
    <header
        class="fixed top-0 w-full text-gray-700 bg-white dark:text-gray-200 dark:bg-gray-800 from-blue-400 bg-gradient-to-r to-purple-600 z-50">
        <div x-data="{ open: false }"
             class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="py-3 flex flex-row items-center justify-between">
                <a href="{{route('public.index')}}"
                   class="text-lg font-semibold text-white tracking-widest uppercase rounded-lg focus:outline-none focus:shadow-outline">
                    {{config('app.name')}}</a>
                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd" clip-rule="evenodd"
                              class="fill-current text-white dark:hover:text-black"
                              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"></path>
                        <path x-show="open" fill-rule="evenodd" clip-rule="evenodd"
                              class="fill-current text-white dark:hover:text-black"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}"
                 class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                <a class="px-2 py-2 mt-2 text-md font-bold text-white bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline animate-pulse"
                   href="{{route('public.pandemic.index')}}">{{__('Covid Dashboard')}}</a>
                @if(request()->is('/'))
                    <a class="px-2 py-2 mt-2 text-md font-bold text-white bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                       href="#about-me">{{__('About Me')}}</a>
                    <a class="px-2 py-2 mt-2 text-md font-bold text-white bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                       href="#work">{{__('My Work')}}</a>
                    <a class="px-2 py-2 mt-2 text-md font-bold text-white bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                       href="#experience">{{__('Experience')}}</a>
                    <a class="px-2 py-2 mt-2 text-md font-bold text-white bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                       href="{{route('public.posts.index')}}">{{__('Blog')}}</a>
                @else
                    @canany(['post_access','work_access','comment_access','tag_access'])
                        <a class="block md:hidden px-2 py-2 mt-2 text-md font-bold text-black bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline @if(request()->is('admin/posts*')) bg-blue-200 dark:bg-blue-700  @else bg-gray-100 dark:bg-gray-700 @endif"
                           href="{{route('admin.posts.index')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                            {{__('Post')}}
                        </a>
                        <a class="block md:hidden px-2 py-2 mt-2 text-md font-bold text-black bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline @if(request()->is('admin/works*')) bg-blue-200 dark:bg-blue-700  @else bg-gray-100 dark:bg-gray-700 @endif"
                           href="{{route('admin.works.index')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            {{__('Work')}}
                        </a>
                        <a class="block md:hidden px-2 py-2 mt-2 text-md font-bold text-black bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline @if(request()->is('admin/comment*')) bg-blue-200 dark:bg-blue-700  @else bg-gray-100 dark:bg-gray-700 @endif"
                           href="{{route('admin.comment.index')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                            </svg>
                            {{__('Comments')}}
                        </a>
                        <a class="block md:hidden px-2 py-2 mt-2 text-md font-bold text-black bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline @if(request()->is('admin/tags*')) bg-blue-200 dark:bg-blue-700  @else bg-gray-100 dark:bg-gray-700 @endif"
                           href="{{route('admin.tags.index')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                            </svg>
                            {{__('Tags')}}
                        </a>
                    @endcanany

                    @canany(['schedule_access'])
                        <a class="block md:hidden px-2 py-2 mt-2 text-md font-bold text-black bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline @if(request()->is('admin/scheduleConfig*')) bg-blue-200 dark:bg-blue-700  @else bg-gray-100 dark:bg-gray-700 @endif"
                           href="{{route('admin.scheduleConfig.index')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            {{__('Schedule')}}
                        </a>
                    @endcanany
                @endif
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" aria-label="Drop Down trigger"
                            class="hover:text-black flex flex-row text-white items-center w-full px-2 py-2 font-bold text-md text-left bg-transparent rounded-lg dark:bg-transparent dark:focus:text-white dark:hover:text-white dark:focus:bg-gray-600 dark:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <span>
                        {{__('Select Language')}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <svg viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                             class="inline w-4 h-4 mt-1 ml-1 fill-current transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"></path>
                        </svg>
                        </span>
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
                @auth
                    <div class="mt-2 md:ml-2 space-x-2 relative">
                        @if(request()->is("admin/*"))
                            <a href="{{url('/')}}"
                               class="px-2 py-2 leading-none bg-transparent my-auto text-white font-semibold border border-gray-100 rounded hover:bg-gray-100 hover:text-gray-700">
                                {{__('Main Page')}}</a>
                        @else
                            <a href="{{route('admin.home')}}"
                               class="px-2 py-2 leading-none bg-transparent my-auto text-white font-semibold border border-gray-100 rounded hover:bg-gray-100 hover:text-gray-700">
                                {{__('Home')}}</a>
                        @endif
                        <a href="{{route('logout')}}"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                           class="px-2 py-2 leading-none bg-transparent my-auto text-white font-semibold border border-gray-100 rounded hover:bg-gray-100 hover:text-gray-700">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    </div>
                @endauth

                @guest
                    <a href="{{route('login')}}"
                       class="leading-none border border-teal-600 rounded border py-2 px-2 ml-2 my-auto font-medium md:text-white ">
                        {{__('Login')}}</a>
                @endguest
            </nav>
        </div>
    </header>

    <div class="flex-1 flex flex-col md:flex-row">
        <main
            class="flex-1 bg-white @if(!request()->is('admin*')) dark:bg-black @else dark:bg-gray-800 @endif w-full px-3 md:px-0 pt-12">
            @yield('content')
        </main>
        @if(request()->is('admin/*'))
            <nav class="order-first md:w-64">@include('layouts.sidebar')</nav>
        @endif
    </div>

    @yield('footer')
</div>
@livewireScripts
@livewire('livewire-ui-modal')
@stack('script')
</body>
</html>
