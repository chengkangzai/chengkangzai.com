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

class EditModal extends ModalComponent implements HasForms
{
    use InteractsWithForms;

    public $role;

    public function mount($role)
    {
        $this->role = Role::findOrFail($role);

        $this->form->fill([
            'name' => $this->role->name,
            'permissions' => $this->role->permissions->pluck('id')->toArray(),
        ]);
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.admin.role.edit-modal');
    }

    public function store()
    {
        $formData = $this->form->validate();

        $this->role->syncPermissions($formData['permissions']);

        $this->closeModalWithEvents(['roleUpdated']);
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
                ->label(__('Permissions')),
        ];
    }

    protected function getFormModel(): Role
    {
        return new Role();
    }
}
