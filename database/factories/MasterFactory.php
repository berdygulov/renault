<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MasterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'       => $this->faker->firstName,
            'surname'    => $this->faker->firstName,
            'patronymic' => $this->faker->firstName,
            'position'   => $this->faker->randomElement(['Моторист', 'Автоэлектрик', 'Кузовщик']),
        ];
    }
}
