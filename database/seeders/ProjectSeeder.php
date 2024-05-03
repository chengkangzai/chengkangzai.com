<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::factory(6)
            ->state(new Sequence([
                'name' => 'Project 1',
                'tags' => ['tag1', 'tag2'],
                'is_active' => true,
                'github_url' => 'https://github.com',
            ]))
        ->create();

    }
}
