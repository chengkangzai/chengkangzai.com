<?php

namespace Database\Seeders\Covid;

use Illuminate\Database\Seeder;

class CovidCasesStatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cases_states')->delete();
        
        
        
    }
}