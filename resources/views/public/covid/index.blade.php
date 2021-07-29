@extends('layouts.covid_app')

@section('content')
    @include('partial.rocket')
    <div class="mt-2 rounded-2xl dark:bg-white dark:text-black py-2  bg-gray-50 shadow">
        <h1 class="text-2xl sm:text-5xl font-bold">{{__('Covid-19 Malaysia Dashboard ')}}🇲🇾🇲🇾🇲🇾</h1>
        <div>
            <ul class="list-disc list-inside">
                <li>{{__('Data Source : ')}}
                    <a href="https://github.com/MoH-Malaysia/covid19-public/tree/main/epidemic" rel="noreferrer"
                       class="underline text-blue-500">
                        {{__('MOH Github')}}
                    </a>
                </li>
                <li>
                    {{__('I am not a data analyst, so displayed data might not be accurate or suitable.')}}
                </li>
                <li>
                    {{__('Me and this project are not affiliated with any Government body')}}
                </li>
                <li>
                    {{__('New Case, Deaths, Cumulative Case and Death data Updated at')}}
                    : {{$dashboardValue->updated_at->caseMalaysia}}
                </li>
                <li>
                    {{__('Tested data Updated at')}}
                    : {{$dashboardValue->updated_at->tested}}
                </li>
                <li>
                    {{__('Cluster data Updated at')}}
                    : {{\Carbon\Carbon::parse($dashboardValue->updated_at->cluster)->toDateString()}}
                </li>
            </ul>
            <p class="font-bold"> {{__('* per population')}}</p>
        </div>
    </div>
    <div class="mt-2 rounded-3xl">
        <div class="sm:grid sm:grid-cols-3 sm:grid-rows-2 sm:gap-2 space-y-2 sm:space-y-0">
            <div class="dark:bg-white bg-gray-50 py-10 rounded-xl shadow ">
                <h2 class="text-2xl">{{__('New Case')}}</h2>
                <p class="text-red-500  font-bold text-5xl">{{number_format($dashboardValue->new_cases)}}</p>
                <span>
                    (+{{round(($dashboardValue->new_cases / $dashboardValue->pop)*100,4)}}%)
                    <span class="font-bold">*</span>
                </span>
            </div>

            <div class="dark:bg-white bg-gray-50 py-10 rounded-xl shadow ">
                <h2 class="text-2xl">{{__('Deaths')}}</h2>
                <p class="text-gray-500  font-bold text-5xl">{{number_format($dashboardValue->new_death)}}</p>
                <span>
                    (+{{round(($dashboardValue->new_death / $dashboardValue->pop)*100,4)}}%)
                    <span class="font-bold">*</span>
                </span>
            </div>
            {{--TODO add admited ICU and total ICU--}}
            <div class="dark:bg-white bg-gray-50 py-10 rounded-xl shadow ">
                <h2 class="text-2xl">{{__('Tested')}}</h2>
                <p class="text-yellow-500 font-bold text-5xl">{{number_format($dashboardValue->new_test)}}</p>
                <span class="font-bold">
                    {{__('Positive Rate')}}
                    {{round(($dashboardValue->new_cases / $dashboardValue->new_test)*100,2)}}%
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
                <h2 class="text-2xl">{{__('Cumulative Death')}}</h2>
                <p class="text-gray-500  font-bold text-5xl">{{number_format($dashboardValue->new_death_cum)}}</p>
                <span>
                    ({{round(($dashboardValue->new_death_cum/$dashboardValue->pop)*100,4)}}%)
                    <span class="font-bold">*</span>
                </span>
            </div>
            {{--TODO add admited Ventilator and total Ventilator--}}
            <div class="dark:bg-white bg-gray-50 py-10 rounded-xl shadow ">
                <h2 class="text-2xl">{{__('Active Cluster In Malaysia')}}</h2>
                <p class="text-yellow-500 font-bold text-5xl">{{number_format($dashboardValue->active_cluster_count)}}</p>
            </div>
        </div>
    </div>

    <div class="flex flex-col mt-8">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th colspan="5" class="py-2 border-b">
                                <h3 class="font-bold text-2xl uppercase">{{__('Cases per States')}}</h3>
                                <span
                                    class="inline font-normal text-xs float-right">{{__('Updated at')}} {{$dashboardValue->updated_at->caseState}}</span>
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
                                                {{__($state)}}
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
                                        {{ '('.round(($dashboardValue->new_cases_state_cum[$state] / $dashboardValue->population_state[$state]*100),2).'%)'}}
                                    </small>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{number_format($dashboardValue->newDeath_state[$state])}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{number_format($dashboardValue->newDeath_state_cum[$state])}}
                                    <small class="text-xs">
                                        {{ '('.round(($dashboardValue->newDeath_state_cum[$state] / $dashboardValue->population_state[$state]*100),2).'%)'}}
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

    <div class="flex flex-col mt-8">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th colspan="5" class="py-2 border-b">
                                <h3 class="font-bold text-2xl uppercase">{{__('Healthcare per States')}}</h3>
                                <span
                                    class="inline font-normal text-xs float-right">{{__('Updated at')}} {{$dashboardValue->updated_at->ICU}}</span>
                            </th>
                        </tr>
                        <tr>
                            <th scope="col"
                                class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{__('State')}}
                            </th>
                            <th scope="col"
                                class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{__('ICU (Covid)')}}
                            </th>
                            <th scope="col"
                                class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{__('Hospital (Covid)')}}
                            </th>
                            <th scope="col"
                                class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{__('PKRC (Covid)')}} <span class="font-black text-black">*</span>
                            </th>
                            <th scope="col"
                                class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{__('Total')}}
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
                                    {{number_format($ICU)}}
                                    <small class="text-xs">
                                    </small>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{number_format($dashboardValue->hospital[$state])}}
                                    <small class="text-xs">
                                    </small>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{number_format($dashboardValue->PKRC[$state] ?? 0) ?? "N/A"}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{number_format($ICU + $dashboardValue->hospital[$state] +($dashboardValue->PKRC[$state] ?? 0))}}
                                    <small class="text-xs">
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
                                        <div class="text-sm font-medium text-gray-900">
                                            <span class="font-black text-black">*</span>
                                            {{__('PKRC : COVID-19 Quarantine and Treatment Centre')}}
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

<div class="sm:py-10">

</div>

@endsection

@section('footer')
    @include('layouts.footer')
@endsection
