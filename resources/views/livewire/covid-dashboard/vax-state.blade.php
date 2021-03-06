<section class="flex flex-col mt-2" id="vax-state" xmlns:wire="http://www.w3.org/1999/xhtml" wire:init="load"
    wire:loading.class="animate-pulse">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th colspan="6" class="py-2 border-b">
                                <a href="#vax-state">
                                    <h3 class="font-bold text-2xl uppercase">{{ __('Vaccination per States') }}</h3>
                                </a>
                                <div class="container flex flex-row-reverse">
                                    <label>
                                        <select class="bg-white ring ring-gray-200 mx-2 rounded"
                                            wire:model="popFilter">
                                            @foreach (\App\Models\Covid\Population::POP_FILTER as $key => $filter)
                                                <option value="{{ $key }}">
                                                    {{ __($key) }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </label>
                                    <span class="py-1">{{ __('Filter By') }} : </span>
                                </div>
                                <div class="w-full mx-auto">
                                    <table>
                                        <tr>
                                            <td class="w-1/4">
                                                <div class="relative">
                                                    <div class="overflow-hidden h-2 text-xs flex rounded bg-green-50">
                                                        <div style="width: 100%"
                                                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-300 rounded-full">
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="w-1/4 px-4">
                                                {{ __('Dose 1 Cumulative') }}
                                            </td>

                                            <td class="w-1/4">
                                                <div class="relative">
                                                    <div class="overflow-hidden h-2 text-xs flex rounded bg-green-50">
                                                        <div style="width: 100%"
                                                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500 rounded-full">
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="w-1/4 px-4">
                                                {{ __('Dose 2 Cumulative') }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <span class="inline font-normal text-xs float-right">
                                    {{ __('Updated at') }} {{ $timestamp }}
                                </span>
                            </th>
                        </tr>
                        <tr>
                            <th scope="col"
                                class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{ __('State') }}
                            </th>
                            <th scope="col"
                                class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{ __('New Dose 1 ') }}
                            </th>
                            <th scope="col"
                                class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{ __('New Dose 2 ') }}
                            </th>
                            <th scope="col"
                                class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{ __('Booster 1 ') }}
                            </th>
                            <th scope="col"
                                class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{ __('Booster 2 ') }}
                            </th>
                            <th scope="col"
                                class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{ __('Registered') }}
                            </th>

                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($daily_partial as $state => $dose1)
                            <tr class="@if ($loop->even) bg-gray-50 @endif">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                <a href="{{ route('public.pandemic.state', ['state' => $state]) }}"
                                                    class="underline cursor-pointer"
                                                    title="Click to see State view of {{ __($state) }}">
                                                    {{ __($state) }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ number_format($dose1) }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ number_format($daily_full[$state]) }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ number_format($daily_booster[$state]) }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ number_format($daily_booster2[$state]) }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ number_format($vaxReg[$state]) }}
                                    <small class="text-xs">
                                        {{ '(' . number_format($vaxRegPrecent[$state], 2) . '%)' }}
                                    </small>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex">
                                    <div class="ml-4 font-black ">
                                        {{ __('Total') }}
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap font-bold">
                                {{ number_format($daily_partial->sum()) }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap font-bold">
                                {{ number_format($daily_full->sum()) }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap font-bold">
                                {{ number_format($daily_booster->sum()) }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap font-bold">
                                {{ number_format($daily_booster2->sum()) }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap font-bold">
                                {{ number_format($vaxReg->sum()) }}
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="bg-white">
                            <td class="px-6 py-4 whitespace-nowrap text-left" colspan="6">
                                <div class="flex max-w-full">
                                    <div class="ml-4 ">
                                        <p class="text-sm font-medium text-gray-900  break-words ">
                                            <span class="text-black">*</span>
                                            {{ __('* note that this will not equal the number of people who were fully vaccinated on a given date when Malaysia begins using single-dose vaccines (e.g. CanSino)') }}
                                        </p>
                                        <p class="text-sm font-medium text-gray-900">
                                            <span class="text-black">*</span>
                                            {{ __('* Percentage is calculated by the population of the state.') }}
                                            {{ __('Some state are having 100% above vaccination rate is because the vaccine count Non Malaysian as well.') }}
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
