<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cluster extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'cluster',
        'state',
        'district',
        'date_announced',
        'date_last_onset',
        'category',
        'status',
        'cases_new',
        'cases_total',
        'cases_active',
        'tests',
        'icu',
        'deaths',
        'recovered',
    ];

    public $timestamps = false;
}
