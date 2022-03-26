<?php

namespace App\Http\Livewire\CovidVaccination;

use App\Models\Covid\VaxRegState;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class Vaccination extends Component
{
    public bool $prologEnabled;

    public function mount()
    {
        $this->prologEnabled = Carbon::createFromDate(2000, 3, 27)->isPast();
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.covid-vaccination.vaccination')->extends('layouts.covid_app');
    }

    public function exportPL(): StreamedResponse
    {
        $content = collect();
        $content->push("%License : Any form of copy or plagiarising of this file academically is strictly prohibited and consider as abuse.\n");
        $content->push("%Credit & Author : Ching Cheng Kang\n");
        $content->push("%Downloaded Date : " . Carbon::now()->toDateTimeString() . "\n");
        $content->push("%All right reserved\n\n");

        $content->push("%Vaccination Report\n");
        $content->push("%Facts \n");

        $vaccinations = VaxRegState::latestOne()->get();
        foreach ($vaccinations as $vaccination) {
            $content->push("vaxreg(" . str($vaccination->state)->replace('W.P. ', '')->snake() . ",$vaccination->total).\n");
        }

        $content->push("\n");
        $content->push("printAll:-\n");
        $content->push("    write('State -- Registration'),nl,\n");
        $content->push("    forall(vaxreg(S,T), (write(S),write(' '),write(T),nl)).\n\n");

        $filePath = 'chengkangzai.com/vaccination.pl';
        Storage::disk('s3')->put($filePath, $content->implode(""));

        return Storage::disk('s3')->download($filePath);
    }
}
