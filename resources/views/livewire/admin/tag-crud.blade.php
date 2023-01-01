<div class="w-full p-2">
    @section('header')
        {{ __('Tags') }}
    @endsection
    <div class="mb-2 rounded-md border border-gray-500 bg-white py-3 px-5 text-base">
        <ul class="flex">
            <li><a href="{{ route('admin.home') }}" class="underline hover:text-gray-500">{{ __('Home') }}</a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li>{{ __('Tags') }}</li>
        </ul>
    </div>

    <div class="flex w-full flex-row-reverse overflow-hidden">
        <x-button class="my-1 text-base" wire:click="$emit('openModal', 'admin.tag.create-modal')">
            {{ __('Create Tag') }}
        </x-button>
    </div>

    <div class="mt-8 flex flex-col">
        @include('partial.error-card')
        @include('partial.success-card')
        <div class="-my-2 overflow-x-auto py-2 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div
                class="inline-block min-w-full overflow-hidden border-b border-gray-200 align-middle shadow sm:rounded-lg">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-left text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                {{ __('Title') }}
                            </th>
                            <th class="border-b border-gray-200 bg-gray-50 px-6 py-3"></th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                        @foreach ($tags as $tag)
                            <tr>
                                <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium leading-5 text-gray-900">{{ $tag->name }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td
                                    class="whitespace-no-wrap border-b border-gray-200 px-6 py-4 text-right text-sm font-medium leading-5">
                                    <button
                                        wire:click="$emit('openModal', 'admin.tag.edit-modal', {{ json_encode(['tag' => $tag->id]) }})"
                                        class="inline-block rounded-md bg-blue-600 py-1 px-3 text-center text-sm text-white hover:bg-blue-500">
                                        {{ __('Edit') }}
                                    </button>
                                    <button wire:click="remove({{ $tag }})"
                                        class="inline-block rounded-md bg-red-600 py-1 px-3 text-center text-sm text-white hover:bg-red-500">
                                        {{ __('Remove') }}
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="xs:flex-row xs:justify-between flex flex-col items-center border-t bg-white px-5 py-5">
                    {{ $tags->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
