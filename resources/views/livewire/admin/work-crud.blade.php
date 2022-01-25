<div>
    @php
        /* @var App\Models\Works $work */
    @endphp
    <div class="py-3 px-5 mb-2 rounded-md text-base border border-gray-500 bg-white">
        <ul class="flex">
            <li><a href="{{route('admin.home')}}" class="underline hover:text-gray-500">{{__('Home')}}</a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li>{{__('Works')}}</li>
        </ul>
    </div>

    <div class="flex flex-row-reverse overflow-hidden w-full">
        <x-button class="text-base my-1" wire:click="$emit('openModal', 'admin.work.create-modal')">
            {{ __('Create Work') }}
        </x-button>
    </div>

    <div class="flex flex-col mt-8">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div
                class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full">
                    <thead>
                    <tr>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('Title') }}
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('Description') }}
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('Status') }}
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                    </tr>
                    </thead>

                    <tbody class="bg-white">
                    @foreach($works as $work)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img
                                            src="{{$work->getMedia('photos')->first()->getUrl('thumb')}}"
                                            alt="avatar" class="h-10 w-10 rounded-full object-cover">
                                    </div>

                                    <div class="ml-4">
                                        <div class="text-sm leading-5 font-medium text-gray-900">{{ $work->name }}</div>
                                        <div
                                            class="text-sm leading-5 text-gray-500">{{ $work->tags_count }} {{__('Tags')}}</div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                @foreach($work->translations as $des)
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 truncate">
                                         EN : {{Str::limit($des['en'] , 50)}}
                                    </span>
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800 truncate">
                                         ZH : {{Str::limit($des['zh'] , 50)}}
                                    </span>
                                @endforeach
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                @if($work->status)
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        {{ __('Activated') }}
                                    </span>
                                @else
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        {{ __('Deactivate') }}
                                    </span>
                                @endif
                            </td>


                            <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                <x-button :href="route('admin.works.show', $work)" bg="bg-green-600"
                                          hoverBg="hover:bg-green-500">
                                    {{ __('View') }}
                                </x-button>
                                <x-button :href="route('admin.works.edit',$work)">
                                    {{ __('Edit') }}
                                </x-button>
                                <form action="{{route('admin.works.destroy',$work)}}" class="inline-block p-0 m-0"
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
                    {{ $works->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
