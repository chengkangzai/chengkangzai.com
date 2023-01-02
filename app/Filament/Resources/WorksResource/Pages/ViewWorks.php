<?php

namespace App\Filament\Resources\WorksResource\Pages;

use App\Filament\Resources\WorksResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewWorks extends ViewRecord
{
    protected static string $resource = WorksResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        return [
            ...$data,
            'description_en' => $data['description']['en'],
            'description_zh' => $data['description']['zh'],
        ];
    }
}
