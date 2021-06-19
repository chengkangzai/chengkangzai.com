@extends('layouts.app')

@section('content')
    @include('layouts.sidebar')
    <div class="table w-full p-2 overflow-auto">
        {{--https://tailwindcomponents.com/component/breadcrumb-components--}}
        <div
            class="py-3 px-5 mb-2 bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-gray-100 rounded-md text-sm border border-gray-200 dark:border-gray-600">
            <ul class="flex">
                <li><a href="{{route('admin.home')}}" class="underline font-semibold">{{__('Home')}}</a></li>
                <li><span class="mx-2">/</span></li>
                <li>{{__('Tags')}}</li>
            </ul>
        </div>

        <div class="flex justify-end">
            <a href="{{route('admin.tags.create')}}"
               class="rounded-lg focus:outline-none bg-green-500 p-2 mb-2 text-white hover:shadow-lg hover:bg-green-700 dark:hover:shadow text-base font-thin float-right">
                {{__('Create New Tag')}}</a>
        </div>
        <div class="w-full sm:w-2/3 mx-auto mb-2">
            @include('partial.error-card')
        </div>
        <table class="w-full sm:w-2/3 md:1/2 mx-auto border ">
            <thead>
            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                <td class="p-2 border-r"> {{__('ID')}}</td>
                <td class="p-2 border-r"> {{__('Name')}}</td>
                <td class="p-2 border-r"> {{__('Action')}}</td>
            </tr>
            </thead>
            <tbody>
            @forelse($tags as $work)
                <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                    <td class="p-2 border-r">{{$work->id}}</td>
                    <td class="p-2 border-r">{{$work->name}}</td>
                    <td class="p-2 border-r">
                        <a href="{{route('admin.tags.edit',$work)}}"
                           class="bg-blue-500 hover:bg-blue-700 p-2 text-white hover:shadow-lg text-xs font-thin">{{__('Edit')}}</a>
                        <form action="{{route('admin.tags.destroy',$work)}}" class="inline"
                              method="POST">
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
        {{$tags->links()}}
    </div>
@endsection
