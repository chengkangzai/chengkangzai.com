<?php

namespace App\Http\Livewire\Admin\Permission;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use LivewireUI\Modal\ModalComponent;
use Spatie\Permission\Models\Permission;

class ShowModal extends ModalComponent
{
    public $permission;

    public function mount($permission)
    {
        $this->permission = Permission::findById($permission);
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.admin.permission.show-modal')->extends('layouts.admin');
    }
}
