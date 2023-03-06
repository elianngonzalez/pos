<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Provider;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code' => $this->faker->unique()->numberBetween(1,9999),
            'name' => $this->faker->unique()->word,
            'stock' => $this->faker->randomDigitNotNull,
            'image' => $this->faker->imageUrl(),
            'sell_price' => $this->faker->randomFloat(2,0,100),
            'status' => $this->faker->randomElement(['ACTIVE','DEACTIVATED']),
            'category_id' => function () {
                return Category::all()->random();
            },
            'provider_id' => function () {
                return Provider::all()->random();
            },
        ];
    }
}
