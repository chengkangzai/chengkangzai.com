<div wire:init="load" wire:loading.class="animate-pulse">
    <div class="flex flex-col mt-2" id="high-low-vax-taken-weekly">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th colspan="15" class="py-2 border-b bg-white">
                                    <a href="#high-low-vax-taken-weekly">
                                        <h3 class="font-bold text-2xl uppercase">
                                            {{ __('total number of vaccination by vaccine type') }}</h3>
                                    </a>
                                </th>
                            </tr>
                            <tr>
                                <th colspan="15" class="py-2">
                                    <div class="sm:flex sm:flex-row-reverse">
                                        <label>
                                            <span class="inline-flex text-sm font-medium leading-5 text-gray-700">
                                                {{ __('Filter by') }}
                                            </span>
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
                                <th colspan="4" class="py-4 border bg-white">{{ __('Partial') }}</th>
                                <th colspan="5" class="py-4 border bg-white">{{ __('Full') }}</th>
                                <th colspan="5" class="py-4 border bg-white">{{ __('Booster') }}</th>
                            </tr>
                            <tr class="border text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <th class="py-4">{{ __('Pf') }}</th>
                                <th class="py-4">{{ __('Sv') }}</th>
                                <th class="py-4">{{ __('Az') }}</th>
                                <th class="py-4 border-r">{{ __('Sp') }}</th>
                                <th class="py-4">{{ __('Pf') }}</th>
                                <th class="py-4">{{ __('Sv') }}</th>
                                <th class="py-4">{{ __('Az') }}</th>
                                <th class="py-4">{{ __('Sp') }}</th>
                                <th class="py-4 border-r">{{ __('Cs') }}</th>
                                <th class="py-4">{{ __('Pf') }}</th>
                                <th class="py-4">{{ __('Sv') }}</th>
                                <th class="py-4">{{ __('Az') }}</th>
                                <th class="py-4">{{ __('Sp') }}</th>
                                <th class="py-4 border-r">{{ __('Cs') }}</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($vaxs as $vax)
                                <tr class="@if ($loop->even) bg-gray-50 @endif">
                                    <td class="py-4 whitespace-nowrap border">
                                        {{ $vax['weekYear'] }}
                                    </td>
                                    <td class="py-4 space-y-1">{{ number_format($vax['pfizer1']) }}</td>
                                    <td class="py-4 space-y-1">{{ number_format($vax['sinovac1']) }}</td>
                                    <td class="py-4 space-y-1">{{ number_format($vax['astra1']) }}</td>
                                    <td class="py-4 space-y-1 border-r">{{ number_format($vax['sinopharm1']) }}</td>

                                    <td class="py-4 space-y-1">{{ number_format($vax['pfizer2']) }}</td>
                                    <td class="py-4 space-y-1">{{ number_format($vax['sinovac2']) }}</td>
                                    <td class="py-4 space-y-1">{{ number_format($vax['astra2']) }}</td>
                                    <td class="py-4 space-y-1">{{ number_format($vax['sinopharm2']) }}</td>
                                    <td class="py-4 space-y-1 border-r">{{ number_format($vax['cansino']) }}</td>

                                    <td class="py-4 space-y-1">{{ number_format($vax['pfizer3']) }}</td>
                                    <td class="py-4 space-y-1">{{ number_format($vax['sinovac3']) }}</td>
                                    <td class="py-4 space-y-1">{{ number_format($vax['astra3']) }}</td>
                                    <td class="py-4 space-y-1">{{ number_format($vax['sinopharm3']) }}</td>
                                    <td class="py-4 space-y-1">{{ number_format($vax['cansino3']) }}</td>
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
