@php
    /* @var App\Models\Comment $comment */
    /* @var \Illuminate\Support\Collection $comments */
@endphp

@extends('layouts.admin')

@section('header')
    {{ __('Comments') }}
@endsection

@section('content')
    <div class="py-3 px-5 mb-2 rounded-md text-base border border-gray-500 bg-white">
        <ul class="flex">
            <li><a href="{{route('admin.home')}}" class="underline hover:text-gray-500">{{__('Home')}}</a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li>{{__('Comments')}}</li>
        </ul>
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
                            {{ __('Comment') }}
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('Post') }}
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                    </tr>
                    </thead>

                    <tbody class="bg-white">
                    @foreach($comments as $comment)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img
                                            src="https://ui-avatars.com/api/?name={{ $comment->name }}&background=random&size=128"
                                            alt="avatar" class="h-10 w-10 rounded-full object-cover">
                                    </div>

                                    <div class="ml-4">
                                        <div
                                            class="text-sm leading-5 font-medium text-gray-900">{{ $comment->name }}</div>
                                        <div class="text-sm leading-5 text-gray-500">{{ $comment->email }}</div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">{{ $comment->comment }}</div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">
                                    <a href="{{ route('admin.posts.show', $comment->post->id) }}"
                                       class="underline hover:text-gray-500">{{ $comment->post->title }}</a>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                <form action="{{route('admin.comment.destroy',$comment)}}" class="inline-block p-0 m-0"
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
                    {{ $comments->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
