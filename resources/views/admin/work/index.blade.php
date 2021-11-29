@extends('layouts.app')

@section('content')
    <div class="table w-full p-2 overflow-auto">
        {{--https://tailwindcomponents.com/component/breadcrumb-components--}}
        <div
            class="py-3 px-5 mb-2 bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-gray-100 rounded-md text-sm border border-gray-200 dark:border-gray-600">
            <ul class="flex">
                <li><a href="{{route('admin.home')}}" class="underline font-semibold">{{__('Home')}}</a></li>
                <li><span class="mx-2">/</span></li>
                <li>{{__('Works')}}</li>
            </ul>
        </div>

        <div class="flex justify-end">
            <a href="{{route('admin.works.create')}}"
               class="rounded-lg focus:outline-none bg-green-500 p-2 mb-2 text-white hover:shadow-lg hover:bg-green-700 dark:hover:shadow text-base font-thin float-right">
                {{__('Create New Work')}}
            </a>
        </div>

        <table class="w-full border ">
            <thead>
            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                <td class="p-2 border-r"> {{__('ID')}}</td>
                <td class="p-2 border-r"> {{__('Name')}}</td>
                <td class="p-2 border-r"> {{__('Description')}}</td>
                <td class="p-2 border-r"> {{__('Status')}}</td>
                <td class="p-2 border-r"> {{__('Tag')}}</td>
                <td class="p-2 border-r"> {{__('Action')}}</td>
            </tr>
            </thead>
            <tbody>
            @forelse($works as $work)
                <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                    <td class="p-2 border-r">{{$work->id}}</td>
                    <td class="p-2 border-r">{{$work->name}}</td>
                    <td class="p-2 border-r">
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
                    <td class="p-2 border-r">{{$work->status ? __('Active') : __('Deactivate')}}</td>
                    <td class="p-2 border-r">
                        <ul>
                            @forelse($work->tags as $tag)
                                <li>{{$tag->name ?? ''}}</li>
                            @empty
                                {{'-'}}
                            @endforelse
                        </ul>
                    </td>
                    <td class="p-2 border-r">
                        <a href="{{route('admin.works.show',$work)}}"
                           class="bg-green-500 hover:bg-green-700 p-2 text-white hover:shadow-lg text-xs font-thin">{{__('Show')}}</a>
                        <a href="{{route('admin.works.edit',$work)}}"
                           class="bg-blue-500 hover:bg-blue-700 p-2 text-white hover:shadow-lg text-xs font-thin">{{__('Edit')}}</a>
                        <form action="{{route('admin.works.destroy',$work)}}" class="inline" method="POST"
                              onsubmit="return confirm('Are you sure ? This action cannot be ')">
                            @csrf
                            @method('DELETE')
                            <input class="bg-red-500 hover:bg-red-700 p-2 text-white hover:shadow-lg text-xs font-thin"
                                   type="submit" value="{{__('Remove')}}"/>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center dark:text-white"> {{__('No Data')}}</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{$works->links()}}
    </div>
@endsection
