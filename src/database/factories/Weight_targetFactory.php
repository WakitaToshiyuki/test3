<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Weight_targetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $intPart = $this->faker->numberBetween(0, 999);
        $decimalPart = $this->faker->numberBetween(0, 9);

        return [
            'user_id'=>'1',
            'target_weight'=>floatval("{$intPart}.{$decimalPart}"),
        ];
    }
}
