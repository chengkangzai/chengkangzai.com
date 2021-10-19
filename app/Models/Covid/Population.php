<?php

namespace App\Models\Covid;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Population extends Model
{
    use HasFactory;

    protected $dates = ['create_at', 'updated_at'];

    protected $fillable = [
        'id',
        'state',
        'idxs',
        'pop',
        'pop_12',
        'pop_18',
        'pop_60',
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

    public const POP_FILTER = [
        'ALL_POPULATION' => 'pop',
        'ABOVE_18' => 'pop_18',
        'ABOVE_12' => 'pop_12',
    ];
}
