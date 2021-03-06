<?php

namespace App\Http\Controllers;

use App;
use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;
use App\Models\Post;
use App\Notifications\NewCommentInPostNotification;
use App\Notifications\Notifiable\SuperAdminNotifiable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Notification;

class PublicPostCommentController extends Controller
{
    public function store(StoreCommentRequest $request, Post $post): RedirectResponse
    {
        $comment = $post->comments()->create([
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
            'status' => Comment::STATUS['PUBLISH'],
        ]);

        if (App::isProduction()) {
            Notification::send(new SuperAdminNotifiable(), new NewCommentInPostNotification($comment, $post));
        }

        return back();
    }
}
