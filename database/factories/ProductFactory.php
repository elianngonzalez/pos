<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'code'=>$this->faker->numberBetween($min=2,$max=10000000),
            'name'=>$this->faker->word,
            'stock'=>$this->faker->numberBetween($min=1,$max=1000),
            'sell_price'=>$this->faker->numberBetween($min=1,$max=1000),
            'image' => $this->faker->word,
            'status'=>'ACTIVE',
            'category_id'=>$this->faker->numberBetween($min=1,$max=20),
            'provider_id'=>$this->faker->numberBetween($min=1,$max=90),
        ];
    }
}
