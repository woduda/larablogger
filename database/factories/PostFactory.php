<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(5),
            'content' => $this->faker->paragraph(20),
            'date' => now(),
            'type' => 'text',
        ];
    }

    /**
     * 
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function image()
    {
        return $this->state(function (array $attributes) {
            return [
                'content' => null,
                'image' => $this->faker->imageUrl(1200, 800),
                'type' => 'photo',
            ];
        });
    }
}
