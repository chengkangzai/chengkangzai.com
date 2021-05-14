@extends('layouts.app')

@section('content')
    @include('layouts.sidebar')
    <div class="table w-full p-2 overflow-auto">
        {{--https://tailwindcomponents.com/component/breadcrumb-components--}}
        <div
            class="py-3 px-5 mb-2 bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-gray-100 rounded-md text-sm border border-gray-200 dark:border-gray-600">
            <ul class="flex">
                <li><a href="{{route('home')}}" class="underline font-semibold">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li>Post</li>
            </ul>
        </div>


        <div class="flex justify-end">
            <a href="{{route('admin.posts.create')}}"
               class="rounded-lg focus:outline-none bg-green-500 p-2 mb-2 text-white hover:shadow-lg hover:bg-green-700 dark:hover:shadow text-base font-thin float-right">
                Create New Post</a>
        </div>

        <table class="w-full border ">
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
                        <a href="{{route('admin.posts.show',$post)}}"
                           class="bg-green-500 hover:bg-green-700 p-2 text-white hover:shadow-lg text-xs font-thin">Show</a>
                        <a href="{{route('admin.posts.edit',$post)}}"
                           class="bg-blue-500 hover:bg-blue-700 p-2 text-white hover:shadow-lg text-xs font-thin">Edit</a>
                        <form action="{{route('admin.posts.destroy',$post)}}" class="inline"
                              method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="bg-red-500 hover:bg-red-700 p-2 text-white hover:shadow-lg text-xs font-thin" type="submit"
                                   value="Remove"/>
                        </form>
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
