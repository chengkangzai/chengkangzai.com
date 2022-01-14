<div class="w-full p-2">
    @section('header')
        {{__('Tags')}}
    @endsection
    <div class="py-3 px-5 mb-2 rounded-md text-base border border-gray-500 bg-white">
        <ul class="flex">
            <li><a href="{{route('admin.home')}}" class="underline hover:text-gray-500">{{__('Home')}}</a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li>{{__('Tags')}}</li>
        </ul>
    </div>

    <div class="flex flex-row-reverse overflow-hidden w-full">
        <x-button class="text-base my-1" wire:click="$emit('openModal', 'admin.tag.create-modal')">
            {{ __('Create Tag') }}
        </x-button>
    </div>

    <div class="flex flex-col mt-8">
        @include('partial.error-card')
        @include('partial.success-card')
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div
                class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full">
                    <thead>
                    <tr>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('Title') }}
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                    </tr>
                    </thead>

                    <tbody class="bg-white">
                    @foreach($tags as $tag)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="ml-4">
                                        <div class="text-sm leading-5 font-medium text-gray-900">{{ $tag->name }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                <button
                                    wire:click="$emit('openModal', 'admin.tag.edit-modal', {{ json_encode(["tag" => $tag->id]) }})"
                                    class="inline-block py-1 px-3 text-center rounded-md text-white text-sm bg-blue-600 hover:bg-blue-500">
                                    {{__('Edit')}}
                                </button>
                                <button wire:click="remove({{$tag}})"
                                        class="inline-block py-1 px-3 text-center rounded-md text-white text-sm bg-red-600 hover:bg-red-500">
                                    {{__('Remove')}}
                                </button>

                                {{--                                <x-button--}}
                                {{--                                    wire:click="$emit('openModal', 'admin.tag.edit-modal', {{ json_encode(["tag" => $tag->id]) }})">--}}
                                {{--                                    {{ __('Edit') }}--}}
                                {{--                                </x-button>--}}
                                {{--                                <x-button wire:click="$emit('deleteTag', {{ $tag->id }})"--}}
                                {{--                                          class="bg-red-600 py-1 px-3 text-white cursor-pointer mt-0 hover:bg-red-500">--}}
                                {{--                                    {{ __('Delete') }}--}}
                                {{--                                </x-button>--}}
                                {{--                                <button--}}
                                {{--                                    wire:click="$emit('openModal', 'admin.tag.edit-modal', {{ json_encode(["tag" => $tag->id]) }})"--}}
                                {{--                                    class="inline bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded focus:outline-lg focus:shadow-outline">--}}
                                {{--                                    {{__('Edit')}}--}}
                                {{--                                </button>--}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="flex flex-col items-center px-5 py-5 bg-white border-t xs:flex-row xs:justify-between">
                    {{ $tags->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
