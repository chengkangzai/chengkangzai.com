<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use LivewireUI\Modal\ModalComponent;
use Spatie\Permission\Models\Role;

class CreateModal extends ModalComponent
{
    public $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
        'role' => 'required'
    ];

    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $role;

    public function render(): Factory|View|Application
    {
        return view('livewire.admin.user.create-modal', [
            'rolesSelect' => Role::all()
        ]);
    }

    public function store()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);
        $user->assignRole(Role::findById($this->role));

        $this->closeModalWithEvents(['userCreated']);
    }
}
