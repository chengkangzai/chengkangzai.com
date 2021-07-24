<?php


namespace App\Http\Services;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Http;


class WebHookService
{
    const COLOR = [
        'ORANGE' => '14177041',
        'RED' => '16711680',
        'GREEN' => '65280',
        'YElLOW' => '16776960'
    ];


    /**
     * @return void
     */
    public function notifySomeoneCommentedInPost(Post $post, Comment $comment)
    {
        Http::asJson()
            ->post(env('DISCORD_WEBHOOK_POST'),
                [
                    "username" => "Comment Broadcasts BOT",
                    "embeds" => [
                        [
                            "title" => "$post->title \n\n$comment->name commented: \n$comment->comment \n\n on $comment->created_at",
                            "color" => self::COLOR['ORANGE']
                        ]
                    ]
                ]);
    }

    /**
     * @param string $title
     * @param string $color
     * @return void
     */
    public function notifyInGeneral(string $title, string $color = self::COLOR['ORANGE'])
    {
        Http::asJson()
            ->post(env('DISCORD_WEBHOOK_GENERAL'),
                [
                    "username" => "Comment Broadcasts BOT",
                    "embeds" => [
                        [
                            "title" => $title,
                            "color" => $color
                        ]
                    ]
                ]);
    }

    /**
     * @param string $title
     * @param string $color
     * @return void
     */
    public function notifyInSpam(string $title, string $color = self::COLOR['ORANGE'])
    {
        Http::asJson()
            ->post(env('DISCORD_WEBHOOK_POST'),
                [
                    "username" => "Comment Broadcasts BOT",
                    "embeds" => [
                        [
                            "title" => $title,
                            "color" => $color
                        ]
                    ]
                ]);
    }
}
