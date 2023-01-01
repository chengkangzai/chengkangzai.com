<?php

namespace App\Http\Livewire\Admin\Tag;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use LivewireUI\Modal\ModalComponent;
use Spatie\Tags\Tag;

class CreateModal extends ModalComponent
{
    public $rules = [
        'name' => ['required', 'string', 'max:255', 'unique:tags'],
    ];

    public string $name = '';

    public function render(): Factory|View|Application
    {
        return view('livewire.admin.tag.create-modal');
    }

    public function store()
    {
        $this->validate();

        Tag::create([
            'name' => $this->name,
        ]);

        //emit event
        $this->emit('tagAdded');
        $this->closeModal();
    }
}
