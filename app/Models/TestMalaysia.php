<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestMalaysia extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'test_malaysia';

    protected $fillable = [
        'id',
        'date',
        'trk-ag',
        'pcr',
    ];
}
