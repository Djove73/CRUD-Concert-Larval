<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ConcertFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{
    return [
        'name' => $this->faker->sentence(3),
        'start_datetime' => $this->faker->dateTimeBetween('+0 days', '+1 month'),
        'end_datetime' => $this->faker->dateTimeBetween('+1 month', '+2 months'),
        'max_people' => $this->faker->numberBetween(50, 500),
        'tickets_sold' => $this->faker->numberBetween(0, 500),
    ];
}

}
