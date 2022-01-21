<?php

namespace Database\Seeders\Covid;

use Illuminate\Database\Seeder;

class CovidPopulationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('populations')->delete();
        
        \DB::table('populations')->insert(array (
            0 => 
            array (
                'created_at' => '2022-01-21 14:44:01',
                'idxs' => 0,
                'pop' => 32657400,
                'pop_12' => 3147500,
                'pop_18' => 23409600,
                'pop_60' => 3502000,
                'state' => 'Malaysia',
                'updated_at' => '2022-01-21 14:44:01',
            ),
            1 => 
            array (
                'created_at' => '2022-01-21 14:44:01',
                'idxs' => 1,
                'pop' => 3781000,
                'pop_12' => 359900,
                'pop_18' => 2711900,
                'pop_60' => 428700,
                'state' => 'Johor',
                'updated_at' => '2022-01-21 14:44:01',
            ),
            2 => 
            array (
                'created_at' => '2022-01-21 14:44:01',
                'idxs' => 2,
                'pop' => 2185100,
                'pop_12' => 211400,
                'pop_18' => 1540600,
                'pop_60' => 272500,
                'state' => 'Kedah',
                'updated_at' => '2022-01-21 14:44:01',
            ),
            3 => 
            array (
                'created_at' => '2022-01-21 14:44:01',
                'idxs' => 3,
                'pop' => 1906700,
                'pop_12' => 210600,
                'pop_18' => 1236200,
                'pop_60' => 194100,
                'state' => 'Kelantan',
                'updated_at' => '2022-01-21 14:44:01',
            ),
            4 => 
            array (
                'created_at' => '2022-01-21 14:44:01',
                'idxs' => 4,
                'pop' => 932700,
                'pop_12' => 86500,
                'pop_18' => 677400,
                'pop_60' => 118500,
                'state' => 'Melaka',
                'updated_at' => '2022-01-21 14:44:01',
            ),
            5 => 
            array (
                'created_at' => '2022-01-21 14:44:01',
                'idxs' => 5,
                'pop' => 1128800,
                'pop_12' => 109400,
                'pop_18' => 814400,
                'pop_60' => 145000,
                'state' => 'Negeri Sembilan',
                'updated_at' => '2022-01-21 14:44:01',
            ),
            6 => 
            array (
                'created_at' => '2022-01-21 14:44:01',
                'idxs' => 6,
                'pop' => 1678700,
                'pop_12' => 173000,
                'pop_18' => 1175800,
                'pop_60' => 190200,
                'state' => 'Pahang',
                'updated_at' => '2022-01-21 14:44:01',
            ),
            7 => 
            array (
                'created_at' => '2022-01-21 14:44:01',
                'idxs' => 7,
                'pop' => 1773600,
                'pop_12' => 141500,
                'pop_18' => 1367200,
                'pop_60' => 239200,
                'state' => 'Pulau Pinang',
                'updated_at' => '2022-01-21 14:44:01',
            ),
            8 => 
            array (
                'created_at' => '2022-01-21 14:44:01',
                'idxs' => 8,
                'pop' => 2510300,
                'pop_12' => 237200,
                'pop_18' => 1862700,
                'pop_60' => 397300,
                'state' => 'Perak',
                'updated_at' => '2022-01-21 14:44:01',
            ),
            9 => 
            array (
                'created_at' => '2022-01-21 14:44:01',
                'idxs' => 9,
                'pop' => 254900,
                'pop_12' => 23100,
                'pop_18' => 181200,
                'pop_60' => 35100,
                'state' => 'Perlis',
                'updated_at' => '2022-01-21 14:44:01',
            ),
            10 => 
            array (
                'created_at' => '2022-01-21 14:44:01',
                'idxs' => 10,
                'pop' => 6538000,
                'pop_12' => 569100,
                'pop_18' => 4747900,
                'pop_60' => 575800,
                'state' => 'Selangor',
                'updated_at' => '2022-01-21 14:44:01',
            ),
            11 => 
            array (
                'created_at' => '2022-01-21 14:44:01',
                'idxs' => 11,
                'pop' => 1259300,
                'pop_12' => 138100,
                'pop_18' => 808400,
                'pop_60' => 115200,
                'state' => 'Terengganu',
                'updated_at' => '2022-01-21 14:44:01',
            ),
            12 => 
            array (
                'created_at' => '2022-01-21 14:44:01',
                'idxs' => 12,
                'pop' => 3908500,
                'pop_12' => 434000,
                'pop_18' => 2758400,
                'pop_60' => 238900,
                'state' => 'Sabah',
                'updated_at' => '2022-01-21 14:44:01',
            ),
            13 => 
            array (
                'created_at' => '2022-01-21 14:44:01',
                'idxs' => 13,
                'pop' => 2816500,
                'pop_12' => 293200,
                'pop_18' => 2042700,
                'pop_60' => 332800,
                'state' => 'Sarawak',
                'updated_at' => '2022-01-21 14:44:01',
            ),
            14 => 
            array (
                'created_at' => '2022-01-21 14:44:01',
                'idxs' => 14,
                'pop' => 1773700,
                'pop_12' => 140800,
                'pop_18' => 1348600,
                'pop_60' => 205800,
                'state' => 'W.P. Kuala Lumpur',
                'updated_at' => '2022-01-21 14:44:01',
            ),
            15 => 
            array (
                'created_at' => '2022-01-21 14:44:01',
                'idxs' => 15,
                'pop' => 99600,
                'pop_12' => 10200,
                'pop_18' => 68500,
                'pop_60' => 7900,
                'state' => 'W.P. Labuan',
                'updated_at' => '2022-01-21 14:44:01',
            ),
            16 => 
            array (
                'created_at' => '2022-01-21 14:44:01',
                'idxs' => 16,
                'pop' => 110000,
                'pop_12' => 9500,
                'pop_18' => 67700,
                'pop_60' => 5000,
                'state' => 'W.P. Putrajaya',
                'updated_at' => '2022-01-21 14:44:01',
            ),
        ));
        
        
    }
}