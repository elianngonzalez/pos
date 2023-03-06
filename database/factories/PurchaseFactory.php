<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Provider;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Purchase>
 */
class PurchaseFactory extends Factory
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
            'provider_id' => function () {
                return Provider::all()->random();
            },
            'purchase_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'tax' => $this->faker->randomFloat(2, 0, 10),
            'total' => $this->faker->randomFloat(2, 10, 1000),
            'status' => $this->faker->randomElement(['VALID', 'CANCELED']),
            'picture' => $this->faker->imageUrl(),
        ];
    }
}
