<?php

namespace App\Notifications;

use App\Models\ScheduleConfig;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Collection;

class CalendarSyncSuccessNotification extends Notification implements ShouldQueue
{
    use Queueable;

    private ScheduleConfig $config;
    private Collection $calendarEvents;

    public function __construct(ScheduleConfig $config, Collection $calendarEvents)
    {
        $this->calendarEvents = $calendarEvents;
        $this->config = $config;
    }

    public function via($notifiable): array
    {
        return ['mail'];
    }

    public function toMail($notifiable): MailMessage
    {
        $mail = (new MailMessage)
            ->success()
            ->subject('Calendar Sync Success')
            ->greeting('Hello! ' . $notifiable->name)
            ->line('The calendar sync was successful.')
            ->line('Intake: ' . $this->config->intake_code)
            ->line('Grouping: ' . $this->config->grouping);

        if ($this->calendarEvents->isNotEmpty()) {
            $mail->line('The following events were created:');
            $mail->line('');

            foreach ($this->calendarEvents as $event) {
                $mail->line(sprintf(
                    '| %s(%s) | %s %s -> %s |',
                    $event->MODULE_NAME,
                    $event->COLOR == 'green' ? 'Lab' : 'Lecture',
                    Carbon::parse($event->TIME_FROM_ISO)->format('d/m/Y'),
                    $event->TIME_FROM,
                    $event->TIME_TO
                ));
            }
        }

        if ($this->calendarEvents->isEmpty()) {
            $mail->line('No events were created.');
            $mail->line('');
            $mail->line('Quite possibly, there are no events published from APU.');
            $mail->line('If there is schedule in APSpace, please check the schedule settings.');
        }
        return $mail;
    }

    public function toArray($notifiable): array
    {
        return [
            //
        ];
    }
}
