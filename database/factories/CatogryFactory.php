<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CatogryFactory extends Factory
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
            'resto_id'=>1,
        ];
    }
}
