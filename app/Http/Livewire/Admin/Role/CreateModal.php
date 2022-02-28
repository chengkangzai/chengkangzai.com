<?php

namespace App\Http\Livewire\Admin\Role;

use Filament\Forms\Components\BelongsToManyMultiSelect;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use LivewireUI\Modal\ModalComponent;
use Spatie\Permission\Models\Role;

class CreateModal extends ModalComponent implements HasForms
{
    use InteractsWithForms;

    public function mount()
    {
        $this->fill([
            'name' => '',
        ]);
        $this->form->fill();
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.admin.role.create-modal');
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('name')
                ->required()
                ->autofocus()
                ->label(__('Name')),
            BelongsToManyMultiSelect::make('permissions')
                ->relationship('permissions', 'name')
                ->preload()
                ->required()
                ->label(__('Permissions'))
        ];
    }

    protected function getFormModel(): Role
    {
        return new Role();
    }

    public function store()
    {
        $formData = $this->form->validate();
        $role = Role::create([
            'name' => $formData['name'],
        ]);

        $role->syncPermissions($formData['permissions']);

        $this->closeModalWithEvents(['roleAdded']);
    }
}
