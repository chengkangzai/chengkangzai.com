<div wire:init="load" wire:loading.class="animate-pulse">
    <div class="flex flex-col mt-2" id="full-vax-by-month">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th colspan="18" class="py-2 border-b bg-white">
                                    <a href="#full-vax-by-month">
                                        <h3 class="font-bold text-2xl uppercase">
                                            {{ __('Vaccinated Person By State and Month') }}</h3>
                                    </a>
                                </th>
                            </tr>
                            <tr class="text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <th class="px-6 py-3 border-r border-gray-200 bg-gray-50">{{ __('State') }}</th>

                                @foreach ($vaxs->take(1) as $key => $vax)
                                    @foreach ($vax as $k => $v)
                                        <th class="px-2 py-2">{{ __($k) }}</th>
                                    @endforeach
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($vaxs as $key => $vax)
                                <tr class="@if ($loop->even) bg-gray-50 @endif">
                                    <td class="py-4 px-1 whitespace-nowrap text-sm border-r">
                                        {{ $key }}
                                    </td>
                                    @foreach ($vax as $state => $v)
                                        <td class="py-4 px-1 whitespace-nowrap text-sm">{{ number_format($v) }}</td>
                                    @endforeach
                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
