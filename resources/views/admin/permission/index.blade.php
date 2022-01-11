@extends('layouts.app')

@section('content')
    <div class="w-full p-2">
        <div
            class="py-3 px-5 mb-2 bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-gray-100 rounded-md text-sm border border-gray-200 dark:border-gray-600">
            <ul class="flex">
                <li><a href="{{route('admin.home')}}" class="underline font-semibold">{{__('Home')}}</a></li>
                <li><span class="mx-2">/</span></li>
                <li>{{__('Permission')}}</li>
            </ul>
        </div>

        <table class="border w-full sm:w-1/2 sm:mx-auto">
            <thead>
            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                <td class="p-2 border-r"> {{__('ID')}}</td>
                <td class="p-2 border-r"> {{__('Name')}}</td>
                <td class="p-2 border-r"> {{__('Action')}}</td>
            </tr>
            </thead>
            <tbody>
            @forelse($permissions as $permission)
                <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                    <td class="border-r">{{$permission->id}}</td>
                    <td class="border-r">{{$permission->name}}</td>
                    <td class="border-r py-2">
                        <a href="{{route('admin.permissions.show',$permission)}}"
                           class="block sm:inline sm:p-2 mx-auto w-min bg-violet-500 hover:bg-violet-700 px-2 py-1 text-white hover:shadow-lg font-bold rounded">
                            {{__('Show')}}
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center dark:text-white"> {{__('No Data')}}</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{$permissions->links()}}
    </div>
@endsection
