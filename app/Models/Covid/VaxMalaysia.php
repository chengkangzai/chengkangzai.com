<?php

namespace App\Models\Covid;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaxMalaysia extends Model
{
    use HasFactory;

    protected $dates = ['date', 'create_at', 'updated_at'];

    protected $fillable = [
        'id',
        'date',
        'daily_partial',
        'daily_full',
        'daily',
        'daily_partial_child',
        'daily_full_child',
        'cumul_partial',
        'cumul_full',
        'cumul',
        'cumul_partial_child',
        'cumul_full_child',
        'pfizer1',
        'pfizer2',
        'sinovac1',
        'sinovac2',
        'astra1',
        'astra2',
        'cansino',
        'pending',
        'created_at',
        'updated_at',
    ];

    public function scopeLatestOne(Builder $query): Builder
    {
        return $query->orderByDesc('date')->take(1);
    }
}

