<?php

namespace App\Models\Covid;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use JetBrains\PhpStorm\Pure;

class Hospital extends Model
{
    use HasFactory;

    protected $dates = ['date', 'create_at', 'updated_at'];

    protected $guarded = [];

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
        return $this->hosp_covid + $this->hosp_noncovid + $this->hosp_pui;
    }

    #[Pure]
 public function getOverallUtilisationAttribute(): float|int
 {
     return ($this->getTotalPatientAttribute() / ($this->beds ?? 1)) * 100;
 }

    public function getCovidUtilisationAttribute(): float|int
    {
        return ($this->hosp_covid / ($this->beds_covid ?? 1)) * 100;
    }

    public function scopeStateWithTake(Builder $query, string $state, int $take): Builder
    {
        return $query->where('state', $state)->orderByDesc('date')->take($take);
    }
}
