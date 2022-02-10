<?php

namespace Database\Factories;

use Carbon\Carbon;
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
        $from = $this->faker->date;
        $to = Carbon::parse($from)->addDays($this->faker->randomNumber(1) + 3);
        return [
            'hot' => $this->faker->boolean(),
            'destination' => $this->faker->city,
            'from' => $from,
            'to' => $to,
            'price' => $this->faker->randomNumber(2),
            'departure' => $this->faker->randomElement(['palermo', 'catalina', 'roma', 'milano']),
            'link' => 'https://viagginvidia.it/go/'.$this->faker->word,
        ];
    }
}
