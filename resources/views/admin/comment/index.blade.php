@extends('layouts.app')

@section('content')
    @include('layouts.sidebar')
    <div class="table w-full p-2 overflow-auto">
        {{--https://tailwindcomponents.com/component/breadcrumb-components--}}
        <div
            class="py-3 px-5 mb-2 bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-gray-100 rounded-md text-sm border border-gray-200 dark:border-gray-600">
            <ul class="flex">
                <li><a href="{{route('admin.home')}}" class="underline font-semibold">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li>Works</li>
            </ul>
        </div>

        <table class="w-full border mt-8">
            <thead>
            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                <td class="p-2 border-r"> ID</td>
                <td class="p-2 border-r"> Name</td>
                <td class="p-2 border-r"> Email</td>
                <td class="p-2 border-r"> Comment</td>
                <td class="p-2 border-r"> Post</td>
                <td class="p-2 border-r"> Action</td>
            </tr>
            </thead>
            <tbody>
            @forelse($comments as $comment)
                <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                    <td class="p-2 border-r">{{$comment->id}}</td>
                    <td class="p-2 border-r">{{$comment->name}}</td>
                    <td class="p-2 border-r">{{$comment->email}}</td>
                    <td class="p-2 border-r">{{$comment->comment}}</td>
                    <td class="p-2 border-r"><a href="{{route('public.posts.show',$comment->post)}}" class="underline">{{$comment->post->title}}</a></td>

                    <td class="p-2 border-r">
                        <form action="{{route('admin.comment.destroy',$comment)}}" class="inline" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="bg-red-500 hover:bg-red-700 p-2 text-white hover:shadow-lg text-xs font-thin"
                                   type="submit" value="Remove"/>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center dark:text-white"> No Data</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{$comments->links()}}
    </div>
@endsection
