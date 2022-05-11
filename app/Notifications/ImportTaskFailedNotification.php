<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ImportTaskFailedNotification extends Notification implements ShouldQueue
{
    use Queueable;

    private string $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function via($notifiable): array
    {
        return ['mail'];
    }

    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage())
            ->subject('Import failed')
            ->error()
            ->line('The import task failed with the following exception:')
            ->line($this->message)
            ->line('Timestamp: ' . now()->toDateTimeString());
    }

    public function toArray($notifiable): array
    {
        return [
            //
        ];
    }
}
