<?php

namespace App\Notifications;

use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ImportTaskFailedNotification extends Notification implements ShouldQueue
{
    use Queueable;

    private Exception $exception;
    private int $seconds;

    public function __construct(Exception $exception, int $seconds)
    {
        $this->exception = $exception;
        $this->seconds = $seconds;
    }


    public function via($notifiable): array
    {
        return ['mail'];
    }

    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Import failed')
            ->error()
            ->line('The import task failed with the following exception:')
            ->line('Time used to import: ' . $this->seconds . ' seconds')
            ->line('Timestamp: ' . now()->toDateTimeString())
            ->line('Error: ' . $notifiable->error);
    }

    public function toArray($notifiable): array
    {
        return [
            //
        ];
    }
}
