@extends('layouts.app')

@section('content')
    <div class="w-full p-2">
        <div
            class="py-3 px-5 mb-2 bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-gray-100 rounded-md text-sm border border-gray-200 dark:border-gray-600">
            <ul class="flex">
                <li><a href="{{route('admin.home')}}" class="underline font-semibold">{{__('Home')}}</a></li>
                <li><span class="mx-2">/</span></li>
                <li>{{__('User')}}</li>
            </ul>
        </div>

        <div class="flex justify-end">
            <a href="{{route('admin.users.create')}}"
               class="rounded-lg focus:outline-none bg-green-500 p-2 mb-2 text-white hover:shadow-lg hover:bg-green-700 dark:hover:shadow font-bold float-right">
                {{__('Create New User')}}</a>
        </div>
        @include('partial.success-card')
        @include('partial.error-card')
        <table class="border w-full">
            <thead>
            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                <td class="p-2 border-r"> {{__('ID')}}</td>
                <td class="p-2 border-r"> {{__('Name')}}</td>
                <td class="p-2 border-r"> {{__('Email')}}</td>
                <td class="p-2 border-r"> {{__('Role')}}</td>
                <td class="p-2 border-r"> {{__('Action')}}</td>
            </tr>
            </thead>
            <tbody>
            @forelse($users as $user)
                <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                    <td class="p-2 border-r">{{$user->id}}</td>
                    <td class="p-2 border-r">{{$user->name}}</td>
                    <td class="p-2 border-r">{{$user->email}}</td>
                    <td class="p-2 border-r">{{$user->roles->first()->name ?? ''}}</td>
                    <td class="p-2 border-r space-y-2">
                        <a href="{{route('admin.users.show',$user)}}"
                           class="block sm:inline sm:p-2 mx-auto w-min bg-green-500 hover:bg-green-700 px-2 py-1 text-white hover:shadow-lg font-bold rounded">
                            {{__('Show')}}</a>
                        <a href="{{route('admin.users.edit',$user)}}"
                           class="block sm:inline sm:p-2 mx-auto w-min bg-blue-500 hover:bg-blue-700 px-2 py-1 text-white hover:shadow-lg font-bold rounded">
                            {{__('Edit')}}</a>
                        <form action="{{route('admin.users.destroy',$user)}}" class="inline-flex p-0 m-0"
                              method="POST">
                            @csrf
                            @method('DELETE')
                            <input
                                class="bg-red-500 hover:bg-red-700 px-2 py-1 text-white hover:shadow-lg font-bold rounded"
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
        {{$users->links()}}
    </div>
@endsection
