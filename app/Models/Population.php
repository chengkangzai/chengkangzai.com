<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Population extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'state',
        'idxs',
        'pop',
        'pop_18',
        'pop_60',
    ];
}
