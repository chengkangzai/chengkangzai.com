<div>
    <div
        class="py-3 px-5 mb-2 rounded-md text-base border border-gray-500 bg-white">
        <ul class="flex">
            <li><a href="{{route('admin.home')}}" class="underline hover:text-gray-500">{{__('Home')}}</a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li>{{__('Users')}}</li>
        </ul>
    </div>

    <div class="flex flex-row-reverse overflow-hidden w-full">
        <x-button class="text-base my-1" wire:click="$emit('openModal', 'admin.user.create-modal')">
            {{ __('Create User') }}
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
                                <button
                                    wire:click="$emit('openModal', 'admin.user.show-modal', {{ json_encode(["user" => $user->id]) }})"
                                    class="inline-block py-1 px-3 text-center rounded-md text-white text-sm bg-green-600 hover:bg-green-500">
                                    {{__('View')}}
                                </button>
                                <button
                                    wire:click="$emit('openModal', 'admin.user.edit-modal', {{ json_encode(["user" => $user->id]) }})"
                                    class="inline-block py-1 px-3 text-center rounded-md text-white text-sm bg-blue-600 hover:bg-blue-500">
                                    {{__('Edit')}}
                                </button>
                                <x-button wire:click="remove({{$user}})" bg="bg-red-600" hoverBg="hover:bg-red-500">
                                    {{ __('Delete') }}
                                </x-button>
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
</div>
