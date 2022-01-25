<?php

namespace App\Http\Livewire\Admin;

use App\Models\Works;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class WorkCrud extends Component
{
    use WithPagination;

    public function render(): Factory|View|Application
    {
        return view('livewire.admin.work-crud', [
            'works' => Works::with('media')->withCount('tags')->paginate(10)
        ])
            ->extends('layouts.admin');
    }
}
