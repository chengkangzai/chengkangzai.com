<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ScheduleConfig extends Model
{
    use HasFactory;

    protected $fillable = ['intake_code', 'grouping', 'except', 'emails', 'user_id', 'is_subscribed'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function setExceptAttribute($value)
    {
        $this->attributes['except'] = implode(',', $value);
    }

    public function getExceptAttribute($value): array
    {
        return is_null($value) ? [] : explode(',', $value);
    }

    public function scopeSubscribed($query): Builder
    {
        return $query->where('is_subscribed', true);
    }
}
