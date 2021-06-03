<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $comments = Comment::with('post')->paginate(10);
        return view('admin.comment.index', compact('comments'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param Comment $comment
     * @return RedirectResponse
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return back();
    }
}
