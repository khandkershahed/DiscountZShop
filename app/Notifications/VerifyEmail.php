<?php
namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail as BaseVerifyEmail;

class VerifyEmail extends BaseVerifyEmail
{
    public function toMail($notifiable)
    {
        return (parent::toMail($notifiable))
            ->line('Thank you for registering! Please click the button below to verify your email address.');
    }
}
