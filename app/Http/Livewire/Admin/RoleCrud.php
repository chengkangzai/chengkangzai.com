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
        if ($role->users()->count() > 0) {
            $this->addError('', 'Role cannot be deleted because it has users assigned to it.');
            return;
        }
        $role->delete();
        Session::flash('success', 'Tag deleted successfully');
        $this->resetPage();
    }

    public function roleAdded()
    {
        Session::flash('success', 'Tag created successfully');
        $this->resetPage();
    }

    public function roleUpdated()
    {
        Session::flash('success', 'Tag updated successfully');
        $this->resetPage();
    }

}
