<div xmlns:wire="http://www.w3.org/1999/xhtml" wire:loading.class="animate-pulse">
    <div class="mb-2">
        <section class="my-2 rounded-2xl dark:bg-white dark:text-black py-8 bg-gray-50 shadow " id="graph-state">
            <a href="#graph-state">
                <h1 class="text-2xl sm:text-5xl font-bold px-2 py-2">{{__('Statistical Graph of :')}} {{__('Malaysia')}}</h1>
            </a>
            <div class="container space-y-2 sm:space-y-0 sm:flex sm:flex-row-reverse">
                <div>
                    <label>
                        {{__('Filter By')}} :
                        <select class="bg-white ring ring-gray-200 mx-2 px-4 py-1 rounded" wire:model="filter">
                            <option disabled>-----</option>
                            @foreach(\App\Http\Services\CovidState\Graph\CovidStateGraphService::FILTER as $filter)
                                <option value="{{$filter}}">
                                    {{__($filter)}}
                                </option>
                            @endforeach
                        </select>
                    </label>
                </div>
            </div>
        </section>

        <div class="sm:grid sm:grid-cols-2 sm:mt-2 gap-2 space-y-2 sm:space-y-0">
            <div class="bg-gray-50 rounded-xl shadow p-4">
                <livewire:covid-dashboard.graph.case-per-day
                    :date="$date"
                    :confirmCase="$confirmCase"
                    :recoveredCase="$recoveredCase"
                />
            </div>

            <div class="bg-gray-50 rounded-xl shadow p-4">
                <livewire:covid-dashboard.graph.death-per-day
                    :date="$date"
                    :deathCase="$deathCase"
                    :bidCase="$bidCase"
                />
            </div>

            <div class="bg-gray-50 rounded-xl shadow p-4">
                <livewire:covid-dashboard.graph.active-case-vs-health-care
                    :date="$date"
                    :activeCase="$activeCase"
                    :cat1="$cat1"
                    :cat2="$cat2"
                    :cat3="$cat3"
                    :cat4="$cat4"
                    :cat5="$cat5"
                />
            </div>

            <div class="bg-gray-50 rounded-xl shadow p-4">
                <livewire:covid-dashboard.graph.active-case-percentage
                    :date="$date"
                    :activeCase="$activeCase"
                    :cumRecoveredCase="$cumRecoveredCase"
                    :cumDeathCase="$cumDeathCase"
                />
            </div>
        </div>
    </div>


</div>
