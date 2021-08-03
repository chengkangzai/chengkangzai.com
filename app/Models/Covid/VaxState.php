<?php

namespace App\Models\Covid;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaxState extends Model
{
    use HasFactory;

    protected $dates = ['date', 'create_at', 'updated_at'];

    protected $fillable = [
        'id',
        'date',
        'state',
        'dose1_daily',
        'dose2_daily',
        'total_daily',
        'dose1_cumul',
        'dose2_cumul',
        'total_cumul',
    ];

    public function scopeLatestOne(Builder $query): Builder
    {
        return $query->orderByDesc('date')->take(16)->orderBy('state');
    }
}
