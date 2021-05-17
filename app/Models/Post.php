<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Tags\HasTags;

/**
 * @method static inRandomOrder()
 * @method static paginate()
 * @method static create(array $validated)
 * @method static withCount(string $string)
 * @method static latest()
 * @property mixed status
 */
class Post extends Model
{
    use HasFactory, SoftDeletes, HasTags;

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
