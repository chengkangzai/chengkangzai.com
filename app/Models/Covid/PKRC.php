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
}
