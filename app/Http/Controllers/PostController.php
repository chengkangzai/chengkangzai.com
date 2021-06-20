<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use DB;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Spatie\Tags\Tag;
use Str;
use Throwable;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $posts = Post::withCount('comments')->with('tags')->paginate(5);
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePostRequest $request
     * @return RedirectResponse
     * @throws Throwable
     */
    public function store(StorePostRequest $request): RedirectResponse
    {
        DB::transaction(function () use ($request) {
            $post = Post::create([
                'title' => $request->title,
                'content' => $request->get('content'),
                'status' => Post::STATUS[$request->get('status')],
                'slug' => Str::slug($request->title)
            ]);
            if ($request->get('tags')) {
                $post->attachTags($request->get('tags'));
            }
        });

        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return Application|Factory|View
     */
    public function show(Post $post)
    {
        return view('admin.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Post $post
     * @return Application|Factory|View
     */
    public function edit(Post $post)
    {
        return view('admin.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StorePostRequest $request
     * @param Post $post
     * @return string
     * @throws Throwable
     */
    public function update(StorePostRequest $request, Post $post): string
    {
        DB::transaction(function () use ($request, $post) {
            $post->update([
                'title' => $request->title,
                'content' => $request->get('content'),
                'status' => Post::STATUS[$request->get('status')],
                'slug' => Str::slug($request->title)
            ]);
            if ($request->get('tags')) {
                $post->syncTags($request->get('tags'));
            }
            if ($request->missing('tags')){
                $post->detachTags(Tag::all());
            }
        });
        return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Post $post
     * @return RedirectResponse
     */
    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();
        return back()
            ->with('undo', 'Post Delete Successfully. <a href="' . route('admin.posts.restore', $post->id) . '" class="underline"> Whoops, Undo it</a>');
    }

    public function restore($postId)
    {
        $post = Post::withTrashed()->findOrFail($postId);
        if ($post->trashed()) {
            $post->restore();
        }
        return redirect()->back()->with('message', 'Post restored');
    }
}
