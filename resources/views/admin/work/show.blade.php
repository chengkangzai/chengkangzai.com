@extends('layouts.app')

@section('content')
    <div class="bg-gray-100 dark:bg-gray-800 relative h-screen relative w-full">
        <div class="flex items-start justify-between">
            <div class="flex flex-col w-full">
                <div class="overflow-auto h-screen">
                    <div class="table w-full h-auto p-2">
                        <div
                            class="py-3 px-5 mb-2 bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-gray-100 rounded-md text-sm border border-gray-200 dark:border-gray-600">
                            <ul class="flex">
                                <li><a href="{{route('admin.home')}}" class="underline font-semibold">{{__('Home')}}</a>
                                </li>
                                <li><span class="mx-2">/</span></li>
                                <li><a href="{{route('admin.works.index')}}"
                                       class="underline font-semibold">{{__('Work')}}</a>
                                </li>
                                <li><span class="mx-2">/</span></li>
                                <li>{{__('Show')}}</li>
                            </ul>
                        </div>
                        <table class="table w-full sm:w-2/3 border mx-auto mb-4">
                            <thead>
                            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                                <td class="border p-2">{{__('ID')}}</td>
                                <td>{{$work->id}} </td>
                            </tr>
                            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                                <td class="border p-2">{{__('Name')}}</td>
                                <td>{{$work->name}} </td>
                            </tr>
                            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                                <td class="border p-2">{{__('Description')}}</td>
                                <td>
                                    @foreach($work->translations as $des)
                                        <table class="mx-auto w-4/5 my-4 border">
                                            <tr class="border p-2">
                                                <td class="border p-2">EN</td>
                                                <td>{{$des['en']}}</td>
                                            </tr>
                                            <tr class="border p-2">
                                                <td class="border p-2">ZH</td>
                                                <td>
                                                    @if(isset($des['zh']))
                                                        {{$des['zh']}}
                                                    @else
                                                        NONE
                                                    @endif
                                                </td>
                                            </tr>
                                        </table>
                                    @endforeach
                                </td>
                            </tr>
                            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                                <td class="border p-2">{{__('Image')}}</td>
                                <td><img src="{{$imgLink}}" alt="Image for Work" class="mx-auto"></td>
                            </tr>
                            @if($work->url)
                                <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                                    <td class="border p-2">{{__('Project URL')}}</td>
                                    <td><a href="{{$work->url}}" class="underline">{{__('Project URL')}}</a></td>
                                </tr>
                            @endif
                            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                                <td class="border p-2">{{__('Project Repo')}}</td>
                                <td><a href="{{$work->github_url}}" class="underline">{{__('Github Url')}}</a></td>
                            </tr>
                            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                                <td class="border p-2">{{__('Tag')}}</td>
                                <td>
                                    @foreach($work->tags as $tag)
                                        ~ {{$tag->name}}
                                    @endforeach
                                </td>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

