<section class="flex flex-col mt-8" id="healthcare-state">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th colspan="5" class="py-2 border-b">
                            <a href="#healthcare-state">
                                <h3 class="font-bold text-2xl uppercase">{{__('Healthcare per States')}}</h3>
                            </a>
                            {{--                            <span--}}
                            {{--                                class="inline font-normal text-xs float-right">{{__('Updated at')}} {{$dashboardValue->updated_at->ICU->toDateString()}}</span>--}}
                        </th>
                    </tr>
                    <tr>
                        <th scope="col"
                            class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{__('State')}}
                        </th>
                        <th scope="col"
                            class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{__('ICU (Covid)')}} ({{__('Utilisation')}})
                        </th>
                        <th scope="col"
                            class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{__('Hospital (Covid)')}} ({{__('Utilisation')}})
                        </th>
                        <th scope="col"
                            class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{__('PKRC (Covid)')}} <span class="font-black text-black">*</span>
                            ({{__('Utilisation')}})
                        </th>
                        <th scope="col"
                            class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer hover:text-blue-500 hover:font-bold">
                            {{__('Total')}} ({{__('Overall Utilisation')}})
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($ICUs as $state => $ICU)
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
                                {{number_format($ICU)}} / {{number_format($bed_ICU[$state] ?? 0)}}
                                <small
                                    class="text-xs @if($icu_covid_util[$state] > 90) text-red-700 @elseif($icu_covid_util[$state] > 70) text-yellow-700 @endif">
                                    {{'('.number_format($icu_covid_util[$state],2).'%)'}}
                                </small>

                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if(($hospitals[$state] ?? 0 !== 0) || ($bed_covid[$state] ?? 0 !== 0))
                                    {{number_format($hospitals[$state] ?? 0)}}
                                    / {{number_format($bed_covid[$state] ?? 0)}}
                                    <small
                                        class="text-xs @if($hospital_covid_util[$state] > 90) text-red-700 @elseif($hospital_covid_util[$state] > 70) text-yellow-700 @endif">
                                        {{'('.round($hospital_covid_util[$state],2).'%)'}}
                                    </small>
                                @else
                                    N/A
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($PKRC[$state] ?? 0 !== 0 )
                                    {{number_format($PKRC[$state] ?? 0) ?? "N/A"}}
                                    / {{number_format($bed_PKRC[$state] ?? 0) ?? "N/A"}}
                                    <small
                                        class="text-xs @if($pkrc_covid_util[$state] > 90) text-red-700 @elseif($pkrc_covid_util[$state] > 70) text-yellow-700 @endif">
                                        {{'('.round($pkrc_covid_util[$state],2).'%)'}}
                                    </small>
                                @else
                                    N/A
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{$totalOccupancyByState[$state]}} / {{$totalCovidBedByState[$state]}}
                                <small
                                    class="text-xs @if($totalUlizationByState[$state] > 90) text-red-700 @elseif($totalUlizationByState[$state] > 70) text-yellow-700 @endif">
                                    {{'('.round($totalUlizationByState[$state],2).'%)'}}
                                </small>
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
                            {{number_format($ICUs->sum())}} / {{number_format($bed_ICU->sum())}}
                            <small class="text-xs">
                                {{'('.number_format(($ICUs->sum() / $bed_ICU->sum())*100,2).'%)'}}
                            </small>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap font-bold">
                            {{number_format($hospitals->sum())}} / {{number_format($bed_covid->sum())}}
                            <small class="text-xs">
                                {{'('.number_format(($hospitals->sum() / $bed_covid->sum())*100,2).'%)'}}
                            </small>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap font-bold">
                            {{number_format($PKRC->sum())}} / {{number_format($bed_PKRC->sum())}}
                            <small class="text-xs">
                                {{'('.number_format(($PKRC->sum() / $bed_PKRC->sum())*100,2).'%)'}}
                            </small>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap font-bold">
                            {{number_format($ICUs->sum() + $hospitals->sum() + $PKRC->sum())}} /
                            {{number_format($bed_ICU->sum() + $bed_covid->sum() + $bed_PKRC->sum())}}
                            <small class="text-xs">
                                {{'('.number_format(($ICUs->sum() + $hospitals->sum() + $PKRC->sum())/($bed_ICU->sum() + $bed_covid->sum() + $bed_PKRC->sum())/3*100,2).'%)'}}
                            </small>
                        </td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr class="bg-white">
                        <td class="px-6 py-4 whitespace-nowrap text-left" colspan="5">
                            <div class="flex">
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-900">
                                        <span class="font-black text-black">*</span>
                                        {{__('PKRC : COVID-19 Quarantine and Treatment Centre')}}
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
