<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Client;
use App\Models\Country;
use App\Models\Invoice;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    protected $model = Client::class;

    public function definition()
    {
        // Select random country, state, and city from existing records
        $countryId = Country::inRandomOrder()->first()->id ?? null; // Get a random country ID
        $stateId = State::where('country_id', $countryId)->inRandomOrder()->first()->id ?? null; // Get a random state in that country
        $cityId = City::where('state_id', $stateId)->inRandomOrder()->first()->id ?? null; // Get a random city in that state

        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'website' => $this->faker->url,
            'company' => $this->faker->company,
            'postal_code' => $this->faker->postcode,
            'address' => $this->faker->address,
            'note' => $this->faker->sentence,
            'country_id' => $countryId, // Use the selected country
            'state_id' => $stateId, // Use the selected state
            'city_id' => $cityId, // Use the selected city
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Client $client) {
            Invoice::factory()
                ->count(rand(1, 5))  // Each client gets between 1 and 5 invoices
                ->create(['client_id' => $client->id]);
        });
    }
}
