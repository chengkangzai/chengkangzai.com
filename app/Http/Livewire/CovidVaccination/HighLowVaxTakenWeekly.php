<?php

namespace App\Http\Livewire\CovidVaccination;

use App\Models\Covid\VaxMalaysia;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Component;

class HighLowVaxTakenWeekly extends Component
{
    public bool $readyToLoad = false;
    public Collection $vaxs;
    public int $weekToLoad = 7;
    public int $weekToLoadMax = 50;

    public function mount()
    {
        $this->vaxs = collect();
    }

    public function render(): Factory|View|Application
    {
        if ($this->readyToLoad) {
            $this->initVariable();
        }
        return view('livewire.covid-vaccination.high-low-vax-taken-weekly');
    }

    private function initVariable(): void
    {
        $this->vaxs = VaxMalaysia::query()
            ->get()
            ->sortByDesc('date')
            ->map(function (VaxMalaysia $vaxState) {
                $vaxState->weekYear = $vaxState->date->format('W / y');
                return $vaxState;
            })
            ->groupBy('weekYear')
            ->tap(function ($vaxs) {
                $this->weekToLoadMax = $vaxs->count();
            })
            ->take($this->weekToLoad)
            ->map(function (Collection $vax) {
                $min1pair = $this->calcPair(['pfizer1', 'sinovac1', 'sinopharm1', 'astra1'], $vax, false);
                $min2pair = $this->calcPair(['pfizer2', 'sinovac2', 'sinopharm2', 'astra2', 'cansino'], $vax, false);
                $min3pair = $this->calcPair(['pfizer3', 'sinovac3', 'sinopharm3', 'astra3', 'cansino3'], $vax, false);

                $max1pair = $this->calcPair(['pfizer1', 'sinovac1', 'sinopharm1', 'astra1'], $vax, true);
                $max2pair = $this->calcPair(['pfizer2', 'sinovac2', 'sinopharm2', 'astra2', 'cansino'], $vax, true);
                $max3pair = $this->calcPair(['pfizer3', 'sinovac3', 'sinopharm3', 'astra3', 'cansino3'], $vax, true);

                return [
                    'min1' => [
                        'name' => $min1pair['name'],
                        'value' => $min1pair['value'],
                        'date' => $this->getFormattedDate($vax, $min1pair),
                    ],
                    'min2' => [
                        'name' => $min2pair['name'],
                        'value' => $min2pair['value'],
                        'date' => $this->getFormattedDate($vax, $min2pair),
                    ],
                    'min3' => [
                        'name' => $min3pair['name'],
                        'value' => $min3pair['value'],
                        'date' => $this->getFormattedDate($vax, $min3pair),
                    ],
                    'max1' => [
                        'name' => $max1pair['name'],
                        'value' => $max1pair['value'],
                        'date' => $this->getFormattedDate($vax, $max1pair),
                    ],
                    'max2' => [
                        'name' => $max2pair['name'],
                        'value' => $max2pair['value'],
                        'date' => $this->getFormattedDate($vax, $max2pair),
                    ],
                    'max3' => [
                        'name' => $max3pair['name'],
                        'value' => $max3pair['value'],
                        'date' => $this->getFormattedDate($vax, $max3pair),
                    ],
                ];
            });
    }

    public function load()
    {
        $this->readyToLoad = true;
    }

    private function calcPair(array $vaccineTypes, Collection $vax, bool $isMax): array
    {
        return collect()
            ->when(!$isMax, function ($collection) use ($vax, $vaccineTypes) {
                collect($vaccineTypes)
                    ->each(function ($type) use ($vax, $collection) {
                        $collection->push(['name' => $type, 'value' => $vax->min($type)]);
                    });
                return $collection;
            })
            ->when($isMax, function ($collection) use ($vax, $vaccineTypes) {
                collect($vaccineTypes)
                    ->each(function ($type) use ($vax, $collection) {
                        $collection->push(['name' => $type, 'value' => $vax->max($type)]);
                    });
                return $collection;
            })
            ->when(!$isMax, fn($collection) => $collection->sortBy('value'))
            ->when($isMax, fn($collection) => $collection->sortByDesc('value'))
            ->first();
    }

    private function getFormattedDate(Collection $vax, array $pair)
    {
        return $vax->where($pair['name'], $pair['value'])->first()->date->format('d-m-y');
    }
}
