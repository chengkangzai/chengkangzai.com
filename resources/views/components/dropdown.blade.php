<div x-data="{ dropdownOpen: false }" class="relative">
    {{ $trigger }}

    <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 z-10 h-full w-full"></div>

    <div x-show="dropdownOpen" class="absolute right-0 z-10 mt-2 w-48 overflow-hidden rounded-md bg-white shadow-xl">
        {{ $content }}
    </div>
</div>
