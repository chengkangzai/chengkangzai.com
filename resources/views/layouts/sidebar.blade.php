@push('cdn')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
@endpush

<div class="w-64 min-h-screen bg-white dark:bg-gray-800 ">
    <div class="flex items-center justify-center mt-10">
        <a class="text-gray-600 dark:text-gray-100 text-2xl" href="{{route('admin.home')}}">{{config('app.name')}}</a>
    </div>

    <nav class="mt-10">
        <div x-data="{ open: true }">
            <button @click="open = !open"
                    class="w-full flex justify-between items-center py-3 px-6 text-gray-600 dark:text-gray-100 cursor-pointer hover:bg-gray-100 hover:text-gray-700 focus:outline-none">
                <span class="flex items-center">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                    <span class="mx-4 font-medium">{{__('Dashboard')}}</span>
                </span>

                <span>
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                        <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </span>
            </button>

            <div x-show="open" class="">
                <a class="py-2 px-16 block text-sm text-gray-600 dark:text-gray-100 hover:bg-blue-500 hover:text-white @if(request()->is('admin/posts*')) bg-purple-200 dark:bg-purple-700  @else bg-gray-100 dark:bg-gray-700 @endif"
                   href="{{route('admin.posts.index')}}">{{__('Post')}}</a>
                <a class="py-2 px-16 block text-sm text-gray-600 dark:text-gray-100 hover:bg-blue-500 hover:text-white @if(request()->is('admin/works*')) bg-purple-200 dark:bg-purple-700  @else bg-gray-100 dark:bg-gray-700 @endif"
                   href="{{route('admin.works.index')}}">{{__('Work')}}</a>
                <a class="py-2 px-16 block text-sm text-gray-600 dark:text-gray-100 hover:bg-blue-500 hover:text-white @if(request()->is('admin/comment*')) bg-purple-200 dark:bg-purple-700  @else bg-gray-100 dark:bg-gray-700 @endif"
                   href="{{route('admin.comment.index')}}">{{__('Comments')}}</a>
                <a class="py-2 px-16 block text-sm text-gray-600 dark:text-gray-100 hover:bg-blue-500 hover:text-white @if(request()->is('admin/tags*')) bg-purple-200 dark:bg-purple-700  @else bg-gray-100 dark:bg-gray-700 @endif"
                   href="{{route('admin.tags.index')}}">{{__('Tags')}}</a>
            </div>
        </div>
    </nav>

    <div class="absolute bottom-0 my-8">
        <a class="flex items-center py-2 px-8 text-gray-700 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-100"
           href="{{route('admin.user.edit',auth()->user())}}">
            <img src="https://avatars.githubusercontent.com/u/43839286?s=60&v=4" alt="avatar"
                 class="h-6 w-6 rounded-full mr-3 object-cover">
            <span>{{auth()->user()->name }}</span>
        </a>
    </div>
</div>
