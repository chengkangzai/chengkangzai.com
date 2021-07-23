<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CasesState extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'date',
        'state',
        'cases_new',
    ];
}
