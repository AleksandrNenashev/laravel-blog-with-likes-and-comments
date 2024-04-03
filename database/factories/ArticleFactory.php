<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Stringable;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(6, true);
        $slug = (new Stringable(preg_replace('/\s+/', '-', $title)))->lower()->substr(0, -1);

        return [
            'title' => $title,
            'body'  => $this->faker->paragraph(100, true),
            'slug'  => $slug,
            'img'   => 'https://via.placeholder.com/600/5F113B/FFFFFF/?text=LARAVEL:8.*',
            'created_at' => $this->faker->dateTimeBetween('-1 years')
        ];
    }
}
