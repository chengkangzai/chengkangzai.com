<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentController;
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
        $post->comments()->create([
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
            'status' => Post::STATUS['PUBLISH']
        ]);
        return back();
    }

//    function update(Request $request, Post $post, Comment $comment)
//    {
//
//    }
//
//    function destroy(Post $post, Comment $comment)
//    {
//
//    }
}
