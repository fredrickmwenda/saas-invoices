<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'code' => $this->faker->unique()->numerify('PRD####'),
            'category_id' => \App\Models\Category::factory(), // Related category
            'unit_price' => $this->faker->randomFloat(2, 10, 1000), // Price between 10 and 1000
            'description' => $this->faker->sentence,
        ];
    }
}
