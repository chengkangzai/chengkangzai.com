@extends('layouts.app')

@push('cdn')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
@endpush

@section('content')
    <div class="table w-full p-2 overflow-auto">
        <div
            class="py-3 px-5 mb-2 bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-gray-100 rounded-md text-sm border border-gray-200 dark:border-gray-600">
            <ul class="flex">
                <li><a href="{{route('admin.home')}}" class="underline font-semibold">{{__('Home')}}</a></li>
                <li><span class="mx-2">/</span></li>
                <li>{{__('Schedule')}}</li>
            </ul>
        </div>
        @include('partial.success-card')
        @include('partial.error-card')

        @if(!$config)
            <div class="bg-gray-50 dark:bg-gray-700 w-full rounded border-2">
                <h2 class="sm:text-xl text-gray-700 dark:text-gray-200 py-2 px-4">
                    {{__('Hi, Looks like you are first time to use the system, please submit your detail')}}
                </h2>
            </div>
            <form action="{{route('admin.scheduleConfig.store')}}" method="POST">
                @csrf
                <div class="bg-gray-50 dark:bg-gray-700 w-1/2 mx-auto rounded border-2 mt-4">
                    <div class="flex flex-wrap -mx-3 mb-6 p-4">
                        <div class="w-full px-3">
                            <label
                                class="block uppercase tracking-wide text-gray-700 dark:text-gray-200 text-xs font-bold mb-2">
                                {{__('Select your Intake Code')}}
                                <select name="intake_code" onchange="renderGrouping(this)"
                                        class="appearance-none block w-full bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-200 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white dark:focus:bg-gray-700 focus:border-gray-500 font-normal text-base">
                                    <option value="" hidden="" disabled="">{{__('Select your Intake Code')}}</option>
                                    @foreach(\Chengkangzai\ApuSchedule\ApuSchedule::getIntakes() as $intakeCode)
                                        <option value="{{$intakeCode}}">{{$intakeCode}}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>


                        <div class="w-full px-3">
                            <label
                                class="block uppercase tracking-wide text-gray-700 dark:text-gray-200 text-xs font-bold mb-2">
                                {{__('Select your Grouping')}}
                                <select name="grouping" disabled
                                        class="appearance-none block w-full bg-white dark:bg-gray-700 text-gray-700 border border-gray-200 dark:text-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white dark:focus:bg-gray-700  focus:border-gray-500 font-normal text-base">
                                    <option value="" hidden="" disabled=""
                                            selected>{{__('Select your Grouping First')}}</option>
                                </select>
                            </label>

                        </div>

                        <div class="w-full px-3">
                            <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                {{__('Save Configuration')}}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        @else
            <div class="bg-gray-50 dark:bg-gray-700 w-full rounded border-2">
                <h2 class="sm:text-xl text-gray-700 dark:text-gray-200 py-2 px-4">
                    {{__('Hello :name, you are already setup your schedule and the schedule will be sync to your calendar whenever its updated',['name'=>auth()->user()->name ?? ''])}}
                </h2>
                <div class="block my-2">
                    <a href="{{route('admin.scheduleConfig.edit',$config)}}"
                       class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ml-2">
                        {{__('Edit')}}
                    </a>
                    <a href="{{route('admin.schedule.syncNow')}}"
                       class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ml-2">
                        {{__('Sync it NOW!')}}
                    </a>
                </div>
                <table class="w-full border">
                    <tr>
                        <td class="text-gray-700 dark:text-gray-200 text-sm font-semibold px-4 py-2">
                            {{__('Intake Code')}} : {{$config->intake_code}}
                        </td>
                        <td class="text-gray-700 dark:text-gray-200 text-sm font-semibold px-4 py-2">
                            {{__('Grouping')}} : {{$config->grouping}}
                        </td>
                    </tr>
                    <tr>
                        <td class="text-gray-700 dark:text-gray-200 text-sm font-semibold px-4 py-2">
                            {{__('Ignored Module')}} :
                        </td>
                        <td class="text-gray-700 dark:text-gray-200 text-sm font-semibold px-4 py-2">
                            @foreach($config->except as $ignoredModule)
                                @if ($loop->last)
                                    {{$ignoredModule}}
                                @else
                                    {{$ignoredModule}},
                                @endif
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <td class="text-gray-700 dark:text-gray-200 text-sm font-semibold px-4 py-2">
                            {{__('Linked to Microsoft ?')}} :
                        </td>
                        @if(auth()->user()->msOauth()->exists())
                            <td class="text-green-700 dark:text-green-200 text-sm font-semibold px-4 py-2">
                                {{__('YES')}}
                            </td>
                        @else
                            <td class="text-red-700 dark:text-red-200 text-sm font-semibold px-4 py-2">
                                {{__('NO')}}
                                (<a href="{{route('admin.schedule.msOAuth.signin')}}">
                                    {{__('Click here to link your account')}}
                                </a>)
                            </td>
                        @endif
                    </tr>
                </table>
            </div>

            @if($config)
                <div>
                    <h2 class="text-center text-3xl font-bold dark:text-gray-300">{{__('Your Schedule')}}</h2>
                    <div id='calendar' class="w-full text-base md:w-1/2 mx-auto dark:bg-gray-800 dark:text-gray-100 mt-4"></div>
                </div>
            @endif
        @endif
    </div>
@endsection


@push('script')
    <script>
        function renderGrouping(dom) {
            fetch('{{route('admin.schedule.getGrouping')}}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{csrf_token()}}'
                },
                body: JSON.stringify({
                    intake_code: dom.value
                })
            })
                .then(res => res.json())
                .then(data => {
                    let select = document.querySelector('select[name=grouping]');
                    select.disabled = false;
                    select.innerHTML = '';
                    data.forEach(grouping => {
                        let option = document.createElement('option');
                        option.value = grouping;
                        option.innerText = grouping;
                        select.appendChild(option);
                    });
                });

        }
    </script>

    @if($config)
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
