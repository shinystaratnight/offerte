<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category' => $this->faker->randomElement(['palermo', 'catalina', 'roma', 'milano']),
            'hot' => $this->faker->boolean(),
            'destination' => $this->faker->city,
            'from' => $this->faker->date,
            'to' => $this->faker->date,
            'price' => $this->faker->randomNumber(2),
            'link' => 'https://viagginvidia.it/go/'.$this->faker->word,
        ];
    }
}
