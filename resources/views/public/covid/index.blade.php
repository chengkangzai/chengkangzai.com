@extends('layouts.covid_app')

@section('content')
    @include('partial.rocket')
    <section class="mt-2 rounded-2xl dark:bg-white dark:text-black py-2 bg-gray-50 shadow">
        <h1 class="text-2xl sm:text-5xl font-bold">{{__('Covid-19 Malaysia Dashboard ')}}🇲🇾🇲🇾🇲🇾</h1>
        <div>
            <ul class="list-disc list-inside">
                <li>{{__('Data Source : ')}}
                    <a href="https://github.com/MoH-Malaysia/covid19-public/tree/main/epidemic" rel="noreferrer"
                       class="underline text-blue-500">
                        {{__('MOH Github')}}
                    </a>
                    ,
                    <a href="https://github.com/CITF-Malaysia/citf-public" rel="noreferrer"
                       class="underline text-blue-500">
                        {{__('CITF Github')}}
                    </a>
                </li>
                <li>
                    {{__('I am not a data analyst, so displayed data might not be accurate or suitable.')}}
                </li>
                <li>
                    {{__('Me and this project are not affiliated with any Government body')}}
                </li>
            </ul>
            <p class="font-bold"> {{__('* per population')}}</p>
        </div>
    </section>

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


            {{--TODO add admited ICU and total ICU--}}
            <div class="dark:bg-white bg-gray-50 py-10 rounded-xl shadow ">
                <h2 class="text-2xl">{{__('Tested')}}</h2>
                <p class="text-yellow-500 font-bold text-5xl">{{number_format($dashboardValue->new_test)}}</p>
                <span>
                    {{__('Positive Rate')}}
                    {{round(($dashboardValue->new_cases / $dashboardValue->new_test)*100,2)}}%
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
                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500 rounded-r-full">
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
                            style="width: {{round(($dashboardValue->vax_1st_cumulative/$dashboardValue->pop)*100,2)}}%"
                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-300 rounded-r-full">
                        </div>
                        <div
                            style="width: {{round(($dashboardValue->vax_2nd_cumulative/$dashboardValue->pop)*100,2)}}%"
                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500 rounded-r-full">
                        </div>
                    </div>
                </div>
            </div>

            <div class="dark:bg-white bg-gray-50 py-10 rounded-xl shadow ">
                <h2 class="text-2xl">{{__('Percentage of Vaccine Register')}}</h2>
                <p class="text-green-500  font-bold text-5xl">
                    {{number_format($dashboardValue->percentage_of_reg_malaysia).'%'}}
                    <span class="font-bold text-black text-xl">*</span>
                </p>
                <span>{{__('Registered :')}} {{number_format($dashboardValue->vax_reg_malaysia)}}</span>

            </div>
        </div>
    </section>

    <section class="flex flex-col mt-8">
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
    </section>

    <section class="flex flex-col mt-8">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th colspan="6" class="py-2 border-b">
                                <h3 class="font-bold text-2xl uppercase">{{__('Vaccination per States')}}</h3>
                                <div class="w-full mx-auto">
                                    <table>
                                        <tr>
                                            <td class="w-1/4">
                                                <div class="relative">
                                                    <div class="overflow-hidden h-3 text-xs flex rounded bg-green-50">
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
                                                    <div class="overflow-hidden h-3 text-xs flex rounded bg-green-50">
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
                                    class="inline font-normal text-xs float-right">{{__('Updated at')}} {{$dashboardValue->updated_at->vaxState}}</span>
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
                        @foreach($dashboardValue->vax_state_1st as $state => $dose1)
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
                                        (+{{ round(($dose1 / $dashboardValue->population_state[$state]*100),4)}}%)
                                    </small>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{number_format($dashboardValue->vax_state_1st_cum[$state])}}
                                    <small class="text-xs">
                                        {{ '('.round(($dashboardValue->vax_state_1st_cum[$state] / $dashboardValue->population_state[$state]*100),2).'%)'}}
                                    </small>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{number_format($dashboardValue->vax_state_2st[$state])}}
                                    <small class="text-xs">
                                        {{ '(+'.round(($dashboardValue->vax_state_2st[$state] / $dashboardValue->population_state[$state]*100),2).'%)'}}
                                    </small>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{number_format($dashboardValue->vax_state_2st_cum[$state])}}
                                    <small class="text-xs">
                                        {{ '('.round(($dashboardValue->vax_state_2st_cum[$state] / $dashboardValue->population_state[$state]*100),2).'%)'}}
                                    </small>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{number_format($dashboardValue->vax_state_cum[$state])}}
                                    <small class="text-xs">
                                        {{ '('.round(($dashboardValue->vax_state_cum[$state] / $dashboardValue->population_state[$state]*100),2).'%)'}}
                                    </small>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    <div class="relative">
                                        <div class="overflow-hidden h-3 text-xs flex rounded bg-green-50">
                                            <div
                                                style="width: {{round($dashboardValue->vax_state_1st_cum[$state] / $dashboardValue->population_state[$state]*100,2)}}%"
                                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-300 rounded-r-full">
                                            </div>
                                            <div
                                                style="width: {{round(($dashboardValue->vax_state_2st_cum[$state] / $dashboardValue->population_state[$state]*100),2)}}%"
                                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500 rounded-r-full">
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
                                {{number_format($dashboardValue->vax_state_1st->sum())}}
                                <small class="text-xs">
                                    {{'+('.round(($dashboardValue->vax_state_1st->sum() / $dashboardValue->pop)*100,4).'%)'}}
                                </small>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap font-bold">
                                {{number_format($dashboardValue->vax_state_1st_cum->sum())}}
                                <small class="text-xs">
                                    {{'('.round(($dashboardValue->vax_state_1st_cum->sum() / $dashboardValue->pop)*100,2).'%)'}}
                                </small>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap font-bold">
                                {{number_format($dashboardValue->vax_state_2st->sum())}}
                                <small class="text-xs">
                                    {{'+('.round(($dashboardValue->vax_state_2st->sum() / $dashboardValue->pop)*100,4).'%)'}}
                                </small>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap font-bold">
                                {{number_format($dashboardValue->vax_state_2st_cum->sum())}}
                                <small class="text-xs">
                                    {{'('.round(($dashboardValue->vax_state_2st_cum->sum() / $dashboardValue->pop)*100,2).'%)'}}
                                </small>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap font-bold">
                                {{number_format($dashboardValue->vax_state_cum->sum())}}
                            </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr class="bg-white">
                            <td class="px-6 py-4 whitespace-nowrap text-left" colspan="6">
                                <div class="flex">
                                    <div class="ml-4">
                                        <p class="text-sm font-medium text-gray-900">
                                            <span class="font-black text-black">*</span> {{__('per population')}}
                                        </p>
                                        <p class="text-sm font-medium text-gray-900">
                                            {{__('* note that this will not equal the number of people who were fully vaccinated on a given date when Malaysia begins using single-dose vaccines (e.g. CanSino)')}}
                                        </p>
                                        <p class="text-sm font-medium text-gray-900">
                                            {{__('* Percentage is calculated by the population of the state.')}}
                                            {{__('Non Malaysian such as foreign worker are not calculated in the population')}}
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

    <section class="flex flex-col mt-8">
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

    <div class="sm:py-10 rounded-2xl dark:bg-white dark:text-black my-4 bg-gray-50 shadow">
        <h2 class="text-3xl font-bold">About</h2>
        <ul class="list-disc list-inside">
            <li>
                {{__('Tested data Updated at')}}
                : {{$dashboardValue->updated_at->tested}}
            </li>
            <li>
                {{__('Cluster data Updated at')}}
                : {{\Carbon\Carbon::parse($dashboardValue->updated_at->cluster)->toDateString()}}
            </li>
            <li>
                {{__('Vaccination data Updated at')}}
                : {{\Carbon\Carbon::parse($dashboardValue->updated_at->vaxMalaysia)->toDateString()}}
            </li>
            <li>
                {{__('Vaccination registration data Updated at')}}
                : {{\Carbon\Carbon::parse($dashboardValue->updated_at->vaxMalaysia)->toDateString()}}
            </li>
        </ul>
        <div>
            <p><span
                    class="font-black text-black">***</span> {{__('Any feedback/recommendation/correction is welcomed, contact me by email or twitter')}}
            </p>
        </div>
    </div>

@endsection

@section('footer')
    @include('layouts.footer')
@endsection