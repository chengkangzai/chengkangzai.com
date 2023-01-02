<?php

namespace App\Filament\Resources\WorksResource\Pages;

use App\Filament\Resources\WorksResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWorks extends ListRecords
{
    protected static string $resource = WorksResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
