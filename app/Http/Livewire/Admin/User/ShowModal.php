<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Password;
use LivewireUI\Modal\ModalComponent;

class ShowModal extends ModalComponent
{
    public $user;

    public function mount($user)
    {
        $this->user = User::findOrFail($user);
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.admin.user.show-modal');
    }

    public function sendForgetPasswordLink()
    {
        Password::sendResetLink($this->user->email);
    }
}
