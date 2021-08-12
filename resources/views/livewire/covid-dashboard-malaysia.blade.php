<section class="mt-2 rounded-3xl">
    <div class="sm:grid sm:grid-cols-3 sm:grid-rows-3 sm:gap-2 space-y-2 sm:space-y-0">
        <div class="dark:bg-white bg-gray-50 py-10 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('New Case')}}</h2>
            <p class="text-red-500  font-bold text-5xl">{{number_format($dashboardValue->new_cases)}}</p>
            <span>
                    (+{{round(($dashboardValue->new_cases / $dashboardValue->pop)*100,4)}}%)
                    <span class="font-bold">*</span>
                </span>
        </div>


        <div class="dark:bg-white bg-gray-50 py-10 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('Cumulative Case')}}</h2>
            <p class="text-red-500  font-bold text-5xl">{{number_format($dashboardValue->new_cases_cum)}}</p>
            <span>
                    ({{round(($dashboardValue->new_cases_cum/$dashboardValue->pop)*100,4)}}%)
                    <span class="font-bold">*</span>
                </span>
        </div>



        <div class="dark:bg-white bg-gray-50 py-10 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('Tested')}}</h2>
            <p class="text-yellow-500 font-bold text-5xl">{{number_format($dashboardValue->new_test)}}</p>
            <span>
                {{__('Positive Rate')}}:
                <span class="font-bold">{{round($dashboardValue->positive_rate->rate,2)}}%</span>
            </span>
            <small class="text-xs">
                ({{$dashboardValue->positive_rate->date->format('Y-m-d')}})
            </small>

        </div>


        <div class="dark:bg-white bg-gray-50 py-10 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('Deaths')}}</h2>
            <p class="text-gray-500  font-bold text-5xl">{{number_format($dashboardValue->new_death)}}</p>
        </div>


        <div class="dark:bg-white bg-gray-50 py-10 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('Cumulative Death')}}</h2>
            <p class="text-gray-500  font-bold text-5xl">{{number_format($dashboardValue->new_death_cum)}}</p>
            <span>
                    {{__('Fatality rate')}} :
                    {{round(($dashboardValue->new_death_cum/$dashboardValue->new_cases_cum)*100,4)}}%
                </span>
        </div>

        <div class="dark:bg-white bg-gray-50 py-10 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('Active Cluster In Malaysia')}}</h2>
            <p class="text-yellow-500 font-bold text-5xl">{{number_format($dashboardValue->active_cluster_count)}}</p>
        </div>

        <div class="dark:bg-white bg-gray-50 py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('New Dose 1 Jabbed')}}</h2>
            <p class="text-green-500  font-bold text-5xl">
                {{number_format($dashboardValue->vax_1st_daily)}}</p>
            <span>{{__('Cumulative :')}}  {{number_format($dashboardValue->vax_1st_cumulative)}}</span>
            <span>{{'('.round(($dashboardValue->vax_1st_cumulative/$dashboardValue->pop)*100,2).'%)'}}
                    <span class="font-bold">*</span>
                </span>
            <div class="relative mt-2 w-10/12 mx-auto">
                <div class="overflow-hidden h-2 text-xs flex rounded bg-green-50">
                    <div
                        style="width: {{round(($dashboardValue->vax_1st_cumulative/$dashboardValue->pop)*100,2)}}%"
                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-300 rounded-r-full">
                    </div>
                </div>
            </div>
        </div>

        <div class="dark:bg-white bg-gray-50 py-8 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('New Dose 2 Jabbed')}}</h2>
            <p class="text-green-500  font-bold text-5xl">
                {{number_format($dashboardValue->vax_2nd_daily)}}</p>
            <span>{{__('Cumulative :')}} {{number_format($dashboardValue->vax_2nd_cumulative)}}</span>
            <span>{{'('.round(($dashboardValue->vax_2nd_cumulative/$dashboardValue->pop)*100,2).'%)'}}
                    <span class="font-bold">*</span>
                </span>
            <div class="relative mt-2 w-10/12 mx-auto">
                <div class="overflow-hidden h-2 text-xs flex rounded bg-green-50">
                    <div
                        style="width: {{round(($dashboardValue->vax_2nd_cumulative/$dashboardValue->pop)*100,2)}}%"
                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500 rounded-r-full">
                    </div>
                    <div
                        style="width: {{round((($dashboardValue->vax_1st_cumulative/$dashboardValue->pop)*100)-($dashboardValue->vax_2nd_cumulative/$dashboardValue->pop)*100,2)}}%"
                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-300 rounded-r-full">
                    </div>
                </div>
            </div>
        </div>

        <div class="dark:bg-white bg-gray-50 py-10 rounded-xl shadow ">
            <h2 class="text-2xl">{{__('Percentage of Vaccine Register')}}</h2>
            <p class="text-green-500  font-bold text-5xl">
                {{number_format($dashboardValue->percentage_of_reg_malaysia).'%'}}
                <small class="text-black text-xs">*{{__('Above 18')}}</small>
            </p>
            <span>{{__('Registered :')}} {{number_format($dashboardValue->vax_reg_malaysia)}}</span>

        </div>
    </div>
</section>
