<?php

namespace Database\Seeders\Covid;

use Illuminate\Database\Seeder;

class CovidTestStatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('test_states')->delete();
        
        
        
    }
}