<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Spatie\Tags\Tag;
use Str;
use Throwable;

class PostController extends Controller
{
    public function index(): Factory|View|Application
    {
        $posts = Post::withCount(['comments', 'tags'])->with('tags')->paginate(5);

        return view('admin.post.index', compact('posts'));
    }

    public function create(): Factory|View|Application
    {
        $tags = Tag::all();

        return view('admin.post.create', compact('tags'));
    }

    public function store(StorePostRequest $request): RedirectResponse
    {
        try {
            DB::transaction(function () use ($request) {
                $post = Post::create([
                    'title' => $request->title,
                    'content' => $request->get('content'),
                    'status' => Post::STATUS[$request->get('status')],
                    'slug' => Str::slug($request->title),
                ]);
                if ($request->get('tags')) {
                    $post->attachTags($request->get('tags'));
                }
            });

            return redirect()->route('admin.posts.index')->with('success', __('Post created successfully'));
        } catch (Throwable $e) {
            return redirect()->route('admin.posts.index')->withErrors(__('Whoops! Something went wrong. Please try again later.'));
        }
    }

    public function show(Post $post): Factory|View|Application
    {
        return view('admin.post.show', compact('post'));
    }

    public function edit(Post $post): Factory|View|Application
    {
        $tags = Tag::all();

        return view('admin.post.edit', compact('post', 'tags'));
    }

    public function update(StorePostRequest $request, Post $post): string
    {
        try {
            DB::transaction(function () use ($request, $post) {
                $post->update([
                    'title' => $request->title,
                    'content' => $request->get('content'),
                    'status' => Post::STATUS[$request->get('status')],
                    'slug' => Str::slug($request->title),
                ]);
                if ($request->get('tags')) {
                    $post->syncTags($request->get('tags'));
                }
                if ($request->missing('tags')) {
                    $post->tags()->detach();
                }
            });

            return redirect()->route('admin.posts.index')->with('success', __('Post updated successfully'));
        } catch (Throwable $e) {
            return redirect()->route('admin.posts.index')->withErrors(__('Whoops! Something went wrong. Please try again later.'));
        }
    }

    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();

        return back()
            ->with('success', __('Post deleted successfully. Whoops! Undo deletion', ['link' => route('admin.posts.restore', $post->id)]));
    }

    public function restore($postId): RedirectResponse
    {
        $post = Post::withTrashed()->findOrFail($postId);
        if ($post->trashed()) {
            $post->restore();
        }

        return redirect()->back()->with('message', __('Post restored successfully'));
    }
}
