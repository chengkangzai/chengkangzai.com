<?php

namespace App\Models\Covid;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'date',
        'state',
        'beds',
        'beds_noncrit',
        'admitted_covid',
        'admitted_total',
        'discharged_pui',
        'discharged_covid',
        'discharged_total',
        'hosp_covid',
        'hosp_pui',
        'hosp_noncovid',
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
