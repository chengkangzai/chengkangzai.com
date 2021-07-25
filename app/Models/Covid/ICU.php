<?php

namespace App\Models\Covid;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ICU extends Model
{
    use HasFactory;

    protected $table = 'icus';

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
        "Penang" => "Penang",
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
}
