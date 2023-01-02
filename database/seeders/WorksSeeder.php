<?php

namespace Database\Seeders;

use App\Models\Works;
use Illuminate\Database\Seeder;

class WorksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Works::factory()->count(10)->create();
        $work = Works::Create([
            'name' => 'What to Ear Huh',
            'description' => [
                'en' => 'Are you having trouble of what to eat day ? What to app will be the essential app for you to decide what to eat no matter when!',
                'zh' => '你在为吃什么而烦恼吗？ What to app 将是您决定吃什么的必备应用程序！',
            ],
            'picture_name' => '8fbRvAqDtLnM3QpUjwQ5Hvyx8TqqWqmvw7s2jIDR.png',
            'url' => 'https://eat.chengkangzai.com',
            'github_url' => 'https://github.com/chengkangzai/eatwhat',
            'status' => 1,
        ]);
        $work->syncTags(['Firebase', 'Laravel', 'Angular', 'Ionic', 'Capacitor']);
    }
}
