<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'client_name' => $this->faker->firstName,
            'client_surname' => $this->faker->firstName,
            'client_patronymic' => $this->faker->firstName,
            'client_phone' => $this->faker->phoneNumber,
            'additional_phone' => $this->faker->phoneNumber,
            'car_brand' => $this->faker->randomElement(['Audi', 'BMW', 'Mercedes', 'VW', 'Volvo', 'Lada', 'Hyundai', 'Kia', 'Renault', 'Mitsubishi']),
            'car_model' => $this->faker->randomElement(['B100', 'X5', 'S300', 'Golf', 'X35', 'Vesta', 'Accent', 'Rio', 'Logan', 'Outlander']),
            'car_production_year' => $this->faker->numberBetween(1990, 2021),
            'car_vin_number' => $this->faker->randomNumber(9, true),
            'date_time' => $this->faker->dateTimeBetween(now(), '2021-12-31 12:00:00'),
            'approximate_duration' => $this->faker->randomElement([30, 45, 60, 75, 90, 105, 120, 135, 150]),
            'description' => $this->faker->text(100),
            'status' => $this->faker->randomElement(['process', 'waiting', 'done']),
            'user_id' => 1,
            'master_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
