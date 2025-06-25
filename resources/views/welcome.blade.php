@php use App\Models\Project; @endphp
@php
/** @var Project[] $projects */
@endphp
@extends('layouts.app')
@section('seo')
    {!! seo()->for($SEOData) !!}
@endsection
@push('style')
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <style>
        html {
            scroll-behavior: smooth;
        }

        .wave {
            animation-duration: 2.2s;
            animation-iteration-count: infinite;
            animation-name: wave;
            display: inline-block;
            transform-origin: 70% 70%;
        }

        @keyframes wave {
            0% {
                transform: rotate(0deg);
            }

            10% {
                transform: rotate(-10deg);
            }

            20% {
                transform: rotate(12deg);
            }

            30% {
                transform: rotate(-10deg);
            }

            40% {
                transform: rotate(10deg);
            }

            50% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(0deg);
            }
        }
    </style>
@endpush

@section('content')
    @include('partial.rocket')
    <div class="mx-auto ">
        <section class="relative text-gray-700 bg-gradient-to-br from-blue-50 via-white to-purple-50 dark:from-gray-900 dark:via-gray-800 dark:to-blue-900">
            <div class="container mx-auto flex min-h-screen flex-col items-center px-5 md:flex-row lg:px-28">
                <div
                    class="flex min-h-[40vh] sm:min-h-screen w-full flex-col items-center sm:items-start justify-start sm:justify-center py-16 sm:py-16 text-center sm:text-left lg:w-3/5 lg:flex-grow">
                    <h1 class="title-font mb-4 sm:mb-8 text-3xl sm:text-5xl font-extrabold tracking-tight text-gray-900 lg:text-6xl dark:text-white"
                        data-aos="fade-up" data-aos-duration="1000">
                        {{ __('Hi, I am') }} <br> {{ __('Ching Cheng Kang') }} (CCK) <span class="wave">👋🏻</span>
                    </h1>
                    <div class="mb-3 sm:mb-0" style="min-height: 40px" data-aos="fade-up" data-aos-delay="200">
                        <div id="typed-skeleton" class="animate-pulse">
                            <div class="h-6 bg-gray-300 dark:bg-gray-600 rounded w-48 sm:w-64"></div>
                        </div>
                        <span id="typed"
                              class="inline-block text-left text-sm sm:text-lg leading-relaxed tracking-wide text-gray-600 dark:text-gray-200 hidden">
                            {{ __('Laravel Developer') }}
                        </span>
                    </div>
                    <p class="mb-6 sm:mb-8 mt-1 sm:mt-2 w-full text-sm sm:text-base leading-relaxed tracking-wide text-gray-600 dark:text-gray-300"
                       data-aos="fade-up" data-aos-delay="200">
                        ⚡️ {{ __('Fun fact: I convert Coffee to Code') }} ☕️
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center sm:justify-start space-y-3 sm:space-y-0 sm:space-x-3 w-full sm:w-auto"
                         data-aos="fade-up" data-aos-delay="200">
                        <a role="button" href="{{ asset('resume.pdf') }}"
                           class="focus:shadow-outline flex items-center justify-center rounded-lg bg-black px-4 sm:px-6 py-2 text-sm sm:text-base font-semibold text-white ring-black ring-offset-2 ring-offset-current transition duration-300 ease-in-out hover:bg-gray-800 hover:to-black focus:outline-none focus:ring-2 dark:bg-white dark:text-black dark:hover:bg-gray-200 dark:hover:to-white">
                            {{ __('SEE MY RESUME') }}
                        </a>

                        <a role="button" href="https://pandemic.chengkangzai.com"
                           class="focus:shadow-outline flex items-center justify-center rounded-lg bg-black px-4 sm:px-6 py-2 text-sm sm:text-base font-semibold text-white ring-black ring-offset-2 ring-offset-current transition duration-300 ease-in-out hover:bg-gray-800 hover:to-black focus:outline-none focus:ring-2 dark:bg-white dark:text-black dark:hover:bg-gray-200 dark:hover:to-white">
                            {{ __('Covid Dashboard') }}
                        </a>
                    </div>
                    <div
                        class="container mx-auto mt-8 sm:mt-28 flex w-full flex-col items-center text-center align-bottom sm:items-start">
                        <a href="#about-me" aria-label="Skip to about me ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 sm:h-8 sm:w-8 animate-bounce" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 lg:w-5/6 lg:max-w-lg px-4 sm:px-0 mt-8 sm:mt-0">
                    <div class="relative mx-auto w-4/5 sm:w-full lg:w-4/5 group" data-aos="zoom-in" data-aos-delay="200">
                        <!-- Animated background gradient -->
                        <div class="absolute -inset-2 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl blur opacity-20 sm:opacity-30 group-hover:opacity-75 transition duration-1000 group-hover:duration-200"></div>
                        
                        <!-- Profile image -->
                        <img class="relative mx-auto rounded-2xl object-cover object-center shadow-2xl ring-2 ring-white/20 backdrop-blur w-full h-auto max-w-sm sm:max-w-sm" alt="hero"
                             src="{{ asset('src/bighead.jpeg') }}">
                        
                        
                        <!-- Floating skill icons - Hidden on mobile, visible on SM+ -->
                        <div class="hidden sm:block absolute -top-4 -left-4 bg-white dark:bg-gray-800 rounded-full p-3 shadow-lg animate-bounce" style="animation-delay: 0s;">
                            @svg('si-html5', 'w-6 h-6 text-orange-500')
                        </div>
                        
                        <div class="hidden sm:block absolute top-8 -right-8 bg-white dark:bg-gray-800 rounded-full p-3 shadow-lg animate-bounce" style="animation-delay: 0.5s;">
                            @svg('si-alpinedotjs', 'w-6 h-6 text-teal-500')
                        </div>
                        
                        <div class="hidden sm:block absolute bottom-8 -left-8 bg-white dark:bg-gray-800 rounded-full p-3 shadow-lg animate-bounce" style="animation-delay: 1s;">
                            @svg('si-laravel', 'w-6 h-6 text-red-500')
                        </div>
                        
                        <div class="hidden sm:block absolute top-16 left-8 bg-white dark:bg-gray-800 rounded-full p-3 shadow-lg animate-bounce" style="animation-delay: 1.5s;">
                            @svg('si-javascript', 'w-6 h-6 text-yellow-500')
                        </div>
                        
                        <div class="hidden sm:block absolute bottom-16 -right-4 bg-white dark:bg-gray-800 rounded-full p-3 shadow-lg animate-bounce" style="animation-delay: 2s;">
                            @svg('si-livewire', 'w-6 h-6 text-pink-500')
                        </div>
                        
                        <div class="hidden sm:block absolute -top-8 right-8 bg-white dark:bg-gray-800 rounded-full p-3 shadow-lg animate-bounce" style="animation-delay: 2.5s;">
                            @svg('si-filament', 'w-6 h-6 text-amber-500')
                        </div>
                        
                    </div>
                    
                    <!-- Mobile tech badges - visible only on mobile, outside the glow effect -->
                    <div class="flex sm:hidden justify-center space-x-3 mt-6">
                        <div class="bg-white dark:bg-gray-800 rounded-full p-2.5 shadow-lg ring-1 ring-gray-200 dark:ring-gray-600">
                            @svg('si-html5', 'w-5 h-5 text-orange-500')
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-full p-2.5 shadow-lg ring-1 ring-gray-200 dark:ring-gray-600">
                            @svg('si-alpinedotjs', 'w-5 h-5 text-teal-500')
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-full p-2.5 shadow-lg ring-1 ring-gray-200 dark:ring-gray-600">
                            @svg('si-laravel', 'w-5 h-5 text-red-500')
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-full p-2.5 shadow-lg ring-1 ring-gray-200 dark:ring-gray-600">
                            @svg('si-javascript', 'w-5 h-5 text-yellow-500')
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-full p-2.5 shadow-lg ring-1 ring-gray-200 dark:ring-gray-600">
                            @svg('si-livewire', 'w-5 h-5 text-pink-500')
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-full p-2.5 shadow-lg ring-1 ring-gray-200 dark:ring-gray-600">
                            @svg('si-filament', 'w-5 h-5 text-amber-500')
                        </div>
                    </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="about-me" class="mx-2 md:mx-auto md:w-11/12 py-16 md:py-24">
            <h2 class="mb-12 md:mb-16 text-center text-4xl md:text-5xl font-bold tracking-tight text-gray-900 dark:text-white"
                data-aos="fade-up">
                {{ __('About me') }}
            </h2>
            <div class="grid gap-8 md:gap-12 pb-8 md:grid-cols-3 md:h-auto">
                <div
                    class="rounded-lg bg-gray-50 px-6 py-10 text-gray-800 shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-1 dark:bg-gray-800 flex flex-col h-full"
                    x-data="{ cn: true }"
                    data-aos="fade-right" data-aos-delay="200">
                    <div class="flex justify-between items-start mb-2">
                        <div class="flex-1"></div>
                        <button title="{{ __('Click me to translate') }}"
                                class="text-gray-400 hover:text-gray-600 dark:text-gray-500 dark:hover:text-gray-300 transition-colors"
                                @click="cn = !cn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" class="h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/>
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center justify-center mb-4">
                        <div class="flex items-center justify-center w-12 h-12 bg-indigo-100 dark:bg-indigo-900 rounded-full">
                            <svg class="w-6 h-6 text-indigo-600 dark:text-indigo-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="relative pb-4 h-8">
                        <h3 class="absolute inset-0 text-center text-2xl font-semibold leading-tight text-black dark:text-white" x-show="cn" x-transition:enter="transition ease-out duration-300 delay-150" x-transition:enter-start="opacity-0 transform translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform translate-y-2">
                            我所相信的
                        </h3>
                        <h3 class="absolute inset-0 text-center text-2xl font-semibold leading-tight text-black dark:text-white" x-show="!cn" x-transition:enter="transition ease-out duration-300 delay-150" x-transition:enter-start="opacity-0 transform translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform translate-y-2">
                            What I believe in
                        </h3>
                    </div>
                    <div class="h-3 text-left text-3xl leading-tight text-indigo-500">“</div>
                    <div class="relative min-h-[180px] mb-4">
                        <ul x-show="cn" x-transition:enter="transition ease-out duration-300 delay-150" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-95" class="absolute inset-0">
                        <li class="px-5 text-center text-gray-600 dark:text-gray-200 leading-relaxed">
                            1. 面对问题是解决问题的第一步。
                        </li>
                        <li class="px-5 text-center text-gray-600 dark:text-gray-200 leading-relaxed">
                            2. 把小问题解决了，就没有大问题。
                        </li>
                        <li class="px-5 text-center text-gray-600 dark:text-gray-200 leading-relaxed">
                            3. 把所有的小问题都解决了，就根本没有问题。
                        </li>
                        <li class="px-5 text-center text-gray-600 dark:text-gray-200 leading-relaxed">
                            4. 你不解决问题，问题会解决你。
                        </li>
                        </ul>
                        <ol x-show="!cn" x-transition:enter="transition ease-out duration-300 delay-150" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-95" class="absolute inset-0">
                        <li class="px-5 text-center text-gray-600 dark:text-gray-200 leading-relaxed">
                            1. Facing the problem is the first step.
                        </li>
                        <li class="px-5 text-center text-gray-600 dark:text-gray-200 leading-relaxed">
                            2. When small problems are fixed, there won't be major problems.
                        </li>
                        <li class="px-5 text-center text-gray-600 dark:text-gray-200 leading-relaxed">
                            3. When all small problems are fixed, there won't be any problems.
                        </li>
                        <li class="px-5 text-center text-gray-600 dark:text-gray-200 leading-relaxed">
                            4. If you don't solve the problem, the problem will solve you.
                        </li>
                        </ol>
                    </div>
                    <div class="-mt-3 h-3 text-right text-3xl leading-tight text-indigo-500">”</div>
                    <div class="relative h-8 mt-2">
                        <p class="text-md text-center font-bold text-indigo-700 dark:text-indigo-400 absolute inset-0" x-show="cn" x-transition:enter="transition ease-out duration-300 delay-150" x-transition:enter-start="opacity-0 transform translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform translate-y-2">
                            柯文哲</p>
                        <p class="text-md text-center font-bold text-indigo-700 dark:text-indigo-400 absolute inset-0" x-show="!cn" x-transition:enter="transition ease-out duration-300 delay-150" x-transition:enter-start="opacity-0 transform translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform translate-y-2">
                            Ko Wen-Je</p>
                    </div>
                    <p class="text-center text-xs text-gray-700 dark:text-gray-400">@KP_Taipei</p>
                </div>

                <div
                    class="rounded-lg bg-gray-50 px-6 py-10 text-gray-800 shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-1 dark:bg-gray-800 flex flex-col h-full"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="w-full text-center flex-grow flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-center mb-4">
                                <div class="flex items-center justify-center w-12 h-12 bg-green-100 dark:bg-green-900 rounded-full">
                                    <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="pb-4 text-center text-2xl font-semibold leading-tight text-black dark:text-white font-mono">$whoami</h3>
                            <p class="px-5 text-gray-600 dark:text-gray-200 leading-relaxed tracking-wide">
                                {{ __("I'm :age-year-old Malaysian that passionate about making software that simplify people's life.", ['age' => \Carbon\Carbon::parse('1999-05-03')->age]) }}
                            </p>
                        </div>
                        
                        @if ($rank >= 1)
                            <div class="mt-6 pt-4 border-t border-gray-200 dark:border-gray-600">
                                <div id="github-rank-skeleton" class="animate-pulse px-5 hidden">
                                    <div class="h-4 bg-gray-300 dark:bg-gray-600 rounded w-64"></div>
                                </div>
                                <a id="github-rank-content" class="px-5 text-sm text-gray-500 underline dark:text-gray-400 leading-relaxed tracking-wide hover:text-gray-700 dark:hover:text-gray-200 transition-colors"
                                   href="https://github.com/gayanvoice/top-github-users/blob/main/markdown/public_contributions/malaysia.md"
                                   aria-label="Link to Top Github User" rel="noreferrer">
                                    {{ __('No :rank in most active GitHub users in Malaysia', ['rank' => $rank]) }}
                                </a>
                            </div>
                        @endif
                    </div>
                </div>

                <div
                    class="rounded-lg bg-gray-50 px-6 py-10 text-gray-800 shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-1 dark:bg-gray-800 flex flex-col h-full"
                    data-aos="fade-left" data-aos-delay="200">
                    <div class="w-full flex-grow">
                        <div class="flex items-center justify-center mb-4">
                            <div class="flex items-center justify-center w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-full">
                                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="pb-6 text-center text-2xl font-semibold leading-tight text-black dark:text-white">{{ __('Get in touch') }}</h3>
                        <div class="space-y-4">
                            <!-- Email - Primary CTA -->
                            <a href="mailto:hi@chengkangzai.com" 
                               class="group flex items-center p-4 bg-blue-50 dark:bg-blue-900/20 rounded-lg border border-blue-200 dark:border-blue-800 hover:bg-blue-100 dark:hover:bg-blue-900/30 transition-all duration-200 hover:scale-[1.02]"
                               aria-label="Send me an email">
                                <div class="flex items-center justify-center w-10 h-10 bg-blue-100 dark:bg-blue-800 rounded-full mr-4 group-hover:bg-blue-200 dark:group-hover:bg-blue-700 transition-colors">
                                    <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <div class="text-sm font-medium text-blue-600 dark:text-blue-400">Email</div>
                                    <div class="text-base text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">hi@chengkangzai.com</div>
                                </div>
                                <svg class="w-4 h-4 text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                </svg>
                            </a>

                            <!-- Social Links -->
                            <div class="grid grid-cols-1 gap-3">
                                <!-- GitHub -->
                                <a href="https://www.github.com/chengkangzai" 
                                   target="_blank" rel="noreferrer"
                                   class="group flex items-center p-4 bg-gray-50 dark:bg-gray-800/50 rounded-lg border border-gray-200 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700/50 transition-all duration-200 hover:scale-[1.02]"
                                   aria-label="My GitHub Profile">
                                    <div class="flex items-center justify-center w-10 h-10 bg-gray-100 dark:bg-gray-700 rounded-full mr-4 group-hover:bg-gray-200 dark:group-hover:bg-gray-600 transition-colors">
                                        <svg class="w-5 h-5 text-gray-600 dark:text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <div class="text-sm font-medium text-gray-600 dark:text-gray-400">GitHub</div>
                                        <div class="text-base text-gray-900 dark:text-white group-hover:text-gray-700 dark:group-hover:text-gray-200 transition-colors">@chengkangzai</div>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600 dark:group-hover:text-gray-300 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                </a>

                                <!-- LinkedIn -->
                                <a href="https://www.linkedin.com/in/chingchengkang/" 
                                   target="_blank" rel="noreferrer"
                                   class="group flex items-center p-4 bg-gray-50 dark:bg-gray-800/50 rounded-lg border border-gray-200 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700/50 transition-all duration-200 hover:scale-[1.02]"
                                   aria-label="My LinkedIn Profile">
                                    <div class="flex items-center justify-center w-10 h-10 bg-blue-100 dark:bg-blue-900 rounded-full mr-4 group-hover:bg-blue-200 dark:group-hover:bg-blue-800 transition-colors">
                                        <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <div class="text-sm font-medium text-gray-600 dark:text-gray-400">LinkedIn</div>
                                        <div class="text-base text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">Ching Cheng Kang</div>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                </a>

                                <!-- Twitter -->
                                <a href="https://twitter.com/chengkangzai" 
                                   target="_blank" rel="noreferrer"
                                   class="group flex items-center p-4 bg-gray-50 dark:bg-gray-800/50 rounded-lg border border-gray-200 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700/50 transition-all duration-200 hover:scale-[1.02]"
                                   aria-label="My Twitter Account">
                                    <div class="flex items-center justify-center w-10 h-10 bg-sky-100 dark:bg-sky-900 rounded-full mr-4 group-hover:bg-sky-200 dark:group-hover:bg-sky-800 transition-colors">
                                        <svg class="w-5 h-5 text-sky-600 dark:text-sky-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <div class="text-sm font-medium text-gray-600 dark:text-gray-400">Twitter</div>
                                        <div class="text-base text-gray-900 dark:text-white group-hover:text-sky-600 dark:group-hover:text-sky-400 transition-colors">@chengkangzai</div>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 group-hover:text-sky-600 dark:group-hover:text-sky-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @if ($projects->isNotEmpty())
            <section class="mx-auto flex w-full flex-wrap py-16 md:py-24 dark:text-white md:mx-auto md:w-11/12" id="work">
                <div class="w-full">
                    <h2 class="mb-12 md:mb-16 text-center text-4xl md:text-5xl font-bold tracking-tight text-gray-900 dark:text-white"
                        data-aos="fade-up">
                        {{ __('These are some of my Work') }}</h2>
                </div>

                <div class="grid place-items-stretch gap-8 md:gap-12 pb-8 md:grid-cols-3">
                    @foreach ($projects as $project)
                        <div
                            class="flex flex-col gap-3 rounded-lg bg-gray-50 p-6 text-gray-800 shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-1 dark:bg-gray-800"
                            data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                            <a href="{{ $project->url ?? '#' }}" target="_blank" rel="noreferrer"
                               aria-label="Link to open {{ $project->name }}">
                                <img src="{{ $project->getFirstMediaUrl('thumbnail') ?? '#' }}" alt="{{ __('Image for the work') }}"
                                     loading="lazy" class="h-72 w-full rounded-lg object-cover">
                            </a>
                            <h3 class="title-font mb-3 text-2xl font-semibold leading-tight dark:text-white">{{ $project->name }}</h3>
                            <p class="text-base leading-relaxed text-gray-600 dark:text-gray-200">{{ $project->description }}</p>
                            <div
                                class="my-4 flex w-full items-start space-x-2 text-center leading-none text-blue-700 dark:text-blue-400">
                                @if ($project->url)
                                    <a rel="noopener" target="_blank" href="{{ $project->url }}"
                                       aria-label="Link to open {{ $project->name }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                             viewBox="0 0 24 24" class="fill-current dark:text-blue-400">
                                            <path
                                                d="M16.36,14C16.44,13.34 16.5,12.68 16.5,12C16.5,11.32 16.44,10.66 16.36,10H19.74C19.9,10.64 20,11.31 20,12C20,12.69 19.9,13.36 19.74,14M14.59,19.56C15.19,18.45 15.65,17.25 15.97,16H18.92C17.96,17.65 16.43,18.93 14.59,19.56M14.34,14H9.66C9.56,13.34 9.5,12.68 9.5,12C9.5,11.32 9.56,10.65 9.66,10H14.34C14.43,10.65 14.5,11.32 14.5,12C14.5,12.68 14.43,13.34 14.34,14M12,19.96C11.17,18.76 10.5,17.43 10.09,16H13.91C13.5,17.43 12.83,18.76 12,19.96M8,8H5.08C6.03,6.34 7.57,5.06 9.4,4.44C8.8,5.55 8.35,6.75 8,8M5.08,16H8C8.35,17.25 8.8,18.45 9.4,19.56C7.57,18.93 6.03,17.65 5.08,16M4.26,14C4.1,13.36 4,12.69 4,12C4,11.31 4.1,10.64 4.26,10H7.64C7.56,10.66 7.5,11.32 7.5,12C7.5,12.68 7.56,13.34 7.64,14M12,4.03C12.83,5.23 13.5,6.57 13.91,8H10.09C10.5,6.57 11.17,5.23 12,4.03M18.92,8H15.97C15.65,6.75 15.19,5.55 14.59,4.44C16.43,5.07 17.96,6.34 18.92,8M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z">
                                            </path>
                                        </svg>
                                    </a>
                                @endif
                                @if ($project->github_url)
                                    <a href="{{ $project->github_url }}" rel="noopener" target="_blank"
                                       aria-label="Link to open Project Repository">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                             viewBox="0 0 24 24" class="fill-current dark:text-white">
                                            <path
                                                d="M12,2A10,10 0 0,0 2,12C2,16.42 4.87,20.17 8.84,21.5C9.34,21.58 9.5,21.27 9.5,21C9.5,20.77 9.5,20.14 9.5,19.31C6.73,19.91 6.14,17.97 6.14,17.97C5.68,16.81 5.03,16.5 5.03,16.5C4.12,15.88 5.1,15.9 5.1,15.9C6.1,15.97 6.63,16.93 6.63,16.93C7.5,18.45 8.97,18 9.54,17.76C9.63,17.11 9.89,16.67 10.17,16.42C7.95,16.17 5.62,15.31 5.62,11.5C5.62,10.39 6,9.5 6.65,8.79C6.55,8.54 6.2,7.5 6.75,6.15C6.75,6.15 7.59,5.88 9.5,7.17C10.29,6.95 11.15,6.84 12,6.84C12.85,6.84 13.71,6.95 14.5,7.17C16.41,5.88 17.25,6.15 17.25,6.15C17.8,7.5 17.45,8.54 17.35,8.79C18,9.5 18.38,10.39 18.38,11.5C18.38,15.32 16.04,16.16 13.81,16.41C14.17,16.72 14.5,17.33 14.5,18.26C14.5,19.6 14.5,20.68 14.5,21C14.5,21.27 14.66,21.59 15.17,21.5C19.14,20.16 22,16.42 22,12A10,10 0 0,0 12,2Z">
                                            </path>
                                        </svg>
                                    </a>
                                @endif
                            </div>
                            @if ($project->tags->count() !== 0)
                                <div class="my-4 flex w-full items-start text-center leading-none dark:text-white">
                                    <span class="inline">
                                        {{ __('Build with') }}
                                        {{ $project->tags->map->name->join(', ') }}
                                    </span>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </section>
        @endif

        <section class="hidden md:block py-16 md:py-24" id="experience">
            <div id="roadmap" class="container mx-auto flex-wrap rounded-lg bg-gray-50 dark:bg-gray-800">
                <h2 class="mb-12 md:mb-16 py-12 text-center text-4xl md:text-5xl font-bold tracking-tight text-gray-900 dark:text-white"
                    data-aos="fade-up">
                    {{ __('My Experiences') }}
                </h2>
                <hr>
                <div class="wrap relative h-full overflow-hidden p-10">
                    <div class="border-2-2 absolute h-full border border-gray-700 border-opacity-20 dark:border-white"
                         style="left: 50%"></div>
                    <div class="right-timeline mb-8 flex w-full items-center justify-between"
                         data-aos="fade-left" data-aos-delay="200">
                        <div class="order-1 w-5/12"></div>
                        <div
                            class="z-20 order-1 flex h-8 w-8 items-center rounded-full bg-gray-600 shadow-xl transition duration-300 hover:scale-125 dark:bg-gray-100">
                            <p class="mx-auto text-lg font-semibold text-white dark:text-black">1</p>
                        </div>
                        <div
                            class="order-1 w-5/12 rounded-lg bg-blue-700 px-6 py-4 shadow-xl transition duration-300 hover:scale-110">
                            <h3 class="mb-3 text-xl font-bold text-white">
                                {{ __('Persuade Study in') }}
                                <a class="underline" rel="noreferrer" target="_blank" href="https://www.apu.edu.my/">
                                    {{ __('Asia Pacific University') }}
                                </a>
                            </h3>
                            <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">
                                {{ __('Major :') }}
                                <a href="https://www.apu.edu.my/our-courses/pre-university-studies/diploma-programmes/diploma-information-communication-technology"
                                   class="underline" rel="noreferrer" target="_blank">
                                    {{ __('Diploma in Information Technology with a specialism in Software Engineering') }}
                                </a>
                            </p>
                            <p class="pt-2 text-sm leading-snug tracking-wide text-white">
                                {{ Carbon\Carbon::parse('2018-05-01')->translatedFormat('F Y') }}
                            </p>

                        </div>
                    </div>

                    <div class="left-timeline mb-8 flex w-full flex-row-reverse items-center justify-between"
                         data-aos="fade-right" data-aos-delay="200">
                        <div class="order-1 w-5/12"></div>
                        <div
                            class="z-20 order-1 flex h-8 w-8 items-center rounded-full bg-gray-800 shadow-xl transition duration-300 hover:scale-125 dark:bg-gray-100">
                            <p class="mx-auto text-lg font-semibold text-white dark:text-black">2</p>
                        </div>
                        <div
                            class="order-1 w-5/12 rounded-lg bg-indigo-600 px-6 py-4 shadow-xl transition duration-300 hover:scale-110">
                            <h3 class="mb-3 text-xl font-bold text-white">{{ __('Technical Assistant in APU') }}</h3>
                            <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">
                                -
                                {{ __('Setting up and maintaining equipment and technology in classrooms, labs, and other facilities') }}
                            </p>
                            <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">
                                -
                                {{ __('Troubleshooting technical problems and providing technical support to faculty, students, and staff') }}
                            </p>
                            <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">
                                - {{ __('Managing and maintaining the university\'s computer and network systems') }}
                            </p>
                            <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">
                                -
                                {{ __('Coordinating and scheduling maintenance and repairs of equipment and technology') }}
                            </p>
                            <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">
                                - {{ __('Maintaining inventory and ordering supplies as needed') }}
                            </p>
                            <p class="pt-2 text-sm leading-snug tracking-wide text-white">
                                {{ Carbon\Carbon::parse('2018-12-01')->translatedFormat('F Y') }} -
                                {{ Carbon\Carbon::parse('2021-11-01')->translatedFormat('F Y') }}
                            </p>
                        </div>
                    </div>

                    <div class="right-timeline mb-8 flex w-full items-center justify-between"
                         data-aos="fade-left" data-aos-delay="200">
                        <div class="order-1 w-5/12"></div>
                        <div
                            class="z-20 order-1 flex h-8 w-8 items-center rounded-full bg-gray-800 shadow-xl transition duration-300 hover:scale-125 dark:bg-gray-100">
                            <p class="mx-auto text-lg font-semibold text-white dark:text-black">3</p>
                        </div>
                        <div
                            class="order-1 w-5/12 rounded-lg bg-blue-600 px-6 py-4 shadow-xl transition duration-300 hover:scale-110">
                            <h3 class="mb-3 text-xl font-bold text-white">
                                {{ __('Technical Assistant') }}, {{ __('Head of Accommodation Team in APU') }}
                            </h3>
                            <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">
                                -
                                {{ __('Led a team of technical assistants to provide support services to the university\'s accommodation unit.') }}
                            </p>
                            <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">
                                - {{ __('Work together with ISP\'s technician regarding network issue') }}
                            </p>
                            <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">
                                - {{ __('Ensure the network accessibility within the university campus') }}
                            </p>
                            <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">
                                -
                                {{ __('Maintain, manage, and monitor technical facilities and infrastructure within the campus') }}
                            </p>
                        </div>
                    </div>

                    <div class="left-timeline mb-8 flex w-full flex-row-reverse items-center justify-between"
                         data-aos="fade-right" data-aos-delay="200">
                        <div class="order-1 w-5/12"></div>
                        <div
                            class="z-20 order-1 flex h-8 w-8 items-center rounded-full bg-gray-800 shadow-xl transition duration-300 hover:scale-125 dark:bg-gray-100">
                            <p class="mx-auto text-lg font-semibold text-white dark:text-black">4</p>
                        </div>
                        <div
                            class="order-1 w-5/12 rounded-lg bg-indigo-600 px-6 py-4 shadow-xl transition duration-300 hover:scale-110">
                            <h3 class="mb-3 text-xl font-bold text-white">{{ __('Intern as Junior Web Developer in') }}
                                <a href="https://strateqgroup.com/prs/" class="underline" rel="noreferrer"
                                   target="_blank">
                                    Strateq Group (PRS)
                                </a>
                            </h3>
                            <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">
                                - {{ __('Successfully fixed the migration file for the company\'s internal application') }}
                            </p>
                            <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">
                                - {{ __('Improved the speed and efficiency of the bootstrap seeder using Laravel') }}
                            </p>
                            <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">
                                -
                                {{ __('Troubleshooted and resolved multiple frontend issues within the in-house application') }}
                                (<a href="https://strateqgroup.com/smart-managed-services/" class="underline"
                                    rel="noreferrer" target="_blank">{{ __('SMART SD') }}</a>.)
                            </p>
                            <p class="pt-2 text-sm leading-snug tracking-wide text-white">
                                {{ Carbon\Carbon::parse('2018-04-01')->translatedFormat('F Y') }} -
                                {{ Carbon\Carbon::parse('2018-07-01')->translatedFormat('F Y') }}
                            </p>
                        </div>
                    </div>

                    <div class="right-timeline mb-8 flex w-full items-center justify-between"
                         data-aos="fade-left" data-aos-delay="200">
                        <div class="order-1 w-5/12"></div>
                        <div
                            class="z-20 order-1 flex h-8 w-8 items-center rounded-full bg-gray-800 shadow-xl transition duration-300 hover:scale-125 dark:bg-gray-100">
                            <p class="mx-auto text-lg font-semibold text-white dark:text-black">5</p>
                        </div>
                        <div
                            class="order-1 w-5/12 rounded-lg bg-blue-600 px-6 py-4 shadow-xl transition duration-300 hover:scale-110">
                            <h3 class="mb-3 text-xl font-bold text-white">{{ __('Graduated from') }}
                                <a class="underline" rel="noreferrer" target="_blank" href="https://www.apu.edu.my/">
                                    {{ __('Asia Pacific University') }}</a>
                            </h3>
                            <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">
                                {{ __('Graduated from') }}
                                <a href="https://www.apu.edu.my/our-courses/pre-university-studies/diploma-programmes/diploma-information-communication-technology"
                                   class="underline" rel="noreferrer" target="_blank">
                                    {{ __('Diploma in Information Technology with a specialism in Software Engineering') }}
                                </a>
                                <span>{{ __('with CGPA of', ['cgpa' => '3.47']) }}</span>
                            </p>
                            <small class="text-xs text-gray-100 line-through">
                                {{ __('Only if i can round off to 4.0') }}
                            </small>
                            <p class="pt-2 text-sm leading-snug tracking-wide text-white">
                                {{ Carbon\Carbon::parse('2020-09-01')->translatedFormat('F Y') }}
                            </p>
                        </div>

                    </div>

                    <div class="left-timeline mb-8 flex w-full flex-row-reverse items-center justify-between"
                         data-aos="fade-right" data-aos-delay="200">
                        <div class="order-1 w-5/12"></div>
                        <div
                            class="z-20 order-1 flex h-8 w-8 items-center rounded-full bg-gray-800 shadow-xl transition duration-300 hover:scale-125 dark:bg-gray-100">
                            <p class="mx-auto text-lg font-semibold text-white dark:text-black">6</p>
                        </div>
                        <div
                            class="order-1 w-5/12 rounded-lg bg-indigo-600 px-6 py-4 shadow-xl transition duration-300 hover:scale-110">
                            <h3 class="mb-3 text-xl font-bold text-white">{{ __('Continue to persuade study in') }}
                                <a class="underline" rel="noreferrer" target="_blank" href="https://www.apu.edu.my/">
                                    {{ __('Asia Pacific University') }}
                                </a>
                            </h3>
                            <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">
                                {{ __('Major :') }}
                                <a href="https://www.apu.edu.my/our-courses/undergraduate-studies/school-computing-technology/bsc-hons-software-engineering"
                                   class="underline" rel="noreferrer" target="_blank">
                                    {{ __('BSc (Hons) in Software Engineering') }} </a>
                            </p>
                            <p class="pt-2 text-sm leading-snug tracking-wide text-white">
                                {{ Carbon\Carbon::parse('2020-09-01')->translatedFormat('F Y') }}
                            </p>
                        </div>
                    </div>

                    <div class="right-timeline mb-8 flex w-full items-center justify-between"
                         data-aos="fade-left" data-aos-delay="200">
                        <div class="order-1 w-5/12"></div>
                        <div
                            class="z-20 order-1 flex h-8 w-8 items-center rounded-full bg-gray-800 shadow-xl transition duration-300 hover:scale-125 dark:bg-gray-100">
                            <p class="mx-auto text-lg font-semibold text-white dark:text-black">7</p>
                        </div>
                        <div
                            class="order-1 w-5/12 rounded-lg bg-blue-600 px-6 py-4 shadow-xl transition duration-300 hover:scale-110">
                            <h3 class="mb-3 text-xl font-bold text-white">{{ __('Internship at') }}
                                <a class="underline" href="https://www.mysoftinn.com/" rel="noreferrer" target="_blank">
                                    Softinn Solutions
                                </a>
                            </h3>
                            <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">
                                {{ __('As a intern, I was responsible for the development of the in house Custom Content Management(CMS) System and various Hotel Website of the company with the use of .NET and .NET Core technology.') }}
                            </p>
                            <p class="pt-2 text-sm leading-snug tracking-wide text-white">
                                {{ \Carbon\Carbon::parse('2021-07-01')->translatedFormat('F Y') }} -
                                {{ \Carbon\Carbon::parse('2021-11-01')->translatedFormat('F Y') }}
                            </p>
                        </div>


                    </div>
                    <div class="left-timeline mb-8 flex w-full flex-row-reverse items-center justify-between"
                         data-aos="fade-right" data-aos-delay="200">
                        <div class="order-1 w-5/12"></div>
                        <div
                            class="z-20 order-1 flex h-8 w-8 items-center rounded-full bg-gray-800 shadow-xl transition duration-300 hover:scale-125 dark:bg-gray-100">
                            <p class="mx-auto text-lg font-semibold text-white dark:text-black">8</p>
                        </div>
                        <div
                            class="order-1 w-5/12 rounded-lg bg-blue-600 px-6 py-4 shadow-xl transition duration-300 hover:scale-110">
                            <h3 class="mb-3 text-xl font-bold text-white">{{ __('Graduated from') }}
                                <a class="underline" rel="noreferrer" target="_blank" href="https://www.apu.edu.my/">
                                    {{ __('Asia Pacific University') }}
                                </a>
                            </h3>
                            <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">
                                {{ __('Major :') }}
                                <a href="https://www.apu.edu.my/our-courses/pre-university-studies/diploma-programmes/diploma-information-communication-technology"
                                   class="underline" rel="noreferrer" target="_blank">
                                    {{ __('BSc (Hons) in Software Engineering') }}
                                </a>
                                {{ __('with CGPA of', ['cgpa' => '3.56']) }}
                            </p>
                            <p class="pt-2 text-sm leading-snug tracking-wide text-white">
                                {{ Carbon\Carbon::parse('2022-10-01')->translatedFormat('F Y') }}
                            </p>
                        </div>

                    </div>

                    <div class="mb-8 flex w-full items-center justify-between"
                         data-aos="fade-left" data-aos-delay="200">
                        <div class="order-1 w-5/12"></div>
                        <div
                            class="z-20 order-1 flex h-8 w-8 items-center rounded-full bg-gray-800 shadow-xl transition duration-300 hover:scale-125 dark:bg-gray-100">
                            <p class="mx-auto text-lg font-semibold text-white dark:text-black">9</p>
                        </div>
                        <div
                            class="order-1 w-5/12 rounded-lg bg-blue-600 px-6 py-4 shadow-xl transition duration-300 hover:scale-110">
                            <h3 class="mb-3 text-xl font-bold text-white">
                                {{ __('Chief Technology Officer at') }}
                                <a class="underline" rel="noreferrer" target="_blank" href="https://pixalink.io/">
                                    {{ __('Pixalink') }}
                                </a>
                            </h3>
                            <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">
                                - {{ __('Responsible for the overall technology strategy and execution.') }}
                            </p>
                            <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">
                                - {{ __('Driving innovation and staying ahead of technological trends in the company.') }}
                            </p>
                            <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">
                                -
                                {{ __('Working closely with the CEO and other senior executives to identify and implement new technologies that give the company a competitive edge.') }}
                            </p>
                            <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">
                                -
                                {{ __('Involved in fundraising and building partnerships with other companies or organizations.') }}
                            </p>
                            <p class="pt-2 text-sm leading-snug tracking-wide text-white">
                                {{ Carbon\Carbon::parse('2022-10-01')->translatedFormat('F Y') }}
                                - {{ __('Present') }}
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('script')
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800, // Animation duration
            easing: 'ease-in-out', // Easing function
            once: true, // Whether animation should happen only once
            offset: 50, // Offset from the original trigger point
            delay: 0, // Delay before animation starts
            anchorPlacement: 'top-bottom', // Anchor placement
            disable: function() {
                // Disable AOS on mobile if animations cause performance issues
                var maxWidth = 768;
                return window.innerWidth < maxWidth && 'mobile' || false;
            }
        });
    </script>
    <script>
        const string = [
            '{{ __('Laravel Developer') }}',
            @if ($rank >= 1)
                '{{ __('No :rank in most active GitHub users in Malaysia', ['rank' => $rank]) }}',
            @endif
                '{{ __('Fullstack Developer') }}',
            '{{ __('Web Developer') }}',
            '{{ __('Firebase Developer') }}',
            '{{ __('Self-learner') }}'
        ];
        // Show skeleton initially, hide after typed.js starts
        const typedSkeleton = document.getElementById('typed-skeleton');
        const typedElement = document.getElementById('typed');
        
        // Hide skeleton and show typed content when ready
        setTimeout(() => {
            if (typedSkeleton) typedSkeleton.style.display = 'none';
            if (typedElement) typedElement.classList.remove('hidden');
        }, 1500);

        new Typed('#typed', {
            strings: string,
            typeSpeed: 40,
            backSpeed: 60,
            loop: true,
            showCursor: false,
            repeat: true,
            backDelay: 1000,
            startDelay: 1500,
        });
    </script>
@endpush

@section('footer')
    @include('layouts.footer')
@endsection
