<?php

namespace App\Models\Covid;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeathsMalaysia extends Model
{
    use HasFactory;

    protected $table = 'deaths_malaysia';

    protected $dates = ['date', 'create_at', 'updated_at'];

    protected $guarded = [];

    public function scopeLatestOne(Builder $query): Builder
    {
        return $query->orderByDesc('date')->take(1);
    }
}
