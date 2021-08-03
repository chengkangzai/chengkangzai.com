<?php

namespace App\Models\Covid;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CasesMalaysia extends Model
{
    use HasFactory;

    protected $table = 'cases_malaysia';

    protected $dates = ['date', 'created_at', 'updated_at'];

    protected $fillable = [
        'id',
        'date',
        'cases_new',
        'cluster_import',
        'cluster_religious',
        'cluster_community',
        'cluster_highRisk',
        'cluster_education',
        'cluster_detentionCentre',
        'cluster_workplace',
        'cases_cumulative',
    ];

    public function scopeLatestOne(Builder $query): Builder
    {
        return $query->orderByDesc('date')->take(1);
    }
}
