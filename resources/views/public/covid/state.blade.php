@extends('layouts.covid_app')

@section('content')

    @livewire('covid-state.head')
    @livewire('covid-state.dashboard')
    @livewire('covid-state.health-care')

@endsection

@section('footer')
    @include('layouts.footer')
@endsection
