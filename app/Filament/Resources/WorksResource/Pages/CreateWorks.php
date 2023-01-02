<?php

namespace App\Filament\Resources\WorksResource\Pages;

use App\Filament\Resources\WorksResource;
use Filament\Resources\Pages\CreateRecord;

class CreateWorks extends CreateRecord
{
    protected static string $resource = WorksResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['description'] = [
            'en' => $data['description_en'],
            'zh' => $data['description_zh'],
        ];

        unset($data['description_en']);
        unset($data['description_zh']);

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? WorksResource::getUrl('index');
    }
}
