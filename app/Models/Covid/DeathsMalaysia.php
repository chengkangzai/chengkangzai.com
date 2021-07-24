<?php

namespace App\Models\Covid;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeathsMalaysia extends Model
{
    use HasFactory;

    protected $table = 'deaths_malaysia';

    protected $fillable = [
        'id',
        'date',
        'deaths_new',
        'deaths_new_cumulative',
    ];
}
