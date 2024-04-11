<x-filament-panels::page>
    <form wire:submit.prevent="submit">
        {{$this->form}}

        <div class="py-4">
            {{$this->getSubmitButton()}}
        </div>
    </form>
</x-filament-panels::page>
