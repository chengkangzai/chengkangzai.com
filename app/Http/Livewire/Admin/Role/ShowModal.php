<?php

namespace App\Http\Livewire\Admin\Role;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use LivewireUI\Modal\ModalComponent;
use Spatie\Permission\Models\Role;

class ShowModal extends ModalComponent
{
    public $role;

    public function mount($role)
    {
        $this->role = Role::findById($role);
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.admin.role.show-modal');
    }
}
