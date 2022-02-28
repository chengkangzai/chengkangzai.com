<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Spatie\Tags\Tag;

class PostController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('admin.post.index');
    }

    public function create(): Factory|View|Application
    {
        $tags = Tag::all();
        return view('admin.post.create', compact('tags'));
    }

    public function show(Post $post): Factory|View|Application
    {
        return view('admin.post.show', compact('post'));
    }

    public function edit(Post $post): Factory|View|Application
    {
        return view('admin.post.edit', compact('post'));
    }
}
