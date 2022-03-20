@extends('layouts.covid_app')

@section('content')
    @include('partial.rocket')

    <div class="mx-2 space-y-2 mb-10">
        <section class="mt-2 rounded-2xl dark:bg-white dark:text-black py-2 bg-gray-50 shadow"
                 wire:loading.class="animate-pulse" xmlns:wire="">
            <h1 class="text-2xl sm:text-5xl font-bold px-2">
                {{__('Vaccination')}}
            </h1>
            <p>{{ __('This page was partially created to fulfill assignment for APLC (Advance Programming Concept) module in APU ') }}</p>
            <ul class="list-disc list-inside px-2">

                <li>{{__('Data displayed')}}</li>
                <li>{{__('All vaccination and registration in Malaysia')}}</li>
            </ul>
        </section>

        <livewire:covid-vaccination.display-more/>
        <livewire:covid-vaccination.full-vax-by-month/>
        <livewire:covid-vaccination.high-low-vax-taken-weekly/>
        <livewire:covid-vaccination.vax-taken-weekly/>

    </div>

@endsection

@section('footer')
    @include('layouts.footer')
@endsection
