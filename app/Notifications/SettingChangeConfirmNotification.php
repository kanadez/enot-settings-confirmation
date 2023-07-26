<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;

class SettingChangeConfirmNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $confirmation_code;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($confirmation_code)
    {
        $this->confirmation_code = $confirmation_code;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [$notifiable->preferredNotifyWay()];
    }

    /**
     * Получить eMail-представление уведомления.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line("Введите код для подтверждения изменений: {$this->confirmation_code}");
    }

    /**
     * Получить Telegram-представление уведомления.
     *
     * @param $notifiable
     * @return mixed
     */
    public function toTelegram($notifiable)
    {
        return TelegramMessage::create()
            ->to($notifiable->telegram)
            ->content("Введите код для подтверждения изменений: *{$this->confirmation_code}*");
    }

    /**
     * Получить SMS-представление уведомления.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\NexmoMessage
     */
    public function toNexmo($notifiable)
    {
        return (new NexmoMessage)
            ->content("Введите код для подтверждения изменений: {$this->confirmation_code}");
    }
}
