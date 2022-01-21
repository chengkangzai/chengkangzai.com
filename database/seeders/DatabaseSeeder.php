<?php

namespace Database\Seeders;

use Database\Seeders\Covid\CovidCasesMalaysiaTableSeeder;
use Database\Seeders\Covid\CovidCasesStatesTableSeeder;
use Database\Seeders\Covid\CovidClustersTableSeeder;
use Database\Seeders\Covid\CovidDeathsMalaysiaTableSeeder;
use Database\Seeders\Covid\CovidDeathsStatesTableSeeder;
use Database\Seeders\Covid\CovidHospitalsTableSeeder;
use Database\Seeders\Covid\CovidIcusTableSeeder;
use Database\Seeders\Covid\CovidPKRCTableSeeder;
use Database\Seeders\Covid\CovidPopulationsTableSeeder;
use Database\Seeders\Covid\CovidTestMalaysiaTableSeeder;
use Database\Seeders\Covid\CovidTestStatesTableSeeder;
use Database\Seeders\Vax\VaxVaxMalaysiasTableSeeder;
use Database\Seeders\Vax\VaxVaxRegMalaysiasTableSeeder;
use Database\Seeders\Vax\VaxVaxRegStatesTableSeeder;
use Database\Seeders\Vax\VaxVaxStatesTableSeeder;
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

        $this->call([
            CovidCasesMalaysiaTableSeeder::class,
            CovidCasesStatesTableSeeder::class,
            CovidDeathsMalaysiaTableSeeder::class,
            CovidDeathsStatesTableSeeder::class,
            CovidTestMalaysiaTableSeeder::class,
            CovidTestStatesTableSeeder::class,
            CovidClustersTableSeeder::class,
            CovidHospitalsTableSeeder::class,
            CovidIcusTableSeeder::class,
            CovidPKRCTableSeeder::class,
            CovidPopulationsTableSeeder::class,
        ]);

        $this->call([
            VaxVaxMalaysiasTableSeeder::class,
            VaxVaxRegMalaysiasTableSeeder::class,
            VaxVaxRegStatesTableSeeder::class,
            VaxVaxStatesTableSeeder::class,
        ]);

        $this->call(CovidCasesMalaysiaTableSeeder::class);
        $this->call(CovidCasesStatesTableSeeder::class);
        $this->call(CovidClustersTableSeeder::class);
        $this->call(CovidDeathsMalaysiaTableSeeder::class);
        $this->call(CovidDeathsStatesTableSeeder::class);
        $this->call(CovidHospitalsTableSeeder::class);
        $this->call(CovidIcusTableSeeder::class);
        $this->call(CovidPKRCTableSeeder::class);
        $this->call(CovidPopulationsTableSeeder::class);
        $this->call(CovidTestMalaysiaTableSeeder::class);
        $this->call(CovidTestStatesTableSeeder::class);
        $this->call(VaxVaxMalaysiasTableSeeder::class);
        $this->call(VaxVaxRegMalaysiasTableSeeder::class);
        $this->call(VaxVaxRegStatesTableSeeder::class);
        $this->call(VaxVaxStatesTableSeeder::class);
    }
}
