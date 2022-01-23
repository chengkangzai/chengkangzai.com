@extends('layouts.admin')

@section('content')
    <div class="py-3 px-5 mb-2 rounded-md text-base border border-gray-500 bg-white">
        <ul class="flex">
            <li><a href="{{route('admin.home')}}" class="underline hover:text-gray-500">{{__('Home')}}</a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li><a href="{{route('admin.posts.index')}}" class="underline hover:text-gray-500">{{__('Posts')}}</a></li>
            <li><span class="mx-2">/</span></li>
            <li>{{__('Edit')}}</li>
        </ul>
    </div>
    <livewire:admin.post.edit-modal :post="$post"/>
@endsection
