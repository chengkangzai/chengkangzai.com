<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Webhook\WebhookChannel;
use NotificationChannels\Webhook\WebhookMessage;
use ReflectionException;

class ImportTaskSuccessNotification extends Notification implements ShouldQueue
{
    use Queueable;
    public const COLOR_SUCCESS = '0b6623';
    public const COLOR_WARNING = 'fD6a02';
    public const COLOR_ERROR = 'e32929';

    private string $message;
    private array $model;
    private int $second;

    public function __construct(string $message, array $model, float $second)
    {
        $this->message = $message;
        $this->model = $model;
        $this->second = $second;
    }

    public function via($notifiable): array
    {
        return [WebhookChannel::class];
    }

    /**
     * @throws ReflectionException
     */
    public function toWebhook($notifiable): WebhookMessage
    {
        $totalRecord = 0;
        foreach ($this->model as $model) {
            $count = $model::count();
            $totalRecord = $totalRecord + $count;
            $fields[] = [
                'name' => (new \ReflectionClass($model))->getShortName() . ' Count',
                'value' => number_format($count),
                'inline' => true,
            ];
        }

        return WebhookMessage::create()
            ->data([
                'username' => "Comment Broadcasts BOT",
                'avatar_url' => asset('android-chrome-512x512.png'),
                'embeds' => [
                    [
                        'title' => (new \ReflectionClass($this->message))->getShortName() . ' run successfully',
                        'type' => 'rich',
                        'description' => 'Total time: ' . $this->second . ' seconds, ' .
                            number_format($totalRecord) . ' records imported.',
                        'fields' => $fields,
                        'color' => hexdec(self::COLOR_SUCCESS),
                        'timestamp' => $this->timestamp ?? now(),
                    ],
                ],
            ])
            ->header('Content-Type', 'application/json');
    }

    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage())
            ->subject('Import Task Success')
            ->line('The import task has been successfully completed.');
    }

    public function toArray($notifiable): array
    {
        return [
            //
        ];
    }
}
