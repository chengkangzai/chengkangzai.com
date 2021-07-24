<?php

namespace App\Models\Covid;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeathsState extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'date',
        'state',
        'deaths_new',
        'deaths_commutative',
    ];
}
