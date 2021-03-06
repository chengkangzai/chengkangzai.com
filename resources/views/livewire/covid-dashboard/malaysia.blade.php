<section class="mt-2" wire:init="load" xmlns:wire="" id="covid-stat">
    <div class="sm:grid sm:grid-cols-3 sm:grid-rows-3 sm:gap-2 space-y-2 sm:space-y-0">
        <div class="dark:bg-white bg-gray-50 py-4 sm:py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{ trans('covid.New_Case', ['day' => $cases->date_diffWord]) }}</h2>
            <p class="text-red-500 font-bold text-4xl xl:text-5xl">{{ number_format($cases->cases_new) }}</p>
            <span>(+{{ number_format($cases->newPercentage, 2) }}%)
                <span class="font-bold">*</span>
            </span>
        </div>

        <div class="dark:bg-white bg-gray-50 py-4 sm:py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{ trans('covid.Cumulative_Case', ['day' => $cases->date_diffWord]) }}</h2>
            <p class="text-red-500 font-bold text-4xl xl:text-5xl">{{ number_format($cases->cases_cumulative) }}</p>
            <span>({{ number_format($cases->cumPercentage, 2) }}%)
                <span class="font-bold">*</span>
            </span>
        </div>

        <div class="dark:bg-white bg-gray-50 py-4 sm:py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{ trans('covid.Active_Case', ['day' => $cases->date_diffWord]) }}</h2>
            <p class="text-red-500 font-bold text-4xl xl:text-5xl">{{ number_format($cases->activeCase) }}</p>
            <span>({{ number_format($cases->activeCasePercentage, 2) }}%)
                <span class="font-bold">*</span>
            </span>
        </div>

        {{-- End of First Row --}}
        <div class="dark:bg-white bg-gray-50 py-6 rounded-xl shadow ">
            <h2 class="text-2xl">{{ trans('covid.Deaths', ['day' => $death->date_diffWord]) }}</h2>
            <p class="text-gray-500  font-bold text-4xl xl:text-5xl">{{ number_format($death->deaths_new) }}</p>
            <span> {{ __('Brought in Death (BID) ') }} :
                <span class="text-gray-500 font-extrabold">{{ $death->deaths_bid }}</span>
            </span>
            <br>
            <span> {{ __('Died of disease (DOD) ') }} :
                <span class="text-gray-500 font-extrabold">{{ $death->deaths_bid_dod }}</span>
            </span>
        </div>

        <div class="dark:bg-white bg-gray-50 py-4 sm:py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{ trans('covid.Cumulative_Death', ['day' => $death->date_diffWord]) }}</h2>
            <p class="text-gray-500  font-bold text-4xl xl:text-5xl">{{ number_format($death->deaths_new_cumulative) }}
            </p>
            <span> {{ __('Fatality rate') }} :{{ number_format($fatalityRate, 2) }}% </span>
        </div>


        <div class="dark:bg-white bg-gray-50 py-4 sm:py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{ trans('covid.Tested', ['day' => $test->date_diffWord]) }}</h2>
            <p class="text-yellow-500 font-bold text-4xl xl:text-5xl">{{ number_format($test->totalTest) }}</p>
            <span>
                {{ __('Positive Rate') }}:
                <span class="font-bold">{{ number_format($positiveRate, 2) }}%</span>
                <small
                    class="text-xs">({{ number_format($positiveRateCase) }}/{{ number_format($test->totalTest) }})</small>
            </span>
            <small class="text-xs">
                ({{ $test->date?->format('Y-m-d') }})
            </small>
        </div>

        {{-- End of Second Row --}}
        <div class="dark:bg-white bg-gray-50 py-4 sm:py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{ trans('covid.New_recovered_Case', ['day' => $cases->date_diffWord]) }}</h2>
            <p class="text-blue-500 font-bold text-4xl xl:text-5xl">
                {{ number_format($cases->cases_recovered) }}
            </p>
        </div>

        <div class="dark:bg-white bg-gray-50 py-4 sm:py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{ trans('covid.Cumulative_recovered', ['day' => $cases->date_diffWord]) }}</h2>
            <p class="text-blue-500  font-bold text-4xl xl:text-5xl">
                {{ number_format($cases->cases_recovered_cumulative) }}
            </p>
        </div>

        <div class="dark:bg-white bg-gray-50 py-4 sm:py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{ trans('covid.Active_Cluster', ['day' => $timestamp['test_dateDiffWord'] ?? '']) }}
            </h2>
            <p class="text-yellow-500 font-bold text-4xl xl:text-5xl">
                {{ number_format($clusterCount) }}
            </p>
        </div>

        {{-- End of Third Row --}}
        <div class="dark:bg-white bg-gray-50 py-6 rounded-xl shadow ">
            <h2 class="text-2xl">{{ trans('covid.New_Dose_1_Jabbed', ['day' => $vax->date_diffWord]) }}</h2>
            <p class="text-green-500  font-bold text-4xl xl:text-5xl">
                {{ number_format($vax->daily_partial) }}
                <small class="text-xs">{{ '+(' . number_format($vax->firstDoseCumulPercent, 2) . '%)' }}</small>
            </p>
            <span>{{ __('Cumulative :') }} {{ number_format($vax->cumul_partial) }}</span>
            <span>{{ '(' . number_format($vax->firstDosePercent, 2) . '%)' }}
                <span class="font-bold">*</span>
            </span>
            <div class="relative mt-2 w-10/12 mx-auto">
                <div class="overflow-hidden h-2 text-xs flex rounded bg-violet-50">
                    <div style="width: {{ number_format($vax->firstDosePercent, 2) }}%"
                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-300 rounded-r-full">
                    </div>
                </div>
            </div>
        </div>

        <div class="dark:bg-white bg-gray-50 py-6 rounded-xl shadow ">
            <h2 class="text-2xl">{{ trans('covid.New_Dose_2_Jabbed', ['day' => $vax->date_diffWord]) }}</h2>
            <p class="text-green-500  font-bold text-4xl xl:text-5xl">
                {{ number_format($vax->daily_full) }}
                <small class="text-xs">{{ '(+' . number_format($vax->secondDoseCumulPercent, 2) . '%)' }}</small>
            </p>
            <span>{{ __('Cumulative :') }} {{ number_format($vax->cumul_full) }}</span>
            <span>{{ '(' . number_format($vax->secondDosePercent, 2) . '%)' }}
                <span class="font-bold">*</span>
            </span>
            <div class="relative mt-2 w-10/12 mx-auto">
                <div class="overflow-hidden h-2 text-xs flex rounded bg-violet-50">
                    <div style="width: {{ number_format($vax->secondDosePercent, 2) }}%"
                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500 rounded-r-full">
                    </div>
                </div>
            </div>
        </div>

        <div class="dark:bg-white bg-gray-50 py-4 sm:py-6 rounded-xl shadow ">
            <h2 class="text-2xl">
                {{ trans('covid.Percentage_of_Vaccine_Register', ['day' => $vaxReg->date_diffWord]) }}</h2>
            <p class="text-green-500  font-bold text-4xl xl:text-5xl">
                {{ number_format($vaxReg->registeredPrecent) . '%' }}
                <small class="text-black text-xs">*{{ __($popFilter) }}</small>
            </p>
            <span>{{ __('Registered :') }} {{ number_format($vaxReg->total) }}</span>
            {{-- End of Fourth Row --}}
        </div>
    </div>
</section>
