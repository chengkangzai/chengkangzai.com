<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaxRegState extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'state',
        'total',
        'phase2',
        'mysj',
        'call',
        'web',
        'children',
        'elderly',
        'comorb',
        'oku',
    ];
}
