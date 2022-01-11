<footer class="bg-white dark:bg-gray-900 w-full pb-6 md:pt-6 px-4 border-t-2 mx-auto ">
    <div class="hidden sm:flex items-center justify-between md:flex py-6 text-center ">
        <div class="text-left space-y-4 sm:px-8">
            <div>
                <p class="text-violet-600 dark:text-violet-400 text-xl font-black">{{__('Navigation')}}</p>
                <a href="{{route('public.posts.index')}}"
                   class="text-blue-600 block dark:text-blue-400 underline">{{__('Blog')}}</a>
                <a href="{{route('public.pandemic.index')}}"
                   class="text-blue-600 block dark:text-blue-400 underline">{{__('Covid Dashboard')}}</a>
            </div>
        </div>
        <p class="text-blue-600 dark:text-blue-400 px-6">{{__('All rights reserved')}} © <br> {{__('Built with')}}
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 inline" viewBox="0 0 20 20"
                 fill="currentColor">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"/>
            </svg>
            {{__('By Ching Cheng Kang')}}
        </p>
        <div class="flex items-center px-6">
            <a href="mailto:hi@chengkangzai.com" rel="noreferrer" target="_blank" aria-label="Email to me">
                <svg fill="none" class="h-6 w-6 text-blue-600 mr-6" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </a>
            <a href="https://www.linkedin.com/in/chingchengkang/" rel="noreferrer" target="_blank"
               aria-label="My Linkedin Profile">
                <svg class="h-6 w-6 fill-current text-blue-600 mr-6" viewBox="0 0 512 512">
                    <path
                        d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z"/>
                </svg>
            </a>
            <a href="https://www.twitter.com/chengkangzai" rel="noreferrer" target="_blank"
               aria-label="My Twitter Profile">
                <svg class="h-6 w-6 fill-current text-blue-600 mr-6" viewBox="0 0 512 512">
                    <path
                        d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z"/>
                </svg>
            </a>
            <a href="https://www.github.com/chengkangzai/" rel="noreferrer" target="_blank"
               aria-label="My Github Account">
                <svg class="h-6 w-6 fill-current text-blue-600 mr-6" viewBox="0 0 512 512">
                    <path xmlns="http://www.w3.org/2000/svg"
                          d="M256 32C132.3 32 32 134.9 32 261.7c0 101.5 64.2 187.5 153.2 217.9a17.56 17.56 0 003.8.4c8.3 0 11.5-6.1 11.5-11.4 0-5.5-.2-19.9-.3-39.1a102.4 102.4 0 01-22.6 2.7c-43.1 0-52.9-33.5-52.9-33.5-10.2-26.5-24.9-33.6-24.9-33.6-19.5-13.7-.1-14.1 1.4-14.1h.1c22.5 2 34.3 23.8 34.3 23.8 11.2 19.6 26.2 25.1 39.6 25.1a63 63 0 0025.6-6c2-14.8 7.8-24.9 14.2-30.7-49.7-5.8-102-25.5-102-113.5 0-25.1 8.7-45.6 23-61.6-2.3-5.8-10-29.2 2.2-60.8a18.64 18.64 0 015-.5c8.1 0 26.4 3.1 56.6 24.1a208.21 208.21 0 01112.2 0c30.2-21 48.5-24.1 56.6-24.1a18.64 18.64 0 015 .5c12.2 31.6 4.5 55 2.2 60.8 14.3 16.1 23 36.6 23 61.6 0 88.2-52.4 107.6-102.3 113.3 8 7.1 15.2 21.1 15.2 42.5 0 30.7-.3 55.5-.3 63 0 5.4 3.1 11.5 11.4 11.5a19.35 19.35 0 004-.4C415.9 449.2 480 363.1 480 261.7 480 134.9 379.7 32 256 32z"/>
                </svg>
            </a>
        </div>
    </div>
    <div class="block sm:hidden items-center text-center">
        <div class="text-center space-y-4 my-2">
            <div>
                <p class="text-violet-600 dark:text-violet-400 text-xl font-black">{{__('Navigation')}}</p>
                <a href="{{route('public.posts.index')}}"
                   class="text-blue-600 block dark:text-blue-400 underline">{{__('Blog')}}</a>
                <a href="{{route('public.pandemic.index')}}"
                   class="text-blue-600 block dark:text-blue-400 underline">{{__('Covid Dashboard')}}</a>
            </div>
        </div>
        <hr>
        <p class="text-blue-600 dark:text-blue-400 px-2 pt-6">{{__('All rights reserved')}}</p>
        <p class="text-blue-600 dark:text-blue-400 px-2 pt-6">{{__('Built with')}}
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 inline" viewBox="0 0 20 20"
                 fill="currentColor">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"/>
            </svg>
            {{__('By Ching Cheng Kang')}}
        </p>
    </div>
</footer>
