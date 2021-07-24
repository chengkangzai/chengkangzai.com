<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentController;
use App\Http\Services\WebHookService;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;

class PublicPostCommentController extends Controller
{
    /**
     * @param StoreCommentController $request
     * @param Post $post
     * @return RedirectResponse
     */
    function store(StoreCommentController $request, Post $post): RedirectResponse
    {
        $comment = $post->comments()->create([
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
            'status' => Post::STATUS['PUBLISH']
        ]);

        app(WebHookService::class)->notifySomeoneCommentedInPost($post, $comment);

        return back();
    }
}
