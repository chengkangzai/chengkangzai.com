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
            PermissionSeeder::class,
            RoleSeeder::class,
            PostSeeder::class,
            CommentSeeder::class,
            TagsSeeder::class,
            WorksSeeder::class,
        ]);

        exec('php artisan import:covid');
        exec('php artisan import:vaccine');
    }
}
