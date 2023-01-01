<div class="block h-full w-full space-y-4 bg-white py-4">
    <h2 class="px-5 text-2xl font-bold"> {{ __('Update') }} {{ $name }}</h2>
    @include('partial.error-card')
    <form class="space-y-3 px-5 dark:text-white" wire:submit.prevent="store">
        @csrf
        <div class="space-y-2">
            <label for="name" class="block font-medium tracking-tight">Name</label>
            <input id="name" type="text" placeholder="{{ __('Name') }}" name="name" wire:model="name"
                class="focus:shadow-outline w-full rounded border border-gray-400 px-3 py-2 text-gray-800 placeholder-gray-400" />
        </div>

        <div class="flex justify-end pt-2">
            <input type="submit" value="{{ __('Submit') }}"
                class="inline-flex cursor-pointer items-center overflow-hidden rounded-lg bg-indigo-500 px-5 py-2 font-semibold tracking-tight text-white hover:bg-indigo-600 focus:outline-none">
        </div>
    </form>
</div>
