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
        
        \DB::table('test_states')->insert(array (
            0 => 
            array (
                'id' => 1,
                'date' => '2021-07-01',
                'state' => 'Johor',
                'rtk_ag' => 2749,
                'pcr' => 3670,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            1 => 
            array (
                'id' => 2,
                'date' => '2021-07-01',
                'state' => 'Kedah',
                'rtk_ag' => 2073,
                'pcr' => 1297,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            2 => 
            array (
                'id' => 3,
                'date' => '2021-07-01',
                'state' => 'Kelantan',
                'rtk_ag' => 1348,
                'pcr' => 1966,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            3 => 
            array (
                'id' => 4,
                'date' => '2021-07-01',
                'state' => 'Melaka',
                'rtk_ag' => 1049,
                'pcr' => 2132,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            4 => 
            array (
                'id' => 5,
                'date' => '2021-07-01',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2151,
                'pcr' => 3306,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            5 => 
            array (
                'id' => 6,
                'date' => '2021-07-01',
                'state' => 'Pahang',
                'rtk_ag' => 2103,
                'pcr' => 2605,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            6 => 
            array (
                'id' => 7,
                'date' => '2021-07-01',
                'state' => 'Perak',
                'rtk_ag' => 1235,
                'pcr' => 3715,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            7 => 
            array (
                'id' => 8,
                'date' => '2021-07-01',
                'state' => 'Perlis',
                'rtk_ag' => 105,
                'pcr' => 16,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            8 => 
            array (
                'id' => 9,
                'date' => '2021-07-01',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 4632,
                'pcr' => 1528,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            9 => 
            array (
                'id' => 10,
                'date' => '2021-07-01',
                'state' => 'Sabah',
                'rtk_ag' => 3212,
                'pcr' => 3465,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            10 => 
            array (
                'id' => 11,
                'date' => '2021-07-01',
                'state' => 'Sarawak',
                'rtk_ag' => 2043,
                'pcr' => 5479,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            11 => 
            array (
                'id' => 12,
                'date' => '2021-07-01',
                'state' => 'Selangor',
                'rtk_ag' => 13805,
                'pcr' => 16460,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            12 => 
            array (
                'id' => 13,
                'date' => '2021-07-01',
                'state' => 'Terengganu',
                'rtk_ag' => 970,
                'pcr' => 1397,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            13 => 
            array (
                'id' => 14,
                'date' => '2021-07-01',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 3713,
                'pcr' => 7182,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            14 => 
            array (
                'id' => 15,
                'date' => '2021-07-01',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 1913,
                'pcr' => 268,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            15 => 
            array (
                'id' => 16,
                'date' => '2021-07-01',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 118,
                'pcr' => 325,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            16 => 
            array (
                'id' => 17,
                'date' => '2021-07-02',
                'state' => 'Johor',
                'rtk_ag' => 2455,
                'pcr' => 4428,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            17 => 
            array (
                'id' => 18,
                'date' => '2021-07-02',
                'state' => 'Kedah',
                'rtk_ag' => 1571,
                'pcr' => 1212,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            18 => 
            array (
                'id' => 19,
                'date' => '2021-07-02',
                'state' => 'Kelantan',
                'rtk_ag' => 436,
                'pcr' => 2343,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            19 => 
            array (
                'id' => 20,
                'date' => '2021-07-02',
                'state' => 'Melaka',
                'rtk_ag' => 1249,
                'pcr' => 2691,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            20 => 
            array (
                'id' => 21,
                'date' => '2021-07-02',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2151,
                'pcr' => 5485,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            21 => 
            array (
                'id' => 22,
                'date' => '2021-07-02',
                'state' => 'Pahang',
                'rtk_ag' => 1945,
                'pcr' => 2861,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            22 => 
            array (
                'id' => 23,
                'date' => '2021-07-02',
                'state' => 'Perak',
                'rtk_ag' => 1658,
                'pcr' => 2028,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            23 => 
            array (
                'id' => 24,
                'date' => '2021-07-02',
                'state' => 'Perlis',
                'rtk_ag' => 60,
                'pcr' => 48,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            24 => 
            array (
                'id' => 25,
                'date' => '2021-07-02',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 4286,
                'pcr' => 1368,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            25 => 
            array (
                'id' => 26,
                'date' => '2021-07-02',
                'state' => 'Sabah',
                'rtk_ag' => 3273,
                'pcr' => 3290,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            26 => 
            array (
                'id' => 27,
                'date' => '2021-07-02',
                'state' => 'Sarawak',
                'rtk_ag' => 1689,
                'pcr' => 6441,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            27 => 
            array (
                'id' => 28,
                'date' => '2021-07-02',
                'state' => 'Selangor',
                'rtk_ag' => 14198,
                'pcr' => 15277,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            28 => 
            array (
                'id' => 29,
                'date' => '2021-07-02',
                'state' => 'Terengganu',
                'rtk_ag' => 506,
                'pcr' => 1307,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            29 => 
            array (
                'id' => 30,
                'date' => '2021-07-02',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 3823,
                'pcr' => 6160,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            30 => 
            array (
                'id' => 31,
                'date' => '2021-07-02',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 1351,
                'pcr' => 377,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            31 => 
            array (
                'id' => 32,
                'date' => '2021-07-02',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 209,
                'pcr' => 326,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            32 => 
            array (
                'id' => 33,
                'date' => '2021-07-03',
                'state' => 'Johor',
                'rtk_ag' => 1810,
                'pcr' => 3484,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            33 => 
            array (
                'id' => 34,
                'date' => '2021-07-03',
                'state' => 'Kedah',
                'rtk_ag' => 1550,
                'pcr' => 1386,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            34 => 
            array (
                'id' => 35,
                'date' => '2021-07-03',
                'state' => 'Kelantan',
                'rtk_ag' => 654,
                'pcr' => 825,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            35 => 
            array (
                'id' => 36,
                'date' => '2021-07-03',
                'state' => 'Melaka',
                'rtk_ag' => 718,
                'pcr' => 2603,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            36 => 
            array (
                'id' => 37,
                'date' => '2021-07-03',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 1538,
                'pcr' => 3352,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            37 => 
            array (
                'id' => 38,
                'date' => '2021-07-03',
                'state' => 'Pahang',
                'rtk_ag' => 1576,
                'pcr' => 2418,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            38 => 
            array (
                'id' => 39,
                'date' => '2021-07-03',
                'state' => 'Perak',
                'rtk_ag' => 897,
                'pcr' => 2244,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            39 => 
            array (
                'id' => 40,
                'date' => '2021-07-03',
                'state' => 'Perlis',
                'rtk_ag' => 59,
                'pcr' => 43,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            40 => 
            array (
                'id' => 41,
                'date' => '2021-07-03',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 4070,
                'pcr' => 1718,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            41 => 
            array (
                'id' => 42,
                'date' => '2021-07-03',
                'state' => 'Sabah',
                'rtk_ag' => 2519,
                'pcr' => 3623,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            42 => 
            array (
                'id' => 43,
                'date' => '2021-07-03',
                'state' => 'Sarawak',
                'rtk_ag' => 1132,
                'pcr' => 5259,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            43 => 
            array (
                'id' => 44,
                'date' => '2021-07-03',
                'state' => 'Selangor',
                'rtk_ag' => 10427,
                'pcr' => 17848,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            44 => 
            array (
                'id' => 45,
                'date' => '2021-07-03',
                'state' => 'Terengganu',
                'rtk_ag' => 703,
                'pcr' => 643,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            45 => 
            array (
                'id' => 46,
                'date' => '2021-07-03',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 2365,
                'pcr' => 9017,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            46 => 
            array (
                'id' => 47,
                'date' => '2021-07-03',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 745,
                'pcr' => 234,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            47 => 
            array (
                'id' => 48,
                'date' => '2021-07-03',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 54,
                'pcr' => 326,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            48 => 
            array (
                'id' => 49,
                'date' => '2021-07-04',
                'state' => 'Johor',
                'rtk_ag' => 2847,
                'pcr' => 2467,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            49 => 
            array (
                'id' => 50,
                'date' => '2021-07-04',
                'state' => 'Kedah',
                'rtk_ag' => 2045,
                'pcr' => 1120,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            50 => 
            array (
                'id' => 51,
                'date' => '2021-07-04',
                'state' => 'Kelantan',
                'rtk_ag' => 1261,
                'pcr' => 1477,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            51 => 
            array (
                'id' => 52,
                'date' => '2021-07-04',
                'state' => 'Melaka',
                'rtk_ag' => 701,
                'pcr' => 2418,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            52 => 
            array (
                'id' => 53,
                'date' => '2021-07-04',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 960,
                'pcr' => 2835,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            53 => 
            array (
                'id' => 54,
                'date' => '2021-07-04',
                'state' => 'Pahang',
                'rtk_ag' => 830,
                'pcr' => 2127,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            54 => 
            array (
                'id' => 55,
                'date' => '2021-07-04',
                'state' => 'Perak',
                'rtk_ag' => 940,
                'pcr' => 1207,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            55 => 
            array (
                'id' => 56,
                'date' => '2021-07-04',
                'state' => 'Perlis',
                'rtk_ag' => 28,
                'pcr' => 14,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            56 => 
            array (
                'id' => 57,
                'date' => '2021-07-04',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 1586,
                'pcr' => 957,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            57 => 
            array (
                'id' => 58,
                'date' => '2021-07-04',
                'state' => 'Sabah',
                'rtk_ag' => 1842,
                'pcr' => 2881,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            58 => 
            array (
                'id' => 59,
                'date' => '2021-07-04',
                'state' => 'Sarawak',
                'rtk_ag' => 1414,
                'pcr' => 5487,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            59 => 
            array (
                'id' => 60,
                'date' => '2021-07-04',
                'state' => 'Selangor',
                'rtk_ag' => 7472,
                'pcr' => 13740,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            60 => 
            array (
                'id' => 61,
                'date' => '2021-07-04',
                'state' => 'Terengganu',
                'rtk_ag' => 1223,
                'pcr' => 592,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            61 => 
            array (
                'id' => 62,
                'date' => '2021-07-04',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 1718,
                'pcr' => 4945,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            62 => 
            array (
                'id' => 63,
                'date' => '2021-07-04',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 1137,
                'pcr' => 240,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            63 => 
            array (
                'id' => 64,
                'date' => '2021-07-04',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 60,
                'pcr' => 150,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            64 => 
            array (
                'id' => 65,
                'date' => '2021-07-05',
                'state' => 'Johor',
                'rtk_ag' => 3428,
                'pcr' => 3437,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            65 => 
            array (
                'id' => 66,
                'date' => '2021-07-05',
                'state' => 'Kedah',
                'rtk_ag' => 2376,
                'pcr' => 1405,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            66 => 
            array (
                'id' => 67,
                'date' => '2021-07-05',
                'state' => 'Kelantan',
                'rtk_ag' => 1241,
                'pcr' => 2398,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            67 => 
            array (
                'id' => 68,
                'date' => '2021-07-05',
                'state' => 'Melaka',
                'rtk_ag' => 1018,
                'pcr' => 1324,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            68 => 
            array (
                'id' => 69,
                'date' => '2021-07-05',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2609,
                'pcr' => 2718,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            69 => 
            array (
                'id' => 70,
                'date' => '2021-07-05',
                'state' => 'Pahang',
                'rtk_ag' => 1971,
                'pcr' => 2277,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            70 => 
            array (
                'id' => 71,
                'date' => '2021-07-05',
                'state' => 'Perak',
                'rtk_ag' => 1729,
                'pcr' => 1075,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            71 => 
            array (
                'id' => 72,
                'date' => '2021-07-05',
                'state' => 'Perlis',
                'rtk_ag' => 155,
                'pcr' => 26,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            72 => 
            array (
                'id' => 73,
                'date' => '2021-07-05',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 4099,
                'pcr' => 925,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            73 => 
            array (
                'id' => 74,
                'date' => '2021-07-05',
                'state' => 'Sabah',
                'rtk_ag' => 2926,
                'pcr' => 2813,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            74 => 
            array (
                'id' => 75,
                'date' => '2021-07-05',
                'state' => 'Sarawak',
                'rtk_ag' => 2731,
                'pcr' => 4138,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            75 => 
            array (
                'id' => 76,
                'date' => '2021-07-05',
                'state' => 'Selangor',
                'rtk_ag' => 13111,
                'pcr' => 14189,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            76 => 
            array (
                'id' => 77,
                'date' => '2021-07-05',
                'state' => 'Terengganu',
                'rtk_ag' => 989,
                'pcr' => 566,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            77 => 
            array (
                'id' => 78,
                'date' => '2021-07-05',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4870,
                'pcr' => 4207,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            78 => 
            array (
                'id' => 79,
                'date' => '2021-07-05',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 1447,
                'pcr' => 174,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            79 => 
            array (
                'id' => 80,
                'date' => '2021-07-05',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 241,
                'pcr' => 147,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            80 => 
            array (
                'id' => 81,
                'date' => '2021-07-06',
                'state' => 'Johor',
                'rtk_ag' => 2864,
                'pcr' => 4235,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            81 => 
            array (
                'id' => 82,
                'date' => '2021-07-06',
                'state' => 'Kedah',
                'rtk_ag' => 1755,
                'pcr' => 1147,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            82 => 
            array (
                'id' => 83,
                'date' => '2021-07-06',
                'state' => 'Kelantan',
                'rtk_ag' => 1261,
                'pcr' => 2231,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            83 => 
            array (
                'id' => 84,
                'date' => '2021-07-06',
                'state' => 'Melaka',
                'rtk_ag' => 1105,
                'pcr' => 2462,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            84 => 
            array (
                'id' => 85,
                'date' => '2021-07-06',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2377,
                'pcr' => 3911,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            85 => 
            array (
                'id' => 86,
                'date' => '2021-07-06',
                'state' => 'Pahang',
                'rtk_ag' => 2106,
                'pcr' => 3299,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            86 => 
            array (
                'id' => 87,
                'date' => '2021-07-06',
                'state' => 'Perak',
                'rtk_ag' => 1650,
                'pcr' => 2386,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            87 => 
            array (
                'id' => 88,
                'date' => '2021-07-06',
                'state' => 'Perlis',
                'rtk_ag' => 77,
                'pcr' => 17,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            88 => 
            array (
                'id' => 89,
                'date' => '2021-07-06',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 4274,
                'pcr' => 1480,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            89 => 
            array (
                'id' => 90,
                'date' => '2021-07-06',
                'state' => 'Sabah',
                'rtk_ag' => 3213,
                'pcr' => 3062,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            90 => 
            array (
                'id' => 91,
                'date' => '2021-07-06',
                'state' => 'Sarawak',
                'rtk_ag' => 1361,
                'pcr' => 6216,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            91 => 
            array (
                'id' => 92,
                'date' => '2021-07-06',
                'state' => 'Selangor',
                'rtk_ag' => 12120,
                'pcr' => 13235,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            92 => 
            array (
                'id' => 93,
                'date' => '2021-07-06',
                'state' => 'Terengganu',
                'rtk_ag' => 875,
                'pcr' => 1206,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            93 => 
            array (
                'id' => 94,
                'date' => '2021-07-06',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4179,
                'pcr' => 7516,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            94 => 
            array (
                'id' => 95,
                'date' => '2021-07-06',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 581,
                'pcr' => 233,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            95 => 
            array (
                'id' => 96,
                'date' => '2021-07-06',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 250,
                'pcr' => 320,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            96 => 
            array (
                'id' => 97,
                'date' => '2021-07-07',
                'state' => 'Johor',
                'rtk_ag' => 2539,
                'pcr' => 4197,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            97 => 
            array (
                'id' => 98,
                'date' => '2021-07-07',
                'state' => 'Kedah',
                'rtk_ag' => 2288,
                'pcr' => 2103,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            98 => 
            array (
                'id' => 99,
                'date' => '2021-07-07',
                'state' => 'Kelantan',
                'rtk_ag' => 1134,
                'pcr' => 1917,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            99 => 
            array (
                'id' => 100,
                'date' => '2021-07-07',
                'state' => 'Melaka',
                'rtk_ag' => 1218,
                'pcr' => 2416,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            100 => 
            array (
                'id' => 101,
                'date' => '2021-07-07',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2386,
                'pcr' => 4001,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            101 => 
            array (
                'id' => 102,
                'date' => '2021-07-07',
                'state' => 'Pahang',
                'rtk_ag' => 2137,
                'pcr' => 2833,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            102 => 
            array (
                'id' => 103,
                'date' => '2021-07-07',
                'state' => 'Perak',
                'rtk_ag' => 2527,
                'pcr' => 1845,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            103 => 
            array (
                'id' => 104,
                'date' => '2021-07-07',
                'state' => 'Perlis',
                'rtk_ag' => 104,
                'pcr' => 15,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            104 => 
            array (
                'id' => 105,
                'date' => '2021-07-07',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 4111,
                'pcr' => 1459,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            105 => 
            array (
                'id' => 106,
                'date' => '2021-07-07',
                'state' => 'Sabah',
                'rtk_ag' => 2821,
                'pcr' => 4085,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            106 => 
            array (
                'id' => 107,
                'date' => '2021-07-07',
                'state' => 'Sarawak',
                'rtk_ag' => 1635,
                'pcr' => 5548,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            107 => 
            array (
                'id' => 108,
                'date' => '2021-07-07',
                'state' => 'Selangor',
                'rtk_ag' => 12536,
                'pcr' => 18764,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            108 => 
            array (
                'id' => 109,
                'date' => '2021-07-07',
                'state' => 'Terengganu',
                'rtk_ag' => 1037,
                'pcr' => 923,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            109 => 
            array (
                'id' => 110,
                'date' => '2021-07-07',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5188,
                'pcr' => 9201,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            110 => 
            array (
                'id' => 111,
                'date' => '2021-07-07',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 693,
                'pcr' => 164,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            111 => 
            array (
                'id' => 112,
                'date' => '2021-07-07',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 180,
                'pcr' => 408,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            112 => 
            array (
                'id' => 113,
                'date' => '2021-07-08',
                'state' => 'Johor',
                'rtk_ag' => 2551,
                'pcr' => 3953,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            113 => 
            array (
                'id' => 114,
                'date' => '2021-07-08',
                'state' => 'Kedah',
                'rtk_ag' => 2803,
                'pcr' => 2181,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            114 => 
            array (
                'id' => 115,
                'date' => '2021-07-08',
                'state' => 'Kelantan',
                'rtk_ag' => 1176,
                'pcr' => 2074,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            115 => 
            array (
                'id' => 116,
                'date' => '2021-07-08',
                'state' => 'Melaka',
                'rtk_ag' => 1485,
                'pcr' => 2465,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            116 => 
            array (
                'id' => 117,
                'date' => '2021-07-08',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2844,
                'pcr' => 4642,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            117 => 
            array (
                'id' => 118,
                'date' => '2021-07-08',
                'state' => 'Pahang',
                'rtk_ag' => 1478,
                'pcr' => 2397,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            118 => 
            array (
                'id' => 119,
                'date' => '2021-07-08',
                'state' => 'Perak',
                'rtk_ag' => 1714,
                'pcr' => 1912,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            119 => 
            array (
                'id' => 120,
                'date' => '2021-07-08',
                'state' => 'Perlis',
                'rtk_ag' => 83,
                'pcr' => 51,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            120 => 
            array (
                'id' => 121,
                'date' => '2021-07-08',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 3510,
                'pcr' => 1786,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            121 => 
            array (
                'id' => 122,
                'date' => '2021-07-08',
                'state' => 'Sabah',
                'rtk_ag' => 3108,
                'pcr' => 4614,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            122 => 
            array (
                'id' => 123,
                'date' => '2021-07-08',
                'state' => 'Sarawak',
                'rtk_ag' => 1776,
                'pcr' => 5574,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            123 => 
            array (
                'id' => 124,
                'date' => '2021-07-08',
                'state' => 'Selangor',
                'rtk_ag' => 16973,
                'pcr' => 18530,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            124 => 
            array (
                'id' => 125,
                'date' => '2021-07-08',
                'state' => 'Terengganu',
                'rtk_ag' => 972,
                'pcr' => 1002,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            125 => 
            array (
                'id' => 126,
                'date' => '2021-07-08',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4962,
                'pcr' => 8540,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            126 => 
            array (
                'id' => 127,
                'date' => '2021-07-08',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 662,
                'pcr' => 176,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            127 => 
            array (
                'id' => 128,
                'date' => '2021-07-08',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 251,
                'pcr' => 261,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            128 => 
            array (
                'id' => 129,
                'date' => '2021-07-09',
                'state' => 'Johor',
                'rtk_ag' => 2993,
                'pcr' => 5359,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            129 => 
            array (
                'id' => 130,
                'date' => '2021-07-09',
                'state' => 'Kedah',
                'rtk_ag' => 1931,
                'pcr' => 1467,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            130 => 
            array (
                'id' => 131,
                'date' => '2021-07-09',
                'state' => 'Kelantan',
                'rtk_ag' => 473,
                'pcr' => 1642,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            131 => 
            array (
                'id' => 132,
                'date' => '2021-07-09',
                'state' => 'Melaka',
                'rtk_ag' => 1639,
                'pcr' => 4050,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            132 => 
            array (
                'id' => 133,
                'date' => '2021-07-09',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2046,
                'pcr' => 5721,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            133 => 
            array (
                'id' => 134,
                'date' => '2021-07-09',
                'state' => 'Pahang',
                'rtk_ag' => 2201,
                'pcr' => 2862,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            134 => 
            array (
                'id' => 135,
                'date' => '2021-07-09',
                'state' => 'Perak',
                'rtk_ag' => 1741,
                'pcr' => 2350,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            135 => 
            array (
                'id' => 136,
                'date' => '2021-07-09',
                'state' => 'Perlis',
                'rtk_ag' => 104,
                'pcr' => 28,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            136 => 
            array (
                'id' => 137,
                'date' => '2021-07-09',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 3714,
                'pcr' => 1650,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            137 => 
            array (
                'id' => 138,
                'date' => '2021-07-09',
                'state' => 'Sabah',
                'rtk_ag' => 3012,
                'pcr' => 3474,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            138 => 
            array (
                'id' => 139,
                'date' => '2021-07-09',
                'state' => 'Sarawak',
                'rtk_ag' => 1182,
                'pcr' => 5803,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            139 => 
            array (
                'id' => 140,
                'date' => '2021-07-09',
                'state' => 'Selangor',
                'rtk_ag' => 21468,
                'pcr' => 19914,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            140 => 
            array (
                'id' => 141,
                'date' => '2021-07-09',
                'state' => 'Terengganu',
                'rtk_ag' => 486,
                'pcr' => 1189,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            141 => 
            array (
                'id' => 142,
                'date' => '2021-07-09',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5725,
                'pcr' => 7903,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            142 => 
            array (
                'id' => 143,
                'date' => '2021-07-09',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 1341,
                'pcr' => 314,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            143 => 
            array (
                'id' => 144,
                'date' => '2021-07-09',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 238,
                'pcr' => 351,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            144 => 
            array (
                'id' => 145,
                'date' => '2021-07-10',
                'state' => 'Johor',
                'rtk_ag' => 2177,
                'pcr' => 4402,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            145 => 
            array (
                'id' => 146,
                'date' => '2021-07-10',
                'state' => 'Kedah',
                'rtk_ag' => 1786,
                'pcr' => 1640,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            146 => 
            array (
                'id' => 147,
                'date' => '2021-07-10',
                'state' => 'Kelantan',
                'rtk_ag' => 802,
                'pcr' => 1718,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            147 => 
            array (
                'id' => 148,
                'date' => '2021-07-10',
                'state' => 'Melaka',
                'rtk_ag' => 794,
                'pcr' => 2160,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            148 => 
            array (
                'id' => 149,
                'date' => '2021-07-10',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 1606,
                'pcr' => 4284,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            149 => 
            array (
                'id' => 150,
                'date' => '2021-07-10',
                'state' => 'Pahang',
                'rtk_ag' => 1215,
                'pcr' => 2373,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            150 => 
            array (
                'id' => 151,
                'date' => '2021-07-10',
                'state' => 'Perak',
                'rtk_ag' => 932,
                'pcr' => 2035,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            151 => 
            array (
                'id' => 152,
                'date' => '2021-07-10',
                'state' => 'Perlis',
                'rtk_ag' => 35,
                'pcr' => 27,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            152 => 
            array (
                'id' => 153,
                'date' => '2021-07-10',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 3240,
                'pcr' => 1590,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            153 => 
            array (
                'id' => 154,
                'date' => '2021-07-10',
                'state' => 'Sabah',
                'rtk_ag' => 2488,
                'pcr' => 3284,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            154 => 
            array (
                'id' => 155,
                'date' => '2021-07-10',
                'state' => 'Sarawak',
                'rtk_ag' => 913,
                'pcr' => 5927,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            155 => 
            array (
                'id' => 156,
                'date' => '2021-07-10',
                'state' => 'Selangor',
                'rtk_ag' => 23470,
                'pcr' => 17260,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            156 => 
            array (
                'id' => 157,
                'date' => '2021-07-10',
                'state' => 'Terengganu',
                'rtk_ag' => 1080,
                'pcr' => 1163,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            157 => 
            array (
                'id' => 158,
                'date' => '2021-07-10',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5223,
                'pcr' => 7635,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            158 => 
            array (
                'id' => 159,
                'date' => '2021-07-10',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 1065,
                'pcr' => 137,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            159 => 
            array (
                'id' => 160,
                'date' => '2021-07-10',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 43,
                'pcr' => 327,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            160 => 
            array (
                'id' => 161,
                'date' => '2021-07-11',
                'state' => 'Johor',
                'rtk_ag' => 3101,
                'pcr' => 3398,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            161 => 
            array (
                'id' => 162,
                'date' => '2021-07-11',
                'state' => 'Kedah',
                'rtk_ag' => 2107,
                'pcr' => 1592,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            162 => 
            array (
                'id' => 163,
                'date' => '2021-07-11',
                'state' => 'Kelantan',
                'rtk_ag' => 1288,
                'pcr' => 1831,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            163 => 
            array (
                'id' => 164,
                'date' => '2021-07-11',
                'state' => 'Melaka',
                'rtk_ag' => 787,
                'pcr' => 2067,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            164 => 
            array (
                'id' => 165,
                'date' => '2021-07-11',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 1441,
                'pcr' => 5291,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            165 => 
            array (
                'id' => 166,
                'date' => '2021-07-11',
                'state' => 'Pahang',
                'rtk_ag' => 943,
                'pcr' => 3704,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            166 => 
            array (
                'id' => 167,
                'date' => '2021-07-11',
                'state' => 'Perak',
                'rtk_ag' => 869,
                'pcr' => 1621,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            167 => 
            array (
                'id' => 168,
                'date' => '2021-07-11',
                'state' => 'Perlis',
                'rtk_ag' => 60,
                'pcr' => 13,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            168 => 
            array (
                'id' => 169,
                'date' => '2021-07-11',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 1859,
                'pcr' => 1457,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            169 => 
            array (
                'id' => 170,
                'date' => '2021-07-11',
                'state' => 'Sabah',
                'rtk_ag' => 2639,
                'pcr' => 3572,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            170 => 
            array (
                'id' => 171,
                'date' => '2021-07-11',
                'state' => 'Sarawak',
                'rtk_ag' => 1023,
                'pcr' => 4273,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            171 => 
            array (
                'id' => 172,
                'date' => '2021-07-11',
                'state' => 'Selangor',
                'rtk_ag' => 18177,
                'pcr' => 17406,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            172 => 
            array (
                'id' => 173,
                'date' => '2021-07-11',
                'state' => 'Terengganu',
                'rtk_ag' => 1332,
                'pcr' => 1660,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            173 => 
            array (
                'id' => 174,
                'date' => '2021-07-11',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 3463,
                'pcr' => 6758,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            174 => 
            array (
                'id' => 175,
                'date' => '2021-07-11',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 713,
                'pcr' => 197,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            175 => 
            array (
                'id' => 176,
                'date' => '2021-07-11',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 84,
                'pcr' => 423,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            176 => 
            array (
                'id' => 177,
                'date' => '2021-07-12',
                'state' => 'Johor',
                'rtk_ag' => 4266,
                'pcr' => 4710,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            177 => 
            array (
                'id' => 178,
                'date' => '2021-07-12',
                'state' => 'Kedah',
                'rtk_ag' => 3034,
                'pcr' => 1670,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            178 => 
            array (
                'id' => 179,
                'date' => '2021-07-12',
                'state' => 'Kelantan',
                'rtk_ag' => 1269,
                'pcr' => 2634,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            179 => 
            array (
                'id' => 180,
                'date' => '2021-07-12',
                'state' => 'Melaka',
                'rtk_ag' => 1838,
                'pcr' => 3474,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            180 => 
            array (
                'id' => 181,
                'date' => '2021-07-12',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2538,
                'pcr' => 2763,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            181 => 
            array (
                'id' => 182,
                'date' => '2021-07-12',
                'state' => 'Pahang',
                'rtk_ag' => 3559,
                'pcr' => 4739,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            182 => 
            array (
                'id' => 183,
                'date' => '2021-07-12',
                'state' => 'Perak',
                'rtk_ag' => 2437,
                'pcr' => 1986,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            183 => 
            array (
                'id' => 184,
                'date' => '2021-07-12',
                'state' => 'Perlis',
                'rtk_ag' => 129,
                'pcr' => 14,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            184 => 
            array (
                'id' => 185,
                'date' => '2021-07-12',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 4283,
                'pcr' => 1496,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            185 => 
            array (
                'id' => 186,
                'date' => '2021-07-12',
                'state' => 'Sabah',
                'rtk_ag' => 4038,
                'pcr' => 3467,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            186 => 
            array (
                'id' => 187,
                'date' => '2021-07-12',
                'state' => 'Sarawak',
                'rtk_ag' => 1804,
                'pcr' => 5779,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            187 => 
            array (
                'id' => 188,
                'date' => '2021-07-12',
                'state' => 'Selangor',
                'rtk_ag' => 30965,
                'pcr' => 14178,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            188 => 
            array (
                'id' => 189,
                'date' => '2021-07-12',
                'state' => 'Terengganu',
                'rtk_ag' => 1294,
                'pcr' => 1616,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            189 => 
            array (
                'id' => 190,
                'date' => '2021-07-12',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 798,
                'pcr' => 6292,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            190 => 
            array (
                'id' => 191,
                'date' => '2021-07-12',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 910,
                'pcr' => 136,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            191 => 
            array (
                'id' => 192,
                'date' => '2021-07-12',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 195,
                'pcr' => 366,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            192 => 
            array (
                'id' => 193,
                'date' => '2021-07-13',
                'state' => 'Johor',
                'rtk_ag' => 5440,
                'pcr' => 4425,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            193 => 
            array (
                'id' => 194,
                'date' => '2021-07-13',
                'state' => 'Kedah',
                'rtk_ag' => 3237,
                'pcr' => 2403,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            194 => 
            array (
                'id' => 195,
                'date' => '2021-07-13',
                'state' => 'Kelantan',
                'rtk_ag' => 1222,
                'pcr' => 2128,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            195 => 
            array (
                'id' => 196,
                'date' => '2021-07-13',
                'state' => 'Melaka',
                'rtk_ag' => 1890,
                'pcr' => 2752,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            196 => 
            array (
                'id' => 197,
                'date' => '2021-07-13',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2350,
                'pcr' => 4669,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            197 => 
            array (
                'id' => 198,
                'date' => '2021-07-13',
                'state' => 'Pahang',
                'rtk_ag' => 4025,
                'pcr' => 3363,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            198 => 
            array (
                'id' => 199,
                'date' => '2021-07-13',
                'state' => 'Perak',
                'rtk_ag' => 2096,
                'pcr' => 2335,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            199 => 
            array (
                'id' => 200,
                'date' => '2021-07-13',
                'state' => 'Perlis',
                'rtk_ag' => 83,
                'pcr' => 43,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            200 => 
            array (
                'id' => 201,
                'date' => '2021-07-13',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 3272,
                'pcr' => 3209,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            201 => 
            array (
                'id' => 202,
                'date' => '2021-07-13',
                'state' => 'Sabah',
                'rtk_ag' => 3167,
                'pcr' => 4216,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            202 => 
            array (
                'id' => 203,
                'date' => '2021-07-13',
                'state' => 'Sarawak',
                'rtk_ag' => 1225,
                'pcr' => 7430,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            203 => 
            array (
                'id' => 204,
                'date' => '2021-07-13',
                'state' => 'Selangor',
                'rtk_ag' => 35422,
                'pcr' => 17922,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            204 => 
            array (
                'id' => 205,
                'date' => '2021-07-13',
                'state' => 'Terengganu',
                'rtk_ag' => 976,
                'pcr' => 1666,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            205 => 
            array (
                'id' => 206,
                'date' => '2021-07-13',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 6444,
                'pcr' => 9443,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            206 => 
            array (
                'id' => 207,
                'date' => '2021-07-13',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 549,
                'pcr' => 240,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            207 => 
            array (
                'id' => 208,
                'date' => '2021-07-13',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 260,
                'pcr' => 462,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            208 => 
            array (
                'id' => 209,
                'date' => '2021-07-14',
                'state' => 'Johor',
                'rtk_ag' => 6691,
                'pcr' => 4914,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            209 => 
            array (
                'id' => 210,
                'date' => '2021-07-14',
                'state' => 'Kedah',
                'rtk_ag' => 2615,
                'pcr' => 2711,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            210 => 
            array (
                'id' => 211,
                'date' => '2021-07-14',
                'state' => 'Kelantan',
                'rtk_ag' => 2078,
                'pcr' => 2325,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            211 => 
            array (
                'id' => 212,
                'date' => '2021-07-14',
                'state' => 'Melaka',
                'rtk_ag' => 1813,
                'pcr' => 3380,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            212 => 
            array (
                'id' => 213,
                'date' => '2021-07-14',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3270,
                'pcr' => 7137,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            213 => 
            array (
                'id' => 214,
                'date' => '2021-07-14',
                'state' => 'Pahang',
                'rtk_ag' => 1788,
                'pcr' => 2727,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            214 => 
            array (
                'id' => 215,
                'date' => '2021-07-14',
                'state' => 'Perak',
                'rtk_ag' => 2053,
                'pcr' => 2832,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            215 => 
            array (
                'id' => 216,
                'date' => '2021-07-14',
                'state' => 'Perlis',
                'rtk_ag' => 130,
                'pcr' => 56,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            216 => 
            array (
                'id' => 217,
                'date' => '2021-07-14',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 4525,
                'pcr' => 2350,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            217 => 
            array (
                'id' => 218,
                'date' => '2021-07-14',
                'state' => 'Sabah',
                'rtk_ag' => 3090,
                'pcr' => 3842,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            218 => 
            array (
                'id' => 219,
                'date' => '2021-07-14',
                'state' => 'Sarawak',
                'rtk_ag' => 1895,
                'pcr' => 5822,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            219 => 
            array (
                'id' => 220,
                'date' => '2021-07-14',
                'state' => 'Selangor',
                'rtk_ag' => 32711,
                'pcr' => 20174,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            220 => 
            array (
                'id' => 221,
                'date' => '2021-07-14',
                'state' => 'Terengganu',
                'rtk_ag' => 1199,
                'pcr' => 1381,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            221 => 
            array (
                'id' => 222,
                'date' => '2021-07-14',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 6762,
                'pcr' => 9616,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            222 => 
            array (
                'id' => 223,
                'date' => '2021-07-14',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 650,
                'pcr' => 145,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            223 => 
            array (
                'id' => 224,
                'date' => '2021-07-14',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 305,
                'pcr' => 657,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            224 => 
            array (
                'id' => 225,
                'date' => '2021-07-15',
                'state' => 'Johor',
                'rtk_ag' => 8222,
                'pcr' => 4906,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            225 => 
            array (
                'id' => 226,
                'date' => '2021-07-15',
                'state' => 'Kedah',
                'rtk_ag' => 2541,
                'pcr' => 2369,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            226 => 
            array (
                'id' => 227,
                'date' => '2021-07-15',
                'state' => 'Kelantan',
                'rtk_ag' => 2231,
                'pcr' => 2305,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            227 => 
            array (
                'id' => 228,
                'date' => '2021-07-15',
                'state' => 'Melaka',
                'rtk_ag' => 1861,
                'pcr' => 5157,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            228 => 
            array (
                'id' => 229,
                'date' => '2021-07-15',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3078,
                'pcr' => 5556,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            229 => 
            array (
                'id' => 230,
                'date' => '2021-07-15',
                'state' => 'Pahang',
                'rtk_ag' => 2107,
                'pcr' => 2908,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            230 => 
            array (
                'id' => 231,
                'date' => '2021-07-15',
                'state' => 'Perak',
                'rtk_ag' => 2114,
                'pcr' => 3549,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            231 => 
            array (
                'id' => 232,
                'date' => '2021-07-15',
                'state' => 'Perlis',
                'rtk_ag' => 138,
                'pcr' => 45,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            232 => 
            array (
                'id' => 233,
                'date' => '2021-07-15',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 4269,
                'pcr' => 2444,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            233 => 
            array (
                'id' => 234,
                'date' => '2021-07-15',
                'state' => 'Sabah',
                'rtk_ag' => 3767,
                'pcr' => 4168,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            234 => 
            array (
                'id' => 235,
                'date' => '2021-07-15',
                'state' => 'Sarawak',
                'rtk_ag' => 1237,
                'pcr' => 6188,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            235 => 
            array (
                'id' => 236,
                'date' => '2021-07-15',
                'state' => 'Selangor',
                'rtk_ag' => 35710,
                'pcr' => 20791,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            236 => 
            array (
                'id' => 237,
                'date' => '2021-07-15',
                'state' => 'Terengganu',
                'rtk_ag' => 1423,
                'pcr' => 1879,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            237 => 
            array (
                'id' => 238,
                'date' => '2021-07-15',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 8109,
                'pcr' => 11426,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            238 => 
            array (
                'id' => 239,
                'date' => '2021-07-15',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 645,
                'pcr' => 434,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            239 => 
            array (
                'id' => 240,
                'date' => '2021-07-15',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 249,
                'pcr' => 130,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            240 => 
            array (
                'id' => 241,
                'date' => '2021-07-16',
                'state' => 'Johor',
                'rtk_ag' => 5341,
                'pcr' => 6175,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            241 => 
            array (
                'id' => 242,
                'date' => '2021-07-16',
                'state' => 'Kedah',
                'rtk_ag' => 2223,
                'pcr' => 2785,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            242 => 
            array (
                'id' => 243,
                'date' => '2021-07-16',
                'state' => 'Kelantan',
                'rtk_ag' => 617,
                'pcr' => 2250,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            243 => 
            array (
                'id' => 244,
                'date' => '2021-07-16',
                'state' => 'Melaka',
                'rtk_ag' => 1914,
                'pcr' => 5059,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            244 => 
            array (
                'id' => 245,
                'date' => '2021-07-16',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3764,
                'pcr' => 5279,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            245 => 
            array (
                'id' => 246,
                'date' => '2021-07-16',
                'state' => 'Pahang',
                'rtk_ag' => 3328,
                'pcr' => 4097,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            246 => 
            array (
                'id' => 247,
                'date' => '2021-07-16',
                'state' => 'Perak',
                'rtk_ag' => 2354,
                'pcr' => 2976,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            247 => 
            array (
                'id' => 248,
                'date' => '2021-07-16',
                'state' => 'Perlis',
                'rtk_ag' => 91,
                'pcr' => 29,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            248 => 
            array (
                'id' => 249,
                'date' => '2021-07-16',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 4399,
                'pcr' => 2879,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            249 => 
            array (
                'id' => 250,
                'date' => '2021-07-16',
                'state' => 'Sabah',
                'rtk_ag' => 3073,
                'pcr' => 4269,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            250 => 
            array (
                'id' => 251,
                'date' => '2021-07-16',
                'state' => 'Sarawak',
                'rtk_ag' => 1524,
                'pcr' => 7361,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            251 => 
            array (
                'id' => 252,
                'date' => '2021-07-16',
                'state' => 'Selangor',
                'rtk_ag' => 29831,
                'pcr' => 19974,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            252 => 
            array (
                'id' => 253,
                'date' => '2021-07-16',
                'state' => 'Terengganu',
                'rtk_ag' => 879,
                'pcr' => 2215,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            253 => 
            array (
                'id' => 254,
                'date' => '2021-07-16',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 8451,
                'pcr' => 9141,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            254 => 
            array (
                'id' => 255,
                'date' => '2021-07-16',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 645,
                'pcr' => 92,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            255 => 
            array (
                'id' => 256,
                'date' => '2021-07-16',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 225,
                'pcr' => 509,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            256 => 
            array (
                'id' => 257,
                'date' => '2021-07-17',
                'state' => 'Johor',
                'rtk_ag' => 5267,
                'pcr' => 5424,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            257 => 
            array (
                'id' => 258,
                'date' => '2021-07-17',
                'state' => 'Kedah',
                'rtk_ag' => 2715,
                'pcr' => 2158,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            258 => 
            array (
                'id' => 259,
                'date' => '2021-07-17',
                'state' => 'Kelantan',
                'rtk_ag' => 896,
                'pcr' => 2841,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            259 => 
            array (
                'id' => 260,
                'date' => '2021-07-17',
                'state' => 'Melaka',
                'rtk_ag' => 1343,
                'pcr' => 3091,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            260 => 
            array (
                'id' => 261,
                'date' => '2021-07-17',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2414,
                'pcr' => 5058,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            261 => 
            array (
                'id' => 262,
                'date' => '2021-07-17',
                'state' => 'Pahang',
                'rtk_ag' => 2209,
                'pcr' => 3239,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            262 => 
            array (
                'id' => 263,
                'date' => '2021-07-17',
                'state' => 'Perak',
                'rtk_ag' => 2362,
                'pcr' => 2290,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            263 => 
            array (
                'id' => 264,
                'date' => '2021-07-17',
                'state' => 'Perlis',
                'rtk_ag' => 44,
                'pcr' => 58,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            264 => 
            array (
                'id' => 265,
                'date' => '2021-07-17',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 4257,
                'pcr' => 2985,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            265 => 
            array (
                'id' => 266,
                'date' => '2021-07-17',
                'state' => 'Sabah',
                'rtk_ag' => 3091,
                'pcr' => 4916,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            266 => 
            array (
                'id' => 267,
                'date' => '2021-07-17',
                'state' => 'Sarawak',
                'rtk_ag' => 2002,
                'pcr' => 6023,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            267 => 
            array (
                'id' => 268,
                'date' => '2021-07-17',
                'state' => 'Selangor',
                'rtk_ag' => 24264,
                'pcr' => 22032,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            268 => 
            array (
                'id' => 269,
                'date' => '2021-07-17',
                'state' => 'Terengganu',
                'rtk_ag' => 1414,
                'pcr' => 1960,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            269 => 
            array (
                'id' => 270,
                'date' => '2021-07-17',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 6280,
                'pcr' => 13078,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            270 => 
            array (
                'id' => 271,
                'date' => '2021-07-17',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 940,
                'pcr' => 145,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            271 => 
            array (
                'id' => 272,
                'date' => '2021-07-17',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 104,
                'pcr' => 391,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            272 => 
            array (
                'id' => 273,
                'date' => '2021-07-18',
                'state' => 'Johor',
                'rtk_ag' => 3591,
                'pcr' => 4435,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            273 => 
            array (
                'id' => 274,
                'date' => '2021-07-18',
                'state' => 'Kedah',
                'rtk_ag' => 3201,
                'pcr' => 1669,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            274 => 
            array (
                'id' => 275,
                'date' => '2021-07-18',
                'state' => 'Kelantan',
                'rtk_ag' => 1857,
                'pcr' => 2531,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            275 => 
            array (
                'id' => 276,
                'date' => '2021-07-18',
                'state' => 'Melaka',
                'rtk_ag' => 903,
                'pcr' => 3672,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            276 => 
            array (
                'id' => 277,
                'date' => '2021-07-18',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 1614,
                'pcr' => 4637,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            277 => 
            array (
                'id' => 278,
                'date' => '2021-07-18',
                'state' => 'Pahang',
                'rtk_ag' => 1981,
                'pcr' => 2739,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            278 => 
            array (
                'id' => 279,
                'date' => '2021-07-18',
                'state' => 'Perak',
                'rtk_ag' => 1250,
                'pcr' => 2209,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            279 => 
            array (
                'id' => 280,
                'date' => '2021-07-18',
                'state' => 'Perlis',
                'rtk_ag' => 70,
                'pcr' => 24,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            280 => 
            array (
                'id' => 281,
                'date' => '2021-07-18',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 3968,
                'pcr' => 2762,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            281 => 
            array (
                'id' => 282,
                'date' => '2021-07-18',
                'state' => 'Sabah',
                'rtk_ag' => 2695,
                'pcr' => 4294,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            282 => 
            array (
                'id' => 283,
                'date' => '2021-07-18',
                'state' => 'Sarawak',
                'rtk_ag' => 1090,
                'pcr' => 6229,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            283 => 
            array (
                'id' => 284,
                'date' => '2021-07-18',
                'state' => 'Selangor',
                'rtk_ag' => 22031,
                'pcr' => 14924,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            284 => 
            array (
                'id' => 285,
                'date' => '2021-07-18',
                'state' => 'Terengganu',
                'rtk_ag' => 1356,
                'pcr' => 998,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            285 => 
            array (
                'id' => 286,
                'date' => '2021-07-18',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 3985,
                'pcr' => 7774,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            286 => 
            array (
                'id' => 287,
                'date' => '2021-07-18',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 572,
                'pcr' => 260,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            287 => 
            array (
                'id' => 288,
                'date' => '2021-07-18',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 78,
                'pcr' => 612,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            288 => 
            array (
                'id' => 289,
                'date' => '2021-07-19',
                'state' => 'Johor',
                'rtk_ag' => 4797,
                'pcr' => 4324,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            289 => 
            array (
                'id' => 290,
                'date' => '2021-07-19',
                'state' => 'Kedah',
                'rtk_ag' => 3283,
                'pcr' => 3699,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            290 => 
            array (
                'id' => 291,
                'date' => '2021-07-19',
                'state' => 'Kelantan',
                'rtk_ag' => 1504,
                'pcr' => 3001,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            291 => 
            array (
                'id' => 292,
                'date' => '2021-07-19',
                'state' => 'Melaka',
                'rtk_ag' => 1719,
                'pcr' => 1902,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            292 => 
            array (
                'id' => 293,
                'date' => '2021-07-19',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2977,
                'pcr' => 3832,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            293 => 
            array (
                'id' => 294,
                'date' => '2021-07-19',
                'state' => 'Pahang',
                'rtk_ag' => 2717,
                'pcr' => 3950,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            294 => 
            array (
                'id' => 295,
                'date' => '2021-07-19',
                'state' => 'Perak',
                'rtk_ag' => 2803,
                'pcr' => 2274,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            295 => 
            array (
                'id' => 296,
                'date' => '2021-07-19',
                'state' => 'Perlis',
                'rtk_ag' => 138,
                'pcr' => 17,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            296 => 
            array (
                'id' => 297,
                'date' => '2021-07-19',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 5014,
                'pcr' => 1140,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            297 => 
            array (
                'id' => 298,
                'date' => '2021-07-19',
                'state' => 'Sabah',
                'rtk_ag' => 3865,
                'pcr' => 3014,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            298 => 
            array (
                'id' => 299,
                'date' => '2021-07-19',
                'state' => 'Sarawak',
                'rtk_ag' => 1990,
                'pcr' => 6816,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            299 => 
            array (
                'id' => 300,
                'date' => '2021-07-19',
                'state' => 'Selangor',
                'rtk_ag' => 33042,
                'pcr' => 15546,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            300 => 
            array (
                'id' => 301,
                'date' => '2021-07-19',
                'state' => 'Terengganu',
                'rtk_ag' => 1000,
                'pcr' => 3420,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            301 => 
            array (
                'id' => 302,
                'date' => '2021-07-19',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 7632,
                'pcr' => 7007,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            302 => 
            array (
                'id' => 303,
                'date' => '2021-07-19',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 620,
                'pcr' => 92,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            303 => 
            array (
                'id' => 304,
                'date' => '2021-07-19',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 168,
                'pcr' => 642,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            304 => 
            array (
                'id' => 305,
                'date' => '2021-07-20',
                'state' => 'Johor',
                'rtk_ag' => 1675,
                'pcr' => 4122,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            305 => 
            array (
                'id' => 306,
                'date' => '2021-07-20',
                'state' => 'Kedah',
                'rtk_ag' => 1740,
                'pcr' => 2136,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            306 => 
            array (
                'id' => 307,
                'date' => '2021-07-20',
                'state' => 'Kelantan',
                'rtk_ag' => 472,
                'pcr' => 2096,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            307 => 
            array (
                'id' => 308,
                'date' => '2021-07-20',
                'state' => 'Melaka',
                'rtk_ag' => 839,
                'pcr' => 2448,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            308 => 
            array (
                'id' => 309,
                'date' => '2021-07-20',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 1848,
                'pcr' => 3946,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            309 => 
            array (
                'id' => 310,
                'date' => '2021-07-20',
                'state' => 'Pahang',
                'rtk_ag' => 1095,
                'pcr' => 3671,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            310 => 
            array (
                'id' => 311,
                'date' => '2021-07-20',
                'state' => 'Perak',
                'rtk_ag' => 1969,
                'pcr' => 2060,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            311 => 
            array (
                'id' => 312,
                'date' => '2021-07-20',
                'state' => 'Perlis',
                'rtk_ag' => 11,
                'pcr' => 32,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            312 => 
            array (
                'id' => 313,
                'date' => '2021-07-20',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 2096,
                'pcr' => 2388,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            313 => 
            array (
                'id' => 314,
                'date' => '2021-07-20',
                'state' => 'Sabah',
                'rtk_ag' => 1921,
                'pcr' => 3534,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            314 => 
            array (
                'id' => 315,
                'date' => '2021-07-20',
                'state' => 'Sarawak',
                'rtk_ag' => 899,
                'pcr' => 5421,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            315 => 
            array (
                'id' => 316,
                'date' => '2021-07-20',
                'state' => 'Selangor',
                'rtk_ag' => 16949,
                'pcr' => 17683,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            316 => 
            array (
                'id' => 317,
                'date' => '2021-07-20',
                'state' => 'Terengganu',
                'rtk_ag' => 412,
                'pcr' => 2133,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            317 => 
            array (
                'id' => 318,
                'date' => '2021-07-20',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 3732,
                'pcr' => 8265,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            318 => 
            array (
                'id' => 319,
                'date' => '2021-07-20',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 236,
                'pcr' => 251,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            319 => 
            array (
                'id' => 320,
                'date' => '2021-07-20',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 57,
                'pcr' => 493,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            320 => 
            array (
                'id' => 321,
                'date' => '2021-07-21',
                'state' => 'Johor',
                'rtk_ag' => 5169,
                'pcr' => 3975,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            321 => 
            array (
                'id' => 322,
                'date' => '2021-07-21',
                'state' => 'Kedah',
                'rtk_ag' => 3436,
                'pcr' => 2864,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            322 => 
            array (
                'id' => 323,
                'date' => '2021-07-21',
                'state' => 'Kelantan',
                'rtk_ag' => 844,
                'pcr' => 1865,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            323 => 
            array (
                'id' => 324,
                'date' => '2021-07-21',
                'state' => 'Melaka',
                'rtk_ag' => 2047,
                'pcr' => 2596,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            324 => 
            array (
                'id' => 325,
                'date' => '2021-07-21',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2954,
                'pcr' => 3330,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            325 => 
            array (
                'id' => 326,
                'date' => '2021-07-21',
                'state' => 'Pahang',
                'rtk_ag' => 2453,
                'pcr' => 2820,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            326 => 
            array (
                'id' => 327,
                'date' => '2021-07-21',
                'state' => 'Perak',
                'rtk_ag' => 2582,
                'pcr' => 1918,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            327 => 
            array (
                'id' => 328,
                'date' => '2021-07-21',
                'state' => 'Perlis',
                'rtk_ag' => 32,
                'pcr' => 46,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            328 => 
            array (
                'id' => 329,
                'date' => '2021-07-21',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 4840,
                'pcr' => 1460,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            329 => 
            array (
                'id' => 330,
                'date' => '2021-07-21',
                'state' => 'Sabah',
                'rtk_ag' => 4382,
                'pcr' => 3558,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            330 => 
            array (
                'id' => 331,
                'date' => '2021-07-21',
                'state' => 'Sarawak',
                'rtk_ag' => 1437,
                'pcr' => 8791,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            331 => 
            array (
                'id' => 332,
                'date' => '2021-07-21',
                'state' => 'Selangor',
                'rtk_ag' => 33961,
                'pcr' => 18812,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            332 => 
            array (
                'id' => 333,
                'date' => '2021-07-21',
                'state' => 'Terengganu',
                'rtk_ag' => 808,
                'pcr' => 2315,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            333 => 
            array (
                'id' => 334,
                'date' => '2021-07-21',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 9530,
                'pcr' => 7396,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            334 => 
            array (
                'id' => 335,
                'date' => '2021-07-21',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 467,
                'pcr' => 56,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            335 => 
            array (
                'id' => 336,
                'date' => '2021-07-21',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 301,
                'pcr' => 248,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            336 => 
            array (
                'id' => 337,
                'date' => '2021-07-22',
                'state' => 'Johor',
                'rtk_ag' => 5229,
                'pcr' => 7005,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            337 => 
            array (
                'id' => 338,
                'date' => '2021-07-22',
                'state' => 'Kedah',
                'rtk_ag' => 3980,
                'pcr' => 3583,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            338 => 
            array (
                'id' => 339,
                'date' => '2021-07-22',
                'state' => 'Kelantan',
                'rtk_ag' => 1439,
                'pcr' => 2818,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            339 => 
            array (
                'id' => 340,
                'date' => '2021-07-22',
                'state' => 'Melaka',
                'rtk_ag' => 1872,
                'pcr' => 1458,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            340 => 
            array (
                'id' => 341,
                'date' => '2021-07-22',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3790,
                'pcr' => 5373,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            341 => 
            array (
                'id' => 342,
                'date' => '2021-07-22',
                'state' => 'Pahang',
                'rtk_ag' => 3047,
                'pcr' => 2616,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            342 => 
            array (
                'id' => 343,
                'date' => '2021-07-22',
                'state' => 'Perak',
                'rtk_ag' => 2471,
                'pcr' => 2827,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            343 => 
            array (
                'id' => 344,
                'date' => '2021-07-22',
                'state' => 'Perlis',
                'rtk_ag' => 202,
                'pcr' => 17,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            344 => 
            array (
                'id' => 345,
                'date' => '2021-07-22',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 5551,
                'pcr' => 3271,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            345 => 
            array (
                'id' => 346,
                'date' => '2021-07-22',
                'state' => 'Sabah',
                'rtk_ag' => 4963,
                'pcr' => 3109,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            346 => 
            array (
                'id' => 347,
                'date' => '2021-07-22',
                'state' => 'Sarawak',
                'rtk_ag' => 923,
                'pcr' => 6545,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            347 => 
            array (
                'id' => 348,
                'date' => '2021-07-22',
                'state' => 'Selangor',
                'rtk_ag' => 34071,
                'pcr' => 21675,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            348 => 
            array (
                'id' => 349,
                'date' => '2021-07-22',
                'state' => 'Terengganu',
                'rtk_ag' => 1576,
                'pcr' => 3452,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            349 => 
            array (
                'id' => 350,
                'date' => '2021-07-22',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 8864,
                'pcr' => 11811,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            350 => 
            array (
                'id' => 351,
                'date' => '2021-07-22',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 594,
                'pcr' => 97,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            351 => 
            array (
                'id' => 352,
                'date' => '2021-07-22',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 375,
                'pcr' => 385,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            352 => 
            array (
                'id' => 353,
                'date' => '2021-07-23',
                'state' => 'Johor',
                'rtk_ag' => 5212,
                'pcr' => 6872,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            353 => 
            array (
                'id' => 354,
                'date' => '2021-07-23',
                'state' => 'Kedah',
                'rtk_ag' => 3311,
                'pcr' => 2973,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            354 => 
            array (
                'id' => 355,
                'date' => '2021-07-23',
                'state' => 'Kelantan',
                'rtk_ag' => 768,
                'pcr' => 3119,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            355 => 
            array (
                'id' => 356,
                'date' => '2021-07-23',
                'state' => 'Melaka',
                'rtk_ag' => 2035,
                'pcr' => 4219,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            356 => 
            array (
                'id' => 357,
                'date' => '2021-07-23',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 4583,
                'pcr' => 4295,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            357 => 
            array (
                'id' => 358,
                'date' => '2021-07-23',
                'state' => 'Pahang',
                'rtk_ag' => 2313,
                'pcr' => 3727,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            358 => 
            array (
                'id' => 359,
                'date' => '2021-07-23',
                'state' => 'Perak',
                'rtk_ag' => 2409,
                'pcr' => 3657,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            359 => 
            array (
                'id' => 360,
                'date' => '2021-07-23',
                'state' => 'Perlis',
                'rtk_ag' => 157,
                'pcr' => 48,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            360 => 
            array (
                'id' => 361,
                'date' => '2021-07-23',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 5819,
                'pcr' => 3079,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            361 => 
            array (
                'id' => 362,
                'date' => '2021-07-23',
                'state' => 'Sabah',
                'rtk_ag' => 4186,
                'pcr' => 4935,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            362 => 
            array (
                'id' => 363,
                'date' => '2021-07-23',
                'state' => 'Sarawak',
                'rtk_ag' => 1393,
                'pcr' => 6541,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            363 => 
            array (
                'id' => 364,
                'date' => '2021-07-23',
                'state' => 'Selangor',
                'rtk_ag' => 31344,
                'pcr' => 23350,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            364 => 
            array (
                'id' => 365,
                'date' => '2021-07-23',
                'state' => 'Terengganu',
                'rtk_ag' => 1070,
                'pcr' => 2189,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            365 => 
            array (
                'id' => 366,
                'date' => '2021-07-23',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 10226,
                'pcr' => 10922,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            366 => 
            array (
                'id' => 367,
                'date' => '2021-07-23',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 248,
                'pcr' => 139,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            367 => 
            array (
                'id' => 368,
                'date' => '2021-07-23',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 676,
                'pcr' => 628,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            368 => 
            array (
                'id' => 369,
                'date' => '2021-07-24',
                'state' => 'Johor',
                'rtk_ag' => 5914,
                'pcr' => 5093,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            369 => 
            array (
                'id' => 370,
                'date' => '2021-07-24',
                'state' => 'Kedah',
                'rtk_ag' => 3048,
                'pcr' => 2026,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            370 => 
            array (
                'id' => 371,
                'date' => '2021-07-24',
                'state' => 'Kelantan',
                'rtk_ag' => 1006,
                'pcr' => 2668,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            371 => 
            array (
                'id' => 372,
                'date' => '2021-07-24',
                'state' => 'Melaka',
                'rtk_ag' => 1508,
                'pcr' => 2902,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            372 => 
            array (
                'id' => 373,
                'date' => '2021-07-24',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2711,
                'pcr' => 4749,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            373 => 
            array (
                'id' => 374,
                'date' => '2021-07-24',
                'state' => 'Pahang',
                'rtk_ag' => 2480,
                'pcr' => 3041,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            374 => 
            array (
                'id' => 375,
                'date' => '2021-07-24',
                'state' => 'Perak',
                'rtk_ag' => 2652,
                'pcr' => 2151,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            375 => 
            array (
                'id' => 376,
                'date' => '2021-07-24',
                'state' => 'Perlis',
                'rtk_ag' => 50,
                'pcr' => 55,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            376 => 
            array (
                'id' => 377,
                'date' => '2021-07-24',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 4780,
                'pcr' => 2803,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            377 => 
            array (
                'id' => 378,
                'date' => '2021-07-24',
                'state' => 'Sabah',
                'rtk_ag' => 3471,
                'pcr' => 4616,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            378 => 
            array (
                'id' => 379,
                'date' => '2021-07-24',
                'state' => 'Sarawak',
                'rtk_ag' => 2248,
                'pcr' => 5655,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            379 => 
            array (
                'id' => 380,
                'date' => '2021-07-24',
                'state' => 'Selangor',
                'rtk_ag' => 27243,
                'pcr' => 20688,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            380 => 
            array (
                'id' => 381,
                'date' => '2021-07-24',
                'state' => 'Terengganu',
                'rtk_ag' => 1588,
                'pcr' => 1841,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            381 => 
            array (
                'id' => 382,
                'date' => '2021-07-24',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 7051,
                'pcr' => 12280,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            382 => 
            array (
                'id' => 383,
                'date' => '2021-07-24',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 1056,
                'pcr' => 136,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            383 => 
            array (
                'id' => 384,
                'date' => '2021-07-24',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 117,
                'pcr' => 367,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            384 => 
            array (
                'id' => 385,
                'date' => '2021-07-25',
                'state' => 'Johor',
                'rtk_ag' => 3772,
                'pcr' => 4975,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            385 => 
            array (
                'id' => 386,
                'date' => '2021-07-25',
                'state' => 'Kedah',
                'rtk_ag' => 3362,
                'pcr' => 1872,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            386 => 
            array (
                'id' => 387,
                'date' => '2021-07-25',
                'state' => 'Kelantan',
                'rtk_ag' => 1950,
                'pcr' => 2839,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            387 => 
            array (
                'id' => 388,
                'date' => '2021-07-25',
                'state' => 'Melaka',
                'rtk_ag' => 948,
                'pcr' => 4119,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            388 => 
            array (
                'id' => 389,
                'date' => '2021-07-25',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 1695,
                'pcr' => 5202,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            389 => 
            array (
                'id' => 390,
                'date' => '2021-07-25',
                'state' => 'Pahang',
                'rtk_ag' => 2081,
                'pcr' => 3072,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            390 => 
            array (
                'id' => 391,
                'date' => '2021-07-25',
                'state' => 'Perak',
                'rtk_ag' => 1313,
                'pcr' => 2478,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            391 => 
            array (
                'id' => 392,
                'date' => '2021-07-25',
                'state' => 'Perlis',
                'rtk_ag' => 73,
                'pcr' => 26,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            392 => 
            array (
                'id' => 393,
                'date' => '2021-07-25',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 4168,
                'pcr' => 3099,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            393 => 
            array (
                'id' => 394,
                'date' => '2021-07-25',
                'state' => 'Sabah',
                'rtk_ag' => 2831,
                'pcr' => 4817,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            394 => 
            array (
                'id' => 395,
                'date' => '2021-07-25',
                'state' => 'Sarawak',
                'rtk_ag' => 1145,
                'pcr' => 6988,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            395 => 
            array (
                'id' => 396,
                'date' => '2021-07-25',
                'state' => 'Selangor',
                'rtk_ag' => 23141,
                'pcr' => 16742,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            396 => 
            array (
                'id' => 397,
                'date' => '2021-07-25',
                'state' => 'Terengganu',
                'rtk_ag' => 1424,
                'pcr' => 1120,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            397 => 
            array (
                'id' => 398,
                'date' => '2021-07-25',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4186,
                'pcr' => 8720,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            398 => 
            array (
                'id' => 399,
                'date' => '2021-07-25',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 601,
                'pcr' => 291,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            399 => 
            array (
                'id' => 400,
                'date' => '2021-07-25',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 82,
                'pcr' => 687,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            400 => 
            array (
                'id' => 401,
                'date' => '2021-07-26',
                'state' => 'Johor',
                'rtk_ag' => 5973,
                'pcr' => 4131,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            401 => 
            array (
                'id' => 402,
                'date' => '2021-07-26',
                'state' => 'Kedah',
                'rtk_ag' => 4088,
                'pcr' => 3534,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            402 => 
            array (
                'id' => 403,
                'date' => '2021-07-26',
                'state' => 'Kelantan',
                'rtk_ag' => 1873,
                'pcr' => 2867,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            403 => 
            array (
                'id' => 404,
                'date' => '2021-07-26',
                'state' => 'Melaka',
                'rtk_ag' => 2140,
                'pcr' => 1818,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            404 => 
            array (
                'id' => 405,
                'date' => '2021-07-26',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3707,
                'pcr' => 3661,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            405 => 
            array (
                'id' => 406,
                'date' => '2021-07-26',
                'state' => 'Pahang',
                'rtk_ag' => 3383,
                'pcr' => 3774,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            406 => 
            array (
                'id' => 407,
                'date' => '2021-07-26',
                'state' => 'Perak',
                'rtk_ag' => 3490,
                'pcr' => 2173,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            407 => 
            array (
                'id' => 408,
                'date' => '2021-07-26',
                'state' => 'Perlis',
                'rtk_ag' => 172,
                'pcr' => 16,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            408 => 
            array (
                'id' => 409,
                'date' => '2021-07-26',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 6243,
                'pcr' => 1089,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            409 => 
            array (
                'id' => 410,
                'date' => '2021-07-26',
                'state' => 'Sabah',
                'rtk_ag' => 4813,
                'pcr' => 2879,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            410 => 
            array (
                'id' => 411,
                'date' => '2021-07-26',
                'state' => 'Sarawak',
                'rtk_ag' => 2478,
                'pcr' => 6512,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            411 => 
            array (
                'id' => 412,
                'date' => '2021-07-26',
                'state' => 'Selangor',
                'rtk_ag' => 41143,
                'pcr' => 14854,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            412 => 
            array (
                'id' => 413,
                'date' => '2021-07-26',
                'state' => 'Terengganu',
                'rtk_ag' => 1245,
                'pcr' => 3268,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            413 => 
            array (
                'id' => 414,
                'date' => '2021-07-26',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 9503,
                'pcr' => 6695,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            414 => 
            array (
                'id' => 415,
                'date' => '2021-07-26',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 772,
                'pcr' => 87,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            415 => 
            array (
                'id' => 416,
                'date' => '2021-07-26',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 209,
                'pcr' => 613,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            416 => 
            array (
                'id' => 417,
                'date' => '2021-07-27',
                'state' => 'Johor',
                'rtk_ag' => 5285,
                'pcr' => 5864,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            417 => 
            array (
                'id' => 418,
                'date' => '2021-07-27',
                'state' => 'Kedah',
                'rtk_ag' => 4419,
                'pcr' => 3055,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            418 => 
            array (
                'id' => 419,
                'date' => '2021-07-27',
                'state' => 'Kelantan',
                'rtk_ag' => 1544,
                'pcr' => 4059,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            419 => 
            array (
                'id' => 420,
                'date' => '2021-07-27',
                'state' => 'Melaka',
                'rtk_ag' => 2782,
                'pcr' => 2033,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            420 => 
            array (
                'id' => 421,
                'date' => '2021-07-27',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3217,
                'pcr' => 3643,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            421 => 
            array (
                'id' => 422,
                'date' => '2021-07-27',
                'state' => 'Pahang',
                'rtk_ag' => 2689,
                'pcr' => 4436,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            422 => 
            array (
                'id' => 423,
                'date' => '2021-07-27',
                'state' => 'Perak',
                'rtk_ag' => 4204,
                'pcr' => 2498,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            423 => 
            array (
                'id' => 424,
                'date' => '2021-07-27',
                'state' => 'Perlis',
                'rtk_ag' => 139,
                'pcr' => 37,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            424 => 
            array (
                'id' => 425,
                'date' => '2021-07-27',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 6402,
                'pcr' => 3163,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            425 => 
            array (
                'id' => 426,
                'date' => '2021-07-27',
                'state' => 'Sabah',
                'rtk_ag' => 4601,
                'pcr' => 4281,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            426 => 
            array (
                'id' => 427,
                'date' => '2021-07-27',
                'state' => 'Sarawak',
                'rtk_ag' => 1828,
                'pcr' => 6476,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            427 => 
            array (
                'id' => 428,
                'date' => '2021-07-27',
                'state' => 'Selangor',
                'rtk_ag' => 34615,
                'pcr' => 17693,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            428 => 
            array (
                'id' => 429,
                'date' => '2021-07-27',
                'state' => 'Terengganu',
                'rtk_ag' => 1637,
                'pcr' => 4810,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            429 => 
            array (
                'id' => 430,
                'date' => '2021-07-27',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 9748,
                'pcr' => 7731,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            430 => 
            array (
                'id' => 431,
                'date' => '2021-07-27',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 1028,
                'pcr' => 243,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            431 => 
            array (
                'id' => 432,
                'date' => '2021-07-27',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 9,
                'pcr' => 403,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            432 => 
            array (
                'id' => 433,
                'date' => '2021-07-28',
                'state' => 'Johor',
                'rtk_ag' => 5390,
                'pcr' => 5839,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            433 => 
            array (
                'id' => 434,
                'date' => '2021-07-28',
                'state' => 'Kedah',
                'rtk_ag' => 4552,
                'pcr' => 2978,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            434 => 
            array (
                'id' => 435,
                'date' => '2021-07-28',
                'state' => 'Kelantan',
                'rtk_ag' => 1670,
                'pcr' => 5242,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            435 => 
            array (
                'id' => 436,
                'date' => '2021-07-28',
                'state' => 'Melaka',
                'rtk_ag' => 2264,
                'pcr' => 2783,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            436 => 
            array (
                'id' => 437,
                'date' => '2021-07-28',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3023,
                'pcr' => 3002,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            437 => 
            array (
                'id' => 438,
                'date' => '2021-07-28',
                'state' => 'Pahang',
                'rtk_ag' => 2563,
                'pcr' => 4142,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            438 => 
            array (
                'id' => 439,
                'date' => '2021-07-28',
                'state' => 'Perak',
                'rtk_ag' => 5282,
                'pcr' => 3920,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            439 => 
            array (
                'id' => 440,
                'date' => '2021-07-28',
                'state' => 'Perlis',
                'rtk_ag' => 202,
                'pcr' => 66,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            440 => 
            array (
                'id' => 441,
                'date' => '2021-07-28',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 5812,
                'pcr' => 3816,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            441 => 
            array (
                'id' => 442,
                'date' => '2021-07-28',
                'state' => 'Sabah',
                'rtk_ag' => 4233,
                'pcr' => 4570,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            442 => 
            array (
                'id' => 443,
                'date' => '2021-07-28',
                'state' => 'Sarawak',
                'rtk_ag' => 1472,
                'pcr' => 7412,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            443 => 
            array (
                'id' => 444,
                'date' => '2021-07-28',
                'state' => 'Selangor',
                'rtk_ag' => 30417,
                'pcr' => 16753,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            444 => 
            array (
                'id' => 445,
                'date' => '2021-07-28',
                'state' => 'Terengganu',
                'rtk_ag' => 1892,
                'pcr' => 4012,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            445 => 
            array (
                'id' => 446,
                'date' => '2021-07-28',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 8454,
                'pcr' => 8220,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            446 => 
            array (
                'id' => 447,
                'date' => '2021-07-28',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 364,
                'pcr' => 129,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            447 => 
            array (
                'id' => 448,
                'date' => '2021-07-28',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 208,
                'pcr' => 616,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            448 => 
            array (
                'id' => 449,
                'date' => '2021-07-29',
                'state' => 'Johor',
                'rtk_ag' => 5591,
                'pcr' => 7597,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            449 => 
            array (
                'id' => 450,
                'date' => '2021-07-29',
                'state' => 'Kedah',
                'rtk_ag' => 3807,
                'pcr' => 3915,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            450 => 
            array (
                'id' => 451,
                'date' => '2021-07-29',
                'state' => 'Kelantan',
                'rtk_ag' => 1807,
                'pcr' => 4098,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            451 => 
            array (
                'id' => 452,
                'date' => '2021-07-29',
                'state' => 'Melaka',
                'rtk_ag' => 2328,
                'pcr' => 3125,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            452 => 
            array (
                'id' => 453,
                'date' => '2021-07-29',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3143,
                'pcr' => 3529,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            453 => 
            array (
                'id' => 454,
                'date' => '2021-07-29',
                'state' => 'Pahang',
                'rtk_ag' => 3261,
                'pcr' => 4012,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            454 => 
            array (
                'id' => 455,
                'date' => '2021-07-29',
                'state' => 'Perak',
                'rtk_ag' => 4324,
                'pcr' => 4892,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            455 => 
            array (
                'id' => 456,
                'date' => '2021-07-29',
                'state' => 'Perlis',
                'rtk_ag' => 168,
                'pcr' => 72,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            456 => 
            array (
                'id' => 457,
                'date' => '2021-07-29',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 5994,
                'pcr' => 3295,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            457 => 
            array (
                'id' => 458,
                'date' => '2021-07-29',
                'state' => 'Sabah',
                'rtk_ag' => 4973,
                'pcr' => 7133,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            458 => 
            array (
                'id' => 459,
                'date' => '2021-07-29',
                'state' => 'Sarawak',
                'rtk_ag' => 1424,
                'pcr' => 6244,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            459 => 
            array (
                'id' => 460,
                'date' => '2021-07-29',
                'state' => 'Selangor',
                'rtk_ag' => 30712,
                'pcr' => 18131,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            460 => 
            array (
                'id' => 461,
                'date' => '2021-07-29',
                'state' => 'Terengganu',
                'rtk_ag' => 2043,
                'pcr' => 3554,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            461 => 
            array (
                'id' => 462,
                'date' => '2021-07-29',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 8730,
                'pcr' => 10404,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            462 => 
            array (
                'id' => 463,
                'date' => '2021-07-29',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 487,
                'pcr' => 51,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            463 => 
            array (
                'id' => 464,
                'date' => '2021-07-29',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 209,
                'pcr' => 347,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            464 => 
            array (
                'id' => 465,
                'date' => '2021-07-30',
                'state' => 'Johor',
                'rtk_ag' => 3887,
                'pcr' => 10180,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            465 => 
            array (
                'id' => 466,
                'date' => '2021-07-30',
                'state' => 'Kedah',
                'rtk_ag' => 4110,
                'pcr' => 3653,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            466 => 
            array (
                'id' => 467,
                'date' => '2021-07-30',
                'state' => 'Kelantan',
                'rtk_ag' => 1815,
                'pcr' => 4438,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            467 => 
            array (
                'id' => 468,
                'date' => '2021-07-30',
                'state' => 'Melaka',
                'rtk_ag' => 1745,
                'pcr' => 3157,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            468 => 
            array (
                'id' => 469,
                'date' => '2021-07-30',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2757,
                'pcr' => 3214,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            469 => 
            array (
                'id' => 470,
                'date' => '2021-07-30',
                'state' => 'Pahang',
                'rtk_ag' => 2178,
                'pcr' => 4229,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            470 => 
            array (
                'id' => 471,
                'date' => '2021-07-30',
                'state' => 'Perak',
                'rtk_ag' => 4202,
                'pcr' => 3889,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            471 => 
            array (
                'id' => 472,
                'date' => '2021-07-30',
                'state' => 'Perlis',
                'rtk_ag' => 153,
                'pcr' => 211,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            472 => 
            array (
                'id' => 473,
                'date' => '2021-07-30',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 8789,
                'pcr' => 3601,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            473 => 
            array (
                'id' => 474,
                'date' => '2021-07-30',
                'state' => 'Sabah',
                'rtk_ag' => 4518,
                'pcr' => 6873,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            474 => 
            array (
                'id' => 475,
                'date' => '2021-07-30',
                'state' => 'Sarawak',
                'rtk_ag' => 1468,
                'pcr' => 6036,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            475 => 
            array (
                'id' => 476,
                'date' => '2021-07-30',
                'state' => 'Selangor',
                'rtk_ag' => 28906,
                'pcr' => 17425,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            476 => 
            array (
                'id' => 477,
                'date' => '2021-07-30',
                'state' => 'Terengganu',
                'rtk_ag' => 883,
                'pcr' => 6473,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            477 => 
            array (
                'id' => 478,
                'date' => '2021-07-30',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 6654,
                'pcr' => 7600,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            478 => 
            array (
                'id' => 479,
                'date' => '2021-07-30',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 520,
                'pcr' => 55,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            479 => 
            array (
                'id' => 480,
                'date' => '2021-07-30',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 222,
                'pcr' => 757,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            480 => 
            array (
                'id' => 481,
                'date' => '2021-07-31',
                'state' => 'Johor',
                'rtk_ag' => 5169,
                'pcr' => 9017,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            481 => 
            array (
                'id' => 482,
                'date' => '2021-07-31',
                'state' => 'Kedah',
                'rtk_ag' => 3300,
                'pcr' => 3821,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            482 => 
            array (
                'id' => 483,
                'date' => '2021-07-31',
                'state' => 'Kelantan',
                'rtk_ag' => 1572,
                'pcr' => 2242,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            483 => 
            array (
                'id' => 484,
                'date' => '2021-07-31',
                'state' => 'Melaka',
                'rtk_ag' => 1707,
                'pcr' => 3289,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            484 => 
            array (
                'id' => 485,
                'date' => '2021-07-31',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2522,
                'pcr' => 4313,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            485 => 
            array (
                'id' => 486,
                'date' => '2021-07-31',
                'state' => 'Pahang',
                'rtk_ag' => 2037,
                'pcr' => 2415,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            486 => 
            array (
                'id' => 487,
                'date' => '2021-07-31',
                'state' => 'Perak',
                'rtk_ag' => 3339,
                'pcr' => 4055,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            487 => 
            array (
                'id' => 488,
                'date' => '2021-07-31',
                'state' => 'Perlis',
                'rtk_ag' => 111,
                'pcr' => 166,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            488 => 
            array (
                'id' => 489,
                'date' => '2021-07-31',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 6615,
                'pcr' => 3771,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            489 => 
            array (
                'id' => 490,
                'date' => '2021-07-31',
                'state' => 'Sabah',
                'rtk_ag' => 4607,
                'pcr' => 5884,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            490 => 
            array (
                'id' => 491,
                'date' => '2021-07-31',
                'state' => 'Sarawak',
                'rtk_ag' => 1354,
                'pcr' => 4774,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            491 => 
            array (
                'id' => 492,
                'date' => '2021-07-31',
                'state' => 'Selangor',
                'rtk_ag' => 23177,
                'pcr' => 16831,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            492 => 
            array (
                'id' => 493,
                'date' => '2021-07-31',
                'state' => 'Terengganu',
                'rtk_ag' => 1814,
                'pcr' => 3369,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            493 => 
            array (
                'id' => 494,
                'date' => '2021-07-31',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5528,
                'pcr' => 8439,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            494 => 
            array (
                'id' => 495,
                'date' => '2021-07-31',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 313,
                'pcr' => 108,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            495 => 
            array (
                'id' => 496,
                'date' => '2021-07-31',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 151,
                'pcr' => 403,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            496 => 
            array (
                'id' => 497,
                'date' => '2021-08-01',
                'state' => 'Johor',
                'rtk_ag' => 5557,
                'pcr' => 6913,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            497 => 
            array (
                'id' => 498,
                'date' => '2021-08-01',
                'state' => 'Kedah',
                'rtk_ag' => 4162,
                'pcr' => 2175,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            498 => 
            array (
                'id' => 499,
                'date' => '2021-08-01',
                'state' => 'Kelantan',
                'rtk_ag' => 2908,
                'pcr' => 2657,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            499 => 
            array (
                'id' => 500,
                'date' => '2021-08-01',
                'state' => 'Melaka',
                'rtk_ag' => 1323,
                'pcr' => 2228,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
        ));
        \DB::table('test_states')->insert(array (
            0 => 
            array (
                'id' => 501,
                'date' => '2021-08-01',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 1741,
                'pcr' => 2835,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            1 => 
            array (
                'id' => 502,
                'date' => '2021-08-01',
                'state' => 'Pahang',
                'rtk_ag' => 1933,
                'pcr' => 4227,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            2 => 
            array (
                'id' => 503,
                'date' => '2021-08-01',
                'state' => 'Perak',
                'rtk_ag' => 2153,
                'pcr' => 2545,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            3 => 
            array (
                'id' => 504,
                'date' => '2021-08-01',
                'state' => 'Perlis',
                'rtk_ag' => 85,
                'pcr' => 153,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            4 => 
            array (
                'id' => 505,
                'date' => '2021-08-01',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 3293,
                'pcr' => 2372,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            5 => 
            array (
                'id' => 506,
                'date' => '2021-08-01',
                'state' => 'Sabah',
                'rtk_ag' => 3792,
                'pcr' => 5190,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            6 => 
            array (
                'id' => 507,
                'date' => '2021-08-01',
                'state' => 'Sarawak',
                'rtk_ag' => 867,
                'pcr' => 4285,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            7 => 
            array (
                'id' => 508,
                'date' => '2021-08-01',
                'state' => 'Selangor',
                'rtk_ag' => 17569,
                'pcr' => 11667,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            8 => 
            array (
                'id' => 509,
                'date' => '2021-08-01',
                'state' => 'Terengganu',
                'rtk_ag' => 2177,
                'pcr' => 2585,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            9 => 
            array (
                'id' => 510,
                'date' => '2021-08-01',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4046,
                'pcr' => 4377,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            10 => 
            array (
                'id' => 511,
                'date' => '2021-08-01',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 419,
                'pcr' => 141,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            11 => 
            array (
                'id' => 512,
                'date' => '2021-08-01',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 83,
                'pcr' => 382,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            12 => 
            array (
                'id' => 513,
                'date' => '2021-08-02',
                'state' => 'Johor',
                'rtk_ag' => 6665,
                'pcr' => 5269,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            13 => 
            array (
                'id' => 514,
                'date' => '2021-08-02',
                'state' => 'Kedah',
                'rtk_ag' => 5318,
                'pcr' => 2704,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            14 => 
            array (
                'id' => 515,
                'date' => '2021-08-02',
                'state' => 'Kelantan',
                'rtk_ag' => 2554,
                'pcr' => 3209,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            15 => 
            array (
                'id' => 516,
                'date' => '2021-08-02',
                'state' => 'Melaka',
                'rtk_ag' => 2326,
                'pcr' => 2387,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            16 => 
            array (
                'id' => 517,
                'date' => '2021-08-02',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 4334,
                'pcr' => 1531,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            17 => 
            array (
                'id' => 518,
                'date' => '2021-08-02',
                'state' => 'Pahang',
                'rtk_ag' => 2831,
                'pcr' => 3033,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            18 => 
            array (
                'id' => 519,
                'date' => '2021-08-02',
                'state' => 'Perak',
                'rtk_ag' => 4104,
                'pcr' => 3333,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            19 => 
            array (
                'id' => 520,
                'date' => '2021-08-02',
                'state' => 'Perlis',
                'rtk_ag' => 244,
                'pcr' => 43,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            20 => 
            array (
                'id' => 521,
                'date' => '2021-08-02',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 5425,
                'pcr' => 2941,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            21 => 
            array (
                'id' => 522,
                'date' => '2021-08-02',
                'state' => 'Sabah',
                'rtk_ag' => 6929,
                'pcr' => 5154,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            22 => 
            array (
                'id' => 523,
                'date' => '2021-08-02',
                'state' => 'Sarawak',
                'rtk_ag' => 2816,
                'pcr' => 6584,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            23 => 
            array (
                'id' => 524,
                'date' => '2021-08-02',
                'state' => 'Selangor',
                'rtk_ag' => 33372,
                'pcr' => 11352,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            24 => 
            array (
                'id' => 525,
                'date' => '2021-08-02',
                'state' => 'Terengganu',
                'rtk_ag' => 2339,
                'pcr' => 3656,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            25 => 
            array (
                'id' => 526,
                'date' => '2021-08-02',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 8903,
                'pcr' => 5665,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            26 => 
            array (
                'id' => 527,
                'date' => '2021-08-02',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 562,
                'pcr' => 88,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            27 => 
            array (
                'id' => 528,
                'date' => '2021-08-02',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 292,
                'pcr' => 313,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            28 => 
            array (
                'id' => 529,
                'date' => '2021-08-03',
                'state' => 'Johor',
                'rtk_ag' => 7078,
                'pcr' => 9142,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            29 => 
            array (
                'id' => 530,
                'date' => '2021-08-03',
                'state' => 'Kedah',
                'rtk_ag' => 4516,
                'pcr' => 3776,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            30 => 
            array (
                'id' => 531,
                'date' => '2021-08-03',
                'state' => 'Kelantan',
                'rtk_ag' => 3350,
                'pcr' => 4202,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            31 => 
            array (
                'id' => 532,
                'date' => '2021-08-03',
                'state' => 'Melaka',
                'rtk_ag' => 2266,
                'pcr' => 3171,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            32 => 
            array (
                'id' => 533,
                'date' => '2021-08-03',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3182,
                'pcr' => 3208,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            33 => 
            array (
                'id' => 534,
                'date' => '2021-08-03',
                'state' => 'Pahang',
                'rtk_ag' => 2220,
                'pcr' => 3135,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            34 => 
            array (
                'id' => 535,
                'date' => '2021-08-03',
                'state' => 'Perak',
                'rtk_ag' => 4123,
                'pcr' => 4109,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            35 => 
            array (
                'id' => 536,
                'date' => '2021-08-03',
                'state' => 'Perlis',
                'rtk_ag' => 135,
                'pcr' => 141,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            36 => 
            array (
                'id' => 537,
                'date' => '2021-08-03',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 7466,
                'pcr' => 3920,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            37 => 
            array (
                'id' => 538,
                'date' => '2021-08-03',
                'state' => 'Sabah',
                'rtk_ag' => 6367,
                'pcr' => 6934,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            38 => 
            array (
                'id' => 539,
                'date' => '2021-08-03',
                'state' => 'Sarawak',
                'rtk_ag' => 1540,
                'pcr' => 8682,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            39 => 
            array (
                'id' => 540,
                'date' => '2021-08-03',
                'state' => 'Selangor',
                'rtk_ag' => 32708,
                'pcr' => 21840,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            40 => 
            array (
                'id' => 541,
                'date' => '2021-08-03',
                'state' => 'Terengganu',
                'rtk_ag' => 1707,
                'pcr' => 3186,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            41 => 
            array (
                'id' => 542,
                'date' => '2021-08-03',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 8402,
                'pcr' => 8616,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            42 => 
            array (
                'id' => 543,
                'date' => '2021-08-03',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 344,
                'pcr' => 306,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            43 => 
            array (
                'id' => 544,
                'date' => '2021-08-03',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 161,
                'pcr' => 547,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            44 => 
            array (
                'id' => 545,
                'date' => '2021-08-04',
                'state' => 'Johor',
                'rtk_ag' => 6979,
                'pcr' => 9027,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            45 => 
            array (
                'id' => 546,
                'date' => '2021-08-04',
                'state' => 'Kedah',
                'rtk_ag' => 4255,
                'pcr' => 3558,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            46 => 
            array (
                'id' => 547,
                'date' => '2021-08-04',
                'state' => 'Kelantan',
                'rtk_ag' => 3347,
                'pcr' => 2870,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            47 => 
            array (
                'id' => 548,
                'date' => '2021-08-04',
                'state' => 'Melaka',
                'rtk_ag' => 1977,
                'pcr' => 2754,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            48 => 
            array (
                'id' => 549,
                'date' => '2021-08-04',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2680,
                'pcr' => 2661,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            49 => 
            array (
                'id' => 550,
                'date' => '2021-08-04',
                'state' => 'Pahang',
                'rtk_ag' => 2362,
                'pcr' => 4843,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            50 => 
            array (
                'id' => 551,
                'date' => '2021-08-04',
                'state' => 'Perak',
                'rtk_ag' => 4272,
                'pcr' => 4011,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            51 => 
            array (
                'id' => 552,
                'date' => '2021-08-04',
                'state' => 'Perlis',
                'rtk_ag' => 142,
                'pcr' => 89,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            52 => 
            array (
                'id' => 553,
                'date' => '2021-08-04',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 7962,
                'pcr' => 3599,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            53 => 
            array (
                'id' => 554,
                'date' => '2021-08-04',
                'state' => 'Sabah',
                'rtk_ag' => 6610,
                'pcr' => 5116,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            54 => 
            array (
                'id' => 555,
                'date' => '2021-08-04',
                'state' => 'Sarawak',
                'rtk_ag' => 2042,
                'pcr' => 7783,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            55 => 
            array (
                'id' => 556,
                'date' => '2021-08-04',
                'state' => 'Selangor',
                'rtk_ag' => 30422,
                'pcr' => 16355,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            56 => 
            array (
                'id' => 557,
                'date' => '2021-08-04',
                'state' => 'Terengganu',
                'rtk_ag' => 1796,
                'pcr' => 3525,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            57 => 
            array (
                'id' => 558,
                'date' => '2021-08-04',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 7883,
                'pcr' => 7650,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            58 => 
            array (
                'id' => 559,
                'date' => '2021-08-04',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 348,
                'pcr' => 225,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            59 => 
            array (
                'id' => 560,
                'date' => '2021-08-04',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 271,
                'pcr' => 471,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            60 => 
            array (
                'id' => 561,
                'date' => '2021-08-05',
                'state' => 'Johor',
                'rtk_ag' => 6941,
                'pcr' => 8962,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            61 => 
            array (
                'id' => 562,
                'date' => '2021-08-05',
                'state' => 'Kedah',
                'rtk_ag' => 4902,
                'pcr' => 3350,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            62 => 
            array (
                'id' => 563,
                'date' => '2021-08-05',
                'state' => 'Kelantan',
                'rtk_ag' => 3789,
                'pcr' => 3698,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            63 => 
            array (
                'id' => 564,
                'date' => '2021-08-05',
                'state' => 'Melaka',
                'rtk_ag' => 2465,
                'pcr' => 2323,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            64 => 
            array (
                'id' => 565,
                'date' => '2021-08-05',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2461,
                'pcr' => 2354,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            65 => 
            array (
                'id' => 566,
                'date' => '2021-08-05',
                'state' => 'Pahang',
                'rtk_ag' => 2247,
                'pcr' => 4731,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            66 => 
            array (
                'id' => 567,
                'date' => '2021-08-05',
                'state' => 'Perak',
                'rtk_ag' => 3403,
                'pcr' => 2943,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            67 => 
            array (
                'id' => 568,
                'date' => '2021-08-05',
                'state' => 'Perlis',
                'rtk_ag' => 232,
                'pcr' => 38,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            68 => 
            array (
                'id' => 569,
                'date' => '2021-08-05',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 7843,
                'pcr' => 3744,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            69 => 
            array (
                'id' => 570,
                'date' => '2021-08-05',
                'state' => 'Sabah',
                'rtk_ag' => 6536,
                'pcr' => 4894,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            70 => 
            array (
                'id' => 571,
                'date' => '2021-08-05',
                'state' => 'Sarawak',
                'rtk_ag' => 2568,
                'pcr' => 6609,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            71 => 
            array (
                'id' => 572,
                'date' => '2021-08-05',
                'state' => 'Selangor',
                'rtk_ag' => 28657,
                'pcr' => 15902,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            72 => 
            array (
                'id' => 573,
                'date' => '2021-08-05',
                'state' => 'Terengganu',
                'rtk_ag' => 2113,
                'pcr' => 3531,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            73 => 
            array (
                'id' => 574,
                'date' => '2021-08-05',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 8451,
                'pcr' => 7906,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            74 => 
            array (
                'id' => 575,
                'date' => '2021-08-05',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 256,
                'pcr' => 174,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            75 => 
            array (
                'id' => 576,
                'date' => '2021-08-05',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 196,
                'pcr' => 167,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            76 => 
            array (
                'id' => 577,
                'date' => '2021-08-06',
                'state' => 'Johor',
                'rtk_ag' => 8219,
                'pcr' => 10156,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            77 => 
            array (
                'id' => 578,
                'date' => '2021-08-06',
                'state' => 'Kedah',
                'rtk_ag' => 4336,
                'pcr' => 3484,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            78 => 
            array (
                'id' => 579,
                'date' => '2021-08-06',
                'state' => 'Kelantan',
                'rtk_ag' => 2078,
                'pcr' => 3281,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            79 => 
            array (
                'id' => 580,
                'date' => '2021-08-06',
                'state' => 'Melaka',
                'rtk_ag' => 2793,
                'pcr' => 2259,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            80 => 
            array (
                'id' => 581,
                'date' => '2021-08-06',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2789,
                'pcr' => 3430,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            81 => 
            array (
                'id' => 582,
                'date' => '2021-08-06',
                'state' => 'Pahang',
                'rtk_ag' => 2484,
                'pcr' => 4609,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            82 => 
            array (
                'id' => 583,
                'date' => '2021-08-06',
                'state' => 'Perak',
                'rtk_ag' => 3621,
                'pcr' => 2915,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            83 => 
            array (
                'id' => 584,
                'date' => '2021-08-06',
                'state' => 'Perlis',
                'rtk_ag' => 216,
                'pcr' => 90,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            84 => 
            array (
                'id' => 585,
                'date' => '2021-08-06',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 6874,
                'pcr' => 3520,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            85 => 
            array (
                'id' => 586,
                'date' => '2021-08-06',
                'state' => 'Sabah',
                'rtk_ag' => 5732,
                'pcr' => 5683,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            86 => 
            array (
                'id' => 587,
                'date' => '2021-08-06',
                'state' => 'Sarawak',
                'rtk_ag' => 2616,
                'pcr' => 8358,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            87 => 
            array (
                'id' => 588,
                'date' => '2021-08-06',
                'state' => 'Selangor',
                'rtk_ag' => 28713,
                'pcr' => 16919,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            88 => 
            array (
                'id' => 589,
                'date' => '2021-08-06',
                'state' => 'Terengganu',
                'rtk_ag' => 1213,
                'pcr' => 4831,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            89 => 
            array (
                'id' => 590,
                'date' => '2021-08-06',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 7538,
                'pcr' => 7866,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            90 => 
            array (
                'id' => 591,
                'date' => '2021-08-06',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 271,
                'pcr' => 122,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            91 => 
            array (
                'id' => 592,
                'date' => '2021-08-06',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 244,
                'pcr' => 352,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            92 => 
            array (
                'id' => 593,
                'date' => '2021-08-07',
                'state' => 'Johor',
                'rtk_ag' => 8393,
                'pcr' => 10521,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            93 => 
            array (
                'id' => 594,
                'date' => '2021-08-07',
                'state' => 'Kedah',
                'rtk_ag' => 4134,
                'pcr' => 3631,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            94 => 
            array (
                'id' => 595,
                'date' => '2021-08-07',
                'state' => 'Kelantan',
                'rtk_ag' => 3223,
                'pcr' => 2662,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            95 => 
            array (
                'id' => 596,
                'date' => '2021-08-07',
                'state' => 'Melaka',
                'rtk_ag' => 1712,
                'pcr' => 1993,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            96 => 
            array (
                'id' => 597,
                'date' => '2021-08-07',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 1581,
                'pcr' => 2480,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            97 => 
            array (
                'id' => 598,
                'date' => '2021-08-07',
                'state' => 'Pahang',
                'rtk_ag' => 3252,
                'pcr' => 3480,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            98 => 
            array (
                'id' => 599,
                'date' => '2021-08-07',
                'state' => 'Perak',
                'rtk_ag' => 3883,
                'pcr' => 2884,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            99 => 
            array (
                'id' => 600,
                'date' => '2021-08-07',
                'state' => 'Perlis',
                'rtk_ag' => 87,
                'pcr' => 40,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            100 => 
            array (
                'id' => 601,
                'date' => '2021-08-07',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 7097,
                'pcr' => 3835,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            101 => 
            array (
                'id' => 602,
                'date' => '2021-08-07',
                'state' => 'Sabah',
                'rtk_ag' => 5219,
                'pcr' => 5147,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            102 => 
            array (
                'id' => 603,
                'date' => '2021-08-07',
                'state' => 'Sarawak',
                'rtk_ag' => 2036,
                'pcr' => 6625,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            103 => 
            array (
                'id' => 604,
                'date' => '2021-08-07',
                'state' => 'Selangor',
                'rtk_ag' => 23481,
                'pcr' => 16975,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            104 => 
            array (
                'id' => 605,
                'date' => '2021-08-07',
                'state' => 'Terengganu',
                'rtk_ag' => 1520,
                'pcr' => 4117,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            105 => 
            array (
                'id' => 606,
                'date' => '2021-08-07',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5585,
                'pcr' => 8381,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            106 => 
            array (
                'id' => 607,
                'date' => '2021-08-07',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 226,
                'pcr' => 322,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            107 => 
            array (
                'id' => 608,
                'date' => '2021-08-07',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 125,
                'pcr' => 302,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            108 => 
            array (
                'id' => 609,
                'date' => '2021-08-08',
                'state' => 'Johor',
                'rtk_ag' => 8855,
                'pcr' => 8434,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            109 => 
            array (
                'id' => 610,
                'date' => '2021-08-08',
                'state' => 'Kedah',
                'rtk_ag' => 4925,
                'pcr' => 2856,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            110 => 
            array (
                'id' => 611,
                'date' => '2021-08-08',
                'state' => 'Kelantan',
                'rtk_ag' => 4449,
                'pcr' => 2080,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            111 => 
            array (
                'id' => 612,
                'date' => '2021-08-08',
                'state' => 'Melaka',
                'rtk_ag' => 1450,
                'pcr' => 2634,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            112 => 
            array (
                'id' => 613,
                'date' => '2021-08-08',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 1512,
                'pcr' => 1975,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            113 => 
            array (
                'id' => 614,
                'date' => '2021-08-08',
                'state' => 'Pahang',
                'rtk_ag' => 2185,
                'pcr' => 3718,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            114 => 
            array (
                'id' => 615,
                'date' => '2021-08-08',
                'state' => 'Perak',
                'rtk_ag' => 2605,
                'pcr' => 2595,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            115 => 
            array (
                'id' => 616,
                'date' => '2021-08-08',
                'state' => 'Perlis',
                'rtk_ag' => 223,
                'pcr' => 74,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            116 => 
            array (
                'id' => 617,
                'date' => '2021-08-08',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 4436,
                'pcr' => 3510,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            117 => 
            array (
                'id' => 618,
                'date' => '2021-08-08',
                'state' => 'Sabah',
                'rtk_ag' => 3831,
                'pcr' => 6140,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            118 => 
            array (
                'id' => 619,
                'date' => '2021-08-08',
                'state' => 'Sarawak',
                'rtk_ag' => 2308,
                'pcr' => 6966,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            119 => 
            array (
                'id' => 620,
                'date' => '2021-08-08',
                'state' => 'Selangor',
                'rtk_ag' => 16802,
                'pcr' => 12971,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            120 => 
            array (
                'id' => 621,
                'date' => '2021-08-08',
                'state' => 'Terengganu',
                'rtk_ag' => 2265,
                'pcr' => 4392,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            121 => 
            array (
                'id' => 622,
                'date' => '2021-08-08',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 3057,
                'pcr' => 4865,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            122 => 
            array (
                'id' => 623,
                'date' => '2021-08-08',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 414,
                'pcr' => 262,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            123 => 
            array (
                'id' => 624,
                'date' => '2021-08-08',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 84,
                'pcr' => 187,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            124 => 
            array (
                'id' => 625,
                'date' => '2021-08-09',
                'state' => 'Johor',
                'rtk_ag' => 9952,
                'pcr' => 6964,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            125 => 
            array (
                'id' => 626,
                'date' => '2021-08-09',
                'state' => 'Kedah',
                'rtk_ag' => 5749,
                'pcr' => 3966,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            126 => 
            array (
                'id' => 627,
                'date' => '2021-08-09',
                'state' => 'Kelantan',
                'rtk_ag' => 5207,
                'pcr' => 2358,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            127 => 
            array (
                'id' => 628,
                'date' => '2021-08-09',
                'state' => 'Melaka',
                'rtk_ag' => 2739,
                'pcr' => 1964,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            128 => 
            array (
                'id' => 629,
                'date' => '2021-08-09',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3498,
                'pcr' => 1544,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            129 => 
            array (
                'id' => 630,
                'date' => '2021-08-09',
                'state' => 'Pahang',
                'rtk_ag' => 3539,
                'pcr' => 4011,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            130 => 
            array (
                'id' => 631,
                'date' => '2021-08-09',
                'state' => 'Perak',
                'rtk_ag' => 4294,
                'pcr' => 3032,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            131 => 
            array (
                'id' => 632,
                'date' => '2021-08-09',
                'state' => 'Perlis',
                'rtk_ag' => 426,
                'pcr' => 48,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            132 => 
            array (
                'id' => 633,
                'date' => '2021-08-09',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 7057,
                'pcr' => 2751,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            133 => 
            array (
                'id' => 634,
                'date' => '2021-08-09',
                'state' => 'Sabah',
                'rtk_ag' => 6928,
                'pcr' => 5910,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            134 => 
            array (
                'id' => 635,
                'date' => '2021-08-09',
                'state' => 'Sarawak',
                'rtk_ag' => 1723,
                'pcr' => 7150,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            135 => 
            array (
                'id' => 636,
                'date' => '2021-08-09',
                'state' => 'Selangor',
                'rtk_ag' => 33032,
                'pcr' => 9926,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            136 => 
            array (
                'id' => 637,
                'date' => '2021-08-09',
                'state' => 'Terengganu',
                'rtk_ag' => 2279,
                'pcr' => 3343,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            137 => 
            array (
                'id' => 638,
                'date' => '2021-08-09',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 8960,
                'pcr' => 4253,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            138 => 
            array (
                'id' => 639,
                'date' => '2021-08-09',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 425,
                'pcr' => 69,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            139 => 
            array (
                'id' => 640,
                'date' => '2021-08-09',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 213,
                'pcr' => 252,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            140 => 
            array (
                'id' => 641,
                'date' => '2021-08-10',
                'state' => 'Johor',
                'rtk_ag' => 9446,
                'pcr' => 8548,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            141 => 
            array (
                'id' => 642,
                'date' => '2021-08-10',
                'state' => 'Kedah',
                'rtk_ag' => 3606,
                'pcr' => 3648,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            142 => 
            array (
                'id' => 643,
                'date' => '2021-08-10',
                'state' => 'Kelantan',
                'rtk_ag' => 2947,
                'pcr' => 1671,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            143 => 
            array (
                'id' => 644,
                'date' => '2021-08-10',
                'state' => 'Melaka',
                'rtk_ag' => 1842,
                'pcr' => 2400,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            144 => 
            array (
                'id' => 645,
                'date' => '2021-08-10',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 1954,
                'pcr' => 2321,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            145 => 
            array (
                'id' => 646,
                'date' => '2021-08-10',
                'state' => 'Pahang',
                'rtk_ag' => 1969,
                'pcr' => 4373,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            146 => 
            array (
                'id' => 647,
                'date' => '2021-08-10',
                'state' => 'Perak',
                'rtk_ag' => 2409,
                'pcr' => 4058,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            147 => 
            array (
                'id' => 648,
                'date' => '2021-08-10',
                'state' => 'Perlis',
                'rtk_ag' => 124,
                'pcr' => 105,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            148 => 
            array (
                'id' => 649,
                'date' => '2021-08-10',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 5716,
                'pcr' => 4098,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            149 => 
            array (
                'id' => 650,
                'date' => '2021-08-10',
                'state' => 'Sabah',
                'rtk_ag' => 4597,
                'pcr' => 5698,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            150 => 
            array (
                'id' => 651,
                'date' => '2021-08-10',
                'state' => 'Sarawak',
                'rtk_ag' => 1239,
                'pcr' => 10501,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            151 => 
            array (
                'id' => 652,
                'date' => '2021-08-10',
                'state' => 'Selangor',
                'rtk_ag' => 22847,
                'pcr' => 19068,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            152 => 
            array (
                'id' => 653,
                'date' => '2021-08-10',
                'state' => 'Terengganu',
                'rtk_ag' => 1342,
                'pcr' => 4863,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            153 => 
            array (
                'id' => 654,
                'date' => '2021-08-10',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4641,
                'pcr' => 7617,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            154 => 
            array (
                'id' => 655,
                'date' => '2021-08-10',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 162,
                'pcr' => 346,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            155 => 
            array (
                'id' => 656,
                'date' => '2021-08-10',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 59,
                'pcr' => 350,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            156 => 
            array (
                'id' => 657,
                'date' => '2021-08-11',
                'state' => 'Johor',
                'rtk_ag' => 10637,
                'pcr' => 8145,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            157 => 
            array (
                'id' => 658,
                'date' => '2021-08-11',
                'state' => 'Kedah',
                'rtk_ag' => 6669,
                'pcr' => 4240,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            158 => 
            array (
                'id' => 659,
                'date' => '2021-08-11',
                'state' => 'Kelantan',
                'rtk_ag' => 4804,
                'pcr' => 2373,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            159 => 
            array (
                'id' => 660,
                'date' => '2021-08-11',
                'state' => 'Melaka',
                'rtk_ag' => 2611,
                'pcr' => 2249,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            160 => 
            array (
                'id' => 661,
                'date' => '2021-08-11',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2922,
                'pcr' => 1673,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            161 => 
            array (
                'id' => 662,
                'date' => '2021-08-11',
                'state' => 'Pahang',
                'rtk_ag' => 3067,
                'pcr' => 5322,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            162 => 
            array (
                'id' => 663,
                'date' => '2021-08-11',
                'state' => 'Perak',
                'rtk_ag' => 4927,
                'pcr' => 2882,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            163 => 
            array (
                'id' => 664,
                'date' => '2021-08-11',
                'state' => 'Perlis',
                'rtk_ag' => 318,
                'pcr' => 102,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            164 => 
            array (
                'id' => 665,
                'date' => '2021-08-11',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 7425,
                'pcr' => 3009,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            165 => 
            array (
                'id' => 666,
                'date' => '2021-08-11',
                'state' => 'Sabah',
                'rtk_ag' => 7401,
                'pcr' => 6704,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            166 => 
            array (
                'id' => 667,
                'date' => '2021-08-11',
                'state' => 'Sarawak',
                'rtk_ag' => 2201,
                'pcr' => 12372,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            167 => 
            array (
                'id' => 668,
                'date' => '2021-08-11',
                'state' => 'Selangor',
                'rtk_ag' => 30236,
                'pcr' => 14588,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            168 => 
            array (
                'id' => 669,
                'date' => '2021-08-11',
                'state' => 'Terengganu',
                'rtk_ag' => 2258,
                'pcr' => 4133,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            169 => 
            array (
                'id' => 670,
                'date' => '2021-08-11',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 9198,
                'pcr' => 7085,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            170 => 
            array (
                'id' => 671,
                'date' => '2021-08-11',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 303,
                'pcr' => 164,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            171 => 
            array (
                'id' => 672,
                'date' => '2021-08-11',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 237,
                'pcr' => 237,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            172 => 
            array (
                'id' => 673,
                'date' => '2021-08-12',
                'state' => 'Johor',
                'rtk_ag' => 11670,
                'pcr' => 11468,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            173 => 
            array (
                'id' => 674,
                'date' => '2021-08-12',
                'state' => 'Kedah',
                'rtk_ag' => 6075,
                'pcr' => 4148,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            174 => 
            array (
                'id' => 675,
                'date' => '2021-08-12',
                'state' => 'Kelantan',
                'rtk_ag' => 5288,
                'pcr' => 2488,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            175 => 
            array (
                'id' => 676,
                'date' => '2021-08-12',
                'state' => 'Melaka',
                'rtk_ag' => 2930,
                'pcr' => 2711,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            176 => 
            array (
                'id' => 677,
                'date' => '2021-08-12',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2444,
                'pcr' => 2895,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            177 => 
            array (
                'id' => 678,
                'date' => '2021-08-12',
                'state' => 'Pahang',
                'rtk_ag' => 2640,
                'pcr' => 5318,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            178 => 
            array (
                'id' => 679,
                'date' => '2021-08-12',
                'state' => 'Perak',
                'rtk_ag' => 4930,
                'pcr' => 4270,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            179 => 
            array (
                'id' => 680,
                'date' => '2021-08-12',
                'state' => 'Perlis',
                'rtk_ag' => 327,
                'pcr' => 129,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            180 => 
            array (
                'id' => 681,
                'date' => '2021-08-12',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 8160,
                'pcr' => 4621,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            181 => 
            array (
                'id' => 682,
                'date' => '2021-08-12',
                'state' => 'Sabah',
                'rtk_ag' => 8239,
                'pcr' => 4833,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            182 => 
            array (
                'id' => 683,
                'date' => '2021-08-12',
                'state' => 'Sarawak',
                'rtk_ag' => 2167,
                'pcr' => 9313,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            183 => 
            array (
                'id' => 684,
                'date' => '2021-08-12',
                'state' => 'Selangor',
                'rtk_ag' => 28066,
                'pcr' => 21445,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            184 => 
            array (
                'id' => 685,
                'date' => '2021-08-12',
                'state' => 'Terengganu',
                'rtk_ag' => 2266,
                'pcr' => 3820,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            185 => 
            array (
                'id' => 686,
                'date' => '2021-08-12',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 7585,
                'pcr' => 9644,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            186 => 
            array (
                'id' => 687,
                'date' => '2021-08-12',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 318,
                'pcr' => 249,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            187 => 
            array (
                'id' => 688,
                'date' => '2021-08-12',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 353,
                'pcr' => 428,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            188 => 
            array (
                'id' => 689,
                'date' => '2021-08-13',
                'state' => 'Johor',
                'rtk_ag' => 9617,
                'pcr' => 11029,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            189 => 
            array (
                'id' => 690,
                'date' => '2021-08-13',
                'state' => 'Kedah',
                'rtk_ag' => 4262,
                'pcr' => 4240,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            190 => 
            array (
                'id' => 691,
                'date' => '2021-08-13',
                'state' => 'Kelantan',
                'rtk_ag' => 4590,
                'pcr' => 2696,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            191 => 
            array (
                'id' => 692,
                'date' => '2021-08-13',
                'state' => 'Melaka',
                'rtk_ag' => 2376,
                'pcr' => 3643,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            192 => 
            array (
                'id' => 693,
                'date' => '2021-08-13',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2881,
                'pcr' => 2395,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            193 => 
            array (
                'id' => 694,
                'date' => '2021-08-13',
                'state' => 'Pahang',
                'rtk_ag' => 2426,
                'pcr' => 5328,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            194 => 
            array (
                'id' => 695,
                'date' => '2021-08-13',
                'state' => 'Perak',
                'rtk_ag' => 5198,
                'pcr' => 3609,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            195 => 
            array (
                'id' => 696,
                'date' => '2021-08-13',
                'state' => 'Perlis',
                'rtk_ag' => 360,
                'pcr' => 132,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            196 => 
            array (
                'id' => 697,
                'date' => '2021-08-13',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 8732,
                'pcr' => 3808,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            197 => 
            array (
                'id' => 698,
                'date' => '2021-08-13',
                'state' => 'Sabah',
                'rtk_ag' => 7461,
                'pcr' => 6824,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            198 => 
            array (
                'id' => 699,
                'date' => '2021-08-13',
                'state' => 'Sarawak',
                'rtk_ag' => 1831,
                'pcr' => 7611,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            199 => 
            array (
                'id' => 700,
                'date' => '2021-08-13',
                'state' => 'Selangor',
                'rtk_ag' => 26078,
                'pcr' => 19986,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            200 => 
            array (
                'id' => 701,
                'date' => '2021-08-13',
                'state' => 'Terengganu',
                'rtk_ag' => 860,
                'pcr' => 3733,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            201 => 
            array (
                'id' => 702,
                'date' => '2021-08-13',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 7463,
                'pcr' => 7545,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            202 => 
            array (
                'id' => 703,
                'date' => '2021-08-13',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 293,
                'pcr' => 139,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            203 => 
            array (
                'id' => 704,
                'date' => '2021-08-13',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 167,
                'pcr' => 380,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            204 => 
            array (
                'id' => 705,
                'date' => '2021-08-14',
                'state' => 'Johor',
                'rtk_ag' => 9664,
                'pcr' => 10284,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            205 => 
            array (
                'id' => 706,
                'date' => '2021-08-14',
                'state' => 'Kedah',
                'rtk_ag' => 4473,
                'pcr' => 3511,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            206 => 
            array (
                'id' => 707,
                'date' => '2021-08-14',
                'state' => 'Kelantan',
                'rtk_ag' => 4309,
                'pcr' => 2106,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            207 => 
            array (
                'id' => 708,
                'date' => '2021-08-14',
                'state' => 'Melaka',
                'rtk_ag' => 1933,
                'pcr' => 3438,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            208 => 
            array (
                'id' => 709,
                'date' => '2021-08-14',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2261,
                'pcr' => 2600,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            209 => 
            array (
                'id' => 710,
                'date' => '2021-08-14',
                'state' => 'Pahang',
                'rtk_ag' => 2132,
                'pcr' => 5237,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            210 => 
            array (
                'id' => 711,
                'date' => '2021-08-14',
                'state' => 'Perak',
                'rtk_ag' => 4631,
                'pcr' => 3354,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            211 => 
            array (
                'id' => 712,
                'date' => '2021-08-14',
                'state' => 'Perlis',
                'rtk_ag' => 186,
                'pcr' => 123,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            212 => 
            array (
                'id' => 713,
                'date' => '2021-08-14',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 9234,
                'pcr' => 5130,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            213 => 
            array (
                'id' => 714,
                'date' => '2021-08-14',
                'state' => 'Sabah',
                'rtk_ag' => 6865,
                'pcr' => 9744,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            214 => 
            array (
                'id' => 715,
                'date' => '2021-08-14',
                'state' => 'Sarawak',
                'rtk_ag' => 2881,
                'pcr' => 6459,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            215 => 
            array (
                'id' => 716,
                'date' => '2021-08-14',
                'state' => 'Selangor',
                'rtk_ag' => 21336,
                'pcr' => 16792,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            216 => 
            array (
                'id' => 717,
                'date' => '2021-08-14',
                'state' => 'Terengganu',
                'rtk_ag' => 1570,
                'pcr' => 3327,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            217 => 
            array (
                'id' => 718,
                'date' => '2021-08-14',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4649,
                'pcr' => 7182,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            218 => 
            array (
                'id' => 719,
                'date' => '2021-08-14',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 289,
                'pcr' => 250,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            219 => 
            array (
                'id' => 720,
                'date' => '2021-08-14',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 71,
                'pcr' => 400,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            220 => 
            array (
                'id' => 721,
                'date' => '2021-08-15',
                'state' => 'Johor',
                'rtk_ag' => 10384,
                'pcr' => 8051,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            221 => 
            array (
                'id' => 722,
                'date' => '2021-08-15',
                'state' => 'Kedah',
                'rtk_ag' => 5490,
                'pcr' => 3835,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            222 => 
            array (
                'id' => 723,
                'date' => '2021-08-15',
                'state' => 'Kelantan',
                'rtk_ag' => 5972,
                'pcr' => 2140,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            223 => 
            array (
                'id' => 724,
                'date' => '2021-08-15',
                'state' => 'Melaka',
                'rtk_ag' => 1065,
                'pcr' => 2929,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            224 => 
            array (
                'id' => 725,
                'date' => '2021-08-15',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 1519,
                'pcr' => 2480,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            225 => 
            array (
                'id' => 726,
                'date' => '2021-08-15',
                'state' => 'Pahang',
                'rtk_ag' => 1724,
                'pcr' => 4825,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            226 => 
            array (
                'id' => 727,
                'date' => '2021-08-15',
                'state' => 'Perak',
                'rtk_ag' => 4223,
                'pcr' => 3114,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            227 => 
            array (
                'id' => 728,
                'date' => '2021-08-15',
                'state' => 'Perlis',
                'rtk_ag' => 270,
                'pcr' => 79,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            228 => 
            array (
                'id' => 729,
                'date' => '2021-08-15',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 6100,
                'pcr' => 3397,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            229 => 
            array (
                'id' => 730,
                'date' => '2021-08-15',
                'state' => 'Sabah',
                'rtk_ag' => 5079,
                'pcr' => 7746,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            230 => 
            array (
                'id' => 731,
                'date' => '2021-08-15',
                'state' => 'Sarawak',
                'rtk_ag' => 1587,
                'pcr' => 10632,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            231 => 
            array (
                'id' => 732,
                'date' => '2021-08-15',
                'state' => 'Selangor',
                'rtk_ag' => 14454,
                'pcr' => 13210,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            232 => 
            array (
                'id' => 733,
                'date' => '2021-08-15',
                'state' => 'Terengganu',
                'rtk_ag' => 2487,
                'pcr' => 3829,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            233 => 
            array (
                'id' => 734,
                'date' => '2021-08-15',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 3153,
                'pcr' => 4428,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            234 => 
            array (
                'id' => 735,
                'date' => '2021-08-15',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 281,
                'pcr' => 274,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            235 => 
            array (
                'id' => 736,
                'date' => '2021-08-15',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 61,
                'pcr' => 212,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            236 => 
            array (
                'id' => 737,
                'date' => '2021-08-16',
                'state' => 'Johor',
                'rtk_ag' => 11872,
                'pcr' => 8174,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            237 => 
            array (
                'id' => 738,
                'date' => '2021-08-16',
                'state' => 'Kedah',
                'rtk_ag' => 5358,
                'pcr' => 4406,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            238 => 
            array (
                'id' => 739,
                'date' => '2021-08-16',
                'state' => 'Kelantan',
                'rtk_ag' => 4795,
                'pcr' => 2908,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            239 => 
            array (
                'id' => 740,
                'date' => '2021-08-16',
                'state' => 'Melaka',
                'rtk_ag' => 2345,
                'pcr' => 2013,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            240 => 
            array (
                'id' => 741,
                'date' => '2021-08-16',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3216,
                'pcr' => 1214,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            241 => 
            array (
                'id' => 742,
                'date' => '2021-08-16',
                'state' => 'Pahang',
                'rtk_ag' => 2941,
                'pcr' => 4506,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            242 => 
            array (
                'id' => 743,
                'date' => '2021-08-16',
                'state' => 'Perak',
                'rtk_ag' => 7029,
                'pcr' => 2082,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            243 => 
            array (
                'id' => 744,
                'date' => '2021-08-16',
                'state' => 'Perlis',
                'rtk_ag' => 329,
                'pcr' => 116,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            244 => 
            array (
                'id' => 745,
                'date' => '2021-08-16',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 9644,
                'pcr' => 2491,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            245 => 
            array (
                'id' => 746,
                'date' => '2021-08-16',
                'state' => 'Sabah',
                'rtk_ag' => 8092,
                'pcr' => 7276,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            246 => 
            array (
                'id' => 747,
                'date' => '2021-08-16',
                'state' => 'Sarawak',
                'rtk_ag' => 2529,
                'pcr' => 7738,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            247 => 
            array (
                'id' => 748,
                'date' => '2021-08-16',
                'state' => 'Selangor',
                'rtk_ag' => 27535,
                'pcr' => 12632,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            248 => 
            array (
                'id' => 749,
                'date' => '2021-08-16',
                'state' => 'Terengganu',
                'rtk_ag' => 2559,
                'pcr' => 2619,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            249 => 
            array (
                'id' => 750,
                'date' => '2021-08-16',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 7316,
                'pcr' => 5521,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            250 => 
            array (
                'id' => 751,
                'date' => '2021-08-16',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 451,
                'pcr' => 52,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            251 => 
            array (
                'id' => 752,
                'date' => '2021-08-16',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 208,
                'pcr' => 190,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            252 => 
            array (
                'id' => 753,
                'date' => '2021-08-17',
                'state' => 'Johor',
                'rtk_ag' => 11416,
                'pcr' => 11641,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            253 => 
            array (
                'id' => 754,
                'date' => '2021-08-17',
                'state' => 'Kedah',
                'rtk_ag' => 5547,
                'pcr' => 4192,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            254 => 
            array (
                'id' => 755,
                'date' => '2021-08-17',
                'state' => 'Kelantan',
                'rtk_ag' => 4733,
                'pcr' => 2447,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            255 => 
            array (
                'id' => 756,
                'date' => '2021-08-17',
                'state' => 'Melaka',
                'rtk_ag' => 2356,
                'pcr' => 3957,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            256 => 
            array (
                'id' => 757,
                'date' => '2021-08-17',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3321,
                'pcr' => 2314,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            257 => 
            array (
                'id' => 758,
                'date' => '2021-08-17',
                'state' => 'Pahang',
                'rtk_ag' => 2601,
                'pcr' => 4893,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            258 => 
            array (
                'id' => 759,
                'date' => '2021-08-17',
                'state' => 'Perak',
                'rtk_ag' => 5501,
                'pcr' => 4653,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            259 => 
            array (
                'id' => 760,
                'date' => '2021-08-17',
                'state' => 'Perlis',
                'rtk_ag' => 367,
                'pcr' => 130,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            260 => 
            array (
                'id' => 761,
                'date' => '2021-08-17',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 9177,
                'pcr' => 5066,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            261 => 
            array (
                'id' => 762,
                'date' => '2021-08-17',
                'state' => 'Sabah',
                'rtk_ag' => 7877,
                'pcr' => 6854,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            262 => 
            array (
                'id' => 763,
                'date' => '2021-08-17',
                'state' => 'Sarawak',
                'rtk_ag' => 2028,
                'pcr' => 11802,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            263 => 
            array (
                'id' => 764,
                'date' => '2021-08-17',
                'state' => 'Selangor',
                'rtk_ag' => 25154,
                'pcr' => 20177,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            264 => 
            array (
                'id' => 765,
                'date' => '2021-08-17',
                'state' => 'Terengganu',
                'rtk_ag' => 1943,
                'pcr' => 2678,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            265 => 
            array (
                'id' => 766,
                'date' => '2021-08-17',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 6935,
                'pcr' => 8209,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            266 => 
            array (
                'id' => 767,
                'date' => '2021-08-17',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 263,
                'pcr' => 331,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            267 => 
            array (
                'id' => 768,
                'date' => '2021-08-17',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 190,
                'pcr' => 202,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            268 => 
            array (
                'id' => 769,
                'date' => '2021-08-18',
                'state' => 'Johor',
                'rtk_ag' => 11901,
                'pcr' => 11338,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            269 => 
            array (
                'id' => 770,
                'date' => '2021-08-18',
                'state' => 'Kedah',
                'rtk_ag' => 5810,
                'pcr' => 5114,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            270 => 
            array (
                'id' => 771,
                'date' => '2021-08-18',
                'state' => 'Kelantan',
                'rtk_ag' => 4412,
                'pcr' => 2601,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            271 => 
            array (
                'id' => 772,
                'date' => '2021-08-18',
                'state' => 'Melaka',
                'rtk_ag' => 1916,
                'pcr' => 2435,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            272 => 
            array (
                'id' => 773,
                'date' => '2021-08-18',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2906,
                'pcr' => 2132,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            273 => 
            array (
                'id' => 774,
                'date' => '2021-08-18',
                'state' => 'Pahang',
                'rtk_ag' => 2280,
                'pcr' => 5332,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            274 => 
            array (
                'id' => 775,
                'date' => '2021-08-18',
                'state' => 'Perak',
                'rtk_ag' => 5625,
                'pcr' => 3540,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            275 => 
            array (
                'id' => 776,
                'date' => '2021-08-18',
                'state' => 'Perlis',
                'rtk_ag' => 330,
                'pcr' => 247,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            276 => 
            array (
                'id' => 777,
                'date' => '2021-08-18',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 10038,
                'pcr' => 4838,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            277 => 
            array (
                'id' => 778,
                'date' => '2021-08-18',
                'state' => 'Sabah',
                'rtk_ag' => 7673,
                'pcr' => 6574,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            278 => 
            array (
                'id' => 779,
                'date' => '2021-08-18',
                'state' => 'Sarawak',
                'rtk_ag' => 2882,
                'pcr' => 10387,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            279 => 
            array (
                'id' => 780,
                'date' => '2021-08-18',
                'state' => 'Selangor',
                'rtk_ag' => 25204,
                'pcr' => 17493,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            280 => 
            array (
                'id' => 781,
                'date' => '2021-08-18',
                'state' => 'Terengganu',
                'rtk_ag' => 1741,
                'pcr' => 3667,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            281 => 
            array (
                'id' => 782,
                'date' => '2021-08-18',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5735,
                'pcr' => 6671,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            282 => 
            array (
                'id' => 783,
                'date' => '2021-08-18',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 234,
                'pcr' => 82,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            283 => 
            array (
                'id' => 784,
                'date' => '2021-08-18',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 142,
                'pcr' => 370,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            284 => 
            array (
                'id' => 785,
                'date' => '2021-08-19',
                'state' => 'Johor',
                'rtk_ag' => 11147,
                'pcr' => 11187,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            285 => 
            array (
                'id' => 786,
                'date' => '2021-08-19',
                'state' => 'Kedah',
                'rtk_ag' => 5950,
                'pcr' => 5282,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            286 => 
            array (
                'id' => 787,
                'date' => '2021-08-19',
                'state' => 'Kelantan',
                'rtk_ag' => 4201,
                'pcr' => 2360,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            287 => 
            array (
                'id' => 788,
                'date' => '2021-08-19',
                'state' => 'Melaka',
                'rtk_ag' => 1516,
                'pcr' => 3584,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            288 => 
            array (
                'id' => 789,
                'date' => '2021-08-19',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 1877,
                'pcr' => 2156,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            289 => 
            array (
                'id' => 790,
                'date' => '2021-08-19',
                'state' => 'Pahang',
                'rtk_ag' => 2791,
                'pcr' => 5151,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            290 => 
            array (
                'id' => 791,
                'date' => '2021-08-19',
                'state' => 'Perak',
                'rtk_ag' => 5137,
                'pcr' => 3116,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            291 => 
            array (
                'id' => 792,
                'date' => '2021-08-19',
                'state' => 'Perlis',
                'rtk_ag' => 378,
                'pcr' => 61,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            292 => 
            array (
                'id' => 793,
                'date' => '2021-08-19',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 8538,
                'pcr' => 4508,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            293 => 
            array (
                'id' => 794,
                'date' => '2021-08-19',
                'state' => 'Sabah',
                'rtk_ag' => 7166,
                'pcr' => 8849,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            294 => 
            array (
                'id' => 795,
                'date' => '2021-08-19',
                'state' => 'Sarawak',
                'rtk_ag' => 3366,
                'pcr' => 16760,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            295 => 
            array (
                'id' => 796,
                'date' => '2021-08-19',
                'state' => 'Selangor',
                'rtk_ag' => 21565,
                'pcr' => 17105,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            296 => 
            array (
                'id' => 797,
                'date' => '2021-08-19',
                'state' => 'Terengganu',
                'rtk_ag' => 1780,
                'pcr' => 3933,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            297 => 
            array (
                'id' => 798,
                'date' => '2021-08-19',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5713,
                'pcr' => 5928,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            298 => 
            array (
                'id' => 799,
                'date' => '2021-08-19',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 292,
                'pcr' => 97,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            299 => 
            array (
                'id' => 800,
                'date' => '2021-08-19',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 148,
                'pcr' => 216,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            300 => 
            array (
                'id' => 801,
                'date' => '2021-08-20',
                'state' => 'Johor',
                'rtk_ag' => 8821,
                'pcr' => 10304,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            301 => 
            array (
                'id' => 802,
                'date' => '2021-08-20',
                'state' => 'Kedah',
                'rtk_ag' => 5178,
                'pcr' => 5051,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            302 => 
            array (
                'id' => 803,
                'date' => '2021-08-20',
                'state' => 'Kelantan',
                'rtk_ag' => 2821,
                'pcr' => 2873,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            303 => 
            array (
                'id' => 804,
                'date' => '2021-08-20',
                'state' => 'Melaka',
                'rtk_ag' => 2163,
                'pcr' => 2226,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            304 => 
            array (
                'id' => 805,
                'date' => '2021-08-20',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2700,
                'pcr' => 2164,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            305 => 
            array (
                'id' => 806,
                'date' => '2021-08-20',
                'state' => 'Pahang',
                'rtk_ag' => 2008,
                'pcr' => 3968,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            306 => 
            array (
                'id' => 807,
                'date' => '2021-08-20',
                'state' => 'Perak',
                'rtk_ag' => 5031,
                'pcr' => 3423,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            307 => 
            array (
                'id' => 808,
                'date' => '2021-08-20',
                'state' => 'Perlis',
                'rtk_ag' => 236,
                'pcr' => 178,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            308 => 
            array (
                'id' => 809,
                'date' => '2021-08-20',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 8463,
                'pcr' => 3949,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            309 => 
            array (
                'id' => 810,
                'date' => '2021-08-20',
                'state' => 'Sabah',
                'rtk_ag' => 6616,
                'pcr' => 6791,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            310 => 
            array (
                'id' => 811,
                'date' => '2021-08-20',
                'state' => 'Sarawak',
                'rtk_ag' => 3620,
                'pcr' => 13282,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            311 => 
            array (
                'id' => 812,
                'date' => '2021-08-20',
                'state' => 'Selangor',
                'rtk_ag' => 22209,
                'pcr' => 16168,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            312 => 
            array (
                'id' => 813,
                'date' => '2021-08-20',
                'state' => 'Terengganu',
                'rtk_ag' => 1163,
                'pcr' => 3367,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            313 => 
            array (
                'id' => 814,
                'date' => '2021-08-20',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5029,
                'pcr' => 7239,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            314 => 
            array (
                'id' => 815,
                'date' => '2021-08-20',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 350,
                'pcr' => 111,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            315 => 
            array (
                'id' => 816,
                'date' => '2021-08-20',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 185,
                'pcr' => 176,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            316 => 
            array (
                'id' => 817,
                'date' => '2021-08-21',
                'state' => 'Johor',
                'rtk_ag' => 9212,
                'pcr' => 11626,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            317 => 
            array (
                'id' => 818,
                'date' => '2021-08-21',
                'state' => 'Kedah',
                'rtk_ag' => 4572,
                'pcr' => 4463,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            318 => 
            array (
                'id' => 819,
                'date' => '2021-08-21',
                'state' => 'Kelantan',
                'rtk_ag' => 3703,
                'pcr' => 2053,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            319 => 
            array (
                'id' => 820,
                'date' => '2021-08-21',
                'state' => 'Melaka',
                'rtk_ag' => 1195,
                'pcr' => 3267,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            320 => 
            array (
                'id' => 821,
                'date' => '2021-08-21',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 1456,
                'pcr' => 2215,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            321 => 
            array (
                'id' => 822,
                'date' => '2021-08-21',
                'state' => 'Pahang',
                'rtk_ag' => 2414,
                'pcr' => 3821,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            322 => 
            array (
                'id' => 823,
                'date' => '2021-08-21',
                'state' => 'Perak',
                'rtk_ag' => 4600,
                'pcr' => 3664,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            323 => 
            array (
                'id' => 824,
                'date' => '2021-08-21',
                'state' => 'Perlis',
                'rtk_ag' => 143,
                'pcr' => 150,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            324 => 
            array (
                'id' => 825,
                'date' => '2021-08-21',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 7785,
                'pcr' => 4726,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            325 => 
            array (
                'id' => 826,
                'date' => '2021-08-21',
                'state' => 'Sabah',
                'rtk_ag' => 5090,
                'pcr' => 7362,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            326 => 
            array (
                'id' => 827,
                'date' => '2021-08-21',
                'state' => 'Sarawak',
                'rtk_ag' => 2772,
                'pcr' => 9890,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            327 => 
            array (
                'id' => 828,
                'date' => '2021-08-21',
                'state' => 'Selangor',
                'rtk_ag' => 18606,
                'pcr' => 13065,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            328 => 
            array (
                'id' => 829,
                'date' => '2021-08-21',
                'state' => 'Terengganu',
                'rtk_ag' => 2641,
                'pcr' => 2925,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            329 => 
            array (
                'id' => 830,
                'date' => '2021-08-21',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 3828,
                'pcr' => 5575,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            330 => 
            array (
                'id' => 831,
                'date' => '2021-08-21',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 375,
                'pcr' => 71,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            331 => 
            array (
                'id' => 832,
                'date' => '2021-08-21',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 70,
                'pcr' => 167,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            332 => 
            array (
                'id' => 833,
                'date' => '2021-08-22',
                'state' => 'Johor',
                'rtk_ag' => 10544,
                'pcr' => 9101,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            333 => 
            array (
                'id' => 834,
                'date' => '2021-08-22',
                'state' => 'Kedah',
                'rtk_ag' => 4891,
                'pcr' => 3576,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            334 => 
            array (
                'id' => 835,
                'date' => '2021-08-22',
                'state' => 'Kelantan',
                'rtk_ag' => 4444,
                'pcr' => 2175,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            335 => 
            array (
                'id' => 836,
                'date' => '2021-08-22',
                'state' => 'Melaka',
                'rtk_ag' => 1210,
                'pcr' => 2246,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            336 => 
            array (
                'id' => 837,
                'date' => '2021-08-22',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 880,
                'pcr' => 1204,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            337 => 
            array (
                'id' => 838,
                'date' => '2021-08-22',
                'state' => 'Pahang',
                'rtk_ag' => 1453,
                'pcr' => 4403,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            338 => 
            array (
                'id' => 839,
                'date' => '2021-08-22',
                'state' => 'Perak',
                'rtk_ag' => 3368,
                'pcr' => 2933,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            339 => 
            array (
                'id' => 840,
                'date' => '2021-08-22',
                'state' => 'Perlis',
                'rtk_ag' => 192,
                'pcr' => 205,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            340 => 
            array (
                'id' => 841,
                'date' => '2021-08-22',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 6563,
                'pcr' => 2346,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            341 => 
            array (
                'id' => 842,
                'date' => '2021-08-22',
                'state' => 'Sabah',
                'rtk_ag' => 4723,
                'pcr' => 6595,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            342 => 
            array (
                'id' => 843,
                'date' => '2021-08-22',
                'state' => 'Sarawak',
                'rtk_ag' => 3392,
                'pcr' => 12190,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            343 => 
            array (
                'id' => 844,
                'date' => '2021-08-22',
                'state' => 'Selangor',
                'rtk_ag' => 13281,
                'pcr' => 11060,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            344 => 
            array (
                'id' => 845,
                'date' => '2021-08-22',
                'state' => 'Terengganu',
                'rtk_ag' => 2844,
                'pcr' => 3345,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            345 => 
            array (
                'id' => 846,
                'date' => '2021-08-22',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 2510,
                'pcr' => 3534,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            346 => 
            array (
                'id' => 847,
                'date' => '2021-08-22',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 381,
                'pcr' => 133,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            347 => 
            array (
                'id' => 848,
                'date' => '2021-08-22',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 76,
                'pcr' => 103,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            348 => 
            array (
                'id' => 849,
                'date' => '2021-08-23',
                'state' => 'Johor',
                'rtk_ag' => 13182,
                'pcr' => 7466,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            349 => 
            array (
                'id' => 850,
                'date' => '2021-08-23',
                'state' => 'Kedah',
                'rtk_ag' => 5824,
                'pcr' => 3810,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            350 => 
            array (
                'id' => 851,
                'date' => '2021-08-23',
                'state' => 'Kelantan',
                'rtk_ag' => 4183,
                'pcr' => 3412,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            351 => 
            array (
                'id' => 852,
                'date' => '2021-08-23',
                'state' => 'Melaka',
                'rtk_ag' => 2041,
                'pcr' => 1545,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            352 => 
            array (
                'id' => 853,
                'date' => '2021-08-23',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3195,
                'pcr' => 1150,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            353 => 
            array (
                'id' => 854,
                'date' => '2021-08-23',
                'state' => 'Pahang',
                'rtk_ag' => 2757,
                'pcr' => 4711,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            354 => 
            array (
                'id' => 855,
                'date' => '2021-08-23',
                'state' => 'Perak',
                'rtk_ag' => 5720,
                'pcr' => 2325,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            355 => 
            array (
                'id' => 856,
                'date' => '2021-08-23',
                'state' => 'Perlis',
                'rtk_ag' => 207,
                'pcr' => 94,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            356 => 
            array (
                'id' => 857,
                'date' => '2021-08-23',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 8407,
                'pcr' => 2141,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            357 => 
            array (
                'id' => 858,
                'date' => '2021-08-23',
                'state' => 'Sabah',
                'rtk_ag' => 7738,
                'pcr' => 6080,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            358 => 
            array (
                'id' => 859,
                'date' => '2021-08-23',
                'state' => 'Sarawak',
                'rtk_ag' => 3650,
                'pcr' => 9470,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            359 => 
            array (
                'id' => 860,
                'date' => '2021-08-23',
                'state' => 'Selangor',
                'rtk_ag' => 28344,
                'pcr' => 11308,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            360 => 
            array (
                'id' => 861,
                'date' => '2021-08-23',
                'state' => 'Terengganu',
                'rtk_ag' => 2156,
                'pcr' => 2106,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            361 => 
            array (
                'id' => 862,
                'date' => '2021-08-23',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 6198,
                'pcr' => 4823,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            362 => 
            array (
                'id' => 863,
                'date' => '2021-08-23',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 320,
                'pcr' => 72,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            363 => 
            array (
                'id' => 864,
                'date' => '2021-08-23',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 264,
                'pcr' => 156,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            364 => 
            array (
                'id' => 865,
                'date' => '2021-08-24',
                'state' => 'Johor',
                'rtk_ag' => 11657,
                'pcr' => 12666,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            365 => 
            array (
                'id' => 866,
                'date' => '2021-08-24',
                'state' => 'Kedah',
                'rtk_ag' => 5444,
                'pcr' => 4440,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            366 => 
            array (
                'id' => 867,
                'date' => '2021-08-24',
                'state' => 'Kelantan',
                'rtk_ag' => 4334,
                'pcr' => 2837,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            367 => 
            array (
                'id' => 868,
                'date' => '2021-08-24',
                'state' => 'Melaka',
                'rtk_ag' => 1265,
                'pcr' => 2137,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            368 => 
            array (
                'id' => 869,
                'date' => '2021-08-24',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2636,
                'pcr' => 3279,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            369 => 
            array (
                'id' => 870,
                'date' => '2021-08-24',
                'state' => 'Pahang',
                'rtk_ag' => 2757,
                'pcr' => 6592,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            370 => 
            array (
                'id' => 871,
                'date' => '2021-08-24',
                'state' => 'Perak',
                'rtk_ag' => 5172,
                'pcr' => 4253,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            371 => 
            array (
                'id' => 872,
                'date' => '2021-08-24',
                'state' => 'Perlis',
                'rtk_ag' => 164,
                'pcr' => 174,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            372 => 
            array (
                'id' => 873,
                'date' => '2021-08-24',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 10775,
                'pcr' => 4777,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            373 => 
            array (
                'id' => 874,
                'date' => '2021-08-24',
                'state' => 'Sabah',
                'rtk_ag' => 7350,
                'pcr' => 5072,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            374 => 
            array (
                'id' => 875,
                'date' => '2021-08-24',
                'state' => 'Sarawak',
                'rtk_ag' => 2721,
                'pcr' => 11303,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            375 => 
            array (
                'id' => 876,
                'date' => '2021-08-24',
                'state' => 'Selangor',
                'rtk_ag' => 28652,
                'pcr' => 16141,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            376 => 
            array (
                'id' => 877,
                'date' => '2021-08-24',
                'state' => 'Terengganu',
                'rtk_ag' => 1814,
                'pcr' => 3890,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            377 => 
            array (
                'id' => 878,
                'date' => '2021-08-24',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 6513,
                'pcr' => 7813,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            378 => 
            array (
                'id' => 879,
                'date' => '2021-08-24',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 197,
                'pcr' => 298,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            379 => 
            array (
                'id' => 880,
                'date' => '2021-08-24',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 177,
                'pcr' => 222,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            380 => 
            array (
                'id' => 881,
                'date' => '2021-08-25',
                'state' => 'Johor',
                'rtk_ag' => 12850,
                'pcr' => 12068,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            381 => 
            array (
                'id' => 882,
                'date' => '2021-08-25',
                'state' => 'Kedah',
                'rtk_ag' => 5306,
                'pcr' => 3728,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            382 => 
            array (
                'id' => 883,
                'date' => '2021-08-25',
                'state' => 'Kelantan',
                'rtk_ag' => 4276,
                'pcr' => 2830,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            383 => 
            array (
                'id' => 884,
                'date' => '2021-08-25',
                'state' => 'Melaka',
                'rtk_ag' => 1953,
                'pcr' => 1699,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            384 => 
            array (
                'id' => 885,
                'date' => '2021-08-25',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 4338,
                'pcr' => 1895,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            385 => 
            array (
                'id' => 886,
                'date' => '2021-08-25',
                'state' => 'Pahang',
                'rtk_ag' => 2755,
                'pcr' => 4466,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            386 => 
            array (
                'id' => 887,
                'date' => '2021-08-25',
                'state' => 'Perak',
                'rtk_ag' => 6447,
                'pcr' => 2973,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            387 => 
            array (
                'id' => 888,
                'date' => '2021-08-25',
                'state' => 'Perlis',
                'rtk_ag' => 169,
                'pcr' => 187,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            388 => 
            array (
                'id' => 889,
                'date' => '2021-08-25',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 9877,
                'pcr' => 4778,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            389 => 
            array (
                'id' => 890,
                'date' => '2021-08-25',
                'state' => 'Sabah',
                'rtk_ag' => 7252,
                'pcr' => 5728,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            390 => 
            array (
                'id' => 891,
                'date' => '2021-08-25',
                'state' => 'Sarawak',
                'rtk_ag' => 4009,
                'pcr' => 10941,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            391 => 
            array (
                'id' => 892,
                'date' => '2021-08-25',
                'state' => 'Selangor',
                'rtk_ag' => 23821,
                'pcr' => 16204,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            392 => 
            array (
                'id' => 893,
                'date' => '2021-08-25',
                'state' => 'Terengganu',
                'rtk_ag' => 1661,
                'pcr' => 3155,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            393 => 
            array (
                'id' => 894,
                'date' => '2021-08-25',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4775,
                'pcr' => 7070,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            394 => 
            array (
                'id' => 895,
                'date' => '2021-08-25',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 481,
                'pcr' => 258,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            395 => 
            array (
                'id' => 896,
                'date' => '2021-08-25',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 197,
                'pcr' => 166,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            396 => 
            array (
                'id' => 897,
                'date' => '2021-08-26',
                'state' => 'Johor',
                'rtk_ag' => 12168,
                'pcr' => 10552,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            397 => 
            array (
                'id' => 898,
                'date' => '2021-08-26',
                'state' => 'Kedah',
                'rtk_ag' => 4261,
                'pcr' => 4515,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            398 => 
            array (
                'id' => 899,
                'date' => '2021-08-26',
                'state' => 'Kelantan',
                'rtk_ag' => 3359,
                'pcr' => 2525,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            399 => 
            array (
                'id' => 900,
                'date' => '2021-08-26',
                'state' => 'Melaka',
                'rtk_ag' => 1916,
                'pcr' => 1706,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            400 => 
            array (
                'id' => 901,
                'date' => '2021-08-26',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2467,
                'pcr' => 1608,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            401 => 
            array (
                'id' => 902,
                'date' => '2021-08-26',
                'state' => 'Pahang',
                'rtk_ag' => 2745,
                'pcr' => 5090,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            402 => 
            array (
                'id' => 903,
                'date' => '2021-08-26',
                'state' => 'Perak',
                'rtk_ag' => 4301,
                'pcr' => 4388,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            403 => 
            array (
                'id' => 904,
                'date' => '2021-08-26',
                'state' => 'Perlis',
                'rtk_ag' => 297,
                'pcr' => 132,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            404 => 
            array (
                'id' => 905,
                'date' => '2021-08-26',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 10234,
                'pcr' => 3717,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            405 => 
            array (
                'id' => 906,
                'date' => '2021-08-26',
                'state' => 'Sabah',
                'rtk_ag' => 7641,
                'pcr' => 4996,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            406 => 
            array (
                'id' => 907,
                'date' => '2021-08-26',
                'state' => 'Sarawak',
                'rtk_ag' => 3525,
                'pcr' => 11209,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            407 => 
            array (
                'id' => 908,
                'date' => '2021-08-26',
                'state' => 'Selangor',
                'rtk_ag' => 21864,
                'pcr' => 12177,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            408 => 
            array (
                'id' => 909,
                'date' => '2021-08-26',
                'state' => 'Terengganu',
                'rtk_ag' => 2122,
                'pcr' => 3017,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            409 => 
            array (
                'id' => 910,
                'date' => '2021-08-26',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4966,
                'pcr' => 6606,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            410 => 
            array (
                'id' => 911,
                'date' => '2021-08-26',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 293,
                'pcr' => 233,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            411 => 
            array (
                'id' => 912,
                'date' => '2021-08-26',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 185,
                'pcr' => 264,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            412 => 
            array (
                'id' => 913,
                'date' => '2021-08-27',
                'state' => 'Johor',
                'rtk_ag' => 10439,
                'pcr' => 10684,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            413 => 
            array (
                'id' => 914,
                'date' => '2021-08-27',
                'state' => 'Kedah',
                'rtk_ag' => 4596,
                'pcr' => 4171,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            414 => 
            array (
                'id' => 915,
                'date' => '2021-08-27',
                'state' => 'Kelantan',
                'rtk_ag' => 2125,
                'pcr' => 2858,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            415 => 
            array (
                'id' => 916,
                'date' => '2021-08-27',
                'state' => 'Melaka',
                'rtk_ag' => 1864,
                'pcr' => 2974,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            416 => 
            array (
                'id' => 917,
                'date' => '2021-08-27',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2996,
                'pcr' => 1544,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            417 => 
            array (
                'id' => 918,
                'date' => '2021-08-27',
                'state' => 'Pahang',
                'rtk_ag' => 2921,
                'pcr' => 5166,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            418 => 
            array (
                'id' => 919,
                'date' => '2021-08-27',
                'state' => 'Perak',
                'rtk_ag' => 5030,
                'pcr' => 3410,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            419 => 
            array (
                'id' => 920,
                'date' => '2021-08-27',
                'state' => 'Perlis',
                'rtk_ag' => 175,
                'pcr' => 194,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            420 => 
            array (
                'id' => 921,
                'date' => '2021-08-27',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 10226,
                'pcr' => 4096,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            421 => 
            array (
                'id' => 922,
                'date' => '2021-08-27',
                'state' => 'Sabah',
                'rtk_ag' => 6964,
                'pcr' => 5736,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            422 => 
            array (
                'id' => 923,
                'date' => '2021-08-27',
                'state' => 'Sarawak',
                'rtk_ag' => 4323,
                'pcr' => 12024,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            423 => 
            array (
                'id' => 924,
                'date' => '2021-08-27',
                'state' => 'Selangor',
                'rtk_ag' => 21003,
                'pcr' => 12672,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            424 => 
            array (
                'id' => 925,
                'date' => '2021-08-27',
                'state' => 'Terengganu',
                'rtk_ag' => 1291,
                'pcr' => 4148,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            425 => 
            array (
                'id' => 926,
                'date' => '2021-08-27',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5129,
                'pcr' => 4935,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            426 => 
            array (
                'id' => 927,
                'date' => '2021-08-27',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 340,
                'pcr' => 105,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            427 => 
            array (
                'id' => 928,
                'date' => '2021-08-27',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 184,
                'pcr' => 259,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            428 => 
            array (
                'id' => 929,
                'date' => '2021-08-28',
                'state' => 'Johor',
                'rtk_ag' => 10089,
                'pcr' => 9866,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            429 => 
            array (
                'id' => 930,
                'date' => '2021-08-28',
                'state' => 'Kedah',
                'rtk_ag' => 3840,
                'pcr' => 3880,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            430 => 
            array (
                'id' => 931,
                'date' => '2021-08-28',
                'state' => 'Kelantan',
                'rtk_ag' => 3000,
                'pcr' => 2442,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            431 => 
            array (
                'id' => 932,
                'date' => '2021-08-28',
                'state' => 'Melaka',
                'rtk_ag' => 1320,
                'pcr' => 2006,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            432 => 
            array (
                'id' => 933,
                'date' => '2021-08-28',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2110,
                'pcr' => 1608,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            433 => 
            array (
                'id' => 934,
                'date' => '2021-08-28',
                'state' => 'Pahang',
                'rtk_ag' => 2216,
                'pcr' => 4053,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            434 => 
            array (
                'id' => 935,
                'date' => '2021-08-28',
                'state' => 'Perak',
                'rtk_ag' => 3356,
                'pcr' => 3372,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            435 => 
            array (
                'id' => 936,
                'date' => '2021-08-28',
                'state' => 'Perlis',
                'rtk_ag' => 107,
                'pcr' => 158,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            436 => 
            array (
                'id' => 937,
                'date' => '2021-08-28',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 7664,
                'pcr' => 5057,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            437 => 
            array (
                'id' => 938,
                'date' => '2021-08-28',
                'state' => 'Sabah',
                'rtk_ag' => 5640,
                'pcr' => 6201,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            438 => 
            array (
                'id' => 939,
                'date' => '2021-08-28',
                'state' => 'Sarawak',
                'rtk_ag' => 4636,
                'pcr' => 12368,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            439 => 
            array (
                'id' => 940,
                'date' => '2021-08-28',
                'state' => 'Selangor',
                'rtk_ag' => 13930,
                'pcr' => 11236,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            440 => 
            array (
                'id' => 941,
                'date' => '2021-08-28',
                'state' => 'Terengganu',
                'rtk_ag' => 2324,
                'pcr' => 3210,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            441 => 
            array (
                'id' => 942,
                'date' => '2021-08-28',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 3034,
                'pcr' => 5265,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            442 => 
            array (
                'id' => 943,
                'date' => '2021-08-28',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 389,
                'pcr' => 128,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            443 => 
            array (
                'id' => 944,
                'date' => '2021-08-28',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 53,
                'pcr' => 246,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            444 => 
            array (
                'id' => 945,
                'date' => '2021-08-29',
                'state' => 'Johor',
                'rtk_ag' => 11579,
                'pcr' => 8369,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            445 => 
            array (
                'id' => 946,
                'date' => '2021-08-29',
                'state' => 'Kedah',
                'rtk_ag' => 4510,
                'pcr' => 4392,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            446 => 
            array (
                'id' => 947,
                'date' => '2021-08-29',
                'state' => 'Kelantan',
                'rtk_ag' => 2954,
                'pcr' => 2221,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            447 => 
            array (
                'id' => 948,
                'date' => '2021-08-29',
                'state' => 'Melaka',
                'rtk_ag' => 1013,
                'pcr' => 1043,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            448 => 
            array (
                'id' => 949,
                'date' => '2021-08-29',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 1708,
                'pcr' => 829,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            449 => 
            array (
                'id' => 950,
                'date' => '2021-08-29',
                'state' => 'Pahang',
                'rtk_ag' => 1664,
                'pcr' => 4115,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            450 => 
            array (
                'id' => 951,
                'date' => '2021-08-29',
                'state' => 'Perak',
                'rtk_ag' => 2892,
                'pcr' => 2254,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            451 => 
            array (
                'id' => 952,
                'date' => '2021-08-29',
                'state' => 'Perlis',
                'rtk_ag' => 207,
                'pcr' => 151,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            452 => 
            array (
                'id' => 953,
                'date' => '2021-08-29',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 4042,
                'pcr' => 1659,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            453 => 
            array (
                'id' => 954,
                'date' => '2021-08-29',
                'state' => 'Sabah',
                'rtk_ag' => 4076,
                'pcr' => 4386,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            454 => 
            array (
                'id' => 955,
                'date' => '2021-08-29',
                'state' => 'Sarawak',
                'rtk_ag' => 3103,
                'pcr' => 10662,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            455 => 
            array (
                'id' => 956,
                'date' => '2021-08-29',
                'state' => 'Selangor',
                'rtk_ag' => 10402,
                'pcr' => 7923,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            456 => 
            array (
                'id' => 957,
                'date' => '2021-08-29',
                'state' => 'Terengganu',
                'rtk_ag' => 3340,
                'pcr' => 3228,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            457 => 
            array (
                'id' => 958,
                'date' => '2021-08-29',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 2758,
                'pcr' => 2618,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            458 => 
            array (
                'id' => 959,
                'date' => '2021-08-29',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 144,
                'pcr' => 199,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            459 => 
            array (
                'id' => 960,
                'date' => '2021-08-29',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 70,
                'pcr' => 181,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            460 => 
            array (
                'id' => 961,
                'date' => '2021-08-30',
                'state' => 'Johor',
                'rtk_ag' => 12963,
                'pcr' => 8582,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            461 => 
            array (
                'id' => 962,
                'date' => '2021-08-30',
                'state' => 'Kedah',
                'rtk_ag' => 5009,
                'pcr' => 4073,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            462 => 
            array (
                'id' => 963,
                'date' => '2021-08-30',
                'state' => 'Kelantan',
                'rtk_ag' => 2931,
                'pcr' => 3276,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            463 => 
            array (
                'id' => 964,
                'date' => '2021-08-30',
                'state' => 'Melaka',
                'rtk_ag' => 2578,
                'pcr' => 1557,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            464 => 
            array (
                'id' => 965,
                'date' => '2021-08-30',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 4170,
                'pcr' => 1282,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            465 => 
            array (
                'id' => 966,
                'date' => '2021-08-30',
                'state' => 'Pahang',
                'rtk_ag' => 3181,
                'pcr' => 4790,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            466 => 
            array (
                'id' => 967,
                'date' => '2021-08-30',
                'state' => 'Perak',
                'rtk_ag' => 4711,
                'pcr' => 2026,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            467 => 
            array (
                'id' => 968,
                'date' => '2021-08-30',
                'state' => 'Perlis',
                'rtk_ag' => 196,
                'pcr' => 89,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            468 => 
            array (
                'id' => 969,
                'date' => '2021-08-30',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 8502,
                'pcr' => 2800,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            469 => 
            array (
                'id' => 970,
                'date' => '2021-08-30',
                'state' => 'Sabah',
                'rtk_ag' => 8133,
                'pcr' => 3218,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            470 => 
            array (
                'id' => 971,
                'date' => '2021-08-30',
                'state' => 'Sarawak',
                'rtk_ag' => 7149,
                'pcr' => 10830,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            471 => 
            array (
                'id' => 972,
                'date' => '2021-08-30',
                'state' => 'Selangor',
                'rtk_ag' => 24784,
                'pcr' => 11085,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            472 => 
            array (
                'id' => 973,
                'date' => '2021-08-30',
                'state' => 'Terengganu',
                'rtk_ag' => 2724,
                'pcr' => 2705,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            473 => 
            array (
                'id' => 974,
                'date' => '2021-08-30',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5874,
                'pcr' => 6225,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            474 => 
            array (
                'id' => 975,
                'date' => '2021-08-30',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 338,
                'pcr' => 120,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            475 => 
            array (
                'id' => 976,
                'date' => '2021-08-30',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 271,
                'pcr' => 235,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            476 => 
            array (
                'id' => 977,
                'date' => '2021-08-31',
                'state' => 'Johor',
                'rtk_ag' => 8119,
                'pcr' => 10228,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            477 => 
            array (
                'id' => 978,
                'date' => '2021-08-31',
                'state' => 'Kedah',
                'rtk_ag' => 2535,
                'pcr' => 3642,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            478 => 
            array (
                'id' => 979,
                'date' => '2021-08-31',
                'state' => 'Kelantan',
                'rtk_ag' => 1832,
                'pcr' => 3012,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            479 => 
            array (
                'id' => 980,
                'date' => '2021-08-31',
                'state' => 'Melaka',
                'rtk_ag' => 2707,
                'pcr' => 1179,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            480 => 
            array (
                'id' => 981,
                'date' => '2021-08-31',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 1608,
                'pcr' => 1555,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            481 => 
            array (
                'id' => 982,
                'date' => '2021-08-31',
                'state' => 'Pahang',
                'rtk_ag' => 1267,
                'pcr' => 3105,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            482 => 
            array (
                'id' => 983,
                'date' => '2021-08-31',
                'state' => 'Perak',
                'rtk_ag' => 2287,
                'pcr' => 2657,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            483 => 
            array (
                'id' => 984,
                'date' => '2021-08-31',
                'state' => 'Perlis',
                'rtk_ag' => 148,
                'pcr' => 248,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            484 => 
            array (
                'id' => 985,
                'date' => '2021-08-31',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 6086,
                'pcr' => 3990,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            485 => 
            array (
                'id' => 986,
                'date' => '2021-08-31',
                'state' => 'Sabah',
                'rtk_ag' => 4157,
                'pcr' => 4335,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            486 => 
            array (
                'id' => 987,
                'date' => '2021-08-31',
                'state' => 'Sarawak',
                'rtk_ag' => 4493,
                'pcr' => 11107,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            487 => 
            array (
                'id' => 988,
                'date' => '2021-08-31',
                'state' => 'Selangor',
                'rtk_ag' => 16278,
                'pcr' => 14598,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            488 => 
            array (
                'id' => 989,
                'date' => '2021-08-31',
                'state' => 'Terengganu',
                'rtk_ag' => 1345,
                'pcr' => 3094,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            489 => 
            array (
                'id' => 990,
                'date' => '2021-08-31',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 2461,
                'pcr' => 3960,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            490 => 
            array (
                'id' => 991,
                'date' => '2021-08-31',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 170,
                'pcr' => 259,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            491 => 
            array (
                'id' => 992,
                'date' => '2021-08-31',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 80,
                'pcr' => 156,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            492 => 
            array (
                'id' => 993,
                'date' => '2021-09-01',
                'state' => 'Johor',
                'rtk_ag' => 13669,
                'pcr' => 11222,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            493 => 
            array (
                'id' => 994,
                'date' => '2021-09-01',
                'state' => 'Kedah',
                'rtk_ag' => 5042,
                'pcr' => 5018,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            494 => 
            array (
                'id' => 995,
                'date' => '2021-09-01',
                'state' => 'Kelantan',
                'rtk_ag' => 2354,
                'pcr' => 1938,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            495 => 
            array (
                'id' => 996,
                'date' => '2021-09-01',
                'state' => 'Melaka',
                'rtk_ag' => 2583,
                'pcr' => 2051,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            496 => 
            array (
                'id' => 997,
                'date' => '2021-09-01',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3167,
                'pcr' => 1397,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            497 => 
            array (
                'id' => 998,
                'date' => '2021-09-01',
                'state' => 'Pahang',
                'rtk_ag' => 3142,
                'pcr' => 4422,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            498 => 
            array (
                'id' => 999,
                'date' => '2021-09-01',
                'state' => 'Perak',
                'rtk_ag' => 5035,
                'pcr' => 2451,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            499 => 
            array (
                'id' => 1000,
                'date' => '2021-09-01',
                'state' => 'Perlis',
                'rtk_ag' => 187,
                'pcr' => 143,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
        ));
        \DB::table('test_states')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'date' => '2021-09-01',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 9028,
                'pcr' => 2596,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            1 => 
            array (
                'id' => 1002,
                'date' => '2021-09-01',
                'state' => 'Sabah',
                'rtk_ag' => 7068,
                'pcr' => 3575,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            2 => 
            array (
                'id' => 1003,
                'date' => '2021-09-01',
                'state' => 'Sarawak',
                'rtk_ag' => 7236,
                'pcr' => 12457,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            3 => 
            array (
                'id' => 1004,
                'date' => '2021-09-01',
                'state' => 'Selangor',
                'rtk_ag' => 27504,
                'pcr' => 11435,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            4 => 
            array (
                'id' => 1005,
                'date' => '2021-09-01',
                'state' => 'Terengganu',
                'rtk_ag' => 1992,
                'pcr' => 4931,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            5 => 
            array (
                'id' => 1006,
                'date' => '2021-09-01',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 7549,
                'pcr' => 4951,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            6 => 
            array (
                'id' => 1007,
                'date' => '2021-09-01',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 360,
                'pcr' => 212,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            7 => 
            array (
                'id' => 1008,
                'date' => '2021-09-01',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 267,
                'pcr' => 244,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            8 => 
            array (
                'id' => 1009,
                'date' => '2021-09-02',
                'state' => 'Johor',
                'rtk_ag' => 14621,
                'pcr' => 11264,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            9 => 
            array (
                'id' => 1010,
                'date' => '2021-09-02',
                'state' => 'Kedah',
                'rtk_ag' => 4880,
                'pcr' => 3353,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            10 => 
            array (
                'id' => 1011,
                'date' => '2021-09-02',
                'state' => 'Kelantan',
                'rtk_ag' => 2420,
                'pcr' => 2753,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            11 => 
            array (
                'id' => 1012,
                'date' => '2021-09-02',
                'state' => 'Melaka',
                'rtk_ag' => 3468,
                'pcr' => 1531,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            12 => 
            array (
                'id' => 1013,
                'date' => '2021-09-02',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2952,
                'pcr' => 2140,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            13 => 
            array (
                'id' => 1014,
                'date' => '2021-09-02',
                'state' => 'Pahang',
                'rtk_ag' => 2495,
                'pcr' => 3949,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            14 => 
            array (
                'id' => 1015,
                'date' => '2021-09-02',
                'state' => 'Perak',
                'rtk_ag' => 5133,
                'pcr' => 3035,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            15 => 
            array (
                'id' => 1016,
                'date' => '2021-09-02',
                'state' => 'Perlis',
                'rtk_ag' => 221,
                'pcr' => 163,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            16 => 
            array (
                'id' => 1017,
                'date' => '2021-09-02',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 9078,
                'pcr' => 4257,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            17 => 
            array (
                'id' => 1018,
                'date' => '2021-09-02',
                'state' => 'Sabah',
                'rtk_ag' => 6986,
                'pcr' => 3858,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            18 => 
            array (
                'id' => 1019,
                'date' => '2021-09-02',
                'state' => 'Sarawak',
                'rtk_ag' => 8606,
                'pcr' => 12328,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            19 => 
            array (
                'id' => 1020,
                'date' => '2021-09-02',
                'state' => 'Selangor',
                'rtk_ag' => 20690,
                'pcr' => 13185,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            20 => 
            array (
                'id' => 1021,
                'date' => '2021-09-02',
                'state' => 'Terengganu',
                'rtk_ag' => 2414,
                'pcr' => 3248,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            21 => 
            array (
                'id' => 1022,
                'date' => '2021-09-02',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5646,
                'pcr' => 4649,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            22 => 
            array (
                'id' => 1023,
                'date' => '2021-09-02',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 439,
                'pcr' => 128,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            23 => 
            array (
                'id' => 1024,
                'date' => '2021-09-02',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 183,
                'pcr' => 194,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            24 => 
            array (
                'id' => 1025,
                'date' => '2021-09-03',
                'state' => 'Johor',
                'rtk_ag' => 9488,
                'pcr' => 10373,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            25 => 
            array (
                'id' => 1026,
                'date' => '2021-09-03',
                'state' => 'Kedah',
                'rtk_ag' => 3879,
                'pcr' => 3522,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            26 => 
            array (
                'id' => 1027,
                'date' => '2021-09-03',
                'state' => 'Kelantan',
                'rtk_ag' => 1687,
                'pcr' => 3043,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            27 => 
            array (
                'id' => 1028,
                'date' => '2021-09-03',
                'state' => 'Melaka',
                'rtk_ag' => 1845,
                'pcr' => 1420,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            28 => 
            array (
                'id' => 1029,
                'date' => '2021-09-03',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2093,
                'pcr' => 1212,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            29 => 
            array (
                'id' => 1030,
                'date' => '2021-09-03',
                'state' => 'Pahang',
                'rtk_ag' => 3462,
                'pcr' => 3720,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            30 => 
            array (
                'id' => 1031,
                'date' => '2021-09-03',
                'state' => 'Perak',
                'rtk_ag' => 4518,
                'pcr' => 2613,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            31 => 
            array (
                'id' => 1032,
                'date' => '2021-09-03',
                'state' => 'Perlis',
                'rtk_ag' => 208,
                'pcr' => 171,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            32 => 
            array (
                'id' => 1033,
                'date' => '2021-09-03',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 9049,
                'pcr' => 4005,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            33 => 
            array (
                'id' => 1034,
                'date' => '2021-09-03',
                'state' => 'Sabah',
                'rtk_ag' => 5689,
                'pcr' => 2999,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            34 => 
            array (
                'id' => 1035,
                'date' => '2021-09-03',
                'state' => 'Sarawak',
                'rtk_ag' => 8189,
                'pcr' => 16581,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            35 => 
            array (
                'id' => 1036,
                'date' => '2021-09-03',
                'state' => 'Selangor',
                'rtk_ag' => 20807,
                'pcr' => 10703,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            36 => 
            array (
                'id' => 1037,
                'date' => '2021-09-03',
                'state' => 'Terengganu',
                'rtk_ag' => 1217,
                'pcr' => 3878,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            37 => 
            array (
                'id' => 1038,
                'date' => '2021-09-03',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5233,
                'pcr' => 5099,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            38 => 
            array (
                'id' => 1039,
                'date' => '2021-09-03',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 222,
                'pcr' => 212,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            39 => 
            array (
                'id' => 1040,
                'date' => '2021-09-03',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 159,
                'pcr' => 214,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            40 => 
            array (
                'id' => 1041,
                'date' => '2021-09-04',
                'state' => 'Johor',
                'rtk_ag' => 9687,
                'pcr' => 9927,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            41 => 
            array (
                'id' => 1042,
                'date' => '2021-09-04',
                'state' => 'Kedah',
                'rtk_ag' => 3489,
                'pcr' => 3842,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            42 => 
            array (
                'id' => 1043,
                'date' => '2021-09-04',
                'state' => 'Kelantan',
                'rtk_ag' => 2102,
                'pcr' => 1883,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            43 => 
            array (
                'id' => 1044,
                'date' => '2021-09-04',
                'state' => 'Melaka',
                'rtk_ag' => 4766,
                'pcr' => 1638,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            44 => 
            array (
                'id' => 1045,
                'date' => '2021-09-04',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 1071,
                'pcr' => 1471,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            45 => 
            array (
                'id' => 1046,
                'date' => '2021-09-04',
                'state' => 'Pahang',
                'rtk_ag' => 2170,
                'pcr' => 3360,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            46 => 
            array (
                'id' => 1047,
                'date' => '2021-09-04',
                'state' => 'Perak',
                'rtk_ag' => 4414,
                'pcr' => 2662,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            47 => 
            array (
                'id' => 1048,
                'date' => '2021-09-04',
                'state' => 'Perlis',
                'rtk_ag' => 182,
                'pcr' => 188,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            48 => 
            array (
                'id' => 1049,
                'date' => '2021-09-04',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 6476,
                'pcr' => 4228,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            49 => 
            array (
                'id' => 1050,
                'date' => '2021-09-04',
                'state' => 'Sabah',
                'rtk_ag' => 4009,
                'pcr' => 4936,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            50 => 
            array (
                'id' => 1051,
                'date' => '2021-09-04',
                'state' => 'Sarawak',
                'rtk_ag' => 6701,
                'pcr' => 15066,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            51 => 
            array (
                'id' => 1052,
                'date' => '2021-09-04',
                'state' => 'Selangor',
                'rtk_ag' => 13035,
                'pcr' => 10731,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            52 => 
            array (
                'id' => 1053,
                'date' => '2021-09-04',
                'state' => 'Terengganu',
                'rtk_ag' => 2548,
                'pcr' => 3543,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            53 => 
            array (
                'id' => 1054,
                'date' => '2021-09-04',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 3022,
                'pcr' => 4970,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            54 => 
            array (
                'id' => 1055,
                'date' => '2021-09-04',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 347,
                'pcr' => 272,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            55 => 
            array (
                'id' => 1056,
                'date' => '2021-09-04',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 66,
                'pcr' => 246,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            56 => 
            array (
                'id' => 1057,
                'date' => '2021-09-05',
                'state' => 'Johor',
                'rtk_ag' => 10679,
                'pcr' => 7920,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            57 => 
            array (
                'id' => 1058,
                'date' => '2021-09-05',
                'state' => 'Kedah',
                'rtk_ag' => 4154,
                'pcr' => 3220,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            58 => 
            array (
                'id' => 1059,
                'date' => '2021-09-05',
                'state' => 'Kelantan',
                'rtk_ag' => 2336,
                'pcr' => 2283,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            59 => 
            array (
                'id' => 1060,
                'date' => '2021-09-05',
                'state' => 'Melaka',
                'rtk_ag' => 1498,
                'pcr' => 1642,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            60 => 
            array (
                'id' => 1061,
                'date' => '2021-09-05',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 1026,
                'pcr' => 1042,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            61 => 
            array (
                'id' => 1062,
                'date' => '2021-09-05',
                'state' => 'Pahang',
                'rtk_ag' => 2287,
                'pcr' => 3398,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            62 => 
            array (
                'id' => 1063,
                'date' => '2021-09-05',
                'state' => 'Perak',
                'rtk_ag' => 3482,
                'pcr' => 2016,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            63 => 
            array (
                'id' => 1064,
                'date' => '2021-09-05',
                'state' => 'Perlis',
                'rtk_ag' => 190,
                'pcr' => 119,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            64 => 
            array (
                'id' => 1065,
                'date' => '2021-09-05',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 3514,
                'pcr' => 1982,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            65 => 
            array (
                'id' => 1066,
                'date' => '2021-09-05',
                'state' => 'Sabah',
                'rtk_ag' => 4082,
                'pcr' => 2770,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            66 => 
            array (
                'id' => 1067,
                'date' => '2021-09-05',
                'state' => 'Sarawak',
                'rtk_ag' => 5877,
                'pcr' => 14786,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            67 => 
            array (
                'id' => 1068,
                'date' => '2021-09-05',
                'state' => 'Selangor',
                'rtk_ag' => 11632,
                'pcr' => 7159,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            68 => 
            array (
                'id' => 1069,
                'date' => '2021-09-05',
                'state' => 'Terengganu',
                'rtk_ag' => 2776,
                'pcr' => 2670,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            69 => 
            array (
                'id' => 1070,
                'date' => '2021-09-05',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 2151,
                'pcr' => 2954,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            70 => 
            array (
                'id' => 1071,
                'date' => '2021-09-05',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 252,
                'pcr' => 281,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            71 => 
            array (
                'id' => 1072,
                'date' => '2021-09-05',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 77,
                'pcr' => 242,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            72 => 
            array (
                'id' => 1073,
                'date' => '2021-09-06',
                'state' => 'Johor',
                'rtk_ag' => 13736,
                'pcr' => 9266,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            73 => 
            array (
                'id' => 1074,
                'date' => '2021-09-06',
                'state' => 'Kedah',
                'rtk_ag' => 4943,
                'pcr' => 3141,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            74 => 
            array (
                'id' => 1075,
                'date' => '2021-09-06',
                'state' => 'Kelantan',
                'rtk_ag' => 1983,
                'pcr' => 3068,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            75 => 
            array (
                'id' => 1076,
                'date' => '2021-09-06',
                'state' => 'Melaka',
                'rtk_ag' => 2914,
                'pcr' => 1191,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            76 => 
            array (
                'id' => 1077,
                'date' => '2021-09-06',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3774,
                'pcr' => 1141,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            77 => 
            array (
                'id' => 1078,
                'date' => '2021-09-06',
                'state' => 'Pahang',
                'rtk_ag' => 3950,
                'pcr' => 5142,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            78 => 
            array (
                'id' => 1079,
                'date' => '2021-09-06',
                'state' => 'Perak',
                'rtk_ag' => 5546,
                'pcr' => 1825,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            79 => 
            array (
                'id' => 1080,
                'date' => '2021-09-06',
                'state' => 'Perlis',
                'rtk_ag' => 191,
                'pcr' => 80,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            80 => 
            array (
                'id' => 1081,
                'date' => '2021-09-06',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 6919,
                'pcr' => 3050,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            81 => 
            array (
                'id' => 1082,
                'date' => '2021-09-06',
                'state' => 'Sabah',
                'rtk_ag' => 6815,
                'pcr' => 2321,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            82 => 
            array (
                'id' => 1083,
                'date' => '2021-09-06',
                'state' => 'Sarawak',
                'rtk_ag' => 8914,
                'pcr' => 16978,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            83 => 
            array (
                'id' => 1084,
                'date' => '2021-09-06',
                'state' => 'Selangor',
                'rtk_ag' => 27592,
                'pcr' => 9248,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            84 => 
            array (
                'id' => 1085,
                'date' => '2021-09-06',
                'state' => 'Terengganu',
                'rtk_ag' => 2707,
                'pcr' => 2309,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            85 => 
            array (
                'id' => 1086,
                'date' => '2021-09-06',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 6271,
                'pcr' => 6313,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            86 => 
            array (
                'id' => 1087,
                'date' => '2021-09-06',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 400,
                'pcr' => 176,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            87 => 
            array (
                'id' => 1088,
                'date' => '2021-09-06',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 262,
                'pcr' => 153,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            88 => 
            array (
                'id' => 1089,
                'date' => '2021-09-07',
                'state' => 'Johor',
                'rtk_ag' => 13154,
                'pcr' => 11668,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            89 => 
            array (
                'id' => 1090,
                'date' => '2021-09-07',
                'state' => 'Kedah',
                'rtk_ag' => 4780,
                'pcr' => 3714,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            90 => 
            array (
                'id' => 1091,
                'date' => '2021-09-07',
                'state' => 'Kelantan',
                'rtk_ag' => 1909,
                'pcr' => 2670,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            91 => 
            array (
                'id' => 1092,
                'date' => '2021-09-07',
                'state' => 'Melaka',
                'rtk_ag' => 2271,
                'pcr' => 2049,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            92 => 
            array (
                'id' => 1093,
                'date' => '2021-09-07',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 4369,
                'pcr' => 2328,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            93 => 
            array (
                'id' => 1094,
                'date' => '2021-09-07',
                'state' => 'Pahang',
                'rtk_ag' => 2343,
                'pcr' => 3584,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            94 => 
            array (
                'id' => 1095,
                'date' => '2021-09-07',
                'state' => 'Perak',
                'rtk_ag' => 5224,
                'pcr' => 2918,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            95 => 
            array (
                'id' => 1096,
                'date' => '2021-09-07',
                'state' => 'Perlis',
                'rtk_ag' => 274,
                'pcr' => 186,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            96 => 
            array (
                'id' => 1097,
                'date' => '2021-09-07',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 8624,
                'pcr' => 4371,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            97 => 
            array (
                'id' => 1098,
                'date' => '2021-09-07',
                'state' => 'Sabah',
                'rtk_ag' => 6777,
                'pcr' => 3217,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            98 => 
            array (
                'id' => 1099,
                'date' => '2021-09-07',
                'state' => 'Sarawak',
                'rtk_ag' => 8820,
                'pcr' => 14253,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            99 => 
            array (
                'id' => 1100,
                'date' => '2021-09-07',
                'state' => 'Selangor',
                'rtk_ag' => 22944,
                'pcr' => 14261,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            100 => 
            array (
                'id' => 1101,
                'date' => '2021-09-07',
                'state' => 'Terengganu',
                'rtk_ag' => 2120,
                'pcr' => 4232,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            101 => 
            array (
                'id' => 1102,
                'date' => '2021-09-07',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5209,
                'pcr' => 5165,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            102 => 
            array (
                'id' => 1103,
                'date' => '2021-09-07',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 402,
                'pcr' => 278,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            103 => 
            array (
                'id' => 1104,
                'date' => '2021-09-07',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 212,
                'pcr' => 226,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            104 => 
            array (
                'id' => 1105,
                'date' => '2021-09-08',
                'state' => 'Johor',
                'rtk_ag' => 12220,
                'pcr' => 10283,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            105 => 
            array (
                'id' => 1106,
                'date' => '2021-09-08',
                'state' => 'Kedah',
                'rtk_ag' => 5018,
                'pcr' => 3594,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            106 => 
            array (
                'id' => 1107,
                'date' => '2021-09-08',
                'state' => 'Kelantan',
                'rtk_ag' => 1858,
                'pcr' => 2891,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            107 => 
            array (
                'id' => 1108,
                'date' => '2021-09-08',
                'state' => 'Melaka',
                'rtk_ag' => 1896,
                'pcr' => 2112,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            108 => 
            array (
                'id' => 1109,
                'date' => '2021-09-08',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2726,
                'pcr' => 1285,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            109 => 
            array (
                'id' => 1110,
                'date' => '2021-09-08',
                'state' => 'Pahang',
                'rtk_ag' => 2296,
                'pcr' => 5143,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            110 => 
            array (
                'id' => 1111,
                'date' => '2021-09-08',
                'state' => 'Perak',
                'rtk_ag' => 5302,
                'pcr' => 3092,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            111 => 
            array (
                'id' => 1112,
                'date' => '2021-09-08',
                'state' => 'Perlis',
                'rtk_ag' => 217,
                'pcr' => 255,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            112 => 
            array (
                'id' => 1113,
                'date' => '2021-09-08',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 8307,
                'pcr' => 3988,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            113 => 
            array (
                'id' => 1114,
                'date' => '2021-09-08',
                'state' => 'Sabah',
                'rtk_ag' => 6407,
                'pcr' => 3552,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            114 => 
            array (
                'id' => 1115,
                'date' => '2021-09-08',
                'state' => 'Sarawak',
                'rtk_ag' => 9042,
                'pcr' => 12211,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            115 => 
            array (
                'id' => 1116,
                'date' => '2021-09-08',
                'state' => 'Selangor',
                'rtk_ag' => 23080,
                'pcr' => 13087,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            116 => 
            array (
                'id' => 1117,
                'date' => '2021-09-08',
                'state' => 'Terengganu',
                'rtk_ag' => 2222,
                'pcr' => 4072,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            117 => 
            array (
                'id' => 1118,
                'date' => '2021-09-08',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4330,
                'pcr' => 5135,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            118 => 
            array (
                'id' => 1119,
                'date' => '2021-09-08',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 482,
                'pcr' => 169,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            119 => 
            array (
                'id' => 1120,
                'date' => '2021-09-08',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 293,
                'pcr' => 184,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            120 => 
            array (
                'id' => 1121,
                'date' => '2021-09-09',
                'state' => 'Johor',
                'rtk_ag' => 11204,
                'pcr' => 9469,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            121 => 
            array (
                'id' => 1122,
                'date' => '2021-09-09',
                'state' => 'Kedah',
                'rtk_ag' => 3965,
                'pcr' => 3193,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            122 => 
            array (
                'id' => 1123,
                'date' => '2021-09-09',
                'state' => 'Kelantan',
                'rtk_ag' => 1841,
                'pcr' => 3067,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            123 => 
            array (
                'id' => 1124,
                'date' => '2021-09-09',
                'state' => 'Melaka',
                'rtk_ag' => 2059,
                'pcr' => 1469,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            124 => 
            array (
                'id' => 1125,
                'date' => '2021-09-09',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2343,
                'pcr' => 1717,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            125 => 
            array (
                'id' => 1126,
                'date' => '2021-09-09',
                'state' => 'Pahang',
                'rtk_ag' => 3315,
                'pcr' => 4622,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            126 => 
            array (
                'id' => 1127,
                'date' => '2021-09-09',
                'state' => 'Perak',
                'rtk_ag' => 4814,
                'pcr' => 2448,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            127 => 
            array (
                'id' => 1128,
                'date' => '2021-09-09',
                'state' => 'Perlis',
                'rtk_ag' => 235,
                'pcr' => 191,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            128 => 
            array (
                'id' => 1129,
                'date' => '2021-09-09',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 7790,
                'pcr' => 3229,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            129 => 
            array (
                'id' => 1130,
                'date' => '2021-09-09',
                'state' => 'Sabah',
                'rtk_ag' => 5746,
                'pcr' => 2771,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            130 => 
            array (
                'id' => 1131,
                'date' => '2021-09-09',
                'state' => 'Sarawak',
                'rtk_ag' => 8120,
                'pcr' => 16037,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            131 => 
            array (
                'id' => 1132,
                'date' => '2021-09-09',
                'state' => 'Selangor',
                'rtk_ag' => 18011,
                'pcr' => 9960,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            132 => 
            array (
                'id' => 1133,
                'date' => '2021-09-09',
                'state' => 'Terengganu',
                'rtk_ag' => 2574,
                'pcr' => 3195,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            133 => 
            array (
                'id' => 1134,
                'date' => '2021-09-09',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4410,
                'pcr' => 4817,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            134 => 
            array (
                'id' => 1135,
                'date' => '2021-09-09',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 635,
                'pcr' => 279,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            135 => 
            array (
                'id' => 1136,
                'date' => '2021-09-09',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 197,
                'pcr' => 198,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            136 => 
            array (
                'id' => 1137,
                'date' => '2021-09-10',
                'state' => 'Johor',
                'rtk_ag' => 8928,
                'pcr' => 9002,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            137 => 
            array (
                'id' => 1138,
                'date' => '2021-09-10',
                'state' => 'Kedah',
                'rtk_ag' => 3103,
                'pcr' => 2882,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            138 => 
            array (
                'id' => 1139,
                'date' => '2021-09-10',
                'state' => 'Kelantan',
                'rtk_ag' => 1199,
                'pcr' => 3220,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            139 => 
            array (
                'id' => 1140,
                'date' => '2021-09-10',
                'state' => 'Melaka',
                'rtk_ag' => 1471,
                'pcr' => 1716,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            140 => 
            array (
                'id' => 1141,
                'date' => '2021-09-10',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2913,
                'pcr' => 1088,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            141 => 
            array (
                'id' => 1142,
                'date' => '2021-09-10',
                'state' => 'Pahang',
                'rtk_ag' => 2867,
                'pcr' => 3515,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            142 => 
            array (
                'id' => 1143,
                'date' => '2021-09-10',
                'state' => 'Perak',
                'rtk_ag' => 5128,
                'pcr' => 2645,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            143 => 
            array (
                'id' => 1144,
                'date' => '2021-09-10',
                'state' => 'Perlis',
                'rtk_ag' => 264,
                'pcr' => 159,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            144 => 
            array (
                'id' => 1145,
                'date' => '2021-09-10',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 7735,
                'pcr' => 2965,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            145 => 
            array (
                'id' => 1146,
                'date' => '2021-09-10',
                'state' => 'Sabah',
                'rtk_ag' => 5448,
                'pcr' => 3183,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            146 => 
            array (
                'id' => 1147,
                'date' => '2021-09-10',
                'state' => 'Sarawak',
                'rtk_ag' => 8109,
                'pcr' => 11940,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            147 => 
            array (
                'id' => 1148,
                'date' => '2021-09-10',
                'state' => 'Selangor',
                'rtk_ag' => 16400,
                'pcr' => 11528,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            148 => 
            array (
                'id' => 1149,
                'date' => '2021-09-10',
                'state' => 'Terengganu',
                'rtk_ag' => 1480,
                'pcr' => 4633,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            149 => 
            array (
                'id' => 1150,
                'date' => '2021-09-10',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4247,
                'pcr' => 3505,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            150 => 
            array (
                'id' => 1151,
                'date' => '2021-09-10',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 263,
                'pcr' => 221,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            151 => 
            array (
                'id' => 1152,
                'date' => '2021-09-10',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 176,
                'pcr' => 288,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            152 => 
            array (
                'id' => 1153,
                'date' => '2021-09-11',
                'state' => 'Johor',
                'rtk_ag' => 9588,
                'pcr' => 9277,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            153 => 
            array (
                'id' => 1154,
                'date' => '2021-09-11',
                'state' => 'Kedah',
                'rtk_ag' => 3000,
                'pcr' => 2848,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            154 => 
            array (
                'id' => 1155,
                'date' => '2021-09-11',
                'state' => 'Kelantan',
                'rtk_ag' => 1845,
                'pcr' => 2186,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            155 => 
            array (
                'id' => 1156,
                'date' => '2021-09-11',
                'state' => 'Melaka',
                'rtk_ag' => 1133,
                'pcr' => 1509,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            156 => 
            array (
                'id' => 1157,
                'date' => '2021-09-11',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 1961,
                'pcr' => 1121,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            157 => 
            array (
                'id' => 1158,
                'date' => '2021-09-11',
                'state' => 'Pahang',
                'rtk_ag' => 2380,
                'pcr' => 3633,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            158 => 
            array (
                'id' => 1159,
                'date' => '2021-09-11',
                'state' => 'Perak',
                'rtk_ag' => 4546,
                'pcr' => 2366,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            159 => 
            array (
                'id' => 1160,
                'date' => '2021-09-11',
                'state' => 'Perlis',
                'rtk_ag' => 146,
                'pcr' => 200,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            160 => 
            array (
                'id' => 1161,
                'date' => '2021-09-11',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 5653,
                'pcr' => 4327,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            161 => 
            array (
                'id' => 1162,
                'date' => '2021-09-11',
                'state' => 'Sabah',
                'rtk_ag' => 3943,
                'pcr' => 3571,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            162 => 
            array (
                'id' => 1163,
                'date' => '2021-09-11',
                'state' => 'Sarawak',
                'rtk_ag' => 6748,
                'pcr' => 17906,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            163 => 
            array (
                'id' => 1164,
                'date' => '2021-09-11',
                'state' => 'Selangor',
                'rtk_ag' => 11506,
                'pcr' => 9564,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            164 => 
            array (
                'id' => 1165,
                'date' => '2021-09-11',
                'state' => 'Terengganu',
                'rtk_ag' => 2852,
                'pcr' => 2848,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            165 => 
            array (
                'id' => 1166,
                'date' => '2021-09-11',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 2649,
                'pcr' => 3906,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            166 => 
            array (
                'id' => 1167,
                'date' => '2021-09-11',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 473,
                'pcr' => 344,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            167 => 
            array (
                'id' => 1168,
                'date' => '2021-09-11',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 70,
                'pcr' => 549,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            168 => 
            array (
                'id' => 1169,
                'date' => '2021-09-12',
                'state' => 'Johor',
                'rtk_ag' => 9237,
                'pcr' => 6691,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            169 => 
            array (
                'id' => 1170,
                'date' => '2021-09-12',
                'state' => 'Kedah',
                'rtk_ag' => 3186,
                'pcr' => 3051,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            170 => 
            array (
                'id' => 1171,
                'date' => '2021-09-12',
                'state' => 'Kelantan',
                'rtk_ag' => 1910,
                'pcr' => 2301,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            171 => 
            array (
                'id' => 1172,
                'date' => '2021-09-12',
                'state' => 'Melaka',
                'rtk_ag' => 3177,
                'pcr' => 1370,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            172 => 
            array (
                'id' => 1173,
                'date' => '2021-09-12',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 893,
                'pcr' => 890,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            173 => 
            array (
                'id' => 1174,
                'date' => '2021-09-12',
                'state' => 'Pahang',
                'rtk_ag' => 1791,
                'pcr' => 4651,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            174 => 
            array (
                'id' => 1175,
                'date' => '2021-09-12',
                'state' => 'Perak',
                'rtk_ag' => 3063,
                'pcr' => 1617,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            175 => 
            array (
                'id' => 1176,
                'date' => '2021-09-12',
                'state' => 'Perlis',
                'rtk_ag' => 201,
                'pcr' => 86,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            176 => 
            array (
                'id' => 1177,
                'date' => '2021-09-12',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 3558,
                'pcr' => 1457,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            177 => 
            array (
                'id' => 1178,
                'date' => '2021-09-12',
                'state' => 'Sabah',
                'rtk_ag' => 3239,
                'pcr' => 2654,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            178 => 
            array (
                'id' => 1179,
                'date' => '2021-09-12',
                'state' => 'Sarawak',
                'rtk_ag' => 4319,
                'pcr' => 12887,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            179 => 
            array (
                'id' => 1180,
                'date' => '2021-09-12',
                'state' => 'Selangor',
                'rtk_ag' => 8713,
                'pcr' => 7277,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            180 => 
            array (
                'id' => 1181,
                'date' => '2021-09-12',
                'state' => 'Terengganu',
                'rtk_ag' => 3227,
                'pcr' => 3152,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            181 => 
            array (
                'id' => 1182,
                'date' => '2021-09-12',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 1836,
                'pcr' => 2554,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            182 => 
            array (
                'id' => 1183,
                'date' => '2021-09-12',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 268,
                'pcr' => 149,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            183 => 
            array (
                'id' => 1184,
                'date' => '2021-09-12',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 78,
                'pcr' => 177,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            184 => 
            array (
                'id' => 1185,
                'date' => '2021-09-13',
                'state' => 'Johor',
                'rtk_ag' => 13036,
                'pcr' => 7170,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            185 => 
            array (
                'id' => 1186,
                'date' => '2021-09-13',
                'state' => 'Kedah',
                'rtk_ag' => 4093,
                'pcr' => 2549,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            186 => 
            array (
                'id' => 1187,
                'date' => '2021-09-13',
                'state' => 'Kelantan',
                'rtk_ag' => 1956,
                'pcr' => 3174,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            187 => 
            array (
                'id' => 1188,
                'date' => '2021-09-13',
                'state' => 'Melaka',
                'rtk_ag' => 4958,
                'pcr' => 845,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            188 => 
            array (
                'id' => 1189,
                'date' => '2021-09-13',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3974,
                'pcr' => 1620,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            189 => 
            array (
                'id' => 1190,
                'date' => '2021-09-13',
                'state' => 'Pahang',
                'rtk_ag' => 2597,
                'pcr' => 5070,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            190 => 
            array (
                'id' => 1191,
                'date' => '2021-09-13',
                'state' => 'Perak',
                'rtk_ag' => 5496,
                'pcr' => 1540,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            191 => 
            array (
                'id' => 1192,
                'date' => '2021-09-13',
                'state' => 'Perlis',
                'rtk_ag' => 496,
                'pcr' => 89,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            192 => 
            array (
                'id' => 1193,
                'date' => '2021-09-13',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 6883,
                'pcr' => 2032,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            193 => 
            array (
                'id' => 1194,
                'date' => '2021-09-13',
                'state' => 'Sabah',
                'rtk_ag' => 6001,
                'pcr' => 2048,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            194 => 
            array (
                'id' => 1195,
                'date' => '2021-09-13',
                'state' => 'Sarawak',
                'rtk_ag' => 6450,
                'pcr' => 7962,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            195 => 
            array (
                'id' => 1196,
                'date' => '2021-09-13',
                'state' => 'Selangor',
                'rtk_ag' => 20999,
                'pcr' => 9536,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            196 => 
            array (
                'id' => 1197,
                'date' => '2021-09-13',
                'state' => 'Terengganu',
                'rtk_ag' => 2283,
                'pcr' => 2754,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            197 => 
            array (
                'id' => 1198,
                'date' => '2021-09-13',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5072,
                'pcr' => 3747,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            198 => 
            array (
                'id' => 1199,
                'date' => '2021-09-13',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 290,
                'pcr' => 173,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            199 => 
            array (
                'id' => 1200,
                'date' => '2021-09-13',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 227,
                'pcr' => 142,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            200 => 
            array (
                'id' => 1201,
                'date' => '2021-09-14',
                'state' => 'Johor',
                'rtk_ag' => 19011,
                'pcr' => 8956,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            201 => 
            array (
                'id' => 1202,
                'date' => '2021-09-14',
                'state' => 'Kedah',
                'rtk_ag' => 6369,
                'pcr' => 2929,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            202 => 
            array (
                'id' => 1203,
                'date' => '2021-09-14',
                'state' => 'Kelantan',
                'rtk_ag' => 3185,
                'pcr' => 2546,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            203 => 
            array (
                'id' => 1204,
                'date' => '2021-09-14',
                'state' => 'Melaka',
                'rtk_ag' => 14068,
                'pcr' => 1927,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            204 => 
            array (
                'id' => 1205,
                'date' => '2021-09-14',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3157,
                'pcr' => 1146,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            205 => 
            array (
                'id' => 1206,
                'date' => '2021-09-14',
                'state' => 'Pahang',
                'rtk_ag' => 1669,
                'pcr' => 4055,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            206 => 
            array (
                'id' => 1207,
                'date' => '2021-09-14',
                'state' => 'Perak',
                'rtk_ag' => 3980,
                'pcr' => 3132,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            207 => 
            array (
                'id' => 1208,
                'date' => '2021-09-14',
                'state' => 'Perlis',
                'rtk_ag' => 161,
                'pcr' => 218,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            208 => 
            array (
                'id' => 1209,
                'date' => '2021-09-14',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 4937,
                'pcr' => 4111,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            209 => 
            array (
                'id' => 1210,
                'date' => '2021-09-14',
                'state' => 'Sabah',
                'rtk_ag' => 144,
                'pcr' => 2889,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            210 => 
            array (
                'id' => 1211,
                'date' => '2021-09-14',
                'state' => 'Sarawak',
                'rtk_ag' => 10442,
                'pcr' => 13141,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            211 => 
            array (
                'id' => 1212,
                'date' => '2021-09-14',
                'state' => 'Selangor',
                'rtk_ag' => 5746,
                'pcr' => 12557,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            212 => 
            array (
                'id' => 1213,
                'date' => '2021-09-14',
                'state' => 'Terengganu',
                'rtk_ag' => 6060,
                'pcr' => 3533,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            213 => 
            array (
                'id' => 1214,
                'date' => '2021-09-14',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 2425,
                'pcr' => 4508,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            214 => 
            array (
                'id' => 1215,
                'date' => '2021-09-14',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 330,
                'pcr' => 294,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            215 => 
            array (
                'id' => 1216,
                'date' => '2021-09-14',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 216,
                'pcr' => 249,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            216 => 
            array (
                'id' => 1217,
                'date' => '2021-09-15',
                'state' => 'Johor',
                'rtk_ag' => 11691,
                'pcr' => 8102,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            217 => 
            array (
                'id' => 1218,
                'date' => '2021-09-15',
                'state' => 'Kedah',
                'rtk_ag' => 3127,
                'pcr' => 3020,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            218 => 
            array (
                'id' => 1219,
                'date' => '2021-09-15',
                'state' => 'Kelantan',
                'rtk_ag' => 2107,
                'pcr' => 2405,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            219 => 
            array (
                'id' => 1220,
                'date' => '2021-09-15',
                'state' => 'Melaka',
                'rtk_ag' => 2787,
                'pcr' => 1622,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            220 => 
            array (
                'id' => 1221,
                'date' => '2021-09-15',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3461,
                'pcr' => 1582,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            221 => 
            array (
                'id' => 1222,
                'date' => '2021-09-15',
                'state' => 'Pahang',
                'rtk_ag' => 3172,
                'pcr' => 5577,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            222 => 
            array (
                'id' => 1223,
                'date' => '2021-09-15',
                'state' => 'Perak',
                'rtk_ag' => 5138,
                'pcr' => 2306,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            223 => 
            array (
                'id' => 1224,
                'date' => '2021-09-15',
                'state' => 'Perlis',
                'rtk_ag' => 181,
                'pcr' => 165,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            224 => 
            array (
                'id' => 1225,
                'date' => '2021-09-15',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 8440,
                'pcr' => 3654,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            225 => 
            array (
                'id' => 1226,
                'date' => '2021-09-15',
                'state' => 'Sabah',
                'rtk_ag' => 5368,
                'pcr' => 2658,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            226 => 
            array (
                'id' => 1227,
                'date' => '2021-09-15',
                'state' => 'Sarawak',
                'rtk_ag' => 6519,
                'pcr' => 10742,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            227 => 
            array (
                'id' => 1228,
                'date' => '2021-09-15',
                'state' => 'Selangor',
                'rtk_ag' => 18993,
                'pcr' => 12394,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            228 => 
            array (
                'id' => 1229,
                'date' => '2021-09-15',
                'state' => 'Terengganu',
                'rtk_ag' => 2292,
                'pcr' => 3352,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            229 => 
            array (
                'id' => 1230,
                'date' => '2021-09-15',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5657,
                'pcr' => 4934,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            230 => 
            array (
                'id' => 1231,
                'date' => '2021-09-15',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 298,
                'pcr' => 247,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            231 => 
            array (
                'id' => 1232,
                'date' => '2021-09-15',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 223,
                'pcr' => 187,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            232 => 
            array (
                'id' => 1233,
                'date' => '2021-09-16',
                'state' => 'Johor',
                'rtk_ag' => 7252,
                'pcr' => 6550,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            233 => 
            array (
                'id' => 1234,
                'date' => '2021-09-16',
                'state' => 'Kedah',
                'rtk_ag' => 2486,
                'pcr' => 2832,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            234 => 
            array (
                'id' => 1235,
                'date' => '2021-09-16',
                'state' => 'Kelantan',
                'rtk_ag' => 1484,
                'pcr' => 1967,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            235 => 
            array (
                'id' => 1236,
                'date' => '2021-09-16',
                'state' => 'Melaka',
                'rtk_ag' => 2784,
                'pcr' => 1023,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            236 => 
            array (
                'id' => 1237,
                'date' => '2021-09-16',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 1003,
                'pcr' => 1118,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            237 => 
            array (
                'id' => 1238,
                'date' => '2021-09-16',
                'state' => 'Pahang',
                'rtk_ag' => 1461,
                'pcr' => 3630,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            238 => 
            array (
                'id' => 1239,
                'date' => '2021-09-16',
                'state' => 'Perak',
                'rtk_ag' => 3753,
                'pcr' => 2545,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            239 => 
            array (
                'id' => 1240,
                'date' => '2021-09-16',
                'state' => 'Perlis',
                'rtk_ag' => 882,
                'pcr' => 149,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            240 => 
            array (
                'id' => 1241,
                'date' => '2021-09-16',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 3001,
                'pcr' => 2485,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            241 => 
            array (
                'id' => 1242,
                'date' => '2021-09-16',
                'state' => 'Sabah',
                'rtk_ag' => 3504,
                'pcr' => 2578,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            242 => 
            array (
                'id' => 1243,
                'date' => '2021-09-16',
                'state' => 'Sarawak',
                'rtk_ag' => 3328,
                'pcr' => 8223,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            243 => 
            array (
                'id' => 1244,
                'date' => '2021-09-16',
                'state' => 'Selangor',
                'rtk_ag' => 10589,
                'pcr' => 8749,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            244 => 
            array (
                'id' => 1245,
                'date' => '2021-09-16',
                'state' => 'Terengganu',
                'rtk_ag' => 891,
                'pcr' => 3731,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            245 => 
            array (
                'id' => 1246,
                'date' => '2021-09-16',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4591,
                'pcr' => 2983,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            246 => 
            array (
                'id' => 1247,
                'date' => '2021-09-16',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 433,
                'pcr' => 148,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            247 => 
            array (
                'id' => 1248,
                'date' => '2021-09-16',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 80,
                'pcr' => 127,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            248 => 
            array (
                'id' => 1249,
                'date' => '2021-09-17',
                'state' => 'Johor',
                'rtk_ag' => 8236,
                'pcr' => 6059,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            249 => 
            array (
                'id' => 1250,
                'date' => '2021-09-17',
                'state' => 'Kedah',
                'rtk_ag' => 3267,
                'pcr' => 1482,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            250 => 
            array (
                'id' => 1251,
                'date' => '2021-09-17',
                'state' => 'Kelantan',
                'rtk_ag' => 1015,
                'pcr' => 2220,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            251 => 
            array (
                'id' => 1252,
                'date' => '2021-09-17',
                'state' => 'Melaka',
                'rtk_ag' => 3587,
                'pcr' => 1371,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            252 => 
            array (
                'id' => 1253,
                'date' => '2021-09-17',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2388,
                'pcr' => 1129,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            253 => 
            array (
                'id' => 1254,
                'date' => '2021-09-17',
                'state' => 'Pahang',
                'rtk_ag' => 2116,
                'pcr' => 3913,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            254 => 
            array (
                'id' => 1255,
                'date' => '2021-09-17',
                'state' => 'Perak',
                'rtk_ag' => 5015,
                'pcr' => 1895,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            255 => 
            array (
                'id' => 1256,
                'date' => '2021-09-17',
                'state' => 'Perlis',
                'rtk_ag' => 707,
                'pcr' => 71,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            256 => 
            array (
                'id' => 1257,
                'date' => '2021-09-17',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 6096,
                'pcr' => 1403,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            257 => 
            array (
                'id' => 1258,
                'date' => '2021-09-17',
                'state' => 'Sabah',
                'rtk_ag' => 4855,
                'pcr' => 1456,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            258 => 
            array (
                'id' => 1259,
                'date' => '2021-09-17',
                'state' => 'Sarawak',
                'rtk_ag' => 4253,
                'pcr' => 7035,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            259 => 
            array (
                'id' => 1260,
                'date' => '2021-09-17',
                'state' => 'Selangor',
                'rtk_ag' => 18885,
                'pcr' => 5716,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            260 => 
            array (
                'id' => 1261,
                'date' => '2021-09-17',
                'state' => 'Terengganu',
                'rtk_ag' => 1166,
                'pcr' => 2927,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            261 => 
            array (
                'id' => 1262,
                'date' => '2021-09-17',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4267,
                'pcr' => 3657,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            262 => 
            array (
                'id' => 1263,
                'date' => '2021-09-17',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 379,
                'pcr' => 170,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            263 => 
            array (
                'id' => 1264,
                'date' => '2021-09-17',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 237,
                'pcr' => 171,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            264 => 
            array (
                'id' => 1265,
                'date' => '2021-09-18',
                'state' => 'Johor',
                'rtk_ag' => 8024,
                'pcr' => 6745,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            265 => 
            array (
                'id' => 1266,
                'date' => '2021-09-18',
                'state' => 'Kedah',
                'rtk_ag' => 3112,
                'pcr' => 2632,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            266 => 
            array (
                'id' => 1267,
                'date' => '2021-09-18',
                'state' => 'Kelantan',
                'rtk_ag' => 1519,
                'pcr' => 2207,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            267 => 
            array (
                'id' => 1268,
                'date' => '2021-09-18',
                'state' => 'Melaka',
                'rtk_ag' => 1366,
                'pcr' => 1742,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            268 => 
            array (
                'id' => 1269,
                'date' => '2021-09-18',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 1442,
                'pcr' => 1420,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            269 => 
            array (
                'id' => 1270,
                'date' => '2021-09-18',
                'state' => 'Pahang',
                'rtk_ag' => 1780,
                'pcr' => 4255,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            270 => 
            array (
                'id' => 1271,
                'date' => '2021-09-18',
                'state' => 'Perak',
                'rtk_ag' => 3920,
                'pcr' => 2458,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            271 => 
            array (
                'id' => 1272,
                'date' => '2021-09-18',
                'state' => 'Perlis',
                'rtk_ag' => 370,
                'pcr' => 134,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            272 => 
            array (
                'id' => 1273,
                'date' => '2021-09-18',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 4627,
                'pcr' => 3246,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            273 => 
            array (
                'id' => 1274,
                'date' => '2021-09-18',
                'state' => 'Sabah',
                'rtk_ag' => 3375,
                'pcr' => 2505,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            274 => 
            array (
                'id' => 1275,
                'date' => '2021-09-18',
                'state' => 'Sarawak',
                'rtk_ag' => 3279,
                'pcr' => 7825,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            275 => 
            array (
                'id' => 1276,
                'date' => '2021-09-18',
                'state' => 'Selangor',
                'rtk_ag' => 14660,
                'pcr' => 8091,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            276 => 
            array (
                'id' => 1277,
                'date' => '2021-09-18',
                'state' => 'Terengganu',
                'rtk_ag' => 2241,
                'pcr' => 2661,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            277 => 
            array (
                'id' => 1278,
                'date' => '2021-09-18',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 3648,
                'pcr' => 4650,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            278 => 
            array (
                'id' => 1279,
                'date' => '2021-09-18',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 279,
                'pcr' => 327,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            279 => 
            array (
                'id' => 1280,
                'date' => '2021-09-18',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 74,
                'pcr' => 203,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            280 => 
            array (
                'id' => 1281,
                'date' => '2021-09-19',
                'state' => 'Johor',
                'rtk_ag' => 12320,
                'pcr' => 6232,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            281 => 
            array (
                'id' => 1282,
                'date' => '2021-09-19',
                'state' => 'Kedah',
                'rtk_ag' => 4992,
                'pcr' => 2292,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            282 => 
            array (
                'id' => 1283,
                'date' => '2021-09-19',
                'state' => 'Kelantan',
                'rtk_ag' => 2104,
                'pcr' => 1725,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            283 => 
            array (
                'id' => 1284,
                'date' => '2021-09-19',
                'state' => 'Melaka',
                'rtk_ag' => 1478,
                'pcr' => 1009,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            284 => 
            array (
                'id' => 1285,
                'date' => '2021-09-19',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 1898,
                'pcr' => 788,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            285 => 
            array (
                'id' => 1286,
                'date' => '2021-09-19',
                'state' => 'Pahang',
                'rtk_ag' => 2690,
                'pcr' => 3304,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            286 => 
            array (
                'id' => 1287,
                'date' => '2021-09-19',
                'state' => 'Perak',
                'rtk_ag' => 6382,
                'pcr' => 1388,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            287 => 
            array (
                'id' => 1288,
                'date' => '2021-09-19',
                'state' => 'Perlis',
                'rtk_ag' => 349,
                'pcr' => 105,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            288 => 
            array (
                'id' => 1289,
                'date' => '2021-09-19',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 7495,
                'pcr' => 1188,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            289 => 
            array (
                'id' => 1290,
                'date' => '2021-09-19',
                'state' => 'Sabah',
                'rtk_ag' => 4024,
                'pcr' => 1873,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            290 => 
            array (
                'id' => 1291,
                'date' => '2021-09-19',
                'state' => 'Sarawak',
                'rtk_ag' => 3648,
                'pcr' => 6867,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            291 => 
            array (
                'id' => 1292,
                'date' => '2021-09-19',
                'state' => 'Selangor',
                'rtk_ag' => 15737,
                'pcr' => 6488,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            292 => 
            array (
                'id' => 1293,
                'date' => '2021-09-19',
                'state' => 'Terengganu',
                'rtk_ag' => 3926,
                'pcr' => 2678,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            293 => 
            array (
                'id' => 1294,
                'date' => '2021-09-19',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 3320,
                'pcr' => 2267,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            294 => 
            array (
                'id' => 1295,
                'date' => '2021-09-19',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 299,
                'pcr' => 106,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            295 => 
            array (
                'id' => 1296,
                'date' => '2021-09-19',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 154,
                'pcr' => 188,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            296 => 
            array (
                'id' => 1297,
                'date' => '2021-09-20',
                'state' => 'Johor',
                'rtk_ag' => 16601,
                'pcr' => 6549,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            297 => 
            array (
                'id' => 1298,
                'date' => '2021-09-20',
                'state' => 'Kedah',
                'rtk_ag' => 6366,
                'pcr' => 1515,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            298 => 
            array (
                'id' => 1299,
                'date' => '2021-09-20',
                'state' => 'Kelantan',
                'rtk_ag' => 2091,
                'pcr' => 2923,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            299 => 
            array (
                'id' => 1300,
                'date' => '2021-09-20',
                'state' => 'Melaka',
                'rtk_ag' => 4665,
                'pcr' => 930,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            300 => 
            array (
                'id' => 1301,
                'date' => '2021-09-20',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5282,
                'pcr' => 1273,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            301 => 
            array (
                'id' => 1302,
                'date' => '2021-09-20',
                'state' => 'Pahang',
                'rtk_ag' => 3744,
                'pcr' => 3231,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            302 => 
            array (
                'id' => 1303,
                'date' => '2021-09-20',
                'state' => 'Perak',
                'rtk_ag' => 8179,
                'pcr' => 2104,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            303 => 
            array (
                'id' => 1304,
                'date' => '2021-09-20',
                'state' => 'Perlis',
                'rtk_ag' => 252,
                'pcr' => 78,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            304 => 
            array (
                'id' => 1305,
                'date' => '2021-09-20',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 13190,
                'pcr' => 2243,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            305 => 
            array (
                'id' => 1306,
                'date' => '2021-09-20',
                'state' => 'Sabah',
                'rtk_ag' => 5869,
                'pcr' => 1395,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            306 => 
            array (
                'id' => 1307,
                'date' => '2021-09-20',
                'state' => 'Sarawak',
                'rtk_ag' => 4980,
                'pcr' => 6557,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            307 => 
            array (
                'id' => 1308,
                'date' => '2021-09-20',
                'state' => 'Selangor',
                'rtk_ag' => 35357,
                'pcr' => 8607,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            308 => 
            array (
                'id' => 1309,
                'date' => '2021-09-20',
                'state' => 'Terengganu',
                'rtk_ag' => 2323,
                'pcr' => 2366,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            309 => 
            array (
                'id' => 1310,
                'date' => '2021-09-20',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 10374,
                'pcr' => 4800,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            310 => 
            array (
                'id' => 1311,
                'date' => '2021-09-20',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 502,
                'pcr' => 390,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            311 => 
            array (
                'id' => 1312,
                'date' => '2021-09-20',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 385,
                'pcr' => 376,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            312 => 
            array (
                'id' => 1313,
                'date' => '2021-09-21',
                'state' => 'Johor',
                'rtk_ag' => 16538,
                'pcr' => 7823,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            313 => 
            array (
                'id' => 1314,
                'date' => '2021-09-21',
                'state' => 'Kedah',
                'rtk_ag' => 6122,
                'pcr' => 2571,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            314 => 
            array (
                'id' => 1315,
                'date' => '2021-09-21',
                'state' => 'Kelantan',
                'rtk_ag' => 2003,
                'pcr' => 3046,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            315 => 
            array (
                'id' => 1316,
                'date' => '2021-09-21',
                'state' => 'Melaka',
                'rtk_ag' => 3963,
                'pcr' => 1522,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            316 => 
            array (
                'id' => 1317,
                'date' => '2021-09-21',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 4059,
                'pcr' => 1162,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            317 => 
            array (
                'id' => 1318,
                'date' => '2021-09-21',
                'state' => 'Pahang',
                'rtk_ag' => 3032,
                'pcr' => 3768,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            318 => 
            array (
                'id' => 1319,
                'date' => '2021-09-21',
                'state' => 'Perak',
                'rtk_ag' => 9543,
                'pcr' => 2145,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            319 => 
            array (
                'id' => 1320,
                'date' => '2021-09-21',
                'state' => 'Perlis',
                'rtk_ag' => 254,
                'pcr' => 206,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            320 => 
            array (
                'id' => 1321,
                'date' => '2021-09-21',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 13255,
                'pcr' => 3090,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            321 => 
            array (
                'id' => 1322,
                'date' => '2021-09-21',
                'state' => 'Sabah',
                'rtk_ag' => 5069,
                'pcr' => 1679,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            322 => 
            array (
                'id' => 1323,
                'date' => '2021-09-21',
                'state' => 'Sarawak',
                'rtk_ag' => 5911,
                'pcr' => 4983,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            323 => 
            array (
                'id' => 1324,
                'date' => '2021-09-21',
                'state' => 'Selangor',
                'rtk_ag' => 30167,
                'pcr' => 12133,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            324 => 
            array (
                'id' => 1325,
                'date' => '2021-09-21',
                'state' => 'Terengganu',
                'rtk_ag' => 2306,
                'pcr' => 3495,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            325 => 
            array (
                'id' => 1326,
                'date' => '2021-09-21',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 8056,
                'pcr' => 4643,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            326 => 
            array (
                'id' => 1327,
                'date' => '2021-09-21',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 293,
                'pcr' => 267,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            327 => 
            array (
                'id' => 1328,
                'date' => '2021-09-21',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 304,
                'pcr' => 256,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            328 => 
            array (
                'id' => 1329,
                'date' => '2021-09-22',
                'state' => 'Johor',
                'rtk_ag' => 17638,
                'pcr' => 6065,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            329 => 
            array (
                'id' => 1330,
                'date' => '2021-09-22',
                'state' => 'Kedah',
                'rtk_ag' => 6257,
                'pcr' => 2196,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            330 => 
            array (
                'id' => 1331,
                'date' => '2021-09-22',
                'state' => 'Kelantan',
                'rtk_ag' => 1864,
                'pcr' => 2255,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            331 => 
            array (
                'id' => 1332,
                'date' => '2021-09-22',
                'state' => 'Melaka',
                'rtk_ag' => 4168,
                'pcr' => 1347,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            332 => 
            array (
                'id' => 1333,
                'date' => '2021-09-22',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 6659,
                'pcr' => 1208,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            333 => 
            array (
                'id' => 1334,
                'date' => '2021-09-22',
                'state' => 'Pahang',
                'rtk_ag' => 3793,
                'pcr' => 4097,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            334 => 
            array (
                'id' => 1335,
                'date' => '2021-09-22',
                'state' => 'Perak',
                'rtk_ag' => 9919,
                'pcr' => 2356,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            335 => 
            array (
                'id' => 1336,
                'date' => '2021-09-22',
                'state' => 'Perlis',
                'rtk_ag' => 212,
                'pcr' => 153,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            336 => 
            array (
                'id' => 1337,
                'date' => '2021-09-22',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 15945,
                'pcr' => 2557,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            337 => 
            array (
                'id' => 1338,
                'date' => '2021-09-22',
                'state' => 'Sabah',
                'rtk_ag' => 5249,
                'pcr' => 3025,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            338 => 
            array (
                'id' => 1339,
                'date' => '2021-09-22',
                'state' => 'Sarawak',
                'rtk_ag' => 6733,
                'pcr' => 5221,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            339 => 
            array (
                'id' => 1340,
                'date' => '2021-09-22',
                'state' => 'Selangor',
                'rtk_ag' => 35982,
                'pcr' => 10766,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            340 => 
            array (
                'id' => 1341,
                'date' => '2021-09-22',
                'state' => 'Terengganu',
                'rtk_ag' => 2679,
                'pcr' => 2474,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            341 => 
            array (
                'id' => 1342,
                'date' => '2021-09-22',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 9838,
                'pcr' => 4452,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            342 => 
            array (
                'id' => 1343,
                'date' => '2021-09-22',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 374,
                'pcr' => 336,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            343 => 
            array (
                'id' => 1344,
                'date' => '2021-09-22',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 315,
                'pcr' => 179,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            344 => 
            array (
                'id' => 1345,
                'date' => '2021-09-23',
                'state' => 'Johor',
                'rtk_ag' => 13436,
                'pcr' => 5806,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            345 => 
            array (
                'id' => 1346,
                'date' => '2021-09-23',
                'state' => 'Kedah',
                'rtk_ag' => 4976,
                'pcr' => 2098,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            346 => 
            array (
                'id' => 1347,
                'date' => '2021-09-23',
                'state' => 'Kelantan',
                'rtk_ag' => 1776,
                'pcr' => 2400,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            347 => 
            array (
                'id' => 1348,
                'date' => '2021-09-23',
                'state' => 'Melaka',
                'rtk_ag' => 2712,
                'pcr' => 1177,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            348 => 
            array (
                'id' => 1349,
                'date' => '2021-09-23',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3983,
                'pcr' => 1135,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            349 => 
            array (
                'id' => 1350,
                'date' => '2021-09-23',
                'state' => 'Pahang',
                'rtk_ag' => 2621,
                'pcr' => 4400,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            350 => 
            array (
                'id' => 1351,
                'date' => '2021-09-23',
                'state' => 'Perak',
                'rtk_ag' => 8891,
                'pcr' => 2159,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            351 => 
            array (
                'id' => 1352,
                'date' => '2021-09-23',
                'state' => 'Perlis',
                'rtk_ag' => 240,
                'pcr' => 142,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            352 => 
            array (
                'id' => 1353,
                'date' => '2021-09-23',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 12855,
                'pcr' => 2397,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            353 => 
            array (
                'id' => 1354,
                'date' => '2021-09-23',
                'state' => 'Sabah',
                'rtk_ag' => 4374,
                'pcr' => 1890,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            354 => 
            array (
                'id' => 1355,
                'date' => '2021-09-23',
                'state' => 'Sarawak',
                'rtk_ag' => 5235,
                'pcr' => 5719,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            355 => 
            array (
                'id' => 1356,
                'date' => '2021-09-23',
                'state' => 'Selangor',
                'rtk_ag' => 24764,
                'pcr' => 9659,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            356 => 
            array (
                'id' => 1357,
                'date' => '2021-09-23',
                'state' => 'Terengganu',
                'rtk_ag' => 2207,
                'pcr' => 2661,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            357 => 
            array (
                'id' => 1358,
                'date' => '2021-09-23',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 6956,
                'pcr' => 5796,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            358 => 
            array (
                'id' => 1359,
                'date' => '2021-09-23',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 419,
                'pcr' => 162,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            359 => 
            array (
                'id' => 1360,
                'date' => '2021-09-23',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 255,
                'pcr' => 196,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            360 => 
            array (
                'id' => 1361,
                'date' => '2021-09-24',
                'state' => 'Johor',
                'rtk_ag' => 13684,
                'pcr' => 5766,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            361 => 
            array (
                'id' => 1362,
                'date' => '2021-09-24',
                'state' => 'Kedah',
                'rtk_ag' => 4786,
                'pcr' => 1907,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            362 => 
            array (
                'id' => 1363,
                'date' => '2021-09-24',
                'state' => 'Kelantan',
                'rtk_ag' => 1348,
                'pcr' => 2691,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            363 => 
            array (
                'id' => 1364,
                'date' => '2021-09-24',
                'state' => 'Melaka',
                'rtk_ag' => 2318,
                'pcr' => 1140,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            364 => 
            array (
                'id' => 1365,
                'date' => '2021-09-24',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 6325,
                'pcr' => 1076,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            365 => 
            array (
                'id' => 1366,
                'date' => '2021-09-24',
                'state' => 'Pahang',
                'rtk_ag' => 3478,
                'pcr' => 3633,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            366 => 
            array (
                'id' => 1367,
                'date' => '2021-09-24',
                'state' => 'Perak',
                'rtk_ag' => 8066,
                'pcr' => 2296,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            367 => 
            array (
                'id' => 1368,
                'date' => '2021-09-24',
                'state' => 'Perlis',
                'rtk_ag' => 464,
                'pcr' => 85,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            368 => 
            array (
                'id' => 1369,
                'date' => '2021-09-24',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 13821,
                'pcr' => 2254,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            369 => 
            array (
                'id' => 1370,
                'date' => '2021-09-24',
                'state' => 'Sabah',
                'rtk_ag' => 4138,
                'pcr' => 2204,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            370 => 
            array (
                'id' => 1371,
                'date' => '2021-09-24',
                'state' => 'Sarawak',
                'rtk_ag' => 5093,
                'pcr' => 5949,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            371 => 
            array (
                'id' => 1372,
                'date' => '2021-09-24',
                'state' => 'Selangor',
                'rtk_ag' => 24489,
                'pcr' => 9853,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            372 => 
            array (
                'id' => 1373,
                'date' => '2021-09-24',
                'state' => 'Terengganu',
                'rtk_ag' => 1418,
                'pcr' => 3175,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            373 => 
            array (
                'id' => 1374,
                'date' => '2021-09-24',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 6036,
                'pcr' => 3242,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            374 => 
            array (
                'id' => 1375,
                'date' => '2021-09-24',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 337,
                'pcr' => 160,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            375 => 
            array (
                'id' => 1376,
                'date' => '2021-09-24',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 381,
                'pcr' => 247,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            376 => 
            array (
                'id' => 1377,
                'date' => '2021-09-25',
                'state' => 'Johor',
                'rtk_ag' => 11147,
                'pcr' => 4820,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            377 => 
            array (
                'id' => 1378,
                'date' => '2021-09-25',
                'state' => 'Kedah',
                'rtk_ag' => 3744,
                'pcr' => 1730,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            378 => 
            array (
                'id' => 1379,
                'date' => '2021-09-25',
                'state' => 'Kelantan',
                'rtk_ag' => 1833,
                'pcr' => 1839,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            379 => 
            array (
                'id' => 1380,
                'date' => '2021-09-25',
                'state' => 'Melaka',
                'rtk_ag' => 2405,
                'pcr' => 1495,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            380 => 
            array (
                'id' => 1381,
                'date' => '2021-09-25',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 4289,
                'pcr' => 888,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            381 => 
            array (
                'id' => 1382,
                'date' => '2021-09-25',
                'state' => 'Pahang',
                'rtk_ag' => 1884,
                'pcr' => 3361,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            382 => 
            array (
                'id' => 1383,
                'date' => '2021-09-25',
                'state' => 'Perak',
                'rtk_ag' => 6655,
                'pcr' => 1745,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            383 => 
            array (
                'id' => 1384,
                'date' => '2021-09-25',
                'state' => 'Perlis',
                'rtk_ag' => 380,
                'pcr' => 211,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            384 => 
            array (
                'id' => 1385,
                'date' => '2021-09-25',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 8580,
                'pcr' => 2521,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            385 => 
            array (
                'id' => 1386,
                'date' => '2021-09-25',
                'state' => 'Sabah',
                'rtk_ag' => 3308,
                'pcr' => 1952,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            386 => 
            array (
                'id' => 1387,
                'date' => '2021-09-25',
                'state' => 'Sarawak',
                'rtk_ag' => 3791,
                'pcr' => 5953,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            387 => 
            array (
                'id' => 1388,
                'date' => '2021-09-25',
                'state' => 'Selangor',
                'rtk_ag' => 16624,
                'pcr' => 7307,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            388 => 
            array (
                'id' => 1389,
                'date' => '2021-09-25',
                'state' => 'Terengganu',
                'rtk_ag' => 3123,
                'pcr' => 2853,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            389 => 
            array (
                'id' => 1390,
                'date' => '2021-09-25',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4316,
                'pcr' => 3294,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            390 => 
            array (
                'id' => 1391,
                'date' => '2021-09-25',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 446,
                'pcr' => 226,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            391 => 
            array (
                'id' => 1392,
                'date' => '2021-09-25',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 124,
                'pcr' => 275,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            392 => 
            array (
                'id' => 1393,
                'date' => '2021-09-26',
                'state' => 'Johor',
                'rtk_ag' => 12621,
                'pcr' => 4732,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            393 => 
            array (
                'id' => 1394,
                'date' => '2021-09-26',
                'state' => 'Kedah',
                'rtk_ag' => 3401,
                'pcr' => 1717,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            394 => 
            array (
                'id' => 1395,
                'date' => '2021-09-26',
                'state' => 'Kelantan',
                'rtk_ag' => 2208,
                'pcr' => 1657,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            395 => 
            array (
                'id' => 1396,
                'date' => '2021-09-26',
                'state' => 'Melaka',
                'rtk_ag' => 1578,
                'pcr' => 1332,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            396 => 
            array (
                'id' => 1397,
                'date' => '2021-09-26',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3729,
                'pcr' => 1010,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            397 => 
            array (
                'id' => 1398,
                'date' => '2021-09-26',
                'state' => 'Pahang',
                'rtk_ag' => 1690,
                'pcr' => 3998,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            398 => 
            array (
                'id' => 1399,
                'date' => '2021-09-26',
                'state' => 'Perak',
                'rtk_ag' => 3948,
                'pcr' => 1375,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            399 => 
            array (
                'id' => 1400,
                'date' => '2021-09-26',
                'state' => 'Perlis',
                'rtk_ag' => 356,
                'pcr' => 118,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            400 => 
            array (
                'id' => 1401,
                'date' => '2021-09-26',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 6196,
                'pcr' => 1412,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            401 => 
            array (
                'id' => 1402,
                'date' => '2021-09-26',
                'state' => 'Sabah',
                'rtk_ag' => 2796,
                'pcr' => 1721,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            402 => 
            array (
                'id' => 1403,
                'date' => '2021-09-26',
                'state' => 'Sarawak',
                'rtk_ag' => 3323,
                'pcr' => 4750,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            403 => 
            array (
                'id' => 1404,
                'date' => '2021-09-26',
                'state' => 'Selangor',
                'rtk_ag' => 10774,
                'pcr' => 6975,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            404 => 
            array (
                'id' => 1405,
                'date' => '2021-09-26',
                'state' => 'Terengganu',
                'rtk_ag' => 3327,
                'pcr' => 2251,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            405 => 
            array (
                'id' => 1406,
                'date' => '2021-09-26',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 2855,
                'pcr' => 2366,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            406 => 
            array (
                'id' => 1407,
                'date' => '2021-09-26',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 261,
                'pcr' => 94,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            407 => 
            array (
                'id' => 1408,
                'date' => '2021-09-26',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 106,
                'pcr' => 134,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            408 => 
            array (
                'id' => 1409,
                'date' => '2021-09-27',
                'state' => 'Johor',
                'rtk_ag' => 18539,
                'pcr' => 6029,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            409 => 
            array (
                'id' => 1410,
                'date' => '2021-09-27',
                'state' => 'Kedah',
                'rtk_ag' => 5453,
                'pcr' => 2064,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            410 => 
            array (
                'id' => 1411,
                'date' => '2021-09-27',
                'state' => 'Kelantan',
                'rtk_ag' => 2196,
                'pcr' => 2061,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            411 => 
            array (
                'id' => 1412,
                'date' => '2021-09-27',
                'state' => 'Melaka',
                'rtk_ag' => 2851,
                'pcr' => 912,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            412 => 
            array (
                'id' => 1413,
                'date' => '2021-09-27',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 4921,
                'pcr' => 1035,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            413 => 
            array (
                'id' => 1414,
                'date' => '2021-09-27',
                'state' => 'Pahang',
                'rtk_ag' => 3444,
                'pcr' => 3164,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            414 => 
            array (
                'id' => 1415,
                'date' => '2021-09-27',
                'state' => 'Perak',
                'rtk_ag' => 7326,
                'pcr' => 1158,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            415 => 
            array (
                'id' => 1416,
                'date' => '2021-09-27',
                'state' => 'Perlis',
                'rtk_ag' => 382,
                'pcr' => 52,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            416 => 
            array (
                'id' => 1417,
                'date' => '2021-09-27',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 14700,
                'pcr' => 1598,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            417 => 
            array (
                'id' => 1418,
                'date' => '2021-09-27',
                'state' => 'Sabah',
                'rtk_ag' => 5396,
                'pcr' => 1383,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            418 => 
            array (
                'id' => 1419,
                'date' => '2021-09-27',
                'state' => 'Sarawak',
                'rtk_ag' => 5567,
                'pcr' => 5387,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            419 => 
            array (
                'id' => 1420,
                'date' => '2021-09-27',
                'state' => 'Selangor',
                'rtk_ag' => 32312,
                'pcr' => 8602,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            420 => 
            array (
                'id' => 1421,
                'date' => '2021-09-27',
                'state' => 'Terengganu',
                'rtk_ag' => 2719,
                'pcr' => 2442,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            421 => 
            array (
                'id' => 1422,
                'date' => '2021-09-27',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 11382,
                'pcr' => 3506,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            422 => 
            array (
                'id' => 1423,
                'date' => '2021-09-27',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 454,
                'pcr' => 163,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            423 => 
            array (
                'id' => 1424,
                'date' => '2021-09-27',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 358,
                'pcr' => 166,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            424 => 
            array (
                'id' => 1425,
                'date' => '2021-09-28',
                'state' => 'Johor',
                'rtk_ag' => 17710,
                'pcr' => 5460,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            425 => 
            array (
                'id' => 1426,
                'date' => '2021-09-28',
                'state' => 'Kedah',
                'rtk_ag' => 4382,
                'pcr' => 1975,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            426 => 
            array (
                'id' => 1427,
                'date' => '2021-09-28',
                'state' => 'Kelantan',
                'rtk_ag' => 2170,
                'pcr' => 2543,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            427 => 
            array (
                'id' => 1428,
                'date' => '2021-09-28',
                'state' => 'Melaka',
                'rtk_ag' => 3708,
                'pcr' => 1512,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            428 => 
            array (
                'id' => 1429,
                'date' => '2021-09-28',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 4589,
                'pcr' => 1477,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            429 => 
            array (
                'id' => 1430,
                'date' => '2021-09-28',
                'state' => 'Pahang',
                'rtk_ag' => 2753,
                'pcr' => 2959,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            430 => 
            array (
                'id' => 1431,
                'date' => '2021-09-28',
                'state' => 'Perak',
                'rtk_ag' => 7726,
                'pcr' => 2191,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            431 => 
            array (
                'id' => 1432,
                'date' => '2021-09-28',
                'state' => 'Perlis',
                'rtk_ag' => 271,
                'pcr' => 142,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            432 => 
            array (
                'id' => 1433,
                'date' => '2021-09-28',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 11007,
                'pcr' => 2516,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            433 => 
            array (
                'id' => 1434,
                'date' => '2021-09-28',
                'state' => 'Sabah',
                'rtk_ag' => 4763,
                'pcr' => 1803,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            434 => 
            array (
                'id' => 1435,
                'date' => '2021-09-28',
                'state' => 'Sarawak',
                'rtk_ag' => 6004,
                'pcr' => 6158,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            435 => 
            array (
                'id' => 1436,
                'date' => '2021-09-28',
                'state' => 'Selangor',
                'rtk_ag' => 30828,
                'pcr' => 11717,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            436 => 
            array (
                'id' => 1437,
                'date' => '2021-09-28',
                'state' => 'Terengganu',
                'rtk_ag' => 2536,
                'pcr' => 2067,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            437 => 
            array (
                'id' => 1438,
                'date' => '2021-09-28',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5952,
                'pcr' => 4258,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            438 => 
            array (
                'id' => 1439,
                'date' => '2021-09-28',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 395,
                'pcr' => 152,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            439 => 
            array (
                'id' => 1440,
                'date' => '2021-09-28',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 311,
                'pcr' => 160,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            440 => 
            array (
                'id' => 1441,
                'date' => '2021-09-29',
                'state' => 'Johor',
                'rtk_ag' => 15771,
                'pcr' => 4593,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            441 => 
            array (
                'id' => 1442,
                'date' => '2021-09-29',
                'state' => 'Kedah',
                'rtk_ag' => 4279,
                'pcr' => 2223,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            442 => 
            array (
                'id' => 1443,
                'date' => '2021-09-29',
                'state' => 'Kelantan',
                'rtk_ag' => 2120,
                'pcr' => 1786,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            443 => 
            array (
                'id' => 1444,
                'date' => '2021-09-29',
                'state' => 'Melaka',
                'rtk_ag' => 3195,
                'pcr' => 1451,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            444 => 
            array (
                'id' => 1445,
                'date' => '2021-09-29',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 6935,
                'pcr' => 970,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            445 => 
            array (
                'id' => 1446,
                'date' => '2021-09-29',
                'state' => 'Pahang',
                'rtk_ag' => 4091,
                'pcr' => 3307,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            446 => 
            array (
                'id' => 1447,
                'date' => '2021-09-29',
                'state' => 'Perak',
                'rtk_ag' => 6208,
                'pcr' => 2089,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            447 => 
            array (
                'id' => 1448,
                'date' => '2021-09-29',
                'state' => 'Perlis',
                'rtk_ag' => 372,
                'pcr' => 157,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            448 => 
            array (
                'id' => 1449,
                'date' => '2021-09-29',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 9126,
                'pcr' => 2241,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            449 => 
            array (
                'id' => 1450,
                'date' => '2021-09-29',
                'state' => 'Sabah',
                'rtk_ag' => 4571,
                'pcr' => 2046,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            450 => 
            array (
                'id' => 1451,
                'date' => '2021-09-29',
                'state' => 'Sarawak',
                'rtk_ag' => 5505,
                'pcr' => 5768,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            451 => 
            array (
                'id' => 1452,
                'date' => '2021-09-29',
                'state' => 'Selangor',
                'rtk_ag' => 29291,
                'pcr' => 11781,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            452 => 
            array (
                'id' => 1453,
                'date' => '2021-09-29',
                'state' => 'Terengganu',
                'rtk_ag' => 2398,
                'pcr' => 3136,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            453 => 
            array (
                'id' => 1454,
                'date' => '2021-09-29',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5020,
                'pcr' => 4212,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            454 => 
            array (
                'id' => 1455,
                'date' => '2021-09-29',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 243,
                'pcr' => 236,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            455 => 
            array (
                'id' => 1456,
                'date' => '2021-09-29',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 349,
                'pcr' => 186,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            456 => 
            array (
                'id' => 1457,
                'date' => '2021-09-30',
                'state' => 'Johor',
                'rtk_ag' => 16328,
                'pcr' => 4723,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            457 => 
            array (
                'id' => 1458,
                'date' => '2021-09-30',
                'state' => 'Kedah',
                'rtk_ag' => 4507,
                'pcr' => 1682,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            458 => 
            array (
                'id' => 1459,
                'date' => '2021-09-30',
                'state' => 'Kelantan',
                'rtk_ag' => 2605,
                'pcr' => 2395,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            459 => 
            array (
                'id' => 1460,
                'date' => '2021-09-30',
                'state' => 'Melaka',
                'rtk_ag' => 3758,
                'pcr' => 1049,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            460 => 
            array (
                'id' => 1461,
                'date' => '2021-09-30',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 4093,
                'pcr' => 946,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            461 => 
            array (
                'id' => 1462,
                'date' => '2021-09-30',
                'state' => 'Pahang',
                'rtk_ag' => 3139,
                'pcr' => 3711,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            462 => 
            array (
                'id' => 1463,
                'date' => '2021-09-30',
                'state' => 'Perak',
                'rtk_ag' => 5772,
                'pcr' => 1638,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            463 => 
            array (
                'id' => 1464,
                'date' => '2021-09-30',
                'state' => 'Perlis',
                'rtk_ag' => 392,
                'pcr' => 142,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            464 => 
            array (
                'id' => 1465,
                'date' => '2021-09-30',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 8771,
                'pcr' => 2015,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            465 => 
            array (
                'id' => 1466,
                'date' => '2021-09-30',
                'state' => 'Sabah',
                'rtk_ag' => 4938,
                'pcr' => 1422,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            466 => 
            array (
                'id' => 1467,
                'date' => '2021-09-30',
                'state' => 'Sarawak',
                'rtk_ag' => 6232,
                'pcr' => 5234,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            467 => 
            array (
                'id' => 1468,
                'date' => '2021-09-30',
                'state' => 'Selangor',
                'rtk_ag' => 25900,
                'pcr' => 9334,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            468 => 
            array (
                'id' => 1469,
                'date' => '2021-09-30',
                'state' => 'Terengganu',
                'rtk_ag' => 2863,
                'pcr' => 2899,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            469 => 
            array (
                'id' => 1470,
                'date' => '2021-09-30',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 6811,
                'pcr' => 5530,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            470 => 
            array (
                'id' => 1471,
                'date' => '2021-09-30',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 281,
                'pcr' => 207,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            471 => 
            array (
                'id' => 1472,
                'date' => '2021-09-30',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 283,
                'pcr' => 155,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            472 => 
            array (
                'id' => 1473,
                'date' => '2021-10-01',
                'state' => 'Johor',
                'rtk_ag' => 13946,
                'pcr' => 4718,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            473 => 
            array (
                'id' => 1474,
                'date' => '2021-10-01',
                'state' => 'Kedah',
                'rtk_ag' => 5060,
                'pcr' => 1436,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            474 => 
            array (
                'id' => 1475,
                'date' => '2021-10-01',
                'state' => 'Kelantan',
                'rtk_ag' => 1577,
                'pcr' => 2052,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            475 => 
            array (
                'id' => 1476,
                'date' => '2021-10-01',
                'state' => 'Melaka',
                'rtk_ag' => 2699,
                'pcr' => 842,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            476 => 
            array (
                'id' => 1477,
                'date' => '2021-10-01',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 4441,
                'pcr' => 1285,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            477 => 
            array (
                'id' => 1478,
                'date' => '2021-10-01',
                'state' => 'Pahang',
                'rtk_ag' => 3479,
                'pcr' => 2563,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            478 => 
            array (
                'id' => 1479,
                'date' => '2021-10-01',
                'state' => 'Perak',
                'rtk_ag' => 6906,
                'pcr' => 1697,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            479 => 
            array (
                'id' => 1480,
                'date' => '2021-10-01',
                'state' => 'Perlis',
                'rtk_ag' => 465,
                'pcr' => 133,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            480 => 
            array (
                'id' => 1481,
                'date' => '2021-10-01',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 10329,
                'pcr' => 1977,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            481 => 
            array (
                'id' => 1482,
                'date' => '2021-10-01',
                'state' => 'Sabah',
                'rtk_ag' => 4305,
                'pcr' => 2057,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            482 => 
            array (
                'id' => 1483,
                'date' => '2021-10-01',
                'state' => 'Sarawak',
                'rtk_ag' => 5985,
                'pcr' => 4254,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            483 => 
            array (
                'id' => 1484,
                'date' => '2021-10-01',
                'state' => 'Selangor',
                'rtk_ag' => 30068,
                'pcr' => 7638,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            484 => 
            array (
                'id' => 1485,
                'date' => '2021-10-01',
                'state' => 'Terengganu',
                'rtk_ag' => 1432,
                'pcr' => 2333,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            485 => 
            array (
                'id' => 1486,
                'date' => '2021-10-01',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 9272,
                'pcr' => 4026,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            486 => 
            array (
                'id' => 1487,
                'date' => '2021-10-01',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 436,
                'pcr' => 196,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            487 => 
            array (
                'id' => 1488,
                'date' => '2021-10-01',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 425,
                'pcr' => 175,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            488 => 
            array (
                'id' => 1489,
                'date' => '2021-10-02',
                'state' => 'Johor',
                'rtk_ag' => 8651,
                'pcr' => 3477,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            489 => 
            array (
                'id' => 1490,
                'date' => '2021-10-02',
                'state' => 'Kedah',
                'rtk_ag' => 3676,
                'pcr' => 1231,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            490 => 
            array (
                'id' => 1491,
                'date' => '2021-10-02',
                'state' => 'Kelantan',
                'rtk_ag' => 1994,
                'pcr' => 1767,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            491 => 
            array (
                'id' => 1492,
                'date' => '2021-10-02',
                'state' => 'Melaka',
                'rtk_ag' => 1883,
                'pcr' => 1148,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            492 => 
            array (
                'id' => 1493,
                'date' => '2021-10-02',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2448,
                'pcr' => 1350,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            493 => 
            array (
                'id' => 1494,
                'date' => '2021-10-02',
                'state' => 'Pahang',
                'rtk_ag' => 2058,
                'pcr' => 2297,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            494 => 
            array (
                'id' => 1495,
                'date' => '2021-10-02',
                'state' => 'Perak',
                'rtk_ag' => 5580,
                'pcr' => 1590,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            495 => 
            array (
                'id' => 1496,
                'date' => '2021-10-02',
                'state' => 'Perlis',
                'rtk_ag' => 386,
                'pcr' => 153,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            496 => 
            array (
                'id' => 1497,
                'date' => '2021-10-02',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 7666,
                'pcr' => 1825,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            497 => 
            array (
                'id' => 1498,
                'date' => '2021-10-02',
                'state' => 'Sabah',
                'rtk_ag' => 2958,
                'pcr' => 2150,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            498 => 
            array (
                'id' => 1499,
                'date' => '2021-10-02',
                'state' => 'Sarawak',
                'rtk_ag' => 3985,
                'pcr' => 4019,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            499 => 
            array (
                'id' => 1500,
                'date' => '2021-10-02',
                'state' => 'Selangor',
                'rtk_ag' => 17192,
                'pcr' => 7120,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
        ));
        \DB::table('test_states')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'date' => '2021-10-02',
                'state' => 'Terengganu',
                'rtk_ag' => 3060,
                'pcr' => 2630,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            1 => 
            array (
                'id' => 1502,
                'date' => '2021-10-02',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5805,
                'pcr' => 3133,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            2 => 
            array (
                'id' => 1503,
                'date' => '2021-10-02',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 344,
                'pcr' => 174,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            3 => 
            array (
                'id' => 1504,
                'date' => '2021-10-02',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 141,
                'pcr' => 305,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            4 => 
            array (
                'id' => 1505,
                'date' => '2021-10-03',
                'state' => 'Johor',
                'rtk_ag' => 10869,
                'pcr' => 3856,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            5 => 
            array (
                'id' => 1506,
                'date' => '2021-10-03',
                'state' => 'Kedah',
                'rtk_ag' => 5471,
                'pcr' => 979,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            6 => 
            array (
                'id' => 1507,
                'date' => '2021-10-03',
                'state' => 'Kelantan',
                'rtk_ag' => 2925,
                'pcr' => 1116,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            7 => 
            array (
                'id' => 1508,
                'date' => '2021-10-03',
                'state' => 'Melaka',
                'rtk_ag' => 1483,
                'pcr' => 694,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            8 => 
            array (
                'id' => 1509,
                'date' => '2021-10-03',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2193,
                'pcr' => 924,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            9 => 
            array (
                'id' => 1510,
                'date' => '2021-10-03',
                'state' => 'Pahang',
                'rtk_ag' => 2782,
                'pcr' => 1860,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            10 => 
            array (
                'id' => 1511,
                'date' => '2021-10-03',
                'state' => 'Perak',
                'rtk_ag' => 5597,
                'pcr' => 914,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            11 => 
            array (
                'id' => 1512,
                'date' => '2021-10-03',
                'state' => 'Perlis',
                'rtk_ag' => 393,
                'pcr' => 89,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            12 => 
            array (
                'id' => 1513,
                'date' => '2021-10-03',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 6786,
                'pcr' => 1249,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            13 => 
            array (
                'id' => 1514,
                'date' => '2021-10-03',
                'state' => 'Sabah',
                'rtk_ag' => 3160,
                'pcr' => 1453,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            14 => 
            array (
                'id' => 1515,
                'date' => '2021-10-03',
                'state' => 'Sarawak',
                'rtk_ag' => 3665,
                'pcr' => 2626,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            15 => 
            array (
                'id' => 1516,
                'date' => '2021-10-03',
                'state' => 'Selangor',
                'rtk_ag' => 15940,
                'pcr' => 6475,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            16 => 
            array (
                'id' => 1517,
                'date' => '2021-10-03',
                'state' => 'Terengganu',
                'rtk_ag' => 3578,
                'pcr' => 2511,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            17 => 
            array (
                'id' => 1518,
                'date' => '2021-10-03',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5076,
                'pcr' => 2169,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            18 => 
            array (
                'id' => 1519,
                'date' => '2021-10-03',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 232,
                'pcr' => 147,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            19 => 
            array (
                'id' => 1520,
                'date' => '2021-10-03',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 147,
                'pcr' => 112,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            20 => 
            array (
                'id' => 1521,
                'date' => '2021-10-04',
                'state' => 'Johor',
                'rtk_ag' => 20342,
                'pcr' => 4661,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            21 => 
            array (
                'id' => 1522,
                'date' => '2021-10-04',
                'state' => 'Kedah',
                'rtk_ag' => 7894,
                'pcr' => 930,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            22 => 
            array (
                'id' => 1523,
                'date' => '2021-10-04',
                'state' => 'Kelantan',
                'rtk_ag' => 3058,
                'pcr' => 2463,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            23 => 
            array (
                'id' => 1524,
                'date' => '2021-10-04',
                'state' => 'Melaka',
                'rtk_ag' => 6003,
                'pcr' => 759,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            24 => 
            array (
                'id' => 1525,
                'date' => '2021-10-04',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5591,
                'pcr' => 1145,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            25 => 
            array (
                'id' => 1526,
                'date' => '2021-10-04',
                'state' => 'Pahang',
                'rtk_ag' => 5542,
                'pcr' => 2528,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            26 => 
            array (
                'id' => 1527,
                'date' => '2021-10-04',
                'state' => 'Perak',
                'rtk_ag' => 8721,
                'pcr' => 952,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            27 => 
            array (
                'id' => 1528,
                'date' => '2021-10-04',
                'state' => 'Perlis',
                'rtk_ag' => 473,
                'pcr' => 89,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            28 => 
            array (
                'id' => 1529,
                'date' => '2021-10-04',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 13996,
                'pcr' => 1543,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            29 => 
            array (
                'id' => 1530,
                'date' => '2021-10-04',
                'state' => 'Sabah',
                'rtk_ag' => 4989,
                'pcr' => 1390,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            30 => 
            array (
                'id' => 1531,
                'date' => '2021-10-04',
                'state' => 'Sarawak',
                'rtk_ag' => 7029,
                'pcr' => 3402,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            31 => 
            array (
                'id' => 1532,
                'date' => '2021-10-04',
                'state' => 'Selangor',
                'rtk_ag' => 41047,
                'pcr' => 9420,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            32 => 
            array (
                'id' => 1533,
                'date' => '2021-10-04',
                'state' => 'Terengganu',
                'rtk_ag' => 3001,
                'pcr' => 1979,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            33 => 
            array (
                'id' => 1534,
                'date' => '2021-10-04',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 12397,
                'pcr' => 3575,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            34 => 
            array (
                'id' => 1535,
                'date' => '2021-10-04',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 602,
                'pcr' => 148,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            35 => 
            array (
                'id' => 1536,
                'date' => '2021-10-04',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 515,
                'pcr' => 196,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            36 => 
            array (
                'id' => 1537,
                'date' => '2021-10-05',
                'state' => 'Johor',
                'rtk_ag' => 16242,
                'pcr' => 5339,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            37 => 
            array (
                'id' => 1538,
                'date' => '2021-10-05',
                'state' => 'Kedah',
                'rtk_ag' => 6031,
                'pcr' => 1718,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            38 => 
            array (
                'id' => 1539,
                'date' => '2021-10-05',
                'state' => 'Kelantan',
                'rtk_ag' => 2684,
                'pcr' => 1396,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            39 => 
            array (
                'id' => 1540,
                'date' => '2021-10-05',
                'state' => 'Melaka',
                'rtk_ag' => 3278,
                'pcr' => 1502,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            40 => 
            array (
                'id' => 1541,
                'date' => '2021-10-05',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5590,
                'pcr' => 1136,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            41 => 
            array (
                'id' => 1542,
                'date' => '2021-10-05',
                'state' => 'Pahang',
                'rtk_ag' => 4075,
                'pcr' => 2089,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            42 => 
            array (
                'id' => 1543,
                'date' => '2021-10-05',
                'state' => 'Perak',
                'rtk_ag' => 8140,
                'pcr' => 2482,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            43 => 
            array (
                'id' => 1544,
                'date' => '2021-10-05',
                'state' => 'Perlis',
                'rtk_ag' => 406,
                'pcr' => 118,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            44 => 
            array (
                'id' => 1545,
                'date' => '2021-10-05',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 11355,
                'pcr' => 2353,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            45 => 
            array (
                'id' => 1546,
                'date' => '2021-10-05',
                'state' => 'Sabah',
                'rtk_ag' => 4769,
                'pcr' => 1719,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            46 => 
            array (
                'id' => 1547,
                'date' => '2021-10-05',
                'state' => 'Sarawak',
                'rtk_ag' => 5724,
                'pcr' => 3813,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            47 => 
            array (
                'id' => 1548,
                'date' => '2021-10-05',
                'state' => 'Selangor',
                'rtk_ag' => 32423,
                'pcr' => 11817,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            48 => 
            array (
                'id' => 1549,
                'date' => '2021-10-05',
                'state' => 'Terengganu',
                'rtk_ag' => 2572,
                'pcr' => 2453,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            49 => 
            array (
                'id' => 1550,
                'date' => '2021-10-05',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 9410,
                'pcr' => 5795,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            50 => 
            array (
                'id' => 1551,
                'date' => '2021-10-05',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 475,
                'pcr' => 297,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            51 => 
            array (
                'id' => 1552,
                'date' => '2021-10-05',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 371,
                'pcr' => 201,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            52 => 
            array (
                'id' => 1553,
                'date' => '2021-10-06',
                'state' => 'Johor',
                'rtk_ag' => 14520,
                'pcr' => 5107,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            53 => 
            array (
                'id' => 1554,
                'date' => '2021-10-06',
                'state' => 'Kedah',
                'rtk_ag' => 6091,
                'pcr' => 1117,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            54 => 
            array (
                'id' => 1555,
                'date' => '2021-10-06',
                'state' => 'Kelantan',
                'rtk_ag' => 2841,
                'pcr' => 2143,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            55 => 
            array (
                'id' => 1556,
                'date' => '2021-10-06',
                'state' => 'Melaka',
                'rtk_ag' => 2488,
                'pcr' => 1016,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            56 => 
            array (
                'id' => 1557,
                'date' => '2021-10-06',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 6819,
                'pcr' => 1028,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            57 => 
            array (
                'id' => 1558,
                'date' => '2021-10-06',
                'state' => 'Pahang',
                'rtk_ag' => 4623,
                'pcr' => 1577,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            58 => 
            array (
                'id' => 1559,
                'date' => '2021-10-06',
                'state' => 'Perak',
                'rtk_ag' => 7928,
                'pcr' => 1513,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            59 => 
            array (
                'id' => 1560,
                'date' => '2021-10-06',
                'state' => 'Perlis',
                'rtk_ag' => 364,
                'pcr' => 343,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            60 => 
            array (
                'id' => 1561,
                'date' => '2021-10-06',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 11781,
                'pcr' => 1956,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            61 => 
            array (
                'id' => 1562,
                'date' => '2021-10-06',
                'state' => 'Sabah',
                'rtk_ag' => 4528,
                'pcr' => 1730,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            62 => 
            array (
                'id' => 1563,
                'date' => '2021-10-06',
                'state' => 'Sarawak',
                'rtk_ag' => 5323,
                'pcr' => 3588,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            63 => 
            array (
                'id' => 1564,
                'date' => '2021-10-06',
                'state' => 'Selangor',
                'rtk_ag' => 31372,
                'pcr' => 11197,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            64 => 
            array (
                'id' => 1565,
                'date' => '2021-10-06',
                'state' => 'Terengganu',
                'rtk_ag' => 2795,
                'pcr' => 2325,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            65 => 
            array (
                'id' => 1566,
                'date' => '2021-10-06',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 8022,
                'pcr' => 4643,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            66 => 
            array (
                'id' => 1567,
                'date' => '2021-10-06',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 608,
                'pcr' => 316,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            67 => 
            array (
                'id' => 1568,
                'date' => '2021-10-06',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 343,
                'pcr' => 194,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            68 => 
            array (
                'id' => 1569,
                'date' => '2021-10-07',
                'state' => 'Johor',
                'rtk_ag' => 14339,
                'pcr' => 4047,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            69 => 
            array (
                'id' => 1570,
                'date' => '2021-10-07',
                'state' => 'Kedah',
                'rtk_ag' => 5357,
                'pcr' => 1128,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            70 => 
            array (
                'id' => 1571,
                'date' => '2021-10-07',
                'state' => 'Kelantan',
                'rtk_ag' => 2868,
                'pcr' => 1348,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            71 => 
            array (
                'id' => 1572,
                'date' => '2021-10-07',
                'state' => 'Melaka',
                'rtk_ag' => 2398,
                'pcr' => 1364,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            72 => 
            array (
                'id' => 1573,
                'date' => '2021-10-07',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 4091,
                'pcr' => 1489,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            73 => 
            array (
                'id' => 1574,
                'date' => '2021-10-07',
                'state' => 'Pahang',
                'rtk_ag' => 3931,
                'pcr' => 2384,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            74 => 
            array (
                'id' => 1575,
                'date' => '2021-10-07',
                'state' => 'Perak',
                'rtk_ag' => 8078,
                'pcr' => 1350,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            75 => 
            array (
                'id' => 1576,
                'date' => '2021-10-07',
                'state' => 'Perlis',
                'rtk_ag' => 515,
                'pcr' => 157,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            76 => 
            array (
                'id' => 1577,
                'date' => '2021-10-07',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 11708,
                'pcr' => 1664,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            77 => 
            array (
                'id' => 1578,
                'date' => '2021-10-07',
                'state' => 'Sabah',
                'rtk_ag' => 4177,
                'pcr' => 1783,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            78 => 
            array (
                'id' => 1579,
                'date' => '2021-10-07',
                'state' => 'Sarawak',
                'rtk_ag' => 5146,
                'pcr' => 3241,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            79 => 
            array (
                'id' => 1580,
                'date' => '2021-10-07',
                'state' => 'Selangor',
                'rtk_ag' => 27969,
                'pcr' => 8347,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            80 => 
            array (
                'id' => 1581,
                'date' => '2021-10-07',
                'state' => 'Terengganu',
                'rtk_ag' => 2382,
                'pcr' => 1968,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            81 => 
            array (
                'id' => 1582,
                'date' => '2021-10-07',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 6131,
                'pcr' => 4922,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            82 => 
            array (
                'id' => 1583,
                'date' => '2021-10-07',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 660,
                'pcr' => 52,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            83 => 
            array (
                'id' => 1584,
                'date' => '2021-10-07',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 403,
                'pcr' => 116,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            84 => 
            array (
                'id' => 1585,
                'date' => '2021-10-08',
                'state' => 'Johor',
                'rtk_ag' => 11840,
                'pcr' => 3885,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            85 => 
            array (
                'id' => 1586,
                'date' => '2021-10-08',
                'state' => 'Kedah',
                'rtk_ag' => 4302,
                'pcr' => 756,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            86 => 
            array (
                'id' => 1587,
                'date' => '2021-10-08',
                'state' => 'Kelantan',
                'rtk_ag' => 1745,
                'pcr' => 2281,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            87 => 
            array (
                'id' => 1588,
                'date' => '2021-10-08',
                'state' => 'Melaka',
                'rtk_ag' => 2691,
                'pcr' => 885,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            88 => 
            array (
                'id' => 1589,
                'date' => '2021-10-08',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5963,
                'pcr' => 1097,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            89 => 
            array (
                'id' => 1590,
                'date' => '2021-10-08',
                'state' => 'Pahang',
                'rtk_ag' => 4220,
                'pcr' => 2415,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            90 => 
            array (
                'id' => 1591,
                'date' => '2021-10-08',
                'state' => 'Perak',
                'rtk_ag' => 7421,
                'pcr' => 1470,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            91 => 
            array (
                'id' => 1592,
                'date' => '2021-10-08',
                'state' => 'Perlis',
                'rtk_ag' => 450,
                'pcr' => 145,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            92 => 
            array (
                'id' => 1593,
                'date' => '2021-10-08',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 9631,
                'pcr' => 1730,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            93 => 
            array (
                'id' => 1594,
                'date' => '2021-10-08',
                'state' => 'Sabah',
                'rtk_ag' => 3645,
                'pcr' => 1937,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            94 => 
            array (
                'id' => 1595,
                'date' => '2021-10-08',
                'state' => 'Sarawak',
                'rtk_ag' => 5359,
                'pcr' => 3107,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            95 => 
            array (
                'id' => 1596,
                'date' => '2021-10-08',
                'state' => 'Selangor',
                'rtk_ag' => 24793,
                'pcr' => 8111,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            96 => 
            array (
                'id' => 1597,
                'date' => '2021-10-08',
                'state' => 'Terengganu',
                'rtk_ag' => 1759,
                'pcr' => 1746,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            97 => 
            array (
                'id' => 1598,
                'date' => '2021-10-08',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5523,
                'pcr' => 2852,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            98 => 
            array (
                'id' => 1599,
                'date' => '2021-10-08',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 798,
                'pcr' => 88,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            99 => 
            array (
                'id' => 1600,
                'date' => '2021-10-08',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 315,
                'pcr' => 186,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            100 => 
            array (
                'id' => 1601,
                'date' => '2021-10-09',
                'state' => 'Johor',
                'rtk_ag' => 9665,
                'pcr' => 3087,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            101 => 
            array (
                'id' => 1602,
                'date' => '2021-10-09',
                'state' => 'Kedah',
                'rtk_ag' => 3204,
                'pcr' => 1083,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            102 => 
            array (
                'id' => 1603,
                'date' => '2021-10-09',
                'state' => 'Kelantan',
                'rtk_ag' => 2092,
                'pcr' => 978,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            103 => 
            array (
                'id' => 1604,
                'date' => '2021-10-09',
                'state' => 'Melaka',
                'rtk_ag' => 1926,
                'pcr' => 741,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            104 => 
            array (
                'id' => 1605,
                'date' => '2021-10-09',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 4196,
                'pcr' => 1269,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            105 => 
            array (
                'id' => 1606,
                'date' => '2021-10-09',
                'state' => 'Pahang',
                'rtk_ag' => 2823,
                'pcr' => 2006,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            106 => 
            array (
                'id' => 1607,
                'date' => '2021-10-09',
                'state' => 'Perak',
                'rtk_ag' => 4389,
                'pcr' => 1386,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            107 => 
            array (
                'id' => 1608,
                'date' => '2021-10-09',
                'state' => 'Perlis',
                'rtk_ag' => 490,
                'pcr' => 119,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            108 => 
            array (
                'id' => 1609,
                'date' => '2021-10-09',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 6011,
                'pcr' => 2060,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            109 => 
            array (
                'id' => 1610,
                'date' => '2021-10-09',
                'state' => 'Sabah',
                'rtk_ag' => 3268,
                'pcr' => 1437,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            110 => 
            array (
                'id' => 1611,
                'date' => '2021-10-09',
                'state' => 'Sarawak',
                'rtk_ag' => 4175,
                'pcr' => 2918,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            111 => 
            array (
                'id' => 1612,
                'date' => '2021-10-09',
                'state' => 'Selangor',
                'rtk_ag' => 16198,
                'pcr' => 7084,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            112 => 
            array (
                'id' => 1613,
                'date' => '2021-10-09',
                'state' => 'Terengganu',
                'rtk_ag' => 3633,
                'pcr' => 1511,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            113 => 
            array (
                'id' => 1614,
                'date' => '2021-10-09',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4389,
                'pcr' => 2712,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            114 => 
            array (
                'id' => 1615,
                'date' => '2021-10-09',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 541,
                'pcr' => 112,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            115 => 
            array (
                'id' => 1616,
                'date' => '2021-10-09',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 260,
                'pcr' => 246,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            116 => 
            array (
                'id' => 1617,
                'date' => '2021-10-10',
                'state' => 'Johor',
                'rtk_ag' => 10960,
                'pcr' => 2773,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            117 => 
            array (
                'id' => 1618,
                'date' => '2021-10-10',
                'state' => 'Kedah',
                'rtk_ag' => 3924,
                'pcr' => 771,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            118 => 
            array (
                'id' => 1619,
                'date' => '2021-10-10',
                'state' => 'Kelantan',
                'rtk_ag' => 3218,
                'pcr' => 1357,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            119 => 
            array (
                'id' => 1620,
                'date' => '2021-10-10',
                'state' => 'Melaka',
                'rtk_ag' => 2438,
                'pcr' => 834,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            120 => 
            array (
                'id' => 1621,
                'date' => '2021-10-10',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 4002,
                'pcr' => 937,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            121 => 
            array (
                'id' => 1622,
                'date' => '2021-10-10',
                'state' => 'Pahang',
                'rtk_ag' => 2666,
                'pcr' => 1382,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            122 => 
            array (
                'id' => 1623,
                'date' => '2021-10-10',
                'state' => 'Perak',
                'rtk_ag' => 3148,
                'pcr' => 1020,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            123 => 
            array (
                'id' => 1624,
                'date' => '2021-10-10',
                'state' => 'Perlis',
                'rtk_ag' => 449,
                'pcr' => 70,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            124 => 
            array (
                'id' => 1625,
                'date' => '2021-10-10',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 5831,
                'pcr' => 1104,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            125 => 
            array (
                'id' => 1626,
                'date' => '2021-10-10',
                'state' => 'Sabah',
                'rtk_ag' => 2674,
                'pcr' => 1518,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            126 => 
            array (
                'id' => 1627,
                'date' => '2021-10-10',
                'state' => 'Sarawak',
                'rtk_ag' => 3609,
                'pcr' => 2400,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            127 => 
            array (
                'id' => 1628,
                'date' => '2021-10-10',
                'state' => 'Selangor',
                'rtk_ag' => 15261,
                'pcr' => 7234,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            128 => 
            array (
                'id' => 1629,
                'date' => '2021-10-10',
                'state' => 'Terengganu',
                'rtk_ag' => 3916,
                'pcr' => 1174,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            129 => 
            array (
                'id' => 1630,
                'date' => '2021-10-10',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4739,
                'pcr' => 2221,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            130 => 
            array (
                'id' => 1631,
                'date' => '2021-10-10',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 338,
                'pcr' => 18,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            131 => 
            array (
                'id' => 1632,
                'date' => '2021-10-10',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 268,
                'pcr' => 167,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            132 => 
            array (
                'id' => 1633,
                'date' => '2021-10-11',
                'state' => 'Johor',
                'rtk_ag' => 20958,
                'pcr' => 5061,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            133 => 
            array (
                'id' => 1634,
                'date' => '2021-10-11',
                'state' => 'Kedah',
                'rtk_ag' => 6048,
                'pcr' => 941,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            134 => 
            array (
                'id' => 1635,
                'date' => '2021-10-11',
                'state' => 'Kelantan',
                'rtk_ag' => 3232,
                'pcr' => 1780,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            135 => 
            array (
                'id' => 1636,
                'date' => '2021-10-11',
                'state' => 'Melaka',
                'rtk_ag' => 4334,
                'pcr' => 716,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            136 => 
            array (
                'id' => 1637,
                'date' => '2021-10-11',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 6608,
                'pcr' => 1156,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            137 => 
            array (
                'id' => 1638,
                'date' => '2021-10-11',
                'state' => 'Pahang',
                'rtk_ag' => 5118,
                'pcr' => 1055,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            138 => 
            array (
                'id' => 1639,
                'date' => '2021-10-11',
                'state' => 'Perak',
                'rtk_ag' => 7911,
                'pcr' => 811,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            139 => 
            array (
                'id' => 1640,
                'date' => '2021-10-11',
                'state' => 'Perlis',
                'rtk_ag' => 348,
                'pcr' => 113,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            140 => 
            array (
                'id' => 1641,
                'date' => '2021-10-11',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 13081,
                'pcr' => 1244,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            141 => 
            array (
                'id' => 1642,
                'date' => '2021-10-11',
                'state' => 'Sabah',
                'rtk_ag' => 5410,
                'pcr' => 1318,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            142 => 
            array (
                'id' => 1643,
                'date' => '2021-10-11',
                'state' => 'Sarawak',
                'rtk_ag' => 6093,
                'pcr' => 2856,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            143 => 
            array (
                'id' => 1644,
                'date' => '2021-10-11',
                'state' => 'Selangor',
                'rtk_ag' => 35302,
                'pcr' => 8603,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            144 => 
            array (
                'id' => 1645,
                'date' => '2021-10-11',
                'state' => 'Terengganu',
                'rtk_ag' => 2643,
                'pcr' => 1351,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            145 => 
            array (
                'id' => 1646,
                'date' => '2021-10-11',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 10698,
                'pcr' => 4853,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            146 => 
            array (
                'id' => 1647,
                'date' => '2021-10-11',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 694,
                'pcr' => 235,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            147 => 
            array (
                'id' => 1648,
                'date' => '2021-10-11',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 462,
                'pcr' => 198,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            148 => 
            array (
                'id' => 1649,
                'date' => '2021-10-12',
                'state' => 'Johor',
                'rtk_ag' => 18160,
                'pcr' => 4918,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            149 => 
            array (
                'id' => 1650,
                'date' => '2021-10-12',
                'state' => 'Kedah',
                'rtk_ag' => 4400,
                'pcr' => 1101,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            150 => 
            array (
                'id' => 1651,
                'date' => '2021-10-12',
                'state' => 'Kelantan',
                'rtk_ag' => 3011,
                'pcr' => 1199,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            151 => 
            array (
                'id' => 1652,
                'date' => '2021-10-12',
                'state' => 'Melaka',
                'rtk_ag' => 3117,
                'pcr' => 1139,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            152 => 
            array (
                'id' => 1653,
                'date' => '2021-10-12',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5813,
                'pcr' => 1432,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            153 => 
            array (
                'id' => 1654,
                'date' => '2021-10-12',
                'state' => 'Pahang',
                'rtk_ag' => 3350,
                'pcr' => 1382,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            154 => 
            array (
                'id' => 1655,
                'date' => '2021-10-12',
                'state' => 'Perak',
                'rtk_ag' => 5668,
                'pcr' => 1570,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            155 => 
            array (
                'id' => 1656,
                'date' => '2021-10-12',
                'state' => 'Perlis',
                'rtk_ag' => 271,
                'pcr' => 102,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            156 => 
            array (
                'id' => 1657,
                'date' => '2021-10-12',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 10404,
                'pcr' => 2160,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            157 => 
            array (
                'id' => 1658,
                'date' => '2021-10-12',
                'state' => 'Sabah',
                'rtk_ag' => 4272,
                'pcr' => 1508,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            158 => 
            array (
                'id' => 1659,
                'date' => '2021-10-12',
                'state' => 'Sarawak',
                'rtk_ag' => 6206,
                'pcr' => 3298,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            159 => 
            array (
                'id' => 1660,
                'date' => '2021-10-12',
                'state' => 'Selangor',
                'rtk_ag' => 31412,
                'pcr' => 13129,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            160 => 
            array (
                'id' => 1661,
                'date' => '2021-10-12',
                'state' => 'Terengganu',
                'rtk_ag' => 2752,
                'pcr' => 1419,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            161 => 
            array (
                'id' => 1662,
                'date' => '2021-10-12',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 8488,
                'pcr' => 5214,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            162 => 
            array (
                'id' => 1663,
                'date' => '2021-10-12',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 701,
                'pcr' => 64,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            163 => 
            array (
                'id' => 1664,
                'date' => '2021-10-12',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 462,
                'pcr' => 224,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            164 => 
            array (
                'id' => 1665,
                'date' => '2021-10-13',
                'state' => 'Johor',
                'rtk_ag' => 14384,
                'pcr' => 3877,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            165 => 
            array (
                'id' => 1666,
                'date' => '2021-10-13',
                'state' => 'Kedah',
                'rtk_ag' => 4390,
                'pcr' => 1003,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            166 => 
            array (
                'id' => 1667,
                'date' => '2021-10-13',
                'state' => 'Kelantan',
                'rtk_ag' => 3075,
                'pcr' => 1223,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            167 => 
            array (
                'id' => 1668,
                'date' => '2021-10-13',
                'state' => 'Melaka',
                'rtk_ag' => 4603,
                'pcr' => 1134,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            168 => 
            array (
                'id' => 1669,
                'date' => '2021-10-13',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5679,
                'pcr' => 1027,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            169 => 
            array (
                'id' => 1670,
                'date' => '2021-10-13',
                'state' => 'Pahang',
                'rtk_ag' => 4442,
                'pcr' => 1846,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            170 => 
            array (
                'id' => 1671,
                'date' => '2021-10-13',
                'state' => 'Perak',
                'rtk_ag' => 6046,
                'pcr' => 1315,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            171 => 
            array (
                'id' => 1672,
                'date' => '2021-10-13',
                'state' => 'Perlis',
                'rtk_ag' => 285,
                'pcr' => 129,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            172 => 
            array (
                'id' => 1673,
                'date' => '2021-10-13',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 10110,
                'pcr' => 1838,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            173 => 
            array (
                'id' => 1674,
                'date' => '2021-10-13',
                'state' => 'Sabah',
                'rtk_ag' => 4302,
                'pcr' => 1382,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            174 => 
            array (
                'id' => 1675,
                'date' => '2021-10-13',
                'state' => 'Sarawak',
                'rtk_ag' => 5781,
                'pcr' => 2980,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            175 => 
            array (
                'id' => 1676,
                'date' => '2021-10-13',
                'state' => 'Selangor',
                'rtk_ag' => 26540,
                'pcr' => 9496,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            176 => 
            array (
                'id' => 1677,
                'date' => '2021-10-13',
                'state' => 'Terengganu',
                'rtk_ag' => 3171,
                'pcr' => 1372,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            177 => 
            array (
                'id' => 1678,
                'date' => '2021-10-13',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 8690,
                'pcr' => 4155,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            178 => 
            array (
                'id' => 1679,
                'date' => '2021-10-13',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 806,
                'pcr' => 109,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            179 => 
            array (
                'id' => 1680,
                'date' => '2021-10-13',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 434,
                'pcr' => 191,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            180 => 
            array (
                'id' => 1681,
                'date' => '2021-10-14',
                'state' => 'Johor',
                'rtk_ag' => 14941,
                'pcr' => 3012,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            181 => 
            array (
                'id' => 1682,
                'date' => '2021-10-14',
                'state' => 'Kedah',
                'rtk_ag' => 4942,
                'pcr' => 931,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            182 => 
            array (
                'id' => 1683,
                'date' => '2021-10-14',
                'state' => 'Kelantan',
                'rtk_ag' => 3180,
                'pcr' => 1234,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            183 => 
            array (
                'id' => 1684,
                'date' => '2021-10-14',
                'state' => 'Melaka',
                'rtk_ag' => 4181,
                'pcr' => 897,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            184 => 
            array (
                'id' => 1685,
                'date' => '2021-10-14',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3979,
                'pcr' => 1506,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            185 => 
            array (
                'id' => 1686,
                'date' => '2021-10-14',
                'state' => 'Pahang',
                'rtk_ag' => 3754,
                'pcr' => 1576,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            186 => 
            array (
                'id' => 1687,
                'date' => '2021-10-14',
                'state' => 'Perak',
                'rtk_ag' => 5688,
                'pcr' => 1158,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            187 => 
            array (
                'id' => 1688,
                'date' => '2021-10-14',
                'state' => 'Perlis',
                'rtk_ag' => 344,
                'pcr' => 118,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            188 => 
            array (
                'id' => 1689,
                'date' => '2021-10-14',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 10009,
                'pcr' => 1238,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            189 => 
            array (
                'id' => 1690,
                'date' => '2021-10-14',
                'state' => 'Sabah',
                'rtk_ag' => 5613,
                'pcr' => 1306,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            190 => 
            array (
                'id' => 1691,
                'date' => '2021-10-14',
                'state' => 'Sarawak',
                'rtk_ag' => 5563,
                'pcr' => 2204,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            191 => 
            array (
                'id' => 1692,
                'date' => '2021-10-14',
                'state' => 'Selangor',
                'rtk_ag' => 28134,
                'pcr' => 8300,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            192 => 
            array (
                'id' => 1693,
                'date' => '2021-10-14',
                'state' => 'Terengganu',
                'rtk_ag' => 3124,
                'pcr' => 1257,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            193 => 
            array (
                'id' => 1694,
                'date' => '2021-10-14',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 8041,
                'pcr' => 4063,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            194 => 
            array (
                'id' => 1695,
                'date' => '2021-10-14',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 1297,
                'pcr' => 42,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            195 => 
            array (
                'id' => 1696,
                'date' => '2021-10-14',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 529,
                'pcr' => 179,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            196 => 
            array (
                'id' => 1697,
                'date' => '2021-10-15',
                'state' => 'Johor',
                'rtk_ag' => 17149,
                'pcr' => 3498,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            197 => 
            array (
                'id' => 1698,
                'date' => '2021-10-15',
                'state' => 'Kedah',
                'rtk_ag' => 5048,
                'pcr' => 819,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            198 => 
            array (
                'id' => 1699,
                'date' => '2021-10-15',
                'state' => 'Kelantan',
                'rtk_ag' => 2107,
                'pcr' => 1287,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            199 => 
            array (
                'id' => 1700,
                'date' => '2021-10-15',
                'state' => 'Melaka',
                'rtk_ag' => 4340,
                'pcr' => 941,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            200 => 
            array (
                'id' => 1701,
                'date' => '2021-10-15',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 4783,
                'pcr' => 1125,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            201 => 
            array (
                'id' => 1702,
                'date' => '2021-10-15',
                'state' => 'Pahang',
                'rtk_ag' => 4226,
                'pcr' => 1926,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            202 => 
            array (
                'id' => 1703,
                'date' => '2021-10-15',
                'state' => 'Perak',
                'rtk_ag' => 6143,
                'pcr' => 1745,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            203 => 
            array (
                'id' => 1704,
                'date' => '2021-10-15',
                'state' => 'Perlis',
                'rtk_ag' => 298,
                'pcr' => 50,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            204 => 
            array (
                'id' => 1705,
                'date' => '2021-10-15',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 10262,
                'pcr' => 1494,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            205 => 
            array (
                'id' => 1706,
                'date' => '2021-10-15',
                'state' => 'Sabah',
                'rtk_ag' => 4829,
                'pcr' => 1258,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            206 => 
            array (
                'id' => 1707,
                'date' => '2021-10-15',
                'state' => 'Sarawak',
                'rtk_ag' => 5681,
                'pcr' => 2835,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            207 => 
            array (
                'id' => 1708,
                'date' => '2021-10-15',
                'state' => 'Selangor',
                'rtk_ag' => 29650,
                'pcr' => 8567,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            208 => 
            array (
                'id' => 1709,
                'date' => '2021-10-15',
                'state' => 'Terengganu',
                'rtk_ag' => 2575,
                'pcr' => 1320,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            209 => 
            array (
                'id' => 1710,
                'date' => '2021-10-15',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 8989,
                'pcr' => 3002,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            210 => 
            array (
                'id' => 1711,
                'date' => '2021-10-15',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 1064,
                'pcr' => 58,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            211 => 
            array (
                'id' => 1712,
                'date' => '2021-10-15',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 521,
                'pcr' => 219,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            212 => 
            array (
                'id' => 1713,
                'date' => '2021-10-16',
                'state' => 'Johor',
                'rtk_ag' => 9353,
                'pcr' => 3010,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            213 => 
            array (
                'id' => 1714,
                'date' => '2021-10-16',
                'state' => 'Kedah',
                'rtk_ag' => 3431,
                'pcr' => 893,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            214 => 
            array (
                'id' => 1715,
                'date' => '2021-10-16',
                'state' => 'Kelantan',
                'rtk_ag' => 2778,
                'pcr' => 792,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            215 => 
            array (
                'id' => 1716,
                'date' => '2021-10-16',
                'state' => 'Melaka',
                'rtk_ag' => 2427,
                'pcr' => 1026,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            216 => 
            array (
                'id' => 1717,
                'date' => '2021-10-16',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3081,
                'pcr' => 1663,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            217 => 
            array (
                'id' => 1718,
                'date' => '2021-10-16',
                'state' => 'Pahang',
                'rtk_ag' => 3078,
                'pcr' => 1202,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            218 => 
            array (
                'id' => 1719,
                'date' => '2021-10-16',
                'state' => 'Perak',
                'rtk_ag' => 4608,
                'pcr' => 1605,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            219 => 
            array (
                'id' => 1720,
                'date' => '2021-10-16',
                'state' => 'Perlis',
                'rtk_ag' => 170,
                'pcr' => 126,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            220 => 
            array (
                'id' => 1721,
                'date' => '2021-10-16',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 9361,
                'pcr' => 1588,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            221 => 
            array (
                'id' => 1722,
                'date' => '2021-10-16',
                'state' => 'Sabah',
                'rtk_ag' => 3507,
                'pcr' => 1661,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            222 => 
            array (
                'id' => 1723,
                'date' => '2021-10-16',
                'state' => 'Sarawak',
                'rtk_ag' => 4105,
                'pcr' => 2542,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            223 => 
            array (
                'id' => 1724,
                'date' => '2021-10-16',
                'state' => 'Selangor',
                'rtk_ag' => 21982,
                'pcr' => 6913,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            224 => 
            array (
                'id' => 1725,
                'date' => '2021-10-16',
                'state' => 'Terengganu',
                'rtk_ag' => 3725,
                'pcr' => 899,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            225 => 
            array (
                'id' => 1726,
                'date' => '2021-10-16',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5587,
                'pcr' => 2990,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            226 => 
            array (
                'id' => 1727,
                'date' => '2021-10-16',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 765,
                'pcr' => 45,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            227 => 
            array (
                'id' => 1728,
                'date' => '2021-10-16',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 259,
                'pcr' => 356,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            228 => 
            array (
                'id' => 1729,
                'date' => '2021-10-17',
                'state' => 'Johor',
                'rtk_ag' => 9501,
                'pcr' => 2616,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            229 => 
            array (
                'id' => 1730,
                'date' => '2021-10-17',
                'state' => 'Kedah',
                'rtk_ag' => 4851,
                'pcr' => 695,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            230 => 
            array (
                'id' => 1731,
                'date' => '2021-10-17',
                'state' => 'Kelantan',
                'rtk_ag' => 3250,
                'pcr' => 1007,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            231 => 
            array (
                'id' => 1732,
                'date' => '2021-10-17',
                'state' => 'Melaka',
                'rtk_ag' => 1875,
                'pcr' => 437,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            232 => 
            array (
                'id' => 1733,
                'date' => '2021-10-17',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2125,
                'pcr' => 735,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            233 => 
            array (
                'id' => 1734,
                'date' => '2021-10-17',
                'state' => 'Pahang',
                'rtk_ag' => 2655,
                'pcr' => 678,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            234 => 
            array (
                'id' => 1735,
                'date' => '2021-10-17',
                'state' => 'Perak',
                'rtk_ag' => 4100,
                'pcr' => 986,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            235 => 
            array (
                'id' => 1736,
                'date' => '2021-10-17',
                'state' => 'Perlis',
                'rtk_ag' => 169,
                'pcr' => 31,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            236 => 
            array (
                'id' => 1737,
                'date' => '2021-10-17',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 6506,
                'pcr' => 647,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            237 => 
            array (
                'id' => 1738,
                'date' => '2021-10-17',
                'state' => 'Sabah',
                'rtk_ag' => 3672,
                'pcr' => 999,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            238 => 
            array (
                'id' => 1739,
                'date' => '2021-10-17',
                'state' => 'Sarawak',
                'rtk_ag' => 3610,
                'pcr' => 1458,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            239 => 
            array (
                'id' => 1740,
                'date' => '2021-10-17',
                'state' => 'Selangor',
                'rtk_ag' => 18685,
                'pcr' => 4882,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            240 => 
            array (
                'id' => 1741,
                'date' => '2021-10-17',
                'state' => 'Terengganu',
                'rtk_ag' => 3877,
                'pcr' => 1031,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            241 => 
            array (
                'id' => 1742,
                'date' => '2021-10-17',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4247,
                'pcr' => 2265,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            242 => 
            array (
                'id' => 1743,
                'date' => '2021-10-17',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 660,
                'pcr' => 73,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            243 => 
            array (
                'id' => 1744,
                'date' => '2021-10-17',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 191,
                'pcr' => 168,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            244 => 
            array (
                'id' => 1745,
                'date' => '2021-10-18',
                'state' => 'Johor',
                'rtk_ag' => 19613,
                'pcr' => 4058,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            245 => 
            array (
                'id' => 1746,
                'date' => '2021-10-18',
                'state' => 'Kedah',
                'rtk_ag' => 6987,
                'pcr' => 747,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            246 => 
            array (
                'id' => 1747,
                'date' => '2021-10-18',
                'state' => 'Kelantan',
                'rtk_ag' => 2840,
                'pcr' => 1077,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            247 => 
            array (
                'id' => 1748,
                'date' => '2021-10-18',
                'state' => 'Melaka',
                'rtk_ag' => 4902,
                'pcr' => 675,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            248 => 
            array (
                'id' => 1749,
                'date' => '2021-10-18',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 7518,
                'pcr' => 1157,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            249 => 
            array (
                'id' => 1750,
                'date' => '2021-10-18',
                'state' => 'Pahang',
                'rtk_ag' => 4471,
                'pcr' => 563,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            250 => 
            array (
                'id' => 1751,
                'date' => '2021-10-18',
                'state' => 'Perak',
                'rtk_ag' => 8326,
                'pcr' => 741,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            251 => 
            array (
                'id' => 1752,
                'date' => '2021-10-18',
                'state' => 'Perlis',
                'rtk_ag' => 226,
                'pcr' => 40,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            252 => 
            array (
                'id' => 1753,
                'date' => '2021-10-18',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 14255,
                'pcr' => 1311,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            253 => 
            array (
                'id' => 1754,
                'date' => '2021-10-18',
                'state' => 'Sabah',
                'rtk_ag' => 4965,
                'pcr' => 1190,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            254 => 
            array (
                'id' => 1755,
                'date' => '2021-10-18',
                'state' => 'Sarawak',
                'rtk_ag' => 5844,
                'pcr' => 2508,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            255 => 
            array (
                'id' => 1756,
                'date' => '2021-10-18',
                'state' => 'Selangor',
                'rtk_ag' => 34311,
                'pcr' => 8088,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            256 => 
            array (
                'id' => 1757,
                'date' => '2021-10-18',
                'state' => 'Terengganu',
                'rtk_ag' => 3076,
                'pcr' => 929,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            257 => 
            array (
                'id' => 1758,
                'date' => '2021-10-18',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 9029,
                'pcr' => 4679,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            258 => 
            array (
                'id' => 1759,
                'date' => '2021-10-18',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 891,
                'pcr' => 74,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            259 => 
            array (
                'id' => 1760,
                'date' => '2021-10-18',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 497,
                'pcr' => 186,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            260 => 
            array (
                'id' => 1761,
                'date' => '2021-10-19',
                'state' => 'Johor',
                'rtk_ag' => 11385,
                'pcr' => 3957,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            261 => 
            array (
                'id' => 1762,
                'date' => '2021-10-19',
                'state' => 'Kedah',
                'rtk_ag' => 3620,
                'pcr' => 1030,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            262 => 
            array (
                'id' => 1763,
                'date' => '2021-10-19',
                'state' => 'Kelantan',
                'rtk_ag' => 1528,
                'pcr' => 812,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            263 => 
            array (
                'id' => 1764,
                'date' => '2021-10-19',
                'state' => 'Melaka',
                'rtk_ag' => 2805,
                'pcr' => 1053,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            264 => 
            array (
                'id' => 1765,
                'date' => '2021-10-19',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3352,
                'pcr' => 1085,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            265 => 
            array (
                'id' => 1766,
                'date' => '2021-10-19',
                'state' => 'Pahang',
                'rtk_ag' => 1978,
                'pcr' => 1196,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            266 => 
            array (
                'id' => 1767,
                'date' => '2021-10-19',
                'state' => 'Perak',
                'rtk_ag' => 4544,
                'pcr' => 1761,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            267 => 
            array (
                'id' => 1768,
                'date' => '2021-10-19',
                'state' => 'Perlis',
                'rtk_ag' => 160,
                'pcr' => 73,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            268 => 
            array (
                'id' => 1769,
                'date' => '2021-10-19',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 7843,
                'pcr' => 1619,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            269 => 
            array (
                'id' => 1770,
                'date' => '2021-10-19',
                'state' => 'Sabah',
                'rtk_ag' => 2874,
                'pcr' => 1575,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            270 => 
            array (
                'id' => 1771,
                'date' => '2021-10-19',
                'state' => 'Sarawak',
                'rtk_ag' => 3507,
                'pcr' => 2113,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            271 => 
            array (
                'id' => 1772,
                'date' => '2021-10-19',
                'state' => 'Selangor',
                'rtk_ag' => 20918,
                'pcr' => 7944,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            272 => 
            array (
                'id' => 1773,
                'date' => '2021-10-19',
                'state' => 'Terengganu',
                'rtk_ag' => 2498,
                'pcr' => 1410,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            273 => 
            array (
                'id' => 1774,
                'date' => '2021-10-19',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4648,
                'pcr' => 3826,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            274 => 
            array (
                'id' => 1775,
                'date' => '2021-10-19',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 581,
                'pcr' => 132,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            275 => 
            array (
                'id' => 1776,
                'date' => '2021-10-19',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 225,
                'pcr' => 134,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            276 => 
            array (
                'id' => 1777,
                'date' => '2021-10-20',
                'state' => 'Johor',
                'rtk_ag' => 14297,
                'pcr' => 3509,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            277 => 
            array (
                'id' => 1778,
                'date' => '2021-10-20',
                'state' => 'Kedah',
                'rtk_ag' => 6077,
                'pcr' => 536,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            278 => 
            array (
                'id' => 1779,
                'date' => '2021-10-20',
                'state' => 'Kelantan',
                'rtk_ag' => 2563,
                'pcr' => 633,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            279 => 
            array (
                'id' => 1780,
                'date' => '2021-10-20',
                'state' => 'Melaka',
                'rtk_ag' => 4833,
                'pcr' => 719,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            280 => 
            array (
                'id' => 1781,
                'date' => '2021-10-20',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 8805,
                'pcr' => 893,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            281 => 
            array (
                'id' => 1782,
                'date' => '2021-10-20',
                'state' => 'Pahang',
                'rtk_ag' => 5135,
                'pcr' => 992,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            282 => 
            array (
                'id' => 1783,
                'date' => '2021-10-20',
                'state' => 'Perak',
                'rtk_ag' => 6680,
                'pcr' => 927,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            283 => 
            array (
                'id' => 1784,
                'date' => '2021-10-20',
                'state' => 'Perlis',
                'rtk_ag' => 278,
                'pcr' => 81,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            284 => 
            array (
                'id' => 1785,
                'date' => '2021-10-20',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 13426,
                'pcr' => 1059,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            285 => 
            array (
                'id' => 1786,
                'date' => '2021-10-20',
                'state' => 'Sabah',
                'rtk_ag' => 4896,
                'pcr' => 1462,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            286 => 
            array (
                'id' => 1787,
                'date' => '2021-10-20',
                'state' => 'Sarawak',
                'rtk_ag' => 5162,
                'pcr' => 2422,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            287 => 
            array (
                'id' => 1788,
                'date' => '2021-10-20',
                'state' => 'Selangor',
                'rtk_ag' => 34176,
                'pcr' => 7994,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            288 => 
            array (
                'id' => 1789,
                'date' => '2021-10-20',
                'state' => 'Terengganu',
                'rtk_ag' => 3493,
                'pcr' => 975,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            289 => 
            array (
                'id' => 1790,
                'date' => '2021-10-20',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 10196,
                'pcr' => 3532,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            290 => 
            array (
                'id' => 1791,
                'date' => '2021-10-20',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 1080,
                'pcr' => 79,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            291 => 
            array (
                'id' => 1792,
                'date' => '2021-10-20',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 560,
                'pcr' => 172,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            292 => 
            array (
                'id' => 1793,
                'date' => '2021-10-21',
                'state' => 'Johor',
                'rtk_ag' => 14114,
                'pcr' => 3627,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            293 => 
            array (
                'id' => 1794,
                'date' => '2021-10-21',
                'state' => 'Kedah',
                'rtk_ag' => 5378,
                'pcr' => 1054,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            294 => 
            array (
                'id' => 1795,
                'date' => '2021-10-21',
                'state' => 'Kelantan',
                'rtk_ag' => 2362,
                'pcr' => 1041,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            295 => 
            array (
                'id' => 1796,
                'date' => '2021-10-21',
                'state' => 'Melaka',
                'rtk_ag' => 3007,
                'pcr' => 929,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            296 => 
            array (
                'id' => 1797,
                'date' => '2021-10-21',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5015,
                'pcr' => 2019,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            297 => 
            array (
                'id' => 1798,
                'date' => '2021-10-21',
                'state' => 'Pahang',
                'rtk_ag' => 3694,
                'pcr' => 1008,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            298 => 
            array (
                'id' => 1799,
                'date' => '2021-10-21',
                'state' => 'Perak',
                'rtk_ag' => 7378,
                'pcr' => 1420,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            299 => 
            array (
                'id' => 1800,
                'date' => '2021-10-21',
                'state' => 'Perlis',
                'rtk_ag' => 186,
                'pcr' => 155,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            300 => 
            array (
                'id' => 1801,
                'date' => '2021-10-21',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 12759,
                'pcr' => 1525,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            301 => 
            array (
                'id' => 1802,
                'date' => '2021-10-21',
                'state' => 'Sabah',
                'rtk_ag' => 4144,
                'pcr' => 1065,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            302 => 
            array (
                'id' => 1803,
                'date' => '2021-10-21',
                'state' => 'Sarawak',
                'rtk_ag' => 5234,
                'pcr' => 1700,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            303 => 
            array (
                'id' => 1804,
                'date' => '2021-10-21',
                'state' => 'Selangor',
                'rtk_ag' => 28828,
                'pcr' => 9841,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            304 => 
            array (
                'id' => 1805,
                'date' => '2021-10-21',
                'state' => 'Terengganu',
                'rtk_ag' => 2516,
                'pcr' => 1236,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            305 => 
            array (
                'id' => 1806,
                'date' => '2021-10-21',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 7999,
                'pcr' => 5692,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            306 => 
            array (
                'id' => 1807,
                'date' => '2021-10-21',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 1124,
                'pcr' => 21,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            307 => 
            array (
                'id' => 1808,
                'date' => '2021-10-21',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 461,
                'pcr' => 200,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            308 => 
            array (
                'id' => 1809,
                'date' => '2021-10-22',
                'state' => 'Johor',
                'rtk_ag' => 13519,
                'pcr' => 3487,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            309 => 
            array (
                'id' => 1810,
                'date' => '2021-10-22',
                'state' => 'Kedah',
                'rtk_ag' => 3901,
                'pcr' => 783,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            310 => 
            array (
                'id' => 1811,
                'date' => '2021-10-22',
                'state' => 'Kelantan',
                'rtk_ag' => 1506,
                'pcr' => 887,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            311 => 
            array (
                'id' => 1812,
                'date' => '2021-10-22',
                'state' => 'Melaka',
                'rtk_ag' => 3024,
                'pcr' => 798,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            312 => 
            array (
                'id' => 1813,
                'date' => '2021-10-22',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5855,
                'pcr' => 1012,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            313 => 
            array (
                'id' => 1814,
                'date' => '2021-10-22',
                'state' => 'Pahang',
                'rtk_ag' => 3624,
                'pcr' => 1015,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            314 => 
            array (
                'id' => 1815,
                'date' => '2021-10-22',
                'state' => 'Perak',
                'rtk_ag' => 6069,
                'pcr' => 1282,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            315 => 
            array (
                'id' => 1816,
                'date' => '2021-10-22',
                'state' => 'Perlis',
                'rtk_ag' => 157,
                'pcr' => 62,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            316 => 
            array (
                'id' => 1817,
                'date' => '2021-10-22',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 13291,
                'pcr' => 1204,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            317 => 
            array (
                'id' => 1818,
                'date' => '2021-10-22',
                'state' => 'Sabah',
                'rtk_ag' => 3820,
                'pcr' => 1408,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            318 => 
            array (
                'id' => 1819,
                'date' => '2021-10-22',
                'state' => 'Sarawak',
                'rtk_ag' => 5201,
                'pcr' => 1406,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            319 => 
            array (
                'id' => 1820,
                'date' => '2021-10-22',
                'state' => 'Selangor',
                'rtk_ag' => 25847,
                'pcr' => 9090,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            320 => 
            array (
                'id' => 1821,
                'date' => '2021-10-22',
                'state' => 'Terengganu',
                'rtk_ag' => 1885,
                'pcr' => 549,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            321 => 
            array (
                'id' => 1822,
                'date' => '2021-10-22',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 6566,
                'pcr' => 4555,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            322 => 
            array (
                'id' => 1823,
                'date' => '2021-10-22',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 1182,
                'pcr' => 74,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            323 => 
            array (
                'id' => 1824,
                'date' => '2021-10-22',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 422,
                'pcr' => 359,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            324 => 
            array (
                'id' => 1825,
                'date' => '2021-10-23',
                'state' => 'Johor',
                'rtk_ag' => 8738,
                'pcr' => 2988,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            325 => 
            array (
                'id' => 1826,
                'date' => '2021-10-23',
                'state' => 'Kedah',
                'rtk_ag' => 3206,
                'pcr' => 785,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            326 => 
            array (
                'id' => 1827,
                'date' => '2021-10-23',
                'state' => 'Kelantan',
                'rtk_ag' => 2122,
                'pcr' => 617,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            327 => 
            array (
                'id' => 1828,
                'date' => '2021-10-23',
                'state' => 'Melaka',
                'rtk_ag' => 2066,
                'pcr' => 1125,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            328 => 
            array (
                'id' => 1829,
                'date' => '2021-10-23',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 4937,
                'pcr' => 1369,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            329 => 
            array (
                'id' => 1830,
                'date' => '2021-10-23',
                'state' => 'Pahang',
                'rtk_ag' => 2405,
                'pcr' => 761,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            330 => 
            array (
                'id' => 1831,
                'date' => '2021-10-23',
                'state' => 'Perak',
                'rtk_ag' => 4354,
                'pcr' => 1373,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            331 => 
            array (
                'id' => 1832,
                'date' => '2021-10-23',
                'state' => 'Perlis',
                'rtk_ag' => 181,
                'pcr' => 96,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            332 => 
            array (
                'id' => 1833,
                'date' => '2021-10-23',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 5952,
                'pcr' => 1829,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            333 => 
            array (
                'id' => 1834,
                'date' => '2021-10-23',
                'state' => 'Sabah',
                'rtk_ag' => 3145,
                'pcr' => 1793,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            334 => 
            array (
                'id' => 1835,
                'date' => '2021-10-23',
                'state' => 'Sarawak',
                'rtk_ag' => 4073,
                'pcr' => 2178,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            335 => 
            array (
                'id' => 1836,
                'date' => '2021-10-23',
                'state' => 'Selangor',
                'rtk_ag' => 18327,
                'pcr' => 7301,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            336 => 
            array (
                'id' => 1837,
                'date' => '2021-10-23',
                'state' => 'Terengganu',
                'rtk_ag' => 3656,
                'pcr' => 694,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            337 => 
            array (
                'id' => 1838,
                'date' => '2021-10-23',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4878,
                'pcr' => 2920,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            338 => 
            array (
                'id' => 1839,
                'date' => '2021-10-23',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 1020,
                'pcr' => 81,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            339 => 
            array (
                'id' => 1840,
                'date' => '2021-10-23',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 290,
                'pcr' => 738,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            340 => 
            array (
                'id' => 1841,
                'date' => '2021-10-24',
                'state' => 'Johor',
                'rtk_ag' => 12203,
                'pcr' => 2464,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            341 => 
            array (
                'id' => 1842,
                'date' => '2021-10-24',
                'state' => 'Kedah',
                'rtk_ag' => 3848,
                'pcr' => 855,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            342 => 
            array (
                'id' => 1843,
                'date' => '2021-10-24',
                'state' => 'Kelantan',
                'rtk_ag' => 2744,
                'pcr' => 666,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            343 => 
            array (
                'id' => 1844,
                'date' => '2021-10-24',
                'state' => 'Melaka',
                'rtk_ag' => 2110,
                'pcr' => 741,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            344 => 
            array (
                'id' => 1845,
                'date' => '2021-10-24',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3115,
                'pcr' => 789,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            345 => 
            array (
                'id' => 1846,
                'date' => '2021-10-24',
                'state' => 'Pahang',
                'rtk_ag' => 2650,
                'pcr' => 389,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            346 => 
            array (
                'id' => 1847,
                'date' => '2021-10-24',
                'state' => 'Perak',
                'rtk_ag' => 3889,
                'pcr' => 856,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            347 => 
            array (
                'id' => 1848,
                'date' => '2021-10-24',
                'state' => 'Perlis',
                'rtk_ag' => 203,
                'pcr' => 44,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            348 => 
            array (
                'id' => 1849,
                'date' => '2021-10-24',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 5642,
                'pcr' => 801,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            349 => 
            array (
                'id' => 1850,
                'date' => '2021-10-24',
                'state' => 'Sabah',
                'rtk_ag' => 2945,
                'pcr' => 1367,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            350 => 
            array (
                'id' => 1851,
                'date' => '2021-10-24',
                'state' => 'Sarawak',
                'rtk_ag' => 3521,
                'pcr' => 1454,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            351 => 
            array (
                'id' => 1852,
                'date' => '2021-10-24',
                'state' => 'Selangor',
                'rtk_ag' => 17410,
                'pcr' => 6225,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            352 => 
            array (
                'id' => 1853,
                'date' => '2021-10-24',
                'state' => 'Terengganu',
                'rtk_ag' => 5131,
                'pcr' => 652,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            353 => 
            array (
                'id' => 1854,
                'date' => '2021-10-24',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4110,
                'pcr' => 2131,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            354 => 
            array (
                'id' => 1855,
                'date' => '2021-10-24',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 899,
                'pcr' => 25,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            355 => 
            array (
                'id' => 1856,
                'date' => '2021-10-24',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 195,
                'pcr' => 224,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            356 => 
            array (
                'id' => 1857,
                'date' => '2021-10-25',
                'state' => 'Johor',
                'rtk_ag' => 21089,
                'pcr' => 4440,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            357 => 
            array (
                'id' => 1858,
                'date' => '2021-10-25',
                'state' => 'Kedah',
                'rtk_ag' => 5446,
                'pcr' => 793,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            358 => 
            array (
                'id' => 1859,
                'date' => '2021-10-25',
                'state' => 'Kelantan',
                'rtk_ag' => 2450,
                'pcr' => 1082,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            359 => 
            array (
                'id' => 1860,
                'date' => '2021-10-25',
                'state' => 'Melaka',
                'rtk_ag' => 4184,
                'pcr' => 621,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            360 => 
            array (
                'id' => 1861,
                'date' => '2021-10-25',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5257,
                'pcr' => 1003,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            361 => 
            array (
                'id' => 1862,
                'date' => '2021-10-25',
                'state' => 'Pahang',
                'rtk_ag' => 4295,
                'pcr' => 681,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            362 => 
            array (
                'id' => 1863,
                'date' => '2021-10-25',
                'state' => 'Perak',
                'rtk_ag' => 7932,
                'pcr' => 902,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            363 => 
            array (
                'id' => 1864,
                'date' => '2021-10-25',
                'state' => 'Perlis',
                'rtk_ag' => 346,
                'pcr' => 24,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            364 => 
            array (
                'id' => 1865,
                'date' => '2021-10-25',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 14478,
                'pcr' => 1173,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            365 => 
            array (
                'id' => 1866,
                'date' => '2021-10-25',
                'state' => 'Sabah',
                'rtk_ag' => 5201,
                'pcr' => 965,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            366 => 
            array (
                'id' => 1867,
                'date' => '2021-10-25',
                'state' => 'Sarawak',
                'rtk_ag' => 6260,
                'pcr' => 2307,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            367 => 
            array (
                'id' => 1868,
                'date' => '2021-10-25',
                'state' => 'Selangor',
                'rtk_ag' => 37409,
                'pcr' => 7655,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            368 => 
            array (
                'id' => 1869,
                'date' => '2021-10-25',
                'state' => 'Terengganu',
                'rtk_ag' => 3727,
                'pcr' => 711,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            369 => 
            array (
                'id' => 1870,
                'date' => '2021-10-25',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 11240,
                'pcr' => 4520,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            370 => 
            array (
                'id' => 1871,
                'date' => '2021-10-25',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 1122,
                'pcr' => 96,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            371 => 
            array (
                'id' => 1872,
                'date' => '2021-10-25',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 488,
                'pcr' => 200,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            372 => 
            array (
                'id' => 1873,
                'date' => '2021-10-26',
                'state' => 'Johor',
                'rtk_ag' => 16007,
                'pcr' => 3693,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            373 => 
            array (
                'id' => 1874,
                'date' => '2021-10-26',
                'state' => 'Kedah',
                'rtk_ag' => 3645,
                'pcr' => 1155,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            374 => 
            array (
                'id' => 1875,
                'date' => '2021-10-26',
                'state' => 'Kelantan',
                'rtk_ag' => 2359,
                'pcr' => 960,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            375 => 
            array (
                'id' => 1876,
                'date' => '2021-10-26',
                'state' => 'Melaka',
                'rtk_ag' => 3100,
                'pcr' => 1342,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            376 => 
            array (
                'id' => 1877,
                'date' => '2021-10-26',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 4465,
                'pcr' => 1631,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            377 => 
            array (
                'id' => 1878,
                'date' => '2021-10-26',
                'state' => 'Pahang',
                'rtk_ag' => 3812,
                'pcr' => 1125,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            378 => 
            array (
                'id' => 1879,
                'date' => '2021-10-26',
                'state' => 'Perak',
                'rtk_ag' => 5781,
                'pcr' => 1211,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            379 => 
            array (
                'id' => 1880,
                'date' => '2021-10-26',
                'state' => 'Perlis',
                'rtk_ag' => 200,
                'pcr' => 123,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            380 => 
            array (
                'id' => 1881,
                'date' => '2021-10-26',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 10015,
                'pcr' => 1566,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            381 => 
            array (
                'id' => 1882,
                'date' => '2021-10-26',
                'state' => 'Sabah',
                'rtk_ag' => 3898,
                'pcr' => 1543,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            382 => 
            array (
                'id' => 1883,
                'date' => '2021-10-26',
                'state' => 'Sarawak',
                'rtk_ag' => 5334,
                'pcr' => 2163,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            383 => 
            array (
                'id' => 1884,
                'date' => '2021-10-26',
                'state' => 'Selangor',
                'rtk_ag' => 31057,
                'pcr' => 10857,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            384 => 
            array (
                'id' => 1885,
                'date' => '2021-10-26',
                'state' => 'Terengganu',
                'rtk_ag' => 3653,
                'pcr' => 844,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            385 => 
            array (
                'id' => 1886,
                'date' => '2021-10-26',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 8416,
                'pcr' => 4596,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            386 => 
            array (
                'id' => 1887,
                'date' => '2021-10-26',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 1130,
                'pcr' => 54,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            387 => 
            array (
                'id' => 1888,
                'date' => '2021-10-26',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 375,
                'pcr' => 271,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            388 => 
            array (
                'id' => 1889,
                'date' => '2021-10-27',
                'state' => 'Johor',
                'rtk_ag' => 11974,
                'pcr' => 4226,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            389 => 
            array (
                'id' => 1890,
                'date' => '2021-10-27',
                'state' => 'Kedah',
                'rtk_ag' => 4225,
                'pcr' => 909,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            390 => 
            array (
                'id' => 1891,
                'date' => '2021-10-27',
                'state' => 'Kelantan',
                'rtk_ag' => 2616,
                'pcr' => 730,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            391 => 
            array (
                'id' => 1892,
                'date' => '2021-10-27',
                'state' => 'Melaka',
                'rtk_ag' => 3272,
                'pcr' => 1010,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            392 => 
            array (
                'id' => 1893,
                'date' => '2021-10-27',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5954,
                'pcr' => 1500,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            393 => 
            array (
                'id' => 1894,
                'date' => '2021-10-27',
                'state' => 'Pahang',
                'rtk_ag' => 4617,
                'pcr' => 879,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            394 => 
            array (
                'id' => 1895,
                'date' => '2021-10-27',
                'state' => 'Perak',
                'rtk_ag' => 5937,
                'pcr' => 1553,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            395 => 
            array (
                'id' => 1896,
                'date' => '2021-10-27',
                'state' => 'Perlis',
                'rtk_ag' => 308,
                'pcr' => 71,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            396 => 
            array (
                'id' => 1897,
                'date' => '2021-10-27',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 12527,
                'pcr' => 1608,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            397 => 
            array (
                'id' => 1898,
                'date' => '2021-10-27',
                'state' => 'Sabah',
                'rtk_ag' => 4187,
                'pcr' => 1531,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            398 => 
            array (
                'id' => 1899,
                'date' => '2021-10-27',
                'state' => 'Sarawak',
                'rtk_ag' => 5360,
                'pcr' => 2207,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            399 => 
            array (
                'id' => 1900,
                'date' => '2021-10-27',
                'state' => 'Selangor',
                'rtk_ag' => 29319,
                'pcr' => 10753,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            400 => 
            array (
                'id' => 1901,
                'date' => '2021-10-27',
                'state' => 'Terengganu',
                'rtk_ag' => 3431,
                'pcr' => 740,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            401 => 
            array (
                'id' => 1902,
                'date' => '2021-10-27',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 6868,
                'pcr' => 4157,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            402 => 
            array (
                'id' => 1903,
                'date' => '2021-10-27',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 1058,
                'pcr' => 57,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            403 => 
            array (
                'id' => 1904,
                'date' => '2021-10-27',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 460,
                'pcr' => 317,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            404 => 
            array (
                'id' => 1905,
                'date' => '2021-10-28',
                'state' => 'Johor',
                'rtk_ag' => 11099,
                'pcr' => 2362,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            405 => 
            array (
                'id' => 1906,
                'date' => '2021-10-28',
                'state' => 'Kedah',
                'rtk_ag' => 3779,
                'pcr' => 985,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            406 => 
            array (
                'id' => 1907,
                'date' => '2021-10-28',
                'state' => 'Kelantan',
                'rtk_ag' => 2297,
                'pcr' => 896,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            407 => 
            array (
                'id' => 1908,
                'date' => '2021-10-28',
                'state' => 'Melaka',
                'rtk_ag' => 3827,
                'pcr' => 690,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            408 => 
            array (
                'id' => 1909,
                'date' => '2021-10-28',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 6583,
                'pcr' => 1371,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            409 => 
            array (
                'id' => 1910,
                'date' => '2021-10-28',
                'state' => 'Pahang',
                'rtk_ag' => 3482,
                'pcr' => 844,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            410 => 
            array (
                'id' => 1911,
                'date' => '2021-10-28',
                'state' => 'Perak',
                'rtk_ag' => 6039,
                'pcr' => 1192,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            411 => 
            array (
                'id' => 1912,
                'date' => '2021-10-28',
                'state' => 'Perlis',
                'rtk_ag' => 281,
                'pcr' => 39,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            412 => 
            array (
                'id' => 1913,
                'date' => '2021-10-28',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 9729,
                'pcr' => 1394,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            413 => 
            array (
                'id' => 1914,
                'date' => '2021-10-28',
                'state' => 'Sabah',
                'rtk_ag' => 4060,
                'pcr' => 1290,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            414 => 
            array (
                'id' => 1915,
                'date' => '2021-10-28',
                'state' => 'Sarawak',
                'rtk_ag' => 5291,
                'pcr' => 1537,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            415 => 
            array (
                'id' => 1916,
                'date' => '2021-10-28',
                'state' => 'Selangor',
                'rtk_ag' => 24057,
                'pcr' => 9624,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            416 => 
            array (
                'id' => 1917,
                'date' => '2021-10-28',
                'state' => 'Terengganu',
                'rtk_ag' => 3984,
                'pcr' => 656,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            417 => 
            array (
                'id' => 1918,
                'date' => '2021-10-28',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 6002,
                'pcr' => 4606,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            418 => 
            array (
                'id' => 1919,
                'date' => '2021-10-28',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 1476,
                'pcr' => 30,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            419 => 
            array (
                'id' => 1920,
                'date' => '2021-10-28',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 363,
                'pcr' => 233,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            420 => 
            array (
                'id' => 1921,
                'date' => '2021-10-29',
                'state' => 'Johor',
                'rtk_ag' => 11589,
                'pcr' => 3147,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            421 => 
            array (
                'id' => 1922,
                'date' => '2021-10-29',
                'state' => 'Kedah',
                'rtk_ag' => 3870,
                'pcr' => 825,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            422 => 
            array (
                'id' => 1923,
                'date' => '2021-10-29',
                'state' => 'Kelantan',
                'rtk_ag' => 1521,
                'pcr' => 862,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            423 => 
            array (
                'id' => 1924,
                'date' => '2021-10-29',
                'state' => 'Melaka',
                'rtk_ag' => 2689,
                'pcr' => 719,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            424 => 
            array (
                'id' => 1925,
                'date' => '2021-10-29',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3685,
                'pcr' => 1087,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            425 => 
            array (
                'id' => 1926,
                'date' => '2021-10-29',
                'state' => 'Pahang',
                'rtk_ag' => 3549,
                'pcr' => 821,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            426 => 
            array (
                'id' => 1927,
                'date' => '2021-10-29',
                'state' => 'Perak',
                'rtk_ag' => 5426,
                'pcr' => 1179,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            427 => 
            array (
                'id' => 1928,
                'date' => '2021-10-29',
                'state' => 'Perlis',
                'rtk_ag' => 267,
                'pcr' => 8,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            428 => 
            array (
                'id' => 1929,
                'date' => '2021-10-29',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 8613,
                'pcr' => 1404,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            429 => 
            array (
                'id' => 1930,
                'date' => '2021-10-29',
                'state' => 'Sabah',
                'rtk_ag' => 3872,
                'pcr' => 1333,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            430 => 
            array (
                'id' => 1931,
                'date' => '2021-10-29',
                'state' => 'Sarawak',
                'rtk_ag' => 5380,
                'pcr' => 1520,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            431 => 
            array (
                'id' => 1932,
                'date' => '2021-10-29',
                'state' => 'Selangor',
                'rtk_ag' => 23538,
                'pcr' => 9625,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            432 => 
            array (
                'id' => 1933,
                'date' => '2021-10-29',
                'state' => 'Terengganu',
                'rtk_ag' => 2836,
                'pcr' => 434,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            433 => 
            array (
                'id' => 1934,
                'date' => '2021-10-29',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 6183,
                'pcr' => 3600,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            434 => 
            array (
                'id' => 1935,
                'date' => '2021-10-29',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 1325,
                'pcr' => 51,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            435 => 
            array (
                'id' => 1936,
                'date' => '2021-10-29',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 391,
                'pcr' => 241,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            436 => 
            array (
                'id' => 1937,
                'date' => '2021-10-30',
                'state' => 'Johor',
                'rtk_ag' => 7833,
                'pcr' => 2874,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            437 => 
            array (
                'id' => 1938,
                'date' => '2021-10-30',
                'state' => 'Kedah',
                'rtk_ag' => 3544,
                'pcr' => 863,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            438 => 
            array (
                'id' => 1939,
                'date' => '2021-10-30',
                'state' => 'Kelantan',
                'rtk_ag' => 1985,
                'pcr' => 554,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            439 => 
            array (
                'id' => 1940,
                'date' => '2021-10-30',
                'state' => 'Melaka',
                'rtk_ag' => 1603,
                'pcr' => 916,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            440 => 
            array (
                'id' => 1941,
                'date' => '2021-10-30',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3998,
                'pcr' => 1289,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            441 => 
            array (
                'id' => 1942,
                'date' => '2021-10-30',
                'state' => 'Pahang',
                'rtk_ag' => 2251,
                'pcr' => 861,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            442 => 
            array (
                'id' => 1943,
                'date' => '2021-10-30',
                'state' => 'Perak',
                'rtk_ag' => 3629,
                'pcr' => 1227,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            443 => 
            array (
                'id' => 1944,
                'date' => '2021-10-30',
                'state' => 'Perlis',
                'rtk_ag' => 248,
                'pcr' => 54,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            444 => 
            array (
                'id' => 1945,
                'date' => '2021-10-30',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 6629,
                'pcr' => 2304,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            445 => 
            array (
                'id' => 1946,
                'date' => '2021-10-30',
                'state' => 'Sabah',
                'rtk_ag' => 3168,
                'pcr' => 1653,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            446 => 
            array (
                'id' => 1947,
                'date' => '2021-10-30',
                'state' => 'Sarawak',
                'rtk_ag' => 4392,
                'pcr' => 2012,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            447 => 
            array (
                'id' => 1948,
                'date' => '2021-10-30',
                'state' => 'Selangor',
                'rtk_ag' => 20197,
                'pcr' => 6868,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            448 => 
            array (
                'id' => 1949,
                'date' => '2021-10-30',
                'state' => 'Terengganu',
                'rtk_ag' => 3876,
                'pcr' => 819,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            449 => 
            array (
                'id' => 1950,
                'date' => '2021-10-30',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4795,
                'pcr' => 3079,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            450 => 
            array (
                'id' => 1951,
                'date' => '2021-10-30',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 1432,
                'pcr' => 63,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            451 => 
            array (
                'id' => 1952,
                'date' => '2021-10-30',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 245,
                'pcr' => 268,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            452 => 
            array (
                'id' => 1953,
                'date' => '2021-10-31',
                'state' => 'Johor',
                'rtk_ag' => 9773,
                'pcr' => 2753,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            453 => 
            array (
                'id' => 1954,
                'date' => '2021-10-31',
                'state' => 'Kedah',
                'rtk_ag' => 4869,
                'pcr' => 797,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            454 => 
            array (
                'id' => 1955,
                'date' => '2021-10-31',
                'state' => 'Kelantan',
                'rtk_ag' => 2762,
                'pcr' => 650,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            455 => 
            array (
                'id' => 1956,
                'date' => '2021-10-31',
                'state' => 'Melaka',
                'rtk_ag' => 1836,
                'pcr' => 627,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            456 => 
            array (
                'id' => 1957,
                'date' => '2021-10-31',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2034,
                'pcr' => 843,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            457 => 
            array (
                'id' => 1958,
                'date' => '2021-10-31',
                'state' => 'Pahang',
                'rtk_ag' => 2791,
                'pcr' => 283,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            458 => 
            array (
                'id' => 1959,
                'date' => '2021-10-31',
                'state' => 'Perak',
                'rtk_ag' => 3412,
                'pcr' => 656,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            459 => 
            array (
                'id' => 1960,
                'date' => '2021-10-31',
                'state' => 'Perlis',
                'rtk_ag' => 280,
                'pcr' => 21,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            460 => 
            array (
                'id' => 1961,
                'date' => '2021-10-31',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 6342,
                'pcr' => 1035,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            461 => 
            array (
                'id' => 1962,
                'date' => '2021-10-31',
                'state' => 'Sabah',
                'rtk_ag' => 3366,
                'pcr' => 1176,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            462 => 
            array (
                'id' => 1963,
                'date' => '2021-10-31',
                'state' => 'Sarawak',
                'rtk_ag' => 4026,
                'pcr' => 1355,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            463 => 
            array (
                'id' => 1964,
                'date' => '2021-10-31',
                'state' => 'Selangor',
                'rtk_ag' => 21662,
                'pcr' => 5831,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            464 => 
            array (
                'id' => 1965,
                'date' => '2021-10-31',
                'state' => 'Terengganu',
                'rtk_ag' => 5284,
                'pcr' => 770,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            465 => 
            array (
                'id' => 1966,
                'date' => '2021-10-31',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4987,
                'pcr' => 1949,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            466 => 
            array (
                'id' => 1967,
                'date' => '2021-10-31',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 1512,
                'pcr' => 18,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            467 => 
            array (
                'id' => 1968,
                'date' => '2021-10-31',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 305,
                'pcr' => 124,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            468 => 
            array (
                'id' => 1969,
                'date' => '2021-11-01',
                'state' => 'Johor',
                'rtk_ag' => 19386,
                'pcr' => 3531,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            469 => 
            array (
                'id' => 1970,
                'date' => '2021-11-01',
                'state' => 'Kedah',
                'rtk_ag' => 6822,
                'pcr' => 1067,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            470 => 
            array (
                'id' => 1971,
                'date' => '2021-11-01',
                'state' => 'Kelantan',
                'rtk_ag' => 2799,
                'pcr' => 1079,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            471 => 
            array (
                'id' => 1972,
                'date' => '2021-11-01',
                'state' => 'Melaka',
                'rtk_ag' => 5336,
                'pcr' => 552,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            472 => 
            array (
                'id' => 1973,
                'date' => '2021-11-01',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 7516,
                'pcr' => 989,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            473 => 
            array (
                'id' => 1974,
                'date' => '2021-11-01',
                'state' => 'Pahang',
                'rtk_ag' => 4805,
                'pcr' => 680,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            474 => 
            array (
                'id' => 1975,
                'date' => '2021-11-01',
                'state' => 'Perak',
                'rtk_ag' => 8130,
                'pcr' => 811,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            475 => 
            array (
                'id' => 1976,
                'date' => '2021-11-01',
                'state' => 'Perlis',
                'rtk_ag' => 382,
                'pcr' => 33,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            476 => 
            array (
                'id' => 1977,
                'date' => '2021-11-01',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 12550,
                'pcr' => 1108,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            477 => 
            array (
                'id' => 1978,
                'date' => '2021-11-01',
                'state' => 'Sabah',
                'rtk_ag' => 5167,
                'pcr' => 1140,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            478 => 
            array (
                'id' => 1979,
                'date' => '2021-11-01',
                'state' => 'Sarawak',
                'rtk_ag' => 7357,
                'pcr' => 1983,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            479 => 
            array (
                'id' => 1980,
                'date' => '2021-11-01',
                'state' => 'Selangor',
                'rtk_ag' => 40480,
                'pcr' => 8237,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            480 => 
            array (
                'id' => 1981,
                'date' => '2021-11-01',
                'state' => 'Terengganu',
                'rtk_ag' => 4282,
                'pcr' => 1078,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            481 => 
            array (
                'id' => 1982,
                'date' => '2021-11-01',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 10881,
                'pcr' => 4489,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            482 => 
            array (
                'id' => 1983,
                'date' => '2021-11-01',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 2752,
                'pcr' => 17,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            483 => 
            array (
                'id' => 1984,
                'date' => '2021-11-01',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 576,
                'pcr' => 177,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            484 => 
            array (
                'id' => 1985,
                'date' => '2021-11-02',
                'state' => 'Johor',
                'rtk_ag' => 12399,
                'pcr' => 3032,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            485 => 
            array (
                'id' => 1986,
                'date' => '2021-11-02',
                'state' => 'Kedah',
                'rtk_ag' => 4841,
                'pcr' => 889,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            486 => 
            array (
                'id' => 1987,
                'date' => '2021-11-02',
                'state' => 'Kelantan',
                'rtk_ag' => 2633,
                'pcr' => 618,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            487 => 
            array (
                'id' => 1988,
                'date' => '2021-11-02',
                'state' => 'Melaka',
                'rtk_ag' => 4644,
                'pcr' => 830,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            488 => 
            array (
                'id' => 1989,
                'date' => '2021-11-02',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5092,
                'pcr' => 1312,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            489 => 
            array (
                'id' => 1990,
                'date' => '2021-11-02',
                'state' => 'Pahang',
                'rtk_ag' => 3552,
                'pcr' => 910,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            490 => 
            array (
                'id' => 1991,
                'date' => '2021-11-02',
                'state' => 'Perak',
                'rtk_ag' => 5736,
                'pcr' => 902,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            491 => 
            array (
                'id' => 1992,
                'date' => '2021-11-02',
                'state' => 'Perlis',
                'rtk_ag' => 582,
                'pcr' => 16,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            492 => 
            array (
                'id' => 1993,
                'date' => '2021-11-02',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 8255,
                'pcr' => 1310,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            493 => 
            array (
                'id' => 1994,
                'date' => '2021-11-02',
                'state' => 'Sabah',
                'rtk_ag' => 4859,
                'pcr' => 1591,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            494 => 
            array (
                'id' => 1995,
                'date' => '2021-11-02',
                'state' => 'Sarawak',
                'rtk_ag' => 6332,
                'pcr' => 1341,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            495 => 
            array (
                'id' => 1996,
                'date' => '2021-11-02',
                'state' => 'Selangor',
                'rtk_ag' => 29804,
                'pcr' => 10782,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            496 => 
            array (
                'id' => 1997,
                'date' => '2021-11-02',
                'state' => 'Terengganu',
                'rtk_ag' => 3305,
                'pcr' => 727,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            497 => 
            array (
                'id' => 1998,
                'date' => '2021-11-02',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 7074,
                'pcr' => 3655,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            498 => 
            array (
                'id' => 1999,
                'date' => '2021-11-02',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 2340,
                'pcr' => 98,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            499 => 
            array (
                'id' => 2000,
                'date' => '2021-11-02',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 403,
                'pcr' => 221,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
        ));
        \DB::table('test_states')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'date' => '2021-11-03',
                'state' => 'Johor',
                'rtk_ag' => 11030,
                'pcr' => 3446,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            1 => 
            array (
                'id' => 2002,
                'date' => '2021-11-03',
                'state' => 'Kedah',
                'rtk_ag' => 4549,
                'pcr' => 956,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            2 => 
            array (
                'id' => 2003,
                'date' => '2021-11-03',
                'state' => 'Kelantan',
                'rtk_ag' => 2738,
                'pcr' => 728,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            3 => 
            array (
                'id' => 2004,
                'date' => '2021-11-03',
                'state' => 'Melaka',
                'rtk_ag' => 2505,
                'pcr' => 861,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            4 => 
            array (
                'id' => 2005,
                'date' => '2021-11-03',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5655,
                'pcr' => 1279,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            5 => 
            array (
                'id' => 2006,
                'date' => '2021-11-03',
                'state' => 'Pahang',
                'rtk_ag' => 4816,
                'pcr' => 1125,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            6 => 
            array (
                'id' => 2007,
                'date' => '2021-11-03',
                'state' => 'Perak',
                'rtk_ag' => 4946,
                'pcr' => 1305,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            7 => 
            array (
                'id' => 2008,
                'date' => '2021-11-03',
                'state' => 'Perlis',
                'rtk_ag' => 333,
                'pcr' => 49,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            8 => 
            array (
                'id' => 2009,
                'date' => '2021-11-03',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 7062,
                'pcr' => 1484,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            9 => 
            array (
                'id' => 2010,
                'date' => '2021-11-03',
                'state' => 'Sabah',
                'rtk_ag' => 4220,
                'pcr' => 1554,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            10 => 
            array (
                'id' => 2011,
                'date' => '2021-11-03',
                'state' => 'Sarawak',
                'rtk_ag' => 6006,
                'pcr' => 1935,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            11 => 
            array (
                'id' => 2012,
                'date' => '2021-11-03',
                'state' => 'Selangor',
                'rtk_ag' => 25946,
                'pcr' => 9884,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            12 => 
            array (
                'id' => 2013,
                'date' => '2021-11-03',
                'state' => 'Terengganu',
                'rtk_ag' => 4086,
                'pcr' => 611,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            13 => 
            array (
                'id' => 2014,
                'date' => '2021-11-03',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 6059,
                'pcr' => 4481,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            14 => 
            array (
                'id' => 2015,
                'date' => '2021-11-03',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 2553,
                'pcr' => 104,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            15 => 
            array (
                'id' => 2016,
                'date' => '2021-11-03',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 450,
                'pcr' => 225,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            16 => 
            array (
                'id' => 2017,
                'date' => '2021-11-04',
                'state' => 'Johor',
                'rtk_ag' => 6182,
                'pcr' => 3694,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            17 => 
            array (
                'id' => 2018,
                'date' => '2021-11-04',
                'state' => 'Kedah',
                'rtk_ag' => 2532,
                'pcr' => 731,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            18 => 
            array (
                'id' => 2019,
                'date' => '2021-11-04',
                'state' => 'Kelantan',
                'rtk_ag' => 1899,
                'pcr' => 873,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            19 => 
            array (
                'id' => 2020,
                'date' => '2021-11-04',
                'state' => 'Melaka',
                'rtk_ag' => 1785,
                'pcr' => 722,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            20 => 
            array (
                'id' => 2021,
                'date' => '2021-11-04',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2186,
                'pcr' => 921,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            21 => 
            array (
                'id' => 2022,
                'date' => '2021-11-04',
                'state' => 'Pahang',
                'rtk_ag' => 1825,
                'pcr' => 516,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            22 => 
            array (
                'id' => 2023,
                'date' => '2021-11-04',
                'state' => 'Perak',
                'rtk_ag' => 3493,
                'pcr' => 858,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            23 => 
            array (
                'id' => 2024,
                'date' => '2021-11-04',
                'state' => 'Perlis',
                'rtk_ag' => 226,
                'pcr' => 48,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            24 => 
            array (
                'id' => 2025,
                'date' => '2021-11-04',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 5347,
                'pcr' => 1592,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            25 => 
            array (
                'id' => 2026,
                'date' => '2021-11-04',
                'state' => 'Sabah',
                'rtk_ag' => 3040,
                'pcr' => 1401,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            26 => 
            array (
                'id' => 2027,
                'date' => '2021-11-04',
                'state' => 'Sarawak',
                'rtk_ag' => 6122,
                'pcr' => 1676,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            27 => 
            array (
                'id' => 2028,
                'date' => '2021-11-04',
                'state' => 'Selangor',
                'rtk_ag' => 12297,
                'pcr' => 7621,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            28 => 
            array (
                'id' => 2029,
                'date' => '2021-11-04',
                'state' => 'Terengganu',
                'rtk_ag' => 2375,
                'pcr' => 516,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            29 => 
            array (
                'id' => 2030,
                'date' => '2021-11-04',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 3019,
                'pcr' => 2405,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            30 => 
            array (
                'id' => 2031,
                'date' => '2021-11-04',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 1496,
                'pcr' => 75,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            31 => 
            array (
                'id' => 2032,
                'date' => '2021-11-04',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 193,
                'pcr' => 158,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            32 => 
            array (
                'id' => 2033,
                'date' => '2021-11-05',
                'state' => 'Johor',
                'rtk_ag' => 8284,
                'pcr' => 2586,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            33 => 
            array (
                'id' => 2034,
                'date' => '2021-11-05',
                'state' => 'Kedah',
                'rtk_ag' => 2904,
                'pcr' => 527,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            34 => 
            array (
                'id' => 2035,
                'date' => '2021-11-05',
                'state' => 'Kelantan',
                'rtk_ag' => 1658,
                'pcr' => 577,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            35 => 
            array (
                'id' => 2036,
                'date' => '2021-11-05',
                'state' => 'Melaka',
                'rtk_ag' => 2106,
                'pcr' => 648,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            36 => 
            array (
                'id' => 2037,
                'date' => '2021-11-05',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3068,
                'pcr' => 859,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            37 => 
            array (
                'id' => 2038,
                'date' => '2021-11-05',
                'state' => 'Pahang',
                'rtk_ag' => 3433,
                'pcr' => 490,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            38 => 
            array (
                'id' => 2039,
                'date' => '2021-11-05',
                'state' => 'Perak',
                'rtk_ag' => 2669,
                'pcr' => 948,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            39 => 
            array (
                'id' => 2040,
                'date' => '2021-11-05',
                'state' => 'Perlis',
                'rtk_ag' => 334,
                'pcr' => 17,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            40 => 
            array (
                'id' => 2041,
                'date' => '2021-11-05',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 7380,
                'pcr' => 949,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            41 => 
            array (
                'id' => 2042,
                'date' => '2021-11-05',
                'state' => 'Sabah',
                'rtk_ag' => 4478,
                'pcr' => 1020,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            42 => 
            array (
                'id' => 2043,
                'date' => '2021-11-05',
                'state' => 'Sarawak',
                'rtk_ag' => 5583,
                'pcr' => 1717,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            43 => 
            array (
                'id' => 2044,
                'date' => '2021-11-05',
                'state' => 'Selangor',
                'rtk_ag' => 18706,
                'pcr' => 7435,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            44 => 
            array (
                'id' => 2045,
                'date' => '2021-11-05',
                'state' => 'Terengganu',
                'rtk_ag' => 2227,
                'pcr' => 284,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            45 => 
            array (
                'id' => 2046,
                'date' => '2021-11-05',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4634,
                'pcr' => 3695,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            46 => 
            array (
                'id' => 2047,
                'date' => '2021-11-05',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 2290,
                'pcr' => 36,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            47 => 
            array (
                'id' => 2048,
                'date' => '2021-11-05',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 387,
                'pcr' => 167,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            48 => 
            array (
                'id' => 2049,
                'date' => '2021-11-06',
                'state' => 'Johor',
                'rtk_ag' => 6619,
                'pcr' => 3205,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            49 => 
            array (
                'id' => 2050,
                'date' => '2021-11-06',
                'state' => 'Kedah',
                'rtk_ag' => 2916,
                'pcr' => 894,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            50 => 
            array (
                'id' => 2051,
                'date' => '2021-11-06',
                'state' => 'Kelantan',
                'rtk_ag' => 2282,
                'pcr' => 520,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            51 => 
            array (
                'id' => 2052,
                'date' => '2021-11-06',
                'state' => 'Melaka',
                'rtk_ag' => 1804,
                'pcr' => 965,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            52 => 
            array (
                'id' => 2053,
                'date' => '2021-11-06',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5911,
                'pcr' => 1384,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            53 => 
            array (
                'id' => 2054,
                'date' => '2021-11-06',
                'state' => 'Pahang',
                'rtk_ag' => 2143,
                'pcr' => 540,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            54 => 
            array (
                'id' => 2055,
                'date' => '2021-11-06',
                'state' => 'Perak',
                'rtk_ag' => 3245,
                'pcr' => 825,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            55 => 
            array (
                'id' => 2056,
                'date' => '2021-11-06',
                'state' => 'Perlis',
                'rtk_ag' => 233,
                'pcr' => 35,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            56 => 
            array (
                'id' => 2057,
                'date' => '2021-11-06',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 5712,
                'pcr' => 1668,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            57 => 
            array (
                'id' => 2058,
                'date' => '2021-11-06',
                'state' => 'Sabah',
                'rtk_ag' => 2855,
                'pcr' => 1696,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            58 => 
            array (
                'id' => 2059,
                'date' => '2021-11-06',
                'state' => 'Sarawak',
                'rtk_ag' => 4836,
                'pcr' => 1860,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            59 => 
            array (
                'id' => 2060,
                'date' => '2021-11-06',
                'state' => 'Selangor',
                'rtk_ag' => 13730,
                'pcr' => 8726,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            60 => 
            array (
                'id' => 2061,
                'date' => '2021-11-06',
                'state' => 'Terengganu',
                'rtk_ag' => 4021,
                'pcr' => 644,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            61 => 
            array (
                'id' => 2062,
                'date' => '2021-11-06',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4323,
                'pcr' => 4387,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            62 => 
            array (
                'id' => 2063,
                'date' => '2021-11-06',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 1975,
                'pcr' => 91,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            63 => 
            array (
                'id' => 2064,
                'date' => '2021-11-06',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 228,
                'pcr' => 223,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            64 => 
            array (
                'id' => 2065,
                'date' => '2021-11-07',
                'state' => 'Johor',
                'rtk_ag' => 12026,
                'pcr' => 2706,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            65 => 
            array (
                'id' => 2066,
                'date' => '2021-11-07',
                'state' => 'Kedah',
                'rtk_ag' => 4575,
                'pcr' => 864,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            66 => 
            array (
                'id' => 2067,
                'date' => '2021-11-07',
                'state' => 'Kelantan',
                'rtk_ag' => 3973,
                'pcr' => 587,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            67 => 
            array (
                'id' => 2068,
                'date' => '2021-11-07',
                'state' => 'Melaka',
                'rtk_ag' => 2525,
                'pcr' => 607,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            68 => 
            array (
                'id' => 2069,
                'date' => '2021-11-07',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2884,
                'pcr' => 840,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            69 => 
            array (
                'id' => 2070,
                'date' => '2021-11-07',
                'state' => 'Pahang',
                'rtk_ag' => 3034,
                'pcr' => 447,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            70 => 
            array (
                'id' => 2071,
                'date' => '2021-11-07',
                'state' => 'Perak',
                'rtk_ag' => 5479,
                'pcr' => 907,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            71 => 
            array (
                'id' => 2072,
                'date' => '2021-11-07',
                'state' => 'Perlis',
                'rtk_ag' => 319,
                'pcr' => 34,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            72 => 
            array (
                'id' => 2073,
                'date' => '2021-11-07',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 7520,
                'pcr' => 997,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            73 => 
            array (
                'id' => 2074,
                'date' => '2021-11-07',
                'state' => 'Sabah',
                'rtk_ag' => 3365,
                'pcr' => 1230,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            74 => 
            array (
                'id' => 2075,
                'date' => '2021-11-07',
                'state' => 'Sarawak',
                'rtk_ag' => 4701,
                'pcr' => 1247,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            75 => 
            array (
                'id' => 2076,
                'date' => '2021-11-07',
                'state' => 'Selangor',
                'rtk_ag' => 21571,
                'pcr' => 6015,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            76 => 
            array (
                'id' => 2077,
                'date' => '2021-11-07',
                'state' => 'Terengganu',
                'rtk_ag' => 5309,
                'pcr' => 661,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            77 => 
            array (
                'id' => 2078,
                'date' => '2021-11-07',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5722,
                'pcr' => 2273,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            78 => 
            array (
                'id' => 2079,
                'date' => '2021-11-07',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 1671,
                'pcr' => 74,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            79 => 
            array (
                'id' => 2080,
                'date' => '2021-11-07',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 365,
                'pcr' => 226,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            80 => 
            array (
                'id' => 2081,
                'date' => '2021-11-08',
                'state' => 'Johor',
                'rtk_ag' => 20180,
                'pcr' => 3944,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            81 => 
            array (
                'id' => 2082,
                'date' => '2021-11-08',
                'state' => 'Kedah',
                'rtk_ag' => 7077,
                'pcr' => 1039,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            82 => 
            array (
                'id' => 2083,
                'date' => '2021-11-08',
                'state' => 'Kelantan',
                'rtk_ag' => 4389,
                'pcr' => 970,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            83 => 
            array (
                'id' => 2084,
                'date' => '2021-11-08',
                'state' => 'Melaka',
                'rtk_ag' => 5759,
                'pcr' => 497,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            84 => 
            array (
                'id' => 2085,
                'date' => '2021-11-08',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 6784,
                'pcr' => 919,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            85 => 
            array (
                'id' => 2086,
                'date' => '2021-11-08',
                'state' => 'Pahang',
                'rtk_ag' => 5345,
                'pcr' => 384,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            86 => 
            array (
                'id' => 2087,
                'date' => '2021-11-08',
                'state' => 'Perak',
                'rtk_ag' => 11012,
                'pcr' => 833,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            87 => 
            array (
                'id' => 2088,
                'date' => '2021-11-08',
                'state' => 'Perlis',
                'rtk_ag' => 438,
                'pcr' => 15,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            88 => 
            array (
                'id' => 2089,
                'date' => '2021-11-08',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 13883,
                'pcr' => 1103,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            89 => 
            array (
                'id' => 2090,
                'date' => '2021-11-08',
                'state' => 'Sabah',
                'rtk_ag' => 5142,
                'pcr' => 1530,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            90 => 
            array (
                'id' => 2091,
                'date' => '2021-11-08',
                'state' => 'Sarawak',
                'rtk_ag' => 6730,
                'pcr' => 1843,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            91 => 
            array (
                'id' => 2092,
                'date' => '2021-11-08',
                'state' => 'Selangor',
                'rtk_ag' => 41506,
                'pcr' => 8081,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            92 => 
            array (
                'id' => 2093,
                'date' => '2021-11-08',
                'state' => 'Terengganu',
                'rtk_ag' => 4798,
                'pcr' => 849,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            93 => 
            array (
                'id' => 2094,
                'date' => '2021-11-08',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 9472,
                'pcr' => 3654,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            94 => 
            array (
                'id' => 2095,
                'date' => '2021-11-08',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 2280,
                'pcr' => 68,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            95 => 
            array (
                'id' => 2096,
                'date' => '2021-11-08',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 545,
                'pcr' => 304,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            96 => 
            array (
                'id' => 2097,
                'date' => '2021-11-09',
                'state' => 'Johor',
                'rtk_ag' => 19270,
                'pcr' => 5019,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            97 => 
            array (
                'id' => 2098,
                'date' => '2021-11-09',
                'state' => 'Kedah',
                'rtk_ag' => 6303,
                'pcr' => 1285,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            98 => 
            array (
                'id' => 2099,
                'date' => '2021-11-09',
                'state' => 'Kelantan',
                'rtk_ag' => 5299,
                'pcr' => 840,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            99 => 
            array (
                'id' => 2100,
                'date' => '2021-11-09',
                'state' => 'Melaka',
                'rtk_ag' => 4067,
                'pcr' => 1020,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            100 => 
            array (
                'id' => 2101,
                'date' => '2021-11-09',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5562,
                'pcr' => 1239,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            101 => 
            array (
                'id' => 2102,
                'date' => '2021-11-09',
                'state' => 'Pahang',
                'rtk_ag' => 5536,
                'pcr' => 912,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            102 => 
            array (
                'id' => 2103,
                'date' => '2021-11-09',
                'state' => 'Perak',
                'rtk_ag' => 9123,
                'pcr' => 1724,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            103 => 
            array (
                'id' => 2104,
                'date' => '2021-11-09',
                'state' => 'Perlis',
                'rtk_ag' => 416,
                'pcr' => 60,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            104 => 
            array (
                'id' => 2105,
                'date' => '2021-11-09',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 13141,
                'pcr' => 1733,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            105 => 
            array (
                'id' => 2106,
                'date' => '2021-11-09',
                'state' => 'Sabah',
                'rtk_ag' => 4860,
                'pcr' => 1595,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            106 => 
            array (
                'id' => 2107,
                'date' => '2021-11-09',
                'state' => 'Sarawak',
                'rtk_ag' => 6133,
                'pcr' => 1842,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            107 => 
            array (
                'id' => 2108,
                'date' => '2021-11-09',
                'state' => 'Selangor',
                'rtk_ag' => 38990,
                'pcr' => 12484,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            108 => 
            array (
                'id' => 2109,
                'date' => '2021-11-09',
                'state' => 'Terengganu',
                'rtk_ag' => 5345,
                'pcr' => 811,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            109 => 
            array (
                'id' => 2110,
                'date' => '2021-11-09',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 9917,
                'pcr' => 4759,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            110 => 
            array (
                'id' => 2111,
                'date' => '2021-11-09',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 1861,
                'pcr' => 60,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            111 => 
            array (
                'id' => 2112,
                'date' => '2021-11-09',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 567,
                'pcr' => 327,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            112 => 
            array (
                'id' => 2113,
                'date' => '2021-11-10',
                'state' => 'Johor',
                'rtk_ag' => 16029,
                'pcr' => 4631,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            113 => 
            array (
                'id' => 2114,
                'date' => '2021-11-10',
                'state' => 'Kedah',
                'rtk_ag' => 5546,
                'pcr' => 1221,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            114 => 
            array (
                'id' => 2115,
                'date' => '2021-11-10',
                'state' => 'Kelantan',
                'rtk_ag' => 5297,
                'pcr' => 829,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            115 => 
            array (
                'id' => 2116,
                'date' => '2021-11-10',
                'state' => 'Melaka',
                'rtk_ag' => 3865,
                'pcr' => 1309,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            116 => 
            array (
                'id' => 2117,
                'date' => '2021-11-10',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5906,
                'pcr' => 1223,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            117 => 
            array (
                'id' => 2118,
                'date' => '2021-11-10',
                'state' => 'Pahang',
                'rtk_ag' => 5113,
                'pcr' => 1007,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            118 => 
            array (
                'id' => 2119,
                'date' => '2021-11-10',
                'state' => 'Perak',
                'rtk_ag' => 7936,
                'pcr' => 1290,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            119 => 
            array (
                'id' => 2120,
                'date' => '2021-11-10',
                'state' => 'Perlis',
                'rtk_ag' => 389,
                'pcr' => 63,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            120 => 
            array (
                'id' => 2121,
                'date' => '2021-11-10',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 11341,
                'pcr' => 1830,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            121 => 
            array (
                'id' => 2122,
                'date' => '2021-11-10',
                'state' => 'Sabah',
                'rtk_ag' => 4246,
                'pcr' => 1786,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            122 => 
            array (
                'id' => 2123,
                'date' => '2021-11-10',
                'state' => 'Sarawak',
                'rtk_ag' => 5605,
                'pcr' => 1750,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            123 => 
            array (
                'id' => 2124,
                'date' => '2021-11-10',
                'state' => 'Selangor',
                'rtk_ag' => 34088,
                'pcr' => 12444,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            124 => 
            array (
                'id' => 2125,
                'date' => '2021-11-10',
                'state' => 'Terengganu',
                'rtk_ag' => 3310,
                'pcr' => 789,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            125 => 
            array (
                'id' => 2126,
                'date' => '2021-11-10',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 11895,
                'pcr' => 5353,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            126 => 
            array (
                'id' => 2127,
                'date' => '2021-11-10',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 894,
                'pcr' => 78,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            127 => 
            array (
                'id' => 2128,
                'date' => '2021-11-10',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 440,
                'pcr' => 331,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            128 => 
            array (
                'id' => 2129,
                'date' => '2021-11-11',
                'state' => 'Johor',
                'rtk_ag' => 12099,
                'pcr' => 3687,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            129 => 
            array (
                'id' => 2130,
                'date' => '2021-11-11',
                'state' => 'Kedah',
                'rtk_ag' => 4604,
                'pcr' => 1021,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            130 => 
            array (
                'id' => 2131,
                'date' => '2021-11-11',
                'state' => 'Kelantan',
                'rtk_ag' => 2910,
                'pcr' => 856,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            131 => 
            array (
                'id' => 2132,
                'date' => '2021-11-11',
                'state' => 'Melaka',
                'rtk_ag' => 4144,
                'pcr' => 957,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            132 => 
            array (
                'id' => 2133,
                'date' => '2021-11-11',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 7014,
                'pcr' => 1548,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            133 => 
            array (
                'id' => 2134,
                'date' => '2021-11-11',
                'state' => 'Pahang',
                'rtk_ag' => 4434,
                'pcr' => 950,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            134 => 
            array (
                'id' => 2135,
                'date' => '2021-11-11',
                'state' => 'Perak',
                'rtk_ag' => 7365,
                'pcr' => 1265,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            135 => 
            array (
                'id' => 2136,
                'date' => '2021-11-11',
                'state' => 'Perlis',
                'rtk_ag' => 426,
                'pcr' => 25,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            136 => 
            array (
                'id' => 2137,
                'date' => '2021-11-11',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 8444,
                'pcr' => 1423,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            137 => 
            array (
                'id' => 2138,
                'date' => '2021-11-11',
                'state' => 'Sabah',
                'rtk_ag' => 3982,
                'pcr' => 1411,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            138 => 
            array (
                'id' => 2139,
                'date' => '2021-11-11',
                'state' => 'Sarawak',
                'rtk_ag' => 5129,
                'pcr' => 1081,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            139 => 
            array (
                'id' => 2140,
                'date' => '2021-11-11',
                'state' => 'Selangor',
                'rtk_ag' => 29103,
                'pcr' => 9638,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            140 => 
            array (
                'id' => 2141,
                'date' => '2021-11-11',
                'state' => 'Terengganu',
                'rtk_ag' => 4298,
                'pcr' => 808,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            141 => 
            array (
                'id' => 2142,
                'date' => '2021-11-11',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 9251,
                'pcr' => 5062,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            142 => 
            array (
                'id' => 2143,
                'date' => '2021-11-11',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 647,
                'pcr' => 54,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            143 => 
            array (
                'id' => 2144,
                'date' => '2021-11-11',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 458,
                'pcr' => 311,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            144 => 
            array (
                'id' => 2145,
                'date' => '2021-11-12',
                'state' => 'Johor',
                'rtk_ag' => 11659,
                'pcr' => 4323,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            145 => 
            array (
                'id' => 2146,
                'date' => '2021-11-12',
                'state' => 'Kedah',
                'rtk_ag' => 3690,
                'pcr' => 1286,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            146 => 
            array (
                'id' => 2147,
                'date' => '2021-11-12',
                'state' => 'Kelantan',
                'rtk_ag' => 2135,
                'pcr' => 581,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            147 => 
            array (
                'id' => 2148,
                'date' => '2021-11-12',
                'state' => 'Melaka',
                'rtk_ag' => 3150,
                'pcr' => 1247,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            148 => 
            array (
                'id' => 2149,
                'date' => '2021-11-12',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 4026,
                'pcr' => 861,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            149 => 
            array (
                'id' => 2150,
                'date' => '2021-11-12',
                'state' => 'Pahang',
                'rtk_ag' => 3669,
                'pcr' => 743,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            150 => 
            array (
                'id' => 2151,
                'date' => '2021-11-12',
                'state' => 'Perak',
                'rtk_ag' => 6210,
                'pcr' => 1937,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            151 => 
            array (
                'id' => 2152,
                'date' => '2021-11-12',
                'state' => 'Perlis',
                'rtk_ag' => 266,
                'pcr' => 39,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            152 => 
            array (
                'id' => 2153,
                'date' => '2021-11-12',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 7393,
                'pcr' => 1640,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            153 => 
            array (
                'id' => 2154,
                'date' => '2021-11-12',
                'state' => 'Sabah',
                'rtk_ag' => 3445,
                'pcr' => 1481,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            154 => 
            array (
                'id' => 2155,
                'date' => '2021-11-12',
                'state' => 'Sarawak',
                'rtk_ag' => 5293,
                'pcr' => 1490,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            155 => 
            array (
                'id' => 2156,
                'date' => '2021-11-12',
                'state' => 'Selangor',
                'rtk_ag' => 27685,
                'pcr' => 11276,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            156 => 
            array (
                'id' => 2157,
                'date' => '2021-11-12',
                'state' => 'Terengganu',
                'rtk_ag' => 2850,
                'pcr' => 651,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            157 => 
            array (
                'id' => 2158,
                'date' => '2021-11-12',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 6426,
                'pcr' => 4642,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            158 => 
            array (
                'id' => 2159,
                'date' => '2021-11-12',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 828,
                'pcr' => 87,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            159 => 
            array (
                'id' => 2160,
                'date' => '2021-11-12',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 423,
                'pcr' => 320,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            160 => 
            array (
                'id' => 2161,
                'date' => '2021-11-13',
                'state' => 'Johor',
                'rtk_ag' => 7875,
                'pcr' => 2820,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            161 => 
            array (
                'id' => 2162,
                'date' => '2021-11-13',
                'state' => 'Kedah',
                'rtk_ag' => 3093,
                'pcr' => 1202,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            162 => 
            array (
                'id' => 2163,
                'date' => '2021-11-13',
                'state' => 'Kelantan',
                'rtk_ag' => 2691,
                'pcr' => 600,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            163 => 
            array (
                'id' => 2164,
                'date' => '2021-11-13',
                'state' => 'Melaka',
                'rtk_ag' => 1669,
                'pcr' => 949,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            164 => 
            array (
                'id' => 2165,
                'date' => '2021-11-13',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2433,
                'pcr' => 1275,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            165 => 
            array (
                'id' => 2166,
                'date' => '2021-11-13',
                'state' => 'Pahang',
                'rtk_ag' => 2434,
                'pcr' => 562,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            166 => 
            array (
                'id' => 2167,
                'date' => '2021-11-13',
                'state' => 'Perak',
                'rtk_ag' => 4624,
                'pcr' => 1112,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            167 => 
            array (
                'id' => 2168,
                'date' => '2021-11-13',
                'state' => 'Perlis',
                'rtk_ag' => 219,
                'pcr' => 26,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            168 => 
            array (
                'id' => 2169,
                'date' => '2021-11-13',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 6165,
                'pcr' => 1777,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            169 => 
            array (
                'id' => 2170,
                'date' => '2021-11-13',
                'state' => 'Sabah',
                'rtk_ag' => 2874,
                'pcr' => 1856,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            170 => 
            array (
                'id' => 2171,
                'date' => '2021-11-13',
                'state' => 'Sarawak',
                'rtk_ag' => 3725,
                'pcr' => 1663,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            171 => 
            array (
                'id' => 2172,
                'date' => '2021-11-13',
                'state' => 'Selangor',
                'rtk_ag' => 20969,
                'pcr' => 9355,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            172 => 
            array (
                'id' => 2173,
                'date' => '2021-11-13',
                'state' => 'Terengganu',
                'rtk_ag' => 4133,
                'pcr' => 785,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            173 => 
            array (
                'id' => 2174,
                'date' => '2021-11-13',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5128,
                'pcr' => 3891,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            174 => 
            array (
                'id' => 2175,
                'date' => '2021-11-13',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 596,
                'pcr' => 94,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            175 => 
            array (
                'id' => 2176,
                'date' => '2021-11-13',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 262,
                'pcr' => 287,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            176 => 
            array (
                'id' => 2177,
                'date' => '2021-11-14',
                'state' => 'Johor',
                'rtk_ag' => 11031,
                'pcr' => 3969,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            177 => 
            array (
                'id' => 2178,
                'date' => '2021-11-14',
                'state' => 'Kedah',
                'rtk_ag' => 5317,
                'pcr' => 1225,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            178 => 
            array (
                'id' => 2179,
                'date' => '2021-11-14',
                'state' => 'Kelantan',
                'rtk_ag' => 4775,
                'pcr' => 580,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            179 => 
            array (
                'id' => 2180,
                'date' => '2021-11-14',
                'state' => 'Melaka',
                'rtk_ag' => 1688,
                'pcr' => 700,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            180 => 
            array (
                'id' => 2181,
                'date' => '2021-11-14',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 1967,
                'pcr' => 903,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            181 => 
            array (
                'id' => 2182,
                'date' => '2021-11-14',
                'state' => 'Pahang',
                'rtk_ag' => 2991,
                'pcr' => 522,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            182 => 
            array (
                'id' => 2183,
                'date' => '2021-11-14',
                'state' => 'Perak',
                'rtk_ag' => 3505,
                'pcr' => 980,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            183 => 
            array (
                'id' => 2184,
                'date' => '2021-11-14',
                'state' => 'Perlis',
                'rtk_ag' => 191,
                'pcr' => 14,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            184 => 
            array (
                'id' => 2185,
                'date' => '2021-11-14',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 6142,
                'pcr' => 1615,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            185 => 
            array (
                'id' => 2186,
                'date' => '2021-11-14',
                'state' => 'Sabah',
                'rtk_ag' => 2823,
                'pcr' => 1277,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            186 => 
            array (
                'id' => 2187,
                'date' => '2021-11-14',
                'state' => 'Sarawak',
                'rtk_ag' => 3220,
                'pcr' => 1170,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            187 => 
            array (
                'id' => 2188,
                'date' => '2021-11-14',
                'state' => 'Selangor',
                'rtk_ag' => 22396,
                'pcr' => 6815,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            188 => 
            array (
                'id' => 2189,
                'date' => '2021-11-14',
                'state' => 'Terengganu',
                'rtk_ag' => 5220,
                'pcr' => 732,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            189 => 
            array (
                'id' => 2190,
                'date' => '2021-11-14',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5087,
                'pcr' => 2440,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            190 => 
            array (
                'id' => 2191,
                'date' => '2021-11-14',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 601,
                'pcr' => 35,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            191 => 
            array (
                'id' => 2192,
                'date' => '2021-11-14',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 300,
                'pcr' => 187,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            192 => 
            array (
                'id' => 2193,
                'date' => '2021-11-15',
                'state' => 'Johor',
                'rtk_ag' => 23220,
                'pcr' => 4021,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            193 => 
            array (
                'id' => 2194,
                'date' => '2021-11-15',
                'state' => 'Kedah',
                'rtk_ag' => 6857,
                'pcr' => 1087,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            194 => 
            array (
                'id' => 2195,
                'date' => '2021-11-15',
                'state' => 'Kelantan',
                'rtk_ag' => 4886,
                'pcr' => 1098,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            195 => 
            array (
                'id' => 2196,
                'date' => '2021-11-15',
                'state' => 'Melaka',
                'rtk_ag' => 5196,
                'pcr' => 675,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            196 => 
            array (
                'id' => 2197,
                'date' => '2021-11-15',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 8584,
                'pcr' => 770,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            197 => 
            array (
                'id' => 2198,
                'date' => '2021-11-15',
                'state' => 'Pahang',
                'rtk_ag' => 6087,
                'pcr' => 377,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            198 => 
            array (
                'id' => 2199,
                'date' => '2021-11-15',
                'state' => 'Perak',
                'rtk_ag' => 8867,
                'pcr' => 1018,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            199 => 
            array (
                'id' => 2200,
                'date' => '2021-11-15',
                'state' => 'Perlis',
                'rtk_ag' => 360,
                'pcr' => 19,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            200 => 
            array (
                'id' => 2201,
                'date' => '2021-11-15',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 12489,
                'pcr' => 1188,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            201 => 
            array (
                'id' => 2202,
                'date' => '2021-11-15',
                'state' => 'Sabah',
                'rtk_ag' => 4780,
                'pcr' => 1327,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            202 => 
            array (
                'id' => 2203,
                'date' => '2021-11-15',
                'state' => 'Sarawak',
                'rtk_ag' => 6022,
                'pcr' => 1608,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            203 => 
            array (
                'id' => 2204,
                'date' => '2021-11-15',
                'state' => 'Selangor',
                'rtk_ag' => 45150,
                'pcr' => 9024,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            204 => 
            array (
                'id' => 2205,
                'date' => '2021-11-15',
                'state' => 'Terengganu',
                'rtk_ag' => 4148,
                'pcr' => 793,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            205 => 
            array (
                'id' => 2206,
                'date' => '2021-11-15',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 11327,
                'pcr' => 4382,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            206 => 
            array (
                'id' => 2207,
                'date' => '2021-11-15',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 1133,
                'pcr' => 63,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            207 => 
            array (
                'id' => 2208,
                'date' => '2021-11-15',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 641,
                'pcr' => 257,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            208 => 
            array (
                'id' => 2209,
                'date' => '2021-11-16',
                'state' => 'Johor',
                'rtk_ag' => 16113,
                'pcr' => 4567,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            209 => 
            array (
                'id' => 2210,
                'date' => '2021-11-16',
                'state' => 'Kedah',
                'rtk_ag' => 5103,
                'pcr' => 1279,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            210 => 
            array (
                'id' => 2211,
                'date' => '2021-11-16',
                'state' => 'Kelantan',
                'rtk_ag' => 5111,
                'pcr' => 956,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            211 => 
            array (
                'id' => 2212,
                'date' => '2021-11-16',
                'state' => 'Melaka',
                'rtk_ag' => 4402,
                'pcr' => 1416,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            212 => 
            array (
                'id' => 2213,
                'date' => '2021-11-16',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5512,
                'pcr' => 1500,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            213 => 
            array (
                'id' => 2214,
                'date' => '2021-11-16',
                'state' => 'Pahang',
                'rtk_ag' => 4649,
                'pcr' => 1104,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            214 => 
            array (
                'id' => 2215,
                'date' => '2021-11-16',
                'state' => 'Perak',
                'rtk_ag' => 6551,
                'pcr' => 1331,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            215 => 
            array (
                'id' => 2216,
                'date' => '2021-11-16',
                'state' => 'Perlis',
                'rtk_ag' => 301,
                'pcr' => 24,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            216 => 
            array (
                'id' => 2217,
                'date' => '2021-11-16',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 8894,
                'pcr' => 1746,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            217 => 
            array (
                'id' => 2218,
                'date' => '2021-11-16',
                'state' => 'Sabah',
                'rtk_ag' => 4207,
                'pcr' => 1996,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            218 => 
            array (
                'id' => 2219,
                'date' => '2021-11-16',
                'state' => 'Sarawak',
                'rtk_ag' => 4928,
                'pcr' => 1441,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            219 => 
            array (
                'id' => 2220,
                'date' => '2021-11-16',
                'state' => 'Selangor',
                'rtk_ag' => 30843,
                'pcr' => 13278,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            220 => 
            array (
                'id' => 2221,
                'date' => '2021-11-16',
                'state' => 'Terengganu',
                'rtk_ag' => 3803,
                'pcr' => 792,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            221 => 
            array (
                'id' => 2222,
                'date' => '2021-11-16',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 7593,
                'pcr' => 5177,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            222 => 
            array (
                'id' => 2223,
                'date' => '2021-11-16',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 658,
                'pcr' => 155,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            223 => 
            array (
                'id' => 2224,
                'date' => '2021-11-16',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 414,
                'pcr' => 390,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            224 => 
            array (
                'id' => 2225,
                'date' => '2021-11-17',
                'state' => 'Johor',
                'rtk_ag' => 13672,
                'pcr' => 4394,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            225 => 
            array (
                'id' => 2226,
                'date' => '2021-11-17',
                'state' => 'Kedah',
                'rtk_ag' => 3915,
                'pcr' => 1341,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            226 => 
            array (
                'id' => 2227,
                'date' => '2021-11-17',
                'state' => 'Kelantan',
                'rtk_ag' => 5062,
                'pcr' => 1092,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            227 => 
            array (
                'id' => 2228,
                'date' => '2021-11-17',
                'state' => 'Melaka',
                'rtk_ag' => 3868,
                'pcr' => 1163,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            228 => 
            array (
                'id' => 2229,
                'date' => '2021-11-17',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5850,
                'pcr' => 921,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            229 => 
            array (
                'id' => 2230,
                'date' => '2021-11-17',
                'state' => 'Pahang',
                'rtk_ag' => 4800,
                'pcr' => 970,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            230 => 
            array (
                'id' => 2231,
                'date' => '2021-11-17',
                'state' => 'Perak',
                'rtk_ag' => 6413,
                'pcr' => 1629,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            231 => 
            array (
                'id' => 2232,
                'date' => '2021-11-17',
                'state' => 'Perlis',
                'rtk_ag' => 353,
                'pcr' => 16,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            232 => 
            array (
                'id' => 2233,
                'date' => '2021-11-17',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 10445,
                'pcr' => 1600,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            233 => 
            array (
                'id' => 2234,
                'date' => '2021-11-17',
                'state' => 'Sabah',
                'rtk_ag' => 4386,
                'pcr' => 1442,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            234 => 
            array (
                'id' => 2235,
                'date' => '2021-11-17',
                'state' => 'Sarawak',
                'rtk_ag' => 4799,
                'pcr' => 1491,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            235 => 
            array (
                'id' => 2236,
                'date' => '2021-11-17',
                'state' => 'Selangor',
                'rtk_ag' => 30189,
                'pcr' => 12641,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            236 => 
            array (
                'id' => 2237,
                'date' => '2021-11-17',
                'state' => 'Terengganu',
                'rtk_ag' => 3975,
                'pcr' => 806,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            237 => 
            array (
                'id' => 2238,
                'date' => '2021-11-17',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 6937,
                'pcr' => 5425,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            238 => 
            array (
                'id' => 2239,
                'date' => '2021-11-17',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 851,
                'pcr' => 94,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            239 => 
            array (
                'id' => 2240,
                'date' => '2021-11-17',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 455,
                'pcr' => 168,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            240 => 
            array (
                'id' => 2241,
                'date' => '2021-11-18',
                'state' => 'Johor',
                'rtk_ag' => 9753,
                'pcr' => 3412,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            241 => 
            array (
                'id' => 2242,
                'date' => '2021-11-18',
                'state' => 'Kedah',
                'rtk_ag' => 4893,
                'pcr' => 1382,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            242 => 
            array (
                'id' => 2243,
                'date' => '2021-11-18',
                'state' => 'Kelantan',
                'rtk_ag' => 5004,
                'pcr' => 1092,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            243 => 
            array (
                'id' => 2244,
                'date' => '2021-11-18',
                'state' => 'Melaka',
                'rtk_ag' => 3090,
                'pcr' => 1129,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            244 => 
            array (
                'id' => 2245,
                'date' => '2021-11-18',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 4006,
                'pcr' => 1195,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            245 => 
            array (
                'id' => 2246,
                'date' => '2021-11-18',
                'state' => 'Pahang',
                'rtk_ag' => 4020,
                'pcr' => 956,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            246 => 
            array (
                'id' => 2247,
                'date' => '2021-11-18',
                'state' => 'Perak',
                'rtk_ag' => 5548,
                'pcr' => 1314,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            247 => 
            array (
                'id' => 2248,
                'date' => '2021-11-18',
                'state' => 'Perlis',
                'rtk_ag' => 252,
                'pcr' => 33,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            248 => 
            array (
                'id' => 2249,
                'date' => '2021-11-18',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 8948,
                'pcr' => 1870,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            249 => 
            array (
                'id' => 2250,
                'date' => '2021-11-18',
                'state' => 'Sabah',
                'rtk_ag' => 4087,
                'pcr' => 1691,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            250 => 
            array (
                'id' => 2251,
                'date' => '2021-11-18',
                'state' => 'Sarawak',
                'rtk_ag' => 4783,
                'pcr' => 959,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            251 => 
            array (
                'id' => 2252,
                'date' => '2021-11-18',
                'state' => 'Selangor',
                'rtk_ag' => 25623,
                'pcr' => 11454,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            252 => 
            array (
                'id' => 2253,
                'date' => '2021-11-18',
                'state' => 'Terengganu',
                'rtk_ag' => 3675,
                'pcr' => 626,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            253 => 
            array (
                'id' => 2254,
                'date' => '2021-11-18',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5845,
                'pcr' => 4811,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            254 => 
            array (
                'id' => 2255,
                'date' => '2021-11-18',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 694,
                'pcr' => 47,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            255 => 
            array (
                'id' => 2256,
                'date' => '2021-11-18',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 584,
                'pcr' => 498,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            256 => 
            array (
                'id' => 2257,
                'date' => '2021-11-19',
                'state' => 'Johor',
                'rtk_ag' => 11209,
                'pcr' => 3993,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            257 => 
            array (
                'id' => 2258,
                'date' => '2021-11-19',
                'state' => 'Kedah',
                'rtk_ag' => 4026,
                'pcr' => 1011,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            258 => 
            array (
                'id' => 2259,
                'date' => '2021-11-19',
                'state' => 'Kelantan',
                'rtk_ag' => 2184,
                'pcr' => 774,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            259 => 
            array (
                'id' => 2260,
                'date' => '2021-11-19',
                'state' => 'Melaka',
                'rtk_ag' => 2558,
                'pcr' => 1028,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            260 => 
            array (
                'id' => 2261,
                'date' => '2021-11-19',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3772,
                'pcr' => 867,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            261 => 
            array (
                'id' => 2262,
                'date' => '2021-11-19',
                'state' => 'Pahang',
                'rtk_ag' => 3689,
                'pcr' => 847,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            262 => 
            array (
                'id' => 2263,
                'date' => '2021-11-19',
                'state' => 'Perak',
                'rtk_ag' => 4894,
                'pcr' => 1277,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            263 => 
            array (
                'id' => 2264,
                'date' => '2021-11-19',
                'state' => 'Perlis',
                'rtk_ag' => 293,
                'pcr' => 9,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            264 => 
            array (
                'id' => 2265,
                'date' => '2021-11-19',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 8927,
                'pcr' => 1687,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            265 => 
            array (
                'id' => 2266,
                'date' => '2021-11-19',
                'state' => 'Sabah',
                'rtk_ag' => 3759,
                'pcr' => 1506,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            266 => 
            array (
                'id' => 2267,
                'date' => '2021-11-19',
                'state' => 'Sarawak',
                'rtk_ag' => 4562,
                'pcr' => 1368,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            267 => 
            array (
                'id' => 2268,
                'date' => '2021-11-19',
                'state' => 'Selangor',
                'rtk_ag' => 23020,
                'pcr' => 10840,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            268 => 
            array (
                'id' => 2269,
                'date' => '2021-11-19',
                'state' => 'Terengganu',
                'rtk_ag' => 2198,
                'pcr' => 465,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            269 => 
            array (
                'id' => 2270,
                'date' => '2021-11-19',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5854,
                'pcr' => 4572,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            270 => 
            array (
                'id' => 2271,
                'date' => '2021-11-19',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 714,
                'pcr' => 76,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            271 => 
            array (
                'id' => 2272,
                'date' => '2021-11-19',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 454,
                'pcr' => 246,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            272 => 
            array (
                'id' => 2273,
                'date' => '2021-11-20',
                'state' => 'Johor',
                'rtk_ag' => 8228,
                'pcr' => 3945,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            273 => 
            array (
                'id' => 2274,
                'date' => '2021-11-20',
                'state' => 'Kedah',
                'rtk_ag' => 3080,
                'pcr' => 883,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            274 => 
            array (
                'id' => 2275,
                'date' => '2021-11-20',
                'state' => 'Kelantan',
                'rtk_ag' => 2583,
                'pcr' => 529,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            275 => 
            array (
                'id' => 2276,
                'date' => '2021-11-20',
                'state' => 'Melaka',
                'rtk_ag' => 1479,
                'pcr' => 1114,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            276 => 
            array (
                'id' => 2277,
                'date' => '2021-11-20',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5515,
                'pcr' => 843,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            277 => 
            array (
                'id' => 2278,
                'date' => '2021-11-20',
                'state' => 'Pahang',
                'rtk_ag' => 2487,
                'pcr' => 656,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            278 => 
            array (
                'id' => 2279,
                'date' => '2021-11-20',
                'state' => 'Perak',
                'rtk_ag' => 3958,
                'pcr' => 1107,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            279 => 
            array (
                'id' => 2280,
                'date' => '2021-11-20',
                'state' => 'Perlis',
                'rtk_ag' => 183,
                'pcr' => 32,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            280 => 
            array (
                'id' => 2281,
                'date' => '2021-11-20',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 4966,
                'pcr' => 1766,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            281 => 
            array (
                'id' => 2282,
                'date' => '2021-11-20',
                'state' => 'Sabah',
                'rtk_ag' => 2832,
                'pcr' => 1752,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            282 => 
            array (
                'id' => 2283,
                'date' => '2021-11-20',
                'state' => 'Sarawak',
                'rtk_ag' => 3139,
                'pcr' => 1442,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            283 => 
            array (
                'id' => 2284,
                'date' => '2021-11-20',
                'state' => 'Selangor',
                'rtk_ag' => 15485,
                'pcr' => 8855,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            284 => 
            array (
                'id' => 2285,
                'date' => '2021-11-20',
                'state' => 'Terengganu',
                'rtk_ag' => 4026,
                'pcr' => 595,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            285 => 
            array (
                'id' => 2286,
                'date' => '2021-11-20',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4657,
                'pcr' => 3809,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            286 => 
            array (
                'id' => 2287,
                'date' => '2021-11-20',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 524,
                'pcr' => 71,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            287 => 
            array (
                'id' => 2288,
                'date' => '2021-11-20',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 318,
                'pcr' => 270,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            288 => 
            array (
                'id' => 2289,
                'date' => '2021-11-21',
                'state' => 'Johor',
                'rtk_ag' => 9476,
                'pcr' => 3028,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            289 => 
            array (
                'id' => 2290,
                'date' => '2021-11-21',
                'state' => 'Kedah',
                'rtk_ag' => 4055,
                'pcr' => 1085,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            290 => 
            array (
                'id' => 2291,
                'date' => '2021-11-21',
                'state' => 'Kelantan',
                'rtk_ag' => 3791,
                'pcr' => 609,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            291 => 
            array (
                'id' => 2292,
                'date' => '2021-11-21',
                'state' => 'Melaka',
                'rtk_ag' => 1814,
                'pcr' => 495,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            292 => 
            array (
                'id' => 2293,
                'date' => '2021-11-21',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2560,
                'pcr' => 676,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            293 => 
            array (
                'id' => 2294,
                'date' => '2021-11-21',
                'state' => 'Pahang',
                'rtk_ag' => 2262,
                'pcr' => 480,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            294 => 
            array (
                'id' => 2295,
                'date' => '2021-11-21',
                'state' => 'Perak',
                'rtk_ag' => 3834,
                'pcr' => 979,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            295 => 
            array (
                'id' => 2296,
                'date' => '2021-11-21',
                'state' => 'Perlis',
                'rtk_ag' => 216,
                'pcr' => 21,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            296 => 
            array (
                'id' => 2297,
                'date' => '2021-11-21',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 5867,
                'pcr' => 880,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            297 => 
            array (
                'id' => 2298,
                'date' => '2021-11-21',
                'state' => 'Sabah',
                'rtk_ag' => 3345,
                'pcr' => 1479,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            298 => 
            array (
                'id' => 2299,
                'date' => '2021-11-21',
                'state' => 'Sarawak',
                'rtk_ag' => 2873,
                'pcr' => 1049,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            299 => 
            array (
                'id' => 2300,
                'date' => '2021-11-21',
                'state' => 'Selangor',
                'rtk_ag' => 19010,
                'pcr' => 7102,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            300 => 
            array (
                'id' => 2301,
                'date' => '2021-11-21',
                'state' => 'Terengganu',
                'rtk_ag' => 4763,
                'pcr' => 560,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            301 => 
            array (
                'id' => 2302,
                'date' => '2021-11-21',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4618,
                'pcr' => 2968,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            302 => 
            array (
                'id' => 2303,
                'date' => '2021-11-21',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 506,
                'pcr' => 27,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            303 => 
            array (
                'id' => 2304,
                'date' => '2021-11-21',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 292,
                'pcr' => 341,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            304 => 
            array (
                'id' => 2305,
                'date' => '2021-11-22',
                'state' => 'Johor',
                'rtk_ag' => 20180,
                'pcr' => 4590,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            305 => 
            array (
                'id' => 2306,
                'date' => '2021-11-22',
                'state' => 'Kedah',
                'rtk_ag' => 6013,
                'pcr' => 1275,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            306 => 
            array (
                'id' => 2307,
                'date' => '2021-11-22',
                'state' => 'Kelantan',
                'rtk_ag' => 3941,
                'pcr' => 931,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            307 => 
            array (
                'id' => 2308,
                'date' => '2021-11-22',
                'state' => 'Melaka',
                'rtk_ag' => 6540,
                'pcr' => 951,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            308 => 
            array (
                'id' => 2309,
                'date' => '2021-11-22',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5977,
                'pcr' => 927,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            309 => 
            array (
                'id' => 2310,
                'date' => '2021-11-22',
                'state' => 'Pahang',
                'rtk_ag' => 5170,
                'pcr' => 624,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            310 => 
            array (
                'id' => 2311,
                'date' => '2021-11-22',
                'state' => 'Perak',
                'rtk_ag' => 9796,
                'pcr' => 1029,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            311 => 
            array (
                'id' => 2312,
                'date' => '2021-11-22',
                'state' => 'Perlis',
                'rtk_ag' => 351,
                'pcr' => 12,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            312 => 
            array (
                'id' => 2313,
                'date' => '2021-11-22',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 12492,
                'pcr' => 1196,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            313 => 
            array (
                'id' => 2314,
                'date' => '2021-11-22',
                'state' => 'Sabah',
                'rtk_ag' => 5013,
                'pcr' => 1230,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            314 => 
            array (
                'id' => 2315,
                'date' => '2021-11-22',
                'state' => 'Sarawak',
                'rtk_ag' => 5193,
                'pcr' => 1583,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            315 => 
            array (
                'id' => 2316,
                'date' => '2021-11-22',
                'state' => 'Selangor',
                'rtk_ag' => 38092,
                'pcr' => 9623,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            316 => 
            array (
                'id' => 2317,
                'date' => '2021-11-22',
                'state' => 'Terengganu',
                'rtk_ag' => 3334,
                'pcr' => 664,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            317 => 
            array (
                'id' => 2318,
                'date' => '2021-11-22',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 9407,
                'pcr' => 4696,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            318 => 
            array (
                'id' => 2319,
                'date' => '2021-11-22',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 1218,
                'pcr' => 108,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            319 => 
            array (
                'id' => 2320,
                'date' => '2021-11-22',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 580,
                'pcr' => 267,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            320 => 
            array (
                'id' => 2321,
                'date' => '2021-11-23',
                'state' => 'Johor',
                'rtk_ag' => 14111,
                'pcr' => 4778,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            321 => 
            array (
                'id' => 2322,
                'date' => '2021-11-23',
                'state' => 'Kedah',
                'rtk_ag' => 4593,
                'pcr' => 1049,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            322 => 
            array (
                'id' => 2323,
                'date' => '2021-11-23',
                'state' => 'Kelantan',
                'rtk_ag' => 2947,
                'pcr' => 919,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            323 => 
            array (
                'id' => 2324,
                'date' => '2021-11-23',
                'state' => 'Melaka',
                'rtk_ag' => 3985,
                'pcr' => 1347,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            324 => 
            array (
                'id' => 2325,
                'date' => '2021-11-23',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 6693,
                'pcr' => 978,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            325 => 
            array (
                'id' => 2326,
                'date' => '2021-11-23',
                'state' => 'Pahang',
                'rtk_ag' => 3915,
                'pcr' => 1065,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            326 => 
            array (
                'id' => 2327,
                'date' => '2021-11-23',
                'state' => 'Perak',
                'rtk_ag' => 6350,
                'pcr' => 1644,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            327 => 
            array (
                'id' => 2328,
                'date' => '2021-11-23',
                'state' => 'Perlis',
                'rtk_ag' => 333,
                'pcr' => 40,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            328 => 
            array (
                'id' => 2329,
                'date' => '2021-11-23',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 11468,
                'pcr' => 1838,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            329 => 
            array (
                'id' => 2330,
                'date' => '2021-11-23',
                'state' => 'Sabah',
                'rtk_ag' => 3826,
                'pcr' => 1706,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            330 => 
            array (
                'id' => 2331,
                'date' => '2021-11-23',
                'state' => 'Sarawak',
                'rtk_ag' => 3985,
                'pcr' => 1279,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            331 => 
            array (
                'id' => 2332,
                'date' => '2021-11-23',
                'state' => 'Selangor',
                'rtk_ag' => 29570,
                'pcr' => 13605,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            332 => 
            array (
                'id' => 2333,
                'date' => '2021-11-23',
                'state' => 'Terengganu',
                'rtk_ag' => 3308,
                'pcr' => 638,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            333 => 
            array (
                'id' => 2334,
                'date' => '2021-11-23',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 7933,
                'pcr' => 5764,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            334 => 
            array (
                'id' => 2335,
                'date' => '2021-11-23',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 847,
                'pcr' => 96,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            335 => 
            array (
                'id' => 2336,
                'date' => '2021-11-23',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 462,
                'pcr' => 272,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            336 => 
            array (
                'id' => 2337,
                'date' => '2021-11-24',
                'state' => 'Johor',
                'rtk_ag' => 13376,
                'pcr' => 4656,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            337 => 
            array (
                'id' => 2338,
                'date' => '2021-11-24',
                'state' => 'Kedah',
                'rtk_ag' => 4326,
                'pcr' => 1420,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            338 => 
            array (
                'id' => 2339,
                'date' => '2021-11-24',
                'state' => 'Kelantan',
                'rtk_ag' => 3280,
                'pcr' => 854,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            339 => 
            array (
                'id' => 2340,
                'date' => '2021-11-24',
                'state' => 'Melaka',
                'rtk_ag' => 3862,
                'pcr' => 1064,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            340 => 
            array (
                'id' => 2341,
                'date' => '2021-11-24',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5038,
                'pcr' => 1158,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            341 => 
            array (
                'id' => 2342,
                'date' => '2021-11-24',
                'state' => 'Pahang',
                'rtk_ag' => 5170,
                'pcr' => 855,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            342 => 
            array (
                'id' => 2343,
                'date' => '2021-11-24',
                'state' => 'Perak',
                'rtk_ag' => 6497,
                'pcr' => 1321,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            343 => 
            array (
                'id' => 2344,
                'date' => '2021-11-24',
                'state' => 'Perlis',
                'rtk_ag' => 325,
                'pcr' => 65,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            344 => 
            array (
                'id' => 2345,
                'date' => '2021-11-24',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 9957,
                'pcr' => 1831,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            345 => 
            array (
                'id' => 2346,
                'date' => '2021-11-24',
                'state' => 'Sabah',
                'rtk_ag' => 3752,
                'pcr' => 1999,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            346 => 
            array (
                'id' => 2347,
                'date' => '2021-11-24',
                'state' => 'Sarawak',
                'rtk_ag' => 3867,
                'pcr' => 1236,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            347 => 
            array (
                'id' => 2348,
                'date' => '2021-11-24',
                'state' => 'Selangor',
                'rtk_ag' => 31147,
                'pcr' => 13854,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            348 => 
            array (
                'id' => 2349,
                'date' => '2021-11-24',
                'state' => 'Terengganu',
                'rtk_ag' => 2831,
                'pcr' => 551,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            349 => 
            array (
                'id' => 2350,
                'date' => '2021-11-24',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 9278,
                'pcr' => 5604,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            350 => 
            array (
                'id' => 2351,
                'date' => '2021-11-24',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 733,
                'pcr' => 197,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            351 => 
            array (
                'id' => 2352,
                'date' => '2021-11-24',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 430,
                'pcr' => 326,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            352 => 
            array (
                'id' => 2353,
                'date' => '2021-11-25',
                'state' => 'Johor',
                'rtk_ag' => 13316,
                'pcr' => 3286,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            353 => 
            array (
                'id' => 2354,
                'date' => '2021-11-25',
                'state' => 'Kedah',
                'rtk_ag' => 3804,
                'pcr' => 1197,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            354 => 
            array (
                'id' => 2355,
                'date' => '2021-11-25',
                'state' => 'Kelantan',
                'rtk_ag' => 3572,
                'pcr' => 712,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            355 => 
            array (
                'id' => 2356,
                'date' => '2021-11-25',
                'state' => 'Melaka',
                'rtk_ag' => 3830,
                'pcr' => 969,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            356 => 
            array (
                'id' => 2357,
                'date' => '2021-11-25',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5872,
                'pcr' => 814,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            357 => 
            array (
                'id' => 2358,
                'date' => '2021-11-25',
                'state' => 'Pahang',
                'rtk_ag' => 3768,
                'pcr' => 760,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            358 => 
            array (
                'id' => 2359,
                'date' => '2021-11-25',
                'state' => 'Perak',
                'rtk_ag' => 6833,
                'pcr' => 961,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            359 => 
            array (
                'id' => 2360,
                'date' => '2021-11-25',
                'state' => 'Perlis',
                'rtk_ag' => 299,
                'pcr' => 23,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            360 => 
            array (
                'id' => 2361,
                'date' => '2021-11-25',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 8132,
                'pcr' => 1770,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            361 => 
            array (
                'id' => 2362,
                'date' => '2021-11-25',
                'state' => 'Sabah',
                'rtk_ag' => 3952,
                'pcr' => 1558,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            362 => 
            array (
                'id' => 2363,
                'date' => '2021-11-25',
                'state' => 'Sarawak',
                'rtk_ag' => 3735,
                'pcr' => 1001,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            363 => 
            array (
                'id' => 2364,
                'date' => '2021-11-25',
                'state' => 'Selangor',
                'rtk_ag' => 25490,
                'pcr' => 11480,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            364 => 
            array (
                'id' => 2365,
                'date' => '2021-11-25',
                'state' => 'Terengganu',
                'rtk_ag' => 3385,
                'pcr' => 577,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            365 => 
            array (
                'id' => 2366,
                'date' => '2021-11-25',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 7303,
                'pcr' => 4306,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            366 => 
            array (
                'id' => 2367,
                'date' => '2021-11-25',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 631,
                'pcr' => 86,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            367 => 
            array (
                'id' => 2368,
                'date' => '2021-11-25',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 446,
                'pcr' => 207,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            368 => 
            array (
                'id' => 2369,
                'date' => '2021-11-26',
                'state' => 'Johor',
                'rtk_ag' => 9270,
                'pcr' => 3459,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            369 => 
            array (
                'id' => 2370,
                'date' => '2021-11-26',
                'state' => 'Kedah',
                'rtk_ag' => 3189,
                'pcr' => 1088,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            370 => 
            array (
                'id' => 2371,
                'date' => '2021-11-26',
                'state' => 'Kelantan',
                'rtk_ag' => 1973,
                'pcr' => 738,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            371 => 
            array (
                'id' => 2372,
                'date' => '2021-11-26',
                'state' => 'Melaka',
                'rtk_ag' => 2446,
                'pcr' => 1146,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            372 => 
            array (
                'id' => 2373,
                'date' => '2021-11-26',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3420,
                'pcr' => 1234,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            373 => 
            array (
                'id' => 2374,
                'date' => '2021-11-26',
                'state' => 'Pahang',
                'rtk_ag' => 3225,
                'pcr' => 574,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            374 => 
            array (
                'id' => 2375,
                'date' => '2021-11-26',
                'state' => 'Perak',
                'rtk_ag' => 5056,
                'pcr' => 1189,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            375 => 
            array (
                'id' => 2376,
                'date' => '2021-11-26',
                'state' => 'Perlis',
                'rtk_ag' => 239,
                'pcr' => 22,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            376 => 
            array (
                'id' => 2377,
                'date' => '2021-11-26',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 6632,
                'pcr' => 1637,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            377 => 
            array (
                'id' => 2378,
                'date' => '2021-11-26',
                'state' => 'Sabah',
                'rtk_ag' => 2771,
                'pcr' => 1661,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            378 => 
            array (
                'id' => 2379,
                'date' => '2021-11-26',
                'state' => 'Sarawak',
                'rtk_ag' => 3345,
                'pcr' => 1068,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            379 => 
            array (
                'id' => 2380,
                'date' => '2021-11-26',
                'state' => 'Selangor',
                'rtk_ag' => 21611,
                'pcr' => 10526,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            380 => 
            array (
                'id' => 2381,
                'date' => '2021-11-26',
                'state' => 'Terengganu',
                'rtk_ag' => 1692,
                'pcr' => 526,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            381 => 
            array (
                'id' => 2382,
                'date' => '2021-11-26',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4759,
                'pcr' => 4684,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            382 => 
            array (
                'id' => 2383,
                'date' => '2021-11-26',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 690,
                'pcr' => 68,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            383 => 
            array (
                'id' => 2384,
                'date' => '2021-11-26',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 298,
                'pcr' => 251,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            384 => 
            array (
                'id' => 2385,
                'date' => '2021-11-27',
                'state' => 'Johor',
                'rtk_ag' => 6625,
                'pcr' => 2626,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            385 => 
            array (
                'id' => 2386,
                'date' => '2021-11-27',
                'state' => 'Kedah',
                'rtk_ag' => 2396,
                'pcr' => 987,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            386 => 
            array (
                'id' => 2387,
                'date' => '2021-11-27',
                'state' => 'Kelantan',
                'rtk_ag' => 1940,
                'pcr' => 450,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            387 => 
            array (
                'id' => 2388,
                'date' => '2021-11-27',
                'state' => 'Melaka',
                'rtk_ag' => 1018,
                'pcr' => 886,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            388 => 
            array (
                'id' => 2389,
                'date' => '2021-11-27',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3907,
                'pcr' => 784,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            389 => 
            array (
                'id' => 2390,
                'date' => '2021-11-27',
                'state' => 'Pahang',
                'rtk_ag' => 2353,
                'pcr' => 661,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            390 => 
            array (
                'id' => 2391,
                'date' => '2021-11-27',
                'state' => 'Perak',
                'rtk_ag' => 3741,
                'pcr' => 1211,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            391 => 
            array (
                'id' => 2392,
                'date' => '2021-11-27',
                'state' => 'Perlis',
                'rtk_ag' => 179,
                'pcr' => 39,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            392 => 
            array (
                'id' => 2393,
                'date' => '2021-11-27',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 4788,
                'pcr' => 1837,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            393 => 
            array (
                'id' => 2394,
                'date' => '2021-11-27',
                'state' => 'Sabah',
                'rtk_ag' => 2152,
                'pcr' => 1729,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            394 => 
            array (
                'id' => 2395,
                'date' => '2021-11-27',
                'state' => 'Sarawak',
                'rtk_ag' => 2275,
                'pcr' => 1273,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            395 => 
            array (
                'id' => 2396,
                'date' => '2021-11-27',
                'state' => 'Selangor',
                'rtk_ag' => 16805,
                'pcr' => 11236,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            396 => 
            array (
                'id' => 2397,
                'date' => '2021-11-27',
                'state' => 'Terengganu',
                'rtk_ag' => 3256,
                'pcr' => 651,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            397 => 
            array (
                'id' => 2398,
                'date' => '2021-11-27',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4390,
                'pcr' => 3948,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            398 => 
            array (
                'id' => 2399,
                'date' => '2021-11-27',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 364,
                'pcr' => 47,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            399 => 
            array (
                'id' => 2400,
                'date' => '2021-11-27',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 136,
                'pcr' => 234,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            400 => 
            array (
                'id' => 2401,
                'date' => '2021-11-28',
                'state' => 'Johor',
                'rtk_ag' => 8833,
                'pcr' => 3427,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            401 => 
            array (
                'id' => 2402,
                'date' => '2021-11-28',
                'state' => 'Kedah',
                'rtk_ag' => 5277,
                'pcr' => 1026,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            402 => 
            array (
                'id' => 2403,
                'date' => '2021-11-28',
                'state' => 'Kelantan',
                'rtk_ag' => 4887,
                'pcr' => 600,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            403 => 
            array (
                'id' => 2404,
                'date' => '2021-11-28',
                'state' => 'Melaka',
                'rtk_ag' => 1379,
                'pcr' => 746,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            404 => 
            array (
                'id' => 2405,
                'date' => '2021-11-28',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 1738,
                'pcr' => 889,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            405 => 
            array (
                'id' => 2406,
                'date' => '2021-11-28',
                'state' => 'Pahang',
                'rtk_ag' => 2565,
                'pcr' => 445,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            406 => 
            array (
                'id' => 2407,
                'date' => '2021-11-28',
                'state' => 'Perak',
                'rtk_ag' => 3684,
                'pcr' => 979,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            407 => 
            array (
                'id' => 2408,
                'date' => '2021-11-28',
                'state' => 'Perlis',
                'rtk_ag' => 252,
                'pcr' => 16,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            408 => 
            array (
                'id' => 2409,
                'date' => '2021-11-28',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 5372,
                'pcr' => 1017,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            409 => 
            array (
                'id' => 2410,
                'date' => '2021-11-28',
                'state' => 'Sabah',
                'rtk_ag' => 2973,
                'pcr' => 1023,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            410 => 
            array (
                'id' => 2411,
                'date' => '2021-11-28',
                'state' => 'Sarawak',
                'rtk_ag' => 3019,
                'pcr' => 735,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            411 => 
            array (
                'id' => 2412,
                'date' => '2021-11-28',
                'state' => 'Selangor',
                'rtk_ag' => 19455,
                'pcr' => 7534,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            412 => 
            array (
                'id' => 2413,
                'date' => '2021-11-28',
                'state' => 'Terengganu',
                'rtk_ag' => 4108,
                'pcr' => 545,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            413 => 
            array (
                'id' => 2414,
                'date' => '2021-11-28',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 6017,
                'pcr' => 2272,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            414 => 
            array (
                'id' => 2415,
                'date' => '2021-11-28',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 556,
                'pcr' => 127,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            415 => 
            array (
                'id' => 2416,
                'date' => '2021-11-28',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 275,
                'pcr' => 168,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            416 => 
            array (
                'id' => 2417,
                'date' => '2021-11-29',
                'state' => 'Johor',
                'rtk_ag' => 16512,
                'pcr' => 4026,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            417 => 
            array (
                'id' => 2418,
                'date' => '2021-11-29',
                'state' => 'Kedah',
                'rtk_ag' => 5030,
                'pcr' => 1140,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            418 => 
            array (
                'id' => 2419,
                'date' => '2021-11-29',
                'state' => 'Kelantan',
                'rtk_ag' => 5747,
                'pcr' => 940,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            419 => 
            array (
                'id' => 2420,
                'date' => '2021-11-29',
                'state' => 'Melaka',
                'rtk_ag' => 4103,
                'pcr' => 729,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            420 => 
            array (
                'id' => 2421,
                'date' => '2021-11-29',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 4655,
                'pcr' => 709,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            421 => 
            array (
                'id' => 2422,
                'date' => '2021-11-29',
                'state' => 'Pahang',
                'rtk_ag' => 4818,
                'pcr' => 430,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            422 => 
            array (
                'id' => 2423,
                'date' => '2021-11-29',
                'state' => 'Perak',
                'rtk_ag' => 7631,
                'pcr' => 801,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            423 => 
            array (
                'id' => 2424,
                'date' => '2021-11-29',
                'state' => 'Perlis',
                'rtk_ag' => 306,
                'pcr' => 27,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            424 => 
            array (
                'id' => 2425,
                'date' => '2021-11-29',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 9537,
                'pcr' => 1392,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            425 => 
            array (
                'id' => 2426,
                'date' => '2021-11-29',
                'state' => 'Sabah',
                'rtk_ag' => 4011,
                'pcr' => 1456,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            426 => 
            array (
                'id' => 2427,
                'date' => '2021-11-29',
                'state' => 'Sarawak',
                'rtk_ag' => 4135,
                'pcr' => 1299,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            427 => 
            array (
                'id' => 2428,
                'date' => '2021-11-29',
                'state' => 'Selangor',
                'rtk_ag' => 35399,
                'pcr' => 12357,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            428 => 
            array (
                'id' => 2429,
                'date' => '2021-11-29',
                'state' => 'Terengganu',
                'rtk_ag' => 4142,
                'pcr' => 633,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            429 => 
            array (
                'id' => 2430,
                'date' => '2021-11-29',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 9173,
                'pcr' => 4661,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            430 => 
            array (
                'id' => 2431,
                'date' => '2021-11-29',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 738,
                'pcr' => 84,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            431 => 
            array (
                'id' => 2432,
                'date' => '2021-11-29',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 481,
                'pcr' => 187,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            432 => 
            array (
                'id' => 2433,
                'date' => '2021-11-30',
                'state' => 'Johor',
                'rtk_ag' => 15593,
                'pcr' => 5439,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            433 => 
            array (
                'id' => 2434,
                'date' => '2021-11-30',
                'state' => 'Kedah',
                'rtk_ag' => 4096,
                'pcr' => 1310,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            434 => 
            array (
                'id' => 2435,
                'date' => '2021-11-30',
                'state' => 'Kelantan',
                'rtk_ag' => 7193,
                'pcr' => 792,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            435 => 
            array (
                'id' => 2436,
                'date' => '2021-11-30',
                'state' => 'Melaka',
                'rtk_ag' => 3188,
                'pcr' => 1335,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            436 => 
            array (
                'id' => 2437,
                'date' => '2021-11-30',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 4253,
                'pcr' => 1408,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            437 => 
            array (
                'id' => 2438,
                'date' => '2021-11-30',
                'state' => 'Pahang',
                'rtk_ag' => 4202,
                'pcr' => 990,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            438 => 
            array (
                'id' => 2439,
                'date' => '2021-11-30',
                'state' => 'Perak',
                'rtk_ag' => 6532,
                'pcr' => 1650,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            439 => 
            array (
                'id' => 2440,
                'date' => '2021-11-30',
                'state' => 'Perlis',
                'rtk_ag' => 321,
                'pcr' => 46,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            440 => 
            array (
                'id' => 2441,
                'date' => '2021-11-30',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 7887,
                'pcr' => 1951,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            441 => 
            array (
                'id' => 2442,
                'date' => '2021-11-30',
                'state' => 'Sabah',
                'rtk_ag' => 3718,
                'pcr' => 1913,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            442 => 
            array (
                'id' => 2443,
                'date' => '2021-11-30',
                'state' => 'Sarawak',
                'rtk_ag' => 3367,
                'pcr' => 1271,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            443 => 
            array (
                'id' => 2444,
                'date' => '2021-11-30',
                'state' => 'Selangor',
                'rtk_ag' => 32648,
                'pcr' => 14933,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            444 => 
            array (
                'id' => 2445,
                'date' => '2021-11-30',
                'state' => 'Terengganu',
                'rtk_ag' => 3383,
                'pcr' => 587,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            445 => 
            array (
                'id' => 2446,
                'date' => '2021-11-30',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 7905,
                'pcr' => 6725,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            446 => 
            array (
                'id' => 2447,
                'date' => '2021-11-30',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 538,
                'pcr' => 85,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            447 => 
            array (
                'id' => 2448,
                'date' => '2021-11-30',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 376,
                'pcr' => 230,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            448 => 
            array (
                'id' => 2449,
                'date' => '2021-12-01',
                'state' => 'Johor',
                'rtk_ag' => 11639,
                'pcr' => 4616,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            449 => 
            array (
                'id' => 2450,
                'date' => '2021-12-01',
                'state' => 'Kedah',
                'rtk_ag' => 5281,
                'pcr' => 1124,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            450 => 
            array (
                'id' => 2451,
                'date' => '2021-12-01',
                'state' => 'Kelantan',
                'rtk_ag' => 7007,
                'pcr' => 912,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            451 => 
            array (
                'id' => 2452,
                'date' => '2021-12-01',
                'state' => 'Melaka',
                'rtk_ag' => 3952,
                'pcr' => 1095,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            452 => 
            array (
                'id' => 2453,
                'date' => '2021-12-01',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5570,
                'pcr' => 919,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            453 => 
            array (
                'id' => 2454,
                'date' => '2021-12-01',
                'state' => 'Pahang',
                'rtk_ag' => 4157,
                'pcr' => 736,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            454 => 
            array (
                'id' => 2455,
                'date' => '2021-12-01',
                'state' => 'Perak',
                'rtk_ag' => 5178,
                'pcr' => 1216,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            455 => 
            array (
                'id' => 2456,
                'date' => '2021-12-01',
                'state' => 'Perlis',
                'rtk_ag' => 308,
                'pcr' => 44,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            456 => 
            array (
                'id' => 2457,
                'date' => '2021-12-01',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 8268,
                'pcr' => 1668,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            457 => 
            array (
                'id' => 2458,
                'date' => '2021-12-01',
                'state' => 'Sabah',
                'rtk_ag' => 3968,
                'pcr' => 1836,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            458 => 
            array (
                'id' => 2459,
                'date' => '2021-12-01',
                'state' => 'Sarawak',
                'rtk_ag' => 2780,
                'pcr' => 969,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            459 => 
            array (
                'id' => 2460,
                'date' => '2021-12-01',
                'state' => 'Selangor',
                'rtk_ag' => 29146,
                'pcr' => 13546,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            460 => 
            array (
                'id' => 2461,
                'date' => '2021-12-01',
                'state' => 'Terengganu',
                'rtk_ag' => 3828,
                'pcr' => 792,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            461 => 
            array (
                'id' => 2462,
                'date' => '2021-12-01',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5805,
                'pcr' => 5954,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            462 => 
            array (
                'id' => 2463,
                'date' => '2021-12-01',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 490,
                'pcr' => 151,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            463 => 
            array (
                'id' => 2464,
                'date' => '2021-12-01',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 339,
                'pcr' => 209,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            464 => 
            array (
                'id' => 2465,
                'date' => '2021-12-02',
                'state' => 'Johor',
                'rtk_ag' => 9965,
                'pcr' => 3546,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            465 => 
            array (
                'id' => 2466,
                'date' => '2021-12-02',
                'state' => 'Kedah',
                'rtk_ag' => 4304,
                'pcr' => 1341,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            466 => 
            array (
                'id' => 2467,
                'date' => '2021-12-02',
                'state' => 'Kelantan',
                'rtk_ag' => 5698,
                'pcr' => 855,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            467 => 
            array (
                'id' => 2468,
                'date' => '2021-12-02',
                'state' => 'Melaka',
                'rtk_ag' => 2643,
                'pcr' => 1111,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            468 => 
            array (
                'id' => 2469,
                'date' => '2021-12-02',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 4429,
                'pcr' => 866,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            469 => 
            array (
                'id' => 2470,
                'date' => '2021-12-02',
                'state' => 'Pahang',
                'rtk_ag' => 3326,
                'pcr' => 868,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            470 => 
            array (
                'id' => 2471,
                'date' => '2021-12-02',
                'state' => 'Perak',
                'rtk_ag' => 5288,
                'pcr' => 1237,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            471 => 
            array (
                'id' => 2472,
                'date' => '2021-12-02',
                'state' => 'Perlis',
                'rtk_ag' => 305,
                'pcr' => 40,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            472 => 
            array (
                'id' => 2473,
                'date' => '2021-12-02',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 8041,
                'pcr' => 1968,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            473 => 
            array (
                'id' => 2474,
                'date' => '2021-12-02',
                'state' => 'Sabah',
                'rtk_ag' => 3684,
                'pcr' => 1887,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            474 => 
            array (
                'id' => 2475,
                'date' => '2021-12-02',
                'state' => 'Sarawak',
                'rtk_ag' => 2619,
                'pcr' => 1015,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            475 => 
            array (
                'id' => 2476,
                'date' => '2021-12-02',
                'state' => 'Selangor',
                'rtk_ag' => 24308,
                'pcr' => 12623,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            476 => 
            array (
                'id' => 2477,
                'date' => '2021-12-02',
                'state' => 'Terengganu',
                'rtk_ag' => 2796,
                'pcr' => 516,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            477 => 
            array (
                'id' => 2478,
                'date' => '2021-12-02',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5660,
                'pcr' => 4845,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            478 => 
            array (
                'id' => 2479,
                'date' => '2021-12-02',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 640,
                'pcr' => 109,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            479 => 
            array (
                'id' => 2480,
                'date' => '2021-12-02',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 366,
                'pcr' => 138,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            480 => 
            array (
                'id' => 2481,
                'date' => '2021-12-03',
                'state' => 'Johor',
                'rtk_ag' => 10584,
                'pcr' => 4276,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            481 => 
            array (
                'id' => 2482,
                'date' => '2021-12-03',
                'state' => 'Kedah',
                'rtk_ag' => 3997,
                'pcr' => 1252,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            482 => 
            array (
                'id' => 2483,
                'date' => '2021-12-03',
                'state' => 'Kelantan',
                'rtk_ag' => 2086,
                'pcr' => 738,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            483 => 
            array (
                'id' => 2484,
                'date' => '2021-12-03',
                'state' => 'Melaka',
                'rtk_ag' => 2523,
                'pcr' => 887,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            484 => 
            array (
                'id' => 2485,
                'date' => '2021-12-03',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3181,
                'pcr' => 1268,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            485 => 
            array (
                'id' => 2486,
                'date' => '2021-12-03',
                'state' => 'Pahang',
                'rtk_ag' => 3281,
                'pcr' => 677,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            486 => 
            array (
                'id' => 2487,
                'date' => '2021-12-03',
                'state' => 'Perak',
                'rtk_ag' => 5042,
                'pcr' => 1064,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            487 => 
            array (
                'id' => 2488,
                'date' => '2021-12-03',
                'state' => 'Perlis',
                'rtk_ag' => 299,
                'pcr' => 29,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            488 => 
            array (
                'id' => 2489,
                'date' => '2021-12-03',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 7473,
                'pcr' => 1466,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            489 => 
            array (
                'id' => 2490,
                'date' => '2021-12-03',
                'state' => 'Sabah',
                'rtk_ag' => 3520,
                'pcr' => 1538,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            490 => 
            array (
                'id' => 2491,
                'date' => '2021-12-03',
                'state' => 'Sarawak',
                'rtk_ag' => 2840,
                'pcr' => 962,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            491 => 
            array (
                'id' => 2492,
                'date' => '2021-12-03',
                'state' => 'Selangor',
                'rtk_ag' => 22255,
                'pcr' => 11866,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            492 => 
            array (
                'id' => 2493,
                'date' => '2021-12-03',
                'state' => 'Terengganu',
                'rtk_ag' => 1821,
                'pcr' => 393,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            493 => 
            array (
                'id' => 2494,
                'date' => '2021-12-03',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4230,
                'pcr' => 5209,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            494 => 
            array (
                'id' => 2495,
                'date' => '2021-12-03',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 393,
                'pcr' => 92,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            495 => 
            array (
                'id' => 2496,
                'date' => '2021-12-03',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 310,
                'pcr' => 162,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            496 => 
            array (
                'id' => 2497,
                'date' => '2021-12-04',
                'state' => 'Johor',
                'rtk_ag' => 8485,
                'pcr' => 2642,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            497 => 
            array (
                'id' => 2498,
                'date' => '2021-12-04',
                'state' => 'Kedah',
                'rtk_ag' => 3199,
                'pcr' => 884,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            498 => 
            array (
                'id' => 2499,
                'date' => '2021-12-04',
                'state' => 'Kelantan',
                'rtk_ag' => 2579,
                'pcr' => 694,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            499 => 
            array (
                'id' => 2500,
                'date' => '2021-12-04',
                'state' => 'Melaka',
                'rtk_ag' => 1661,
                'pcr' => 1073,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
        ));
        \DB::table('test_states')->insert(array (
            0 => 
            array (
                'id' => 2501,
                'date' => '2021-12-04',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5797,
                'pcr' => 916,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            1 => 
            array (
                'id' => 2502,
                'date' => '2021-12-04',
                'state' => 'Pahang',
                'rtk_ag' => 2174,
                'pcr' => 575,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            2 => 
            array (
                'id' => 2503,
                'date' => '2021-12-04',
                'state' => 'Perak',
                'rtk_ag' => 3422,
                'pcr' => 1211,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            3 => 
            array (
                'id' => 2504,
                'date' => '2021-12-04',
                'state' => 'Perlis',
                'rtk_ag' => 204,
                'pcr' => 43,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            4 => 
            array (
                'id' => 2505,
                'date' => '2021-12-04',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 4778,
                'pcr' => 2014,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            5 => 
            array (
                'id' => 2506,
                'date' => '2021-12-04',
                'state' => 'Sabah',
                'rtk_ag' => 2561,
                'pcr' => 1367,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            6 => 
            array (
                'id' => 2507,
                'date' => '2021-12-04',
                'state' => 'Sarawak',
                'rtk_ag' => 1664,
                'pcr' => 1070,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            7 => 
            array (
                'id' => 2508,
                'date' => '2021-12-04',
                'state' => 'Selangor',
                'rtk_ag' => 15246,
                'pcr' => 13679,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            8 => 
            array (
                'id' => 2509,
                'date' => '2021-12-04',
                'state' => 'Terengganu',
                'rtk_ag' => 3176,
                'pcr' => 538,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            9 => 
            array (
                'id' => 2510,
                'date' => '2021-12-04',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 3633,
                'pcr' => 3625,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            10 => 
            array (
                'id' => 2511,
                'date' => '2021-12-04',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 403,
                'pcr' => 110,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            11 => 
            array (
                'id' => 2512,
                'date' => '2021-12-04',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 340,
                'pcr' => 246,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            12 => 
            array (
                'id' => 2513,
                'date' => '2021-12-05',
                'state' => 'Johor',
                'rtk_ag' => 11038,
                'pcr' => 3110,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            13 => 
            array (
                'id' => 2514,
                'date' => '2021-12-05',
                'state' => 'Kedah',
                'rtk_ag' => 3865,
                'pcr' => 1104,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            14 => 
            array (
                'id' => 2515,
                'date' => '2021-12-05',
                'state' => 'Kelantan',
                'rtk_ag' => 6383,
                'pcr' => 746,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            15 => 
            array (
                'id' => 2516,
                'date' => '2021-12-05',
                'state' => 'Melaka',
                'rtk_ag' => 2017,
                'pcr' => 868,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            16 => 
            array (
                'id' => 2517,
                'date' => '2021-12-05',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 4426,
                'pcr' => 899,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            17 => 
            array (
                'id' => 2518,
                'date' => '2021-12-05',
                'state' => 'Pahang',
                'rtk_ag' => 2813,
                'pcr' => 492,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            18 => 
            array (
                'id' => 2519,
                'date' => '2021-12-05',
                'state' => 'Perak',
                'rtk_ag' => 3367,
                'pcr' => 993,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            19 => 
            array (
                'id' => 2520,
                'date' => '2021-12-05',
                'state' => 'Perlis',
                'rtk_ag' => 209,
                'pcr' => 44,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            20 => 
            array (
                'id' => 2521,
                'date' => '2021-12-05',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 5761,
                'pcr' => 1170,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            21 => 
            array (
                'id' => 2522,
                'date' => '2021-12-05',
                'state' => 'Sabah',
                'rtk_ag' => 2686,
                'pcr' => 1337,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            22 => 
            array (
                'id' => 2523,
                'date' => '2021-12-05',
                'state' => 'Sarawak',
                'rtk_ag' => 1771,
                'pcr' => 843,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            23 => 
            array (
                'id' => 2524,
                'date' => '2021-12-05',
                'state' => 'Selangor',
                'rtk_ag' => 17151,
                'pcr' => 9499,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            24 => 
            array (
                'id' => 2525,
                'date' => '2021-12-05',
                'state' => 'Terengganu',
                'rtk_ag' => 4165,
                'pcr' => 591,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            25 => 
            array (
                'id' => 2526,
                'date' => '2021-12-05',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4510,
                'pcr' => 2545,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            26 => 
            array (
                'id' => 2527,
                'date' => '2021-12-05',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 298,
                'pcr' => 45,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            27 => 
            array (
                'id' => 2528,
                'date' => '2021-12-05',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 215,
                'pcr' => 142,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            28 => 
            array (
                'id' => 2529,
                'date' => '2021-12-06',
                'state' => 'Johor',
                'rtk_ag' => 18804,
                'pcr' => 4200,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            29 => 
            array (
                'id' => 2530,
                'date' => '2021-12-06',
                'state' => 'Kedah',
                'rtk_ag' => 5857,
                'pcr' => 1338,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            30 => 
            array (
                'id' => 2531,
                'date' => '2021-12-06',
                'state' => 'Kelantan',
                'rtk_ag' => 8236,
                'pcr' => 828,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            31 => 
            array (
                'id' => 2532,
                'date' => '2021-12-06',
                'state' => 'Melaka',
                'rtk_ag' => 6244,
                'pcr' => 574,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            32 => 
            array (
                'id' => 2533,
                'date' => '2021-12-06',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5960,
                'pcr' => 574,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            33 => 
            array (
                'id' => 2534,
                'date' => '2021-12-06',
                'state' => 'Pahang',
                'rtk_ag' => 5461,
                'pcr' => 331,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            34 => 
            array (
                'id' => 2535,
                'date' => '2021-12-06',
                'state' => 'Perak',
                'rtk_ag' => 8263,
                'pcr' => 771,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            35 => 
            array (
                'id' => 2536,
                'date' => '2021-12-06',
                'state' => 'Perlis',
                'rtk_ag' => 427,
                'pcr' => 43,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            36 => 
            array (
                'id' => 2537,
                'date' => '2021-12-06',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 12729,
                'pcr' => 1388,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            37 => 
            array (
                'id' => 2538,
                'date' => '2021-12-06',
                'state' => 'Sabah',
                'rtk_ag' => 4482,
                'pcr' => 1808,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            38 => 
            array (
                'id' => 2539,
                'date' => '2021-12-06',
                'state' => 'Sarawak',
                'rtk_ag' => 3500,
                'pcr' => 1152,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            39 => 
            array (
                'id' => 2540,
                'date' => '2021-12-06',
                'state' => 'Selangor',
                'rtk_ag' => 36498,
                'pcr' => 12339,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            40 => 
            array (
                'id' => 2541,
                'date' => '2021-12-06',
                'state' => 'Terengganu',
                'rtk_ag' => 3732,
                'pcr' => 642,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            41 => 
            array (
                'id' => 2542,
                'date' => '2021-12-06',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 8309,
                'pcr' => 4400,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            42 => 
            array (
                'id' => 2543,
                'date' => '2021-12-06',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 1047,
                'pcr' => 56,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            43 => 
            array (
                'id' => 2544,
                'date' => '2021-12-06',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 496,
                'pcr' => 218,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            44 => 
            array (
                'id' => 2545,
                'date' => '2021-12-07',
                'state' => 'Johor',
                'rtk_ag' => 16240,
                'pcr' => 5033,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            45 => 
            array (
                'id' => 2546,
                'date' => '2021-12-07',
                'state' => 'Kedah',
                'rtk_ag' => 5226,
                'pcr' => 1484,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            46 => 
            array (
                'id' => 2547,
                'date' => '2021-12-07',
                'state' => 'Kelantan',
                'rtk_ag' => 8203,
                'pcr' => 770,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            47 => 
            array (
                'id' => 2548,
                'date' => '2021-12-07',
                'state' => 'Melaka',
                'rtk_ag' => 3266,
                'pcr' => 1490,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            48 => 
            array (
                'id' => 2549,
                'date' => '2021-12-07',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 6512,
                'pcr' => 1729,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            49 => 
            array (
                'id' => 2550,
                'date' => '2021-12-07',
                'state' => 'Pahang',
                'rtk_ag' => 4234,
                'pcr' => 1064,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            50 => 
            array (
                'id' => 2551,
                'date' => '2021-12-07',
                'state' => 'Perak',
                'rtk_ag' => 5994,
                'pcr' => 1587,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            51 => 
            array (
                'id' => 2552,
                'date' => '2021-12-07',
                'state' => 'Perlis',
                'rtk_ag' => 312,
                'pcr' => 103,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            52 => 
            array (
                'id' => 2553,
                'date' => '2021-12-07',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 9040,
                'pcr' => 2013,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            53 => 
            array (
                'id' => 2554,
                'date' => '2021-12-07',
                'state' => 'Sabah',
                'rtk_ag' => 3783,
                'pcr' => 1748,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            54 => 
            array (
                'id' => 2555,
                'date' => '2021-12-07',
                'state' => 'Sarawak',
                'rtk_ag' => 2796,
                'pcr' => 1117,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            55 => 
            array (
                'id' => 2556,
                'date' => '2021-12-07',
                'state' => 'Selangor',
                'rtk_ag' => 30196,
                'pcr' => 16294,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            56 => 
            array (
                'id' => 2557,
                'date' => '2021-12-07',
                'state' => 'Terengganu',
                'rtk_ag' => 3161,
                'pcr' => 657,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            57 => 
            array (
                'id' => 2558,
                'date' => '2021-12-07',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 7828,
                'pcr' => 7096,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            58 => 
            array (
                'id' => 2559,
                'date' => '2021-12-07',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 470,
                'pcr' => 167,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            59 => 
            array (
                'id' => 2560,
                'date' => '2021-12-07',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 430,
                'pcr' => 179,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            60 => 
            array (
                'id' => 2561,
                'date' => '2021-12-08',
                'state' => 'Johor',
                'rtk_ag' => 14155,
                'pcr' => 4530,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            61 => 
            array (
                'id' => 2562,
                'date' => '2021-12-08',
                'state' => 'Kedah',
                'rtk_ag' => 5038,
                'pcr' => 1064,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            62 => 
            array (
                'id' => 2563,
                'date' => '2021-12-08',
                'state' => 'Kelantan',
                'rtk_ag' => 8003,
                'pcr' => 801,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            63 => 
            array (
                'id' => 2564,
                'date' => '2021-12-08',
                'state' => 'Melaka',
                'rtk_ag' => 4414,
                'pcr' => 1088,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            64 => 
            array (
                'id' => 2565,
                'date' => '2021-12-08',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5764,
                'pcr' => 858,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            65 => 
            array (
                'id' => 2566,
                'date' => '2021-12-08',
                'state' => 'Pahang',
                'rtk_ag' => 4631,
                'pcr' => 871,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            66 => 
            array (
                'id' => 2567,
                'date' => '2021-12-08',
                'state' => 'Perak',
                'rtk_ag' => 5485,
                'pcr' => 1270,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            67 => 
            array (
                'id' => 2568,
                'date' => '2021-12-08',
                'state' => 'Perlis',
                'rtk_ag' => 298,
                'pcr' => 61,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            68 => 
            array (
                'id' => 2569,
                'date' => '2021-12-08',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 8870,
                'pcr' => 2040,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            69 => 
            array (
                'id' => 2570,
                'date' => '2021-12-08',
                'state' => 'Sabah',
                'rtk_ag' => 3895,
                'pcr' => 1762,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            70 => 
            array (
                'id' => 2571,
                'date' => '2021-12-08',
                'state' => 'Sarawak',
                'rtk_ag' => 2591,
                'pcr' => 1277,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            71 => 
            array (
                'id' => 2572,
                'date' => '2021-12-08',
                'state' => 'Selangor',
                'rtk_ag' => 29972,
                'pcr' => 16116,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            72 => 
            array (
                'id' => 2573,
                'date' => '2021-12-08',
                'state' => 'Terengganu',
                'rtk_ag' => 3540,
                'pcr' => 678,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            73 => 
            array (
                'id' => 2574,
                'date' => '2021-12-08',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 9272,
                'pcr' => 6618,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            74 => 
            array (
                'id' => 2575,
                'date' => '2021-12-08',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 613,
                'pcr' => 105,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            75 => 
            array (
                'id' => 2576,
                'date' => '2021-12-08',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 353,
                'pcr' => 345,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            76 => 
            array (
                'id' => 2577,
                'date' => '2021-12-09',
                'state' => 'Johor',
                'rtk_ag' => 12356,
                'pcr' => 3321,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            77 => 
            array (
                'id' => 2578,
                'date' => '2021-12-09',
                'state' => 'Kedah',
                'rtk_ag' => 3677,
                'pcr' => 1354,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            78 => 
            array (
                'id' => 2579,
                'date' => '2021-12-09',
                'state' => 'Kelantan',
                'rtk_ag' => 5626,
                'pcr' => 836,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            79 => 
            array (
                'id' => 2580,
                'date' => '2021-12-09',
                'state' => 'Melaka',
                'rtk_ag' => 3413,
                'pcr' => 1164,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            80 => 
            array (
                'id' => 2581,
                'date' => '2021-12-09',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5961,
                'pcr' => 1184,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            81 => 
            array (
                'id' => 2582,
                'date' => '2021-12-09',
                'state' => 'Pahang',
                'rtk_ag' => 3644,
                'pcr' => 580,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            82 => 
            array (
                'id' => 2583,
                'date' => '2021-12-09',
                'state' => 'Perak',
                'rtk_ag' => 6767,
                'pcr' => 1594,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            83 => 
            array (
                'id' => 2584,
                'date' => '2021-12-09',
                'state' => 'Perlis',
                'rtk_ag' => 273,
                'pcr' => 34,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            84 => 
            array (
                'id' => 2585,
                'date' => '2021-12-09',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 7973,
                'pcr' => 2091,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            85 => 
            array (
                'id' => 2586,
                'date' => '2021-12-09',
                'state' => 'Sabah',
                'rtk_ag' => 4627,
                'pcr' => 1596,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            86 => 
            array (
                'id' => 2587,
                'date' => '2021-12-09',
                'state' => 'Sarawak',
                'rtk_ag' => 2601,
                'pcr' => 980,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            87 => 
            array (
                'id' => 2588,
                'date' => '2021-12-09',
                'state' => 'Selangor',
                'rtk_ag' => 24314,
                'pcr' => 13189,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            88 => 
            array (
                'id' => 2589,
                'date' => '2021-12-09',
                'state' => 'Terengganu',
                'rtk_ag' => 3234,
                'pcr' => 591,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            89 => 
            array (
                'id' => 2590,
                'date' => '2021-12-09',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 7768,
                'pcr' => 3866,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            90 => 
            array (
                'id' => 2591,
                'date' => '2021-12-09',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 405,
                'pcr' => 76,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            91 => 
            array (
                'id' => 2592,
                'date' => '2021-12-09',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 358,
                'pcr' => 190,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            92 => 
            array (
                'id' => 2593,
                'date' => '2021-12-10',
                'state' => 'Johor',
                'rtk_ag' => 13043,
                'pcr' => 3508,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            93 => 
            array (
                'id' => 2594,
                'date' => '2021-12-10',
                'state' => 'Kedah',
                'rtk_ag' => 4495,
                'pcr' => 1162,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            94 => 
            array (
                'id' => 2595,
                'date' => '2021-12-10',
                'state' => 'Kelantan',
                'rtk_ag' => 2112,
                'pcr' => 803,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            95 => 
            array (
                'id' => 2596,
                'date' => '2021-12-10',
                'state' => 'Melaka',
                'rtk_ag' => 2907,
                'pcr' => 1109,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            96 => 
            array (
                'id' => 2597,
                'date' => '2021-12-10',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3641,
                'pcr' => 1339,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            97 => 
            array (
                'id' => 2598,
                'date' => '2021-12-10',
                'state' => 'Pahang',
                'rtk_ag' => 3332,
                'pcr' => 709,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            98 => 
            array (
                'id' => 2599,
                'date' => '2021-12-10',
                'state' => 'Perak',
                'rtk_ag' => 6234,
                'pcr' => 1341,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            99 => 
            array (
                'id' => 2600,
                'date' => '2021-12-10',
                'state' => 'Perlis',
                'rtk_ag' => 267,
                'pcr' => 27,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            100 => 
            array (
                'id' => 2601,
                'date' => '2021-12-10',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 6423,
                'pcr' => 1858,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            101 => 
            array (
                'id' => 2602,
                'date' => '2021-12-10',
                'state' => 'Sabah',
                'rtk_ag' => 3123,
                'pcr' => 1362,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            102 => 
            array (
                'id' => 2603,
                'date' => '2021-12-10',
                'state' => 'Sarawak',
                'rtk_ag' => 2472,
                'pcr' => 979,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            103 => 
            array (
                'id' => 2604,
                'date' => '2021-12-10',
                'state' => 'Selangor',
                'rtk_ag' => 23234,
                'pcr' => 14367,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            104 => 
            array (
                'id' => 2605,
                'date' => '2021-12-10',
                'state' => 'Terengganu',
                'rtk_ag' => 1704,
                'pcr' => 382,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            105 => 
            array (
                'id' => 2606,
                'date' => '2021-12-10',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 6023,
                'pcr' => 5808,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            106 => 
            array (
                'id' => 2607,
                'date' => '2021-12-10',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 483,
                'pcr' => 68,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            107 => 
            array (
                'id' => 2608,
                'date' => '2021-12-10',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 289,
                'pcr' => 200,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            108 => 
            array (
                'id' => 2609,
                'date' => '2021-12-11',
                'state' => 'Johor',
                'rtk_ag' => 10718,
                'pcr' => 2761,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            109 => 
            array (
                'id' => 2610,
                'date' => '2021-12-11',
                'state' => 'Kedah',
                'rtk_ag' => 3637,
                'pcr' => 765,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            110 => 
            array (
                'id' => 2611,
                'date' => '2021-12-11',
                'state' => 'Kelantan',
                'rtk_ag' => 2277,
                'pcr' => 401,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            111 => 
            array (
                'id' => 2612,
                'date' => '2021-12-11',
                'state' => 'Melaka',
                'rtk_ag' => 1782,
                'pcr' => 833,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            112 => 
            array (
                'id' => 2613,
                'date' => '2021-12-11',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2243,
                'pcr' => 1046,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            113 => 
            array (
                'id' => 2614,
                'date' => '2021-12-11',
                'state' => 'Pahang',
                'rtk_ag' => 2336,
                'pcr' => 666,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            114 => 
            array (
                'id' => 2615,
                'date' => '2021-12-11',
                'state' => 'Perak',
                'rtk_ag' => 4923,
                'pcr' => 952,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            115 => 
            array (
                'id' => 2616,
                'date' => '2021-12-11',
                'state' => 'Perlis',
                'rtk_ag' => 168,
                'pcr' => 35,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            116 => 
            array (
                'id' => 2617,
                'date' => '2021-12-11',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 4863,
                'pcr' => 2106,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            117 => 
            array (
                'id' => 2618,
                'date' => '2021-12-11',
                'state' => 'Sabah',
                'rtk_ag' => 2062,
                'pcr' => 1440,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            118 => 
            array (
                'id' => 2619,
                'date' => '2021-12-11',
                'state' => 'Sarawak',
                'rtk_ag' => 1591,
                'pcr' => 990,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            119 => 
            array (
                'id' => 2620,
                'date' => '2021-12-11',
                'state' => 'Selangor',
                'rtk_ag' => 16164,
                'pcr' => 13867,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            120 => 
            array (
                'id' => 2621,
                'date' => '2021-12-11',
                'state' => 'Terengganu',
                'rtk_ag' => 2562,
                'pcr' => 676,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            121 => 
            array (
                'id' => 2622,
                'date' => '2021-12-11',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4948,
                'pcr' => 3851,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            122 => 
            array (
                'id' => 2623,
                'date' => '2021-12-11',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 324,
                'pcr' => 95,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            123 => 
            array (
                'id' => 2624,
                'date' => '2021-12-11',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 185,
                'pcr' => 201,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            124 => 
            array (
                'id' => 2625,
                'date' => '2021-12-12',
                'state' => 'Johor',
                'rtk_ag' => 15248,
                'pcr' => 3270,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            125 => 
            array (
                'id' => 2626,
                'date' => '2021-12-12',
                'state' => 'Kedah',
                'rtk_ag' => 5800,
                'pcr' => 762,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            126 => 
            array (
                'id' => 2627,
                'date' => '2021-12-12',
                'state' => 'Kelantan',
                'rtk_ag' => 6865,
                'pcr' => 712,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            127 => 
            array (
                'id' => 2628,
                'date' => '2021-12-12',
                'state' => 'Melaka',
                'rtk_ag' => 1551,
                'pcr' => 760,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            128 => 
            array (
                'id' => 2629,
                'date' => '2021-12-12',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 1966,
                'pcr' => 876,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            129 => 
            array (
                'id' => 2630,
                'date' => '2021-12-12',
                'state' => 'Pahang',
                'rtk_ag' => 3174,
                'pcr' => 454,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            130 => 
            array (
                'id' => 2631,
                'date' => '2021-12-12',
                'state' => 'Perak',
                'rtk_ag' => 5008,
                'pcr' => 956,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            131 => 
            array (
                'id' => 2632,
                'date' => '2021-12-12',
                'state' => 'Perlis',
                'rtk_ag' => 217,
                'pcr' => 19,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            132 => 
            array (
                'id' => 2633,
                'date' => '2021-12-12',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 5860,
                'pcr' => 1011,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            133 => 
            array (
                'id' => 2634,
                'date' => '2021-12-12',
                'state' => 'Sabah',
                'rtk_ag' => 2263,
                'pcr' => 1152,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            134 => 
            array (
                'id' => 2635,
                'date' => '2021-12-12',
                'state' => 'Sarawak',
                'rtk_ag' => 1792,
                'pcr' => 901,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            135 => 
            array (
                'id' => 2636,
                'date' => '2021-12-12',
                'state' => 'Selangor',
                'rtk_ag' => 20588,
                'pcr' => 10775,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            136 => 
            array (
                'id' => 2637,
                'date' => '2021-12-12',
                'state' => 'Terengganu',
                'rtk_ag' => 3897,
                'pcr' => 607,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            137 => 
            array (
                'id' => 2638,
                'date' => '2021-12-12',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4798,
                'pcr' => 3044,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            138 => 
            array (
                'id' => 2639,
                'date' => '2021-12-12',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 353,
                'pcr' => 54,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            139 => 
            array (
                'id' => 2640,
                'date' => '2021-12-12',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 196,
                'pcr' => 130,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            140 => 
            array (
                'id' => 2641,
                'date' => '2021-12-13',
                'state' => 'Johor',
                'rtk_ag' => 21417,
                'pcr' => 3717,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            141 => 
            array (
                'id' => 2642,
                'date' => '2021-12-13',
                'state' => 'Kedah',
                'rtk_ag' => 6194,
                'pcr' => 961,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            142 => 
            array (
                'id' => 2643,
                'date' => '2021-12-13',
                'state' => 'Kelantan',
                'rtk_ag' => 7464,
                'pcr' => 906,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            143 => 
            array (
                'id' => 2644,
                'date' => '2021-12-13',
                'state' => 'Melaka',
                'rtk_ag' => 5074,
                'pcr' => 631,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            144 => 
            array (
                'id' => 2645,
                'date' => '2021-12-13',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 4879,
                'pcr' => 544,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            145 => 
            array (
                'id' => 2646,
                'date' => '2021-12-13',
                'state' => 'Pahang',
                'rtk_ag' => 5268,
                'pcr' => 573,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            146 => 
            array (
                'id' => 2647,
                'date' => '2021-12-13',
                'state' => 'Perak',
                'rtk_ag' => 8219,
                'pcr' => 978,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            147 => 
            array (
                'id' => 2648,
                'date' => '2021-12-13',
                'state' => 'Perlis',
                'rtk_ag' => 382,
                'pcr' => 26,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            148 => 
            array (
                'id' => 2649,
                'date' => '2021-12-13',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 10501,
                'pcr' => 1622,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            149 => 
            array (
                'id' => 2650,
                'date' => '2021-12-13',
                'state' => 'Sabah',
                'rtk_ag' => 3805,
                'pcr' => 1212,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            150 => 
            array (
                'id' => 2651,
                'date' => '2021-12-13',
                'state' => 'Sarawak',
                'rtk_ag' => 3100,
                'pcr' => 1374,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            151 => 
            array (
                'id' => 2652,
                'date' => '2021-12-13',
                'state' => 'Selangor',
                'rtk_ag' => 36756,
                'pcr' => 13915,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            152 => 
            array (
                'id' => 2653,
                'date' => '2021-12-13',
                'state' => 'Terengganu',
                'rtk_ag' => 3538,
                'pcr' => 760,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            153 => 
            array (
                'id' => 2654,
                'date' => '2021-12-13',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 10072,
                'pcr' => 4959,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            154 => 
            array (
                'id' => 2655,
                'date' => '2021-12-13',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 706,
                'pcr' => 118,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            155 => 
            array (
                'id' => 2656,
                'date' => '2021-12-13',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 447,
                'pcr' => 243,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            156 => 
            array (
                'id' => 2657,
                'date' => '2021-12-14',
                'state' => 'Johor',
                'rtk_ag' => 16958,
                'pcr' => 4290,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            157 => 
            array (
                'id' => 2658,
                'date' => '2021-12-14',
                'state' => 'Kedah',
                'rtk_ag' => 5385,
                'pcr' => 1183,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            158 => 
            array (
                'id' => 2659,
                'date' => '2021-12-14',
                'state' => 'Kelantan',
                'rtk_ag' => 6960,
                'pcr' => 862,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            159 => 
            array (
                'id' => 2660,
                'date' => '2021-12-14',
                'state' => 'Melaka',
                'rtk_ag' => 3271,
                'pcr' => 1195,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            160 => 
            array (
                'id' => 2661,
                'date' => '2021-12-14',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3887,
                'pcr' => 1124,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            161 => 
            array (
                'id' => 2662,
                'date' => '2021-12-14',
                'state' => 'Pahang',
                'rtk_ag' => 3932,
                'pcr' => 1099,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            162 => 
            array (
                'id' => 2663,
                'date' => '2021-12-14',
                'state' => 'Perak',
                'rtk_ag' => 6447,
                'pcr' => 1467,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            163 => 
            array (
                'id' => 2664,
                'date' => '2021-12-14',
                'state' => 'Perlis',
                'rtk_ag' => 251,
                'pcr' => 32,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            164 => 
            array (
                'id' => 2665,
                'date' => '2021-12-14',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 7999,
                'pcr' => 1978,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            165 => 
            array (
                'id' => 2666,
                'date' => '2021-12-14',
                'state' => 'Sabah',
                'rtk_ag' => 3082,
                'pcr' => 1658,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            166 => 
            array (
                'id' => 2667,
                'date' => '2021-12-14',
                'state' => 'Sarawak',
                'rtk_ag' => 2346,
                'pcr' => 1203,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            167 => 
            array (
                'id' => 2668,
                'date' => '2021-12-14',
                'state' => 'Selangor',
                'rtk_ag' => 27363,
                'pcr' => 15858,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            168 => 
            array (
                'id' => 2669,
                'date' => '2021-12-14',
                'state' => 'Terengganu',
                'rtk_ag' => 2641,
                'pcr' => 523,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            169 => 
            array (
                'id' => 2670,
                'date' => '2021-12-14',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 6500,
                'pcr' => 6790,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            170 => 
            array (
                'id' => 2671,
                'date' => '2021-12-14',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 426,
                'pcr' => 105,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            171 => 
            array (
                'id' => 2672,
                'date' => '2021-12-14',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 361,
                'pcr' => 224,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            172 => 
            array (
                'id' => 2673,
                'date' => '2021-12-15',
                'state' => 'Johor',
                'rtk_ag' => 21157,
                'pcr' => 4182,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            173 => 
            array (
                'id' => 2674,
                'date' => '2021-12-15',
                'state' => 'Kedah',
                'rtk_ag' => 7408,
                'pcr' => 1014,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            174 => 
            array (
                'id' => 2675,
                'date' => '2021-12-15',
                'state' => 'Kelantan',
                'rtk_ag' => 6089,
                'pcr' => 964,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            175 => 
            array (
                'id' => 2676,
                'date' => '2021-12-15',
                'state' => 'Melaka',
                'rtk_ag' => 3826,
                'pcr' => 931,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            176 => 
            array (
                'id' => 2677,
                'date' => '2021-12-15',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 4769,
                'pcr' => 950,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            177 => 
            array (
                'id' => 2678,
                'date' => '2021-12-15',
                'state' => 'Pahang',
                'rtk_ag' => 4560,
                'pcr' => 827,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            178 => 
            array (
                'id' => 2679,
                'date' => '2021-12-15',
                'state' => 'Perak',
                'rtk_ag' => 6060,
                'pcr' => 1273,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            179 => 
            array (
                'id' => 2680,
                'date' => '2021-12-15',
                'state' => 'Perlis',
                'rtk_ag' => 317,
                'pcr' => 65,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            180 => 
            array (
                'id' => 2681,
                'date' => '2021-12-15',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 9181,
                'pcr' => 1999,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            181 => 
            array (
                'id' => 2682,
                'date' => '2021-12-15',
                'state' => 'Sabah',
                'rtk_ag' => 2984,
                'pcr' => 1720,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            182 => 
            array (
                'id' => 2683,
                'date' => '2021-12-15',
                'state' => 'Sarawak',
                'rtk_ag' => 2497,
                'pcr' => 978,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            183 => 
            array (
                'id' => 2684,
                'date' => '2021-12-15',
                'state' => 'Selangor',
                'rtk_ag' => 30900,
                'pcr' => 15550,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            184 => 
            array (
                'id' => 2685,
                'date' => '2021-12-15',
                'state' => 'Terengganu',
                'rtk_ag' => 2951,
                'pcr' => 700,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            185 => 
            array (
                'id' => 2686,
                'date' => '2021-12-15',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 6762,
                'pcr' => 5625,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            186 => 
            array (
                'id' => 2687,
                'date' => '2021-12-15',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 406,
                'pcr' => 112,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            187 => 
            array (
                'id' => 2688,
                'date' => '2021-12-15',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 360,
                'pcr' => 144,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            188 => 
            array (
                'id' => 2689,
                'date' => '2021-12-16',
                'state' => 'Johor',
                'rtk_ag' => 16318,
                'pcr' => 3121,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            189 => 
            array (
                'id' => 2690,
                'date' => '2021-12-16',
                'state' => 'Kedah',
                'rtk_ag' => 5545,
                'pcr' => 1075,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            190 => 
            array (
                'id' => 2691,
                'date' => '2021-12-16',
                'state' => 'Kelantan',
                'rtk_ag' => 3817,
                'pcr' => 1413,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            191 => 
            array (
                'id' => 2692,
                'date' => '2021-12-16',
                'state' => 'Melaka',
                'rtk_ag' => 3213,
                'pcr' => 896,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            192 => 
            array (
                'id' => 2693,
                'date' => '2021-12-16',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 4441,
                'pcr' => 1209,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            193 => 
            array (
                'id' => 2694,
                'date' => '2021-12-16',
                'state' => 'Pahang',
                'rtk_ag' => 3812,
                'pcr' => 635,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            194 => 
            array (
                'id' => 2695,
                'date' => '2021-12-16',
                'state' => 'Perak',
                'rtk_ag' => 7218,
                'pcr' => 1188,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            195 => 
            array (
                'id' => 2696,
                'date' => '2021-12-16',
                'state' => 'Perlis',
                'rtk_ag' => 291,
                'pcr' => 35,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            196 => 
            array (
                'id' => 2697,
                'date' => '2021-12-16',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 7744,
                'pcr' => 1938,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            197 => 
            array (
                'id' => 2698,
                'date' => '2021-12-16',
                'state' => 'Sabah',
                'rtk_ag' => 3171,
                'pcr' => 1201,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            198 => 
            array (
                'id' => 2699,
                'date' => '2021-12-16',
                'state' => 'Sarawak',
                'rtk_ag' => 2265,
                'pcr' => 748,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            199 => 
            array (
                'id' => 2700,
                'date' => '2021-12-16',
                'state' => 'Selangor',
                'rtk_ag' => 24372,
                'pcr' => 14356,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            200 => 
            array (
                'id' => 2701,
                'date' => '2021-12-16',
                'state' => 'Terengganu',
                'rtk_ag' => 2234,
                'pcr' => 557,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            201 => 
            array (
                'id' => 2702,
                'date' => '2021-12-16',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 6315,
                'pcr' => 5011,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            202 => 
            array (
                'id' => 2703,
                'date' => '2021-12-16',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 431,
                'pcr' => 80,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            203 => 
            array (
                'id' => 2704,
                'date' => '2021-12-16',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 394,
                'pcr' => 153,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            204 => 
            array (
                'id' => 2705,
                'date' => '2021-12-17',
                'state' => 'Johor',
                'rtk_ag' => 15775,
                'pcr' => 2897,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            205 => 
            array (
                'id' => 2706,
                'date' => '2021-12-17',
                'state' => 'Kedah',
                'rtk_ag' => 3448,
                'pcr' => 1010,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            206 => 
            array (
                'id' => 2707,
                'date' => '2021-12-17',
                'state' => 'Kelantan',
                'rtk_ag' => 1160,
                'pcr' => 1199,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            207 => 
            array (
                'id' => 2708,
                'date' => '2021-12-17',
                'state' => 'Melaka',
                'rtk_ag' => 2153,
                'pcr' => 738,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            208 => 
            array (
                'id' => 2709,
                'date' => '2021-12-17',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5650,
                'pcr' => 889,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            209 => 
            array (
                'id' => 2710,
                'date' => '2021-12-17',
                'state' => 'Pahang',
                'rtk_ag' => 2948,
                'pcr' => 674,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            210 => 
            array (
                'id' => 2711,
                'date' => '2021-12-17',
                'state' => 'Perak',
                'rtk_ag' => 5656,
                'pcr' => 1280,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            211 => 
            array (
                'id' => 2712,
                'date' => '2021-12-17',
                'state' => 'Perlis',
                'rtk_ag' => 256,
                'pcr' => 23,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            212 => 
            array (
                'id' => 2713,
                'date' => '2021-12-17',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 7780,
                'pcr' => 1789,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            213 => 
            array (
                'id' => 2714,
                'date' => '2021-12-17',
                'state' => 'Sabah',
                'rtk_ag' => 2514,
                'pcr' => 1059,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            214 => 
            array (
                'id' => 2715,
                'date' => '2021-12-17',
                'state' => 'Sarawak',
                'rtk_ag' => 2159,
                'pcr' => 974,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            215 => 
            array (
                'id' => 2716,
                'date' => '2021-12-17',
                'state' => 'Selangor',
                'rtk_ag' => 20799,
                'pcr' => 12696,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            216 => 
            array (
                'id' => 2717,
                'date' => '2021-12-17',
                'state' => 'Terengganu',
                'rtk_ag' => 1451,
                'pcr' => 389,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            217 => 
            array (
                'id' => 2718,
                'date' => '2021-12-17',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 5961,
                'pcr' => 5218,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            218 => 
            array (
                'id' => 2719,
                'date' => '2021-12-17',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 383,
                'pcr' => 48,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            219 => 
            array (
                'id' => 2720,
                'date' => '2021-12-17',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 320,
                'pcr' => 194,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            220 => 
            array (
                'id' => 2721,
                'date' => '2021-12-18',
                'state' => 'Johor',
                'rtk_ag' => 11442,
                'pcr' => 3109,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            221 => 
            array (
                'id' => 2722,
                'date' => '2021-12-18',
                'state' => 'Kedah',
                'rtk_ag' => 2926,
                'pcr' => 888,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            222 => 
            array (
                'id' => 2723,
                'date' => '2021-12-18',
                'state' => 'Kelantan',
                'rtk_ag' => 1594,
                'pcr' => 705,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            223 => 
            array (
                'id' => 2724,
                'date' => '2021-12-18',
                'state' => 'Melaka',
                'rtk_ag' => 1738,
                'pcr' => 876,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            224 => 
            array (
                'id' => 2725,
                'date' => '2021-12-18',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5513,
                'pcr' => 881,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            225 => 
            array (
                'id' => 2726,
                'date' => '2021-12-18',
                'state' => 'Pahang',
                'rtk_ag' => 2598,
                'pcr' => 662,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            226 => 
            array (
                'id' => 2727,
                'date' => '2021-12-18',
                'state' => 'Perak',
                'rtk_ag' => 5677,
                'pcr' => 856,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            227 => 
            array (
                'id' => 2728,
                'date' => '2021-12-18',
                'state' => 'Perlis',
                'rtk_ag' => 252,
                'pcr' => 21,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            228 => 
            array (
                'id' => 2729,
                'date' => '2021-12-18',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 5056,
                'pcr' => 1622,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            229 => 
            array (
                'id' => 2730,
                'date' => '2021-12-18',
                'state' => 'Sabah',
                'rtk_ag' => 2236,
                'pcr' => 1029,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            230 => 
            array (
                'id' => 2731,
                'date' => '2021-12-18',
                'state' => 'Sarawak',
                'rtk_ag' => 1520,
                'pcr' => 831,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            231 => 
            array (
                'id' => 2732,
                'date' => '2021-12-18',
                'state' => 'Selangor',
                'rtk_ag' => 13815,
                'pcr' => 14302,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            232 => 
            array (
                'id' => 2733,
                'date' => '2021-12-18',
                'state' => 'Terengganu',
                'rtk_ag' => 2875,
                'pcr' => 512,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            233 => 
            array (
                'id' => 2734,
                'date' => '2021-12-18',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4880,
                'pcr' => 4214,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            234 => 
            array (
                'id' => 2735,
                'date' => '2021-12-18',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 314,
                'pcr' => 169,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            235 => 
            array (
                'id' => 2736,
                'date' => '2021-12-18',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 167,
                'pcr' => 241,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            236 => 
            array (
                'id' => 2737,
                'date' => '2021-12-19',
                'state' => 'Johor',
                'rtk_ag' => 14888,
                'pcr' => 3120,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            237 => 
            array (
                'id' => 2738,
                'date' => '2021-12-19',
                'state' => 'Kedah',
                'rtk_ag' => 3375,
                'pcr' => 1006,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            238 => 
            array (
                'id' => 2739,
                'date' => '2021-12-19',
                'state' => 'Kelantan',
                'rtk_ag' => 4676,
                'pcr' => 986,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            239 => 
            array (
                'id' => 2740,
                'date' => '2021-12-19',
                'state' => 'Melaka',
                'rtk_ag' => 2173,
                'pcr' => 616,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            240 => 
            array (
                'id' => 2741,
                'date' => '2021-12-19',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 4434,
                'pcr' => 916,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            241 => 
            array (
                'id' => 2742,
                'date' => '2021-12-19',
                'state' => 'Pahang',
                'rtk_ag' => 1669,
                'pcr' => 318,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            242 => 
            array (
                'id' => 2743,
                'date' => '2021-12-19',
                'state' => 'Perak',
                'rtk_ag' => 3595,
                'pcr' => 883,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            243 => 
            array (
                'id' => 2744,
                'date' => '2021-12-19',
                'state' => 'Perlis',
                'rtk_ag' => 222,
                'pcr' => 35,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            244 => 
            array (
                'id' => 2745,
                'date' => '2021-12-19',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 5379,
                'pcr' => 1071,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            245 => 
            array (
                'id' => 2746,
                'date' => '2021-12-19',
                'state' => 'Sabah',
                'rtk_ag' => 2036,
                'pcr' => 878,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            246 => 
            array (
                'id' => 2747,
                'date' => '2021-12-19',
                'state' => 'Sarawak',
                'rtk_ag' => 2222,
                'pcr' => 795,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            247 => 
            array (
                'id' => 2748,
                'date' => '2021-12-19',
                'state' => 'Selangor',
                'rtk_ag' => 14125,
                'pcr' => 9694,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            248 => 
            array (
                'id' => 2749,
                'date' => '2021-12-19',
                'state' => 'Terengganu',
                'rtk_ag' => 4104,
                'pcr' => 771,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            249 => 
            array (
                'id' => 2750,
                'date' => '2021-12-19',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4385,
                'pcr' => 2961,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            250 => 
            array (
                'id' => 2751,
                'date' => '2021-12-19',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 304,
                'pcr' => 34,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            251 => 
            array (
                'id' => 2752,
                'date' => '2021-12-19',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 162,
                'pcr' => 101,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            252 => 
            array (
                'id' => 2753,
                'date' => '2021-12-20',
                'state' => 'Johor',
                'rtk_ag' => 21704,
                'pcr' => 3288,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            253 => 
            array (
                'id' => 2754,
                'date' => '2021-12-20',
                'state' => 'Kedah',
                'rtk_ag' => 5428,
                'pcr' => 676,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            254 => 
            array (
                'id' => 2755,
                'date' => '2021-12-20',
                'state' => 'Kelantan',
                'rtk_ag' => 5051,
                'pcr' => 1507,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            255 => 
            array (
                'id' => 2756,
                'date' => '2021-12-20',
                'state' => 'Melaka',
                'rtk_ag' => 5979,
                'pcr' => 570,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            256 => 
            array (
                'id' => 2757,
                'date' => '2021-12-20',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 5272,
                'pcr' => 665,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            257 => 
            array (
                'id' => 2758,
                'date' => '2021-12-20',
                'state' => 'Pahang',
                'rtk_ag' => 3750,
                'pcr' => 262,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            258 => 
            array (
                'id' => 2759,
                'date' => '2021-12-20',
                'state' => 'Perak',
                'rtk_ag' => 9560,
                'pcr' => 881,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            259 => 
            array (
                'id' => 2760,
                'date' => '2021-12-20',
                'state' => 'Perlis',
                'rtk_ag' => 334,
                'pcr' => 42,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            260 => 
            array (
                'id' => 2761,
                'date' => '2021-12-20',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 13144,
                'pcr' => 1450,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            261 => 
            array (
                'id' => 2762,
                'date' => '2021-12-20',
                'state' => 'Sabah',
                'rtk_ag' => 3455,
                'pcr' => 1298,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            262 => 
            array (
                'id' => 2763,
                'date' => '2021-12-20',
                'state' => 'Sarawak',
                'rtk_ag' => 2711,
                'pcr' => 1210,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            263 => 
            array (
                'id' => 2764,
                'date' => '2021-12-20',
                'state' => 'Selangor',
                'rtk_ag' => 26768,
                'pcr' => 13976,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            264 => 
            array (
                'id' => 2765,
                'date' => '2021-12-20',
                'state' => 'Terengganu',
                'rtk_ag' => 2635,
                'pcr' => 462,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            265 => 
            array (
                'id' => 2766,
                'date' => '2021-12-20',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 7509,
                'pcr' => 4441,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            266 => 
            array (
                'id' => 2767,
                'date' => '2021-12-20',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 525,
                'pcr' => 70,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            267 => 
            array (
                'id' => 2768,
                'date' => '2021-12-20',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 395,
                'pcr' => 214,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            268 => 
            array (
                'id' => 2769,
                'date' => '2021-12-21',
                'state' => 'Johor',
                'rtk_ag' => 20659,
                'pcr' => 4740,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            269 => 
            array (
                'id' => 2770,
                'date' => '2021-12-21',
                'state' => 'Kedah',
                'rtk_ag' => 5810,
                'pcr' => 903,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            270 => 
            array (
                'id' => 2771,
                'date' => '2021-12-21',
                'state' => 'Kelantan',
                'rtk_ag' => 5041,
                'pcr' => 1254,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            271 => 
            array (
                'id' => 2772,
                'date' => '2021-12-21',
                'state' => 'Melaka',
                'rtk_ag' => 4270,
                'pcr' => 1009,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            272 => 
            array (
                'id' => 2773,
                'date' => '2021-12-21',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 7962,
                'pcr' => 1351,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            273 => 
            array (
                'id' => 2774,
                'date' => '2021-12-21',
                'state' => 'Pahang',
                'rtk_ag' => 2947,
                'pcr' => 488,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            274 => 
            array (
                'id' => 2775,
                'date' => '2021-12-21',
                'state' => 'Perak',
                'rtk_ag' => 6391,
                'pcr' => 1385,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            275 => 
            array (
                'id' => 2776,
                'date' => '2021-12-21',
                'state' => 'Perlis',
                'rtk_ag' => 262,
                'pcr' => 70,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            276 => 
            array (
                'id' => 2777,
                'date' => '2021-12-21',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 8850,
                'pcr' => 1805,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            277 => 
            array (
                'id' => 2778,
                'date' => '2021-12-21',
                'state' => 'Sabah',
                'rtk_ag' => 2632,
                'pcr' => 1206,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            278 => 
            array (
                'id' => 2779,
                'date' => '2021-12-21',
                'state' => 'Sarawak',
                'rtk_ag' => 2446,
                'pcr' => 1112,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            279 => 
            array (
                'id' => 2780,
                'date' => '2021-12-21',
                'state' => 'Selangor',
                'rtk_ag' => 23305,
                'pcr' => 14661,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            280 => 
            array (
                'id' => 2781,
                'date' => '2021-12-21',
                'state' => 'Terengganu',
                'rtk_ag' => 2453,
                'pcr' => 868,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            281 => 
            array (
                'id' => 2782,
                'date' => '2021-12-21',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 6897,
                'pcr' => 6938,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            282 => 
            array (
                'id' => 2783,
                'date' => '2021-12-21',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 376,
                'pcr' => 87,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            283 => 
            array (
                'id' => 2784,
                'date' => '2021-12-21',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 382,
                'pcr' => 189,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            284 => 
            array (
                'id' => 2785,
                'date' => '2021-12-22',
                'state' => 'Johor',
                'rtk_ag' => 17686,
                'pcr' => 3462,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            285 => 
            array (
                'id' => 2786,
                'date' => '2021-12-22',
                'state' => 'Kedah',
                'rtk_ag' => 6001,
                'pcr' => 856,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            286 => 
            array (
                'id' => 2787,
                'date' => '2021-12-22',
                'state' => 'Kelantan',
                'rtk_ag' => 5119,
                'pcr' => 1409,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            287 => 
            array (
                'id' => 2788,
                'date' => '2021-12-22',
                'state' => 'Melaka',
                'rtk_ag' => 4560,
                'pcr' => 840,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            288 => 
            array (
                'id' => 2789,
                'date' => '2021-12-22',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 4288,
                'pcr' => 878,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            289 => 
            array (
                'id' => 2790,
                'date' => '2021-12-22',
                'state' => 'Pahang',
                'rtk_ag' => 3527,
                'pcr' => 460,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            290 => 
            array (
                'id' => 2791,
                'date' => '2021-12-22',
                'state' => 'Perak',
                'rtk_ag' => 6473,
                'pcr' => 1162,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            291 => 
            array (
                'id' => 2792,
                'date' => '2021-12-22',
                'state' => 'Perlis',
                'rtk_ag' => 232,
                'pcr' => 50,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            292 => 
            array (
                'id' => 2793,
                'date' => '2021-12-22',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 9123,
                'pcr' => 1735,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            293 => 
            array (
                'id' => 2794,
                'date' => '2021-12-22',
                'state' => 'Sabah',
                'rtk_ag' => 2498,
                'pcr' => 1154,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            294 => 
            array (
                'id' => 2795,
                'date' => '2021-12-22',
                'state' => 'Sarawak',
                'rtk_ag' => 2111,
                'pcr' => 902,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            295 => 
            array (
                'id' => 2796,
                'date' => '2021-12-22',
                'state' => 'Selangor',
                'rtk_ag' => 26333,
                'pcr' => 14772,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            296 => 
            array (
                'id' => 2797,
                'date' => '2021-12-22',
                'state' => 'Terengganu',
                'rtk_ag' => 2376,
                'pcr' => 674,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            297 => 
            array (
                'id' => 2798,
                'date' => '2021-12-22',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 6230,
                'pcr' => 5501,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            298 => 
            array (
                'id' => 2799,
                'date' => '2021-12-22',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 409,
                'pcr' => 77,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            299 => 
            array (
                'id' => 2800,
                'date' => '2021-12-22',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 331,
                'pcr' => 181,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            300 => 
            array (
                'id' => 2801,
                'date' => '2021-12-23',
                'state' => 'Johor',
                'rtk_ag' => 15994,
                'pcr' => 2810,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            301 => 
            array (
                'id' => 2802,
                'date' => '2021-12-23',
                'state' => 'Kedah',
                'rtk_ag' => 5029,
                'pcr' => 930,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            302 => 
            array (
                'id' => 2803,
                'date' => '2021-12-23',
                'state' => 'Kelantan',
                'rtk_ag' => 3289,
                'pcr' => 1351,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            303 => 
            array (
                'id' => 2804,
                'date' => '2021-12-23',
                'state' => 'Melaka',
                'rtk_ag' => 4040,
                'pcr' => 665,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            304 => 
            array (
                'id' => 2805,
                'date' => '2021-12-23',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 3035,
                'pcr' => 812,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            305 => 
            array (
                'id' => 2806,
                'date' => '2021-12-23',
                'state' => 'Pahang',
                'rtk_ag' => 3002,
                'pcr' => 430,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            306 => 
            array (
                'id' => 2807,
                'date' => '2021-12-23',
                'state' => 'Perak',
                'rtk_ag' => 7367,
                'pcr' => 1229,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            307 => 
            array (
                'id' => 2808,
                'date' => '2021-12-23',
                'state' => 'Perlis',
                'rtk_ag' => 246,
                'pcr' => 54,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            308 => 
            array (
                'id' => 2809,
                'date' => '2021-12-23',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 7031,
                'pcr' => 1433,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            309 => 
            array (
                'id' => 2810,
                'date' => '2021-12-23',
                'state' => 'Sabah',
                'rtk_ag' => 2461,
                'pcr' => 1329,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            310 => 
            array (
                'id' => 2811,
                'date' => '2021-12-23',
                'state' => 'Sarawak',
                'rtk_ag' => 1909,
                'pcr' => 823,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            311 => 
            array (
                'id' => 2812,
                'date' => '2021-12-23',
                'state' => 'Selangor',
                'rtk_ag' => 23322,
                'pcr' => 12649,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            312 => 
            array (
                'id' => 2813,
                'date' => '2021-12-23',
                'state' => 'Terengganu',
                'rtk_ag' => 2869,
                'pcr' => 543,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            313 => 
            array (
                'id' => 2814,
                'date' => '2021-12-23',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 7073,
                'pcr' => 3833,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            314 => 
            array (
                'id' => 2815,
                'date' => '2021-12-23',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 420,
                'pcr' => 57,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            315 => 
            array (
                'id' => 2816,
                'date' => '2021-12-23',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 353,
                'pcr' => 96,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            316 => 
            array (
                'id' => 2817,
                'date' => '2021-12-24',
                'state' => 'Johor',
                'rtk_ag' => 15428,
                'pcr' => 3006,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            317 => 
            array (
                'id' => 2818,
                'date' => '2021-12-24',
                'state' => 'Kedah',
                'rtk_ag' => 3792,
                'pcr' => 949,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            318 => 
            array (
                'id' => 2819,
                'date' => '2021-12-24',
                'state' => 'Kelantan',
                'rtk_ag' => 1257,
                'pcr' => 1356,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            319 => 
            array (
                'id' => 2820,
                'date' => '2021-12-24',
                'state' => 'Melaka',
                'rtk_ag' => 2677,
                'pcr' => 667,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            320 => 
            array (
                'id' => 2821,
                'date' => '2021-12-24',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 2764,
                'pcr' => 732,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            321 => 
            array (
                'id' => 2822,
                'date' => '2021-12-24',
                'state' => 'Pahang',
                'rtk_ag' => 2723,
                'pcr' => 351,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            322 => 
            array (
                'id' => 2823,
                'date' => '2021-12-24',
                'state' => 'Perak',
                'rtk_ag' => 5110,
                'pcr' => 1089,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            323 => 
            array (
                'id' => 2824,
                'date' => '2021-12-24',
                'state' => 'Perlis',
                'rtk_ag' => 209,
                'pcr' => 66,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            324 => 
            array (
                'id' => 2825,
                'date' => '2021-12-24',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 6408,
                'pcr' => 1728,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            325 => 
            array (
                'id' => 2826,
                'date' => '2021-12-24',
                'state' => 'Sabah',
                'rtk_ag' => 1692,
                'pcr' => 1120,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            326 => 
            array (
                'id' => 2827,
                'date' => '2021-12-24',
                'state' => 'Sarawak',
                'rtk_ag' => 1615,
                'pcr' => 915,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            327 => 
            array (
                'id' => 2828,
                'date' => '2021-12-24',
                'state' => 'Selangor',
                'rtk_ag' => 18674,
                'pcr' => 12499,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            328 => 
            array (
                'id' => 2829,
                'date' => '2021-12-24',
                'state' => 'Terengganu',
                'rtk_ag' => 1534,
                'pcr' => 268,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            329 => 
            array (
                'id' => 2830,
                'date' => '2021-12-24',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 6325,
                'pcr' => 4329,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            330 => 
            array (
                'id' => 2831,
                'date' => '2021-12-24',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 247,
                'pcr' => 54,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            331 => 
            array (
                'id' => 2832,
                'date' => '2021-12-24',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 292,
                'pcr' => 186,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            332 => 
            array (
                'id' => 2833,
                'date' => '2021-12-25',
                'state' => 'Johor',
                'rtk_ag' => 10952,
                'pcr' => 2352,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            333 => 
            array (
                'id' => 2834,
                'date' => '2021-12-25',
                'state' => 'Kedah',
                'rtk_ag' => 4394,
                'pcr' => 810,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            334 => 
            array (
                'id' => 2835,
                'date' => '2021-12-25',
                'state' => 'Kelantan',
                'rtk_ag' => 1246,
                'pcr' => 921,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            335 => 
            array (
                'id' => 2836,
                'date' => '2021-12-25',
                'state' => 'Melaka',
                'rtk_ag' => 1501,
                'pcr' => 897,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            336 => 
            array (
                'id' => 2837,
                'date' => '2021-12-25',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 1876,
                'pcr' => 985,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            337 => 
            array (
                'id' => 2838,
                'date' => '2021-12-25',
                'state' => 'Pahang',
                'rtk_ag' => 1761,
                'pcr' => 446,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            338 => 
            array (
                'id' => 2839,
                'date' => '2021-12-25',
                'state' => 'Perak',
                'rtk_ag' => 5727,
                'pcr' => 1137,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            339 => 
            array (
                'id' => 2840,
                'date' => '2021-12-25',
                'state' => 'Perlis',
                'rtk_ag' => 207,
                'pcr' => 34,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            340 => 
            array (
                'id' => 2841,
                'date' => '2021-12-25',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 4373,
                'pcr' => 1336,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            341 => 
            array (
                'id' => 2842,
                'date' => '2021-12-25',
                'state' => 'Sabah',
                'rtk_ag' => 1487,
                'pcr' => 735,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            342 => 
            array (
                'id' => 2843,
                'date' => '2021-12-25',
                'state' => 'Sarawak',
                'rtk_ag' => 884,
                'pcr' => 616,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            343 => 
            array (
                'id' => 2844,
                'date' => '2021-12-25',
                'state' => 'Selangor',
                'rtk_ag' => 15119,
                'pcr' => 12456,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            344 => 
            array (
                'id' => 2845,
                'date' => '2021-12-25',
                'state' => 'Terengganu',
                'rtk_ag' => 1841,
                'pcr' => 725,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            345 => 
            array (
                'id' => 2846,
                'date' => '2021-12-25',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4711,
                'pcr' => 3397,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            346 => 
            array (
                'id' => 2847,
                'date' => '2021-12-25',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 150,
                'pcr' => 31,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            347 => 
            array (
                'id' => 2848,
                'date' => '2021-12-25',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 166,
                'pcr' => 125,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            348 => 
            array (
                'id' => 2849,
                'date' => '2021-12-26',
                'state' => 'Johor',
                'rtk_ag' => 15949,
                'pcr' => 1862,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            349 => 
            array (
                'id' => 2850,
                'date' => '2021-12-26',
                'state' => 'Kedah',
                'rtk_ag' => 5887,
                'pcr' => 817,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            350 => 
            array (
                'id' => 2851,
                'date' => '2021-12-26',
                'state' => 'Kelantan',
                'rtk_ag' => 1460,
                'pcr' => 1056,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            351 => 
            array (
                'id' => 2852,
                'date' => '2021-12-26',
                'state' => 'Melaka',
                'rtk_ag' => 1865,
                'pcr' => 534,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            352 => 
            array (
                'id' => 2853,
                'date' => '2021-12-26',
                'state' => 'Negeri Sembilan',
                'rtk_ag' => 1859,
                'pcr' => 607,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            353 => 
            array (
                'id' => 2854,
                'date' => '2021-12-26',
                'state' => 'Pahang',
                'rtk_ag' => 1954,
                'pcr' => 173,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            354 => 
            array (
                'id' => 2855,
                'date' => '2021-12-26',
                'state' => 'Perak',
                'rtk_ag' => 4104,
                'pcr' => 557,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            355 => 
            array (
                'id' => 2856,
                'date' => '2021-12-26',
                'state' => 'Perlis',
                'rtk_ag' => 226,
                'pcr' => 19,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            356 => 
            array (
                'id' => 2857,
                'date' => '2021-12-26',
                'state' => 'Pulau Pinang',
                'rtk_ag' => 4999,
                'pcr' => 766,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            357 => 
            array (
                'id' => 2858,
                'date' => '2021-12-26',
                'state' => 'Sabah',
                'rtk_ag' => 2294,
                'pcr' => 651,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            358 => 
            array (
                'id' => 2859,
                'date' => '2021-12-26',
                'state' => 'Sarawak',
                'rtk_ag' => 1299,
                'pcr' => 622,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            359 => 
            array (
                'id' => 2860,
                'date' => '2021-12-26',
                'state' => 'Selangor',
                'rtk_ag' => 16585,
                'pcr' => 9292,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            360 => 
            array (
                'id' => 2861,
                'date' => '2021-12-26',
                'state' => 'Terengganu',
                'rtk_ag' => 2391,
                'pcr' => 498,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            361 => 
            array (
                'id' => 2862,
                'date' => '2021-12-26',
                'state' => 'W.P. Kuala Lumpur',
                'rtk_ag' => 4907,
                'pcr' => 2509,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            362 => 
            array (
                'id' => 2863,
                'date' => '2021-12-26',
                'state' => 'W.P. Labuan',
                'rtk_ag' => 233,
                'pcr' => 23,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
            363 => 
            array (
                'id' => 2864,
                'date' => '2021-12-26',
                'state' => 'W.P. Putrajaya',
                'rtk_ag' => 179,
                'pcr' => 124,
                'created_at' => '2021-12-29 22:03:58',
                'updated_at' => '2021-12-29 22:03:58',
            ),
        ));
        
        
    }
}