<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Client;

/**
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->name,
            'dni'=> $this->faker->numberBetween($min=10000000, $max=43275997),
            'ruc'=> $this->faker->numberBetween($min=10000000, $max=43275997),
            'address'=> $this->faker->streetAddress,
            'phone'=> $this->faker->numberBetween($min=100000000, $max=1000000000),
            'email'=> $this->faker->email,
        ];
    }
}
