<?php

namespace App\Models\Covid;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaxRegState extends Model
{
    use HasFactory;

    protected $dates = ['date', 'create_at', 'updated_at'];

    protected $fillable = [
        'id',
        'state',
        'total',
        'phase2',
        'mysj',
        'call',
        'web',
        'children',
        'elderly',
        'comorb',
        'oku',
    ];

    public function scopeLatestOne(Builder $query): Builder
    {
        return $query->orderByDesc('date')->take(16)->orderBy('state');
    }
}
