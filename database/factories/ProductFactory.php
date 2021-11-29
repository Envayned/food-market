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
             'product_name' => "item" . $this->faker->randomDigit(),
             'product_description' => 'lorem ipsum',
             'product_price' => 9.99,
        ];
    }
}
