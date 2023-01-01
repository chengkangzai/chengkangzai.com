@extends('layouts.admin')

@push('cdn')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
@endpush

@section('header')
    <h3 class="text-gray-700 text-3xl font-medium">{{ __('Dashboard') }}</h3>
@endsection

@section('content')
    @include('partial.error-card')
    @include('partial.success-card')
    <div class="container mx-auto px-6 py-8">
        <div class="mt-4">
            <div class="flex flex-wrap -mx-6 gap-2 sm:gap-0 ">
                <x-dashboard-item-card title="{{ __('Total Users') }}" :count="\App\Models\User::count()"
                    link="{{ route('admin.users.index') }}">
                    <x-slot name="icon">
                        <svg class="h-8 w-8 text-white" viewBox="0 0 28 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.2 9.08889C18.2 11.5373 16.3196 13.5222 14 13.5222C11.6804 13.5222 9.79999 11.5373 9.79999 9.08889C9.79999 6.64043 11.6804 4.65556 14 4.65556C16.3196 4.65556 18.2 6.64043 18.2 9.08889Z"
                                fill="currentColor"></path>
                            <path
                                d="M25.2 12.0444C25.2 13.6768 23.9464 15 22.4 15C20.8536 15 19.6 13.6768 19.6 12.0444C19.6 10.4121 20.8536 9.08889 22.4 9.08889C23.9464 9.08889 25.2 10.4121 25.2 12.0444Z"
                                fill="currentColor"></path>
                            <path
                                d="M19.6 22.3889C19.6 19.1243 17.0927 16.4778 14 16.4778C10.9072 16.4778 8.39999 19.1243 8.39999 22.3889V26.8222H19.6V22.3889Z"
                                fill="currentColor"></path>
                            <path
                                d="M8.39999 12.0444C8.39999 13.6768 7.14639 15 5.59999 15C4.05359 15 2.79999 13.6768 2.79999 12.0444C2.79999 10.4121 4.05359 9.08889 5.59999 9.08889C7.14639 9.08889 8.39999 10.4121 8.39999 12.0444Z"
                                fill="currentColor"></path>
                            <path
                                d="M22.4 26.8222V22.3889C22.4 20.8312 22.0195 19.3671 21.351 18.0949C21.6863 18.0039 22.0378 17.9556 22.4 17.9556C24.7197 17.9556 26.6 19.9404 26.6 22.3889V26.8222H22.4Z"
                                fill="currentColor"></path>
                            <path
                                d="M6.64896 18.0949C5.98058 19.3671 5.59999 20.8312 5.59999 22.3889V26.8222H1.39999V22.3889C1.39999 19.9404 3.2804 17.9556 5.59999 17.9556C5.96219 17.9556 6.31367 18.0039 6.64896 18.0949Z"
                                fill="currentColor"></path>
                        </svg>
                    </x-slot>
                </x-dashboard-item-card>

                <x-dashboard-item-card title="{{ __('Total Posts') }}" :count="\App\Models\Post::count()"
                    link="{{ route('admin.posts.index') }}" bgColor="bg-orange-600">
                    <x-slot name="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg>
                    </x-slot>
                </x-dashboard-item-card>

                <x-dashboard-item-card title="{{ __('Total Works') }}" :count="\App\Models\Works::count()"
                    link="{{ route('admin.works.index') }}" bgColor="bg-pink-600">
                    <x-slot name="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </x-slot>
                </x-dashboard-item-card>
            </div>
        </div>
    </div>

    @if ($config)
        <div>
            <h2 class="text-center text-3xl font-bold">{{ __('Your Schedule') }}</h2>
            <div id='calendar' class="w-full text-base md:w-1/2 mx-auto mt-4 bg-white p-4 rounded rounded-md"></div>
        </div>
    @endif
@endsection



@push('script')
    @if ($config)
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    headerToolbar: {
                        center: 'dayGridMonth,timeGridWeek'
                    }, // buttons for switching between views
                    initialView: 'timeGridWeek',
                    aspectRatio: 2,

                });

                @foreach ($events as $event)
                    calendar.addEvent({
                        title: '{{ $event->MODID }}',
                        start: '{{ $event->TIME_FROM_ISO }}',
                        end: '{{ $event->TIME_TO_ISO }}',

                    });
                @endforeach


                calendar.render();
            });
        </script>
    @endif
@endpush
