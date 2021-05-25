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
            'name' => "What to Ear Huh",
            'description' => "Are you having trouble of what to eat day ? What to app will be the essential app for you to decide what to eat no matter when!",
            'picture_name' => "UwLb7RZ1PRdp9biAIppHK41k4RCQkV3XqY7ORQgO.png",
            'url' => "https://eat.chengkangzai.com",
            'github_url' => "https://github.com/chengkangzai/eatwhat",
            'status' => 1,
        ]);
        $work->syncTags(['Firebase', 'Laravel', 'Angular', 'Ionic', 'Capacitor']);
    }
}
