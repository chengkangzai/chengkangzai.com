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
        'cases_import',
        'cases_recovered',
        'cases_recovered_cumulative',
        'cases_active',
        'cases_cluster',
        'cases_pvax',
        'cases_fvax',
        'cases_child',
        'cases_adolescent',
        'cases_adult',
        'cases_elderly',
    ];

    public function scopeLatestOne(Builder $query): Builder
    {
        return $query->orderByDesc('date')->take(1);
    }

    protected function getActiveCaseAttribute()
    {
        return $this->cases_cumulative - $this->cases_recovered_cumulative;
    }
}
