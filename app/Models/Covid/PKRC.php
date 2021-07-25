<?php

namespace App\Models\Covid;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PKRC extends Model
{
    use HasFactory;

    protected $table = 'PKRC';

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
