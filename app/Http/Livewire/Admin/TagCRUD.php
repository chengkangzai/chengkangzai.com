<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class TagCRUD extends Component
{
    public function render(): Factory|View|Application
    {
        return view('livewire.admin.tag-c-r-u-d');
    }
}
