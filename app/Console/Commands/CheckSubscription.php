<?php

namespace App\Console\Commands;

use App\Models\Subscription;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CheckSubscription extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-subscription';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */

    public function handle()
    {
        $currentHour = Carbon::now()->hour;
    
        // Fetch subscriptions ending today
        $subscriptions = Subscription::where('ends_date', '<', Carbon::now()->endOfDay())->cursor();
    
        foreach ($subscriptions as $subscription) {
            // Send notification at 6 AM
            if ($currentHour === 6) {
                $subscription->user->notify(new \App\Notifications\SubscriptionEndingNotification($subscription));
            }
    
            // Set to expired at 11:59 PM
            if ($currentHour === 23 && Carbon::now()->minute === 59) {
                $subscription->update(['status' => 'expired']);
            }
        }
    }
        
    
}
