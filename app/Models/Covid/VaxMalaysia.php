<?php

namespace App\Models\Covid;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaxMalaysia extends Model
{
    use HasFactory;

    protected $dates = ['date', 'create_at', 'updated_at'];

    public const CREATED_AT = 'date';

    protected $guarded = [];

    public function scopeLatestOne(Builder $query): Builder
    {
        return $query->orderByDesc('date')->take(1);
    }
}
