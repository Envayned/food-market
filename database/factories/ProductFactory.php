<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
             'name' => "Product #" . $this->faker->unique()->randomNumber(),
             'description' => 'lorem ipsum',
             'price' => 9.99,
             'in_cart' => $this->faker->boolean(0),
        ];
    }
}
