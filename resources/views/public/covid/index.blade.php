@extends('layouts.covid_app')

@section('content')
    @include('partial.rocket')
    @livewire('covid-dashboard-head')
    @livewire('covid-dashboard-malaysia')
    @livewire('covid-dashboard-cases-state')
    @livewire('covid-dashboard-vax-state')
    @livewire('covid-dashboard-health-care-state')
    @livewire('covid-dashboard-about')
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
