<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;
use Spatie\Tags\HasTags;

/**
 * @method static paginate(int $int)
 * @method static create(array $array)
 * @method static latest()
 * @method static active()
 */
class Works extends Model
{
    use HasFactory, SoftDeletes, HasTags;

    const STATUS = [
        'DEACTIVATE' => 0,
        'ACTIVE' => 1,
    ];

    const S3_PATH = 'chengkangzai.com/works';

    protected $fillable = [
        'name', 'description', 'picture_name', 'url', 'github_url', 'status'
    ];

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', '1');
    }
}
