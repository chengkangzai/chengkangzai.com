<?php

namespace Database\Seeders\Covid;

use Illuminate\Database\Seeder;

class CovidDeathsStatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('deaths_states')->delete();
        
        
        
    }
}