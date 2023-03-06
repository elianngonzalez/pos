<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => function () {
                return User::all()->random();
            },
            'client_id' => function () {
                return Client::all()->random();
            },
            'sale_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'tax' => $this->faker->randomFloat(2, 0, 10),
            'total' => $this->faker->randomFloat(2, 10, 1000),
            'status' => $this->faker->randomElement(['VALID', 'CANCELED']),
        ];
    }
}
