<section class="flex flex-col mt-8" id="vax-state">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th colspan="6" class="py-2 border-b">
                            <a href="#vax-state">
                                <h3 class="font-bold text-2xl uppercase">{{__('Vaccination per States')}}</h3>
                            </a>
                            <div class="w-full mx-auto">
                                <table>
                                    <tr>
                                        <td class="w-1/4">
                                            <div class="relative">
                                                <div class="overflow-hidden h-2 text-xs flex rounded bg-green-50">
                                                    <div
                                                        style="width: 100%"
                                                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-300 rounded-full">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="w-1/4 px-4">
                                            {{__('Dose 1 Cumulative')}}
                                        </td>

                                        <td class="w-1/4">
                                            <div class="relative">
                                                <div class="overflow-hidden h-2 text-xs flex rounded bg-green-50">
                                                    <div
                                                        style="width: 100%"
                                                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500 rounded-full">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="w-1/4 px-4">
                                            {{__('Dose 2 Cumulative')}}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <span
                                class="inline font-normal text-xs float-right">
                                {{__('Updated at')}} {{$timestamp}}
                            </span>
                        </th>
                    </tr>
                    <tr>
                        <th scope="col"
                            class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{__('State')}}
                        </th>
                        <th scope="col"
                            class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{__('New Dose 1 ')}} <span class="font-black text-black">*</span>
                        </th>
                        <th scope="col"
                            class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{__('Dose 1 Cumulative')}} <span class="font-black text-black">*</span>
                        </th>
                        <th scope="col"
                            class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{__('New Dose 2 ')}} <span class="font-black text-black">*</span>
                        </th>
                        <th scope="col"
                            class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{__('Dose 2 Cumulative')}} <span class="font-black text-black">*</span>
                        </th>
                        <th scope="col"
                            class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{__('Registered')}} <span class="font-black text-black">*</span>
                        </th>

                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($dose1_daily as $state => $dose1)
                        <tr class="@if($loop->even) bg-gray-50 @endif">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex">
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{__($state)}}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{number_format($dose1)}}
                                <small class="text-xs">
                                    (+{{ round($dose1_dailyPrecent[$state],2)}}%)
                                </small>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{number_format($dose1_cumul[$state])}}
                                <small class="text-xs">
                                    {{ '('.round($dose1_cumulPrecent[$state],2).'%)'}}
                                </small>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{number_format($dose2_daily[$state])}}
                                <small class="text-xs">
                                    {{ '(+'.round($dose2_dailyPrecent[$state],2).'%)'}}
                                </small>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{number_format($dose2_cumul[$state])}}
                                <small class="text-xs">
                                    {{ '('.round($dose2_cumulPrecent[$state],2).'%)'}}
                                </small>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{number_format($vaxReg[$state])}}
                                <small class="text-xs">
                                    {{ '('.round($vaxRegPrecent[$state],2).'%)'}}
                                </small>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6">
                                <div class="relative">
                                    <div class="overflow-hidden h-2 text-xs flex rounded bg-green-50">
                                        <div
                                            style="width: {{round(($dose2_cumulPrecent[$state]),2)}}%"
                                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500 rounded-r-full">
                                        </div>
                                        <div
                                            style="width: {{round((($dose1_cumulPrecent[$state])-($dose2_cumulPrecent[$state])),2)}}%"
                                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-300 rounded-r-full">
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex">
                                <div class="ml-4 font-black ">
                                    {{__("Total")}}
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap font-bold">
                            {{number_format($dose1_daily->sum())}}
                            <small class="text-xs">
                                {{'+('.round($dose1_dailyPrecent->avg(),2).'%)'}}
                            </small>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap font-bold">
                            {{number_format($dose1_cumul->sum())}}
                            <small class="text-xs">
                                {{'('.round($dose1_cumulPrecent->avg(),2).'%)'}}
                            </small>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap font-bold">
                            {{number_format($dose2_daily->sum())}}
                            <small class="text-xs">
                                {{'+('.round($dose2_dailyPrecent->avg(),2).'%)'}}
                            </small>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap font-bold">
                            {{number_format($dose2_cumul->sum())}}
                            <small class="text-xs">
                                {{'('.round($dose2_cumulPrecent->avg(),2).'%)'}}
                            </small>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap font-bold">
                            {{number_format($vaxReg->sum())}}
                            <small class="text-xs">
                                {{'('.round($vaxRegPrecent->avg(),2).'%)'}}
                            </small>
                        </td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr class="bg-white">
                        <td class="px-6 py-4 whitespace-nowrap text-left" colspan="6">
                            <div class="flex max-w-full">
                                <div class="ml-4 ">
                                    <p class="text-sm font-medium text-gray-900">
                                        <span class="font-black text-black">*</span> {{__('per population')}}
                                    </p>
                                    <p class="text-sm font-medium text-gray-900  break-words ">
                                        <span class="text-black">*</span>
                                        {{__('* note that this will not equal the number of people who were fully vaccinated on a given date when Malaysia begins using single-dose vaccines (e.g. CanSino)')}}
                                    </p>
                                    <p class="text-sm font-medium text-gray-900">
                                        <span class="text-black">*</span>
                                        {{__('* Percentage is calculated by the population of the state.')}}
                                        {{__('Some state are having 100% above vaccination rate is because the vaccine count Non Malaysian as well.')}}
                                    </p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</section>
