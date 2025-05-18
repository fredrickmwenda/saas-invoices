<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SubscriptionEndingNotification extends Notification
{
    use Queueable;

    private $subscription;

    /**
     * Create a new notification instance.
     */
    public function __construct($subscription)
    {
        $this->subscription = $subscription;
    }


    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('Subscription Ending Today')
                    ->greeting('Dear ' . $notifiable->name . ',')
                    ->line('Your subscription for ' . $this->subscription->plan->name . ' is ending today.')
                    ->line('Please take the necessary actions to renew your subscription.')
                    ->action('Renew Subscription', url('/subscriptions/renew'))
                    ->line('If you have any questions, feel free to contact us.')
                    ->line('Thank you for using our Invoice Service!');

                   
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'subscription_id' => $this->subscription->id,
            'plan_name' => $this->subscription->plan->name,
            'ends_date' => $this->subscription->ends_date,
            'message' => 'Your subscription for ' . $this->subscription->plan->name . ' is ending today.',
            'action_url' => url('/subscriptions/renew'),
            //
        ];
    }
}
