@extends('layouts.app')

@section('content')
    @include('layouts.sidebar')
    <div class="table w-full p-2">
        <table class="w-full border">
            <thead>
            <tr class="bg-gray-100 text-center border-b text-base text-gray-600">
                <td class="p-2 border-r"> ID</td>
                <td class="p-2 border-r"> Title</td>
                <td class="p-2 border-r"> Status</td>
                <td class="p-2 border-r"> Slug</td>
                <td class="p-2 border-r"> Total Comment</td>
                <td class="p-2 border-r"> Action</td>
            </tr>
            </thead>
            <tbody>
            @forelse($posts as $post)
                <tr class="bg-gray-100 text-center border-b text-base text-gray-600">
                    <td class="p-2 border-r">{{$post->id}}</td>
                    <td class="p-2 border-r">{{$post->title}}</td>
                    <td class="p-2 border-r">{{$post->status}}</td>
                    <td class="p-2 border-r">{{$post->slug}}</td>
                    <td class="p-2 border-r">{{$post->comments_count}}</td>
                    <td class="p-2 border-r">
                        <a href="#" class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin">Edit</a>
                        <a href="#" class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin">Remove</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center"> No Data</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{$posts->links()}}
    </div>
@endsection
