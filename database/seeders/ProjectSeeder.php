<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::factory([
            'name' => 'What to Eat Huh',
            'tags' => ['Angular', 'Ionic', 'Capacitor', 'Firebase'],
            'description' => 'Are you having trouble with what to eat today? What to eat app will be the essential app for you to decide what to eat no matter when!',
            'is_active' => true,
            'github_url' => 'https://github.com/chengkangzai/eatwhat',
            'url' => 'https://eat.chengkangzai.com/',
        ])
            ->afterCreating(function (Project $project) {
                $project
                    ->clearMediaCollection('thumbnail')
                    ->addMediaFromDisk('projects/what-to-eat-huh.png', 'local-seed')
                    ->preservingOriginal()
                    ->toMediaCollection('thumbnail');
            })
            ->create();


        Project::factory([
            'name' => 'Malaysia Covid-19 Pandemic Dashboard',
            'tags' => ['Laravel', 'PHP', 'Tailwind CSS', 'Livewire'],
            'description' => 'Covid-19 dashboard for Malaysia, showcasing the latest Covid-19 statistics, cases, deaths, recoveries and more.',
            'is_active' => true,
            'github_url' => 'https://github.com/chengkangzai/malaysia-pandemic-dashboard',
            'url' => 'https://pandemic.chengkangzai.com/',
        ])
            ->afterCreating(function (Project $project) {
                $project
                    ->clearMediaCollection('thumbnail')
                    ->addMediaFromDisk('projects/malaysia-covid-19-pandemic-dashboard.png', 'local-seed')
                    ->preservingOriginal()
                    ->toMediaCollection('thumbnail');
            })
            ->create();

        Project::factory([
            'name' => '[Discontinued] NakVaksin!',
            'tags' => ['Tailwind CSS', 'React', 'Next.js'],
            'description' => 'Nakvaksin is built for Malaysians to monitor their vaccination appointment and automatically send the notification if there is any update!',
            'is_active' => true,
            'github_url' => 'https://github.com/nubpro/nakvaksin',
            'url' => 'https://www.nakvaksin.com/',
        ])
            ->afterCreating(function (Project $project) {
                $project
                    ->clearMediaCollection('thumbnail')
                    ->addMediaFromDisk('projects/nakvaksin.png', 'local-seed')
                    ->preservingOriginal()
                    ->toMediaCollection('thumbnail');
            })
            ->create();

        Project::factory([
            'name' => '[Discontinued] Time Stone!',
            'tags' => ['Laravel', 'PHP', 'Tailwind CSS', 'Livewire'],
            'description' => 'TimeStone fetch my university(APU) timetable and automatically sync the timetable into the calendar!',
            'is_active' => true,
            'github_url' => 'https://github.com/chengkangzai/time-stone',
            'url' => '',
        ])
            ->afterCreating(function (Project $project) {
                $project
                    ->clearMediaCollection('thumbnail')
                    ->addMediaFromDisk('projects/time-stone.webp', 'local-seed')
                    ->preservingOriginal()
                    ->toMediaCollection('thumbnail');
            })
            ->create();

        Project::factory([
            'name' => 'Smart TT',
            'tags' => ['Laravel', 'PHP', 'Tailwind CSS', 'Livewire'],
            'description' => 'SmartTT is focusing to help the Tour Agency for selling and manage their tour package. It can also act as online CMS for Tour Agency for online marketing and booking system.',
            'is_active' => true,
            'github_url' => 'https://github.com/chengkangzai/SmartTT',
            'url' => 'https://smarttt.chengkangzai.com/',
        ])
            ->afterCreating(function (Project $project) {
                $project
                    ->clearMediaCollection('thumbnail')
                    ->addMediaFromDisk('projects/smarttt.png', 'local-seed')
                    ->preservingOriginal()
                    ->toMediaCollection('thumbnail');
            })
            ->create();

        Project::factory([
            'name' => 'Quotiverse',
            'tags' => ['Laravel', 'PHP', 'Tailwind CSS', 'Livewire'],
            'description' => 'Quotiverse is a place where i keep my favourite quote that motivate my life and my motto',
            'is_active' => true,
            'github_url' => 'https://github.com/chengkangzai/Quotiverse',
            'url' => 'https://quotiverse.chengkangzai.com/',
        ])
            ->afterCreating(function (Project $project) {
                $project
                    ->clearMediaCollection('thumbnail')
                    ->addMediaFromDisk('projects/quotiverse.png', 'local-seed')
                    ->preservingOriginal()
                    ->toMediaCollection('thumbnail');
            })
            ->create();

    }
}
