@extends('layouts.covid_app')

@section('content')
    @include('partial.rocket')
    <div class="mx-2">
        @livewire('covid-dashboard-head')
        @livewire('covid-dashboard-malaysia')
        @livewire('covid-dashboard-cases-state')
        @livewire('covid-dashboard-vax-state')
        @livewire('covid-dashboard-health-care-state')
        @livewire('covid-dashboard-about')
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
