<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory, SoftDeletes;

    const STATUS = [
        'PUBLISH' => 'Published',
        'BLOCKED' => 'Blocked',
        'SPAM' => 'Spam'
    ];

    protected $fillable = [
        'comment', 'email', 'name', 'post_id',
    ];

    /**
     * Get the post that owns the comment.
     */
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }



}