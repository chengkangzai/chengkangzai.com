<?php

namespace Database\Seeders\Covid;

use Illuminate\Database\Seeder;

class CovidIcusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('icus')->delete();
        
        
        
    }
}