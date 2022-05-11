<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CommentController extends Controller
{
    public function index(): Factory|View|Application
    {
        $comments = Comment::with('post')->paginate(10);

        return view('admin.comment.index', compact('comments'));
    }

    public function destroy(Comment $comment): RedirectResponse
    {
        $comment->delete();

        return redirect()->route('admin.comment.index')->with('success', __('Comment deleted successfully'));
    }
}
