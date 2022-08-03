<?php

namespace App\Models\Covid;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CasesMalaysia extends Model
{
    use HasFactory;

    protected $table = 'cases_malaysia';

    protected $dates = ['date', 'created_at', 'updated_at'];

    protected $guarded = [];

    public function scopeLatestOne(Builder $query): Builder
    {
        return $query->orderByDesc('date')->take(1);
    }

    protected function getActiveCaseAttribute()
    {
        return $this->cases_cumulative - $this->cases_recovered_cumulative;
    }
}
