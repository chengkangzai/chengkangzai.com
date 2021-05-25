@section('style')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
@endsection
@extends('layouts.app')

@section('content')
    <div class=" md:w-11/12 mx-auto pt-8 ">
        <div class="dark:text-white my-5 pb-6 border-b-2">
            <h1 class="text-4xl inline pr-5">{{config('app.name')}}</h1> ||
            <p class="inline pl-5">Just Random Sharing Blog for tech</p>
        </div>

        <div class="flex flex-wrap w-full mx-auto pb-8">
            <div class="md:w-1/3 sm:w-full bg-white dark:bg-black flex items-center justify-center px-5 py-8 ">
                <div
                    class="w-full mx-auto rounded-lg bg-gray-50 dark:bg-gray-800 shadow-lg px-5 pt-5 my5 pb-10 text-gray-800"
                    x-data="{ cn: true }">
                    <div class="w-full mb-10 ">
                        <div>
                            <p class="text-right text-black dark:text-white text-xl" role="button"
                               title="Click me to translate">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 right-0" fill="none"
                                     viewBox="0 0 24 24" @click="cn = !cn"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/>
                                </svg>
                            </p>
                            <p class="text-2xl text-black text-center pb-3 dark:text-white ">What that I believe in</p>
                        </div>
                        <div class="text-3xl text-indigo-500 text-left leading-tight h-3">“</div>
                        <ol x-show="cn">
                            <li class="text-white text-gray-600 dark:text-gray-200 text-center px-5">1. 面对问题是解决问题的第一步。
                            </li>
                            <li class="text-white text-gray-600 dark:text-gray-200 text-center px-5">2.
                                把小问题解决了，就没有大问题。
                            </li>
                            <li class="text-white text-gray-600 dark:text-gray-200 text-center px-5">3.
                                把所有的小问题都解决了，就根本没有问题。
                            </li>
                            <li class="text-white text-gray-600 dark:text-gray-200 text-center px-5">4. 你不解决问题，问题会解决你。
                            </li>
                        </ol>
                        <ol x-show="!cn" style="display: none">
                            <li class="text-white text-gray-600 dark:text-gray-200 text-center px-5">1. Facing the
                                problem
                                is the first matter of the business.
                            </li>
                            <li class="text-white text-gray-600 dark:text-gray-200 text-center px-5">2. When small
                                problem
                                is fixed, there will not have major problem.
                            </li>
                            <li class="text-white text-gray-600 dark:text-gray-200 text-center px-5">3. When all small
                                problem are fixed, there will not have any problem.
                            </li>
                            <li class="text-white text-gray-600 dark:text-gray-200 text-center px-5">4. If you dont
                                settle
                                the problem, the problem will try to settle you.
                            </li>
                        </ol>
                        <p class="text-sm text-gray-600 text-center px-5">

                        </p>
                        <div class="text-3xl text-indigo-500 text-right leading-tight h-3 -mt-3">”</div>
                    </div>
                    <div class="w-full">
                        <p class="text-md text-indigo-500 font-bold text-center" x-show="cn">柯文哲</p>
                        <p class="text-md text-indigo-500 font-bold text-center" x-show="!cn" style="display: none">Ko Wen-Je</p>
                        <p class="text-xs text-gray-500 text-center">@KP_Taipei</p>
                    </div>
                </div>
            </div>

            <div class="md:w-1/3 sm:w-full bg-white dark:bg-black flex items-center justify-center px-5 py-8">
                <div
                    class="w-full mx-auto rounded-lg bg-gray-50 dark:bg-gray-800 shadow-lg text-gray-800 py-11">
                    <div class="w-full mb-10 ">
                        <p class="text-2xl text-black text-center pb-3 dark:text-white ">$whoami</p>
                        <p class="text-white text-gray-600 dark:text-gray-200 px-5">
                            I'm {{\Carbon\Carbon::parse("1999-05-03")->age}}-year-old Malaysian that passionate about
                            making software that simplify people's life.
                        </p>
                        <br>
                        <p class="text-white text-gray-600 dark:text-gray-200 px-5">
                            My knowledge in this field are currently self-experience, so they might look very basic and
                            simple in the meantime.
                        </p>
                    </div>

                </div>
            </div>

            <div class="md:w-1/3 sm:w-full bg-white dark:bg-black flex items-center justify-center px-5 py-8">
                <div
                    class="w-full mx-auto rounded-lg bg-gray-50 dark:bg-gray-800 shadow-lg text-gray-800 py-16">
                    <div class="w-full mb-10 ">
                        <p class="text-2xl text-black text-center pb-3 dark:text-white ">Get in touch</p>
                        <p class="text-white text-gray-600 dark:text-gray-200 px-5">
                            <svg class="h-6 w-6 fill-current text-blue-600 inline" viewBox="0 0 512 512">
                                <path xmlns="http://www.w3.org/2000/svg"
                                      d="M256 32C132.3 32 32 134.9 32 261.7c0 101.5 64.2 187.5 153.2 217.9a17.56 17.56 0 003.8.4c8.3 0 11.5-6.1 11.5-11.4 0-5.5-.2-19.9-.3-39.1a102.4 102.4 0 01-22.6 2.7c-43.1 0-52.9-33.5-52.9-33.5-10.2-26.5-24.9-33.6-24.9-33.6-19.5-13.7-.1-14.1 1.4-14.1h.1c22.5 2 34.3 23.8 34.3 23.8 11.2 19.6 26.2 25.1 39.6 25.1a63 63 0 0025.6-6c2-14.8 7.8-24.9 14.2-30.7-49.7-5.8-102-25.5-102-113.5 0-25.1 8.7-45.6 23-61.6-2.3-5.8-10-29.2 2.2-60.8a18.64 18.64 0 015-.5c8.1 0 26.4 3.1 56.6 24.1a208.21 208.21 0 01112.2 0c30.2-21 48.5-24.1 56.6-24.1a18.64 18.64 0 015 .5c12.2 31.6 4.5 55 2.2 60.8 14.3 16.1 23 36.6 23 61.6 0 88.2-52.4 107.6-102.3 113.3 8 7.1 15.2 21.1 15.2 42.5 0 30.7-.3 55.5-.3 63 0 5.4 3.1 11.5 11.4 11.5a19.35 19.35 0 004-.4C415.9 449.2 480 363.1 480 261.7 480 134.9 379.7 32 256 32z"/>
                            </svg>
                            Github :
                            <a class="underline"
                               href="https://www.github.com/chengkangzai">https://github.com/chengkangzai</a>
                        </p>
                        <p class="text-white text-gray-600 dark:text-gray-200 px-5">
                            <svg class="h-6 w-6 fill-current text-blue-600 inline" viewBox="0 0 512 512">
                                <path
                                    d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z"/>
                            </svg>
                            Linkedin :
                            <a class="underline"
                               href="https://www.linkedin.com/in/chingchengkang/">https://linkedin.com/in/chingchengkang/</a>
                        </p>
                        <p class="text-white text-gray-600 dark:text-gray-200 px-5">
                            <svg class="h-6 w-6 fill-current inline text-blue-600" viewBox="0 0 512 512">
                                <path
                                    d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z"/>
                            </svg>
                            Twitter :
                            <a class="underline"
                               href="https://twitter.com/chengkangzai">
                                https://twitter.com/chengkangzai</a>
                        </p>
                        <p class="text-white text-gray-600 dark:text-gray-200 px-5">
                            <svg fill="none" class="h-6 w-6 inline text-blue-600 " viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            Email :
                            <a class="underline"
                               href="mailto:hi@chengkangzai.com">hi@chengkangzai.com</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="container rounded-lg bg-gray-50 dark:bg-gray-800 mx-auto w-full h-full min-h-full flex-wrap ">
            <h1 class="text-black dark:text-white text-4xl text-center py-8">My Roadmap</h1>
            <hr>
            <div class="relative wrap overflow-hidden p-10 h-full">
                <div class="border-2-2 absolute border-opacity-20 border-gray-700 dark:border-white h-full border"
                     style="left: 50%"></div>
                <div class="mb-8 flex justify-between items-center w-full right-timeline">
                    <div class="order-1 w-5/12"></div>
                    <div
                        class="z-20 flex items-center order-1 bg-gray-800 dark:bg-gray-100 shadow-xl w-8 h-8 rounded-full transform hover:scale-125 transition duration-300">
                        <h1 class="mx-auto font-semibold text-lg text-white dark:text-black ">1</h1>
                    </div>
                    <div
                        class=" order-1 bg-blue-500 rounded-lg shadow-xl w-5/12 px-6 py-4 transform hover:scale-110 transition duration-300">
                        <h3 class="mb-3 font-bold text-white text-xl">
                            Persuade Study in
                            <a class="underline"
                               href="https://www.apu.edu.my/">
                                Asia Pacific University</a>
                        </h3>
                        <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">
                            Major :
                            <a href="https://www.apu.edu.my/our-courses/pre-university-studies/diploma-programmes/diploma-information-communication-technology"
                               class="underline">
                                Diploma in Information Technology with a specialism in Software Engineering</a>
                        </p>
                        <p class="text-sm leading-snug tracking-wide pt-2 text-white">
                            May 2018
                        </p>

                    </div>
                </div>

                <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                    <div class="order-1 w-5/12"></div>
                    <div
                        class="z-20 flex items-center order-1 bg-gray-800 dark:bg-gray-100 shadow-xl w-8 h-8 rounded-full transform hover:scale-125 transition duration-300">
                        <h1 class="mx-auto text-white font-semibold text-lg dark:text-black">2</h1>
                    </div>
                    <div
                        class="order-1 bg-indigo-500 rounded-lg shadow-xl w-5/12 px-6 py-4 transform hover:scale-110 transition duration-300">
                        <h3 class="mb-3 font-bold text-white text-xl">Technical Assistant in APU</h3>
                        <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">
                            As a Technical Assistant (a group of around 50 members), we managed to maintain the
                            excellent condition of 400+ PC, 100+ Projectors, and countless student and staff laptops and
                            solve some of the problems.
                        </p>
                        <p class="text-sm leading-snug tracking-wide pt-2 text-white">
                            December 2020 - Present
                        </p>
                    </div>
                </div>

                <div class="mb-8 flex justify-between items-center w-full right-timeline ">
                    <div class="order-1 w-5/12"></div>
                    <div
                        class="z-20 flex items-center order-1 bg-gray-800  dark:bg-gray-100 shadow-xl w-8 h-8 rounded-full transform hover:scale-125 transition duration-300">
                        <h1 class="mx-auto font-semibold text-lg text-white dark:text-black">3</h1>
                    </div>
                    <div
                        class="order-1 bg-blue-500 rounded-lg shadow-xl w-5/12 px-6 py-4 transform hover:scale-110 transition duration-300">
                        <h3 class="mb-3 font-bold text-white text-xl">Technical Assistant, Head of Accommodation Team in APU </h3>
                        <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">
                            - Led a team of technical assistants to provide support services to the university's accommodation unit.
                            <br>
                            - Work together with ISP's technician regarding network issue that requires their attention
                            <br>
                            - Ensure the network accessibility within the university campus
                            <br>
                            - Maintained, managed, and monitored technical facilities and infrastructure within the campus
                            <br>
                        </p>
                    </div>
                </div>

                <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                    <div class="order-1 w-5/12"></div>
                    <div
                        class="z-20 flex items-center order-1 bg-gray-800  dark:bg-gray-100 shadow-xl w-8 h-8 rounded-full transform hover:scale-125 transition duration-300">
                        <h1 class="mx-auto text-white font-semibold text-lg dark:text-black">4</h1>
                    </div>
                    <div
                        class="order-1 bg-indigo-500 rounded-lg shadow-xl w-5/12 px-6 py-4 transform hover:scale-110 transition duration-300">
                        <h3 class="mb-3 font-bold text-white text-xl">Intern as Junior Web Developer in
                            <a href="https://strateqgroup.com/prs/" class="underline">
                                Strateq Group (PRS)
                            </a>
                        </h3>
                        <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">
                            As an intern, I managed to fix the migration file and prepare the bootstrap seeder with the
                            most optimal speed and solve multiple frontend problems by using Laravel for the in-house
                            application
                            <a href="https://strateqgroup.com/smart-managed-services/" class="underline">SMART SD</a>.
                        </p>
                    </div>
                </div>

                <div class="mb-8 flex justify-between items-center w-full right-timeline ">
                    <div class="order-1 w-5/12"></div>
                    <div
                        class="z-20 flex items-center order-1 bg-gray-800  dark:bg-gray-100 shadow-xl w-8 h-8 rounded-full transform hover:scale-125 transition duration-300">
                        <h1 class="mx-auto font-semibold text-lg text-white dark:text-black">5</h1>
                    </div>
                    <div
                        class="order-1 bg-blue-500 rounded-lg shadow-xl w-5/12 px-6 py-4 transform hover:scale-110 transition duration-300">
                        <h3 class="mb-3 font-bold text-white text-xl">Graduated from
                            <a class="underline"
                               href="https://www.apu.edu.my/">
                                Asia Pacific University</a>
                        </h3>
                        <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">
                            Graduated from
                            <a href="https://www.apu.edu.my/our-courses/pre-university-studies/diploma-programmes/diploma-information-communication-technology"
                               class="underline">
                                Diploma in Information Technology with a specialism in Software Engineering
                            </a>
                            with CGPA of 3.47
                        </p>
                        <small class="text-xs line-through text-gray-400">Only if i can round off to 4.0</small>
                    </div>

                </div>

                <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                    <div class="order-1 w-5/12"></div>
                    <div
                        class="z-20 flex items-center order-1 bg-gray-800  dark:bg-gray-100 shadow-xl w-8 h-8 rounded-full transform hover:scale-125 transition duration-300">
                        <h1 class="mx-auto text-white font-semibold text-lg dark:text-black">6</h1>
                    </div>
                    <div
                        class="order-1 bg-indigo-500 rounded-lg shadow-xl w-5/12 px-6 py-4 transform hover:scale-110 transition duration-300">
                        <h3 class="mb-3 font-bold text-white text-xl">Continue to persuade study in
                            <a class="underline"
                               href="https://www.apu.edu.my/">
                                Asia Pacific University
                            </a>
                        </h3>
                        <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">
                            Major :
                            <a href="https://www.apu.edu.my/our-courses/undergraduate-studies/school-computing-technology/bsc-hons-software-engineering"
                               class="underline">
                                BSc (Hons) in Software Engineering</a>
                        </p>
                        <p class="text-sm leading-snug tracking-wide pt-2 text-white">
                            September 2020 - Present
                        </p>
                    </div>
                </div>

                <div class="mb-8 flex justify-between items-center w-full right-timeline ">
                    <div class="order-1 w-5/12"></div>
                    <div
                        class="z-20 flex items-center order-1 bg-gray-800  dark:bg-gray-100 shadow-xl w-8 h-8 rounded-full transform hover:scale-125 transition duration-300">
                        <h1 class="mx-auto font-semibold text-lg text-white dark:text-black">5</h1>
                    </div>
                    <div
                        class="order-1 bg-blue-500 rounded-lg shadow-xl w-5/12 px-6 py-4 transform hover:scale-110 transition duration-300">
                        <h3 class="mb-3 font-bold text-white text-xl">Internship at
                            <a class="underline" href="https://www.mysoftinn.com/">Softinn Solutions</a>
                        </h3>
                        <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">
                            To be explore
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="py-10"></div>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
