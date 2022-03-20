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
            ->get(['date', 'pfizer1', 'pfizer2', 'pfizer3', 'sinovac1', 'sinovac2', 'sinovac3', 'astra1', 'astra2', 'astra3', 'cansino', 'cansino3', 'sinopharm1', 'sinopharm2', 'sinopharm3'])
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
                $min1 = collect();
                $min1->push(['name' => 'pfizer1', 'value' => $vax->min('pfizer1')]);
                $min1->push(['name' => 'sinovac1', 'value' => $vax->min('sinovac1')]);
                $min1->push(['name' => 'sinopharm1', 'value' => $vax->min('sinopharm1')]);
                $min1->push(['name' => 'astra1', 'value' => $vax->min('astra1')]);

                $min1pair = $min1->sortBy('value')->first();

                $min2 = collect();
                $min2->push(['name' => 'pfizer2', 'value' => $vax->min('pfizer2')]);
                $min2->push(['name' => 'sinovac2', 'value' => $vax->min('sinovac2')]);
                $min2->push(['name' => 'sinopharm2', 'value' => $vax->min('sinopharm2')]);
                $min2->push(['name' => 'astra2', 'value' => $vax->min('astra2')]);
                $min2->push(['name' => 'cansino', 'value' => $vax->min('cansino')]);
                $min2pair = $min2->sortBy('value')->first();

                $min3 = collect();
                $min3->push(['name' => 'pfizer3', 'value' => $vax->min('pfizer3')]);
                $min3->push(['name' => 'sinovac3', 'value' => $vax->min('sinovac3')]);
                $min3->push(['name' => 'sinopharm3', 'value' => $vax->min('sinopharm3')]);
                $min3->push(['name' => 'astra3', 'value' => $vax->min('astra3')]);
                $min3->push(['name' => 'cansino3', 'value' => $vax->min('cansino3')]);
                $min3pair = $min3->sortBy('value')->first();


                $max1 = collect();
                $max1->push(['name' => 'pfizer1', 'value' => $vax->max('pfizer1')]);
                $max1->push(['name' => 'sinovac1', 'value' => $vax->max('sinovac1')]);
                $max1->push(['name' => 'sinopharm1', 'value' => $vax->max('sinopharm1')]);
                $max1->push(['name' => 'astra1', 'value' => $vax->max('astra1')]);
                $max1pair = $max1->sortByDesc('value')->first();

                $max2 = collect();
                $max2->push(['name' => 'pfizer2', 'value' => $vax->max('pfizer2')]);
                $max2->push(['name' => 'sinovac2', 'value' => $vax->max('sinovac2')]);
                $max2->push(['name' => 'sinopharm2', 'value' => $vax->max('sinopharm2')]);
                $max2->push(['name' => 'astra2', 'value' => $vax->max('astra2')]);
                $max2->push(['name' => 'cansino', 'value' => $vax->max('cansino')]);
                $max2pair = $max2->sortByDesc('value')->first();

                $max3 = collect();
                $max3->push(['name' => 'pfizer3', 'value' => $vax->max('pfizer3')]);
                $max3->push(['name' => 'sinovac3', 'value' => $vax->max('sinovac3')]);
                $max3->push(['name' => 'sinopharm3', 'value' => $vax->max('sinopharm3')]);
                $max3->push(['name' => 'astra3', 'value' => $vax->max('astra3')]);
                $max3->push(['name' => 'cansino3', 'value' => $vax->max('cansino3')]);
                $max3pair = $max3->sortByDesc('value')->first();

                return [
                    'min1' => [
                        'name' => $min1pair['name'],
                        'value' => $min1pair['value'],
                        'date' => $vax->where($min1pair['name'], $min1pair['value'])->first()->date->format('d-m-y'),
                    ],
                    'min2' => [
                        'name' => $min2pair['name'],
                        'value' => $min2pair['value'],
                        'date' => $vax->where($min2pair['name'], $min2pair['value'])->first()->date->format('d-m-y'),
                    ],
                    'min3' => [
                        'name' => $min3pair['name'],
                        'value' => $min3pair['value'],
                        'date' => $vax->where($min3pair['name'], $min3pair['value'])->first()->date->format('d-m-y'),
                    ],
                    'max1' => [
                        'name' => $max1pair['name'],
                        'value' => $max1pair['value'],
                        'date' => $vax->where($max1pair['name'], $max1pair['value'])->first()->date->format('d-m-y'),
                    ],
                    'max2' => [
                        'name' => $max2pair['name'],
                        'value' => $max2pair['value'],
                        'date' => $vax->where($max2pair['name'], $max2pair['value'])->first()->date->format('d-m-y'),
                    ],
                    'max3' => [
                        'name' => $max3pair['name'],
                        'value' => $max3pair['value'],
                        'date' => $vax->where($max3pair['name'], $max3pair['value'])->first()->date->format('d-m-y'),
                    ],
                ];
            });
    }

    public function load()
    {
        $this->readyToLoad = true;
    }
}
