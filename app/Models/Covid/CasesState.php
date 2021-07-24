<?php

namespace App\Models\Covid;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CasesState extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'date',
        'state',
        'cases_new',
        'cases_cumulative'
    ];
}
