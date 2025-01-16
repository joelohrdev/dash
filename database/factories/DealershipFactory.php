<?php

namespace Database\Factories;

use App\Models\DealerGroup;
use App\Models\Dealership;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class DealershipFactory extends Factory
{
    protected $model = Dealership::class;

    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid(),
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'state' => $this->faker->word(),
            'postal_code' => $this->faker->postcode(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'dealer_group_id' => DealerGroup::factory(),
        ];
    }
}
