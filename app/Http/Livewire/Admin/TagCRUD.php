<?php

namespace App\Http\Livewire\Admin;

use App\Http\Services\TagService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;
use Session;
use Spatie\Tags\Tag;

class TagCRUD extends Component
{
    use WithPagination;

    protected $listeners = [
        'tagAdded',
        'tagDeleted',
        'tagUpdated',
    ];

    public function render(): Factory|View|Application
    {
        $tags = Tag::orderByDesc('order_column')->paginate(10);
        return view('livewire.admin.tag-crud', compact('tags'))
            ->extends('layouts.app')
            ->section('content');
    }

    public function remove(Tag $tag)
    {
        if (app(TagService::class)->isTagSafeToDelete($tag) == false) {
            $this->addError('', 'The Tag is been used, cant be deleted');
            return;
        }

        $tag->delete();
        Session::flash('success', 'Tag deleted successfully');
        $this->resetPage();
    }

    public function tagAdded()
    {
        Session::flash('success', 'Tag created successfully');
        $this->resetPage();
    }

    public function tagUpdated()
    {
        Session::flash('success', 'Tag updated successfully');
        $this->resetPage();
    }

}
