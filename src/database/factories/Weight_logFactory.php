<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Weight_logFactory extends Factory
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
        $hours = $this->faker->numberBetween(0, 11);
        $minutes = $this->faker->numberBetween(0, 59);

        return [
            'user_id'=>'1',
            'date'=>$this->faker->date(),
            'weight'=>floatval("{$intPart}.{$decimalPart}"),
            'calories'=>$this->faker->randomNumber(),
            'exercise_time'=>sprintf('%02d:%02d', $hours, $minutes),
            'exercise_content'=>$this->faker->text(120),
        ];
    }
}

// sprintf('%02d:%02d', $hours, $minutes),
