<?php

namespace App\Notifications;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewCommentInPostNotification extends Notification implements ShouldQueue
{
    use Queueable;

    private Comment $comment;
    private Post $post;

    public function __construct(Comment $comment, Post $post)
    {
        $this->comment = $comment;
        $this->post = $post;
    }

    public function via($notifiable): array
    {
        return ['mail'];
    }

    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage())
            ->subject('New comment in post !')
            ->line('New comment in post !')
            ->line('Post: ' . $this->post->title)
            ->line('Comment: ' . $this->comment->comment)
            ->line('Author: ' . $this->comment->name)
            ->line('Email: ' . $this->comment->email)
            ->action('View Post', route('public.posts.show', $this->post));
    }

    public function toArray($notifiable): array
    {
        return [
            //
        ];
    }
}
