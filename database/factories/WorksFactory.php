<?php

namespace Database\Factories;

use App\Models\Works;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class WorksFactory extends Factory
{
    protected $model = Works::class;

    #[ArrayShape(['name' => 'string', 'description' => 'array', 'picture_name' => 'string', 'url' => 'string', 'github_url' => 'string', 'status' => 'bool'])]
    public function definition(): array
    {
        return [
            'name' => $this->faker->text(20),
            'description' => [
                'en' => $this->faker->text(100),
                'zh' => $this->faker->text(100),
            ],
            'picture_name' => $this->faker->text(),
            'url' => $this->faker->url(),
            'github_url' => $this->faker->url(),
            'status' => $this->faker->boolean(),
        ];
    }
}
