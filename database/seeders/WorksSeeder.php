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
        Works::factory()->count(10)->create();
    }
}
