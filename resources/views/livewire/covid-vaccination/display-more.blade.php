@php
    /* @var App\Models\Covid\VaxMalaysia $vax */
    /* @var App\Models\Covid\VaxRegMalaysia $reg */
@endphp

<div wire:init="load" wire:loading.class="animate-pulse">
    <div class="flex flex-col mt-2" id="vax-data">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th colspan="13" class="py-2 border-b bg-white">
                                <a href="#vax-data">
                                    <h3 class="font-bold text-2xl uppercase">{{__('Vaccination Data')}}</h3>
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="13" class="py-2">
                                <div class="sm:flex sm:flex-row-reverse">
                                    <label>
                                        <span
                                            class="inline-flex text-sm font-medium leading-5 text-gray-700">{{__('Filter by')}}</span>
                                        <select wire:model="vaxDaysToShow" class="rounded-lg">
                                            <option value="7">{{__('Last 7 days')}}</option>
                                            <option value="14">{{__('Last 14 days')}}</option>
                                            <option value="30">{{__('Last 30 days')}}</option>
                                            <option value="60">{{__('Last 60 days')}}</option>
                                            <option value="90">{{__('Last 90 days')}}</option>
                                            <option value="180">{{__('Last 180 days')}}</option>
                                        </select>
                                    </label>
                                </div>
                            </th>
                        </tr>
                        <tr class="text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <th rowspan="2" class="py-4 border">{{__('Date')}}</th>
                            <th colspan="3" class="py-4 border bg-white">{{__('Daily')}}</th>
                            <th colspan="3" class="py-4 border bg-white">{{__('Cumulative')}}</th>
                            <th colspan="3" class="py-4 border bg-white">{{__('Vaccination')}}</th>
                            <th rowspan="2" class="py-4 border">{{__('Pending')}}</th>
                        </tr>
                        <tr class="border text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <th class="py-4">{{__('Partial')}}</th>
                            <th class="py-4">{{__('Full')}}</th>
                            <th class="py-4 border-r">{{__('Booster')}}</th>
                            <th class="py-4">{{__('Partial')}}</th>
                            <th class="py-4">{{__('Full')}}</th>
                            <th class="py-4 border-r">{{__('Booster')}}</th>
                            <th class="py-4">{{__('Partial')}}</th>
                            <th class="py-4">{{__('Full')}}</th>
                            <th class="py-4 border-r">{{__('Booster')}}</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($vaxs as $vax)
                            <tr class="@if($loop->even) bg-gray-50 @endif">
                                <td class="py-4 whitespace-nowrap border">
                                    {{$vax->date->format('d M Y')}}
                                </td>
                                <td class="py-4 whitespace-nowrap space-y-1">
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                        A : {{number_format($vax->daily_adult)}}
                                    </span>
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        T : {{number_format($vax->daily_partial_adol)}}
                                    </span>
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs font-semibold rounded-full bg-indigo-100 text-indigo-800">
                                        C : {{number_format($vax->daily_partial_child)}}
                                    </span>
                                </td>
                                <td class="py-4 whitespace-nowrap space-y-1">
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        A : {{number_format($vax->daily_full_adult)}}
                                    </span>
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        T : {{number_format($vax->daily_full_adol)}}
                                    </span>
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs leading-5 font-semibold rounded-full bg-indigo-100 text-indigo-800">
                                        C : {{number_format($vax->daily_full_child)}}
                                    </span>
                                </td>
                                <td class="py-4 whitespace-nowrap space-y-1 border-r">
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        {{__("All")}} : {{number_format($vax->daily_booster)}}
                                    </span>
                                </td>
                                <td class="py-4 whitespace-nowrap space-y-1">
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        A : {{number_format($vax->cumul_partial_adult)}}
                                    </span>
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        T : {{number_format($vax->cumul_partial_adol)}}
                                    </span>
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs leading-5 font-semibold rounded-full bg-indigo-100 text-indigo-800">
                                        C : {{number_format($vax->cumul_partial_child)}}
                                    </span>
                                </td>
                                <td class="py-4 whitespace-nowrap space-y-1">
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        A : {{number_format($vax->cumul_full_adult)}}
                                    </span>
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        T : {{number_format($vax->cumul_full_adol)}}
                                    </span>
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs leading-5 font-semibold rounded-full bg-indigo-100 text-indigo-800">
                                        C : {{number_format($vax->cumul_full_child)}}
                                    </span>
                                </td>
                                <td class="py-4 whitespace-nowrap space-y-1 border-r">
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        {{__('All')}} : {{number_format($vax->cumul_booster)}}
                                    </span>
                                </td>
                                <td class="py-4 whitespace-nowrap space-y-1">
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Pf : {{number_format($vax->pfizer1)}}
                                    </span>
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        Sv : {{number_format($vax->sinovac1)}}
                                    </span>
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs leading-5 font-semibold rounded-full bg-violet-100 text-violet-800">
                                        Az : {{number_format($vax->astra1)}}
                                    </span>
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs leading-5 font-semibold rounded-full bg-indigo-100 text-indigo-800">
                                        Sp : {{number_format($vax->sinopharm1)}}
                                    </span>
                                </td>
                                <td class="py-4 whitespace-nowrap space-y-1">
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Pf : {{number_format($vax->pfizer2)}}
                                    </span>
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        Sv : {{number_format($vax->sinovac2)}}
                                    </span>
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs leading-5 font-semibold rounded-full bg-violet-100 text-violet-800">
                                        Az : {{number_format($vax->astra2)}}
                                    </span>
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs leading-5 font-semibold rounded-full bg-indigo-100 text-indigo-800">
                                        Sp : {{number_format($vax->sinopharm2)}}
                                    </span>
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs leading-5 font-semibold rounded-full bg-pink-100 text-pink-800">
                                        Cs : {{number_format($vax->cansino)}}
                                    </span>
                                </td>
                                <td class="py-4 whitespace-nowrap space-y-1 border-r">
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Pf : {{number_format($vax->pfizer3)}}
                                    </span>
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        Sv : {{number_format($vax->sinovac3)}}
                                    </span>
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs leading-5 font-semibold rounded-full bg-violet-100 text-violet-800">
                                        Az : {{number_format($vax->astra3)}}
                                    </span>
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs leading-5 font-semibold rounded-full bg-indigo-100 text-indigo-800">
                                        Sp : {{number_format($vax->sinopharm3)}}
                                    </span>
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs leading-5 font-semibold rounded-full bg-pink-100 text-pink-800">
                                        Cs : {{number_format($vax->cansino3)}}
                                    </span>
                                </td>
                                <td class="py-4 whitespace-nowrap space-y-1">
                                     <span
                                         class="px-2 flex w-min mx-auto text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        {{__('Partial')}} : {{number_format($vax->pending1)}}
                                    </span>
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        {{__('Full')}} : {{number_format($vax->pending2)}}
                                    </span>
                                    <span
                                        class="px-2 flex w-min mx-auto text-xs leading-5 font-semibold rounded-full bg-indigo-100 text-indigo-800">
                                        {{__('Booster')}} : {{number_format($vax->pending3)}}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td class="border font-bold">{{__("Total")}}</td>
                            <td class="py-4 whitespace-nowrap space-y-1">
                            <span
                                class="px-2 flex w-min mx-auto text-xs font-bold rounded-full bg-green-100 text-green-800">
                                A : {{number_format($vaxs->sum('daily_adult'))}}
                            </span>
                                <span
                                    class="px-2 flex w-min mx-auto text-xs font-bold rounded-full bg-yellow-100 text-yellow-800">
                                T : {{number_format($vaxs->sum('daily_partial_adol'))}}
                            </span>
                                <span
                                    class="px-2 flex w-min mx-auto text-xs font-bold rounded-full bg-indigo-100 text-indigo-800">
                                C : {{number_format($vaxs->sum('daily_partial_child'))}}
                            </span>
                            </td>
                            <td class="py-4 whitespace-nowrap space-y-1">
                            <span
                                class="px-2 flex w-min mx-auto text-xs leading-5 font-bold rounded-full bg-green-100 text-green-800">
                                A : {{number_format($vaxs->sum('daily_full_adult'))}}
                            </span>
                                <span
                                    class="px-2 flex w-min mx-auto text-xs leading-5 font-bold rounded-full bg-yellow-100 text-yellow-800">
                                T : {{number_format($vaxs->sum('daily_full_adol'))}}
                            </span>
                                <span
                                    class="px-2 flex w-min mx-auto text-xs leading-5 font-bold rounded-full bg-indigo-100 text-indigo-800">
                                C : {{number_format($vaxs->sum('daily_full_child'))}}
                            </span>
                            </td>
                            <td class="py-4 whitespace-nowrap space-y-1 border-r">
                            <span
                                class="px-2 flex w-min mx-auto text-xs leading-5 font-bold rounded-full bg-green-100 text-green-800">
                                {{__('All')}} : {{number_format($vaxs->sum('daily_booster'))}}
                            </span>
                            </td>
                            <td class="py-4 whitespace-nowrap">
                            <span
                                class="px-2 flex w-min mx-auto text-xs leading-5 font-bold rounded-full bg-green-100 text-green-800">
                                A : {{number_format($vaxs->sum('cumul_partial_adult'))}}
                            </span>
                                <span
                                    class="px-2 flex w-min mx-auto text-xs leading-5 font-bold rounded-full bg-yellow-100 text-yellow-800">
                                T : {{number_format($vaxs->sum('cumul_partial_adol'))}}
                            </span>
                                <span
                                    class="px-2 flex w-min mx-auto text-xs leading-5 font-bold rounded-full bg-indigo-100 text-indigo-800">
                                C : {{number_format($vaxs->sum('cumul_partial_child'))}}
                            </span>
                            </td>
                            <td class="py-4 whitespace-nowrap">
                            <span
                                class="px-2 flex w-min mx-auto text-xs leading-5 font-bold rounded-full bg-green-100 text-green-800">
                                A : {{number_format($vaxs->sum('cumul_full_adult'))}}
                            </span>
                                <span
                                    class="px-2 flex w-min mx-auto text-xs leading-5 font-bold rounded-full bg-yellow-100 text-yellow-800">
                                T : {{number_format($vaxs->sum('cumul_full_adol'))}}
                            </span>
                                <span
                                    class="px-2 flex w-min mx-auto text-xs leading-5 font-bold rounded-full bg-indigo-100 text-indigo-800">
                                C : {{number_format($vaxs->sum('cumul_full_child'))}}
                            </span>
                            </td>
                            <td class="py-4 whitespace-nowrap space-y-1 border-r">
                                <span
                                    class="px-2 flex w-min mx-auto text-xs leading-5 font-bold rounded-full bg-green-100 text-green-800">
                                    All : {{number_format($vaxs->sum('cumul_booster'))}}
                                </span>
                            </td>
                            <td class="py-4 whitespace-nowrap space-y-1">
                                <span
                                    class="px-2 flex w-min mx-auto text-xs leading-5 font-bold rounded-full bg-green-100 text-green-800">
                                    Pf : {{number_format($vaxs->sum('pfizer1'))}}
                                </span>
                                <span
                                    class="px-2 flex w-min mx-auto text-xs leading-5 font-bold rounded-full bg-yellow-100 text-yellow-800">
                                    Sv : {{number_format($vaxs->sum('sinovac1'))}}
                                </span>
                                <span
                                    class="px-2 flex w-min mx-auto text-xs leading-5 font-bold rounded-full bg-violet-100 text-violet-800">
                                    Az : {{number_format($vaxs->sum('astra1'))}}
                                </span>
                                <span
                                    class="px-2 flex w-min mx-auto text-xs leading-5 font-bold rounded-full bg-indigo-100 text-indigo-800">
                                    Sp : {{number_format($vaxs->sum('sinopharm1'))}}
                                </span>
                            </td>
                            <td class="py-4 whitespace-nowrap space-y-1">
                                <span
                                    class="px-2 flex w-min mx-auto text-xs leading-5 font-bold rounded-full bg-green-100 text-green-800">
                                Pf : {{number_format($vaxs->sum('pfizer2'))}}
                                </span>
                                <span
                                    class="px-2 flex w-min mx-auto text-xs leading-5 font-bold rounded-full bg-yellow-100 text-yellow-800">
                                Sv : {{number_format($vaxs->sum('sinovac2'))}}
                                </span>
                                <span
                                    class="px-2 flex w-min mx-auto text-xs leading-5 font-bold rounded-full bg-violet-100 text-violet-800">
                                Az : {{number_format($vaxs->sum('astra2'))}}
                                </span>
                                <span
                                    class="px-2 flex w-min mx-auto text-xs leading-5 font-bold rounded-full bg-indigo-100 text-indigo-800">
                                Sp : {{number_format($vaxs->sum('sinopharm2'))}}
                                </span>
                                <span
                                    class="px-2 flex w-min mx-auto text-xs leading-5 font-bold rounded-full bg-pink-100 text-pink-800">
                                    Cs : {{number_format($vaxs->sum('cansino'))}}
                                </span>
                            </td>
                            <td class="py-4 whitespace-nowrap space-y-1 border-r">
                                <span
                                    class="px-2 flex w-min mx-auto text-xs leading-5 font-bold rounded-full bg-green-100 text-green-800">
                                Pf : {{number_format($vaxs->sum('pfizer3'))}}
                                </span>
                                <span
                                    class="px-2 flex w-min mx-auto text-xs leading-5 font-bold rounded-full bg-yellow-100 text-yellow-800">
                                Sv : {{number_format($vaxs->sum('sinovac3'))}}
                                </span>
                                <span
                                    class="px-2 flex w-min mx-auto text-xs leading-5 font-bold rounded-full bg-violet-100 text-violet-800">
                                Az : {{number_format($vaxs->sum('astra3'))}}
                                </span>
                                <span
                                    class="px-2 flex w-min mx-auto text-xs leading-5 font-bold rounded-full bg-indigo-100 text-indigo-800">
                                Sp : {{number_format($vaxs->sum('sinopharm3'))}}
                                </span>
                                <span
                                    class="px-2 flex w-min mx-auto text-xs leading-5 font-bold rounded-full bg-pink-100 text-pink-800">
                                Cs : {{number_format($vaxs->sum('cansino3'))}}
                                </span>
                            </td>
                            <td class="py-4 whitespace-nowrap space-y-1">
                             <span
                                 class="px-2 flex w-min mx-auto text-xs leading-5 font-bold rounded-full bg-green-100 text-green-800">
                                 {{__('Partial')}} : {{number_format($vaxs->sum('pending1'))}}
                            </span>
                                <span
                                    class="px-2 flex w-min mx-auto text-xs leading-5 font-bold rounded-full bg-yellow-100 text-yellow-800">
                                {{__('Full')}} : {{number_format($vaxs->sum('pending2'))}}
                            </span>
                                <span
                                    class="px-2 flex w-min mx-auto text-xs leading-5 font-bold rounded-full bg-indigo-100 text-indigo-800">
                                {{__('Booster')}} : {{number_format($vaxs->sum('pending3'))}}
                            </span>
                            </td>
                        </tr>
                        <tfoot>
                        <tr class="bg-white">
                            <td></td>
                            <td class="px-6 py-4 whitespace-nowrap text-left border" colspan="6">
                                <p class="inline text-sm font-medium text-gray-900 break-words">
                                    <span class="text-black">* </span>{{__('A: Adult')}}
                                </p>
                                <p class="inline text-sm font-medium text-gray-900 break-words">
                                    {{__('T: Teenager')}}
                                </p>
                                <p class="inline text-sm font-medium text-gray-900 break-words">
                                    {{__('C: Child')}}
                                </p>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left" colspan="3">
                                <p class="inline text-sm font-medium text-gray-900 break-words">
                                    <span class="text-black">* </span>{{__('Pf: Pfizer')}}
                                </p>
                                <p class="inline text-sm font-medium text-gray-900 break-words">
                                    {{__('Sp: Sinopharm')}}
                                </p>
                                <p class="inline text-sm font-medium text-gray-900 break-words">
                                    {{__('Az: Astrazeneca')}}
                                </p>
                                <p class="inline text-sm font-medium text-gray-900 break-words">
                                    {{__('Sv: Sinovac')}}
                                </p>
                                <p class="inline text-sm font-medium text-gray-900 break-words">
                                    {{__('Cs: Cansino')}}
                                </p>
                            </td>
                            <td colspan="3">

                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col mt-2" id="vax-reg-data">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th colspan="13" class="py-2 border-b">
                                <a href="#vax-reg-data">
                                    <h3 class="font-bold text-2xl uppercase">{{__('Vaccination Registration Data')}}</h3>
                                </a>

                            </th>
                        </tr>
                        <tr>
                            <th colspan="13" class="py-2 bg-white">
                                <div class="sm:flex sm:flex-row-reverse">
                                    <label>
                                        <span
                                            class="inline-flex text-sm font-medium leading-5 text-gray-700">{{__('Filter by')}}</span>
                                        <select wire:model="regDaysToShow" class="rounded-lg">
                                            <option value="7">{{__('Last 7 days')}}</option>
                                            <option value="14">{{__('Last 14 days')}}</option>
                                            <option value="30">{{__('Last 30 days')}}</option>
                                            <option value="60">{{__('Last 60 days')}}</option>
                                            <option value="90">{{__('Last 90 days')}}</option>
                                            <option value="180">{{__('Last 180 days')}}</option>
                                        </select>
                                    </label>
                                </div>
                            </th>
                        </tr>
                        <tr class="border-t space-x-2 text-center text-xs font-medium uppercase text-gray-500">
                            <th class="py-4 border">{{__('Date')}}</th>
                            <th class="py-4">{{__('Total')}}</th>
                            <th class="py-4">{{__('Phase 2')}}</th>
                            <th class="py-4">{{__('MySej')}}</th>
                            <th class="py-4">{{__('Call')}}</th>
                            <th class="py-4">{{__('Web')}}</th>
                            <th class="py-4">{{__('Children')}}</th>
                            <th class="py-4">{{__('Elderly')}}</th>
                            <th class="py-4">{{__('Comorbidity')}}</th>
                            <th class="py-4">{{__('OKU')}}</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($regs as $reg)
                            <tr class="@if($loop->even) bg-gray-50 @endif">
                                <td class="py-4 whitespace-nowrap border">{{$reg->date->format('d M Y')}}</td>
                                <td class="py-4 whitespace-nowrap">{{number_format($reg->total)}}</td>
                                <td class="py-4 whitespace-nowrap">{{number_format($reg->phase2)}}</td>
                                <td class="py-4 whitespace-nowrap">{{number_format($reg->mysj)}}</td>
                                <td class="py-4 whitespace-nowrap">{{number_format($reg->call)}}</td>
                                <td class="py-4 whitespace-nowrap">{{number_format($reg->web)}}</td>
                                <td class="py-4 whitespace-nowrap">{{number_format($reg->children)}}</td>
                                <td class="py-4 whitespace-nowrap">{{number_format($reg->elderly)}}</td>
                                <td class="py-4 whitespace-nowrap">{{number_format($reg->comorb)}}</td>
                                <td class="py-4 whitespace-nowrap ">{{number_format($reg->oku)}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
