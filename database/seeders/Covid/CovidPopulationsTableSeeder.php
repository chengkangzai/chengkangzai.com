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
                'id' => 1,
                'state' => 'Malaysia',
                'idxs' => 0,
                'pop' => 32657400,
                'pop_18' => 23409600,
                'pop_60' => 3502000,
                'pop_12' => 3147500,
                'created_at' => '2021-12-29 22:00:54',
                'updated_at' => '2021-12-29 22:00:54',
            ),
            1 => 
            array (
                'id' => 2,
                'state' => 'Johor',
                'idxs' => 1,
                'pop' => 3781000,
                'pop_18' => 2711900,
                'pop_60' => 428700,
                'pop_12' => 359900,
                'created_at' => '2021-12-29 22:00:54',
                'updated_at' => '2021-12-29 22:00:54',
            ),
            2 => 
            array (
                'id' => 3,
                'state' => 'Kedah',
                'idxs' => 2,
                'pop' => 2185100,
                'pop_18' => 1540600,
                'pop_60' => 272500,
                'pop_12' => 211400,
                'created_at' => '2021-12-29 22:00:54',
                'updated_at' => '2021-12-29 22:00:54',
            ),
            3 => 
            array (
                'id' => 4,
                'state' => 'Kelantan',
                'idxs' => 3,
                'pop' => 1906700,
                'pop_18' => 1236200,
                'pop_60' => 194100,
                'pop_12' => 210600,
                'created_at' => '2021-12-29 22:00:54',
                'updated_at' => '2021-12-29 22:00:54',
            ),
            4 => 
            array (
                'id' => 5,
                'state' => 'Melaka',
                'idxs' => 4,
                'pop' => 932700,
                'pop_18' => 677400,
                'pop_60' => 118500,
                'pop_12' => 86500,
                'created_at' => '2021-12-29 22:00:54',
                'updated_at' => '2021-12-29 22:00:54',
            ),
            5 => 
            array (
                'id' => 6,
                'state' => 'Negeri Sembilan',
                'idxs' => 5,
                'pop' => 1128800,
                'pop_18' => 814400,
                'pop_60' => 145000,
                'pop_12' => 109400,
                'created_at' => '2021-12-29 22:00:54',
                'updated_at' => '2021-12-29 22:00:54',
            ),
            6 => 
            array (
                'id' => 7,
                'state' => 'Pahang',
                'idxs' => 6,
                'pop' => 1678700,
                'pop_18' => 1175800,
                'pop_60' => 190200,
                'pop_12' => 173000,
                'created_at' => '2021-12-29 22:00:54',
                'updated_at' => '2021-12-29 22:00:54',
            ),
            7 => 
            array (
                'id' => 8,
                'state' => 'Pulau Pinang',
                'idxs' => 7,
                'pop' => 1773600,
                'pop_18' => 1367200,
                'pop_60' => 239200,
                'pop_12' => 141500,
                'created_at' => '2021-12-29 22:00:54',
                'updated_at' => '2021-12-29 22:00:54',
            ),
            8 => 
            array (
                'id' => 9,
                'state' => 'Perak',
                'idxs' => 8,
                'pop' => 2510300,
                'pop_18' => 1862700,
                'pop_60' => 397300,
                'pop_12' => 237200,
                'created_at' => '2021-12-29 22:00:54',
                'updated_at' => '2021-12-29 22:00:54',
            ),
            9 => 
            array (
                'id' => 10,
                'state' => 'Perlis',
                'idxs' => 9,
                'pop' => 254900,
                'pop_18' => 181200,
                'pop_60' => 35100,
                'pop_12' => 23100,
                'created_at' => '2021-12-29 22:00:54',
                'updated_at' => '2021-12-29 22:00:54',
            ),
            10 => 
            array (
                'id' => 11,
                'state' => 'Selangor',
                'idxs' => 10,
                'pop' => 6538000,
                'pop_18' => 4747900,
                'pop_60' => 575800,
                'pop_12' => 569100,
                'created_at' => '2021-12-29 22:00:54',
                'updated_at' => '2021-12-29 22:00:54',
            ),
            11 => 
            array (
                'id' => 12,
                'state' => 'Terengganu',
                'idxs' => 11,
                'pop' => 1259300,
                'pop_18' => 808400,
                'pop_60' => 115200,
                'pop_12' => 138100,
                'created_at' => '2021-12-29 22:00:54',
                'updated_at' => '2021-12-29 22:00:54',
            ),
            12 => 
            array (
                'id' => 13,
                'state' => 'Sabah',
                'idxs' => 12,
                'pop' => 3908500,
                'pop_18' => 2758400,
                'pop_60' => 238900,
                'pop_12' => 434000,
                'created_at' => '2021-12-29 22:00:54',
                'updated_at' => '2021-12-29 22:00:54',
            ),
            13 => 
            array (
                'id' => 14,
                'state' => 'Sarawak',
                'idxs' => 13,
                'pop' => 2816500,
                'pop_18' => 2042700,
                'pop_60' => 332800,
                'pop_12' => 293200,
                'created_at' => '2021-12-29 22:00:54',
                'updated_at' => '2021-12-29 22:00:54',
            ),
            14 => 
            array (
                'id' => 15,
                'state' => 'W.P. Kuala Lumpur',
                'idxs' => 14,
                'pop' => 1773700,
                'pop_18' => 1348600,
                'pop_60' => 205800,
                'pop_12' => 140800,
                'created_at' => '2021-12-29 22:00:54',
                'updated_at' => '2021-12-29 22:00:54',
            ),
            15 => 
            array (
                'id' => 16,
                'state' => 'W.P. Labuan',
                'idxs' => 15,
                'pop' => 99600,
                'pop_18' => 68500,
                'pop_60' => 7900,
                'pop_12' => 10200,
                'created_at' => '2021-12-29 22:00:54',
                'updated_at' => '2021-12-29 22:00:54',
            ),
            16 => 
            array (
                'id' => 17,
                'state' => 'W.P. Putrajaya',
                'idxs' => 16,
                'pop' => 110000,
                'pop_18' => 67700,
                'pop_60' => 5000,
                'pop_12' => 9500,
                'created_at' => '2021-12-29 22:00:54',
                'updated_at' => '2021-12-29 22:00:54',
            ),
        ));
        
        
    }
}