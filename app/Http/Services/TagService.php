<?php

namespace App\Http\Services;

use App\Models\Post;
use App\Models\Works;
use Spatie\Tags\Tag;

class TagService
{
    /**
     * This method will check if the tag is not been used.
     * [Warning] Take a lot of query !!!
     *
     * @param Tag $tag
     * @return bool
     */
    public function isTagSafeToDelete(Tag $tag): bool
    {
        $works = Works::all();
        foreach ($works as $work) {
            foreach ($work->tags as $smallTag) {
                if ($smallTag->id == $tag->id) {
                    return false;
                }
            }
        }

        $posts = Post::all();
        foreach ($posts as $post) {
            foreach ($post->tags as $smallTag) {
                if ($smallTag->id == $tag->id) {
                    return false;
                }
            }
        }

        return true;
    }
}
