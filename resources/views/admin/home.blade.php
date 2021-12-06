@extends('layouts.app')

@push('cdn')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
@endpush

@section('content')
    @canany(['post_access','work_access','comment_access','tag_access','sss'])
        <div class="grid grid-cols-5 gap-4 p-2 dark:bg-gray-800 w-full pt-4">
{{--            ##TODO : add user management --}}
            <a class="block h-52 shadow-md rounded-md bg-white" href="#">
                <div class="p-5">
                    <h5 class="text-3xl font-bold block text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 block mx-auto" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        {{__('Total Users')}}
                    </h5>


                    <p class="my-4 text-5xl w-full block text-center">
                        {{\App\Models\User::count()}}
                    </p>
                </div>
            </a>

            <a class="block h-52 shadow-md rounded-md bg-white" href="{{route('admin.posts.index')}}">
                <div class="p-5">
                    <h5 class="text-3xl font-bold block text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 block mx-auto" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                        {{__('Total Posts')}}
                    </h5>


                    <p class="my-4 text-5xl w-full block text-center">
                        {{\App\Models\Post::count()}}
                    </p>
                </div>
            </a>

            <a class="block h-52 shadow-md rounded-md bg-white" href="{{route('admin.works.index')}}">
                <div class="p-5">
                    <h5 class="text-3xl font-bold block text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 block mx-auto" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        {{__('Total Works')}}
                    </h5>


                    <p class="my-4 text-5xl w-full block text-center">
                        {{\App\Models\Works::count()}}
                    </p>
                </div>
            </a>

            <a class="block h-52 shadow-md rounded-md bg-white" href="{{route('admin.comment.index')}}">
                <div class="p-5">
                    <h5 class="text-3xl font-bold block text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 block mx-auto" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                        </svg>
                        {{__('Total Comments')}}
                    </h5>


                    <p class="my-4 text-5xl w-full block text-center">
                        {{\App\Models\Comment::count()}}
                    </p>
                </div>
            </a>

            <a class="block h-52 shadow-md rounded-md bg-white" href="{{route('admin.tags.index')}}">
                <div class="p-5">
                    <h5 class="text-3xl font-bold block text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 block mx-auto" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                        </svg>
                        {{__('Total Tags')}}
                    </h5>


                    <p class="my-4 text-5xl w-full block text-center">
                        {{\Spatie\Tags\Tag::count()}}
                    </p>
                </div>
            </a>
        </div>
    @endcanany
    @if($isDoneSetup)
        <div id='calendar' class="w-3/5 mx-auto dark:bg-gray-800 dark:text-gray-100"></div>
    @endif
@endsection

@push('script')
    @if($isDoneSetup)
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    headerToolbar: {center: 'dayGridMonth,timeGridWeek'}, // buttons for switching between views
                    initialView: 'timeGridWeek',
                    aspectRatio: 2,
                });

                @foreach($events as $event)
                calendar.addEvent({
                    title: '{{$event->MODID}}',
                    start: '{{$event->TIME_FROM_ISO}}',
                    end: '{{$event->TIME_TO_ISO}}',

                });
                @endforeach


                calendar.render();
            });
        </script>
    @endif
@endpush
