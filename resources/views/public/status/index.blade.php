@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex" id="statusSection">
        <div class="m-auto w-full">
            <div class="block sm:grid sm:grid-cols-4 sm:grid-rows-3 gap-4 p-4 space-y-4 sm:space-y-0 dark:text-white">
                <div
                    class="dark:bg-gray-900 bg-gray-50 col-span-2 w-full text-center p-8 rounded-3xl hover:shadow-lg cursor-pointer">
                    <h2 class="text-2xl">{{__('Day passed since 1st dose of AstraZeneca vaccine :')}}</h2>
                    <p>(2021-07-08)</p>
                    <p class="pt-5 font-semibold text-6xl ">
                        {{__('Days',['day'=>\Carbon\Carbon::createFromDate('2021-07-08')->diffInDays()])}}
                    </p>
                </div>
                <div
                    class="dark:bg-gray-900 bg-gray-50 col-span-2 w-full text-center p-8 rounded-3xl hover:shadow-lg cursor-pointer">
                    <h2 class="text-2xl">{{__('Next dose of AstraZeneca vaccine is on:')}}</h2>
                    <p>(2021-09-09)</p>
                    <p class="pt-5 font-semibold text-6xl ">
                        {{__('Days',['day'=>\Carbon\Carbon::createFromDate('2021-09-09')->diffInDays()])}}
                    </p>
                </div>
                <div
                    class="dark:bg-gray-900 bg-gray-50 col-span-4 w-full text-center p-8 rounded-3xl hover:shadow-lg cursor-pointer">
                    <h2 class="text-2xl">{{__('Day passed since I getting my hair cut :')}}</h2>
                    <p>(2021-05-01)</p>
                    <p class="pt-5 font-semibold text-6xl ">
                        {{__('Days',['day'=>\Carbon\Carbon::createFromDate('2021-05-01')->diffInDays()])}}
                    </p>
                </div>
                <div
                    class="dark:bg-gray-900 bg-gray-50 col-span-2 sw-full text-center p-8 rounded-3xl hover:shadow-lg cursor-pointer">
                    <h2 class="text-2xl">{{__('Days until Internship end:')}} </h2>
                    <p>(2021-11-05) ({{__('Weekend Excluded')}})</p>
                    <p class="pt-5 font-semibold text-6xl ">
                        {{__('Days',['day'=>\Carbon\Carbon::createFromDate('2021-11-05')->diffInDaysFiltered(function (\Carbon\Carbon $date){
                            return !$date->isWeekend();
                        })])}}
                    </p>
                </div>
                <div
                    class="dark:bg-gray-900 bg-gray-50 col-span-2 sw-full text-center p-8 rounded-3xl hover:shadow-lg cursor-pointer">
                    <h2 class="text-2xl">{{__('Until Year 3 Start:')}} </h2>
                    <p>(2021-11-25)</p>
                    <p class="pt-5 font-semibold text-6xl ">
                        {{__('Days',['day'=>\Carbon\Carbon::createFromDate('2021-11-25')->diffInDays()])}}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
