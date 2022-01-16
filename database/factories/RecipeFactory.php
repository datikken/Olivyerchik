<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'heading' => $this->faker->title,
            'subheading' => $this->faker->sentence,
            'recipe-intro' => $this->faker->paragraph,
            'recipe-detail' => $this->faker->paragraph,
            'recipe-nutrition' => json_encode($this->faker->words(5, true)),
            'recipe-steps' => $this->faker->words(6, true),
            'ingred-list' => $this->faker->words(5, true)
        ];
    }
}
