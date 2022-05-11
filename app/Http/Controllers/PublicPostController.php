<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Str;

class PublicPostController extends Controller
{
    public function index(): Factory|View|Application
    {
        SEOTools::setTitle(__('Blog'));
        $posts = Cache::remember('public-Posts', 60 * 60 * 24, function () {
            return Post::latest()->published()->with('tags')->paginate(10);
        });

        return view('public.post.index', compact('posts'));
    }

    public function show(Post $post): Factory|View|Application
    {
        abort_if($post->status !== Post::STATUS['PUBLISH'], 404);
        SEOTools::setTitle(Str::words($post->title, 60));
        SEOTools::setDescription(Str::words(strip_tags($post->content), 40));
        Cache::remember('public-Posts-' . $post->slug, 60 * 60 * 24, function () use ($post) {
            $post->load('comments');

            return $post;
        });

        return view('public.post.show', compact('post'));
    }
}
