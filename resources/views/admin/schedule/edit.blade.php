@php
    /* @var App\Models\ScheduleConfig $scheduleConfig */
@endphp

@push('cdn')
    <link href="https://cdn.jsdelivr.net/npm/tom-select@1.1/dist/css/tom-select.css" rel="stylesheet">
@endpush

@section('header')
    {{__('Schedule')}}
@endsection

@extends('layouts.admin')

@section('content')
    <div class="table w-full p-2 overflow-auto">
        <div
            class="py-3 px-5 mb-2 bg-white rounded rounded-md border border-gray-500 text-sm">
            <ul class="flex">
                <li><a href="{{route('admin.home')}}" class="underline hover:text-gray-500">{{__('Home')}}</a>
                </li>
                <li><span class="mx-2">/</span></li>
                <li>
                    <a href="{{route('admin.scheduleConfig.index')}}" class="underline hover:text-gray-500">
                        {{__('Schedule')}}
                    </a>
                </li>
                <li><span class="mx-2">/</span></li>
                <li>{{__('Update')}}</li>
            </ul>
        </div>
        @include('partial.success-card')

        <form action="{{route('admin.scheduleConfig.update', $scheduleConfig)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="w-full md:w-1/2 mx-auto rounded rounded-md bg-white mt-4 border border-gray-500">
                <div class="flex flex-wrap -mx-3 mb-6 p-4">
                    <div class="w-full px-3">
                        <label
                            class="block uppercase tracking-wide text-xs font-bold mb-2">
                            {{__('Select your Intake Code')}}
                            <select name="intake_code" id="intake_code" onchange="renderGrouping(this)"
                                    class="appearance-none block w-full bg-white border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 font-normal text-base">
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
                            class="block uppercase tracking-wide text-xs font-bold mb-2">
                            {{__('Select your Grouping')}}
                            <select name="grouping"
                                    class="appearance-none block w-full bg-white border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 font-normal text-base">
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
                            class="block uppercase tracking-wide text-xs font-bold mb-2">
                            {{__('Ignore these module')}}
                            <select name="except[]" multiple id="ignore_modules"
                                    class="w-full border border-gray-200 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-2 pt-2 pb-1">
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
                        <label
                            class="block uppercase tracking-wide text-xs font-bold mb-2">
                            <input type="checkbox" value="{{$scheduleConfig->is_subscribed ? '1':'0' }}"
                                   name="is_subscribed" {{$scheduleConfig->is_subscribed ? 'checked':''}}>
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

        document
            .querySelector('input[name=is_subscribed]')
            .addEventListener('change', function () {
                this.value = +this.checked;
            });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/tom-select@1.1/dist/js/tom-select.complete.min.js"></script>
    <script>
        new TomSelect('#ignore_modules');
    </script>
@endpush
