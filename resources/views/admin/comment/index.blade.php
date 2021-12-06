@extends('layouts.app')

@section('content')
    <div class="w-full p-2">
        <div
            class="py-3 px-5 mb-2 bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-gray-100 rounded-md text-sm border border-gray-200 dark:border-gray-600">
            <ul class="flex">
                <li><a href="{{route('admin.home')}}" class="underline font-semibold">{{__('Home')}}</a></li>
                <li><span class="mx-2">/</span></li>
                <li>{{__('Comments')}}</li>
            </ul>
        </div>

        <table class="w-full border mt-8">
            <thead>
            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                <td class="p-2 border-r hidden sm:table-cell"> {{__('ID')}}</td>
                <td class="p-2 border-r hidden sm:table-cell"> {{__('Name')}}</td>
                <td class="p-2 border-r hidden sm:table-cell"> {{__('Email')}}</td>
                <td class="p-2 border-r"> {{__('Comment')}}</td>
                <td class="p-2 border-r hidden sm:table-cell"> {{__('Post')}}</td>
                <td class="p-2 border-r"> {{__('Action')}}</td>
            </tr>
            </thead>
            <tbody>
            @forelse($comments as $comment)
                <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                    <td class="p-2 border-r hidden sm:table-cell">{{$comment->id}}</td>
                    <td class="p-2 border-r hidden sm:table-cell">{{$comment->name}}</td>
                    <td class="p-2 border-r hidden sm:table-cell">{{$comment->email}}</td>
                    <td class="p-2 border-r">{{$comment->comment}}</td>
                    <td class="p-2 border-r hidden sm:table-cell"><a href="{{route('public.posts.show',$comment->post)}}"
                                                class="underline">{{$comment->post->title}}</a></td>

                    <td class="p-2 border-r">
                        <form action="{{route('admin.comment.destroy',$comment)}}" class="inline" method="POST">
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
        {{$comments->links()}}
    </div>
@endsection
