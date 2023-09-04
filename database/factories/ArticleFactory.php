<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(mt_rand(1,4)),
            'slug' => $this->faker->slug(),
            // 'author' => $this->faker->name(),
            'excerpt' => $this->faker->paragraph(),
            'body' => $this->faker->paragraphs(5, 12, true),
            'published_at' => now(),
            'user_id' => $this->faker->numberBetween(1,5),
            'category_id' => $this->faker->numberBetween(1,3)
        ];
    }
}
