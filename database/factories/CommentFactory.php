<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    #[ArrayShape(['comment' => 'string', 'email' => 'string', 'name' => 'string', 'status' => 'string', 'post_id' => 'mixed'])]
    public function definition(): array
    {
        return [
            'comment' => $this->faker->text,
            'email' => $this->faker->safeEmail,
            'name' => $this->faker->name,
            'status' => Comment::STATUS['PUBLISH'],
            'post_id' => Post::inRandomOrder()->first(),
        ];
    }

    public function post($id): CommentFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'post_id' => $id,
            ];
        });
    }

    public function markAsSpam($id): CommentFactory
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => Comment::STATUS['SPAM'],
            ];
        });
    }
}
