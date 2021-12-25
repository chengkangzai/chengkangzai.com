<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ScheduleConfig extends Model
{
    use HasFactory;

    protected $fillable = ['intake_code', 'grouping', 'except', 'emails', 'user_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function setExceptAttribute($value)
    {
        $this->attributes['except'] = implode(',', $value);
    }

    public function getExceptAttribute($value)
    {
        return explode(',', $value);
    }
}
