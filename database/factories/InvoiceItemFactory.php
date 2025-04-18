<?php
namespace Database\Factories;

use App\Models\InvoiceItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceItemFactory extends Factory
{
    protected $model = InvoiceItem::class;

    public function definition()
    {
        return [
            'invoice_id' => \App\Models\Invoice::factory(),  // Related invoice
            'product_id' => \App\Models\Product::factory(),  // Related product
            'product_name' => $this->faker->word,
            'quantity' => $this->faker->randomFloat(2, 1, 10), // Quantity between 1 and 10
            'price' => function (array $attributes) {
                return \App\Models\Product::find($attributes['product_id'])->unit_price; // Use product unit price
            },
            'total' => function (array $attributes) {
                return $attributes['quantity'] * $attributes['price']; // Calculate total
            },
        ];
    }
}
