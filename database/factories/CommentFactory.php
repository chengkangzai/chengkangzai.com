<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
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
        return $this->state(function (array $attributes) use ($id) {
            return [
                'status' => Comment::STATUS['SPAM'],
            ];
        });
    }

}
