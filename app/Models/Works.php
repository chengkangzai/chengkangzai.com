<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Tags\HasTags;
use Spatie\Translatable\HasTranslations;

class Works extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, HasTags, HasTranslations;
    use InteractsWithMedia;

    const STATUS = [
        0 => 'DEACTIVATE',
        1 => 'ACTIVE',
    ];

    const S3_PATH = 'chengkangzai.com/works';

    protected $fillable = [
        'name', 'description', 'picture_name', 'url', 'github_url', 'status'
    ];

    public array $translatable = ['description'];

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', '1');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('photos')
            ->useDisk('s3');

        $this->addMediaConversion('thumb')
            ->width(150)
            ->height(300);

        $this->addMediaConversion('thumb-lg')
            ->width(800)
            ->height(800);
    }

//    public function getImgLinkAttribute(): string
//    {
//
////        $s3 = Storage::disk('s3');
////        $client = $s3->getDriver()->getAdapter();
////        return $s3->getAwsTemporaryUrl($client, Works::S3_PATH . '/' . $this->picture_name, now()->addHours(24), []);
//    }

}
