<?php

namespace App\Http\Livewire\Admin\Work;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use LivewireUI\Modal\ModalComponent;

class ShowModal extends ModalComponent
{
    public function render(): Factory|View|Application
    {
        return view('livewire.admin.work.show-modal');
    }
}
