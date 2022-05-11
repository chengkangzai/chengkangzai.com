<div>
    @include('partial.rocket')

    <div class="mx-2 space-y-2 mb-10">

        <section class="mt-2 rounded-2xl dark:bg-white dark:text-black py-2 bg-gray-50 shadow">
            <h1 class="text-2xl sm:text-5xl font-bold px-2">
                {{ __('Vaccination') }}
            </h1>
            <p>{{ __('This page was partially created to fulfill assignment for APLC (Advance Programming Concept) module in APU ') }}
            </p>
            <ul class="list-disc list-inside px-2">

                <li>{{ __('Data displayed') }}</li>
                <li>{{ __('All vaccination and registration in Malaysia') }}</li>
            </ul>
            @if ($prologEnabled)
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full my-1"
                    wire:click="exportPL">
                    {{ __('Download Prolog File') }}
                    <svg class="inline w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                    </svg>
                </button>
            @endif
        </section>

        <livewire:covid-vaccination.display-more />
        <livewire:covid-vaccination.full-vax-by-month />
        <livewire:covid-vaccination.high-low-vax-taken-weekly />
        <livewire:covid-vaccination.vax-taken-weekly />

    </div>
    @section('footer')
        @include('layouts.footer')
    @endsection
</div>
