<?php

namespace App\Filament\Resources\ScheduleConfigResource\Pages;

use App\Filament\Resources\ScheduleConfigResource;
use App\Jobs\AddAPUScheduleToCalenderJob;
use App\Models\MicrosoftOauth;
use App\Models\ScheduleConfig;
use Filament\Notifications\Notification;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListScheduleConfigs extends ListRecords
{
    protected static string $resource = ScheduleConfigResource::class;

    protected function getActions(): array
    {
        $user = auth()->user();
        $msOauthExists = MicrosoftOauth::whereBelongsTo($user)->exists();
        $scheduleConfigExists = ScheduleConfig::whereBelongsTo($user)->exists();

        return [
            Actions\Action::make('link_microsoft_account')
                ->url(route('admin.schedule.msOAuth.signin'))
                ->hidden(fn () => $msOauthExists),
            Actions\CreateAction::make()
                ->mutateFormDataUsing(function (array $data) use ($user) {
                    $data['user_id'] = $user->id;

                    return $data;
                })
                ->visible(fn () => $msOauthExists && ! $scheduleConfigExists),
            Actions\Action::make('sync_now')
                ->action(function () use ($user) {
                    ScheduleConfig::whereBelongsTo($user)
                        ->get()
                        ->each(fn ($scheduleConfig) => AddAPUScheduleToCalenderJob::dispatch(
                            user: $user,
                            config: $scheduleConfig,
                            causeBy: AddAPUScheduleToCalenderJob::CAUSED_BY['Web']
                        ));

                    Notification::make('Syncing...')
                        ->success()
                        ->body(__('Schedule has been queued for sync, it will take a few minutes'))
                        ->send();
                })
                ->visible(fn () => $msOauthExists && $scheduleConfigExists),
        ];
    }

    protected function getTableEmptyStateHeading(): ?string
    {
        if (auth()->user()->msOauth()->exists()) {
            return __('You have not created any schedule config yet');
        }

        return __('please link your microsoft account first');
    }

    protected function getFooterWidgets(): array
    {
        return [
            ScheduleConfigResource\Widgets\ScheduleConfigsWidget::class,
        ];
    }
}
