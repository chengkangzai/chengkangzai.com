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
}
