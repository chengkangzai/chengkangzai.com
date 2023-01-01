@php
/* @var App\Models\Works $work */
/* @var \Illuminate\Support\Collection $works */
@endphp

@extends('layouts.admin')

@section('header')
    {{ __('Work') }}
@endsection

@section('content')
    <div class="mb-2 rounded-md border border-gray-500 bg-white py-3 px-5 text-base">
        <ul class="flex">
            <li><a href="{{ route('admin.home') }}" class="underline hover:text-gray-500">{{ __('Home') }}</a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li>{{ __('Works') }}</li>
        </ul>
    </div>

    <div class="flex w-full flex-row-reverse overflow-hidden">
        <x-button class="my-1 text-base" :href="route('admin.works.create')">
            {{ __('Create Work') }}
        </x-button>
    </div>

    <div class="mt-8 flex flex-col">
        <div class="-my-2 overflow-x-auto py-2 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="inline-block min-w-full overflow-hidden border-b border-gray-200 align-middle shadow sm:rounded-lg">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-left text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                {{ __('Title') }}
                            </th>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-left text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                {{ __('Description') }}
                            </th>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-left text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                {{ __('Status') }}
                            </th>
                            <th class="border-b border-gray-200 bg-gray-50 px-6 py-3"></th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                        @foreach ($works as $work)
                            <tr>
                                <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 flex-shrink-0">
                                            <img src="{{ $work->img_link }}" alt="avatar"
                                                class="h-10 w-10 rounded-full object-cover">
                                        </div>

                                        <div class="ml-4">
                                            <div class="text-sm font-medium leading-5 text-gray-900">{{ $work->name }}
                                            </div>
                                            <div class="text-sm leading-5 text-gray-500">{{ $work->tags_count }}
                                                {{ __('Tags') }}</div>
                                        </div>
                                    </div>
                                </td>

                                <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                    @foreach ($work->translations as $des)
                                        <span
                                            class="inline-flex truncate rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">
                                            EN : {{ Str::limit($des['en'], 50) }}
                                        </span>
                                        <span
                                            class="inline-flex truncate rounded-full bg-yellow-100 px-2 text-xs font-semibold leading-5 text-yellow-800">
                                            ZH : {{ Str::limit($des['zh'], 50) }}
                                        </span>
                                    @endforeach
                                </td>

                                <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                    @if ($work->status === \App\Models\Works::STATUS['ACTIVE'])
                                        <span
                                            class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">
                                            {{ __('Activated') }}
                                        </span>
                                    @else
                                        <span
                                            class="inline-flex rounded-full bg-yellow-100 px-2 text-xs font-semibold leading-5 text-yellow-800">
                                            {{ __('Deactivate') }}
                                        </span>
                                    @endif
                                </td>


                                <td
                                    class="whitespace-no-wrap border-b border-gray-200 px-6 py-4 text-right text-sm font-medium leading-5">
                                    <x-button :href="route('admin.works.show', $work)" bg="bg-green-600" hoverBg="hover:bg-green-500">
                                        {{ __('View') }}
                                    </x-button>
                                    <x-button :href="route('admin.works.edit', $work)">
                                        {{ __('Edit') }}
                                    </x-button>
                                    <form action="{{ route('admin.works.destroy', $work) }}" class="m-0 inline-block p-0"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <x-input type="submit"
                                            class="mt-0 cursor-pointer bg-red-600 py-1 px-3 text-white hover:bg-red-500"
                                            value="{{ __('Remove') }}" />
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="xs:flex-row xs:justify-between flex flex-col items-center border-t bg-white px-5 py-5">
                    {{ $works->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
