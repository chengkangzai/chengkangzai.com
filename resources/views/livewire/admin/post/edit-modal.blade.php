<div class="block w-min- h-full bg-white space-y-4 py-10 rounded-lg">
    <h2 class="text-2xl px-5 font-bold"> {{__('Edit Posts')}}</h2>
    <form class="space-y-3 dark:text-white px-5" wire:submit.prevent="store">
        {{$this->form}}
        <div class="flex justify-end pt-2">
            <input type="submit" value="{{__('Submit')}}"
                   class="inline-flex items-center text-white px-5 py-2 rounded-lg overflow-hidden focus:outline-none bg-indigo-500 hover:bg-indigo-600 font-semibold tracking-tight cursor-pointer">
        </div>
    </form>
</div>
