@php
    /* @var App\Models\User $user */
@endphp

@extends('layouts.admin')

@section('header')
    {{ __('Users') }}
@endsection

@section('content')
    <div class="flex flex-row-reverse overflow-hidden w-full">
        <x-button class="text-base my-1" :href="route('admin.users.create')">
            {{ __('Create User') }}
        </x-button>
    </div>

    <div class="flex flex-col mt-8">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div
                class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full">
                    <thead>
                    <tr>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('Name') }}
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('Role') }}
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                    </tr>
                    </thead>

                    <tbody class="bg-white">
                    @foreach($users as $user)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img
                                            src="https://ui-avatars.com/api/?name={{ $user->name }}&background=random&size=128"
                                            alt="avatar" class="h-10 w-10 rounded-full object-cover">
                                    </div>

                                    <div class="ml-4">
                                        <div class="text-sm leading-5 font-medium text-gray-900">{{ $user->name }}</div>
                                        <div class="text-sm leading-5 text-gray-500">{{ $user->email }}</div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        {{ $user->roles->first()->name ?? '' }}
                                </span>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                <x-button :href="route('admin.users.show', $user->id)" bg="bg-green-600"
                                          hoverBg="hover:bg-green-500">
                                    {{ __('View') }}
                                </x-button>
                                <x-button :href="route('admin.users.edit',$user)">
                                    {{ __('Edit') }}
                                </x-button>
                                <form action="{{route('admin.users.destroy',$user)}}" class="inline-block p-0 m-0"
                                      method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <x-input type="submit"
                                             class="bg-red-600 py-1 px-3 text-white cursor-pointer mt-0 hover:bg-red-500"
                                             value="{{__('Remove')}}"/>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="flex flex-col items-center px-5 py-5 bg-white border-t xs:flex-row xs:justify-between">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
