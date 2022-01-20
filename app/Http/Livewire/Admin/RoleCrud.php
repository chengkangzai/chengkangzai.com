<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class RoleCrud extends Component
{
    use WithPagination;

    public function render(): Factory|View|Application
    {
        $roles = Role::paginate(10);
        return view('livewire.admin.role-crud', compact('roles'))
            ->extends('layouts.admin');
    }

}
