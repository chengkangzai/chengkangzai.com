<?php

namespace App\Models\Covid;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaxMalaysia extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'date',
        'dose1_daily',
        'dose2_daily',
        'total_daily',
        'dose1_cumul',
        'dose2_cumul',
        'total_cumul',
    ];

    public function scopeLatestOne(Builder $query): Builder
    {
        return $query->orderByDesc('date')->take(1);
    }
}

