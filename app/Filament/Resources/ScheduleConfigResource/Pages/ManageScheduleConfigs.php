<?php

namespace App\Filament\Resources\ScheduleConfigResource\Pages;

use App\Filament\Resources\ScheduleConfigResource;
use App\Jobs\AddAPUScheduleToCalenderJob;
use Filament\Notifications\Notification;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageScheduleConfigs extends ManageRecords
{
    protected static string $resource = ScheduleConfigResource::class;

    protected function getActions(): array
    {
        return [
            Actions\Action::make('link_microsoft_account')
                ->url(route('admin.schedule.msOAuth.signin'))
                ->hidden(fn () => auth()->user()->msOauth()->exists()),
            Actions\CreateAction::make()
                ->mutateFormDataUsing(function (array $data) {
                    $data['user_id'] = auth()->user()->id;

                    return $data;
                })
                ->visible(fn () => auth()->user()->msOauth()->exists() && auth()->user()->scheduleConfig()->doesntExist()),
            Actions\Action::make('sync_now')
                ->action(function () {
                    $job = new AddAPUScheduleToCalenderJob(
                        user: auth()->user(),
                        config: auth()->user()->scheduleConfig()->first(),
                        causeBy: AddAPUScheduleToCalenderJob::CAUSED_BY['Web']
                    );

                    dispatch($job);

                    Notification::make('Syncing...')
                        ->success()
                        ->body(__('Schedule has been queued for sync, it will take a few minutes'))
                        ->send();
                })
                ->visible(fn () => auth()->user()->msOauth()->exists() && auth()->user()->scheduleConfig()->exists()),

        ];
    }

    protected function getTableEmptyStateHeading(): ?string
    {
        if (auth()->user()->msOauth()->exists()) {
            return __('You have not created any schedule config yet');
        } else {
            return __('please link your microsoft account first');
        }
    }

    protected function getFooterWidgets(): array
    {
        return [
            ScheduleConfigResource\Widgets\CalendarWidget::class,
        ];
    }
}
