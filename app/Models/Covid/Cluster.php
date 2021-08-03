<?php

namespace App\Models\Covid;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cluster extends Model
{
    use HasFactory;

    protected $dates = ['date_announced', 'date_last_onset', 'created_at', 'updated_at'];

    protected $fillable = [
        'id',
        'cluster',
        'state',
        'district',
        'date_announced',
        'date_last_onset',
        'category',
        'status',
        'cases_new',
        'cases_total',
        'cases_active',
        'tests',
        'icu',
        'deaths',
        'recovered',
    ];

    const STATE = [
        "Johor" => "Johor",
        "Kedah" => "Kedah",
        "Kelantan" => "Kelantan",
        "Melaka" => "Melaka",
        "Negeri Sembilan" => "Negeri Sembilan",
        "Pahang" => "Pahang",
        "Pulau Pinang" => "Pulau Pinang",
        "Perak" => "Perak",
        "Perlis" => "Perlis",
        "Sabah" => "Sabah",
        "Sarawak" => "Sarawak",
        "Selangor" => "Selangor",
        "Terengganu" => "Terengganu",
        "W.P. Kuala Lumpur" => "W.P. Kuala Lumpur",
        "W.P. Labuan" => "W.P. Labuan",
        "W.P. Putrajaya" => "W.P. Putrajaya",
    ];

    public function scopeFilterByState(Builder $query, $state): Builder
    {
        return $query->where('state', 'LIKE', '%' . $state . '%');
    }

    public function scopeFilterByClusterName(Builder $query, $clusterName): Builder
    {
        return $query->where('cluster', 'LIKE', '%' . $clusterName . '%');
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', 'active');
    }
}
