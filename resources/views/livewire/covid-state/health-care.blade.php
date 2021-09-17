<section class="mt-2 mb-6" id="health-care">
    <section class="my-2 rounded-2xl dark:bg-white dark:text-black py-4 bg-gray-50 shadow" id="malaysia-dashboard">
        <a href="#health-care">
            <h1 class="text-2xl sm:text-5xl font-bold px-2">{{__('Health Care of :')}} {{__($state)}}</h1>
        </a>
        <div class="container flex flex-row-reverse">
            <label>
                <select class="bg-white ring ring-gray-200 mx-2 px-4 py-1 rounded" wire:model="state">
                    <option disabled>-----</option>
                    @foreach(\App\Models\Covid\CasesState::STATE as $key => $filter)
                        <option value="{{$key}}">
                            {{__($key)}}
                        </option>
                    @endforeach
                </select>
            </label>
            <span class="py-1">{{__('Filter By')}} : </span>
        </div>
    </section>

    <div class="sm:grid sm:grid-cols-4 sm:grid-rows-3 sm:gap-2 space-y-2 sm:space-y-0">
        <div class="dark:bg-white bg-gray-50 py-8 rounded-xl shadow row-span-2 py-24">
            {{--TODO : Use Icon to show the inflow and out flow--}}
            {{--TODO : Change the wording of "ICU,PKRC, Hospital to dynamically" --}}
            <h2 class="text-2xl pb-2">{{__('Inflow and Out Flow of Hospital and ICU')}}</h2>
            <hr class="mx-4 py-2">
            <p class="text-5xl font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 inline text-red-500" fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                {{number_format($hospital->admitted_total)}}
            </p>
            <p class="text-5xl font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 inline text-green-500" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"/>
                </svg>
                {{number_format($hospital->discharged_total)}}
            </p>
        </div>
        {{--        @dump($ICU)--}}
        <div class="dark:bg-white bg-gray-50 py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('Total Patient of ICU')}}</h2>
            <p class="text-red-500 font-bold text-4xl xl:text-5xl">{{number_format($ICU->totalPatient)}}</p>
            <p>{{__('Covid : ')}} {{number_format($ICU->icu_covid)}}</p>
            <p>{{__('Non Covid : ')}} {{number_format($ICU->icu_pui)}}</p>
            <p>{{__('PUI : ')}} {{number_format($ICU->icu_noncovid) }} </p>
        </div>

        <div class="dark:bg-white bg-gray-50 py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('Usage of ICU')}}</h2>
            <p class="text-red-500 font-bold text-4xl xl:text-5xl">
                {{number_format($ICU->overall_utilization).'%'}}
            </p>
            <p>{{__('Total Patients : ')}} {{number_format($ICU->totalPatient)}} </p>
            <p>{{__('Total Beds : ')}} {{number_format($ICU->bed_icu_total)}}</p>
        </div>

        <div class="dark:bg-white bg-gray-50 py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('Covid Usage of ICU')}}</h2>
            <p class="text-red-500 font-bold text-4xl xl:text-5xl">
                {{number_format($ICU->covid_utilization).'%'}}
            </p>
            <p>{{__('Covid Patient : ')}} {{number_format($ICU->icu_covid)}}</p>
            <p>{{__('Total Covid Beds : ')}} {{number_format($ICU->bed_icu_covid)}} </p>
        </div>
        {{--END OF ICU --}}

        {{--START OF Hospital--}}
        <div class="dark:bg-white bg-gray-50 py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('Total Patient of Hospital')}}</h2>
            <p class="text-red-500 font-bold text-4xl xl:text-5xl">{{number_format($hospital->totalPatient)}}</p>
            <p>{{__('Covid : ')}} {{number_format($hospital->hosp_covid)}}</p>
            <p>{{__('Non Covid : ')}} {{number_format($hospital->hosp_pui)}}</p>
            <p>{{__('PUI : ')}} {{number_format($hospital->hosp_noncovid) }} </p>
        </div>

        <div class="dark:bg-white bg-gray-50 py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('Usage of Hospital')}}</h2>
            <p class="text-red-500 font-bold text-4xl xl:text-5xl">
                {{number_format($hospital->overallUtilisation).'%'}}
            </p>
            <p>{{__('Total Patients : ')}} {{number_format($hospital->totalPatient)}} </p>
            <p>{{__('Total Beds : ')}} {{number_format($hospital->beds)}}</p>
        </div>

        <div class="dark:bg-white bg-gray-50 py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('Covid Usage of Hospital')}}</h2>
            <p class="text-red-500 font-bold text-4xl xl:text-5xl">
                {{number_format($hospital->covidUtilisation).'%'}}
            </p>
            <p>{{__('Covid Patient : ')}} {{number_format($hospital->hosp_covid)}}</p>
            <p>{{__('Total Covid Beds : ')}} {{number_format($hospital->beds_covid)}} </p>
        </div>

        {{--END OF Hospital --}}

        {{--START OF PKRC--}}
        <div class="dark:bg-white bg-gray-50 py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('Inflow and Out Flow of PKRC')}}</h2>
            <p class="text-5xl font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 inline text-red-500" fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                {{number_format($PKRC->admitted_total)}}
            </p>
            <p class="text-5xl font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 inline text-green-500" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"/>
                </svg>
                {{number_format($PKRC->discharge_total)}}
            </p>
        </div>

        <div class="dark:bg-white bg-gray-50 py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('Total Patient of PKRC')}}</h2>
            <p class="text-red-500 font-bold text-4xl xl:text-5xl">{{number_format($PKRC->totalPatient)}}</p>
            <p>{{__('Covid : ')}} {{number_format($PKRC->pkrc_covid)}}</p>
            <p>{{__('Non Covid : ')}} {{number_format($PKRC->pkrc_pui)}}</p>
            <p>{{__('PUI : ')}} {{number_format($PKRC->pkrc_noncovid) }} </p>
        </div>

        <div class="dark:bg-white bg-gray-50 py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('Usage of PKRC')}}</h2>
            <p class="text-red-500 font-bold text-4xl xl:text-5xl">
                {{number_format($PKRC->overallUtilisation).'%'}}
            </p>
            <p>{{__('Total Patients : ')}} {{number_format($PKRC->totalPatient)}} </p>
            <p>{{__('Total Beds : ')}} {{number_format($PKRC->beds)}}</p>
        </div>

        <div class="dark:bg-white bg-gray-50 py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('Usage of Ventilation')}}</h2>

        </div>
    </div>
</section>
