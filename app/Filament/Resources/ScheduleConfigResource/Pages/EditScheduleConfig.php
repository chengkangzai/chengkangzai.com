<?php

namespace App\Filament\Resources\ScheduleConfigResource\Pages;

use App\Filament\Resources\ScheduleConfigResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditScheduleConfig extends EditRecord
{
    protected static string $resource = ScheduleConfigResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
