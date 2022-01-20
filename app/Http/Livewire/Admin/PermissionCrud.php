<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Spatie\Permission\Models\Permission;

class PermissionCrud extends Component
{
    public function render(): Factory|View|Application
    {
        return view('livewire.admin.permission-crud', [
            'permissions' => Permission::paginate(10)
        ])
            ->extends('layouts.admin');
    }
}
