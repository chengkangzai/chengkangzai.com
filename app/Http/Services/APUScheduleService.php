<?php

namespace App\Http\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class APUScheduleService
{
    const baseUrl = 'https://s3-ap-southeast-1.amazonaws.com/open-ws/weektimetable';

    private Collection $collection;

    public const QUERY_KEY = [
        "INTAKE" => "INTAKE",
        "MODID" => "MODID",
        "MODULE_NAME" => "MODULE_NAME",
        "DAY" => "DAY",
        "LOCATION" => "LOCATION",
        "ROOM" => "ROOM",
        "LECTID" => "LECTID",
        "NAME" => "NAME",
        "SAMACCOUNTNAME" => "SAMACCOUNTNAME",
        "DATESTAMP" => "DATESTAMP",
        "DATESTAMP_ISO" => "DATESTAMP_ISO",
        "TIME_FROM" => "TIME_FROM",
        "TIME_TO" => "TIME_TO",
        "TIME_FROM_ISO" => "TIME_FROM_ISO",
        "TIME_TO_ISO" => "TIME_TO_ISO",
        "GROUPING" => "GROUPING",
        "CLASS_CODE" => "CLASS_CODE",
        "COLOR" => "COLOR",
    ];

    public function __construct()
    {
        $this->collection = collect(json_decode(Http::get(self::baseUrl)));
    }

    public function where(string $key, $value): APUScheduleService
    {
        $this->collection = $this->collection->where($key, $value);

        return $this;
    }

    public function query(): APUScheduleService
    {
        return $this;
    }

    public function get(): Collection
    {
        return $this->collection;
    }

    public function getIntakes(): Collection
    {
        return $this->collection->pluck('INTAKE')->unique()->sort();
    }

    public function getGroupings($intake = null): Collection
    {
        if ($intake) {
            return $this->collection->where('INTAKE', $intake)->sort()->pluck('GROUPING')->unique();
        }
        return $this->collection->pluck('GROUPING');
    }

}
