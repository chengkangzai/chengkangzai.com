<?php

namespace App\Http\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class APUScheduleService
{
    const baseUrl = 'https://s3-ap-southeast-1.amazonaws.com/open-ws/weektimetable';

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

    public static function getRaw(): Collection
    {
        return collect(json_decode(Http::get(self::baseUrl)));
    }

    public static function where(string $key, $value): Collection
    {
        return self::getRaw()->where($key, $value);
    }
}
