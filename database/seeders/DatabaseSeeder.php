<?php

namespace Database\Seeders;

use App\Console\Commands\ImportCOVIDDataFromGithub;
use Artisan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            PostSeeder::class,
            CommentSeeder::class,
            TagsSeeder::class,
            WorksSeeder::class
        ]);

        Artisan::call('import:covid');
        Artisan::call('import:vaccine');
    }
}
