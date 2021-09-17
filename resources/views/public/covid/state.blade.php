@extends('layouts.covid_app')

@section('content')
<div class="mx-2">
    @livewire('covid-state.head')
    @livewire('covid-state.dashboard')
    @livewire('covid-state.health-care')
</div>

@endsection

@section('footer')
    @include('layouts.footer')
@endsection
