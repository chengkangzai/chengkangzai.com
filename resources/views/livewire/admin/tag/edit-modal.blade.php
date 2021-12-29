<div class="block w-full h-full bg-white space-y-4 py-4">
    <h2 class="text-2xl px-5 font-bold"> {{__('Update')}} {{$name}}</h2>
    @include('partial.error-card')
    <form class="space-y-3 dark:text-white px-5" wire:submit.prevent="store">
        @csrf
        <div class="space-y-2">
            <label for="name" class="block font-medium tracking-tight">Name</label>
            <input id="name" type="text" placeholder="{{__('Name')}}" name="name" wire:model="name"
                   class="w-full border border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:shadow-outline px-3 py-2"/>
        </div>

        <div class="flex justify-end pt-2">
            <input type="submit" value="{{__('Submit')}}"
                   class="inline-flex items-center text-white px-5 py-2 rounded-lg overflow-hidden focus:outline-none bg-indigo-500 hover:bg-indigo-600 font-semibold tracking-tight cursor-pointer">
        </div>
    </form>
</div>
