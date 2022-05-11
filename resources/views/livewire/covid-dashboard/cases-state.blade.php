<section class="flex flex-col mt-2" id="case-state" wire:init="load" xmlns:wire="" wire:loading.class="animate-pulse">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th colspan="7" class="py-2 border-b">
                                <a href="#case-state">
                                    <h3 class="font-bold text-2xl uppercase">{{ __('Cases per States') }}</h3>
                                </a>
                                <span class="inline font-normal text-xs float-right">
                                    {{ __('Updated at') }} {{ $updated_at }}
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
                                {{ __('New Case') }}
                            </th>
                            <th scope="col"
                                class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{ __('Cumulative Case') }} ({{ __('% per population') }})
                            </th>
                            <th scope="col"
                                class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{ __('Active Case') }}
                            </th>
                            <th scope="col"
                                class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{ __('New Death') }}
                            </th>
                            <th scope="col"
                                class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{ __('Cumulative Death') }} ({{ __('Fatality rate') }})
                            </th>
                            <th scope="col"
                                class="py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{ __('Tested') }}* ({{ __('Positive Rate') }})
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($newCase as $state => $n)
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
                                    {{ number_format($newCase[$state]) }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ number_format($cumCase[$state]) }}
                                    <small class="text-xs">
                                        {{ '(' . number_format($cumCasePercentage[$state], 2) . '%)' }}
                                    </small>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ number_format($activeCase[$state]) }}
                                    <small class="text-xs">
                                        {{ '(' . number_format($activeCasePercentage[$state], 2) . '%)' }}
                                    </small>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ number_format($newDeath[$state]) }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ number_format($cumDeath[$state]) }}
                                    <small class="text-xs">
                                        {{ '(' . number_format($fatalityRate[$state], 2) . '%)' }}
                                    </small>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ number_format($tests[$state]) }}
                                    <small
                                        class="text-xs @if ($positiveRate[$state] > 10) text-red-700 @elseif($positiveRate[$state] > 5) text-yellow-700 @endif">
                                        {{ '(' . number_format($positiveRate[$state], 2) . '%)' }}
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
                                {{ number_format($newCase->sum()) }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap font-bold">
                                {{ number_format($cumCase->sum()) }}
                                <small class="text-xs">
                                    {{ '(' . number_format($cumCasePercentage->avg(), 2) . '%)' }}
                                </small>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap font-bold">
                                {{ number_format($activeCase->sum()) }}
                                <small class="text-xs">
                                    {{ '(' . number_format($activeCasePercentage->avg(), 2) . '%)' }}
                                </small>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap font-bold">
                                {{ number_format($newDeath->sum()) }}
                                <small class="text-xs">
                                </small>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap font-bold">
                                {{ number_format($cumDeath->sum()) }}
                                <small class="text-xs">
                                    {{ '(' . number_format($fatalityRate->avg(), 2) . '%)' }}
                                </small>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap font-bold">
                                {{ number_format($tests->sum()) }}
                                <small class="text-xs">
                                    {{ '(' . number_format($positiveRate->avg()) . '%)' }}
                                </small>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="bg-white">
                            <td class="px-6 py-4 whitespace-nowrap text-left" colspan="7">
                                <div class="flex max-w-full">
                                    <div class="ml-4 ">
                                        <p class="text-sm font-medium text-gray-900">
                                            <span class="text-black">*</span>
                                            {{ __('Not necessarily unique individuals') }},
                                            {{ __('Updated at') }} {{ $positiveRate_updated_at }}
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
