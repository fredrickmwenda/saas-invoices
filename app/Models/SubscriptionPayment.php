<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionPayment extends Model
{
    use HasFactory;

    protected $table = 'subscription_payments';
    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }

 

        ### **Workflow**
        // 1. **Subscription Creation:**
        //    - When a tenant subscribes, create a record in the `subscriptions` table and link it to the `subscription_plans` table.
        
        // 2. **Payment Processing:**
        //    - Record payments in the `payments` table and update the `subscriptions` table's status.
        
        // 3. **Subscription Expiry:**
        //    - Use a scheduled job to check for expired subscriptions and update their status.
        
        
        
 
    
        

}
