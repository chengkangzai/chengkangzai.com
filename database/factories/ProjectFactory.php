<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'github_url' => $this->faker->url(),
            'url' => $this->faker->url(),
            'is_active' => $this->faker->boolean(),
            'sort' => Project::count(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }

    public function configure(): ProjectFactory
    {
        return $this->afterCreating(function (Project $project) {
            if ($project->tags()->count() === 0) {
                $project->attachTags(['tag1', 'tag2']);
            }

            $project->addMediaFromUrl('https://via.placeholder.com/150')
                ->toMediaCollection('thumbnail');
        });
    }
}
