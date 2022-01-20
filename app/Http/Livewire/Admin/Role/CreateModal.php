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
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateModal extends ModalComponent implements HasForms
{
    use InteractsWithForms;

    public $permissions;

    public function mount()
    {
        $this->fill([
            'name' => '',
            'permissions' => Permission::all()->pluck('name', 'id'),
        ]);
        $this->form->fill([
            'permissions' => []
        ]);
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.admin.role.create-modal');
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('title')->required()->hint('The title of the role.'),
            BelongsToManyMultiSelect::make('permissions')
                ->relationship('permissions', 'name')
            // ...
        ];
    }

    protected function getFormModel(): Role
    {
        return new Role();
    }
}
