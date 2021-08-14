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
                            <span
                                class="inline font-normal text-xs float-right">{{__('Updated at')}} {{$dashboardValue->updated_at->ICU->toDateString()}}</span>
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
                            class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{__('Total')}} ({{__('Overall Utilisation')}})
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($dashboardValue->ICU as $state => $ICU)
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
                                {{number_format($ICU)}} / {{number_format($dashboardValue->bed_ICU[$state] ?? 0)}}
                                @php
                                    $temp =round(($ICU/$dashboardValue->bed_ICU[$state] ?? 0)*100)
                                @endphp

                                <small
                                    class="text-xs @if($temp > 90) text-red-700 @elseif($temp > 70) text-yellow-700 @endif">
                                    {{'('.round(($ICU/$dashboardValue->bed_ICU[$state] ?? 0)*100,2).'%)'}}
                                </small>

                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if(($dashboardValue->hospital[$state] ?? 0 !== 0) || ($dashboardValue->bed_covid[$state] ?? 0 !== 0))
                                    {{number_format($dashboardValue->hospital[$state] ?? 0)}}
                                    / {{number_format($dashboardValue->bed_covid[$state] ?? 0)}}
                                    <small class="text-xs">
                                        {{'('.round(($dashboardValue->hospital[$state]/$dashboardValue->bed_covid[$state])*100,2).'%)'}}
                                    </small>
                                @else
                                    N/A
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($dashboardValue->PKRC[$state] ?? 0 !== 0 )
                                    {{number_format($dashboardValue->PKRC[$state] ?? 0) ?? "N/A"}}
                                    / {{number_format($dashboardValue->bed_PKRC[$state] ?? 0) ?? "N/A"}}
                                    <small>{{'('.round(($dashboardValue->PKRC[$state] /$dashboardValue->bed_PKRC[$state])*100,2).'%)'}}</small>
                                @else
                                    N/A
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{number_format($ICU + ($dashboardValue->hospital[$state] ?? 0 )+ ($dashboardValue->PKRC[$state] ?? 0))}}
                                /
                                {{number_format(($dashboardValue->bed_ICU[$state] ?? 0) + ($dashboardValue->bed_covid[$state] ?? 0) + ($dashboardValue->bed_PKRC[$state] ??0))}}
                                @php
                                    $temp=(($ICU + ($dashboardValue->hospital[$state] ?? 0) + ($dashboardValue->PKRC[$state] ?? 0)) /(($dashboardValue->bed_ICU[$state] ?? 0) + ($dashboardValue->bed_covid[$state] ?? 0) + ($dashboardValue->bed_PKRC[$state] ?? 0)))*100;
                                @endphp
                                <small class="text-xs">
                                    {{'('.round($temp,2).'%)'}}
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
                            {{number_format($dashboardValue->ICU->sum())}}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap font-bold">
                            {{number_format($dashboardValue->hospital->sum())}}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap font-bold">
                            {{number_format($dashboardValue->PKRC->sum())}}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap font-bold">
                            {{number_format($dashboardValue->ICU->sum() + $dashboardValue->hospital->sum() + $dashboardValue->PKRC->sum())}}
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
