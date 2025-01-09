<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{
    return [
        'name' => $this->faker->word,
        'music_type' => $this->faker->randomElement(['Rock', 'Pop', 'Jazz', 'Classical']),
        'members_count' => $this->faker->numberBetween(3, 10),
    ];
}

}
