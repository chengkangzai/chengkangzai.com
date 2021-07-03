<?php


namespace App\Http\Services;


use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Http;

class WebHookService
{
    /**
     * @return int|mixed|string
     */
    public function notifyInDiscord(Post $post, Comment $comment)
    {
        Http::asJson()
            ->post('https://discord.com/api/webhooks/860779538329370634/L9x76wBjGRK0aWRRtr4WM8IH1SUhigPJnwiAZRRdGRy9oDSe2cdqXyX9jzmPwkCICQS0',
                [
                    "username" => "Comment Broadcasts BOT",
                    "embeds" => [
                        [
                            "title" => "$post->title \n\n$comment->name commented: \n$comment->comment \n\n on $comment->created_at",
                            "color" => "14177041"
                        ]
                    ]
                ]);
    }
}
