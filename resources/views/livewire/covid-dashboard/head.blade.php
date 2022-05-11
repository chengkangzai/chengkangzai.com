<section class="mt-2 rounded-2xl dark:bg-white dark:text-black py-2 bg-gray-50 shadow" id="malaysia-dashboard"
    wire:loading.class="animate-pulse" xmlns:wire="">
    <a href="#malaysia-dashboard">
        <h1 class="text-2xl sm:text-5xl font-bold px-2">{{ __('Covid-19 Malaysia Dashboard ') }}
            <img height="32" width="64" loading="lazy" src="{{ asset('src/64px-Flag_of_Malaysia.svg.png') }}"
                alt="Malaysia Flag" class="inline">
            <img height="32" width="64" loading="lazy" src="{{ asset('src/64px-Flag_of_Malaysia.svg.png') }}"
                alt="Malaysia Flag" class="inline">
            <img height="32" width="64" loading="lazy" src="{{ asset('src/64px-Flag_of_Malaysia.svg.png') }}"
                alt="Malaysia Flag" class="inline">
        </h1>
    </a>
    <div>
        <ul class="list-disc list-inside px-2">
            <li>{{ __('Data Source : ') }}
                <a href="https://github.com/MoH-Malaysia/covid19-public/tree/main/epidemic" rel="noreferrer"
                    class="underline text-blue-500">
                    {{ __('MOH Github') }}
                </a>
                ,
                <a href="https://github.com/CITF-Malaysia/citf-public" rel="noreferrer" class="underline text-blue-500">
                    {{ __('CITF Github') }}
                </a>
            </li>
            <li>
                {{ __('I am not a data analyst, so displayed data might not be accurate or suitable.') }}
            </li>
            <li>
                {{ __('Me and this project are not affiliated with any Government body') }}
            </li>
            <li>
                <a href="#about" class="underline text-blue-500">{{ __('About and data updated time') }}</a>
            </li>
        </ul>
        <p class="font-bold"> {{ __('* per population') }}</p>
    </div>
</section>
