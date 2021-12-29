<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Queue\SerializesModels;

class NewUserRegisteredNotification extends Notification implements ShouldQueue
{
    use Queueable,SerializesModels;

    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function via(mixed $notifiable): array
    {
        return ['mail'];
    }

    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject(__('New user registered'))
            ->line(__('A new user has registered.'))
            ->line(__('Name: ') . $this->user->name)
            ->line(__('Email: ') . $this->user->email)
            ->line(__('Role: ') . $this->user->roles()->first()->name)
            ->line(__('Date: ') . $this->user->created_at)
            ->action(__('View user'), route('admin.users.show', $this->user->id));
    }

    public function toArray($notifiable): array
    {
        return [
            'name' => $this->user->name,
            'email' => $this->user->email,
        ];
    }
}
