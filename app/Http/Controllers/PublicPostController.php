<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Artesaos\SEOTools\Facades\SEOTools;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Str;

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
        SEOTools::setTitle('Blog');
        $posts = cache()->remember('public-Posts', 60 * 60 * 24, function () {
            return Post::latest()->published()->with('tags')->paginate(10);
        });
        return view('public.post.index', compact('posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return Factory|Application|View
     * @throws Exception
     */
    public function show(Post $post)
    {
        abort_if($post->status !== Post::STATUS['PUBLISH'], 404);
        SEOTools::setTitle(Str::words($post->title,60));
        SEOTools::setDescription(Str::words(strip_tags($post->content),40));
        cache()->remember('public-Posts-' . $post->slug, 60 * 60 * 24, function () use ($post) {
            $post->load('comments');
            return $post;
        });
        return view('public.post.show', compact('post'));
    }

}
