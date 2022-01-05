<?php

namespace App\Notifications\Notifiable;

use App\Models\User;
use Illuminate\Notifications\Notifiable;
use Illuminate\Notifications\RoutesNotifications;

class SuperAdminNotifiable
{
    use Notifiable;
    use RoutesNotifications;

    public function routeNotificationForMail(): string|array
    {
        return User::first()->email;
    }

    public function routeNotificationForWebhook(): string|array
    {
        return config('app.webhook.discord.spam');
    }
}
