<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;

class PublicPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     * @throws Exception
     */
    public function index()
    {
        $posts = cache()->remember('public-Posts', 60 * 60 * 24 * 7, function () {
            return Post::latest()->published()->with('tags')->paginate(10);
        });
        return view('public.post.index', compact('posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return Factory|Application|View
     */
    public function show(Post $post)
    {
        abort_if($post->status !== Post::STATUS['PUBLISH'], 404);
        return view('public.post.show', compact('post'));
    }

}
