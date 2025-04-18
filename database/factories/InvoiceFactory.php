<?php

namespace Database\Factories;

use App\Models\Invoice;
use App\Models\InvoiceItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    protected $model = Invoice::class;

    public function definition()
    {
        return [
            'invoice_id' => $this->faker->unique()->numerify('INV####'),
            'client_id' => \App\Models\Client::factory(),  // Related client
            'invoice_date' => $this->faker->date(),
            'due_date' => $this->faker->date(),
            'amount' => $this->faker->randomFloat(2, 100, 1000),
            'final_amount' => $this->faker->randomFloat(2, 100, 1000),
            'discount_type' => $this->faker->randomElement([Invoice::FIXED, Invoice::PERCENTAGE]),
            'discount' => $this->faker->randomFloat(2, 0, 50),
            'status' => $this->faker->randomElement([Invoice::DRAFT, Invoice::UNPAID, Invoice::PAID]),
            'recurring_status' => $this->faker->randomElement([Invoice::RECURRING_ON, Invoice::RECURRING_OFF]),
            'recurring_cycle' => $this->faker->randomElement([Invoice::MONTHLY, Invoice::QUARTERLY, Invoice::ANNUALLY]),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Invoice $invoice) {
            InvoiceItem::factory()
                ->count(rand(1, 5))  // Each invoice will have between 1 to 5 items
                ->create(['invoice_id' => $invoice->id]);
        });
    }
}

