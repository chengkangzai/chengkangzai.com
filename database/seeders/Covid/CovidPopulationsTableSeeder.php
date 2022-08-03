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
                'state' => 'Malaysia',
                'idxs' => 0,
                'pop' => 32657100,
                'pop_18' => 23528200,
                'pop_60' => 3649000,
                'pop_12' => 3111400,
                'created_at' => '2022-08-03 23:00:13',
                'updated_at' => '2022-08-03 23:00:13',
            ),
            1 => 
            array (
                'state' => 'Klang Valley',
                'idxs' => 17,
                'pop' => 8417800,
                'pop_18' => 6181800,
                'pop_60' => 827600,
                'pop_12' => 719000,
                'created_at' => '2022-08-03 23:00:13',
                'updated_at' => '2022-08-03 23:00:13',
            ),
            2 => 
            array (
                'state' => 'Johor',
                'idxs' => 1,
                'pop' => 3794200,
                'pop_18' => 2733400,
                'pop_60' => 445600,
                'pop_12' => 353900,
                'created_at' => '2022-08-03 23:00:13',
                'updated_at' => '2022-08-03 23:00:13',
            ),
            3 => 
            array (
                'state' => 'Kedah',
                'idxs' => 2,
                'pop' => 2193600,
                'pop_18' => 1554800,
                'pop_60' => 282300,
                'pop_12' => 209700,
                'created_at' => '2022-08-03 23:00:13',
                'updated_at' => '2022-08-03 23:00:13',
            ),
            4 => 
            array (
                'state' => 'Kelantan',
                'idxs' => 3,
                'pop' => 1928900,
                'pop_18' => 1258700,
                'pop_60' => 202100,
                'pop_12' => 211200,
                'created_at' => '2022-08-03 23:00:13',
                'updated_at' => '2022-08-03 23:00:13',
            ),
            5 => 
            array (
                'state' => 'Melaka',
                'idxs' => 4,
                'pop' => 937800,
                'pop_18' => 683700,
                'pop_60' => 123200,
                'pop_12' => 85600,
                'created_at' => '2022-08-03 23:00:13',
                'updated_at' => '2022-08-03 23:00:13',
            ),
            6 => 
            array (
                'state' => 'Negeri Sembilan',
                'idxs' => 5,
                'pop' => 1128900,
                'pop_18' => 819200,
                'pop_60' => 150300,
                'pop_12' => 105900,
                'created_at' => '2022-08-03 23:00:13',
                'updated_at' => '2022-08-03 23:00:13',
            ),
            7 => 
            array (
                'state' => 'Pahang',
                'idxs' => 6,
                'pop' => 1684700,
                'pop_18' => 1188000,
                'pop_60' => 198100,
                'pop_12' => 172000,
                'created_at' => '2022-08-03 23:00:13',
                'updated_at' => '2022-08-03 23:00:13',
            ),
            8 => 
            array (
                'state' => 'Perak',
                'idxs' => 8,
                'pop' => 2509000,
                'pop_18' => 1878100,
                'pop_60' => 410000,
                'pop_12' => 228000,
                'created_at' => '2022-08-03 23:00:13',
                'updated_at' => '2022-08-03 23:00:13',
            ),
            9 => 
            array (
                'state' => 'Perlis',
                'idxs' => 9,
                'pop' => 255500,
                'pop_18' => 182100,
                'pop_60' => 36300,
                'pop_12' => 23000,
                'created_at' => '2022-08-03 23:00:13',
                'updated_at' => '2022-08-03 23:00:13',
            ),
            10 => 
            array (
                'state' => 'Pulau Pinang',
                'idxs' => 7,
                'pop' => 1774200,
                'pop_18' => 1374300,
                'pop_60' => 247600,
                'pop_12' => 139400,
                'created_at' => '2022-08-03 23:00:13',
                'updated_at' => '2022-08-03 23:00:13',
            ),
            11 => 
            array (
                'state' => 'Sabah',
                'idxs' => 12,
                'pop' => 3832500,
                'pop_18' => 2716600,
                'pop_60' => 249000,
                'pop_12' => 426200,
                'created_at' => '2022-08-03 23:00:13',
                'updated_at' => '2022-08-03 23:00:13',
            ),
            12 => 
            array (
                'state' => 'Sarawak',
                'idxs' => 13,
                'pop' => 2824700,
                'pop_18' => 2066100,
                'pop_60' => 348300,
                'pop_12' => 289200,
                'created_at' => '2022-08-03 23:00:13',
                'updated_at' => '2022-08-03 23:00:13',
            ),
            13 => 
            array (
                'state' => 'Selangor',
                'idxs' => 10,
                'pop' => 6555100,
                'pop_18' => 4776300,
                'pop_60' => 607800,
                'pop_12' => 569200,
                'created_at' => '2022-08-03 23:00:13',
                'updated_at' => '2022-08-03 23:00:13',
            ),
            14 => 
            array (
                'state' => 'Terengganu',
                'idxs' => 11,
                'pop' => 1275200,
                'pop_18' => 822000,
                'pop_60' => 120100,
                'pop_12' => 138000,
                'created_at' => '2022-08-03 23:00:13',
                'updated_at' => '2022-08-03 23:00:13',
            ),
            15 => 
            array (
                'state' => 'W.P. Kuala Lumpur',
                'idxs' => 14,
                'pop' => 1746600,
                'pop_18' => 1332700,
                'pop_60' => 214200,
                'pop_12' => 139200,
                'created_at' => '2022-08-03 23:00:13',
                'updated_at' => '2022-08-03 23:00:13',
            ),
            16 => 
            array (
                'state' => 'W.P. Labuan',
                'idxs' => 15,
                'pop' => 100100,
                'pop_18' => 69400,
                'pop_60' => 8500,
                'pop_12' => 10300,
                'created_at' => '2022-08-03 23:00:13',
                'updated_at' => '2022-08-03 23:00:13',
            ),
            17 => 
            array (
                'state' => 'W.P. Putrajaya',
                'idxs' => 16,
                'pop' => 116100,
                'pop_18' => 72800,
                'pop_60' => 5600,
                'pop_12' => 10600,
                'created_at' => '2022-08-03 23:00:13',
                'updated_at' => '2022-08-03 23:00:13',
            ),
        ));
        
        
    }
}