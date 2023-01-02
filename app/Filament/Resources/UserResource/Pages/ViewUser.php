<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Notifications\Notification;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Support\Facades\Password;

class ViewUser extends ViewRecord
{
    protected static string $resource = UserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
            Actions\Action::make('send_reset_password_email')
                ->label('Send Reset Password Email')
                ->action(function () {
                    Password::broker(config('auth.defaults.passwords'))
                        ->sendResetLink(['email' => $this->record->email]);

                    Notification::make('Reset password email sent.')
                        ->success()
                        ->body('The reset password email has been sent.')
                        ->send();
                }),
        ];
    }
}
