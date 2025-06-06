<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubscriptionPlan;

class SubscriptionPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            [
                'name' => 'Free',
                'price' => 0.00,
                'duration' => 30,
                'duration_unit' => 'day',
                'status' => 'inactive',
                'description' => 'Free plan with basic features',
                'currency' => 'USD',
                'features' => json_encode([
                    '1 User',
                    'Basic Invoice Templates',
                    '5 Clients',
                    '10 Invoices per month',
                    'Basic Support'
                ])
            ],
            [
                'name' => 'Basic',
                'price' => 29.99,
                'duration' => 1,
                'duration_unit' => 'month',
                'status' => 'active',
                'description' => 'Perfect for small businesses. Includes essential features.',
                'currency' => 'USD',
                'features' => json_encode([
                    '3 Users',
                    'All Invoice Templates',
                    'Unlimited Clients',
                    '100 Invoices per month',
                    'Email Support',
                    'Export Reports',
                    'Payment Reminders'
                ])
            ],
            [
                'name' => 'Standard',
                'price' => 59.99,
                'duration' => 1,
                'duration_unit' => 'month',
                'status' => 'active',
                'description' => 'Most popular plan. Includes advanced features and priority support.',
                'currency' => 'USD',
                'features' => json_encode([
                    '10 Users',
                    'All Invoice Templates',
                    'Unlimited Clients',
                    'Unlimited Invoices',
                    'Priority Support',
                    'Export Reports',
                    'Payment Reminders',
                    'Client Portal',
                    'Recurring Invoices',
                    'API Access'
                ])
            ],
            [
                'name' => 'Premium',
                'price' => 99.99,
                'duration' => 1,
                'duration_unit' => 'month',
                'status' => 'active',
                'description' => 'Enterprise-grade features with unlimited access and dedicated support.',
                'currency' => 'USD',
                'features' => json_encode([
                    'Unlimited Users',
                    'All Invoice Templates',
                    'Unlimited Clients',
                    'Unlimited Invoices',
                    'Dedicated Support',
                    'Export Reports',
                    'Payment Reminders',
                    'Client Portal',
                    'Recurring Invoices',
                    'API Access',
                    'Custom Domain',
                    'White Label Option',
                    'Priority Development'
                ])
            ]
        ];

        foreach ($plans as $plan) {
            SubscriptionPlan::updateOrCreate(
                ['name' => $plan['name']],
                $plan
            );
        }
    }
}
