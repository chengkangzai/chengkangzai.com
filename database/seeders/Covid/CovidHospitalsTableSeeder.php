<?php

namespace Database\Seeders\Covid;

use Illuminate\Database\Seeder;

class CovidHospitalsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('hospitals')->delete();
        
        
        
    }
}