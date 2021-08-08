<section class="flex flex-col mt-8" id="case-state">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th colspan="5" class="py-2 border-b">
                            <a href="#case-state">
                                <h3 class="font-bold text-2xl uppercase">{{__('Cases per States')}}</h3>
                            </a>
                            <span
                                class="inline font-normal text-xs float-right">{{__('Updated at')}} {{$dashboardValue->updated_at->caseState->toDateString()}}</span>
                        </th>
                    </tr>
                    <tr>
                        <th scope="col"
                            class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{__('State')}}
                        </th>
                        <th scope="col"
                            class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{__('New Case')}} ({{__('% per population')}})
                        </th>
                        <th scope="col"
                            class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{__('Cumulative Case')}} ({{__('% per population')}})
                        </th>
                        <th scope="col"
                            class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{__('New Death')}}
                        </th>
                        <th scope="col"
                            class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{__('Cumulative Death')}} ({{__('Fatality rate')}})
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($dashboardValue->new_cases_state as $state => $newCase)
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
                                {{number_format($newCase)}}
                                <small class="text-xs">
                                    (+{{ round(($newCase / $dashboardValue->population_state[$state])*100,4)}}%)
                                </small>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{number_format($dashboardValue->new_cases_state_cum[$state])}}
                                <small class="text-xs">
                                    {{ '('.round(($dashboardValue->new_cases_state_cum[$state] / $dashboardValue->population_state[$state])*100,2).'%)'}}
                                </small>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{number_format($dashboardValue->newDeath_state[$state])}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{number_format($dashboardValue->newDeath_state_cum[$state])}}
                                <small class="text-xs">
                                    {{ '('.round(($dashboardValue->newDeath_state_cum[$state] / $dashboardValue->new_cases_state_cum[$state])*100,2).'%)'}}
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
                            {{number_format($dashboardValue->new_cases_state->sum())}}
                            <small class="text-xs">
                                (+{{round(($dashboardValue->new_cases_state->sum() / $dashboardValue->pop)*100,4)}}
                                %)
                            </small>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap font-bold">
                            {{number_format($dashboardValue->new_cases_state_cum->sum())}}
                            <small class="text-xs">
                                ({{round(($dashboardValue->new_cases_state_cum->sum() / $dashboardValue->pop)*100,2)}}
                                %)
                            </small>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap font-bold">
                            {{number_format($dashboardValue->newDeath_state->sum())}}
                            <small class="text-xs">
                            </small>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap font-bold">
                            {{number_format($dashboardValue->newDeath_state_cum->sum())}}
                            <small class="text-xs">
                                ({{round(($dashboardValue->newDeath_state_cum->sum() / $dashboardValue->new_cases_state_cum->sum())*100,2)}}
                                %)
                            </small>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
