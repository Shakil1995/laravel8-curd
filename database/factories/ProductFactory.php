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
             'user_id' => $this->faker->randomNumber(1),
            'name' => $this->faker->jobTitle(),
            'detail' => $this->faker->paragraph(),
        ];
    }
}
