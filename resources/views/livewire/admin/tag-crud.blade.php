<div class="w-full p-2">
    <div
        class="py-3 px-5 mb-2 bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-gray-100 rounded-md text-sm border border-gray-200 dark:border-gray-600">
        <ul class="flex">
            <li><a href="{{route('admin.home')}}" class="underline font-semibold">{{__('Home')}}</a></li>
            <li><span class="mx-2">/</span></li>
            <li>{{__('Tags')}}</li>
        </ul>
    </div>

    <div class="flex justify-end">
        <button wire:click="$emit('openModal', 'admin.tag.create-modal')"
                class="rounded-lg focus:outline-none bg-violet-500 p-2 mb-2 text-white hover:shadow-lg hover:bg-violet-700 dark:hover:shadow font-bold float-right">
            {{__('Create New Tag')}}</button>
    </div>
    <div class="w-full sm:w-2/3 mx-auto mb-2">
        @include('partial.error-card')
        @include('partial.success-card')
    </div>
    <table class="w-full sm:w-2/3 md:1/2 mx-auto border ">
        <thead>
        <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
            <td class="p-2 border-r"> {{__('ID')}}</td>
            <td class="p-2 border-r"> {{__('Name')}}</td>
            <td class="p-2 border-r"> {{__('Action')}}</td>
        </tr>
        </thead>
        <tbody>
        @forelse($tags as $tag)
            <tr class="bg-gray-100 dark:bg-gray-800 text-center border-b text-base text-gray-600 dark:text-gray-400">
                <td class="p-2 border-r">{{$tag->id}}</td>
                <td class="p-2 border-r">{{$tag->name}}</td>
                <td class="p-2 border-r space-y-2">
                    <button wire:click="$emit('openModal', 'admin.tag.edit-modal', {{ json_encode(["tag" => $tag->id]) }})"
                            class="inline bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded focus:outline-lg focus:shadow-outline">
                        {{__('Edit')}}
                    </button>
                    <button wire:click="remove({{$tag}})"
                            class="inline bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded focus:outline-lg focus:shadow-outline">
                        {{__('Remove')}}
                    </button>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center dark:text-white"> {{__('No Data')}}</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    {{$tags->links()}}
</div>
