<div class="block w-full h-full bg-white space-y-4 mb-10 mt-5">
    <h2 class="text-2xl px-5 font-bold"> {{__('Create Role')}}</h2>
    <form class="space-y-3 dark:text-white px-5" wire:submit.prevent="store">
        {{$this->form}}
        <div class="flex justify-end pt-2">
            <input type="submit" value="{{__('Submit')}}"
                   class="inline-flex items-center text-white px-5 py-2 rounded-lg overflow-hidden focus:outline-none bg-indigo-500 hover:bg-indigo-600 font-semibold tracking-tight cursor-pointer">
        </div>
    </form>
</div>
