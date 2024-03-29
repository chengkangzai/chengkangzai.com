<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Spatie\Tags\HasTags;
use Spatie\Translatable\HasTranslations;

class Works extends Model
{
    use HasFactory;
    use HasTags;
    use HasTranslations;
    use SoftDeletes;

    public const STATUS = [
        'DEACTIVATE' => 0,
        'ACTIVE' => 1,
    ];

    public const S3_PATH = 'chengkangzai.com/works';

    protected $fillable = [
        'name', 'description', 'picture_name', 'url', 'github_url', 'status',
    ];

    private array $translatable = ['description'];

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', '1');
    }

    public function imgLink(): Attribute
    {
        return new Attribute(
            get: fn () => Storage::disk('s3')
                ->temporaryUrl(self::S3_PATH.'/'.$this->picture_name, now()->addMinutes(5))
        );
    }
}
