<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ScheduleConfig extends Model
{
    protected $fillable = ['intake_code', 'grouping', 'except', 'emails', 'user_id', 'is_subscribed'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function except(): Attribute
    {
        return new Attribute(
            get: fn ($value) => is_null($value) ? [] : explode(',', $value),
            set: fn ($value) => implode(',', $value)
        );
    }

    public function scopeSubscribed($query): Builder
    {
        return $query->where('is_subscribed', true);
    }
}
