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

    protected $fillable = [
        'id',
        'date',
        'deaths_new',
        'deaths_new_cumulative',
        'deaths_bid',
        'deaths_bid_cumulative',
        'deaths_bid_dod',
        'deaths_bid_dod_cumulative',
        'deaths_pvax',
        'deaths_fvax',
        'deaths_tat',
    ];

    public function scopeLatestOne(Builder $query): Builder
    {
        return $query->orderByDesc('date')->take(1);
    }
}
