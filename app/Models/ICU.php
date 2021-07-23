<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ICU extends Model
{
    use HasFactory;

    protected $table = 'icus';
    public $timestamps = false;
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
}
