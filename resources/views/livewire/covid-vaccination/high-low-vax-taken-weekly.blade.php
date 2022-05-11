<div wire:init="load" wire:loading.class="animate-pulse">
    <div class="flex flex-col mt-2" id="high-low-vax-taken-weekly">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th colspan="13" class="py-2 border-b bg-white">
                                    <a href="#high-low-vax-taken-weekly">
                                        <h3 class="font-bold text-2xl uppercase">
                                            {{ __('Highest and Lowest Vaccination taken weekly') }}</h3>
                                    </a>
                                </th>
                            </tr>
                            <tr>
                                <th colspan="13" class="py-2">
                                    <div class="sm:flex sm:flex-row-reverse">
                                        <label>
                                            <span
                                                class="inline-flex text-sm font-medium leading-5 text-gray-700">{{ __('Filter by') }}</span>
                                            <select wire:model="weekToLoad" class="rounded-lg">
                                                <option value="7">{{ __('Last 7 weeks') }}</option>
                                                <option value="14">{{ __('Last 14 weeks') }}</option>
                                                <option value="30">{{ __('Last 30 weeks') }}</option>
                                                <option value="{{ $weekToLoadMax }}">{{ __('Max Weeks : ') }}
                                                    {{ $weekToLoadMax }}</option>
                                            </select>
                                        </label>
                                    </div>
                                </th>
                            </tr>
                            <tr class="text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <th rowspan="2" class="py-4 border">{{ __('Week of / Year') }}</th>
                                <th colspan="3" class="py-4 border bg-white">{{ __('Partial') }}</th>
                                <th colspan="3" class="py-4 border bg-white">{{ __('Full') }}</th>
                                <th colspan="3" class="py-4 border bg-white">{{ __('Booster') }}</th>
                            </tr>
                            <tr class="border text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <th class="py-4">{{ __('Vax Type') }}</th>
                                <th class="py-4">{{ __('Volume') }}</th>
                                <th class="py-4 border-r">{{ __('Date') }}</th>
                                <th class="py-4">{{ __('Vax Type') }}</th>
                                <th class="py-4">{{ __('Volume') }}</th>
                                <th class="py-4 border-r">{{ __('Date') }}</th>
                                <th class="py-4">{{ __('Vax Type') }}</th>
                                <th class="py-4">{{ __('Volume') }}</th>
                                <th class="py-4 border-r">{{ __('Date') }}</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($vaxs as $week => $vax)
                                <tr class="@if ($loop->even) bg-gray-50 @endif">
                                    <td class="py-4 whitespace-nowrap border">
                                        {{ $week }}
                                    </td>
                                    <td class="py-4 whitespace-nowrap space-y-1">
                                        <span
                                            class="px-2 flex w-min mx-auto text-xs font-semibold rounded-full bg-pink-100 text-pink-800">
                                            {{ $vax['min1']['name'] }}
                                        </span>
                                        <span
                                            class="px-2 flex w-min mx-auto text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                            {{ $vax['max1']['name'] }}
                                        </span>
                                    </td>
                                    <td class="py-4 whitespace-nowrap space-y-1">
                                        <p>{{ number_format($vax['min1']['value']) }}</p>
                                        <p>{{ number_format($vax['max1']['value']) }}</p>
                                    </td>
                                    <td class="py-4 whitespace-nowrap space-y-1 border-r">
                                        <p>{{ $vax['min1']['date'] }}</p>
                                        <p>{{ $vax['max1']['date'] }}</p>
                                    </td>
                                    <td class="py-4 whitespace-nowrap space-y-1">
                                        <span
                                            class="px-2 flex w-min mx-auto text-xs font-semibold rounded-full bg-pink-100 text-pink-800">
                                            {{ $vax['min2']['name'] }}
                                        </span>
                                        <span
                                            class="px-2 flex w-min mx-auto text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                            {{ $vax['max2']['name'] }}
                                        </span>
                                    </td>
                                    <td class="py-4 whitespace-nowrap space-y-1">
                                        <p>{{ number_format($vax['min2']['value']) }}</p>
                                        <p>{{ number_format($vax['max2']['value']) }}</p>
                                    </td>
                                    <td class="py-4 whitespace-nowrap space-y-1 border-r">
                                        <p>{{ $vax['min2']['date'] }}</p>
                                        <p>{{ $vax['max2']['date'] }}</p>
                                    </td>
                                    <td class="py-4 whitespace-nowrap space-y-1">
                                        <span
                                            class="px-2 flex w-min mx-auto text-xs font-semibold rounded-full bg-pink-100 text-pink-800">
                                            {{ $vax['min3']['name'] }}
                                        </span>
                                        <span
                                            class="px-2 flex w-min mx-auto text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                            {{ $vax['max3']['name'] }}
                                        </span>
                                    </td>
                                    <td class="py-4 whitespace-nowrap space-y-1">
                                        <p>{{ number_format($vax['min3']['value']) }}</p>
                                        <p>{{ number_format($vax['max3']['value']) }}</p>
                                    </td>
                                    <td class="py-4 whitespace-nowrap space-y-1 border-r">
                                        <p>{{ $vax['min3']['date'] }}</p>
                                        <p>{{ $vax['max3']['date'] }}</p>
                                    </td>
                                </tr>
                            @endforeach
                        <tfoot>
                            <tr class="bg-white">
                                <td class="border-r"></td>
                                <td class="px-6 py-4 whitespace-nowrap text-left" colspan="6">
                                    <p class="inline text-sm font-medium text-gray-900 break-words">
                                        <span class="text-black">* </span>{{ __('Pf: Pfizer') }}
                                    </p>
                                    <p class="inline text-sm font-medium text-gray-900 break-words">
                                        {{ __('Sp: Sinopharm') }}
                                    </p>
                                    <p class="inline text-sm font-medium text-gray-900 break-words">
                                        {{ __('Az: Astrazeneca') }}
                                    </p>
                                    <p class="inline text-sm font-medium text-gray-900 break-words">
                                        {{ __('Sv: Sinovac') }}
                                    </p>
                                    <p class="inline text-sm font-medium text-gray-900 break-words">
                                        {{ __('Cs: Cansino') }}
                                    </p>
                                </td>
                                <td colspan="8">

                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>
