<?php

namespace App\Notifications\User;

use App\Services\Notification\SmsChannel;
use App\Services\Notification\SmsMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class UserLoginNotification extends Notification
{
    use Queueable;

    public function __construct(
        public int $code,
        public string $phone
    ) {
    }

    public function via($notifiable): array
    {
        return ['sms'];
    }

    public function toSms($notifiable): SmsMessage
    {
        return (new SmsMessage())
            ->gate('default')
            ->to($this->phone)
            ->message("These aren't the droids you are looking for.");
    }
}
