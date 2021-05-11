<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(10),
            'content' => $this->faker->text,
            'status' => Post::STATUS['PUBLISH'],
        ];
    }

    /**
     * Indicate that the model's should be draft
     *
     * @return Factory
     */
    public function draft(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => Post::STATUS['DRAFT'],
            ];
        });
    }
}
