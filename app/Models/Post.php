<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static inRandomOrder()
 */
class Post extends Model
{
    use HasFactory, SoftDeletes;

    const STATUS = [
        'PUBLISH' => 'Published',
        'DRAFT' => 'Draft',
    ];

    protected $fillable = [
        'content', 'title', 'status', 'slug'
    ];

    /**
     * Get the comments for the blog post.
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Scope a query to only include Active Status
     */
    public function scopePublished(Builder $query): Builder
    {
        return $query->where('status', 'published');
    }
}
