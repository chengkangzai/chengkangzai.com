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
                'created_at' => '2022-04-23 15:29:35',
                'idxs' => 0,
                'pop' => 32657100,
                'pop_12' => 3111400,
                'pop_18' => 23528200,
                'pop_60' => 3649000,
                'state' => 'Malaysia',
                'updated_at' => '2022-04-23 15:29:35',
            ),
            1 => 
            array (
                'created_at' => '2022-04-23 15:29:35',
                'idxs' => 1,
                'pop' => 3794200,
                'pop_12' => 353900,
                'pop_18' => 2733400,
                'pop_60' => 445600,
                'state' => 'Johor',
                'updated_at' => '2022-04-23 15:29:35',
            ),
            2 => 
            array (
                'created_at' => '2022-04-23 15:29:35',
                'idxs' => 2,
                'pop' => 2193600,
                'pop_12' => 209700,
                'pop_18' => 1554800,
                'pop_60' => 282300,
                'state' => 'Kedah',
                'updated_at' => '2022-04-23 15:29:35',
            ),
            3 => 
            array (
                'created_at' => '2022-04-23 15:29:35',
                'idxs' => 3,
                'pop' => 1928900,
                'pop_12' => 211200,
                'pop_18' => 1258700,
                'pop_60' => 202100,
                'state' => 'Kelantan',
                'updated_at' => '2022-04-23 15:29:35',
            ),
            4 => 
            array (
                'created_at' => '2022-04-23 15:29:35',
                'idxs' => 4,
                'pop' => 937800,
                'pop_12' => 85600,
                'pop_18' => 683700,
                'pop_60' => 123200,
                'state' => 'Melaka',
                'updated_at' => '2022-04-23 15:29:35',
            ),
            5 => 
            array (
                'created_at' => '2022-04-23 15:29:35',
                'idxs' => 5,
                'pop' => 1128900,
                'pop_12' => 105900,
                'pop_18' => 819200,
                'pop_60' => 150300,
                'state' => 'Negeri Sembilan',
                'updated_at' => '2022-04-23 15:29:35',
            ),
            6 => 
            array (
                'created_at' => '2022-04-23 15:29:35',
                'idxs' => 6,
                'pop' => 1684700,
                'pop_12' => 172000,
                'pop_18' => 1188000,
                'pop_60' => 198100,
                'state' => 'Pahang',
                'updated_at' => '2022-04-23 15:29:35',
            ),
            7 => 
            array (
                'created_at' => '2022-04-23 15:29:35',
                'idxs' => 7,
                'pop' => 1774200,
                'pop_12' => 139400,
                'pop_18' => 1374300,
                'pop_60' => 247600,
                'state' => 'Pulau Pinang',
                'updated_at' => '2022-04-23 15:29:35',
            ),
            8 => 
            array (
                'created_at' => '2022-04-23 15:29:35',
                'idxs' => 8,
                'pop' => 2509000,
                'pop_12' => 228000,
                'pop_18' => 1878100,
                'pop_60' => 410000,
                'state' => 'Perak',
                'updated_at' => '2022-04-23 15:29:35',
            ),
            9 => 
            array (
                'created_at' => '2022-04-23 15:29:35',
                'idxs' => 9,
                'pop' => 255500,
                'pop_12' => 23000,
                'pop_18' => 182100,
                'pop_60' => 36300,
                'state' => 'Perlis',
                'updated_at' => '2022-04-23 15:29:35',
            ),
            10 => 
            array (
                'created_at' => '2022-04-23 15:29:35',
                'idxs' => 10,
                'pop' => 6555100,
                'pop_12' => 569200,
                'pop_18' => 4776300,
                'pop_60' => 607800,
                'state' => 'Selangor',
                'updated_at' => '2022-04-23 15:29:35',
            ),
            11 => 
            array (
                'created_at' => '2022-04-23 15:29:35',
                'idxs' => 11,
                'pop' => 1275200,
                'pop_12' => 138000,
                'pop_18' => 822000,
                'pop_60' => 120100,
                'state' => 'Terengganu',
                'updated_at' => '2022-04-23 15:29:35',
            ),
            12 => 
            array (
                'created_at' => '2022-04-23 15:29:35',
                'idxs' => 12,
                'pop' => 3832500,
                'pop_12' => 426200,
                'pop_18' => 2716600,
                'pop_60' => 249000,
                'state' => 'Sabah',
                'updated_at' => '2022-04-23 15:29:35',
            ),
            13 => 
            array (
                'created_at' => '2022-04-23 15:29:35',
                'idxs' => 13,
                'pop' => 2824700,
                'pop_12' => 289200,
                'pop_18' => 2066100,
                'pop_60' => 348300,
                'state' => 'Sarawak',
                'updated_at' => '2022-04-23 15:29:35',
            ),
            14 => 
            array (
                'created_at' => '2022-04-23 15:29:35',
                'idxs' => 14,
                'pop' => 1746600,
                'pop_12' => 139200,
                'pop_18' => 1332700,
                'pop_60' => 214200,
                'state' => 'W.P. Kuala Lumpur',
                'updated_at' => '2022-04-23 15:29:35',
            ),
            15 => 
            array (
                'created_at' => '2022-04-23 15:29:35',
                'idxs' => 15,
                'pop' => 100100,
                'pop_12' => 10300,
                'pop_18' => 69400,
                'pop_60' => 8500,
                'state' => 'W.P. Labuan',
                'updated_at' => '2022-04-23 15:29:35',
            ),
            16 => 
            array (
                'created_at' => '2022-04-23 15:29:35',
                'idxs' => 16,
                'pop' => 116100,
                'pop_12' => 10600,
                'pop_18' => 72800,
                'pop_60' => 5600,
                'state' => 'W.P. Putrajaya',
                'updated_at' => '2022-04-23 15:29:35',
            ),
        ));
        
        
    }
}