<header class="flex items-center justify-between border-b-4 border-indigo-600 bg-white py-4 px-6">
    <div class="flex items-center">
        <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>

    <div class="flex items-center gap-4">
        <x-dropdown>
            <x-slot name="trigger">
                <button @click="dropdownOpen = ! dropdownOpen" class="relative block overflow-hidden">
                    {{ Auth::user()->name }}
                </button>
            </x-slot>

            <x-slot name="content">
                <x-dropdown-link href="{{ route('admin.user.editPassword', auth()->user() ?? 0) }}">
                    {{ __('My Profile') }}
                </x-dropdown-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link href="{{ route('logout') }}"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>

        <span class="sm:px-4"> | </span>

        <x-dropdown class="ml-6">
            <x-slot name="trigger">
                <button @click="dropdownOpen = ! dropdownOpen" class="relative block overflow-hidden">
                    <span class="hidden sm:inline">{{ __('Select Language') }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                </button>
            </x-slot>

            <x-slot name="content">
                <x-dropdown-link href="{{ route('public.setLocale', ['locale' => 'en']) }}">English</x-dropdown-link>
                <x-dropdown-link href="{{ route('public.setLocale', ['locale' => 'zh']) }}">简体中文</x-dropdown-link>
                <x-dropdown-link href="{{ route('public.setLocale', ['locale' => 'ms']) }}">Bahasa Melayu
                </x-dropdown-link>
            </x-slot>
        </x-dropdown>
    </div>
</header>
