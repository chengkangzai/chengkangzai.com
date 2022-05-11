<div class="py-10 px-2 rounded-2xl dark:bg-white dark:text-black mb-4 mt-2 bg-gray-50 shadow" id="about"
    wire:loading.class="animate-pulse" wire:init="load" xmlns:wire="http://www.w3.org/1999/xhtml">
    <h2 class="text-3xl font-bold">{{ __('About this project') }}</h2>
    <ul class="text-sm sm:text-base list-disc list-inside">
        <li>
            {{ __('Cases data Updated at') }}
            : {{ $timestamp['cases'] ?? '...' }}
        </li>
        <li>
            {{ __('Death data Updated at') }}
            : {{ $timestamp['death'] ?? '...' }}
        </li>
        <li>
            {{ __('Tested data Updated at') }}
            : {{ $timestamp['test'] ?? '...' }}
        </li>
        <li>
            {{ __('Cluster data Updated at') }}
            : {{ $timestamp['cluster'] ?? '...' }}
        </li>
        <li>
            {{ __('Vaccination data Updated at') }}
            : {{ $timestamp['vax'] ?? '...' }}
        </li>
        <li>
            {{ __('Vaccination registration data Updated at') }}
            : {{ $timestamp['vaxReg'] ?? '...' }}
        </li>
    </ul>
    <div>
        <p>
            <span class="font-black text-black">***</span>
            {!! __('Any feedback/recommendation/correction is welcomed, contact me by email or twitter') !!}

        </p>
    </div>
</div>
