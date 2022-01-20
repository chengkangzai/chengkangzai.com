<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class RoleCrud extends Component
{
    use WithPagination;

    protected $listeners = [
        'roleAdded',
        'roleUpdated',
    ];

    public function render(): Factory|View|Application
    {
        $roles = Role::withCount('users')->paginate(10);
        return view('livewire.admin.role-crud', compact('roles'))
            ->extends('layouts.admin');
    }

    public function remove(Role $role)
    {
        if ($role->name == 'Super Admin') {
            $this->addError('', __('Admin role can not be deleted'));
            return;
        }
        if ($role->users()->count() > 0) {
            $this->addError('', __('Role has users assigned to it. Please remove users from this role and try again'));
            return;
        }
        $role->delete();
        Session::flash('success', __('Role deleted successfully'));
        $this->resetPage();
    }

    public function roleAdded()
    {
        Session::flash('success', __('Role created successfully'));
        $this->resetPage();
    }

    public function roleUpdated()
    {
        Session::flash('success', __('Role updated successfully'));
        $this->resetPage();
    }

}
