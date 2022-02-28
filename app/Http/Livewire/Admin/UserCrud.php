<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithPagination;

class UserCrud extends Component
{
    use WithPagination;

    protected $listeners = [
        'userCreated',
        'userUpdated',
        'userDeleted',
    ];

    public function render(): Factory|View|Application
    {
        $users = User::with('roles')->paginate(10);
        return view('livewire.admin.user-crud', compact('users'))
            ->extends('layouts.admin');
    }

    public function remove(User $user)
    {
        $user->delete();
        Session::flash('success', __('User deleted successfully'));
        $this->resetPage();
    }

    public function userCreated()
    {
        Session::flash('success', __('User created successfully.'));
        $this->resetPage();
    }

    public function userUpdated()
    {
        Session::flash('success', __('User updated successfully'));
        $this->resetPage();
    }
}
