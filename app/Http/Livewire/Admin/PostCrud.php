<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithPagination;

class PostCrud extends Component
{
    use WithPagination;

    protected $listeners = [
        'postAdded',
        'postUpdated',
    ];

    public function render(): Factory|View|Application
    {
        return view('livewire.admin.post-crud', [
            'posts' => Post::withCount(['comments', 'tags'])->with('tags')->paginate(),
        ])->extends('layouts.admin');
    }

    public function remove(Post $post)
    {
        $post->delete();
        Session::flash('success', __('Post deleted successfully. Whoops! Undo deletion', ['link' => route('admin.posts.restore', $post->id)]));
        $this->resetPage();
    }

    public function postAdded()
    {
        $this->resetPage();
    }

    public function postUpdated()
    {
        $this->resetPage();
    }
}
