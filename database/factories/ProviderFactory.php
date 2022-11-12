<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Provider>
 */
class ProviderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'name'=>$this->faker->text($maxNbChars=20),
        'email'=>$this->faker->email,
        'ruc_number'=>$this->faker->numberBetween($min=1000000,$max=10000000),
        'address'=>$this->faker->streetAddress,
        'phone'=>$this->faker->numberBetween($min=100000000, $max=1000000000),    
        ];
    }
}
