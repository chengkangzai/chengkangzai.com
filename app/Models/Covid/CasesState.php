<?php

namespace App\Models\Covid;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CasesState extends Model
{
    use HasFactory;

    protected $dates = ['date', 'create_at', 'updated_at'];

    const STATE = [
        "Johor" => "Johor",
        "Kedah" => "Kedah",
        "Kelantan" => "Kelantan",
        "Melaka" => "Melaka",
        "Negeri Sembilan" => "Negeri Sembilan",
        "Pahang" => "Pahang",
        "Pulau Pinang" => "Pulau Pinang",
        "Perak" => "Perak",
        "Perlis" => "Perlis",
        "Sabah" => "Sabah",
        "Sarawak" => "Sarawak",
        "Selangor" => "Selangor",
        "Terengganu" => "Terengganu",
        "W.P. Kuala Lumpur" => "W.P. Kuala Lumpur",
        "W.P. Labuan" => "W.P. Labuan",
        "W.P. Putrajaya" => "W.P. Putrajaya",
    ];

    protected $fillable = [
        'id',
        'date',
        'state',
        'cases_new',
        'cases_import',
        'cases_recovered_cumulative',
        'cases_recovered',
        'cases_cumulative',
    ];

    public function scopeLatestOne(Builder $query): Builder
    {
        return $query->orderByDesc('date')->take(16)->orderBy('state');
    }

    protected function serializeDate(DateTimeInterface $date): string
    {
        return $date->format('Y-m-d');
    }
}
