@extends('layouts.admin')

@push('cdn')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
@endpush

@section('header')
    {{__('Schedule')}}
@endsection

@section('content')
    <div
        class="py-3 px-5 mb-2 rounded-md text-base border border-gray-500 bg-white">
        <ul class="flex">
            <li><a href="{{route('admin.home')}}" class="underline hover:text-gray-500">{{__('Home')}}</a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li>{{__('Schedule')}}</li>
        </ul>
    </div>
    @include('partial.success-card')
    @include('partial.error-card')

    @if(!$config)
        <div class="w-full bg-white border rounded-md border-gray-500">
            <h2 class="sm:text-xl py-2 px-4">
                {{__('Hi, Looks like you are first time to use the system, please submit your detail')}}
            </h2>
        </div>
        <form action="{{route('admin.scheduleConfig.store')}}" method="POST">
            @csrf
            <div class="w-full md:w-1/2 mx-auto mt-4 bg-white rounded rounded-md border-gray-500">
                <div class="flex flex-wrap -mx-3 mb-6 p-4">
                    <div class="w-full px-3">
                        <label
                            class="block uppercase tracking-wide text-xs font-bold mb-2">
                            {{__('Select your Intake Code')}}
                            <select name="intake_code" onchange="renderGrouping(this)"
                                    class="appearance-none block w-full bg-white border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 font-normal text-base">
                                <option value="" hidden="" disabled="">{{__('Select your Intake Code')}}</option>
                                @foreach(\Chengkangzai\ApuSchedule\ApuSchedule::getIntakes() as $intakeCode)
                                    <option value="{{$intakeCode}}">{{$intakeCode}}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>

                    <div class="w-full px-3">
                        <label
                            class="block uppercase tracking-wide text-xs font-bold mb-2">
                            {{__('Select your Grouping')}}
                            <select name="grouping" disabled
                                    class="appearance-none block w-full bg-white border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 font-normal text-base">
                                <option value="" hidden="" disabled=""
                                        selected>{{__('Select your Grouping First')}}</option>
                            </select>
                        </label>
                    </div>

                    <div class="w-full px-3">
                        <label
                            class="block uppercase tracking-wide text-xs font-bold mb-2">
                            <input type="checkbox" value="1"
                                   name="is_subscribed" {{old('is_subscribed') ? 'checked':''}}>
                            {{__('Sync my schedule weekly')}}
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
        <div class="w-full rounded rounded-md border rounded-md border-gray-500 bg-white">
            <h2 class="sm:text-xl py-2 px-4">
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
            <x-divider/>
            <table class="w-full">
                <tr>
                    <td class="text-sm font-semibold px-4 py-2">
                        {{__('Intake Code')}} : {{$config->intake_code}}
                    </td>
                    <td class="text-sm font-semibold px-4 py-2">
                        {{__('Grouping')}} : {{$config->grouping}}
                    </td>
                </tr>
                <tr>
                    <td class="text-sm font-semibold px-4 py-2">
                        {{__('Ignored Module')}} :
                    </td>
                    <td class="text-sm font-semibold px-4 py-2">
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
                    <td class="text-sm font-semibold px-4 py-2">
                        {{__('Linked to Microsoft ?')}} :
                    </td>
                    @if(auth()->user()->msOauth()->exists())
                        <td class="text-sm font-semibold px-4 py-2">
                            {{__('YES')}}
                        </td>
                    @else
                        <td class="text-sm font-semibold px-4 py-2">
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
                <h2 class="text-center text-3xl font-bold">{{__('Your Schedule')}}</h2>
                <div id='calendar'
                     class="w-full text-base md:w-1/2 mx-auto mt-4 bg-white border border-gray-500 bg-white p-4 rounded rounded-md"></div>
            </div>
        @endif
    @endif
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
