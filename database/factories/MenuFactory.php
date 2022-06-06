<?php

namespace Database\Factories;
use Faker\Generator as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->word,
             'description'=>$this->faker->paragraphs(2,true),
             'price'=> $this->faker->numberBetween(99,999),

        ];
    }
}
