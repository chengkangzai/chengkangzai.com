<section class="mt-2 rounded-2xl dark:bg-white dark:text-black py-8 bg-gray-50 shadow" id="malaysia-dashboard"
    wire:loading.class="animate-pulse" xmlns:wire="http://www.w3.org/1999/xhtml">
    <a href="#malaysia-dashboard">
        <h1 class="text-2xl sm:text-5xl font-bold px-2">{{ __('Covid-19 Dashboard') }} : {{ __($state) }}</h1>
    </a>
    <div class="container space-y-2 sm:space-y-0 sm:flex sm:flex-row-reverse">
        <label>
            {{ __('Filter By') }} :
            <select class="bg-white ring ring-gray-200 mx-2 rounded" wire:model="state">
                <option disabled>-----</option>
                @foreach (\App\Models\Covid\CasesState::STATE as $key => $filter)
                    <option value="{{ $key }}">
                        {{ __($key) }}
                    </option>
                @endforeach
            </select>
        </label>
        <label>
            <select class="bg-white ring ring-gray-200 mx-2 rounded" wire:model="popFilter">
                @foreach (\App\Models\Covid\Population::POP_FILTER as $key => $filter)
                    <option value="{{ $key }}">
                        {{ __($key) }}
                    </option>
                @endforeach
            </select>
        </label>
        <span class="py-1">{{ __('Filter By') }} : </span>
    </div>
</section>
