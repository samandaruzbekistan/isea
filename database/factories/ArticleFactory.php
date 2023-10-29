<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition(): array
    {
        return [
            'topic' => $this->faker->sentence,
            'page' => $this->faker->paragraph,
            'photo' => $this->faker->name,
            'video_url' => $this->faker->url,
        ];
    }
}
