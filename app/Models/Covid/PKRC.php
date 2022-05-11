<?php

namespace App\Models\Covid;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use JetBrains\PhpStorm\Pure;

class PKRC extends Model
{
    use HasFactory;

    protected $table = 'PKRC';

    protected $dates = ['date', 'create_at', 'updated_at'];

    protected $fillable = [
        'id',
        'date',
        'state',
        'beds',
        'admitted_pui',
        'admitted_covid',
        'admitted_total',
        'discharge_pui',
        'discharge_covid',
        'discharge_total',
        'pkrc_covid',
        'pkrc_pui',
        'pkrc_noncovid',
    ];

    public const STATE = [
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

    public function scopeLatestOne(Builder $query): Builder
    {
        return $query->orderByDesc('date')->take(16)->orderBy('state');
    }

    public function getTotalPatientAttribute()
    {
        return $this->pkrc_covid + $this->pkrc_noncovid + $this->pkrc_pui;
    }

    #[Pure]
 public function getOverallUtilisationAttribute(): float|int
 {
     return ($this->getTotalPatientAttribute() / ($this->beds ?: 1)) * 100;
 }

    public function scopeStateWithTake(Builder $query, string $state, int $take): Builder
    {
        return $query->where('state', $state)->orderByDesc('date')->take($take);
    }
}
