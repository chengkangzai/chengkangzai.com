<?php

namespace Database\Factories;

use App\Models\Works;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorksFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Works::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->text(20),
            'description' => $this->faker->text(100),
            'picture_name' => $this->faker->text,
            'url' => $this->faker->url,
            'github_url' => $this->faker->url,
            'status' => $this->faker->boolean
        ];
    }
}
