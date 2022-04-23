<?php

namespace Database\Seeders\Covid;

use Illuminate\Database\Seeder;

class CovidDeathsMalaysiaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('deaths_malaysia')->delete();
        
        
        
    }
}