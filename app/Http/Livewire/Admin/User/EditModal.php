<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use LivewireUI\Modal\ModalComponent;
use Spatie\Permission\Models\Role;

class EditModal extends ModalComponent
{
    public $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'role' => 'required'
    ];

    public $user;

    public $name;
    public $email;
    public $role;

    public function mount($user)
    {
        $this->user = User::findOrFail($user);
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->role = $this->user->roles->first();
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.admin.user.edit-modal', [
            'roles' => Role::all(),
        ]);
    }

    public function store()
    {
        $this->validate();

        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $this->user->assignRole(Role::findById($this->role));

        $this->closeModalWithEvents(['userCreated']);
    }
}
