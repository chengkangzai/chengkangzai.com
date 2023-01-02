<?php

namespace App\Filament\Resources\WorksResource\Pages;

use App\Filament\Resources\WorksResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWorks extends EditRecord
{
    protected static string $resource = WorksResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
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

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (! isset($data['picture_name'])) {
            $data['picture_name'] = $this->record->picture_name;
        }

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
