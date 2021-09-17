<section class="mt-2">
    <div class="sm:grid sm:grid-cols-3 sm:grid-rows-3 sm:gap-2 space-y-2 sm:space-y-0">
        <div class="dark:bg-white bg-gray-50 py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('New Case')}}</h2>
            <p class="text-red-500 font-bold text-4xl xl:text-5xl">{{number_format($cases->cases_new)}}</p>
            <span>(+{{round($cases->newPercentage,2)}}%)
            <span class="font-bold">*</span>
            </span>
        </div>

        <div class="dark:bg-white bg-gray-50 py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('Cumulative Case')}}</h2>
            <p class="text-red-500 font-bold text-4xl xl:text-5xl">{{number_format($cases->cases_cumulative)}}</p>
            <span>({{round($cases->cumPercentage,2)}}%)
            <span class="font-bold">*</span>
            </span>
        </div>

        <div class="dark:bg-white bg-gray-50 py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('Active Cases In Malaysia')}}</h2>
            <p class="text-red-500 font-bold text-4xl xl:text-5xl">{{number_format($cases->activeCase)}}</p>
            <span>({{number_format($cases->activeCasePercentage,2)}}%)
            <span class="font-bold">*</span>
            </span>
        </div>

        {{--End of First Row--}}
        <div class="dark:bg-white bg-gray-50 py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('Deaths')}}</h2>
            <p class="text-gray-500  font-bold text-4xl xl:text-5xl">{{number_format($death->deaths_new)}}</p>
            <span> {{__('Brought in Death (BID) ')}} :
                <span class="text-gray-500 font-extrabold">{{$death->deaths_bid}}</span>
            </span>
        </div>

        <div class="dark:bg-white bg-gray-50 py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('Cumulative Death')}}</h2>
            <p class="text-gray-500  font-bold text-4xl xl:text-5xl">{{number_format($death->deaths_commutative)}}</p>
            <span> {{__('Fatality rate')}} :{{number_format($fatalityRate,2)}}% </span>
        </div>


        <div class="dark:bg-white bg-gray-50 py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('Tested')}}</h2>
            <p class="text-yellow-500 font-bold text-4xl xl:text-5xl">{{number_format($test->totalTest)}}</p>
            <span>
                {{__('Positive Rate')}}:
                <span class="font-bold">{{number_format($positiveRate,2)}}%</span>
            </span>
            <small class="text-xs">
                ({{$test->date->format('Y-m-d')}})
            </small>
        </div>

        {{--End of Second Row--}}
        <div class="dark:bg-white bg-gray-50 py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('New recovered Case')}}</h2>
            <p class="text-blue-500 font-bold text-4xl xl:text-5xl">{{number_format($cases->cases_recovered)}}</p>
        </div>

        <div class="dark:bg-white bg-gray-50 py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('Cumulative recovered')}}</h2>
            <p class="text-blue-500  font-bold text-4xl xl:text-5xl">{{number_format($cases->cases_recovered_cumulative)}}</p>
        </div>

        <div class="dark:bg-white bg-gray-50 py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('Active Cluster')}}</h2>
            <p class="text-yellow-500 font-bold text-4xl xl:text-5xl">{{number_format($activeClusterCount)}}</p>
        </div>

        {{--End of Third Row--}}
        <div class="dark:bg-white bg-gray-50 py-6 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('New Dose 1 Jabbed')}}</h2>
            <p class="text-green-500  font-bold text-4xl xl:text-5xl">
                {{number_format($vax->dose1_daily)}}</p>
            <span>{{__('Cumulative :')}}  {{number_format($vax->dose1_cumul)}}</span>
            <span>{{'('.number_format($vax->firstDoseCumulPercent,2).'%)'}}
                <span class="font-bold">*</span>
                </span>
            <div class="relative mt-2 w-10/12 mx-auto">
                <div class="overflow-hidden h-2 text-xs flex rounded bg-green-50">
                    <div
                        style="width: {{round($vax->firstDoseCumulPercent,2)}}%"
                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-300 rounded-r-full">
                    </div>
                </div>
            </div>
        </div>

        <div class="dark:bg-white bg-gray-50 py-6 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('New Dose 2 Jabbed')}}</h2>
            <p class="text-green-500  font-bold text-4xl xl:text-5xl">
                {{number_format($vax->dose2_daily)}}</p>
            <span>{{__('Cumulative :')}} {{number_format($vax->dose2_cumul)}}</span>
            <span>{{'('.number_format($vax->secondDoseCumulPercent,2).'%)'}}
                <span class="font-bold">*</span>
                </span>
            <div class="relative mt-2 w-10/12 mx-auto">
                <div class="overflow-hidden h-2 text-xs flex rounded bg-green-50">
                    <div
                        style="width: {{round($vax->secondDoseCumulPercent,2)}}%"
                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500 rounded-r-full">
                    </div>
                </div>
            </div>
        </div>

        <div class="dark:bg-white bg-gray-50 py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('Percentage of Vaccine Register')}}</h2>
            <p class="text-green-500  font-bold text-4xl xl:text-5xl">
                {{number_format($vaxReg->registeredPrecent).'%'}}
            </p>
            <span>{{__('Registered :')}} {{number_format($vaxReg->total)}}</span>
            {{--End of Fourth Row--}}
        </div>
    </div>
</section>
