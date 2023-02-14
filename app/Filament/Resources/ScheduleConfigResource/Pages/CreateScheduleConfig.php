<?php

namespace App\Filament\Resources\ScheduleConfigResource\Pages;

use App\Filament\Resources\ScheduleConfigResource;
use Filament\Resources\Pages\CreateRecord;

class CreateScheduleConfig extends CreateRecord
{
    protected static string $resource = ScheduleConfigResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->user()->id;

        return $data;
    }
}
