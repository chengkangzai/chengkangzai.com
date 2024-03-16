@extends('layouts.app')
@push('style')
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
    <div class="mx-auto md:w-11/12">
        <section class="text-gray-700">
            <div class="container mx-auto flex min-h-screen flex-col items-center px-5 md:flex-row lg:px-28">
                <div
                    class="flex min-h-screen w-full flex-col items-start py-16 text-left sm:min-h-full sm:py-8 lg:w-3/5 lg:flex-grow">
                    <h1 class="title-font mb-8 text-5xl font-bold tracking-tighter text-black lg:text-5xl dark:text-white">
                        {{ __('Hi, I am') }} <br> {{ __('Ching Cheng Kang') }} (CCK) <span class="wave">👋🏻</span>
                    </h1>
                    <div style="min-height: 40px">
                        <span id="typed"
                            class="inline-block text-left text-base leading-relaxed text-gray-500 dark:text-gray-200">
                            {{ __('Laravel Developer') }}
                        </span>
                    </div>
                    <p class="text-dark-600 mb-8 mt-2 w-full text-left text-sm dark:text-gray-400">
                        ⚡️ {{ __('Fun fact: I convert Coffee to Code') }} ☕️
                    </p>
                    <div class="flex flex-col justify-center space-y-2 lg:flex-row lg:space-x-2">
                        <a role="button" href="{{ asset('resume.pdf') }}"
                            class="focus:shadow-outline mt-auto flex items-center rounded-lg bg-black px-6 py-2 font-semibold text-white ring-black ring-offset-2 ring-offset-current transition duration-300 ease-in-out hover:bg-gray-800 hover:to-black focus:outline-none focus:ring-2 dark:bg-white dark:text-black dark:hover:bg-gray-200 dark:hover:to-white">
                            {{ __('SEE MY RESUME') }}
                        </a>

                        <a role="button" href="https://pandemic.chengkangzai.com"
                            class="focus:shadow-outline mt-auto flex items-center rounded-lg bg-black px-6 py-2 font-semibold text-white ring-black ring-offset-2 ring-offset-current transition duration-300 ease-in-out hover:bg-gray-800 hover:to-black focus:outline-none focus:ring-2 dark:bg-white dark:text-black dark:hover:bg-gray-200 dark:hover:to-white">
                            {{ __('Covid Dashboard') }}
                        </a>
                    </div>
                    <div
                        class="container mx-auto mt-28 flex w-full flex-col items-center text-center align-bottom sm:mt-8 sm:items-start">
                        <a href="#about-me" aria-label="Skip to about me ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 animate-bounce" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 lg:w-5/6 lg:max-w-lg">
                    <img class="mx-auto rounded-lg object-cover object-center lg:w-4/5" alt="hero"
                        src="{{ asset('src/bighead.jpeg') }}" width="409" height="341">
                </div>
            </div>

        </section>

        <section id="about-me" class="mx-2 md:mx-0">
            <a href="#about-me"
                class="mx-2 my-8 block w-full text-center text-3xl font-black text-black md:mb-6 md:text-2xl lg:text-3xl dark:text-white">
                {{ __('About me') }}
            </a>
            <div class="grid place-items-stretch gap-8 pb-8 md:grid-cols-3">
                <div class="rounded-lg bg-gray-50 px-5 py-8 text-gray-800 shadow-lg transition duration-300 hover:scale-110 dark:bg-gray-800"
                    x-data="{ cn: true }">
                    <p title="{{ __('Click me to translate') }}"
                        class="animate-bounce text-right text-xl text-black dark:text-white" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" @click="cn = !cn" viewBox="0 0 24 24"
                            stroke="currentColor" class="right-0 h-6 w-6 animate-bounce">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                        </svg>
                    </p>
                    <p class="pb-3 text-center text-2xl text-black dark:text-white">
                        {{ __('What I believe in') }}
                    </p>
                    <div class="h-3 text-left text-3xl leading-tight text-indigo-500">“</div>
                    <ul x-show="cn">
                        <li class="px-5 text-center text-gray-600 dark:text-gray-200">
                            1. 面对问题是解决问题的第一步。
                        </li>
                        <li class="px-5 text-center text-gray-600 dark:text-gray-200">
                            2. 把小问题解决了，就没有大问题。
                        </li>
                        <li class="px-5 text-center text-gray-600 dark:text-gray-200">
                            3. 把所有的小问题都解决了，就根本没有问题。
                        </li>
                        <li class="px-5 text-center text-gray-600 dark:text-gray-200">
                            4. 你不解决问题，问题会解决你。
                        </li>
                    </ul>
                    <ol x-show="!cn">
                        <li class="px-5 text-center text-gray-600 dark:text-gray-200">
                            1. Facing the problem is the first matter of the business.
                        </li>
                        <li class="px-5 text-center text-gray-600 dark:text-gray-200">
                            2. When small problem is fixed, there will not have major problem.
                        </li>
                        <li class="px-5 text-center text-gray-600 dark:text-gray-200">
                            3. When all small problem are fixed, there will not have any problem.
                        </li>
                        <li class="px-5 text-center text-gray-600 dark:text-gray-200">
                            4. If you don't settle the problem, the problem will try to settle you.
                        </li>
                    </ol>
                    <div class="-mt-3 h-3 text-right text-3xl leading-tight text-indigo-500">”</div>
                    <p class="text-md text-center font-bold text-indigo-700 dark:text-indigo-400" x-show="cn">
                        柯文哲</p>
                    <p class="text-md text-center font-bold text-indigo-700 dark:text-indigo-400" x-show="!cn">
                        Ko Wen-Je</p>
                    <p class="text-center text-xs text-gray-700 dark:text-gray-400">@KP_Taipei</p>
                </div>

                <div
                    class="rounded-lg bg-gray-50 px-5 py-8 text-gray-800 shadow-lg transition duration-300 hover:scale-110 dark:bg-gray-800">
                    <div class="w-full text-center">
                        <p class="pb-3 text-center text-2xl text-black dark:text-white">$whoami</p>
                        <p class="px-5 text-gray-600 dark:text-gray-200">
                            {{ __("I'm :age-year-old Malaysian that passionate about making software that simplify people's life.", ['age' => \Carbon\Carbon::parse('1999-05-03')->age]) }}
                        </p>
                        <br>
                        @if ($rank >= 1)
                            <a class="px-5 text-gray-600 underline dark:text-gray-200"
                                href="https://github.com/gayanvoice/top-github-users/blob/main/markdown/public_contributions/malaysia.md"
                                aria-label="Link to Top Github User" rel="noreferrer">
                                {{ __('No :rank in most active GitHub users in Malaysia', ['rank' => $rank]) }}
                            </a>
                        @endif
                    </div>
                </div>

                <div
                    class="rounded-lg bg-gray-50 px-5 py-8 text-gray-800 shadow-lg transition duration-300 hover:scale-110 dark:bg-gray-800">
                    <div class="mb-10 w-full">
                        <p class="pb-3 text-center text-2xl text-black dark:text-white">{{ __('Get in touch') }}</p>
                        <div class="space-x-4 space-y-2">
                            <p></p>
                            <p class="text-gray-600 dark:text-gray-200">
                                <svg class="inline fill-current text-blue-600" viewBox="0 0 512 512" width="35"
                                    height="35">
                                    <path xmlns="http://www.w3.org/2000/svg"
                                        d="M256 32C132.3 32 32 134.9 32 261.7c0 101.5 64.2 187.5 153.2 217.9a17.56 17.56 0 003.8.4c8.3 0 11.5-6.1 11.5-11.4 0-5.5-.2-19.9-.3-39.1a102.4 102.4 0 01-22.6 2.7c-43.1 0-52.9-33.5-52.9-33.5-10.2-26.5-24.9-33.6-24.9-33.6-19.5-13.7-.1-14.1 1.4-14.1h.1c22.5 2 34.3 23.8 34.3 23.8 11.2 19.6 26.2 25.1 39.6 25.1a63 63 0 0025.6-6c2-14.8 7.8-24.9 14.2-30.7-49.7-5.8-102-25.5-102-113.5 0-25.1 8.7-45.6 23-61.6-2.3-5.8-10-29.2 2.2-60.8a18.64 18.64 0 015-.5c8.1 0 26.4 3.1 56.6 24.1a208.21 208.21 0 01112.2 0c30.2-21 48.5-24.1 56.6-24.1a18.64 18.64 0 015 .5c12.2 31.6 4.5 55 2.2 60.8 14.3 16.1 23 36.6 23 61.6 0 88.2-52.4 107.6-102.3 113.3 8 7.1 15.2 21.1 15.2 42.5 0 30.7-.3 55.5-.3 63 0 5.4 3.1 11.5 11.4 11.5a19.35 19.35 0 004-.4C415.9 449.2 480 363.1 480 261.7 480 134.9 379.7 32 256 32z" />
                                </svg>
                                <a class="text-lg underline" rel="noreferrer" target="_blank" aria-label="My Github Profile"
                                    href="https://www.github.com/chengkangzai">@chengkangzai</a>
                            </p>
                            <p class="text-gray-600 dark:text-gray-200">
                                <svg class="inline fill-current text-blue-600" viewBox="0 0 512 512" width="35"
                                    height="35">
                                    <path
                                        d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z" />
                                </svg>
                                <a class="text-lg underline" rel="noreferrer" target="_blank"
                                    aria-label="My Linkedin Profile"
                                    href="https://www.linkedin.com/in/chingchengkang/">Ching Cheng Kang</a>
                            </p>
                            <p class="text-gray-600 dark:text-gray-200">
                                <svg class="inline fill-current text-blue-600" viewBox="0 0 512 512" width="35"
                                    height="35">
                                    <path
                                        d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z" />
                                </svg>
                                <a class="text-lg underline" rel="noreferrer" target="_blank"
                                    aria-label="My Twitter Account"
                                    href="https://twitter.com/chengkangzai">@chengkangzai</a>
                            </p>
                            <p class="text-gray-600 dark:text-gray-200">
                                <svg fill="none" class="inline text-blue-600" viewBox="0 0 24 24" width="35"
                                    height="35" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <a class="text-lg underline" rel="noreferrer" target="_blank" aria-label="Contact me !"
                                    href="mailto:hi@chengkangzai.com">hi@chengkangzai.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @if ($works->isNotEmpty())
            <section class="mx-auto flex w-full flex-wrap pb-20 dark:text-white" id="work">
                <div class="w-full">
                    <a href="#work"
                        class="mb-2 block text-center text-2xl font-black text-black md:text-2xl lg:text-3xl dark:text-white">
                        {{ __('These are some of my Work') }} :3 </a>
                </div>

                <div class="grid place-items-stretch gap-8 pb-8 md:grid-cols-3">
                    @foreach ($works as $work)
                        <div
                            class="flex flex-col gap-2 rounded-lg bg-gray-50 p-4 text-gray-800 shadow-lg transition duration-300 hover:scale-110 dark:bg-gray-800">
                            <a href="{{ $work->url ?? '#' }}" target="_blank" rel="noreferrer"
                                aria-label="Link to open {{ $work->name }}">
                                <img src="{{ $work->imgLink ?? '#' }}" alt="{{ __('Image for the work') }}"
                                    loading="lazy" class="h-72 w-full rounded-lg object-cover">
                            </a>
                            <h2 class="title-font mb-2 text-2xl font-bold dark:text-white">{{ $work->name }} </h2>
                            <p class="text-base leading-relaxed dark:text-white">{{ $work->description }}</p>
                            <div
                                class="my-4 flex w-full items-start space-x-2 text-center leading-none text-blue-700 dark:text-blue-400">
                                @if ($work->url)
                                    <a rel="noopener" target="_blank" href="{{ $work->url }}"
                                        aria-label="Link to open {{ $work->name }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                            viewBox="0 0 24 24" class="fill-current dark:text-blue-400">
                                            <path
                                                d="M16.36,14C16.44,13.34 16.5,12.68 16.5,12C16.5,11.32 16.44,10.66 16.36,10H19.74C19.9,10.64 20,11.31 20,12C20,12.69 19.9,13.36 19.74,14M14.59,19.56C15.19,18.45 15.65,17.25 15.97,16H18.92C17.96,17.65 16.43,18.93 14.59,19.56M14.34,14H9.66C9.56,13.34 9.5,12.68 9.5,12C9.5,11.32 9.56,10.65 9.66,10H14.34C14.43,10.65 14.5,11.32 14.5,12C14.5,12.68 14.43,13.34 14.34,14M12,19.96C11.17,18.76 10.5,17.43 10.09,16H13.91C13.5,17.43 12.83,18.76 12,19.96M8,8H5.08C6.03,6.34 7.57,5.06 9.4,4.44C8.8,5.55 8.35,6.75 8,8M5.08,16H8C8.35,17.25 8.8,18.45 9.4,19.56C7.57,18.93 6.03,17.65 5.08,16M4.26,14C4.1,13.36 4,12.69 4,12C4,11.31 4.1,10.64 4.26,10H7.64C7.56,10.66 7.5,11.32 7.5,12C7.5,12.68 7.56,13.34 7.64,14M12,4.03C12.83,5.23 13.5,6.57 13.91,8H10.09C10.5,6.57 11.17,5.23 12,4.03M18.92,8H15.97C15.65,6.75 15.19,5.55 14.59,4.44C16.43,5.07 17.96,6.34 18.92,8M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z">
                                            </path>
                                        </svg>
                                    </a>
                                @endif
                                @if ($work->github_url)
                                    <a href="{{ $work->github_url }}" rel="noopener" target="_blank"
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
                            @if ($work->tags->count() !== 0)
                                <div class="my-4 flex w-full items-start text-center leading-none dark:text-white">
                                    <span class="inline">
                                        {{ __('Build with') }}
                                        {{ $work->tags->map->name->join(', ') }}
                                    </span>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </section>
        @endif

        <section class="hidden md:block md:py-32" id="experience">
            <div id="roadmap" class="container mx-auto flex-wrap rounded-lg bg-gray-50 dark:bg-gray-800">
                <a href="#experience"
                    class="mb-2 block py-12 text-center text-2xl font-black text-black md:text-2xl lg:text-3xl dark:text-white">
                    {{ __('My Experiences') }}
                </a>
                <hr>
                <div class="wrap relative h-full overflow-hidden p-10">
                    <div class="border-2-2 absolute h-full border border-gray-700 border-opacity-20 dark:border-white"
                        style="left: 50%"></div>
                    <div class="right-timeline mb-8 flex w-full items-center justify-between">
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

                    <div class="left-timeline mb-8 flex w-full flex-row-reverse items-center justify-between">
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

                    <div class="right-timeline mb-8 flex w-full items-center justify-between">
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

                    <div class="left-timeline mb-8 flex w-full flex-row-reverse items-center justify-between">
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

                    <div class="right-timeline mb-8 flex w-full items-center justify-between">
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

                    <div class="left-timeline mb-8 flex w-full flex-row-reverse items-center justify-between">
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

                    <div class="right-timeline mb-8 flex w-full items-center justify-between">
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
                    <div class="left-timeline mb-8 flex w-full flex-row-reverse items-center justify-between">
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

                    <div class="mb-8 flex w-full items-center justify-between">
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
                                {{ __('Closely with the CEO and other senior executives to identify and implement new technologies that give the company a competitive edge.') }}
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
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        const string = [
            '{{ __('Laravel Developer') }}',
            @if ($rank >= 1)
                '{{ __('No x in most active GitHub users in Malaysia', ['rank' => $rank]) }}',
            @endif
            '{{ __('Fullstack Developer') }}',
            '{{ __('Web Developer') }}',
            '{{ __('Firebase Developer') }}',
            '{{ __('Self-learner') }}'
        ];
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
