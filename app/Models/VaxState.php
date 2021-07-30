<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaxState extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'date',
        'state',
        'dose1_daily',
        'dose2_daily',
        'total_daily',
        'dose1_cumul',
        'dose2_cumul',
        'total_cumul',
    ];
}
