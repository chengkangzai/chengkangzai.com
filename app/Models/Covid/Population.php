<?php

namespace App\Models\Covid;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Population extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'state',
        'idxs',
        'pop',
        'pop_18',
        'pop_60',
    ];
}
