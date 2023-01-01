<?php

namespace App\Http\Livewire\Admin\Tag;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use LivewireUI\Modal\ModalComponent;
use Spatie\Tags\Tag;

class EditModal extends ModalComponent
{
    public $tag;

    public mixed $name;

    public array $rules = [
        'name' => ['required', 'string', 'max:255', 'unique:tags'],
    ];

    public function mount($tag)
    {
        $this->tag = Tag::find($tag);
        $this->name = $this->tag->name;
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.admin.tag.edit-modal');
    }

    public function store()
    {
        $this->validate();

        $this->tag->update([
            'name' => $this->name,
        ]);

        $this->emit('tagUpdated');
        $this->closeModal();
    }
}
