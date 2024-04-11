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
    @yield('pwa')
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
    @vite(['resources/css/app.css'])
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
                <a class="text-md focus:shadow-outline mt-2 rounded-lg bg-transparent px-2 py-2 font-bold text-white hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none dark:bg-transparent dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:bg-gray-600 dark:focus:text-white md:mt-0 md:ml-4"
                   href="#about-me">{{ __('About Me') }}</a>
                <a class="text-md focus:shadow-outline mt-2 rounded-lg bg-transparent px-2 py-2 font-bold text-white hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none dark:bg-transparent dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:bg-gray-600 dark:focus:text-white md:mt-0 md:ml-4"
                   href="#work">{{ __('My Work') }}</a>
                <a class="text-md focus:shadow-outline mt-2 rounded-lg bg-transparent px-2 py-2 font-bold text-white hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none dark:bg-transparent dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:bg-gray-600 dark:focus:text-white md:mt-0 md:ml-4"
                   href="#experience">{{ __('Experience') }}</a>

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
                                     class="mt-1 ml-1 inline h-4 w-4 fill-current transition-transform duration-200 md:-mt-1">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z">
                                    </path>
                                </svg>
                            </span>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                         x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-75"
                         x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
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
                        <a href="{{ filament()->getLoginUrl() }}"
                           class="my-auto rounded border border-gray-100 bg-transparent px-2 py-2 font-semibold leading-none text-white hover:bg-gray-100 hover:text-gray-700">
                            {{ __('Home') }}</a>
                        <a href="{{ filament()->getLogoutUrl() }}"
                           class="my-auto rounded border border-gray-100 bg-transparent px-2 py-2 font-semibold leading-none text-white hover:bg-gray-100 hover:text-gray-700">
                            {{ __('Logout') }}
                        </a>
                    </div>
                @endauth

                @guest
                    <a href="{{ filament()->getLoginUrl() }}"
                       class="my-auto ml-2 rounded border border-white p-2 font-medium leading-none hover:bg-gray-100 hover:text-gray-700 md:text-white">
                        {{ __('Login') }}</a>
                @endguest
            </nav>
        </div>
    </header>

    <div class="flex flex-1 flex-col md:flex-row">
        <main class="w-full flex-1 bg-white dark:bg-black md:px-0">
            @yield('content')
        </main>
    </div>

    @yield('footer')
</div>
@livewireScripts
@stack('script')
</body>

</html>
