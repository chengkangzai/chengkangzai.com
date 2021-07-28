@extends('layouts.covid_app')

@section('content')
    @include('partial.rocket')
    {{--    TODO add tooltip for each percentage for clarify  --}}
    <div class=" mt-2 rounded-3xl ">
        <div class="sm:grid sm:grid-cols-3 sm:grid-rows-2 sm:gap-2 space-y-2 sm:space-y-0">
            <div class="dark:bg-white bg-gray-50 py-10 rounded-xl shadow ">
                <h2 class="text-2xl">{{__('New Case')}}</h2>
                <p class="text-red-500  font-bold text-5xl">{{number_format($dashboardValue->new_cases)}}</p>
                <span>(+{{round(($dashboardValue->new_cases / $dashboardValue->pop)*100,4)}}%)</span> <br>
                <span>{{__('Updated at')}} {{$dashboardValue->new_cases_updated_at}}</span>
            </div>

            <div class="dark:bg-white bg-gray-50 py-10 rounded-xl shadow ">
                <h2 class="text-2xl">{{__('Deaths')}}</h2>
                <p class="text-gray-500  font-bold text-5xl">{{number_format($dashboardValue->new_death)}}</p>
                <span>(+{{round(($dashboardValue->new_death / $dashboardValue->pop)*100,4)}}%)</span> <br>
                <span>{{__('Updated at')}} {{$dashboardValue->new_cases_updated_at}}</span>
            </div>
            {{--TODO add admited ICU and total ICU--}}
            <div class="dark:bg-white bg-gray-50 py-10 rounded-xl shadow ">
                <h2 class="text-2xl">{{__('ICU')}}</h2>
                <p class="text-yellow-500 font-bold text-5xl">{{number_format($dashboardValue->icu_malaysia)}}</p>
                <span>{{__('Updated at')}} {{$dashboardValue->icu_malaysia_updated_at}}</span>
            </div>

            <div class="dark:bg-white bg-gray-50 py-10 rounded-xl shadow ">
                <h2 class="text-2xl">{{__('New Case Cumulative')}}</h2>
                <p class="text-red-500  font-bold text-5xl">{{number_format($dashboardValue->new_cases_cum)}}</p>
                <p>({{round(($dashboardValue->new_cases_cum/$dashboardValue->pop)*100,4)}}%)</p>
                <span>{{__('Updated at')}} {{$dashboardValue->new_cases_updated_at}}</span>
            </div>
            <div class="dark:bg-white bg-gray-50 py-10 rounded-xl shadow ">
                <h2 class="text-2xl">{{__('Cumulative Death')}}</h2>
                <p class="text-gray-500  font-bold text-5xl">{{number_format($dashboardValue->new_death_cum)}}</p>
                <p>({{round(($dashboardValue->new_death_cum/$dashboardValue->pop)*100,4)}}%)</p>
                <span>{{__('Updated at')}} {{$dashboardValue->new_death_updated_at}}</span>
            </div>
            {{--TODO add admited Ventilator and total Ventilator--}}
            <div class="dark:bg-white bg-gray-50 py-10 rounded-xl shadow ">
                <h2 class="text-2xl">{{__('Ventilator')}}</h2>
                <p class="text-yellow-500  font-bold text-5xl">{{number_format($dashboardValue->ventilator_malaysia)}}</p>
                <span>{{__('Updated at')}} {{$dashboardValue->icu_malaysia_updated_at}}</span>
            </div>
        </div>
    </div>

    <div class="flex flex-col p-2 mt-2">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th colspan="5" class="py-2 border-b">
                                <h3 class="font-bold text-2xl uppercase">{{__('Cases per States')}}</h3>
                                <span
                                    class="inline font-normal text-xs float-right">{{__('Updated at')}} {{$dashboardValue->new_cases_updated_at}}</span>
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
                                {{__('Cumulative Death')}} ({{__('% per population')}})
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
                                                {{$state}}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{number_format($newCase)}}
                                    <small class="text-xs">
                                        (+{{ round(($newCase / $dashboardValue->population_state[$state]*100),4)}}%)
                                    </small>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{number_format($dashboardValue->new_cases_state_cum[$state])}}
                                    <small class="text-xs">
                                        ({{ round(($dashboardValue->new_cases_state_cum[$state] / $dashboardValue->population_state[$state]*100),2)}}
                                        %)
                                    </small>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{number_format($dashboardValue->newDeath_state[$state])}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{number_format($dashboardValue->newDeath_state_cum[$state])}}
                                    <small class="text-xs">
                                        ({{ round(($dashboardValue->newDeath_state_cum[$state] / $dashboardValue->population_state[$state]*100),2)}}
                                        %)
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
                                    (+{{round($dashboardValue->new_cases_state->sum() / $dashboardValue->pop,4)}}%)
                                </small>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap font-bold">
                                {{number_format($dashboardValue->new_cases_state_cum->sum())}}
                                <small class="text-xs">
                                    ({{round($dashboardValue->new_cases_state_cum->sum() / $dashboardValue->pop,2)}}%)
                                </small>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap font-bold">
                                {{number_format($dashboardValue->newDeath_state->sum())}}
                                <small class="text-xs">
                                    (+{{round($dashboardValue->newDeath_state->sum() / $dashboardValue->pop,4)}}%)
                                </small>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap font-bold">
                                {{number_format($dashboardValue->newDeath_state_cum->sum())}}
                                <small class="text-xs">
                                    ({{round($dashboardValue->newDeath_state_cum->sum() / $dashboardValue->pop,2)}}%)
                                </small>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    {{--TODO State level Hospital and ICU--}}



@endsection

@section('footer')

@endsection
