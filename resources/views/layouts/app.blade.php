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
    <script src="//unpkg.com/alpinejs" defer></script>
    {!! SEO::generate(true) !!}
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script defer src="https://www.googletagmanager.com/gtag/js?id=G-G0TL352WKG"></script>
    <script defer>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'G-G0TL352WKG', {
            cookie_flags: 'SameSite=None;Secure'
        });
    </script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @laravelPWA
    @livewireStyles
    @stack('cdn')
    @stack('style')
</head>

<body>
    <div class="flex min-h-screen flex-col overscroll-none">
        <header
            class="fixed top-0 z-50 w-full bg-white bg-gradient-to-r from-blue-400 to-violet-600 text-gray-700 dark:bg-gray-800 dark:text-gray-200">
            <div x-data="{ open: false }"
                class="mx-auto flex max-w-screen-xl flex-col px-4 md:flex-row md:items-center md:justify-between md:px-6 lg:px-8">
                <div class="flex flex-row items-center justify-between py-3">
                    <a href="{{ route('public.index') }}"
                        class="focus:shadow-outline rounded-lg text-lg font-semibold uppercase tracking-widest text-white focus:outline-none">
                        {{ config('app.name') }}</a>
                    <button class="focus:shadow-outline rounded-lg focus:outline-none md:hidden" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
                            <path x-show="!open" fill-rule="evenodd" clip-rule="evenodd"
                                class="fill-current text-white dark:hover:text-black"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z">
                            </path>
                            <path x-show="open" fill-rule="evenodd" clip-rule="evenodd"
                                class="fill-current text-white dark:hover:text-black"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z">
                            </path>
                        </svg>
                    </button>
                </div>
                <nav :class="{ 'flex': open, 'hidden': !open }"
                    class="hidden flex-grow flex-col pb-4 md:flex md:flex-row md:justify-end md:pb-0">
                    <a class="text-md focus:shadow-outline mt-2 animate-pulse rounded-lg bg-transparent px-2 py-2 font-bold text-white hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none dark:bg-transparent dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:bg-gray-600 dark:focus:text-white md:mt-0 md:ml-4"
                        href="https://pandemic.chengkangzai.com/">{{ __('Covid Dashboard') }}</a>
                    @if (request()->is('/'))
                        <a class="text-md focus:shadow-outline mt-2 rounded-lg bg-transparent px-2 py-2 font-bold text-white hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none dark:bg-transparent dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:bg-gray-600 dark:focus:text-white md:mt-0 md:ml-4"
                            href="#about-me">{{ __('About Me') }}</a>
                        <a class="text-md focus:shadow-outline mt-2 rounded-lg bg-transparent px-2 py-2 font-bold text-white hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none dark:bg-transparent dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:bg-gray-600 dark:focus:text-white md:mt-0 md:ml-4"
                            href="#work">{{ __('My Work') }}</a>
                        <a class="text-md focus:shadow-outline mt-2 rounded-lg bg-transparent px-2 py-2 font-bold text-white hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none dark:bg-transparent dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:bg-gray-600 dark:focus:text-white md:mt-0 md:ml-4"
                            href="#experience">{{ __('Experience') }}</a>
                        @if (\App\Models\Post::published()->count() > 0)
                            <a class="text-md focus:shadow-outline mt-2 rounded-lg bg-transparent px-2 py-2 font-bold text-white hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none dark:bg-transparent dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:bg-gray-600 dark:focus:text-white md:mt-0 md:ml-4"
                                href="{{ route('public.posts.index') }}">{{ __('Blog') }}</a>
                        @endif
                    @else
                        @canany(['post_access', 'work_access', 'comment_access', 'tag_access'])
                            <a class="text-md focus:shadow-outline @if (request()->is('admin/posts*')) bg-blue-200 dark:bg-blue-700  @else bg-gray-100 dark:bg-gray-700 @endif mt-2 block rounded-lg bg-transparent px-2 py-2 font-bold text-black hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none dark:bg-transparent dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:bg-gray-600 dark:focus:text-white md:mt-0 md:ml-4 md:hidden"
                                href="{{ route('admin.posts.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="inline h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                {{ __('Post') }}
                            </a>
                            <a class="text-md focus:shadow-outline @if (request()->is('admin/works*')) bg-blue-200 dark:bg-blue-700  @else bg-gray-100 dark:bg-gray-700 @endif mt-2 block rounded-lg bg-transparent px-2 py-2 font-bold text-black hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none dark:bg-transparent dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:bg-gray-600 dark:focus:text-white md:mt-0 md:ml-4 md:hidden"
                                href="{{ route('admin.works.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="inline h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                {{ __('Work') }}
                            </a>
                            <a class="text-md focus:shadow-outline @if (request()->is('admin/comment*')) bg-blue-200 dark:bg-blue-700  @else bg-gray-100 dark:bg-gray-700 @endif mt-2 block rounded-lg bg-transparent px-2 py-2 font-bold text-black hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none dark:bg-transparent dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:bg-gray-600 dark:focus:text-white md:mt-0 md:ml-4 md:hidden"
                                href="{{ route('admin.comment.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="inline h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                </svg>
                                {{ __('Comments') }}
                            </a>
                            <a class="text-md focus:shadow-outline @if (request()->is('admin/tags*')) bg-blue-200 dark:bg-blue-700  @else bg-gray-100 dark:bg-gray-700 @endif mt-2 block rounded-lg bg-transparent px-2 py-2 font-bold text-black hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none dark:bg-transparent dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:bg-gray-600 dark:focus:text-white md:mt-0 md:ml-4 md:hidden"
                                href="{{ route('admin.tags.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="inline h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                </svg>
                                {{ __('Tags') }}
                            </a>
                        @endcanany

                        @canany(['schedule_access'])
                            <a class="text-md focus:shadow-outline @if (request()->is('admin/scheduleConfig*')) bg-blue-200 dark:bg-blue-700  @else bg-gray-100 dark:bg-gray-700 @endif mt-2 block rounded-lg bg-transparent px-2 py-2 font-bold text-black hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none dark:bg-transparent dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:bg-gray-600 dark:focus:text-white md:mt-0 md:ml-4 md:hidden"
                                href="{{ route('admin.scheduleConfig.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="inline h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                {{ __('Schedule') }}
                            </a>
                        @endcanany
                    @endif
                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open" aria-label="Drop Down trigger"
                            class="text-md focus:shadow-outline flex w-full flex-row items-center rounded-lg bg-transparent px-2 py-2 text-left font-bold text-white hover:bg-gray-200 hover:text-black hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none dark:bg-transparent dark:hover:bg-gray-600 dark:hover:text-white dark:focus:bg-gray-600 dark:focus:text-white md:mt-0 md:ml-4 md:inline md:w-auto">
                            <span>
                                {{ __('Select Language') }}
                                <svg xmlns="http://www.w3.org/2000/svg" class="inline h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <svg viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                                    class="mt-1 ml-1 inline h-4 w-4 transform fill-current transition-transform duration-200 md:-mt-1">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z">
                                    </path>
                                </svg>
                            </span>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute right-0 mt-2 w-full origin-top-right rounded-md shadow-lg md:w-48">
                            <div class="rounded-md bg-white px-2 py-2 shadow dark:bg-gray-800">
                                <a class="@if (app()->getLocale() == 'en') bg-gray-200 dark:bg-gray-600 @endif focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none dark:bg-transparent dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:bg-gray-600 dark:focus:text-white md:mt-0"
                                    href="{{ route('public.setLocale', 'en') }}">English</a>
                                <a class="@if (app()->getLocale() == 'zh') bg-gray-200 dark:bg-gray-600 @endif focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none dark:bg-transparent dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:bg-gray-600 dark:focus:text-white md:mt-0"
                                    href="{{ route('public.setLocale', 'zh') }}">简体中文</a>
                                <a class="@if (app()->getLocale() == 'ms') bg-gray-200 dark:bg-gray-600 @endif focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none dark:bg-transparent dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:bg-gray-600 dark:focus:text-white md:mt-0"
                                    href="{{ route('public.setLocale', 'ms') }}">Bahasa Malaysia</a>
                            </div>
                        </div>
                    </div>
                    @auth
                        <div class="relative mt-2 space-x-2 md:ml-2">
                            @if (request()->is('admin/*'))
                                <a href="{{ url('/') }}"
                                    class="my-auto rounded border border-gray-100 bg-transparent px-2 py-2 font-semibold leading-none text-white hover:bg-gray-100 hover:text-gray-700">
                                    {{ __('Main Page') }}</a>
                            @else
                                <a href="{{ route('admin.home') }}"
                                    class="my-auto rounded border border-gray-100 bg-transparent px-2 py-2 font-semibold leading-none text-white hover:bg-gray-100 hover:text-gray-700">
                                    {{ __('Home') }}</a>
                            @endif
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                class="my-auto rounded border border-gray-100 bg-transparent px-2 py-2 font-semibold leading-none text-white hover:bg-gray-100 hover:text-gray-700">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>
                        </div>
                    @endauth

                    @guest
                        <a href="{{ route('login') }}"
                            class="my-auto ml-2 rounded border border-white p-2 font-medium leading-none hover:bg-gray-100 hover:text-gray-700 md:text-white">
                            {{ __('Login') }}</a>
                    @endguest
                </nav>
            </div>
        </header>

        <div class="flex flex-1 flex-col md:flex-row">
            <main
                class="@if (!request()->is('admin*')) dark:bg-black @else dark:bg-gray-800 @endif w-full flex-1 bg-white md:px-0">
                @yield('content')
            </main>
            @if (request()->is('admin/*'))
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
