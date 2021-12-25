<div class="h-screen bg-gray-50 dark:bg-gray-800 md:block hidden">
    <div class="flex items-center justify-center pt-20">
        <a class="text-gray-600 dark:text-gray-100 text-2xl" href="{{route('admin.home')}}">{{config('app.name')}}</a>
    </div>

    <nav class="mt-4 space-y-2">
        @canany(['post_access','work_access','comment_access','tag_access'])
            <div
                x-data="{ open: @if(request()->is('admin/posts*') || request()->is('admin/works*') || request()->is('admin/comment*') || request()->is('admin/tags*')) true @else false @endif}">
                <button @click="open = !open"
                        class="w-full flex justify-between items-center py-3 px-6 text-gray-600 dark:text-gray-100 cursor-pointer hover:bg-gray-100 hover:text-gray-700 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    <span class="mx-4 font-medium">{{__('Dashboard')}}</span>

                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                        <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>

                <div x-show="open">
                    <a class="py-2 px-14 block text-sm text-gray-600 dark:text-gray-100 hover:bg-blue-500 hover:text-white @if(request()->is('admin/posts*')) bg-blue-200 dark:bg-blue-700  @else bg-gray-100 dark:bg-gray-700 @endif"
                       href="{{route('admin.posts.index')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 inline" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                        {{__('Post')}}
                    </a>
                    <a class="py-2 px-14 block text-sm text-gray-600 dark:text-gray-100 hover:bg-blue-500 hover:text-white @if(request()->is('admin/works*')) bg-blue-200 dark:bg-blue-700  @else bg-gray-100 dark:bg-gray-700 @endif"
                       href="{{route('admin.works.index')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 inline" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        {{__('Work')}}
                    </a>
                    <a class="py-2 px-14 block text-sm text-gray-600 dark:text-gray-100 hover:bg-blue-500 hover:text-white @if(request()->is('admin/comment*')) bg-blue-200 dark:bg-blue-700  @else bg-gray-100 dark:bg-gray-700 @endif"
                       href="{{route('admin.comment.index')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 inline" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                        </svg>
                        {{__('Comments')}}
                    </a>
                    <a class="py-2 px-14 block text-sm text-gray-600 dark:text-gray-100 hover:bg-blue-500 hover:text-white @if(request()->is('admin/tags*')) bg-blue-200 dark:bg-blue-700  @else bg-gray-100 dark:bg-gray-700 @endif"
                       href="{{route('admin.tags.index')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 inline" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                        </svg>
                        {{__('Tags')}}
                    </a>
                </div>
            </div>
        @endcanany

        @canany(['schedule_access'])
            <div x-data="{ open: @if(request()->is('admin/scheduleConfig*')) true @else false @endif }">
                <button @click="open = !open"
                        class="w-full flex justify-between items-center py-3 px-6 text-gray-600 dark:text-gray-100 cursor-pointer hover:bg-gray-100 hover:text-gray-700 focus:outline-none">

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <span class="mx-4 font-medium">{{__('Schedule')}}</span>

                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                        <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>

                <div x-show="open">
                    <a class="py-2 px-14 block text-sm text-gray-600 dark:text-gray-100 hover:bg-blue-500 hover:text-white @if(request()->is('admin/scheduleConfig*')) bg-blue-200 dark:bg-blue-700 @else bg-gray-100 dark:bg-gray-700 @endif"
                       href="{{route('admin.scheduleConfig.index')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 inline" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        {{__('Setting')}}
                    </a>
                </div>
            </div>
        @endcanany

        @canany(['user_access','permission_access','role_access','user_management_access'])
            <div
                x-data="{ open: @if(request()->is('admin/users*') || request()->is('admin/role*') || request()->is('admin/permissions*')) true @else false @endif}">
                <button @click="open = !open"
                        class="w-full flex justify-between items-center py-3 px-6 text-gray-600 dark:text-gray-100 cursor-pointer hover:bg-gray-100 hover:text-gray-700 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                    </svg>
                    <span class="mx-4 font-medium">{{__('User Mngt')}}</span>

                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                        <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>

                <div x-show="open">
                    <a class="py-2 px-14 block text-sm text-gray-600 dark:text-gray-100 hover:bg-blue-500 hover:text-white @if(request()->is('admin/users*')) bg-blue-200 dark:bg-blue-700  @else bg-gray-100 dark:bg-gray-700 @endif"
                       href="{{route('admin.users.index')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 inline" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                        {{__('Users')}}
                    </a>
                    <a class="py-2 px-14 block text-sm text-gray-600 dark:text-gray-100 hover:bg-blue-500 hover:text-white @if(request()->is('admin/role*')) bg-blue-200 dark:bg-blue-700  @else bg-gray-100 dark:bg-gray-700 @endif"
                       href="{{route('admin.roles.index')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 inline" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        {{__('Roles')}}
                    </a>
                    <a class="py-2 px-14 block text-sm text-gray-600 dark:text-gray-100 hover:bg-blue-500 hover:text-white @if(request()->is('admin/permissions*')) bg-blue-200 dark:bg-blue-700  @else bg-gray-100 dark:bg-gray-700 @endif"
                       href="{{route('admin.permissions.index')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 inline" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                        {{__('Permissions')}}
                    </a>
                </div>
            </div>
        @endcanany
    </nav>

    <div class="absolute bottom-0 my-8">
        <a class="flex items-center py-2 px-8 text-gray-700 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-100 cursor-pointer"
           href="{{route('admin.user.editPassword',auth()->user()??0)}}">
            <img src="https://ui-avatars.com/api/?name={{auth()->user()->name ?? ''}}?background=random?size=128"
                 alt="avatar"
                 class="h-8 w-8 rounded-full mr-3 object-cover">
            <span>{{auth()->user()->name ?? ''}}</span>
        </a>
    </div>
</div>
