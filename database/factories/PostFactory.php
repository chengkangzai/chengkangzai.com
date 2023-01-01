<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;
use Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    #[ArrayShape(['title' => 'string', 'content' => 'string', 'status' => 'string', 'slug' => 'string'])]
    public function definition(): array
    {
        $title = $this->faker->text(100);

        return [
            'title' => $title,
            'content' => $this->faker->text,
            'status' => Post::STATUS['PUBLISH'],
            'slug' => Str::slug($title),
        ];
    }

    public function draft(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => Post::STATUS['DRAFT'],
            ];
        });
    }
}
