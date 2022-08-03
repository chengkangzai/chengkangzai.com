<?php

namespace App\Models\Covid;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestMalaysia extends Model
{
    use HasFactory;

    protected $table = 'test_malaysia';

    protected $dates = ['date', 'create_at', 'updated_at'];

    protected $guarded = [];

    public function scopeLatestOne(Builder $query): Builder
    {
        return $query->orderByDesc('date')->take(1);
    }

    public function getTotalTestAttribute()
    {
        return $this->pcr + $this->rtk_ag;
    }
}
