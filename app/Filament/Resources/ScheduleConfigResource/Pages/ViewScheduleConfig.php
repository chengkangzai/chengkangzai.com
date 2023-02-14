<?php

namespace App\Filament\Resources\ScheduleConfigResource\Pages;

use App\Filament\Resources\ScheduleConfigResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewScheduleConfig extends ViewRecord
{
    protected static string $resource = ScheduleConfigResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }

    protected function getFooterWidgets(): array
    {
        return [
            ScheduleConfigResource\Widgets\ScheduleConfigWidget::class,
        ];
    }
}
