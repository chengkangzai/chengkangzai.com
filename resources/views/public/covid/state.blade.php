@extends('layouts.covid_app')

@section('content')
    @include('partial.rocket')
    <div class="mx-2">
        <livewire:covid-state.head/>
        <livewire:covid-state.dashboard/>
        <livewire:covid-state.health-care/>
        <livewire:covid-state.graph/>
    </div>

@endsection

@section('footer')
    @include('layouts.footer')
@endsection
