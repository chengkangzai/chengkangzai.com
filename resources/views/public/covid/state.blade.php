@extends('layouts.covid_app')

@section('content')
    @include('partial.rocket')
    <div class="mx-2">
        <livewire:covid-state.head
            :state="$state"
        />
        <livewire:covid-state.dashboard
            :state="$state"
        />
        <livewire:covid-state.health-care
            :state="$state"
        />
        <livewire:covid-state.graph
            :state="$state"
        />
    </div>

@endsection

@section('footer')
    @include('layouts.footer')
@endsection
