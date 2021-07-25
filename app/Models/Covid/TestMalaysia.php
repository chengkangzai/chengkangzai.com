<?php

namespace App\Models\Covid;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestMalaysia extends Model
{
    use HasFactory;

    protected $table = 'test_malaysia';

    protected $fillable = [
        'id',
        'date',
        'trk-ag',
        'pcr',
    ];

    public function scopeLatestOne(Builder $query): Builder
    {
        return $query->orderByDesc('date')->take(1);
    }
}
