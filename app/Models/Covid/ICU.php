<?php

namespace App\Models\Covid;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use JetBrains\PhpStorm\Pure;

class ICU extends Model
{
    use HasFactory;

    protected $table = 'icus';

    protected $dates = ['date', 'create_at', 'updated_at'];

    protected $fillable = [
        'id',
        'date',
        'state',
        'bed_icu',
        'bed_icu_rep',
        'bed_icu_total',
        'bed_icu_covid',
        'vent',
        'vent_port',
        'icu_covid',
        'icu_pui',
        'icu_noncovid',
        'vent_covid',
        'vent_pui',
        'vent_noncovid',
        'vent_used',
        'vent_port_used',
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

    public function scopeLatestOne(Builder $query): Builder
    {
        return $query->orderByDesc('date')->take(16)->orderBy('state');
    }

    public function getTotalPatientAttribute()
    {
        return $this->icu_covid + $this->icu_noncovid + $this->icu_pui;
    }

    #[Pure] public function getOverallUtilisationAttribute(): float|int
    {
        return ($this->getTotalPatientAttribute() / $this->bed_icu_total) * 100;
    }

    public function getTotalVentilatorsAttribute(): float|int
    {
        return $this->vent + $this->vent_port;
    }

    public function getTotalVentilatorsPatientAttribute(): float|int
    {
        return $this->vent_covid + $this->vent_pui + $this->vent_noncovid;
    }

    #[Pure] public function getVentilationUtilisationAttribute(): float|int
    {
        return ($this->getTotalVentilatorsPatientAttribute() / $this->getTotalVentilatorsAttribute()) * 100;
    }

    public function scopeStateWithTake(Builder $query, string $state, int $take): Builder
    {
        return $query->where('state', $state)->orderByDesc('date')->take($take);
    }
}
