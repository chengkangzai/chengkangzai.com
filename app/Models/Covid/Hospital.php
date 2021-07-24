<?php

namespace App\Models\Covid;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    protected $fillable = [
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
}
