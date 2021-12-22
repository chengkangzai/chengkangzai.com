@php
    /* @var App\Models\ScheduleConfig $scheduleConfig */
@endphp

@push('cdn')
    <link href="https://cdn.jsdelivr.net/npm/tom-select@1.1/dist/css/tom-select.css" rel="stylesheet">
@endpush

@extends('layouts.app')

@section('content')
    <div class="table w-full p-2 overflow-auto">
        <div
            class="py-3 px-5 mb-2 bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-gray-100 rounded-md text-sm border border-gray-200 dark:border-gray-600">
            <ul class="flex">
                <li><a href="{{route('admin.home')}}" class="underline font-semibold">{{__('Home')}}</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="{{route('admin.scheduleConfig.index')}}"
                       class="underline font-semibold">{{__('Schedule')}}</a></li>
                <li><span class="mx-2">/</span></li>
                <li>{{__('Edit')}}</li>
            </ul>
        </div>
        @include('partial.success-card')

        <form action="{{route('admin.scheduleConfig.update', $scheduleConfig)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="bg-gray-50 dark:bg-gray-700 w-1/2 mx-auto rounded border-2 mt-4">
                <div class="flex flex-wrap -mx-3 mb-6 p-4">
                    <div class="w-full px-3">
                        <label
                            class="block uppercase tracking-wide text-gray-700 dark:text-gray-200 text-xs font-bold mb-2">
                            {{__('Select your Intake Code')}}
                            <select name="intake_code" id="intake_code"
                                    class="appearance-none block w-full bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-200 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white dark:focus:bg-gray-700 focus:border-gray-500 font-normal text-base">
                                <option value="" hidden="" disabled="">{{__('Select your Intake Code')}}</option>
                                @foreach(\Chengkangzai\ApuSchedule\ApuSchedule::getIntakes() as $intakeCode)
                                    <option
                                        value="{{$intakeCode}}" {{$intakeCode == $scheduleConfig->intake_code ? 'selected':''}}>
                                        {{$intakeCode}}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>

                    <div class="w-full px-3">
                        <label
                            class="block uppercase tracking-wide text-gray-700 dark:text-gray-200 text-xs font-bold mb-2">
                            {{__('Select your Grouping')}}
                            <select name="grouping"
                                    class="appearance-none block w-full bg-white dark:bg-gray-700 text-gray-700 border border-gray-200 dark:text-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white dark:focus:bg-gray-700  focus:border-gray-500 font-normal text-base">
                                @foreach($groupings as $grouping)
                                    <option
                                        value="{{$grouping}}" {{$grouping == $scheduleConfig->grouping ? 'selected':''}}>
                                        {{$grouping}}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>

                    <div class="w-full px-3">
                        <label
                            class="block uppercase tracking-wide text-gray-700 dark:text-gray-200 text-xs font-bold mb-2">
                            {{__('Ignore these module')}}
                            <select name="except[]" multiple id="ignore_modules"
                                    class="w-full border border-gray-200 text-gray-800 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-2 pt-2 pb-1">
                                @foreach($modules as $module)
                                    <option
                                        value="{{$module}}"
                                        {{in_array($module, $scheduleConfig->except ?? []) ? 'selected':''}}
                                    >
                                        {{$module}}</option>
                                @endforeach
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
                })
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/tom-select@1.1/dist/js/tom-select.complete.min.js"></script>
    <script>
        new TomSelect('#ignore_modules');
    </script>
@endpush
