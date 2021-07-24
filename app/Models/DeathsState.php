<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeathsState extends Model
{
    use HasFactory;

    public $timestamps=false;
    protected $fillable = [
        'id',
        'date',
        'state',
        'deaths_new',
        'deaths_commutative',
    ];
}
