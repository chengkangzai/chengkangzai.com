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
                'date' => '2021-07-01',
                'pcr' => 3670,
                'rtk_ag' => 2749,
                'state' => 'Johor',
            ),
            1 => 
            array (
                'date' => '2021-07-01',
                'pcr' => 1297,
                'rtk_ag' => 2073,
                'state' => 'Kedah',
            ),
            2 => 
            array (
                'date' => '2021-07-01',
                'pcr' => 1966,
                'rtk_ag' => 1348,
                'state' => 'Kelantan',
            ),
            3 => 
            array (
                'date' => '2021-07-01',
                'pcr' => 2132,
                'rtk_ag' => 1049,
                'state' => 'Melaka',
            ),
            4 => 
            array (
                'date' => '2021-07-01',
                'pcr' => 3306,
                'rtk_ag' => 2151,
                'state' => 'Negeri Sembilan',
            ),
            5 => 
            array (
                'date' => '2021-07-01',
                'pcr' => 2605,
                'rtk_ag' => 2103,
                'state' => 'Pahang',
            ),
            6 => 
            array (
                'date' => '2021-07-01',
                'pcr' => 3715,
                'rtk_ag' => 1235,
                'state' => 'Perak',
            ),
            7 => 
            array (
                'date' => '2021-07-01',
                'pcr' => 16,
                'rtk_ag' => 105,
                'state' => 'Perlis',
            ),
            8 => 
            array (
                'date' => '2021-07-01',
                'pcr' => 1528,
                'rtk_ag' => 4632,
                'state' => 'Pulau Pinang',
            ),
            9 => 
            array (
                'date' => '2021-07-01',
                'pcr' => 3465,
                'rtk_ag' => 3212,
                'state' => 'Sabah',
            ),
            10 => 
            array (
                'date' => '2021-07-01',
                'pcr' => 5479,
                'rtk_ag' => 2043,
                'state' => 'Sarawak',
            ),
            11 => 
            array (
                'date' => '2021-07-01',
                'pcr' => 16460,
                'rtk_ag' => 13805,
                'state' => 'Selangor',
            ),
            12 => 
            array (
                'date' => '2021-07-01',
                'pcr' => 1397,
                'rtk_ag' => 970,
                'state' => 'Terengganu',
            ),
            13 => 
            array (
                'date' => '2021-07-01',
                'pcr' => 7182,
                'rtk_ag' => 3713,
                'state' => 'W.P. Kuala Lumpur',
            ),
            14 => 
            array (
                'date' => '2021-07-01',
                'pcr' => 268,
                'rtk_ag' => 1913,
                'state' => 'W.P. Labuan',
            ),
            15 => 
            array (
                'date' => '2021-07-01',
                'pcr' => 325,
                'rtk_ag' => 118,
                'state' => 'W.P. Putrajaya',
            ),
            16 => 
            array (
                'date' => '2021-07-02',
                'pcr' => 4428,
                'rtk_ag' => 2455,
                'state' => 'Johor',
            ),
            17 => 
            array (
                'date' => '2021-07-02',
                'pcr' => 1212,
                'rtk_ag' => 1571,
                'state' => 'Kedah',
            ),
            18 => 
            array (
                'date' => '2021-07-02',
                'pcr' => 2343,
                'rtk_ag' => 436,
                'state' => 'Kelantan',
            ),
            19 => 
            array (
                'date' => '2021-07-02',
                'pcr' => 2691,
                'rtk_ag' => 1249,
                'state' => 'Melaka',
            ),
            20 => 
            array (
                'date' => '2021-07-02',
                'pcr' => 5485,
                'rtk_ag' => 2151,
                'state' => 'Negeri Sembilan',
            ),
            21 => 
            array (
                'date' => '2021-07-02',
                'pcr' => 2861,
                'rtk_ag' => 1945,
                'state' => 'Pahang',
            ),
            22 => 
            array (
                'date' => '2021-07-02',
                'pcr' => 2028,
                'rtk_ag' => 1658,
                'state' => 'Perak',
            ),
            23 => 
            array (
                'date' => '2021-07-02',
                'pcr' => 48,
                'rtk_ag' => 60,
                'state' => 'Perlis',
            ),
            24 => 
            array (
                'date' => '2021-07-02',
                'pcr' => 1368,
                'rtk_ag' => 4286,
                'state' => 'Pulau Pinang',
            ),
            25 => 
            array (
                'date' => '2021-07-02',
                'pcr' => 3290,
                'rtk_ag' => 3273,
                'state' => 'Sabah',
            ),
            26 => 
            array (
                'date' => '2021-07-02',
                'pcr' => 6441,
                'rtk_ag' => 1689,
                'state' => 'Sarawak',
            ),
            27 => 
            array (
                'date' => '2021-07-02',
                'pcr' => 15277,
                'rtk_ag' => 14198,
                'state' => 'Selangor',
            ),
            28 => 
            array (
                'date' => '2021-07-02',
                'pcr' => 1307,
                'rtk_ag' => 506,
                'state' => 'Terengganu',
            ),
            29 => 
            array (
                'date' => '2021-07-02',
                'pcr' => 6160,
                'rtk_ag' => 3823,
                'state' => 'W.P. Kuala Lumpur',
            ),
            30 => 
            array (
                'date' => '2021-07-02',
                'pcr' => 377,
                'rtk_ag' => 1351,
                'state' => 'W.P. Labuan',
            ),
            31 => 
            array (
                'date' => '2021-07-02',
                'pcr' => 326,
                'rtk_ag' => 209,
                'state' => 'W.P. Putrajaya',
            ),
            32 => 
            array (
                'date' => '2021-07-03',
                'pcr' => 3484,
                'rtk_ag' => 1810,
                'state' => 'Johor',
            ),
            33 => 
            array (
                'date' => '2021-07-03',
                'pcr' => 1386,
                'rtk_ag' => 1550,
                'state' => 'Kedah',
            ),
            34 => 
            array (
                'date' => '2021-07-03',
                'pcr' => 825,
                'rtk_ag' => 654,
                'state' => 'Kelantan',
            ),
            35 => 
            array (
                'date' => '2021-07-03',
                'pcr' => 2603,
                'rtk_ag' => 718,
                'state' => 'Melaka',
            ),
            36 => 
            array (
                'date' => '2021-07-03',
                'pcr' => 3352,
                'rtk_ag' => 1538,
                'state' => 'Negeri Sembilan',
            ),
            37 => 
            array (
                'date' => '2021-07-03',
                'pcr' => 2418,
                'rtk_ag' => 1576,
                'state' => 'Pahang',
            ),
            38 => 
            array (
                'date' => '2021-07-03',
                'pcr' => 2244,
                'rtk_ag' => 897,
                'state' => 'Perak',
            ),
            39 => 
            array (
                'date' => '2021-07-03',
                'pcr' => 43,
                'rtk_ag' => 59,
                'state' => 'Perlis',
            ),
            40 => 
            array (
                'date' => '2021-07-03',
                'pcr' => 1718,
                'rtk_ag' => 4070,
                'state' => 'Pulau Pinang',
            ),
            41 => 
            array (
                'date' => '2021-07-03',
                'pcr' => 3623,
                'rtk_ag' => 2519,
                'state' => 'Sabah',
            ),
            42 => 
            array (
                'date' => '2021-07-03',
                'pcr' => 5259,
                'rtk_ag' => 1132,
                'state' => 'Sarawak',
            ),
            43 => 
            array (
                'date' => '2021-07-03',
                'pcr' => 17848,
                'rtk_ag' => 10427,
                'state' => 'Selangor',
            ),
            44 => 
            array (
                'date' => '2021-07-03',
                'pcr' => 643,
                'rtk_ag' => 703,
                'state' => 'Terengganu',
            ),
            45 => 
            array (
                'date' => '2021-07-03',
                'pcr' => 9017,
                'rtk_ag' => 2365,
                'state' => 'W.P. Kuala Lumpur',
            ),
            46 => 
            array (
                'date' => '2021-07-03',
                'pcr' => 234,
                'rtk_ag' => 745,
                'state' => 'W.P. Labuan',
            ),
            47 => 
            array (
                'date' => '2021-07-03',
                'pcr' => 326,
                'rtk_ag' => 54,
                'state' => 'W.P. Putrajaya',
            ),
            48 => 
            array (
                'date' => '2021-07-04',
                'pcr' => 2467,
                'rtk_ag' => 2847,
                'state' => 'Johor',
            ),
            49 => 
            array (
                'date' => '2021-07-04',
                'pcr' => 1120,
                'rtk_ag' => 2045,
                'state' => 'Kedah',
            ),
            50 => 
            array (
                'date' => '2021-07-04',
                'pcr' => 1477,
                'rtk_ag' => 1261,
                'state' => 'Kelantan',
            ),
            51 => 
            array (
                'date' => '2021-07-04',
                'pcr' => 2418,
                'rtk_ag' => 701,
                'state' => 'Melaka',
            ),
            52 => 
            array (
                'date' => '2021-07-04',
                'pcr' => 2835,
                'rtk_ag' => 960,
                'state' => 'Negeri Sembilan',
            ),
            53 => 
            array (
                'date' => '2021-07-04',
                'pcr' => 2127,
                'rtk_ag' => 830,
                'state' => 'Pahang',
            ),
            54 => 
            array (
                'date' => '2021-07-04',
                'pcr' => 1207,
                'rtk_ag' => 940,
                'state' => 'Perak',
            ),
            55 => 
            array (
                'date' => '2021-07-04',
                'pcr' => 14,
                'rtk_ag' => 28,
                'state' => 'Perlis',
            ),
            56 => 
            array (
                'date' => '2021-07-04',
                'pcr' => 957,
                'rtk_ag' => 1586,
                'state' => 'Pulau Pinang',
            ),
            57 => 
            array (
                'date' => '2021-07-04',
                'pcr' => 2881,
                'rtk_ag' => 1842,
                'state' => 'Sabah',
            ),
            58 => 
            array (
                'date' => '2021-07-04',
                'pcr' => 5487,
                'rtk_ag' => 1414,
                'state' => 'Sarawak',
            ),
            59 => 
            array (
                'date' => '2021-07-04',
                'pcr' => 13740,
                'rtk_ag' => 7472,
                'state' => 'Selangor',
            ),
            60 => 
            array (
                'date' => '2021-07-04',
                'pcr' => 592,
                'rtk_ag' => 1223,
                'state' => 'Terengganu',
            ),
            61 => 
            array (
                'date' => '2021-07-04',
                'pcr' => 4945,
                'rtk_ag' => 1718,
                'state' => 'W.P. Kuala Lumpur',
            ),
            62 => 
            array (
                'date' => '2021-07-04',
                'pcr' => 240,
                'rtk_ag' => 1137,
                'state' => 'W.P. Labuan',
            ),
            63 => 
            array (
                'date' => '2021-07-04',
                'pcr' => 150,
                'rtk_ag' => 60,
                'state' => 'W.P. Putrajaya',
            ),
            64 => 
            array (
                'date' => '2021-07-05',
                'pcr' => 3437,
                'rtk_ag' => 3428,
                'state' => 'Johor',
            ),
            65 => 
            array (
                'date' => '2021-07-05',
                'pcr' => 1405,
                'rtk_ag' => 2376,
                'state' => 'Kedah',
            ),
            66 => 
            array (
                'date' => '2021-07-05',
                'pcr' => 2398,
                'rtk_ag' => 1241,
                'state' => 'Kelantan',
            ),
            67 => 
            array (
                'date' => '2021-07-05',
                'pcr' => 1324,
                'rtk_ag' => 1018,
                'state' => 'Melaka',
            ),
            68 => 
            array (
                'date' => '2021-07-05',
                'pcr' => 2718,
                'rtk_ag' => 2609,
                'state' => 'Negeri Sembilan',
            ),
            69 => 
            array (
                'date' => '2021-07-05',
                'pcr' => 2277,
                'rtk_ag' => 1971,
                'state' => 'Pahang',
            ),
            70 => 
            array (
                'date' => '2021-07-05',
                'pcr' => 1075,
                'rtk_ag' => 1729,
                'state' => 'Perak',
            ),
            71 => 
            array (
                'date' => '2021-07-05',
                'pcr' => 26,
                'rtk_ag' => 155,
                'state' => 'Perlis',
            ),
            72 => 
            array (
                'date' => '2021-07-05',
                'pcr' => 925,
                'rtk_ag' => 4099,
                'state' => 'Pulau Pinang',
            ),
            73 => 
            array (
                'date' => '2021-07-05',
                'pcr' => 2813,
                'rtk_ag' => 2926,
                'state' => 'Sabah',
            ),
            74 => 
            array (
                'date' => '2021-07-05',
                'pcr' => 4138,
                'rtk_ag' => 2731,
                'state' => 'Sarawak',
            ),
            75 => 
            array (
                'date' => '2021-07-05',
                'pcr' => 14189,
                'rtk_ag' => 13111,
                'state' => 'Selangor',
            ),
            76 => 
            array (
                'date' => '2021-07-05',
                'pcr' => 566,
                'rtk_ag' => 989,
                'state' => 'Terengganu',
            ),
            77 => 
            array (
                'date' => '2021-07-05',
                'pcr' => 4207,
                'rtk_ag' => 4870,
                'state' => 'W.P. Kuala Lumpur',
            ),
            78 => 
            array (
                'date' => '2021-07-05',
                'pcr' => 174,
                'rtk_ag' => 1447,
                'state' => 'W.P. Labuan',
            ),
            79 => 
            array (
                'date' => '2021-07-05',
                'pcr' => 147,
                'rtk_ag' => 241,
                'state' => 'W.P. Putrajaya',
            ),
            80 => 
            array (
                'date' => '2021-07-06',
                'pcr' => 4235,
                'rtk_ag' => 2864,
                'state' => 'Johor',
            ),
            81 => 
            array (
                'date' => '2021-07-06',
                'pcr' => 1147,
                'rtk_ag' => 1755,
                'state' => 'Kedah',
            ),
            82 => 
            array (
                'date' => '2021-07-06',
                'pcr' => 2231,
                'rtk_ag' => 1261,
                'state' => 'Kelantan',
            ),
            83 => 
            array (
                'date' => '2021-07-06',
                'pcr' => 2462,
                'rtk_ag' => 1105,
                'state' => 'Melaka',
            ),
            84 => 
            array (
                'date' => '2021-07-06',
                'pcr' => 3911,
                'rtk_ag' => 2377,
                'state' => 'Negeri Sembilan',
            ),
            85 => 
            array (
                'date' => '2021-07-06',
                'pcr' => 3299,
                'rtk_ag' => 2106,
                'state' => 'Pahang',
            ),
            86 => 
            array (
                'date' => '2021-07-06',
                'pcr' => 2386,
                'rtk_ag' => 1650,
                'state' => 'Perak',
            ),
            87 => 
            array (
                'date' => '2021-07-06',
                'pcr' => 17,
                'rtk_ag' => 77,
                'state' => 'Perlis',
            ),
            88 => 
            array (
                'date' => '2021-07-06',
                'pcr' => 1480,
                'rtk_ag' => 4274,
                'state' => 'Pulau Pinang',
            ),
            89 => 
            array (
                'date' => '2021-07-06',
                'pcr' => 3062,
                'rtk_ag' => 3213,
                'state' => 'Sabah',
            ),
            90 => 
            array (
                'date' => '2021-07-06',
                'pcr' => 6216,
                'rtk_ag' => 1361,
                'state' => 'Sarawak',
            ),
            91 => 
            array (
                'date' => '2021-07-06',
                'pcr' => 13235,
                'rtk_ag' => 12120,
                'state' => 'Selangor',
            ),
            92 => 
            array (
                'date' => '2021-07-06',
                'pcr' => 1206,
                'rtk_ag' => 875,
                'state' => 'Terengganu',
            ),
            93 => 
            array (
                'date' => '2021-07-06',
                'pcr' => 7516,
                'rtk_ag' => 4179,
                'state' => 'W.P. Kuala Lumpur',
            ),
            94 => 
            array (
                'date' => '2021-07-06',
                'pcr' => 233,
                'rtk_ag' => 581,
                'state' => 'W.P. Labuan',
            ),
            95 => 
            array (
                'date' => '2021-07-06',
                'pcr' => 320,
                'rtk_ag' => 250,
                'state' => 'W.P. Putrajaya',
            ),
            96 => 
            array (
                'date' => '2021-07-07',
                'pcr' => 4197,
                'rtk_ag' => 2539,
                'state' => 'Johor',
            ),
            97 => 
            array (
                'date' => '2021-07-07',
                'pcr' => 2103,
                'rtk_ag' => 2288,
                'state' => 'Kedah',
            ),
            98 => 
            array (
                'date' => '2021-07-07',
                'pcr' => 1917,
                'rtk_ag' => 1134,
                'state' => 'Kelantan',
            ),
            99 => 
            array (
                'date' => '2021-07-07',
                'pcr' => 2416,
                'rtk_ag' => 1218,
                'state' => 'Melaka',
            ),
            100 => 
            array (
                'date' => '2021-07-07',
                'pcr' => 4001,
                'rtk_ag' => 2386,
                'state' => 'Negeri Sembilan',
            ),
            101 => 
            array (
                'date' => '2021-07-07',
                'pcr' => 2833,
                'rtk_ag' => 2137,
                'state' => 'Pahang',
            ),
            102 => 
            array (
                'date' => '2021-07-07',
                'pcr' => 1845,
                'rtk_ag' => 2527,
                'state' => 'Perak',
            ),
            103 => 
            array (
                'date' => '2021-07-07',
                'pcr' => 15,
                'rtk_ag' => 104,
                'state' => 'Perlis',
            ),
            104 => 
            array (
                'date' => '2021-07-07',
                'pcr' => 1459,
                'rtk_ag' => 4111,
                'state' => 'Pulau Pinang',
            ),
            105 => 
            array (
                'date' => '2021-07-07',
                'pcr' => 4085,
                'rtk_ag' => 2821,
                'state' => 'Sabah',
            ),
            106 => 
            array (
                'date' => '2021-07-07',
                'pcr' => 5548,
                'rtk_ag' => 1635,
                'state' => 'Sarawak',
            ),
            107 => 
            array (
                'date' => '2021-07-07',
                'pcr' => 18764,
                'rtk_ag' => 12536,
                'state' => 'Selangor',
            ),
            108 => 
            array (
                'date' => '2021-07-07',
                'pcr' => 923,
                'rtk_ag' => 1037,
                'state' => 'Terengganu',
            ),
            109 => 
            array (
                'date' => '2021-07-07',
                'pcr' => 9201,
                'rtk_ag' => 5188,
                'state' => 'W.P. Kuala Lumpur',
            ),
            110 => 
            array (
                'date' => '2021-07-07',
                'pcr' => 164,
                'rtk_ag' => 693,
                'state' => 'W.P. Labuan',
            ),
            111 => 
            array (
                'date' => '2021-07-07',
                'pcr' => 408,
                'rtk_ag' => 180,
                'state' => 'W.P. Putrajaya',
            ),
            112 => 
            array (
                'date' => '2021-07-08',
                'pcr' => 3953,
                'rtk_ag' => 2551,
                'state' => 'Johor',
            ),
            113 => 
            array (
                'date' => '2021-07-08',
                'pcr' => 2181,
                'rtk_ag' => 2803,
                'state' => 'Kedah',
            ),
            114 => 
            array (
                'date' => '2021-07-08',
                'pcr' => 2074,
                'rtk_ag' => 1176,
                'state' => 'Kelantan',
            ),
            115 => 
            array (
                'date' => '2021-07-08',
                'pcr' => 2465,
                'rtk_ag' => 1485,
                'state' => 'Melaka',
            ),
            116 => 
            array (
                'date' => '2021-07-08',
                'pcr' => 4642,
                'rtk_ag' => 2844,
                'state' => 'Negeri Sembilan',
            ),
            117 => 
            array (
                'date' => '2021-07-08',
                'pcr' => 2397,
                'rtk_ag' => 1478,
                'state' => 'Pahang',
            ),
            118 => 
            array (
                'date' => '2021-07-08',
                'pcr' => 1912,
                'rtk_ag' => 1714,
                'state' => 'Perak',
            ),
            119 => 
            array (
                'date' => '2021-07-08',
                'pcr' => 51,
                'rtk_ag' => 83,
                'state' => 'Perlis',
            ),
            120 => 
            array (
                'date' => '2021-07-08',
                'pcr' => 1786,
                'rtk_ag' => 3510,
                'state' => 'Pulau Pinang',
            ),
            121 => 
            array (
                'date' => '2021-07-08',
                'pcr' => 4614,
                'rtk_ag' => 3108,
                'state' => 'Sabah',
            ),
            122 => 
            array (
                'date' => '2021-07-08',
                'pcr' => 5574,
                'rtk_ag' => 1776,
                'state' => 'Sarawak',
            ),
            123 => 
            array (
                'date' => '2021-07-08',
                'pcr' => 18530,
                'rtk_ag' => 16973,
                'state' => 'Selangor',
            ),
            124 => 
            array (
                'date' => '2021-07-08',
                'pcr' => 1002,
                'rtk_ag' => 972,
                'state' => 'Terengganu',
            ),
            125 => 
            array (
                'date' => '2021-07-08',
                'pcr' => 8540,
                'rtk_ag' => 4962,
                'state' => 'W.P. Kuala Lumpur',
            ),
            126 => 
            array (
                'date' => '2021-07-08',
                'pcr' => 176,
                'rtk_ag' => 662,
                'state' => 'W.P. Labuan',
            ),
            127 => 
            array (
                'date' => '2021-07-08',
                'pcr' => 261,
                'rtk_ag' => 251,
                'state' => 'W.P. Putrajaya',
            ),
            128 => 
            array (
                'date' => '2021-07-09',
                'pcr' => 5359,
                'rtk_ag' => 2993,
                'state' => 'Johor',
            ),
            129 => 
            array (
                'date' => '2021-07-09',
                'pcr' => 1467,
                'rtk_ag' => 1931,
                'state' => 'Kedah',
            ),
            130 => 
            array (
                'date' => '2021-07-09',
                'pcr' => 1642,
                'rtk_ag' => 473,
                'state' => 'Kelantan',
            ),
            131 => 
            array (
                'date' => '2021-07-09',
                'pcr' => 4050,
                'rtk_ag' => 1639,
                'state' => 'Melaka',
            ),
            132 => 
            array (
                'date' => '2021-07-09',
                'pcr' => 5721,
                'rtk_ag' => 2046,
                'state' => 'Negeri Sembilan',
            ),
            133 => 
            array (
                'date' => '2021-07-09',
                'pcr' => 2862,
                'rtk_ag' => 2201,
                'state' => 'Pahang',
            ),
            134 => 
            array (
                'date' => '2021-07-09',
                'pcr' => 2350,
                'rtk_ag' => 1741,
                'state' => 'Perak',
            ),
            135 => 
            array (
                'date' => '2021-07-09',
                'pcr' => 28,
                'rtk_ag' => 104,
                'state' => 'Perlis',
            ),
            136 => 
            array (
                'date' => '2021-07-09',
                'pcr' => 1650,
                'rtk_ag' => 3714,
                'state' => 'Pulau Pinang',
            ),
            137 => 
            array (
                'date' => '2021-07-09',
                'pcr' => 3474,
                'rtk_ag' => 3012,
                'state' => 'Sabah',
            ),
            138 => 
            array (
                'date' => '2021-07-09',
                'pcr' => 5803,
                'rtk_ag' => 1182,
                'state' => 'Sarawak',
            ),
            139 => 
            array (
                'date' => '2021-07-09',
                'pcr' => 19914,
                'rtk_ag' => 21468,
                'state' => 'Selangor',
            ),
            140 => 
            array (
                'date' => '2021-07-09',
                'pcr' => 1189,
                'rtk_ag' => 486,
                'state' => 'Terengganu',
            ),
            141 => 
            array (
                'date' => '2021-07-09',
                'pcr' => 7903,
                'rtk_ag' => 5725,
                'state' => 'W.P. Kuala Lumpur',
            ),
            142 => 
            array (
                'date' => '2021-07-09',
                'pcr' => 314,
                'rtk_ag' => 1341,
                'state' => 'W.P. Labuan',
            ),
            143 => 
            array (
                'date' => '2021-07-09',
                'pcr' => 351,
                'rtk_ag' => 238,
                'state' => 'W.P. Putrajaya',
            ),
            144 => 
            array (
                'date' => '2021-07-10',
                'pcr' => 4402,
                'rtk_ag' => 2177,
                'state' => 'Johor',
            ),
            145 => 
            array (
                'date' => '2021-07-10',
                'pcr' => 1640,
                'rtk_ag' => 1786,
                'state' => 'Kedah',
            ),
            146 => 
            array (
                'date' => '2021-07-10',
                'pcr' => 1718,
                'rtk_ag' => 802,
                'state' => 'Kelantan',
            ),
            147 => 
            array (
                'date' => '2021-07-10',
                'pcr' => 2160,
                'rtk_ag' => 794,
                'state' => 'Melaka',
            ),
            148 => 
            array (
                'date' => '2021-07-10',
                'pcr' => 4284,
                'rtk_ag' => 1606,
                'state' => 'Negeri Sembilan',
            ),
            149 => 
            array (
                'date' => '2021-07-10',
                'pcr' => 2373,
                'rtk_ag' => 1215,
                'state' => 'Pahang',
            ),
            150 => 
            array (
                'date' => '2021-07-10',
                'pcr' => 2035,
                'rtk_ag' => 932,
                'state' => 'Perak',
            ),
            151 => 
            array (
                'date' => '2021-07-10',
                'pcr' => 27,
                'rtk_ag' => 35,
                'state' => 'Perlis',
            ),
            152 => 
            array (
                'date' => '2021-07-10',
                'pcr' => 1590,
                'rtk_ag' => 3240,
                'state' => 'Pulau Pinang',
            ),
            153 => 
            array (
                'date' => '2021-07-10',
                'pcr' => 3284,
                'rtk_ag' => 2488,
                'state' => 'Sabah',
            ),
            154 => 
            array (
                'date' => '2021-07-10',
                'pcr' => 5927,
                'rtk_ag' => 913,
                'state' => 'Sarawak',
            ),
            155 => 
            array (
                'date' => '2021-07-10',
                'pcr' => 17260,
                'rtk_ag' => 23470,
                'state' => 'Selangor',
            ),
            156 => 
            array (
                'date' => '2021-07-10',
                'pcr' => 1163,
                'rtk_ag' => 1080,
                'state' => 'Terengganu',
            ),
            157 => 
            array (
                'date' => '2021-07-10',
                'pcr' => 7635,
                'rtk_ag' => 5223,
                'state' => 'W.P. Kuala Lumpur',
            ),
            158 => 
            array (
                'date' => '2021-07-10',
                'pcr' => 137,
                'rtk_ag' => 1065,
                'state' => 'W.P. Labuan',
            ),
            159 => 
            array (
                'date' => '2021-07-10',
                'pcr' => 327,
                'rtk_ag' => 43,
                'state' => 'W.P. Putrajaya',
            ),
            160 => 
            array (
                'date' => '2021-07-11',
                'pcr' => 3398,
                'rtk_ag' => 3101,
                'state' => 'Johor',
            ),
            161 => 
            array (
                'date' => '2021-07-11',
                'pcr' => 1592,
                'rtk_ag' => 2107,
                'state' => 'Kedah',
            ),
            162 => 
            array (
                'date' => '2021-07-11',
                'pcr' => 1831,
                'rtk_ag' => 1288,
                'state' => 'Kelantan',
            ),
            163 => 
            array (
                'date' => '2021-07-11',
                'pcr' => 2067,
                'rtk_ag' => 787,
                'state' => 'Melaka',
            ),
            164 => 
            array (
                'date' => '2021-07-11',
                'pcr' => 5291,
                'rtk_ag' => 1441,
                'state' => 'Negeri Sembilan',
            ),
            165 => 
            array (
                'date' => '2021-07-11',
                'pcr' => 3704,
                'rtk_ag' => 943,
                'state' => 'Pahang',
            ),
            166 => 
            array (
                'date' => '2021-07-11',
                'pcr' => 1621,
                'rtk_ag' => 869,
                'state' => 'Perak',
            ),
            167 => 
            array (
                'date' => '2021-07-11',
                'pcr' => 13,
                'rtk_ag' => 60,
                'state' => 'Perlis',
            ),
            168 => 
            array (
                'date' => '2021-07-11',
                'pcr' => 1457,
                'rtk_ag' => 1859,
                'state' => 'Pulau Pinang',
            ),
            169 => 
            array (
                'date' => '2021-07-11',
                'pcr' => 3572,
                'rtk_ag' => 2639,
                'state' => 'Sabah',
            ),
            170 => 
            array (
                'date' => '2021-07-11',
                'pcr' => 4273,
                'rtk_ag' => 1023,
                'state' => 'Sarawak',
            ),
            171 => 
            array (
                'date' => '2021-07-11',
                'pcr' => 17406,
                'rtk_ag' => 18177,
                'state' => 'Selangor',
            ),
            172 => 
            array (
                'date' => '2021-07-11',
                'pcr' => 1660,
                'rtk_ag' => 1332,
                'state' => 'Terengganu',
            ),
            173 => 
            array (
                'date' => '2021-07-11',
                'pcr' => 6758,
                'rtk_ag' => 3463,
                'state' => 'W.P. Kuala Lumpur',
            ),
            174 => 
            array (
                'date' => '2021-07-11',
                'pcr' => 197,
                'rtk_ag' => 713,
                'state' => 'W.P. Labuan',
            ),
            175 => 
            array (
                'date' => '2021-07-11',
                'pcr' => 423,
                'rtk_ag' => 84,
                'state' => 'W.P. Putrajaya',
            ),
            176 => 
            array (
                'date' => '2021-07-12',
                'pcr' => 4710,
                'rtk_ag' => 4266,
                'state' => 'Johor',
            ),
            177 => 
            array (
                'date' => '2021-07-12',
                'pcr' => 1670,
                'rtk_ag' => 3034,
                'state' => 'Kedah',
            ),
            178 => 
            array (
                'date' => '2021-07-12',
                'pcr' => 2634,
                'rtk_ag' => 1269,
                'state' => 'Kelantan',
            ),
            179 => 
            array (
                'date' => '2021-07-12',
                'pcr' => 3474,
                'rtk_ag' => 1838,
                'state' => 'Melaka',
            ),
            180 => 
            array (
                'date' => '2021-07-12',
                'pcr' => 2763,
                'rtk_ag' => 2538,
                'state' => 'Negeri Sembilan',
            ),
            181 => 
            array (
                'date' => '2021-07-12',
                'pcr' => 4739,
                'rtk_ag' => 3559,
                'state' => 'Pahang',
            ),
            182 => 
            array (
                'date' => '2021-07-12',
                'pcr' => 1986,
                'rtk_ag' => 2437,
                'state' => 'Perak',
            ),
            183 => 
            array (
                'date' => '2021-07-12',
                'pcr' => 14,
                'rtk_ag' => 129,
                'state' => 'Perlis',
            ),
            184 => 
            array (
                'date' => '2021-07-12',
                'pcr' => 1496,
                'rtk_ag' => 4283,
                'state' => 'Pulau Pinang',
            ),
            185 => 
            array (
                'date' => '2021-07-12',
                'pcr' => 3467,
                'rtk_ag' => 4038,
                'state' => 'Sabah',
            ),
            186 => 
            array (
                'date' => '2021-07-12',
                'pcr' => 5779,
                'rtk_ag' => 1804,
                'state' => 'Sarawak',
            ),
            187 => 
            array (
                'date' => '2021-07-12',
                'pcr' => 14178,
                'rtk_ag' => 30965,
                'state' => 'Selangor',
            ),
            188 => 
            array (
                'date' => '2021-07-12',
                'pcr' => 1616,
                'rtk_ag' => 1294,
                'state' => 'Terengganu',
            ),
            189 => 
            array (
                'date' => '2021-07-12',
                'pcr' => 6292,
                'rtk_ag' => 798,
                'state' => 'W.P. Kuala Lumpur',
            ),
            190 => 
            array (
                'date' => '2021-07-12',
                'pcr' => 136,
                'rtk_ag' => 910,
                'state' => 'W.P. Labuan',
            ),
            191 => 
            array (
                'date' => '2021-07-12',
                'pcr' => 366,
                'rtk_ag' => 195,
                'state' => 'W.P. Putrajaya',
            ),
            192 => 
            array (
                'date' => '2021-07-13',
                'pcr' => 4425,
                'rtk_ag' => 5440,
                'state' => 'Johor',
            ),
            193 => 
            array (
                'date' => '2021-07-13',
                'pcr' => 2403,
                'rtk_ag' => 3237,
                'state' => 'Kedah',
            ),
            194 => 
            array (
                'date' => '2021-07-13',
                'pcr' => 2128,
                'rtk_ag' => 1222,
                'state' => 'Kelantan',
            ),
            195 => 
            array (
                'date' => '2021-07-13',
                'pcr' => 2752,
                'rtk_ag' => 1890,
                'state' => 'Melaka',
            ),
            196 => 
            array (
                'date' => '2021-07-13',
                'pcr' => 4669,
                'rtk_ag' => 2350,
                'state' => 'Negeri Sembilan',
            ),
            197 => 
            array (
                'date' => '2021-07-13',
                'pcr' => 3363,
                'rtk_ag' => 4025,
                'state' => 'Pahang',
            ),
            198 => 
            array (
                'date' => '2021-07-13',
                'pcr' => 2335,
                'rtk_ag' => 2096,
                'state' => 'Perak',
            ),
            199 => 
            array (
                'date' => '2021-07-13',
                'pcr' => 43,
                'rtk_ag' => 83,
                'state' => 'Perlis',
            ),
            200 => 
            array (
                'date' => '2021-07-13',
                'pcr' => 3209,
                'rtk_ag' => 3272,
                'state' => 'Pulau Pinang',
            ),
            201 => 
            array (
                'date' => '2021-07-13',
                'pcr' => 4216,
                'rtk_ag' => 3167,
                'state' => 'Sabah',
            ),
            202 => 
            array (
                'date' => '2021-07-13',
                'pcr' => 7430,
                'rtk_ag' => 1225,
                'state' => 'Sarawak',
            ),
            203 => 
            array (
                'date' => '2021-07-13',
                'pcr' => 17922,
                'rtk_ag' => 35422,
                'state' => 'Selangor',
            ),
            204 => 
            array (
                'date' => '2021-07-13',
                'pcr' => 1666,
                'rtk_ag' => 976,
                'state' => 'Terengganu',
            ),
            205 => 
            array (
                'date' => '2021-07-13',
                'pcr' => 9443,
                'rtk_ag' => 6444,
                'state' => 'W.P. Kuala Lumpur',
            ),
            206 => 
            array (
                'date' => '2021-07-13',
                'pcr' => 240,
                'rtk_ag' => 549,
                'state' => 'W.P. Labuan',
            ),
            207 => 
            array (
                'date' => '2021-07-13',
                'pcr' => 462,
                'rtk_ag' => 260,
                'state' => 'W.P. Putrajaya',
            ),
            208 => 
            array (
                'date' => '2021-07-14',
                'pcr' => 4914,
                'rtk_ag' => 6691,
                'state' => 'Johor',
            ),
            209 => 
            array (
                'date' => '2021-07-14',
                'pcr' => 2711,
                'rtk_ag' => 2615,
                'state' => 'Kedah',
            ),
            210 => 
            array (
                'date' => '2021-07-14',
                'pcr' => 2325,
                'rtk_ag' => 2078,
                'state' => 'Kelantan',
            ),
            211 => 
            array (
                'date' => '2021-07-14',
                'pcr' => 3380,
                'rtk_ag' => 1813,
                'state' => 'Melaka',
            ),
            212 => 
            array (
                'date' => '2021-07-14',
                'pcr' => 7137,
                'rtk_ag' => 3270,
                'state' => 'Negeri Sembilan',
            ),
            213 => 
            array (
                'date' => '2021-07-14',
                'pcr' => 2727,
                'rtk_ag' => 1788,
                'state' => 'Pahang',
            ),
            214 => 
            array (
                'date' => '2021-07-14',
                'pcr' => 2832,
                'rtk_ag' => 2053,
                'state' => 'Perak',
            ),
            215 => 
            array (
                'date' => '2021-07-14',
                'pcr' => 56,
                'rtk_ag' => 130,
                'state' => 'Perlis',
            ),
            216 => 
            array (
                'date' => '2021-07-14',
                'pcr' => 2350,
                'rtk_ag' => 4525,
                'state' => 'Pulau Pinang',
            ),
            217 => 
            array (
                'date' => '2021-07-14',
                'pcr' => 3842,
                'rtk_ag' => 3090,
                'state' => 'Sabah',
            ),
            218 => 
            array (
                'date' => '2021-07-14',
                'pcr' => 5822,
                'rtk_ag' => 1895,
                'state' => 'Sarawak',
            ),
            219 => 
            array (
                'date' => '2021-07-14',
                'pcr' => 20174,
                'rtk_ag' => 32711,
                'state' => 'Selangor',
            ),
            220 => 
            array (
                'date' => '2021-07-14',
                'pcr' => 1381,
                'rtk_ag' => 1199,
                'state' => 'Terengganu',
            ),
            221 => 
            array (
                'date' => '2021-07-14',
                'pcr' => 9616,
                'rtk_ag' => 6762,
                'state' => 'W.P. Kuala Lumpur',
            ),
            222 => 
            array (
                'date' => '2021-07-14',
                'pcr' => 145,
                'rtk_ag' => 650,
                'state' => 'W.P. Labuan',
            ),
            223 => 
            array (
                'date' => '2021-07-14',
                'pcr' => 657,
                'rtk_ag' => 305,
                'state' => 'W.P. Putrajaya',
            ),
            224 => 
            array (
                'date' => '2021-07-15',
                'pcr' => 4906,
                'rtk_ag' => 8222,
                'state' => 'Johor',
            ),
            225 => 
            array (
                'date' => '2021-07-15',
                'pcr' => 2369,
                'rtk_ag' => 2541,
                'state' => 'Kedah',
            ),
            226 => 
            array (
                'date' => '2021-07-15',
                'pcr' => 2305,
                'rtk_ag' => 2231,
                'state' => 'Kelantan',
            ),
            227 => 
            array (
                'date' => '2021-07-15',
                'pcr' => 5157,
                'rtk_ag' => 1861,
                'state' => 'Melaka',
            ),
            228 => 
            array (
                'date' => '2021-07-15',
                'pcr' => 5556,
                'rtk_ag' => 3078,
                'state' => 'Negeri Sembilan',
            ),
            229 => 
            array (
                'date' => '2021-07-15',
                'pcr' => 2908,
                'rtk_ag' => 2107,
                'state' => 'Pahang',
            ),
            230 => 
            array (
                'date' => '2021-07-15',
                'pcr' => 3549,
                'rtk_ag' => 2114,
                'state' => 'Perak',
            ),
            231 => 
            array (
                'date' => '2021-07-15',
                'pcr' => 45,
                'rtk_ag' => 138,
                'state' => 'Perlis',
            ),
            232 => 
            array (
                'date' => '2021-07-15',
                'pcr' => 2444,
                'rtk_ag' => 4269,
                'state' => 'Pulau Pinang',
            ),
            233 => 
            array (
                'date' => '2021-07-15',
                'pcr' => 4168,
                'rtk_ag' => 3767,
                'state' => 'Sabah',
            ),
            234 => 
            array (
                'date' => '2021-07-15',
                'pcr' => 6188,
                'rtk_ag' => 1237,
                'state' => 'Sarawak',
            ),
            235 => 
            array (
                'date' => '2021-07-15',
                'pcr' => 20791,
                'rtk_ag' => 35710,
                'state' => 'Selangor',
            ),
            236 => 
            array (
                'date' => '2021-07-15',
                'pcr' => 1879,
                'rtk_ag' => 1423,
                'state' => 'Terengganu',
            ),
            237 => 
            array (
                'date' => '2021-07-15',
                'pcr' => 11426,
                'rtk_ag' => 8109,
                'state' => 'W.P. Kuala Lumpur',
            ),
            238 => 
            array (
                'date' => '2021-07-15',
                'pcr' => 434,
                'rtk_ag' => 645,
                'state' => 'W.P. Labuan',
            ),
            239 => 
            array (
                'date' => '2021-07-15',
                'pcr' => 130,
                'rtk_ag' => 249,
                'state' => 'W.P. Putrajaya',
            ),
            240 => 
            array (
                'date' => '2021-07-16',
                'pcr' => 6175,
                'rtk_ag' => 5341,
                'state' => 'Johor',
            ),
            241 => 
            array (
                'date' => '2021-07-16',
                'pcr' => 2785,
                'rtk_ag' => 2223,
                'state' => 'Kedah',
            ),
            242 => 
            array (
                'date' => '2021-07-16',
                'pcr' => 2250,
                'rtk_ag' => 617,
                'state' => 'Kelantan',
            ),
            243 => 
            array (
                'date' => '2021-07-16',
                'pcr' => 5059,
                'rtk_ag' => 1914,
                'state' => 'Melaka',
            ),
            244 => 
            array (
                'date' => '2021-07-16',
                'pcr' => 5279,
                'rtk_ag' => 3764,
                'state' => 'Negeri Sembilan',
            ),
            245 => 
            array (
                'date' => '2021-07-16',
                'pcr' => 4097,
                'rtk_ag' => 3328,
                'state' => 'Pahang',
            ),
            246 => 
            array (
                'date' => '2021-07-16',
                'pcr' => 2976,
                'rtk_ag' => 2354,
                'state' => 'Perak',
            ),
            247 => 
            array (
                'date' => '2021-07-16',
                'pcr' => 29,
                'rtk_ag' => 91,
                'state' => 'Perlis',
            ),
            248 => 
            array (
                'date' => '2021-07-16',
                'pcr' => 2879,
                'rtk_ag' => 4399,
                'state' => 'Pulau Pinang',
            ),
            249 => 
            array (
                'date' => '2021-07-16',
                'pcr' => 4269,
                'rtk_ag' => 3073,
                'state' => 'Sabah',
            ),
            250 => 
            array (
                'date' => '2021-07-16',
                'pcr' => 7361,
                'rtk_ag' => 1524,
                'state' => 'Sarawak',
            ),
            251 => 
            array (
                'date' => '2021-07-16',
                'pcr' => 19974,
                'rtk_ag' => 29831,
                'state' => 'Selangor',
            ),
            252 => 
            array (
                'date' => '2021-07-16',
                'pcr' => 2215,
                'rtk_ag' => 879,
                'state' => 'Terengganu',
            ),
            253 => 
            array (
                'date' => '2021-07-16',
                'pcr' => 9141,
                'rtk_ag' => 8451,
                'state' => 'W.P. Kuala Lumpur',
            ),
            254 => 
            array (
                'date' => '2021-07-16',
                'pcr' => 92,
                'rtk_ag' => 645,
                'state' => 'W.P. Labuan',
            ),
            255 => 
            array (
                'date' => '2021-07-16',
                'pcr' => 509,
                'rtk_ag' => 225,
                'state' => 'W.P. Putrajaya',
            ),
            256 => 
            array (
                'date' => '2021-07-17',
                'pcr' => 5424,
                'rtk_ag' => 5267,
                'state' => 'Johor',
            ),
            257 => 
            array (
                'date' => '2021-07-17',
                'pcr' => 2158,
                'rtk_ag' => 2715,
                'state' => 'Kedah',
            ),
            258 => 
            array (
                'date' => '2021-07-17',
                'pcr' => 2841,
                'rtk_ag' => 896,
                'state' => 'Kelantan',
            ),
            259 => 
            array (
                'date' => '2021-07-17',
                'pcr' => 3091,
                'rtk_ag' => 1343,
                'state' => 'Melaka',
            ),
            260 => 
            array (
                'date' => '2021-07-17',
                'pcr' => 5058,
                'rtk_ag' => 2414,
                'state' => 'Negeri Sembilan',
            ),
            261 => 
            array (
                'date' => '2021-07-17',
                'pcr' => 3239,
                'rtk_ag' => 2209,
                'state' => 'Pahang',
            ),
            262 => 
            array (
                'date' => '2021-07-17',
                'pcr' => 2290,
                'rtk_ag' => 2362,
                'state' => 'Perak',
            ),
            263 => 
            array (
                'date' => '2021-07-17',
                'pcr' => 58,
                'rtk_ag' => 44,
                'state' => 'Perlis',
            ),
            264 => 
            array (
                'date' => '2021-07-17',
                'pcr' => 2985,
                'rtk_ag' => 4257,
                'state' => 'Pulau Pinang',
            ),
            265 => 
            array (
                'date' => '2021-07-17',
                'pcr' => 4916,
                'rtk_ag' => 3091,
                'state' => 'Sabah',
            ),
            266 => 
            array (
                'date' => '2021-07-17',
                'pcr' => 6023,
                'rtk_ag' => 2002,
                'state' => 'Sarawak',
            ),
            267 => 
            array (
                'date' => '2021-07-17',
                'pcr' => 22032,
                'rtk_ag' => 24264,
                'state' => 'Selangor',
            ),
            268 => 
            array (
                'date' => '2021-07-17',
                'pcr' => 1960,
                'rtk_ag' => 1414,
                'state' => 'Terengganu',
            ),
            269 => 
            array (
                'date' => '2021-07-17',
                'pcr' => 13078,
                'rtk_ag' => 6280,
                'state' => 'W.P. Kuala Lumpur',
            ),
            270 => 
            array (
                'date' => '2021-07-17',
                'pcr' => 145,
                'rtk_ag' => 940,
                'state' => 'W.P. Labuan',
            ),
            271 => 
            array (
                'date' => '2021-07-17',
                'pcr' => 391,
                'rtk_ag' => 104,
                'state' => 'W.P. Putrajaya',
            ),
            272 => 
            array (
                'date' => '2021-07-18',
                'pcr' => 4435,
                'rtk_ag' => 3591,
                'state' => 'Johor',
            ),
            273 => 
            array (
                'date' => '2021-07-18',
                'pcr' => 1669,
                'rtk_ag' => 3201,
                'state' => 'Kedah',
            ),
            274 => 
            array (
                'date' => '2021-07-18',
                'pcr' => 2531,
                'rtk_ag' => 1857,
                'state' => 'Kelantan',
            ),
            275 => 
            array (
                'date' => '2021-07-18',
                'pcr' => 3672,
                'rtk_ag' => 903,
                'state' => 'Melaka',
            ),
            276 => 
            array (
                'date' => '2021-07-18',
                'pcr' => 4637,
                'rtk_ag' => 1614,
                'state' => 'Negeri Sembilan',
            ),
            277 => 
            array (
                'date' => '2021-07-18',
                'pcr' => 2739,
                'rtk_ag' => 1981,
                'state' => 'Pahang',
            ),
            278 => 
            array (
                'date' => '2021-07-18',
                'pcr' => 2209,
                'rtk_ag' => 1250,
                'state' => 'Perak',
            ),
            279 => 
            array (
                'date' => '2021-07-18',
                'pcr' => 24,
                'rtk_ag' => 70,
                'state' => 'Perlis',
            ),
            280 => 
            array (
                'date' => '2021-07-18',
                'pcr' => 2762,
                'rtk_ag' => 3968,
                'state' => 'Pulau Pinang',
            ),
            281 => 
            array (
                'date' => '2021-07-18',
                'pcr' => 4294,
                'rtk_ag' => 2695,
                'state' => 'Sabah',
            ),
            282 => 
            array (
                'date' => '2021-07-18',
                'pcr' => 6229,
                'rtk_ag' => 1090,
                'state' => 'Sarawak',
            ),
            283 => 
            array (
                'date' => '2021-07-18',
                'pcr' => 14924,
                'rtk_ag' => 22031,
                'state' => 'Selangor',
            ),
            284 => 
            array (
                'date' => '2021-07-18',
                'pcr' => 998,
                'rtk_ag' => 1356,
                'state' => 'Terengganu',
            ),
            285 => 
            array (
                'date' => '2021-07-18',
                'pcr' => 7774,
                'rtk_ag' => 3985,
                'state' => 'W.P. Kuala Lumpur',
            ),
            286 => 
            array (
                'date' => '2021-07-18',
                'pcr' => 260,
                'rtk_ag' => 572,
                'state' => 'W.P. Labuan',
            ),
            287 => 
            array (
                'date' => '2021-07-18',
                'pcr' => 612,
                'rtk_ag' => 78,
                'state' => 'W.P. Putrajaya',
            ),
            288 => 
            array (
                'date' => '2021-07-19',
                'pcr' => 4324,
                'rtk_ag' => 4797,
                'state' => 'Johor',
            ),
            289 => 
            array (
                'date' => '2021-07-19',
                'pcr' => 3699,
                'rtk_ag' => 3283,
                'state' => 'Kedah',
            ),
            290 => 
            array (
                'date' => '2021-07-19',
                'pcr' => 3001,
                'rtk_ag' => 1504,
                'state' => 'Kelantan',
            ),
            291 => 
            array (
                'date' => '2021-07-19',
                'pcr' => 1902,
                'rtk_ag' => 1719,
                'state' => 'Melaka',
            ),
            292 => 
            array (
                'date' => '2021-07-19',
                'pcr' => 3832,
                'rtk_ag' => 2977,
                'state' => 'Negeri Sembilan',
            ),
            293 => 
            array (
                'date' => '2021-07-19',
                'pcr' => 3950,
                'rtk_ag' => 2717,
                'state' => 'Pahang',
            ),
            294 => 
            array (
                'date' => '2021-07-19',
                'pcr' => 2274,
                'rtk_ag' => 2803,
                'state' => 'Perak',
            ),
            295 => 
            array (
                'date' => '2021-07-19',
                'pcr' => 17,
                'rtk_ag' => 138,
                'state' => 'Perlis',
            ),
            296 => 
            array (
                'date' => '2021-07-19',
                'pcr' => 1140,
                'rtk_ag' => 5014,
                'state' => 'Pulau Pinang',
            ),
            297 => 
            array (
                'date' => '2021-07-19',
                'pcr' => 3014,
                'rtk_ag' => 3865,
                'state' => 'Sabah',
            ),
            298 => 
            array (
                'date' => '2021-07-19',
                'pcr' => 6816,
                'rtk_ag' => 1990,
                'state' => 'Sarawak',
            ),
            299 => 
            array (
                'date' => '2021-07-19',
                'pcr' => 15546,
                'rtk_ag' => 33042,
                'state' => 'Selangor',
            ),
            300 => 
            array (
                'date' => '2021-07-19',
                'pcr' => 3420,
                'rtk_ag' => 1000,
                'state' => 'Terengganu',
            ),
            301 => 
            array (
                'date' => '2021-07-19',
                'pcr' => 7007,
                'rtk_ag' => 7632,
                'state' => 'W.P. Kuala Lumpur',
            ),
            302 => 
            array (
                'date' => '2021-07-19',
                'pcr' => 92,
                'rtk_ag' => 620,
                'state' => 'W.P. Labuan',
            ),
            303 => 
            array (
                'date' => '2021-07-19',
                'pcr' => 642,
                'rtk_ag' => 168,
                'state' => 'W.P. Putrajaya',
            ),
            304 => 
            array (
                'date' => '2021-07-20',
                'pcr' => 4122,
                'rtk_ag' => 1675,
                'state' => 'Johor',
            ),
            305 => 
            array (
                'date' => '2021-07-20',
                'pcr' => 2136,
                'rtk_ag' => 1740,
                'state' => 'Kedah',
            ),
            306 => 
            array (
                'date' => '2021-07-20',
                'pcr' => 2096,
                'rtk_ag' => 472,
                'state' => 'Kelantan',
            ),
            307 => 
            array (
                'date' => '2021-07-20',
                'pcr' => 2448,
                'rtk_ag' => 839,
                'state' => 'Melaka',
            ),
            308 => 
            array (
                'date' => '2021-07-20',
                'pcr' => 3946,
                'rtk_ag' => 1848,
                'state' => 'Negeri Sembilan',
            ),
            309 => 
            array (
                'date' => '2021-07-20',
                'pcr' => 3671,
                'rtk_ag' => 1095,
                'state' => 'Pahang',
            ),
            310 => 
            array (
                'date' => '2021-07-20',
                'pcr' => 2060,
                'rtk_ag' => 1969,
                'state' => 'Perak',
            ),
            311 => 
            array (
                'date' => '2021-07-20',
                'pcr' => 32,
                'rtk_ag' => 11,
                'state' => 'Perlis',
            ),
            312 => 
            array (
                'date' => '2021-07-20',
                'pcr' => 2388,
                'rtk_ag' => 2096,
                'state' => 'Pulau Pinang',
            ),
            313 => 
            array (
                'date' => '2021-07-20',
                'pcr' => 3534,
                'rtk_ag' => 1921,
                'state' => 'Sabah',
            ),
            314 => 
            array (
                'date' => '2021-07-20',
                'pcr' => 5421,
                'rtk_ag' => 899,
                'state' => 'Sarawak',
            ),
            315 => 
            array (
                'date' => '2021-07-20',
                'pcr' => 17683,
                'rtk_ag' => 16949,
                'state' => 'Selangor',
            ),
            316 => 
            array (
                'date' => '2021-07-20',
                'pcr' => 2133,
                'rtk_ag' => 412,
                'state' => 'Terengganu',
            ),
            317 => 
            array (
                'date' => '2021-07-20',
                'pcr' => 8265,
                'rtk_ag' => 3732,
                'state' => 'W.P. Kuala Lumpur',
            ),
            318 => 
            array (
                'date' => '2021-07-20',
                'pcr' => 251,
                'rtk_ag' => 236,
                'state' => 'W.P. Labuan',
            ),
            319 => 
            array (
                'date' => '2021-07-20',
                'pcr' => 493,
                'rtk_ag' => 57,
                'state' => 'W.P. Putrajaya',
            ),
            320 => 
            array (
                'date' => '2021-07-21',
                'pcr' => 3975,
                'rtk_ag' => 5169,
                'state' => 'Johor',
            ),
            321 => 
            array (
                'date' => '2021-07-21',
                'pcr' => 2864,
                'rtk_ag' => 3436,
                'state' => 'Kedah',
            ),
            322 => 
            array (
                'date' => '2021-07-21',
                'pcr' => 1865,
                'rtk_ag' => 844,
                'state' => 'Kelantan',
            ),
            323 => 
            array (
                'date' => '2021-07-21',
                'pcr' => 2596,
                'rtk_ag' => 2047,
                'state' => 'Melaka',
            ),
            324 => 
            array (
                'date' => '2021-07-21',
                'pcr' => 3330,
                'rtk_ag' => 2954,
                'state' => 'Negeri Sembilan',
            ),
            325 => 
            array (
                'date' => '2021-07-21',
                'pcr' => 2820,
                'rtk_ag' => 2453,
                'state' => 'Pahang',
            ),
            326 => 
            array (
                'date' => '2021-07-21',
                'pcr' => 1918,
                'rtk_ag' => 2582,
                'state' => 'Perak',
            ),
            327 => 
            array (
                'date' => '2021-07-21',
                'pcr' => 46,
                'rtk_ag' => 32,
                'state' => 'Perlis',
            ),
            328 => 
            array (
                'date' => '2021-07-21',
                'pcr' => 1460,
                'rtk_ag' => 4840,
                'state' => 'Pulau Pinang',
            ),
            329 => 
            array (
                'date' => '2021-07-21',
                'pcr' => 3558,
                'rtk_ag' => 4382,
                'state' => 'Sabah',
            ),
            330 => 
            array (
                'date' => '2021-07-21',
                'pcr' => 8791,
                'rtk_ag' => 1437,
                'state' => 'Sarawak',
            ),
            331 => 
            array (
                'date' => '2021-07-21',
                'pcr' => 18812,
                'rtk_ag' => 33961,
                'state' => 'Selangor',
            ),
            332 => 
            array (
                'date' => '2021-07-21',
                'pcr' => 2315,
                'rtk_ag' => 808,
                'state' => 'Terengganu',
            ),
            333 => 
            array (
                'date' => '2021-07-21',
                'pcr' => 7396,
                'rtk_ag' => 9530,
                'state' => 'W.P. Kuala Lumpur',
            ),
            334 => 
            array (
                'date' => '2021-07-21',
                'pcr' => 56,
                'rtk_ag' => 467,
                'state' => 'W.P. Labuan',
            ),
            335 => 
            array (
                'date' => '2021-07-21',
                'pcr' => 248,
                'rtk_ag' => 301,
                'state' => 'W.P. Putrajaya',
            ),
            336 => 
            array (
                'date' => '2021-07-22',
                'pcr' => 7005,
                'rtk_ag' => 5229,
                'state' => 'Johor',
            ),
            337 => 
            array (
                'date' => '2021-07-22',
                'pcr' => 3583,
                'rtk_ag' => 3980,
                'state' => 'Kedah',
            ),
            338 => 
            array (
                'date' => '2021-07-22',
                'pcr' => 2818,
                'rtk_ag' => 1439,
                'state' => 'Kelantan',
            ),
            339 => 
            array (
                'date' => '2021-07-22',
                'pcr' => 1458,
                'rtk_ag' => 1872,
                'state' => 'Melaka',
            ),
            340 => 
            array (
                'date' => '2021-07-22',
                'pcr' => 5373,
                'rtk_ag' => 3790,
                'state' => 'Negeri Sembilan',
            ),
            341 => 
            array (
                'date' => '2021-07-22',
                'pcr' => 2616,
                'rtk_ag' => 3047,
                'state' => 'Pahang',
            ),
            342 => 
            array (
                'date' => '2021-07-22',
                'pcr' => 2827,
                'rtk_ag' => 2471,
                'state' => 'Perak',
            ),
            343 => 
            array (
                'date' => '2021-07-22',
                'pcr' => 17,
                'rtk_ag' => 202,
                'state' => 'Perlis',
            ),
            344 => 
            array (
                'date' => '2021-07-22',
                'pcr' => 3271,
                'rtk_ag' => 5551,
                'state' => 'Pulau Pinang',
            ),
            345 => 
            array (
                'date' => '2021-07-22',
                'pcr' => 3109,
                'rtk_ag' => 4963,
                'state' => 'Sabah',
            ),
            346 => 
            array (
                'date' => '2021-07-22',
                'pcr' => 6545,
                'rtk_ag' => 923,
                'state' => 'Sarawak',
            ),
            347 => 
            array (
                'date' => '2021-07-22',
                'pcr' => 21675,
                'rtk_ag' => 34071,
                'state' => 'Selangor',
            ),
            348 => 
            array (
                'date' => '2021-07-22',
                'pcr' => 3452,
                'rtk_ag' => 1576,
                'state' => 'Terengganu',
            ),
            349 => 
            array (
                'date' => '2021-07-22',
                'pcr' => 11811,
                'rtk_ag' => 8864,
                'state' => 'W.P. Kuala Lumpur',
            ),
            350 => 
            array (
                'date' => '2021-07-22',
                'pcr' => 97,
                'rtk_ag' => 594,
                'state' => 'W.P. Labuan',
            ),
            351 => 
            array (
                'date' => '2021-07-22',
                'pcr' => 385,
                'rtk_ag' => 375,
                'state' => 'W.P. Putrajaya',
            ),
            352 => 
            array (
                'date' => '2021-07-23',
                'pcr' => 6872,
                'rtk_ag' => 5212,
                'state' => 'Johor',
            ),
            353 => 
            array (
                'date' => '2021-07-23',
                'pcr' => 2973,
                'rtk_ag' => 3311,
                'state' => 'Kedah',
            ),
            354 => 
            array (
                'date' => '2021-07-23',
                'pcr' => 3119,
                'rtk_ag' => 768,
                'state' => 'Kelantan',
            ),
            355 => 
            array (
                'date' => '2021-07-23',
                'pcr' => 4219,
                'rtk_ag' => 2035,
                'state' => 'Melaka',
            ),
            356 => 
            array (
                'date' => '2021-07-23',
                'pcr' => 4295,
                'rtk_ag' => 4583,
                'state' => 'Negeri Sembilan',
            ),
            357 => 
            array (
                'date' => '2021-07-23',
                'pcr' => 3727,
                'rtk_ag' => 2313,
                'state' => 'Pahang',
            ),
            358 => 
            array (
                'date' => '2021-07-23',
                'pcr' => 3657,
                'rtk_ag' => 2409,
                'state' => 'Perak',
            ),
            359 => 
            array (
                'date' => '2021-07-23',
                'pcr' => 48,
                'rtk_ag' => 157,
                'state' => 'Perlis',
            ),
            360 => 
            array (
                'date' => '2021-07-23',
                'pcr' => 3079,
                'rtk_ag' => 5819,
                'state' => 'Pulau Pinang',
            ),
            361 => 
            array (
                'date' => '2021-07-23',
                'pcr' => 4935,
                'rtk_ag' => 4186,
                'state' => 'Sabah',
            ),
            362 => 
            array (
                'date' => '2021-07-23',
                'pcr' => 6541,
                'rtk_ag' => 1393,
                'state' => 'Sarawak',
            ),
            363 => 
            array (
                'date' => '2021-07-23',
                'pcr' => 23350,
                'rtk_ag' => 31344,
                'state' => 'Selangor',
            ),
            364 => 
            array (
                'date' => '2021-07-23',
                'pcr' => 2189,
                'rtk_ag' => 1070,
                'state' => 'Terengganu',
            ),
            365 => 
            array (
                'date' => '2021-07-23',
                'pcr' => 10922,
                'rtk_ag' => 10226,
                'state' => 'W.P. Kuala Lumpur',
            ),
            366 => 
            array (
                'date' => '2021-07-23',
                'pcr' => 139,
                'rtk_ag' => 248,
                'state' => 'W.P. Labuan',
            ),
            367 => 
            array (
                'date' => '2021-07-23',
                'pcr' => 628,
                'rtk_ag' => 676,
                'state' => 'W.P. Putrajaya',
            ),
            368 => 
            array (
                'date' => '2021-07-24',
                'pcr' => 5093,
                'rtk_ag' => 5914,
                'state' => 'Johor',
            ),
            369 => 
            array (
                'date' => '2021-07-24',
                'pcr' => 2026,
                'rtk_ag' => 3048,
                'state' => 'Kedah',
            ),
            370 => 
            array (
                'date' => '2021-07-24',
                'pcr' => 2668,
                'rtk_ag' => 1006,
                'state' => 'Kelantan',
            ),
            371 => 
            array (
                'date' => '2021-07-24',
                'pcr' => 2902,
                'rtk_ag' => 1508,
                'state' => 'Melaka',
            ),
            372 => 
            array (
                'date' => '2021-07-24',
                'pcr' => 4749,
                'rtk_ag' => 2711,
                'state' => 'Negeri Sembilan',
            ),
            373 => 
            array (
                'date' => '2021-07-24',
                'pcr' => 3041,
                'rtk_ag' => 2480,
                'state' => 'Pahang',
            ),
            374 => 
            array (
                'date' => '2021-07-24',
                'pcr' => 2151,
                'rtk_ag' => 2652,
                'state' => 'Perak',
            ),
            375 => 
            array (
                'date' => '2021-07-24',
                'pcr' => 55,
                'rtk_ag' => 50,
                'state' => 'Perlis',
            ),
            376 => 
            array (
                'date' => '2021-07-24',
                'pcr' => 2803,
                'rtk_ag' => 4780,
                'state' => 'Pulau Pinang',
            ),
            377 => 
            array (
                'date' => '2021-07-24',
                'pcr' => 4616,
                'rtk_ag' => 3471,
                'state' => 'Sabah',
            ),
            378 => 
            array (
                'date' => '2021-07-24',
                'pcr' => 5655,
                'rtk_ag' => 2248,
                'state' => 'Sarawak',
            ),
            379 => 
            array (
                'date' => '2021-07-24',
                'pcr' => 20688,
                'rtk_ag' => 27243,
                'state' => 'Selangor',
            ),
            380 => 
            array (
                'date' => '2021-07-24',
                'pcr' => 1841,
                'rtk_ag' => 1588,
                'state' => 'Terengganu',
            ),
            381 => 
            array (
                'date' => '2021-07-24',
                'pcr' => 12280,
                'rtk_ag' => 7051,
                'state' => 'W.P. Kuala Lumpur',
            ),
            382 => 
            array (
                'date' => '2021-07-24',
                'pcr' => 136,
                'rtk_ag' => 1056,
                'state' => 'W.P. Labuan',
            ),
            383 => 
            array (
                'date' => '2021-07-24',
                'pcr' => 367,
                'rtk_ag' => 117,
                'state' => 'W.P. Putrajaya',
            ),
            384 => 
            array (
                'date' => '2021-07-25',
                'pcr' => 4975,
                'rtk_ag' => 3772,
                'state' => 'Johor',
            ),
            385 => 
            array (
                'date' => '2021-07-25',
                'pcr' => 1872,
                'rtk_ag' => 3362,
                'state' => 'Kedah',
            ),
            386 => 
            array (
                'date' => '2021-07-25',
                'pcr' => 2839,
                'rtk_ag' => 1950,
                'state' => 'Kelantan',
            ),
            387 => 
            array (
                'date' => '2021-07-25',
                'pcr' => 4119,
                'rtk_ag' => 948,
                'state' => 'Melaka',
            ),
            388 => 
            array (
                'date' => '2021-07-25',
                'pcr' => 5202,
                'rtk_ag' => 1695,
                'state' => 'Negeri Sembilan',
            ),
            389 => 
            array (
                'date' => '2021-07-25',
                'pcr' => 3072,
                'rtk_ag' => 2081,
                'state' => 'Pahang',
            ),
            390 => 
            array (
                'date' => '2021-07-25',
                'pcr' => 2478,
                'rtk_ag' => 1313,
                'state' => 'Perak',
            ),
            391 => 
            array (
                'date' => '2021-07-25',
                'pcr' => 26,
                'rtk_ag' => 73,
                'state' => 'Perlis',
            ),
            392 => 
            array (
                'date' => '2021-07-25',
                'pcr' => 3099,
                'rtk_ag' => 4168,
                'state' => 'Pulau Pinang',
            ),
            393 => 
            array (
                'date' => '2021-07-25',
                'pcr' => 4817,
                'rtk_ag' => 2831,
                'state' => 'Sabah',
            ),
            394 => 
            array (
                'date' => '2021-07-25',
                'pcr' => 6988,
                'rtk_ag' => 1145,
                'state' => 'Sarawak',
            ),
            395 => 
            array (
                'date' => '2021-07-25',
                'pcr' => 16742,
                'rtk_ag' => 23141,
                'state' => 'Selangor',
            ),
            396 => 
            array (
                'date' => '2021-07-25',
                'pcr' => 1120,
                'rtk_ag' => 1424,
                'state' => 'Terengganu',
            ),
            397 => 
            array (
                'date' => '2021-07-25',
                'pcr' => 8720,
                'rtk_ag' => 4186,
                'state' => 'W.P. Kuala Lumpur',
            ),
            398 => 
            array (
                'date' => '2021-07-25',
                'pcr' => 291,
                'rtk_ag' => 601,
                'state' => 'W.P. Labuan',
            ),
            399 => 
            array (
                'date' => '2021-07-25',
                'pcr' => 687,
                'rtk_ag' => 82,
                'state' => 'W.P. Putrajaya',
            ),
            400 => 
            array (
                'date' => '2021-07-26',
                'pcr' => 4131,
                'rtk_ag' => 5973,
                'state' => 'Johor',
            ),
            401 => 
            array (
                'date' => '2021-07-26',
                'pcr' => 3534,
                'rtk_ag' => 4088,
                'state' => 'Kedah',
            ),
            402 => 
            array (
                'date' => '2021-07-26',
                'pcr' => 2867,
                'rtk_ag' => 1873,
                'state' => 'Kelantan',
            ),
            403 => 
            array (
                'date' => '2021-07-26',
                'pcr' => 1818,
                'rtk_ag' => 2140,
                'state' => 'Melaka',
            ),
            404 => 
            array (
                'date' => '2021-07-26',
                'pcr' => 3661,
                'rtk_ag' => 3707,
                'state' => 'Negeri Sembilan',
            ),
            405 => 
            array (
                'date' => '2021-07-26',
                'pcr' => 3774,
                'rtk_ag' => 3383,
                'state' => 'Pahang',
            ),
            406 => 
            array (
                'date' => '2021-07-26',
                'pcr' => 2173,
                'rtk_ag' => 3490,
                'state' => 'Perak',
            ),
            407 => 
            array (
                'date' => '2021-07-26',
                'pcr' => 16,
                'rtk_ag' => 172,
                'state' => 'Perlis',
            ),
            408 => 
            array (
                'date' => '2021-07-26',
                'pcr' => 1089,
                'rtk_ag' => 6243,
                'state' => 'Pulau Pinang',
            ),
            409 => 
            array (
                'date' => '2021-07-26',
                'pcr' => 2879,
                'rtk_ag' => 4813,
                'state' => 'Sabah',
            ),
            410 => 
            array (
                'date' => '2021-07-26',
                'pcr' => 6512,
                'rtk_ag' => 2478,
                'state' => 'Sarawak',
            ),
            411 => 
            array (
                'date' => '2021-07-26',
                'pcr' => 14854,
                'rtk_ag' => 41143,
                'state' => 'Selangor',
            ),
            412 => 
            array (
                'date' => '2021-07-26',
                'pcr' => 3268,
                'rtk_ag' => 1245,
                'state' => 'Terengganu',
            ),
            413 => 
            array (
                'date' => '2021-07-26',
                'pcr' => 6695,
                'rtk_ag' => 9503,
                'state' => 'W.P. Kuala Lumpur',
            ),
            414 => 
            array (
                'date' => '2021-07-26',
                'pcr' => 87,
                'rtk_ag' => 772,
                'state' => 'W.P. Labuan',
            ),
            415 => 
            array (
                'date' => '2021-07-26',
                'pcr' => 613,
                'rtk_ag' => 209,
                'state' => 'W.P. Putrajaya',
            ),
            416 => 
            array (
                'date' => '2021-07-27',
                'pcr' => 5864,
                'rtk_ag' => 5285,
                'state' => 'Johor',
            ),
            417 => 
            array (
                'date' => '2021-07-27',
                'pcr' => 3055,
                'rtk_ag' => 4419,
                'state' => 'Kedah',
            ),
            418 => 
            array (
                'date' => '2021-07-27',
                'pcr' => 4059,
                'rtk_ag' => 1544,
                'state' => 'Kelantan',
            ),
            419 => 
            array (
                'date' => '2021-07-27',
                'pcr' => 2033,
                'rtk_ag' => 2782,
                'state' => 'Melaka',
            ),
            420 => 
            array (
                'date' => '2021-07-27',
                'pcr' => 3643,
                'rtk_ag' => 3217,
                'state' => 'Negeri Sembilan',
            ),
            421 => 
            array (
                'date' => '2021-07-27',
                'pcr' => 4436,
                'rtk_ag' => 2689,
                'state' => 'Pahang',
            ),
            422 => 
            array (
                'date' => '2021-07-27',
                'pcr' => 2498,
                'rtk_ag' => 4204,
                'state' => 'Perak',
            ),
            423 => 
            array (
                'date' => '2021-07-27',
                'pcr' => 37,
                'rtk_ag' => 139,
                'state' => 'Perlis',
            ),
            424 => 
            array (
                'date' => '2021-07-27',
                'pcr' => 3163,
                'rtk_ag' => 6402,
                'state' => 'Pulau Pinang',
            ),
            425 => 
            array (
                'date' => '2021-07-27',
                'pcr' => 4281,
                'rtk_ag' => 4601,
                'state' => 'Sabah',
            ),
            426 => 
            array (
                'date' => '2021-07-27',
                'pcr' => 6476,
                'rtk_ag' => 1828,
                'state' => 'Sarawak',
            ),
            427 => 
            array (
                'date' => '2021-07-27',
                'pcr' => 17693,
                'rtk_ag' => 34615,
                'state' => 'Selangor',
            ),
            428 => 
            array (
                'date' => '2021-07-27',
                'pcr' => 4810,
                'rtk_ag' => 1637,
                'state' => 'Terengganu',
            ),
            429 => 
            array (
                'date' => '2021-07-27',
                'pcr' => 7731,
                'rtk_ag' => 9748,
                'state' => 'W.P. Kuala Lumpur',
            ),
            430 => 
            array (
                'date' => '2021-07-27',
                'pcr' => 243,
                'rtk_ag' => 1028,
                'state' => 'W.P. Labuan',
            ),
            431 => 
            array (
                'date' => '2021-07-27',
                'pcr' => 403,
                'rtk_ag' => 9,
                'state' => 'W.P. Putrajaya',
            ),
            432 => 
            array (
                'date' => '2021-07-28',
                'pcr' => 5839,
                'rtk_ag' => 5390,
                'state' => 'Johor',
            ),
            433 => 
            array (
                'date' => '2021-07-28',
                'pcr' => 2978,
                'rtk_ag' => 4552,
                'state' => 'Kedah',
            ),
            434 => 
            array (
                'date' => '2021-07-28',
                'pcr' => 5242,
                'rtk_ag' => 1670,
                'state' => 'Kelantan',
            ),
            435 => 
            array (
                'date' => '2021-07-28',
                'pcr' => 2783,
                'rtk_ag' => 2264,
                'state' => 'Melaka',
            ),
            436 => 
            array (
                'date' => '2021-07-28',
                'pcr' => 3002,
                'rtk_ag' => 3023,
                'state' => 'Negeri Sembilan',
            ),
            437 => 
            array (
                'date' => '2021-07-28',
                'pcr' => 4142,
                'rtk_ag' => 2563,
                'state' => 'Pahang',
            ),
            438 => 
            array (
                'date' => '2021-07-28',
                'pcr' => 3920,
                'rtk_ag' => 5282,
                'state' => 'Perak',
            ),
            439 => 
            array (
                'date' => '2021-07-28',
                'pcr' => 66,
                'rtk_ag' => 202,
                'state' => 'Perlis',
            ),
            440 => 
            array (
                'date' => '2021-07-28',
                'pcr' => 3816,
                'rtk_ag' => 5812,
                'state' => 'Pulau Pinang',
            ),
            441 => 
            array (
                'date' => '2021-07-28',
                'pcr' => 4570,
                'rtk_ag' => 4233,
                'state' => 'Sabah',
            ),
            442 => 
            array (
                'date' => '2021-07-28',
                'pcr' => 7412,
                'rtk_ag' => 1472,
                'state' => 'Sarawak',
            ),
            443 => 
            array (
                'date' => '2021-07-28',
                'pcr' => 16753,
                'rtk_ag' => 30417,
                'state' => 'Selangor',
            ),
            444 => 
            array (
                'date' => '2021-07-28',
                'pcr' => 4012,
                'rtk_ag' => 1892,
                'state' => 'Terengganu',
            ),
            445 => 
            array (
                'date' => '2021-07-28',
                'pcr' => 8220,
                'rtk_ag' => 8454,
                'state' => 'W.P. Kuala Lumpur',
            ),
            446 => 
            array (
                'date' => '2021-07-28',
                'pcr' => 129,
                'rtk_ag' => 364,
                'state' => 'W.P. Labuan',
            ),
            447 => 
            array (
                'date' => '2021-07-28',
                'pcr' => 616,
                'rtk_ag' => 208,
                'state' => 'W.P. Putrajaya',
            ),
            448 => 
            array (
                'date' => '2021-07-29',
                'pcr' => 7597,
                'rtk_ag' => 5591,
                'state' => 'Johor',
            ),
            449 => 
            array (
                'date' => '2021-07-29',
                'pcr' => 3915,
                'rtk_ag' => 3807,
                'state' => 'Kedah',
            ),
            450 => 
            array (
                'date' => '2021-07-29',
                'pcr' => 4098,
                'rtk_ag' => 1807,
                'state' => 'Kelantan',
            ),
            451 => 
            array (
                'date' => '2021-07-29',
                'pcr' => 3125,
                'rtk_ag' => 2328,
                'state' => 'Melaka',
            ),
            452 => 
            array (
                'date' => '2021-07-29',
                'pcr' => 3529,
                'rtk_ag' => 3143,
                'state' => 'Negeri Sembilan',
            ),
            453 => 
            array (
                'date' => '2021-07-29',
                'pcr' => 4012,
                'rtk_ag' => 3261,
                'state' => 'Pahang',
            ),
            454 => 
            array (
                'date' => '2021-07-29',
                'pcr' => 4892,
                'rtk_ag' => 4324,
                'state' => 'Perak',
            ),
            455 => 
            array (
                'date' => '2021-07-29',
                'pcr' => 72,
                'rtk_ag' => 168,
                'state' => 'Perlis',
            ),
            456 => 
            array (
                'date' => '2021-07-29',
                'pcr' => 3295,
                'rtk_ag' => 5994,
                'state' => 'Pulau Pinang',
            ),
            457 => 
            array (
                'date' => '2021-07-29',
                'pcr' => 7133,
                'rtk_ag' => 4973,
                'state' => 'Sabah',
            ),
            458 => 
            array (
                'date' => '2021-07-29',
                'pcr' => 6244,
                'rtk_ag' => 1424,
                'state' => 'Sarawak',
            ),
            459 => 
            array (
                'date' => '2021-07-29',
                'pcr' => 18131,
                'rtk_ag' => 30712,
                'state' => 'Selangor',
            ),
            460 => 
            array (
                'date' => '2021-07-29',
                'pcr' => 3554,
                'rtk_ag' => 2043,
                'state' => 'Terengganu',
            ),
            461 => 
            array (
                'date' => '2021-07-29',
                'pcr' => 10404,
                'rtk_ag' => 8730,
                'state' => 'W.P. Kuala Lumpur',
            ),
            462 => 
            array (
                'date' => '2021-07-29',
                'pcr' => 51,
                'rtk_ag' => 487,
                'state' => 'W.P. Labuan',
            ),
            463 => 
            array (
                'date' => '2021-07-29',
                'pcr' => 347,
                'rtk_ag' => 209,
                'state' => 'W.P. Putrajaya',
            ),
            464 => 
            array (
                'date' => '2021-07-30',
                'pcr' => 10180,
                'rtk_ag' => 3887,
                'state' => 'Johor',
            ),
            465 => 
            array (
                'date' => '2021-07-30',
                'pcr' => 3653,
                'rtk_ag' => 4110,
                'state' => 'Kedah',
            ),
            466 => 
            array (
                'date' => '2021-07-30',
                'pcr' => 4438,
                'rtk_ag' => 1815,
                'state' => 'Kelantan',
            ),
            467 => 
            array (
                'date' => '2021-07-30',
                'pcr' => 3157,
                'rtk_ag' => 1745,
                'state' => 'Melaka',
            ),
            468 => 
            array (
                'date' => '2021-07-30',
                'pcr' => 3214,
                'rtk_ag' => 2757,
                'state' => 'Negeri Sembilan',
            ),
            469 => 
            array (
                'date' => '2021-07-30',
                'pcr' => 4229,
                'rtk_ag' => 2178,
                'state' => 'Pahang',
            ),
            470 => 
            array (
                'date' => '2021-07-30',
                'pcr' => 3889,
                'rtk_ag' => 4202,
                'state' => 'Perak',
            ),
            471 => 
            array (
                'date' => '2021-07-30',
                'pcr' => 211,
                'rtk_ag' => 153,
                'state' => 'Perlis',
            ),
            472 => 
            array (
                'date' => '2021-07-30',
                'pcr' => 3601,
                'rtk_ag' => 8789,
                'state' => 'Pulau Pinang',
            ),
            473 => 
            array (
                'date' => '2021-07-30',
                'pcr' => 6873,
                'rtk_ag' => 4518,
                'state' => 'Sabah',
            ),
            474 => 
            array (
                'date' => '2021-07-30',
                'pcr' => 6036,
                'rtk_ag' => 1468,
                'state' => 'Sarawak',
            ),
            475 => 
            array (
                'date' => '2021-07-30',
                'pcr' => 17425,
                'rtk_ag' => 28906,
                'state' => 'Selangor',
            ),
            476 => 
            array (
                'date' => '2021-07-30',
                'pcr' => 6473,
                'rtk_ag' => 883,
                'state' => 'Terengganu',
            ),
            477 => 
            array (
                'date' => '2021-07-30',
                'pcr' => 7600,
                'rtk_ag' => 6654,
                'state' => 'W.P. Kuala Lumpur',
            ),
            478 => 
            array (
                'date' => '2021-07-30',
                'pcr' => 55,
                'rtk_ag' => 520,
                'state' => 'W.P. Labuan',
            ),
            479 => 
            array (
                'date' => '2021-07-30',
                'pcr' => 757,
                'rtk_ag' => 222,
                'state' => 'W.P. Putrajaya',
            ),
            480 => 
            array (
                'date' => '2021-07-31',
                'pcr' => 9017,
                'rtk_ag' => 5169,
                'state' => 'Johor',
            ),
            481 => 
            array (
                'date' => '2021-07-31',
                'pcr' => 3821,
                'rtk_ag' => 3300,
                'state' => 'Kedah',
            ),
            482 => 
            array (
                'date' => '2021-07-31',
                'pcr' => 2242,
                'rtk_ag' => 1572,
                'state' => 'Kelantan',
            ),
            483 => 
            array (
                'date' => '2021-07-31',
                'pcr' => 3289,
                'rtk_ag' => 1707,
                'state' => 'Melaka',
            ),
            484 => 
            array (
                'date' => '2021-07-31',
                'pcr' => 4313,
                'rtk_ag' => 2522,
                'state' => 'Negeri Sembilan',
            ),
            485 => 
            array (
                'date' => '2021-07-31',
                'pcr' => 2415,
                'rtk_ag' => 2037,
                'state' => 'Pahang',
            ),
            486 => 
            array (
                'date' => '2021-07-31',
                'pcr' => 4055,
                'rtk_ag' => 3339,
                'state' => 'Perak',
            ),
            487 => 
            array (
                'date' => '2021-07-31',
                'pcr' => 166,
                'rtk_ag' => 111,
                'state' => 'Perlis',
            ),
            488 => 
            array (
                'date' => '2021-07-31',
                'pcr' => 3771,
                'rtk_ag' => 6615,
                'state' => 'Pulau Pinang',
            ),
            489 => 
            array (
                'date' => '2021-07-31',
                'pcr' => 5884,
                'rtk_ag' => 4607,
                'state' => 'Sabah',
            ),
            490 => 
            array (
                'date' => '2021-07-31',
                'pcr' => 4774,
                'rtk_ag' => 1354,
                'state' => 'Sarawak',
            ),
            491 => 
            array (
                'date' => '2021-07-31',
                'pcr' => 16831,
                'rtk_ag' => 23177,
                'state' => 'Selangor',
            ),
            492 => 
            array (
                'date' => '2021-07-31',
                'pcr' => 3369,
                'rtk_ag' => 1814,
                'state' => 'Terengganu',
            ),
            493 => 
            array (
                'date' => '2021-07-31',
                'pcr' => 8439,
                'rtk_ag' => 5528,
                'state' => 'W.P. Kuala Lumpur',
            ),
            494 => 
            array (
                'date' => '2021-07-31',
                'pcr' => 108,
                'rtk_ag' => 313,
                'state' => 'W.P. Labuan',
            ),
            495 => 
            array (
                'date' => '2021-07-31',
                'pcr' => 403,
                'rtk_ag' => 151,
                'state' => 'W.P. Putrajaya',
            ),
            496 => 
            array (
                'date' => '2021-08-01',
                'pcr' => 6913,
                'rtk_ag' => 5557,
                'state' => 'Johor',
            ),
            497 => 
            array (
                'date' => '2021-08-01',
                'pcr' => 2175,
                'rtk_ag' => 4162,
                'state' => 'Kedah',
            ),
            498 => 
            array (
                'date' => '2021-08-01',
                'pcr' => 2657,
                'rtk_ag' => 2908,
                'state' => 'Kelantan',
            ),
            499 => 
            array (
                'date' => '2021-08-01',
                'pcr' => 2228,
                'rtk_ag' => 1323,
                'state' => 'Melaka',
            ),
        ));
        \DB::table('test_states')->insert(array (
            0 => 
            array (
                'date' => '2021-08-01',
                'pcr' => 2835,
                'rtk_ag' => 1741,
                'state' => 'Negeri Sembilan',
            ),
            1 => 
            array (
                'date' => '2021-08-01',
                'pcr' => 4227,
                'rtk_ag' => 1933,
                'state' => 'Pahang',
            ),
            2 => 
            array (
                'date' => '2021-08-01',
                'pcr' => 2545,
                'rtk_ag' => 2153,
                'state' => 'Perak',
            ),
            3 => 
            array (
                'date' => '2021-08-01',
                'pcr' => 153,
                'rtk_ag' => 85,
                'state' => 'Perlis',
            ),
            4 => 
            array (
                'date' => '2021-08-01',
                'pcr' => 2372,
                'rtk_ag' => 3293,
                'state' => 'Pulau Pinang',
            ),
            5 => 
            array (
                'date' => '2021-08-01',
                'pcr' => 5190,
                'rtk_ag' => 3792,
                'state' => 'Sabah',
            ),
            6 => 
            array (
                'date' => '2021-08-01',
                'pcr' => 4285,
                'rtk_ag' => 867,
                'state' => 'Sarawak',
            ),
            7 => 
            array (
                'date' => '2021-08-01',
                'pcr' => 11667,
                'rtk_ag' => 17569,
                'state' => 'Selangor',
            ),
            8 => 
            array (
                'date' => '2021-08-01',
                'pcr' => 2585,
                'rtk_ag' => 2177,
                'state' => 'Terengganu',
            ),
            9 => 
            array (
                'date' => '2021-08-01',
                'pcr' => 4377,
                'rtk_ag' => 4046,
                'state' => 'W.P. Kuala Lumpur',
            ),
            10 => 
            array (
                'date' => '2021-08-01',
                'pcr' => 141,
                'rtk_ag' => 419,
                'state' => 'W.P. Labuan',
            ),
            11 => 
            array (
                'date' => '2021-08-01',
                'pcr' => 382,
                'rtk_ag' => 83,
                'state' => 'W.P. Putrajaya',
            ),
            12 => 
            array (
                'date' => '2021-08-02',
                'pcr' => 5269,
                'rtk_ag' => 6665,
                'state' => 'Johor',
            ),
            13 => 
            array (
                'date' => '2021-08-02',
                'pcr' => 2704,
                'rtk_ag' => 5318,
                'state' => 'Kedah',
            ),
            14 => 
            array (
                'date' => '2021-08-02',
                'pcr' => 3209,
                'rtk_ag' => 2554,
                'state' => 'Kelantan',
            ),
            15 => 
            array (
                'date' => '2021-08-02',
                'pcr' => 2387,
                'rtk_ag' => 2326,
                'state' => 'Melaka',
            ),
            16 => 
            array (
                'date' => '2021-08-02',
                'pcr' => 1531,
                'rtk_ag' => 4334,
                'state' => 'Negeri Sembilan',
            ),
            17 => 
            array (
                'date' => '2021-08-02',
                'pcr' => 3033,
                'rtk_ag' => 2831,
                'state' => 'Pahang',
            ),
            18 => 
            array (
                'date' => '2021-08-02',
                'pcr' => 3333,
                'rtk_ag' => 4104,
                'state' => 'Perak',
            ),
            19 => 
            array (
                'date' => '2021-08-02',
                'pcr' => 43,
                'rtk_ag' => 244,
                'state' => 'Perlis',
            ),
            20 => 
            array (
                'date' => '2021-08-02',
                'pcr' => 2941,
                'rtk_ag' => 5425,
                'state' => 'Pulau Pinang',
            ),
            21 => 
            array (
                'date' => '2021-08-02',
                'pcr' => 5154,
                'rtk_ag' => 6929,
                'state' => 'Sabah',
            ),
            22 => 
            array (
                'date' => '2021-08-02',
                'pcr' => 6584,
                'rtk_ag' => 2816,
                'state' => 'Sarawak',
            ),
            23 => 
            array (
                'date' => '2021-08-02',
                'pcr' => 11352,
                'rtk_ag' => 33372,
                'state' => 'Selangor',
            ),
            24 => 
            array (
                'date' => '2021-08-02',
                'pcr' => 3656,
                'rtk_ag' => 2339,
                'state' => 'Terengganu',
            ),
            25 => 
            array (
                'date' => '2021-08-02',
                'pcr' => 5665,
                'rtk_ag' => 8903,
                'state' => 'W.P. Kuala Lumpur',
            ),
            26 => 
            array (
                'date' => '2021-08-02',
                'pcr' => 88,
                'rtk_ag' => 562,
                'state' => 'W.P. Labuan',
            ),
            27 => 
            array (
                'date' => '2021-08-02',
                'pcr' => 313,
                'rtk_ag' => 292,
                'state' => 'W.P. Putrajaya',
            ),
            28 => 
            array (
                'date' => '2021-08-03',
                'pcr' => 9142,
                'rtk_ag' => 7078,
                'state' => 'Johor',
            ),
            29 => 
            array (
                'date' => '2021-08-03',
                'pcr' => 3776,
                'rtk_ag' => 4516,
                'state' => 'Kedah',
            ),
            30 => 
            array (
                'date' => '2021-08-03',
                'pcr' => 4202,
                'rtk_ag' => 3350,
                'state' => 'Kelantan',
            ),
            31 => 
            array (
                'date' => '2021-08-03',
                'pcr' => 3171,
                'rtk_ag' => 2266,
                'state' => 'Melaka',
            ),
            32 => 
            array (
                'date' => '2021-08-03',
                'pcr' => 3208,
                'rtk_ag' => 3182,
                'state' => 'Negeri Sembilan',
            ),
            33 => 
            array (
                'date' => '2021-08-03',
                'pcr' => 3135,
                'rtk_ag' => 2220,
                'state' => 'Pahang',
            ),
            34 => 
            array (
                'date' => '2021-08-03',
                'pcr' => 4109,
                'rtk_ag' => 4123,
                'state' => 'Perak',
            ),
            35 => 
            array (
                'date' => '2021-08-03',
                'pcr' => 141,
                'rtk_ag' => 135,
                'state' => 'Perlis',
            ),
            36 => 
            array (
                'date' => '2021-08-03',
                'pcr' => 3920,
                'rtk_ag' => 7466,
                'state' => 'Pulau Pinang',
            ),
            37 => 
            array (
                'date' => '2021-08-03',
                'pcr' => 6934,
                'rtk_ag' => 6367,
                'state' => 'Sabah',
            ),
            38 => 
            array (
                'date' => '2021-08-03',
                'pcr' => 8682,
                'rtk_ag' => 1540,
                'state' => 'Sarawak',
            ),
            39 => 
            array (
                'date' => '2021-08-03',
                'pcr' => 21840,
                'rtk_ag' => 32708,
                'state' => 'Selangor',
            ),
            40 => 
            array (
                'date' => '2021-08-03',
                'pcr' => 3186,
                'rtk_ag' => 1707,
                'state' => 'Terengganu',
            ),
            41 => 
            array (
                'date' => '2021-08-03',
                'pcr' => 8616,
                'rtk_ag' => 8402,
                'state' => 'W.P. Kuala Lumpur',
            ),
            42 => 
            array (
                'date' => '2021-08-03',
                'pcr' => 306,
                'rtk_ag' => 344,
                'state' => 'W.P. Labuan',
            ),
            43 => 
            array (
                'date' => '2021-08-03',
                'pcr' => 547,
                'rtk_ag' => 161,
                'state' => 'W.P. Putrajaya',
            ),
            44 => 
            array (
                'date' => '2021-08-04',
                'pcr' => 9027,
                'rtk_ag' => 6979,
                'state' => 'Johor',
            ),
            45 => 
            array (
                'date' => '2021-08-04',
                'pcr' => 3558,
                'rtk_ag' => 4255,
                'state' => 'Kedah',
            ),
            46 => 
            array (
                'date' => '2021-08-04',
                'pcr' => 2870,
                'rtk_ag' => 3347,
                'state' => 'Kelantan',
            ),
            47 => 
            array (
                'date' => '2021-08-04',
                'pcr' => 2754,
                'rtk_ag' => 1977,
                'state' => 'Melaka',
            ),
            48 => 
            array (
                'date' => '2021-08-04',
                'pcr' => 2661,
                'rtk_ag' => 2680,
                'state' => 'Negeri Sembilan',
            ),
            49 => 
            array (
                'date' => '2021-08-04',
                'pcr' => 4843,
                'rtk_ag' => 2362,
                'state' => 'Pahang',
            ),
            50 => 
            array (
                'date' => '2021-08-04',
                'pcr' => 4011,
                'rtk_ag' => 4272,
                'state' => 'Perak',
            ),
            51 => 
            array (
                'date' => '2021-08-04',
                'pcr' => 89,
                'rtk_ag' => 142,
                'state' => 'Perlis',
            ),
            52 => 
            array (
                'date' => '2021-08-04',
                'pcr' => 3599,
                'rtk_ag' => 7962,
                'state' => 'Pulau Pinang',
            ),
            53 => 
            array (
                'date' => '2021-08-04',
                'pcr' => 5116,
                'rtk_ag' => 6610,
                'state' => 'Sabah',
            ),
            54 => 
            array (
                'date' => '2021-08-04',
                'pcr' => 7783,
                'rtk_ag' => 2042,
                'state' => 'Sarawak',
            ),
            55 => 
            array (
                'date' => '2021-08-04',
                'pcr' => 16355,
                'rtk_ag' => 30422,
                'state' => 'Selangor',
            ),
            56 => 
            array (
                'date' => '2021-08-04',
                'pcr' => 3525,
                'rtk_ag' => 1796,
                'state' => 'Terengganu',
            ),
            57 => 
            array (
                'date' => '2021-08-04',
                'pcr' => 7650,
                'rtk_ag' => 7883,
                'state' => 'W.P. Kuala Lumpur',
            ),
            58 => 
            array (
                'date' => '2021-08-04',
                'pcr' => 225,
                'rtk_ag' => 348,
                'state' => 'W.P. Labuan',
            ),
            59 => 
            array (
                'date' => '2021-08-04',
                'pcr' => 471,
                'rtk_ag' => 271,
                'state' => 'W.P. Putrajaya',
            ),
            60 => 
            array (
                'date' => '2021-08-05',
                'pcr' => 8962,
                'rtk_ag' => 6941,
                'state' => 'Johor',
            ),
            61 => 
            array (
                'date' => '2021-08-05',
                'pcr' => 3350,
                'rtk_ag' => 4902,
                'state' => 'Kedah',
            ),
            62 => 
            array (
                'date' => '2021-08-05',
                'pcr' => 3698,
                'rtk_ag' => 3789,
                'state' => 'Kelantan',
            ),
            63 => 
            array (
                'date' => '2021-08-05',
                'pcr' => 2323,
                'rtk_ag' => 2465,
                'state' => 'Melaka',
            ),
            64 => 
            array (
                'date' => '2021-08-05',
                'pcr' => 2354,
                'rtk_ag' => 2461,
                'state' => 'Negeri Sembilan',
            ),
            65 => 
            array (
                'date' => '2021-08-05',
                'pcr' => 4731,
                'rtk_ag' => 2247,
                'state' => 'Pahang',
            ),
            66 => 
            array (
                'date' => '2021-08-05',
                'pcr' => 2943,
                'rtk_ag' => 3403,
                'state' => 'Perak',
            ),
            67 => 
            array (
                'date' => '2021-08-05',
                'pcr' => 38,
                'rtk_ag' => 232,
                'state' => 'Perlis',
            ),
            68 => 
            array (
                'date' => '2021-08-05',
                'pcr' => 3744,
                'rtk_ag' => 7843,
                'state' => 'Pulau Pinang',
            ),
            69 => 
            array (
                'date' => '2021-08-05',
                'pcr' => 4894,
                'rtk_ag' => 6536,
                'state' => 'Sabah',
            ),
            70 => 
            array (
                'date' => '2021-08-05',
                'pcr' => 6609,
                'rtk_ag' => 2568,
                'state' => 'Sarawak',
            ),
            71 => 
            array (
                'date' => '2021-08-05',
                'pcr' => 15902,
                'rtk_ag' => 28657,
                'state' => 'Selangor',
            ),
            72 => 
            array (
                'date' => '2021-08-05',
                'pcr' => 3531,
                'rtk_ag' => 2113,
                'state' => 'Terengganu',
            ),
            73 => 
            array (
                'date' => '2021-08-05',
                'pcr' => 7906,
                'rtk_ag' => 8451,
                'state' => 'W.P. Kuala Lumpur',
            ),
            74 => 
            array (
                'date' => '2021-08-05',
                'pcr' => 174,
                'rtk_ag' => 256,
                'state' => 'W.P. Labuan',
            ),
            75 => 
            array (
                'date' => '2021-08-05',
                'pcr' => 167,
                'rtk_ag' => 196,
                'state' => 'W.P. Putrajaya',
            ),
            76 => 
            array (
                'date' => '2021-08-06',
                'pcr' => 10156,
                'rtk_ag' => 8219,
                'state' => 'Johor',
            ),
            77 => 
            array (
                'date' => '2021-08-06',
                'pcr' => 3484,
                'rtk_ag' => 4336,
                'state' => 'Kedah',
            ),
            78 => 
            array (
                'date' => '2021-08-06',
                'pcr' => 3281,
                'rtk_ag' => 2078,
                'state' => 'Kelantan',
            ),
            79 => 
            array (
                'date' => '2021-08-06',
                'pcr' => 2259,
                'rtk_ag' => 2793,
                'state' => 'Melaka',
            ),
            80 => 
            array (
                'date' => '2021-08-06',
                'pcr' => 3430,
                'rtk_ag' => 2789,
                'state' => 'Negeri Sembilan',
            ),
            81 => 
            array (
                'date' => '2021-08-06',
                'pcr' => 4609,
                'rtk_ag' => 2484,
                'state' => 'Pahang',
            ),
            82 => 
            array (
                'date' => '2021-08-06',
                'pcr' => 2915,
                'rtk_ag' => 3621,
                'state' => 'Perak',
            ),
            83 => 
            array (
                'date' => '2021-08-06',
                'pcr' => 90,
                'rtk_ag' => 216,
                'state' => 'Perlis',
            ),
            84 => 
            array (
                'date' => '2021-08-06',
                'pcr' => 3520,
                'rtk_ag' => 6874,
                'state' => 'Pulau Pinang',
            ),
            85 => 
            array (
                'date' => '2021-08-06',
                'pcr' => 5683,
                'rtk_ag' => 5732,
                'state' => 'Sabah',
            ),
            86 => 
            array (
                'date' => '2021-08-06',
                'pcr' => 8358,
                'rtk_ag' => 2616,
                'state' => 'Sarawak',
            ),
            87 => 
            array (
                'date' => '2021-08-06',
                'pcr' => 16919,
                'rtk_ag' => 28713,
                'state' => 'Selangor',
            ),
            88 => 
            array (
                'date' => '2021-08-06',
                'pcr' => 4831,
                'rtk_ag' => 1213,
                'state' => 'Terengganu',
            ),
            89 => 
            array (
                'date' => '2021-08-06',
                'pcr' => 7866,
                'rtk_ag' => 7538,
                'state' => 'W.P. Kuala Lumpur',
            ),
            90 => 
            array (
                'date' => '2021-08-06',
                'pcr' => 122,
                'rtk_ag' => 271,
                'state' => 'W.P. Labuan',
            ),
            91 => 
            array (
                'date' => '2021-08-06',
                'pcr' => 352,
                'rtk_ag' => 244,
                'state' => 'W.P. Putrajaya',
            ),
            92 => 
            array (
                'date' => '2021-08-07',
                'pcr' => 10521,
                'rtk_ag' => 8393,
                'state' => 'Johor',
            ),
            93 => 
            array (
                'date' => '2021-08-07',
                'pcr' => 3631,
                'rtk_ag' => 4134,
                'state' => 'Kedah',
            ),
            94 => 
            array (
                'date' => '2021-08-07',
                'pcr' => 2662,
                'rtk_ag' => 3223,
                'state' => 'Kelantan',
            ),
            95 => 
            array (
                'date' => '2021-08-07',
                'pcr' => 1993,
                'rtk_ag' => 1712,
                'state' => 'Melaka',
            ),
            96 => 
            array (
                'date' => '2021-08-07',
                'pcr' => 2480,
                'rtk_ag' => 1581,
                'state' => 'Negeri Sembilan',
            ),
            97 => 
            array (
                'date' => '2021-08-07',
                'pcr' => 3480,
                'rtk_ag' => 3252,
                'state' => 'Pahang',
            ),
            98 => 
            array (
                'date' => '2021-08-07',
                'pcr' => 2884,
                'rtk_ag' => 3883,
                'state' => 'Perak',
            ),
            99 => 
            array (
                'date' => '2021-08-07',
                'pcr' => 40,
                'rtk_ag' => 87,
                'state' => 'Perlis',
            ),
            100 => 
            array (
                'date' => '2021-08-07',
                'pcr' => 3835,
                'rtk_ag' => 7097,
                'state' => 'Pulau Pinang',
            ),
            101 => 
            array (
                'date' => '2021-08-07',
                'pcr' => 5147,
                'rtk_ag' => 5219,
                'state' => 'Sabah',
            ),
            102 => 
            array (
                'date' => '2021-08-07',
                'pcr' => 6625,
                'rtk_ag' => 2036,
                'state' => 'Sarawak',
            ),
            103 => 
            array (
                'date' => '2021-08-07',
                'pcr' => 16975,
                'rtk_ag' => 23481,
                'state' => 'Selangor',
            ),
            104 => 
            array (
                'date' => '2021-08-07',
                'pcr' => 4117,
                'rtk_ag' => 1520,
                'state' => 'Terengganu',
            ),
            105 => 
            array (
                'date' => '2021-08-07',
                'pcr' => 8381,
                'rtk_ag' => 5585,
                'state' => 'W.P. Kuala Lumpur',
            ),
            106 => 
            array (
                'date' => '2021-08-07',
                'pcr' => 322,
                'rtk_ag' => 226,
                'state' => 'W.P. Labuan',
            ),
            107 => 
            array (
                'date' => '2021-08-07',
                'pcr' => 302,
                'rtk_ag' => 125,
                'state' => 'W.P. Putrajaya',
            ),
            108 => 
            array (
                'date' => '2021-08-08',
                'pcr' => 8434,
                'rtk_ag' => 8855,
                'state' => 'Johor',
            ),
            109 => 
            array (
                'date' => '2021-08-08',
                'pcr' => 2856,
                'rtk_ag' => 4925,
                'state' => 'Kedah',
            ),
            110 => 
            array (
                'date' => '2021-08-08',
                'pcr' => 2080,
                'rtk_ag' => 4449,
                'state' => 'Kelantan',
            ),
            111 => 
            array (
                'date' => '2021-08-08',
                'pcr' => 2634,
                'rtk_ag' => 1450,
                'state' => 'Melaka',
            ),
            112 => 
            array (
                'date' => '2021-08-08',
                'pcr' => 1975,
                'rtk_ag' => 1512,
                'state' => 'Negeri Sembilan',
            ),
            113 => 
            array (
                'date' => '2021-08-08',
                'pcr' => 3718,
                'rtk_ag' => 2185,
                'state' => 'Pahang',
            ),
            114 => 
            array (
                'date' => '2021-08-08',
                'pcr' => 2595,
                'rtk_ag' => 2605,
                'state' => 'Perak',
            ),
            115 => 
            array (
                'date' => '2021-08-08',
                'pcr' => 74,
                'rtk_ag' => 223,
                'state' => 'Perlis',
            ),
            116 => 
            array (
                'date' => '2021-08-08',
                'pcr' => 3510,
                'rtk_ag' => 4436,
                'state' => 'Pulau Pinang',
            ),
            117 => 
            array (
                'date' => '2021-08-08',
                'pcr' => 6140,
                'rtk_ag' => 3831,
                'state' => 'Sabah',
            ),
            118 => 
            array (
                'date' => '2021-08-08',
                'pcr' => 6966,
                'rtk_ag' => 2308,
                'state' => 'Sarawak',
            ),
            119 => 
            array (
                'date' => '2021-08-08',
                'pcr' => 12971,
                'rtk_ag' => 16802,
                'state' => 'Selangor',
            ),
            120 => 
            array (
                'date' => '2021-08-08',
                'pcr' => 4392,
                'rtk_ag' => 2265,
                'state' => 'Terengganu',
            ),
            121 => 
            array (
                'date' => '2021-08-08',
                'pcr' => 4865,
                'rtk_ag' => 3057,
                'state' => 'W.P. Kuala Lumpur',
            ),
            122 => 
            array (
                'date' => '2021-08-08',
                'pcr' => 262,
                'rtk_ag' => 414,
                'state' => 'W.P. Labuan',
            ),
            123 => 
            array (
                'date' => '2021-08-08',
                'pcr' => 187,
                'rtk_ag' => 84,
                'state' => 'W.P. Putrajaya',
            ),
            124 => 
            array (
                'date' => '2021-08-09',
                'pcr' => 6964,
                'rtk_ag' => 9952,
                'state' => 'Johor',
            ),
            125 => 
            array (
                'date' => '2021-08-09',
                'pcr' => 3966,
                'rtk_ag' => 5749,
                'state' => 'Kedah',
            ),
            126 => 
            array (
                'date' => '2021-08-09',
                'pcr' => 2358,
                'rtk_ag' => 5207,
                'state' => 'Kelantan',
            ),
            127 => 
            array (
                'date' => '2021-08-09',
                'pcr' => 1964,
                'rtk_ag' => 2739,
                'state' => 'Melaka',
            ),
            128 => 
            array (
                'date' => '2021-08-09',
                'pcr' => 1544,
                'rtk_ag' => 3498,
                'state' => 'Negeri Sembilan',
            ),
            129 => 
            array (
                'date' => '2021-08-09',
                'pcr' => 4011,
                'rtk_ag' => 3539,
                'state' => 'Pahang',
            ),
            130 => 
            array (
                'date' => '2021-08-09',
                'pcr' => 3032,
                'rtk_ag' => 4294,
                'state' => 'Perak',
            ),
            131 => 
            array (
                'date' => '2021-08-09',
                'pcr' => 48,
                'rtk_ag' => 426,
                'state' => 'Perlis',
            ),
            132 => 
            array (
                'date' => '2021-08-09',
                'pcr' => 2751,
                'rtk_ag' => 7057,
                'state' => 'Pulau Pinang',
            ),
            133 => 
            array (
                'date' => '2021-08-09',
                'pcr' => 5910,
                'rtk_ag' => 6928,
                'state' => 'Sabah',
            ),
            134 => 
            array (
                'date' => '2021-08-09',
                'pcr' => 7150,
                'rtk_ag' => 1723,
                'state' => 'Sarawak',
            ),
            135 => 
            array (
                'date' => '2021-08-09',
                'pcr' => 9926,
                'rtk_ag' => 33032,
                'state' => 'Selangor',
            ),
            136 => 
            array (
                'date' => '2021-08-09',
                'pcr' => 3343,
                'rtk_ag' => 2279,
                'state' => 'Terengganu',
            ),
            137 => 
            array (
                'date' => '2021-08-09',
                'pcr' => 4253,
                'rtk_ag' => 8960,
                'state' => 'W.P. Kuala Lumpur',
            ),
            138 => 
            array (
                'date' => '2021-08-09',
                'pcr' => 69,
                'rtk_ag' => 425,
                'state' => 'W.P. Labuan',
            ),
            139 => 
            array (
                'date' => '2021-08-09',
                'pcr' => 252,
                'rtk_ag' => 213,
                'state' => 'W.P. Putrajaya',
            ),
            140 => 
            array (
                'date' => '2021-08-10',
                'pcr' => 8548,
                'rtk_ag' => 9446,
                'state' => 'Johor',
            ),
            141 => 
            array (
                'date' => '2021-08-10',
                'pcr' => 3648,
                'rtk_ag' => 3606,
                'state' => 'Kedah',
            ),
            142 => 
            array (
                'date' => '2021-08-10',
                'pcr' => 1671,
                'rtk_ag' => 2947,
                'state' => 'Kelantan',
            ),
            143 => 
            array (
                'date' => '2021-08-10',
                'pcr' => 2400,
                'rtk_ag' => 1842,
                'state' => 'Melaka',
            ),
            144 => 
            array (
                'date' => '2021-08-10',
                'pcr' => 2321,
                'rtk_ag' => 1954,
                'state' => 'Negeri Sembilan',
            ),
            145 => 
            array (
                'date' => '2021-08-10',
                'pcr' => 4373,
                'rtk_ag' => 1969,
                'state' => 'Pahang',
            ),
            146 => 
            array (
                'date' => '2021-08-10',
                'pcr' => 4058,
                'rtk_ag' => 2409,
                'state' => 'Perak',
            ),
            147 => 
            array (
                'date' => '2021-08-10',
                'pcr' => 105,
                'rtk_ag' => 124,
                'state' => 'Perlis',
            ),
            148 => 
            array (
                'date' => '2021-08-10',
                'pcr' => 4098,
                'rtk_ag' => 5716,
                'state' => 'Pulau Pinang',
            ),
            149 => 
            array (
                'date' => '2021-08-10',
                'pcr' => 5698,
                'rtk_ag' => 4597,
                'state' => 'Sabah',
            ),
            150 => 
            array (
                'date' => '2021-08-10',
                'pcr' => 10501,
                'rtk_ag' => 1239,
                'state' => 'Sarawak',
            ),
            151 => 
            array (
                'date' => '2021-08-10',
                'pcr' => 19068,
                'rtk_ag' => 22847,
                'state' => 'Selangor',
            ),
            152 => 
            array (
                'date' => '2021-08-10',
                'pcr' => 4863,
                'rtk_ag' => 1342,
                'state' => 'Terengganu',
            ),
            153 => 
            array (
                'date' => '2021-08-10',
                'pcr' => 7617,
                'rtk_ag' => 4641,
                'state' => 'W.P. Kuala Lumpur',
            ),
            154 => 
            array (
                'date' => '2021-08-10',
                'pcr' => 346,
                'rtk_ag' => 162,
                'state' => 'W.P. Labuan',
            ),
            155 => 
            array (
                'date' => '2021-08-10',
                'pcr' => 350,
                'rtk_ag' => 59,
                'state' => 'W.P. Putrajaya',
            ),
            156 => 
            array (
                'date' => '2021-08-11',
                'pcr' => 8145,
                'rtk_ag' => 10637,
                'state' => 'Johor',
            ),
            157 => 
            array (
                'date' => '2021-08-11',
                'pcr' => 4240,
                'rtk_ag' => 6669,
                'state' => 'Kedah',
            ),
            158 => 
            array (
                'date' => '2021-08-11',
                'pcr' => 2373,
                'rtk_ag' => 4804,
                'state' => 'Kelantan',
            ),
            159 => 
            array (
                'date' => '2021-08-11',
                'pcr' => 2249,
                'rtk_ag' => 2611,
                'state' => 'Melaka',
            ),
            160 => 
            array (
                'date' => '2021-08-11',
                'pcr' => 1673,
                'rtk_ag' => 2922,
                'state' => 'Negeri Sembilan',
            ),
            161 => 
            array (
                'date' => '2021-08-11',
                'pcr' => 5322,
                'rtk_ag' => 3067,
                'state' => 'Pahang',
            ),
            162 => 
            array (
                'date' => '2021-08-11',
                'pcr' => 2882,
                'rtk_ag' => 4927,
                'state' => 'Perak',
            ),
            163 => 
            array (
                'date' => '2021-08-11',
                'pcr' => 102,
                'rtk_ag' => 318,
                'state' => 'Perlis',
            ),
            164 => 
            array (
                'date' => '2021-08-11',
                'pcr' => 3009,
                'rtk_ag' => 7425,
                'state' => 'Pulau Pinang',
            ),
            165 => 
            array (
                'date' => '2021-08-11',
                'pcr' => 6704,
                'rtk_ag' => 7401,
                'state' => 'Sabah',
            ),
            166 => 
            array (
                'date' => '2021-08-11',
                'pcr' => 12372,
                'rtk_ag' => 2201,
                'state' => 'Sarawak',
            ),
            167 => 
            array (
                'date' => '2021-08-11',
                'pcr' => 14588,
                'rtk_ag' => 30236,
                'state' => 'Selangor',
            ),
            168 => 
            array (
                'date' => '2021-08-11',
                'pcr' => 4133,
                'rtk_ag' => 2258,
                'state' => 'Terengganu',
            ),
            169 => 
            array (
                'date' => '2021-08-11',
                'pcr' => 7085,
                'rtk_ag' => 9198,
                'state' => 'W.P. Kuala Lumpur',
            ),
            170 => 
            array (
                'date' => '2021-08-11',
                'pcr' => 164,
                'rtk_ag' => 303,
                'state' => 'W.P. Labuan',
            ),
            171 => 
            array (
                'date' => '2021-08-11',
                'pcr' => 237,
                'rtk_ag' => 237,
                'state' => 'W.P. Putrajaya',
            ),
            172 => 
            array (
                'date' => '2021-08-12',
                'pcr' => 11468,
                'rtk_ag' => 11670,
                'state' => 'Johor',
            ),
            173 => 
            array (
                'date' => '2021-08-12',
                'pcr' => 4148,
                'rtk_ag' => 6075,
                'state' => 'Kedah',
            ),
            174 => 
            array (
                'date' => '2021-08-12',
                'pcr' => 2488,
                'rtk_ag' => 5288,
                'state' => 'Kelantan',
            ),
            175 => 
            array (
                'date' => '2021-08-12',
                'pcr' => 2711,
                'rtk_ag' => 2930,
                'state' => 'Melaka',
            ),
            176 => 
            array (
                'date' => '2021-08-12',
                'pcr' => 2895,
                'rtk_ag' => 2444,
                'state' => 'Negeri Sembilan',
            ),
            177 => 
            array (
                'date' => '2021-08-12',
                'pcr' => 5318,
                'rtk_ag' => 2640,
                'state' => 'Pahang',
            ),
            178 => 
            array (
                'date' => '2021-08-12',
                'pcr' => 4270,
                'rtk_ag' => 4930,
                'state' => 'Perak',
            ),
            179 => 
            array (
                'date' => '2021-08-12',
                'pcr' => 129,
                'rtk_ag' => 327,
                'state' => 'Perlis',
            ),
            180 => 
            array (
                'date' => '2021-08-12',
                'pcr' => 4621,
                'rtk_ag' => 8160,
                'state' => 'Pulau Pinang',
            ),
            181 => 
            array (
                'date' => '2021-08-12',
                'pcr' => 4833,
                'rtk_ag' => 8239,
                'state' => 'Sabah',
            ),
            182 => 
            array (
                'date' => '2021-08-12',
                'pcr' => 9313,
                'rtk_ag' => 2167,
                'state' => 'Sarawak',
            ),
            183 => 
            array (
                'date' => '2021-08-12',
                'pcr' => 21445,
                'rtk_ag' => 28066,
                'state' => 'Selangor',
            ),
            184 => 
            array (
                'date' => '2021-08-12',
                'pcr' => 3820,
                'rtk_ag' => 2266,
                'state' => 'Terengganu',
            ),
            185 => 
            array (
                'date' => '2021-08-12',
                'pcr' => 9644,
                'rtk_ag' => 7585,
                'state' => 'W.P. Kuala Lumpur',
            ),
            186 => 
            array (
                'date' => '2021-08-12',
                'pcr' => 249,
                'rtk_ag' => 318,
                'state' => 'W.P. Labuan',
            ),
            187 => 
            array (
                'date' => '2021-08-12',
                'pcr' => 428,
                'rtk_ag' => 353,
                'state' => 'W.P. Putrajaya',
            ),
            188 => 
            array (
                'date' => '2021-08-13',
                'pcr' => 11029,
                'rtk_ag' => 9617,
                'state' => 'Johor',
            ),
            189 => 
            array (
                'date' => '2021-08-13',
                'pcr' => 4240,
                'rtk_ag' => 4262,
                'state' => 'Kedah',
            ),
            190 => 
            array (
                'date' => '2021-08-13',
                'pcr' => 2696,
                'rtk_ag' => 4590,
                'state' => 'Kelantan',
            ),
            191 => 
            array (
                'date' => '2021-08-13',
                'pcr' => 3643,
                'rtk_ag' => 2376,
                'state' => 'Melaka',
            ),
            192 => 
            array (
                'date' => '2021-08-13',
                'pcr' => 2395,
                'rtk_ag' => 2881,
                'state' => 'Negeri Sembilan',
            ),
            193 => 
            array (
                'date' => '2021-08-13',
                'pcr' => 5328,
                'rtk_ag' => 2426,
                'state' => 'Pahang',
            ),
            194 => 
            array (
                'date' => '2021-08-13',
                'pcr' => 3609,
                'rtk_ag' => 5198,
                'state' => 'Perak',
            ),
            195 => 
            array (
                'date' => '2021-08-13',
                'pcr' => 132,
                'rtk_ag' => 360,
                'state' => 'Perlis',
            ),
            196 => 
            array (
                'date' => '2021-08-13',
                'pcr' => 3808,
                'rtk_ag' => 8732,
                'state' => 'Pulau Pinang',
            ),
            197 => 
            array (
                'date' => '2021-08-13',
                'pcr' => 6824,
                'rtk_ag' => 7461,
                'state' => 'Sabah',
            ),
            198 => 
            array (
                'date' => '2021-08-13',
                'pcr' => 7611,
                'rtk_ag' => 1831,
                'state' => 'Sarawak',
            ),
            199 => 
            array (
                'date' => '2021-08-13',
                'pcr' => 19986,
                'rtk_ag' => 26078,
                'state' => 'Selangor',
            ),
            200 => 
            array (
                'date' => '2021-08-13',
                'pcr' => 3733,
                'rtk_ag' => 860,
                'state' => 'Terengganu',
            ),
            201 => 
            array (
                'date' => '2021-08-13',
                'pcr' => 7545,
                'rtk_ag' => 7463,
                'state' => 'W.P. Kuala Lumpur',
            ),
            202 => 
            array (
                'date' => '2021-08-13',
                'pcr' => 139,
                'rtk_ag' => 293,
                'state' => 'W.P. Labuan',
            ),
            203 => 
            array (
                'date' => '2021-08-13',
                'pcr' => 380,
                'rtk_ag' => 167,
                'state' => 'W.P. Putrajaya',
            ),
            204 => 
            array (
                'date' => '2021-08-14',
                'pcr' => 10284,
                'rtk_ag' => 9664,
                'state' => 'Johor',
            ),
            205 => 
            array (
                'date' => '2021-08-14',
                'pcr' => 3511,
                'rtk_ag' => 4473,
                'state' => 'Kedah',
            ),
            206 => 
            array (
                'date' => '2021-08-14',
                'pcr' => 2106,
                'rtk_ag' => 4309,
                'state' => 'Kelantan',
            ),
            207 => 
            array (
                'date' => '2021-08-14',
                'pcr' => 3438,
                'rtk_ag' => 1933,
                'state' => 'Melaka',
            ),
            208 => 
            array (
                'date' => '2021-08-14',
                'pcr' => 2600,
                'rtk_ag' => 2261,
                'state' => 'Negeri Sembilan',
            ),
            209 => 
            array (
                'date' => '2021-08-14',
                'pcr' => 5237,
                'rtk_ag' => 2132,
                'state' => 'Pahang',
            ),
            210 => 
            array (
                'date' => '2021-08-14',
                'pcr' => 3354,
                'rtk_ag' => 4631,
                'state' => 'Perak',
            ),
            211 => 
            array (
                'date' => '2021-08-14',
                'pcr' => 123,
                'rtk_ag' => 186,
                'state' => 'Perlis',
            ),
            212 => 
            array (
                'date' => '2021-08-14',
                'pcr' => 5130,
                'rtk_ag' => 9234,
                'state' => 'Pulau Pinang',
            ),
            213 => 
            array (
                'date' => '2021-08-14',
                'pcr' => 9744,
                'rtk_ag' => 6865,
                'state' => 'Sabah',
            ),
            214 => 
            array (
                'date' => '2021-08-14',
                'pcr' => 6459,
                'rtk_ag' => 2881,
                'state' => 'Sarawak',
            ),
            215 => 
            array (
                'date' => '2021-08-14',
                'pcr' => 16792,
                'rtk_ag' => 21336,
                'state' => 'Selangor',
            ),
            216 => 
            array (
                'date' => '2021-08-14',
                'pcr' => 3327,
                'rtk_ag' => 1570,
                'state' => 'Terengganu',
            ),
            217 => 
            array (
                'date' => '2021-08-14',
                'pcr' => 7182,
                'rtk_ag' => 4649,
                'state' => 'W.P. Kuala Lumpur',
            ),
            218 => 
            array (
                'date' => '2021-08-14',
                'pcr' => 250,
                'rtk_ag' => 289,
                'state' => 'W.P. Labuan',
            ),
            219 => 
            array (
                'date' => '2021-08-14',
                'pcr' => 400,
                'rtk_ag' => 71,
                'state' => 'W.P. Putrajaya',
            ),
            220 => 
            array (
                'date' => '2021-08-15',
                'pcr' => 8051,
                'rtk_ag' => 10384,
                'state' => 'Johor',
            ),
            221 => 
            array (
                'date' => '2021-08-15',
                'pcr' => 3835,
                'rtk_ag' => 5490,
                'state' => 'Kedah',
            ),
            222 => 
            array (
                'date' => '2021-08-15',
                'pcr' => 2140,
                'rtk_ag' => 5972,
                'state' => 'Kelantan',
            ),
            223 => 
            array (
                'date' => '2021-08-15',
                'pcr' => 2929,
                'rtk_ag' => 1065,
                'state' => 'Melaka',
            ),
            224 => 
            array (
                'date' => '2021-08-15',
                'pcr' => 2480,
                'rtk_ag' => 1519,
                'state' => 'Negeri Sembilan',
            ),
            225 => 
            array (
                'date' => '2021-08-15',
                'pcr' => 4825,
                'rtk_ag' => 1724,
                'state' => 'Pahang',
            ),
            226 => 
            array (
                'date' => '2021-08-15',
                'pcr' => 3114,
                'rtk_ag' => 4223,
                'state' => 'Perak',
            ),
            227 => 
            array (
                'date' => '2021-08-15',
                'pcr' => 79,
                'rtk_ag' => 270,
                'state' => 'Perlis',
            ),
            228 => 
            array (
                'date' => '2021-08-15',
                'pcr' => 3397,
                'rtk_ag' => 6100,
                'state' => 'Pulau Pinang',
            ),
            229 => 
            array (
                'date' => '2021-08-15',
                'pcr' => 7746,
                'rtk_ag' => 5079,
                'state' => 'Sabah',
            ),
            230 => 
            array (
                'date' => '2021-08-15',
                'pcr' => 10632,
                'rtk_ag' => 1587,
                'state' => 'Sarawak',
            ),
            231 => 
            array (
                'date' => '2021-08-15',
                'pcr' => 13210,
                'rtk_ag' => 14454,
                'state' => 'Selangor',
            ),
            232 => 
            array (
                'date' => '2021-08-15',
                'pcr' => 3829,
                'rtk_ag' => 2487,
                'state' => 'Terengganu',
            ),
            233 => 
            array (
                'date' => '2021-08-15',
                'pcr' => 4428,
                'rtk_ag' => 3153,
                'state' => 'W.P. Kuala Lumpur',
            ),
            234 => 
            array (
                'date' => '2021-08-15',
                'pcr' => 274,
                'rtk_ag' => 281,
                'state' => 'W.P. Labuan',
            ),
            235 => 
            array (
                'date' => '2021-08-15',
                'pcr' => 212,
                'rtk_ag' => 61,
                'state' => 'W.P. Putrajaya',
            ),
            236 => 
            array (
                'date' => '2021-08-16',
                'pcr' => 8174,
                'rtk_ag' => 11872,
                'state' => 'Johor',
            ),
            237 => 
            array (
                'date' => '2021-08-16',
                'pcr' => 4406,
                'rtk_ag' => 5358,
                'state' => 'Kedah',
            ),
            238 => 
            array (
                'date' => '2021-08-16',
                'pcr' => 2908,
                'rtk_ag' => 4795,
                'state' => 'Kelantan',
            ),
            239 => 
            array (
                'date' => '2021-08-16',
                'pcr' => 2013,
                'rtk_ag' => 2345,
                'state' => 'Melaka',
            ),
            240 => 
            array (
                'date' => '2021-08-16',
                'pcr' => 1214,
                'rtk_ag' => 3216,
                'state' => 'Negeri Sembilan',
            ),
            241 => 
            array (
                'date' => '2021-08-16',
                'pcr' => 4506,
                'rtk_ag' => 2941,
                'state' => 'Pahang',
            ),
            242 => 
            array (
                'date' => '2021-08-16',
                'pcr' => 2082,
                'rtk_ag' => 7029,
                'state' => 'Perak',
            ),
            243 => 
            array (
                'date' => '2021-08-16',
                'pcr' => 116,
                'rtk_ag' => 329,
                'state' => 'Perlis',
            ),
            244 => 
            array (
                'date' => '2021-08-16',
                'pcr' => 2491,
                'rtk_ag' => 9644,
                'state' => 'Pulau Pinang',
            ),
            245 => 
            array (
                'date' => '2021-08-16',
                'pcr' => 7276,
                'rtk_ag' => 8092,
                'state' => 'Sabah',
            ),
            246 => 
            array (
                'date' => '2021-08-16',
                'pcr' => 7738,
                'rtk_ag' => 2529,
                'state' => 'Sarawak',
            ),
            247 => 
            array (
                'date' => '2021-08-16',
                'pcr' => 12632,
                'rtk_ag' => 27535,
                'state' => 'Selangor',
            ),
            248 => 
            array (
                'date' => '2021-08-16',
                'pcr' => 2619,
                'rtk_ag' => 2559,
                'state' => 'Terengganu',
            ),
            249 => 
            array (
                'date' => '2021-08-16',
                'pcr' => 5521,
                'rtk_ag' => 7316,
                'state' => 'W.P. Kuala Lumpur',
            ),
            250 => 
            array (
                'date' => '2021-08-16',
                'pcr' => 52,
                'rtk_ag' => 451,
                'state' => 'W.P. Labuan',
            ),
            251 => 
            array (
                'date' => '2021-08-16',
                'pcr' => 190,
                'rtk_ag' => 208,
                'state' => 'W.P. Putrajaya',
            ),
            252 => 
            array (
                'date' => '2021-08-17',
                'pcr' => 11641,
                'rtk_ag' => 11416,
                'state' => 'Johor',
            ),
            253 => 
            array (
                'date' => '2021-08-17',
                'pcr' => 4192,
                'rtk_ag' => 5547,
                'state' => 'Kedah',
            ),
            254 => 
            array (
                'date' => '2021-08-17',
                'pcr' => 2447,
                'rtk_ag' => 4733,
                'state' => 'Kelantan',
            ),
            255 => 
            array (
                'date' => '2021-08-17',
                'pcr' => 3957,
                'rtk_ag' => 2356,
                'state' => 'Melaka',
            ),
            256 => 
            array (
                'date' => '2021-08-17',
                'pcr' => 2314,
                'rtk_ag' => 3321,
                'state' => 'Negeri Sembilan',
            ),
            257 => 
            array (
                'date' => '2021-08-17',
                'pcr' => 4893,
                'rtk_ag' => 2601,
                'state' => 'Pahang',
            ),
            258 => 
            array (
                'date' => '2021-08-17',
                'pcr' => 4653,
                'rtk_ag' => 5501,
                'state' => 'Perak',
            ),
            259 => 
            array (
                'date' => '2021-08-17',
                'pcr' => 130,
                'rtk_ag' => 367,
                'state' => 'Perlis',
            ),
            260 => 
            array (
                'date' => '2021-08-17',
                'pcr' => 5066,
                'rtk_ag' => 9177,
                'state' => 'Pulau Pinang',
            ),
            261 => 
            array (
                'date' => '2021-08-17',
                'pcr' => 6854,
                'rtk_ag' => 7877,
                'state' => 'Sabah',
            ),
            262 => 
            array (
                'date' => '2021-08-17',
                'pcr' => 11802,
                'rtk_ag' => 2028,
                'state' => 'Sarawak',
            ),
            263 => 
            array (
                'date' => '2021-08-17',
                'pcr' => 20177,
                'rtk_ag' => 25154,
                'state' => 'Selangor',
            ),
            264 => 
            array (
                'date' => '2021-08-17',
                'pcr' => 2678,
                'rtk_ag' => 1943,
                'state' => 'Terengganu',
            ),
            265 => 
            array (
                'date' => '2021-08-17',
                'pcr' => 8209,
                'rtk_ag' => 6935,
                'state' => 'W.P. Kuala Lumpur',
            ),
            266 => 
            array (
                'date' => '2021-08-17',
                'pcr' => 331,
                'rtk_ag' => 263,
                'state' => 'W.P. Labuan',
            ),
            267 => 
            array (
                'date' => '2021-08-17',
                'pcr' => 202,
                'rtk_ag' => 190,
                'state' => 'W.P. Putrajaya',
            ),
            268 => 
            array (
                'date' => '2021-08-18',
                'pcr' => 11338,
                'rtk_ag' => 11901,
                'state' => 'Johor',
            ),
            269 => 
            array (
                'date' => '2021-08-18',
                'pcr' => 5114,
                'rtk_ag' => 5810,
                'state' => 'Kedah',
            ),
            270 => 
            array (
                'date' => '2021-08-18',
                'pcr' => 2601,
                'rtk_ag' => 4412,
                'state' => 'Kelantan',
            ),
            271 => 
            array (
                'date' => '2021-08-18',
                'pcr' => 2435,
                'rtk_ag' => 1916,
                'state' => 'Melaka',
            ),
            272 => 
            array (
                'date' => '2021-08-18',
                'pcr' => 2132,
                'rtk_ag' => 2906,
                'state' => 'Negeri Sembilan',
            ),
            273 => 
            array (
                'date' => '2021-08-18',
                'pcr' => 5332,
                'rtk_ag' => 2280,
                'state' => 'Pahang',
            ),
            274 => 
            array (
                'date' => '2021-08-18',
                'pcr' => 3540,
                'rtk_ag' => 5625,
                'state' => 'Perak',
            ),
            275 => 
            array (
                'date' => '2021-08-18',
                'pcr' => 247,
                'rtk_ag' => 330,
                'state' => 'Perlis',
            ),
            276 => 
            array (
                'date' => '2021-08-18',
                'pcr' => 4838,
                'rtk_ag' => 10038,
                'state' => 'Pulau Pinang',
            ),
            277 => 
            array (
                'date' => '2021-08-18',
                'pcr' => 6574,
                'rtk_ag' => 7673,
                'state' => 'Sabah',
            ),
            278 => 
            array (
                'date' => '2021-08-18',
                'pcr' => 10387,
                'rtk_ag' => 2882,
                'state' => 'Sarawak',
            ),
            279 => 
            array (
                'date' => '2021-08-18',
                'pcr' => 17493,
                'rtk_ag' => 25204,
                'state' => 'Selangor',
            ),
            280 => 
            array (
                'date' => '2021-08-18',
                'pcr' => 3667,
                'rtk_ag' => 1741,
                'state' => 'Terengganu',
            ),
            281 => 
            array (
                'date' => '2021-08-18',
                'pcr' => 6671,
                'rtk_ag' => 5735,
                'state' => 'W.P. Kuala Lumpur',
            ),
            282 => 
            array (
                'date' => '2021-08-18',
                'pcr' => 82,
                'rtk_ag' => 234,
                'state' => 'W.P. Labuan',
            ),
            283 => 
            array (
                'date' => '2021-08-18',
                'pcr' => 370,
                'rtk_ag' => 142,
                'state' => 'W.P. Putrajaya',
            ),
            284 => 
            array (
                'date' => '2021-08-19',
                'pcr' => 11187,
                'rtk_ag' => 11147,
                'state' => 'Johor',
            ),
            285 => 
            array (
                'date' => '2021-08-19',
                'pcr' => 5282,
                'rtk_ag' => 5950,
                'state' => 'Kedah',
            ),
            286 => 
            array (
                'date' => '2021-08-19',
                'pcr' => 2360,
                'rtk_ag' => 4201,
                'state' => 'Kelantan',
            ),
            287 => 
            array (
                'date' => '2021-08-19',
                'pcr' => 3584,
                'rtk_ag' => 1516,
                'state' => 'Melaka',
            ),
            288 => 
            array (
                'date' => '2021-08-19',
                'pcr' => 2156,
                'rtk_ag' => 1877,
                'state' => 'Negeri Sembilan',
            ),
            289 => 
            array (
                'date' => '2021-08-19',
                'pcr' => 5151,
                'rtk_ag' => 2791,
                'state' => 'Pahang',
            ),
            290 => 
            array (
                'date' => '2021-08-19',
                'pcr' => 3116,
                'rtk_ag' => 5137,
                'state' => 'Perak',
            ),
            291 => 
            array (
                'date' => '2021-08-19',
                'pcr' => 61,
                'rtk_ag' => 378,
                'state' => 'Perlis',
            ),
            292 => 
            array (
                'date' => '2021-08-19',
                'pcr' => 4508,
                'rtk_ag' => 8538,
                'state' => 'Pulau Pinang',
            ),
            293 => 
            array (
                'date' => '2021-08-19',
                'pcr' => 8849,
                'rtk_ag' => 7166,
                'state' => 'Sabah',
            ),
            294 => 
            array (
                'date' => '2021-08-19',
                'pcr' => 16760,
                'rtk_ag' => 3366,
                'state' => 'Sarawak',
            ),
            295 => 
            array (
                'date' => '2021-08-19',
                'pcr' => 17105,
                'rtk_ag' => 21565,
                'state' => 'Selangor',
            ),
            296 => 
            array (
                'date' => '2021-08-19',
                'pcr' => 3933,
                'rtk_ag' => 1780,
                'state' => 'Terengganu',
            ),
            297 => 
            array (
                'date' => '2021-08-19',
                'pcr' => 5928,
                'rtk_ag' => 5713,
                'state' => 'W.P. Kuala Lumpur',
            ),
            298 => 
            array (
                'date' => '2021-08-19',
                'pcr' => 97,
                'rtk_ag' => 292,
                'state' => 'W.P. Labuan',
            ),
            299 => 
            array (
                'date' => '2021-08-19',
                'pcr' => 216,
                'rtk_ag' => 148,
                'state' => 'W.P. Putrajaya',
            ),
            300 => 
            array (
                'date' => '2021-08-20',
                'pcr' => 10304,
                'rtk_ag' => 8821,
                'state' => 'Johor',
            ),
            301 => 
            array (
                'date' => '2021-08-20',
                'pcr' => 5051,
                'rtk_ag' => 5178,
                'state' => 'Kedah',
            ),
            302 => 
            array (
                'date' => '2021-08-20',
                'pcr' => 2873,
                'rtk_ag' => 2821,
                'state' => 'Kelantan',
            ),
            303 => 
            array (
                'date' => '2021-08-20',
                'pcr' => 2226,
                'rtk_ag' => 2163,
                'state' => 'Melaka',
            ),
            304 => 
            array (
                'date' => '2021-08-20',
                'pcr' => 2164,
                'rtk_ag' => 2700,
                'state' => 'Negeri Sembilan',
            ),
            305 => 
            array (
                'date' => '2021-08-20',
                'pcr' => 3968,
                'rtk_ag' => 2008,
                'state' => 'Pahang',
            ),
            306 => 
            array (
                'date' => '2021-08-20',
                'pcr' => 3423,
                'rtk_ag' => 5031,
                'state' => 'Perak',
            ),
            307 => 
            array (
                'date' => '2021-08-20',
                'pcr' => 178,
                'rtk_ag' => 236,
                'state' => 'Perlis',
            ),
            308 => 
            array (
                'date' => '2021-08-20',
                'pcr' => 3949,
                'rtk_ag' => 8463,
                'state' => 'Pulau Pinang',
            ),
            309 => 
            array (
                'date' => '2021-08-20',
                'pcr' => 6791,
                'rtk_ag' => 6616,
                'state' => 'Sabah',
            ),
            310 => 
            array (
                'date' => '2021-08-20',
                'pcr' => 13282,
                'rtk_ag' => 3620,
                'state' => 'Sarawak',
            ),
            311 => 
            array (
                'date' => '2021-08-20',
                'pcr' => 16168,
                'rtk_ag' => 22209,
                'state' => 'Selangor',
            ),
            312 => 
            array (
                'date' => '2021-08-20',
                'pcr' => 3367,
                'rtk_ag' => 1163,
                'state' => 'Terengganu',
            ),
            313 => 
            array (
                'date' => '2021-08-20',
                'pcr' => 7239,
                'rtk_ag' => 5029,
                'state' => 'W.P. Kuala Lumpur',
            ),
            314 => 
            array (
                'date' => '2021-08-20',
                'pcr' => 111,
                'rtk_ag' => 350,
                'state' => 'W.P. Labuan',
            ),
            315 => 
            array (
                'date' => '2021-08-20',
                'pcr' => 176,
                'rtk_ag' => 185,
                'state' => 'W.P. Putrajaya',
            ),
            316 => 
            array (
                'date' => '2021-08-21',
                'pcr' => 11626,
                'rtk_ag' => 9212,
                'state' => 'Johor',
            ),
            317 => 
            array (
                'date' => '2021-08-21',
                'pcr' => 4463,
                'rtk_ag' => 4572,
                'state' => 'Kedah',
            ),
            318 => 
            array (
                'date' => '2021-08-21',
                'pcr' => 2053,
                'rtk_ag' => 3703,
                'state' => 'Kelantan',
            ),
            319 => 
            array (
                'date' => '2021-08-21',
                'pcr' => 3267,
                'rtk_ag' => 1195,
                'state' => 'Melaka',
            ),
            320 => 
            array (
                'date' => '2021-08-21',
                'pcr' => 2215,
                'rtk_ag' => 1456,
                'state' => 'Negeri Sembilan',
            ),
            321 => 
            array (
                'date' => '2021-08-21',
                'pcr' => 3821,
                'rtk_ag' => 2414,
                'state' => 'Pahang',
            ),
            322 => 
            array (
                'date' => '2021-08-21',
                'pcr' => 3664,
                'rtk_ag' => 4600,
                'state' => 'Perak',
            ),
            323 => 
            array (
                'date' => '2021-08-21',
                'pcr' => 150,
                'rtk_ag' => 143,
                'state' => 'Perlis',
            ),
            324 => 
            array (
                'date' => '2021-08-21',
                'pcr' => 4726,
                'rtk_ag' => 7785,
                'state' => 'Pulau Pinang',
            ),
            325 => 
            array (
                'date' => '2021-08-21',
                'pcr' => 7362,
                'rtk_ag' => 5090,
                'state' => 'Sabah',
            ),
            326 => 
            array (
                'date' => '2021-08-21',
                'pcr' => 9890,
                'rtk_ag' => 2772,
                'state' => 'Sarawak',
            ),
            327 => 
            array (
                'date' => '2021-08-21',
                'pcr' => 13065,
                'rtk_ag' => 18606,
                'state' => 'Selangor',
            ),
            328 => 
            array (
                'date' => '2021-08-21',
                'pcr' => 2925,
                'rtk_ag' => 2641,
                'state' => 'Terengganu',
            ),
            329 => 
            array (
                'date' => '2021-08-21',
                'pcr' => 5575,
                'rtk_ag' => 3828,
                'state' => 'W.P. Kuala Lumpur',
            ),
            330 => 
            array (
                'date' => '2021-08-21',
                'pcr' => 71,
                'rtk_ag' => 375,
                'state' => 'W.P. Labuan',
            ),
            331 => 
            array (
                'date' => '2021-08-21',
                'pcr' => 167,
                'rtk_ag' => 70,
                'state' => 'W.P. Putrajaya',
            ),
            332 => 
            array (
                'date' => '2021-08-22',
                'pcr' => 9101,
                'rtk_ag' => 10544,
                'state' => 'Johor',
            ),
            333 => 
            array (
                'date' => '2021-08-22',
                'pcr' => 3576,
                'rtk_ag' => 4891,
                'state' => 'Kedah',
            ),
            334 => 
            array (
                'date' => '2021-08-22',
                'pcr' => 2175,
                'rtk_ag' => 4444,
                'state' => 'Kelantan',
            ),
            335 => 
            array (
                'date' => '2021-08-22',
                'pcr' => 2246,
                'rtk_ag' => 1210,
                'state' => 'Melaka',
            ),
            336 => 
            array (
                'date' => '2021-08-22',
                'pcr' => 1204,
                'rtk_ag' => 880,
                'state' => 'Negeri Sembilan',
            ),
            337 => 
            array (
                'date' => '2021-08-22',
                'pcr' => 4403,
                'rtk_ag' => 1453,
                'state' => 'Pahang',
            ),
            338 => 
            array (
                'date' => '2021-08-22',
                'pcr' => 2933,
                'rtk_ag' => 3368,
                'state' => 'Perak',
            ),
            339 => 
            array (
                'date' => '2021-08-22',
                'pcr' => 205,
                'rtk_ag' => 192,
                'state' => 'Perlis',
            ),
            340 => 
            array (
                'date' => '2021-08-22',
                'pcr' => 2346,
                'rtk_ag' => 6563,
                'state' => 'Pulau Pinang',
            ),
            341 => 
            array (
                'date' => '2021-08-22',
                'pcr' => 6595,
                'rtk_ag' => 4723,
                'state' => 'Sabah',
            ),
            342 => 
            array (
                'date' => '2021-08-22',
                'pcr' => 12190,
                'rtk_ag' => 3392,
                'state' => 'Sarawak',
            ),
            343 => 
            array (
                'date' => '2021-08-22',
                'pcr' => 11060,
                'rtk_ag' => 13281,
                'state' => 'Selangor',
            ),
            344 => 
            array (
                'date' => '2021-08-22',
                'pcr' => 3345,
                'rtk_ag' => 2844,
                'state' => 'Terengganu',
            ),
            345 => 
            array (
                'date' => '2021-08-22',
                'pcr' => 3534,
                'rtk_ag' => 2510,
                'state' => 'W.P. Kuala Lumpur',
            ),
            346 => 
            array (
                'date' => '2021-08-22',
                'pcr' => 133,
                'rtk_ag' => 381,
                'state' => 'W.P. Labuan',
            ),
            347 => 
            array (
                'date' => '2021-08-22',
                'pcr' => 103,
                'rtk_ag' => 76,
                'state' => 'W.P. Putrajaya',
            ),
            348 => 
            array (
                'date' => '2021-08-23',
                'pcr' => 7466,
                'rtk_ag' => 13182,
                'state' => 'Johor',
            ),
            349 => 
            array (
                'date' => '2021-08-23',
                'pcr' => 3810,
                'rtk_ag' => 5824,
                'state' => 'Kedah',
            ),
            350 => 
            array (
                'date' => '2021-08-23',
                'pcr' => 3412,
                'rtk_ag' => 4183,
                'state' => 'Kelantan',
            ),
            351 => 
            array (
                'date' => '2021-08-23',
                'pcr' => 1545,
                'rtk_ag' => 2041,
                'state' => 'Melaka',
            ),
            352 => 
            array (
                'date' => '2021-08-23',
                'pcr' => 1150,
                'rtk_ag' => 3195,
                'state' => 'Negeri Sembilan',
            ),
            353 => 
            array (
                'date' => '2021-08-23',
                'pcr' => 4711,
                'rtk_ag' => 2757,
                'state' => 'Pahang',
            ),
            354 => 
            array (
                'date' => '2021-08-23',
                'pcr' => 2325,
                'rtk_ag' => 5720,
                'state' => 'Perak',
            ),
            355 => 
            array (
                'date' => '2021-08-23',
                'pcr' => 94,
                'rtk_ag' => 207,
                'state' => 'Perlis',
            ),
            356 => 
            array (
                'date' => '2021-08-23',
                'pcr' => 2141,
                'rtk_ag' => 8407,
                'state' => 'Pulau Pinang',
            ),
            357 => 
            array (
                'date' => '2021-08-23',
                'pcr' => 6080,
                'rtk_ag' => 7738,
                'state' => 'Sabah',
            ),
            358 => 
            array (
                'date' => '2021-08-23',
                'pcr' => 9470,
                'rtk_ag' => 3650,
                'state' => 'Sarawak',
            ),
            359 => 
            array (
                'date' => '2021-08-23',
                'pcr' => 11308,
                'rtk_ag' => 28344,
                'state' => 'Selangor',
            ),
            360 => 
            array (
                'date' => '2021-08-23',
                'pcr' => 2106,
                'rtk_ag' => 2156,
                'state' => 'Terengganu',
            ),
            361 => 
            array (
                'date' => '2021-08-23',
                'pcr' => 4823,
                'rtk_ag' => 6198,
                'state' => 'W.P. Kuala Lumpur',
            ),
            362 => 
            array (
                'date' => '2021-08-23',
                'pcr' => 72,
                'rtk_ag' => 320,
                'state' => 'W.P. Labuan',
            ),
            363 => 
            array (
                'date' => '2021-08-23',
                'pcr' => 156,
                'rtk_ag' => 264,
                'state' => 'W.P. Putrajaya',
            ),
            364 => 
            array (
                'date' => '2021-08-24',
                'pcr' => 12666,
                'rtk_ag' => 11657,
                'state' => 'Johor',
            ),
            365 => 
            array (
                'date' => '2021-08-24',
                'pcr' => 4440,
                'rtk_ag' => 5444,
                'state' => 'Kedah',
            ),
            366 => 
            array (
                'date' => '2021-08-24',
                'pcr' => 2837,
                'rtk_ag' => 4334,
                'state' => 'Kelantan',
            ),
            367 => 
            array (
                'date' => '2021-08-24',
                'pcr' => 2137,
                'rtk_ag' => 1265,
                'state' => 'Melaka',
            ),
            368 => 
            array (
                'date' => '2021-08-24',
                'pcr' => 3279,
                'rtk_ag' => 2636,
                'state' => 'Negeri Sembilan',
            ),
            369 => 
            array (
                'date' => '2021-08-24',
                'pcr' => 6592,
                'rtk_ag' => 2757,
                'state' => 'Pahang',
            ),
            370 => 
            array (
                'date' => '2021-08-24',
                'pcr' => 4253,
                'rtk_ag' => 5172,
                'state' => 'Perak',
            ),
            371 => 
            array (
                'date' => '2021-08-24',
                'pcr' => 174,
                'rtk_ag' => 164,
                'state' => 'Perlis',
            ),
            372 => 
            array (
                'date' => '2021-08-24',
                'pcr' => 4777,
                'rtk_ag' => 10775,
                'state' => 'Pulau Pinang',
            ),
            373 => 
            array (
                'date' => '2021-08-24',
                'pcr' => 5072,
                'rtk_ag' => 7350,
                'state' => 'Sabah',
            ),
            374 => 
            array (
                'date' => '2021-08-24',
                'pcr' => 11303,
                'rtk_ag' => 2721,
                'state' => 'Sarawak',
            ),
            375 => 
            array (
                'date' => '2021-08-24',
                'pcr' => 16141,
                'rtk_ag' => 28652,
                'state' => 'Selangor',
            ),
            376 => 
            array (
                'date' => '2021-08-24',
                'pcr' => 3890,
                'rtk_ag' => 1814,
                'state' => 'Terengganu',
            ),
            377 => 
            array (
                'date' => '2021-08-24',
                'pcr' => 7813,
                'rtk_ag' => 6513,
                'state' => 'W.P. Kuala Lumpur',
            ),
            378 => 
            array (
                'date' => '2021-08-24',
                'pcr' => 298,
                'rtk_ag' => 197,
                'state' => 'W.P. Labuan',
            ),
            379 => 
            array (
                'date' => '2021-08-24',
                'pcr' => 222,
                'rtk_ag' => 177,
                'state' => 'W.P. Putrajaya',
            ),
            380 => 
            array (
                'date' => '2021-08-25',
                'pcr' => 12068,
                'rtk_ag' => 12850,
                'state' => 'Johor',
            ),
            381 => 
            array (
                'date' => '2021-08-25',
                'pcr' => 3728,
                'rtk_ag' => 5306,
                'state' => 'Kedah',
            ),
            382 => 
            array (
                'date' => '2021-08-25',
                'pcr' => 2830,
                'rtk_ag' => 4276,
                'state' => 'Kelantan',
            ),
            383 => 
            array (
                'date' => '2021-08-25',
                'pcr' => 1699,
                'rtk_ag' => 1953,
                'state' => 'Melaka',
            ),
            384 => 
            array (
                'date' => '2021-08-25',
                'pcr' => 1895,
                'rtk_ag' => 4338,
                'state' => 'Negeri Sembilan',
            ),
            385 => 
            array (
                'date' => '2021-08-25',
                'pcr' => 4466,
                'rtk_ag' => 2755,
                'state' => 'Pahang',
            ),
            386 => 
            array (
                'date' => '2021-08-25',
                'pcr' => 2973,
                'rtk_ag' => 6447,
                'state' => 'Perak',
            ),
            387 => 
            array (
                'date' => '2021-08-25',
                'pcr' => 187,
                'rtk_ag' => 169,
                'state' => 'Perlis',
            ),
            388 => 
            array (
                'date' => '2021-08-25',
                'pcr' => 4778,
                'rtk_ag' => 9877,
                'state' => 'Pulau Pinang',
            ),
            389 => 
            array (
                'date' => '2021-08-25',
                'pcr' => 5728,
                'rtk_ag' => 7252,
                'state' => 'Sabah',
            ),
            390 => 
            array (
                'date' => '2021-08-25',
                'pcr' => 10941,
                'rtk_ag' => 4009,
                'state' => 'Sarawak',
            ),
            391 => 
            array (
                'date' => '2021-08-25',
                'pcr' => 16204,
                'rtk_ag' => 23821,
                'state' => 'Selangor',
            ),
            392 => 
            array (
                'date' => '2021-08-25',
                'pcr' => 3155,
                'rtk_ag' => 1661,
                'state' => 'Terengganu',
            ),
            393 => 
            array (
                'date' => '2021-08-25',
                'pcr' => 7070,
                'rtk_ag' => 4775,
                'state' => 'W.P. Kuala Lumpur',
            ),
            394 => 
            array (
                'date' => '2021-08-25',
                'pcr' => 258,
                'rtk_ag' => 481,
                'state' => 'W.P. Labuan',
            ),
            395 => 
            array (
                'date' => '2021-08-25',
                'pcr' => 166,
                'rtk_ag' => 197,
                'state' => 'W.P. Putrajaya',
            ),
            396 => 
            array (
                'date' => '2021-08-26',
                'pcr' => 10552,
                'rtk_ag' => 12168,
                'state' => 'Johor',
            ),
            397 => 
            array (
                'date' => '2021-08-26',
                'pcr' => 4515,
                'rtk_ag' => 4261,
                'state' => 'Kedah',
            ),
            398 => 
            array (
                'date' => '2021-08-26',
                'pcr' => 2525,
                'rtk_ag' => 3359,
                'state' => 'Kelantan',
            ),
            399 => 
            array (
                'date' => '2021-08-26',
                'pcr' => 1706,
                'rtk_ag' => 1916,
                'state' => 'Melaka',
            ),
            400 => 
            array (
                'date' => '2021-08-26',
                'pcr' => 1608,
                'rtk_ag' => 2467,
                'state' => 'Negeri Sembilan',
            ),
            401 => 
            array (
                'date' => '2021-08-26',
                'pcr' => 5090,
                'rtk_ag' => 2745,
                'state' => 'Pahang',
            ),
            402 => 
            array (
                'date' => '2021-08-26',
                'pcr' => 4388,
                'rtk_ag' => 4301,
                'state' => 'Perak',
            ),
            403 => 
            array (
                'date' => '2021-08-26',
                'pcr' => 132,
                'rtk_ag' => 297,
                'state' => 'Perlis',
            ),
            404 => 
            array (
                'date' => '2021-08-26',
                'pcr' => 3717,
                'rtk_ag' => 10234,
                'state' => 'Pulau Pinang',
            ),
            405 => 
            array (
                'date' => '2021-08-26',
                'pcr' => 4996,
                'rtk_ag' => 7641,
                'state' => 'Sabah',
            ),
            406 => 
            array (
                'date' => '2021-08-26',
                'pcr' => 11209,
                'rtk_ag' => 3525,
                'state' => 'Sarawak',
            ),
            407 => 
            array (
                'date' => '2021-08-26',
                'pcr' => 12177,
                'rtk_ag' => 21864,
                'state' => 'Selangor',
            ),
            408 => 
            array (
                'date' => '2021-08-26',
                'pcr' => 3017,
                'rtk_ag' => 2122,
                'state' => 'Terengganu',
            ),
            409 => 
            array (
                'date' => '2021-08-26',
                'pcr' => 6606,
                'rtk_ag' => 4966,
                'state' => 'W.P. Kuala Lumpur',
            ),
            410 => 
            array (
                'date' => '2021-08-26',
                'pcr' => 233,
                'rtk_ag' => 293,
                'state' => 'W.P. Labuan',
            ),
            411 => 
            array (
                'date' => '2021-08-26',
                'pcr' => 264,
                'rtk_ag' => 185,
                'state' => 'W.P. Putrajaya',
            ),
            412 => 
            array (
                'date' => '2021-08-27',
                'pcr' => 10684,
                'rtk_ag' => 10439,
                'state' => 'Johor',
            ),
            413 => 
            array (
                'date' => '2021-08-27',
                'pcr' => 4171,
                'rtk_ag' => 4596,
                'state' => 'Kedah',
            ),
            414 => 
            array (
                'date' => '2021-08-27',
                'pcr' => 2858,
                'rtk_ag' => 2125,
                'state' => 'Kelantan',
            ),
            415 => 
            array (
                'date' => '2021-08-27',
                'pcr' => 2974,
                'rtk_ag' => 1864,
                'state' => 'Melaka',
            ),
            416 => 
            array (
                'date' => '2021-08-27',
                'pcr' => 1544,
                'rtk_ag' => 2996,
                'state' => 'Negeri Sembilan',
            ),
            417 => 
            array (
                'date' => '2021-08-27',
                'pcr' => 5166,
                'rtk_ag' => 2921,
                'state' => 'Pahang',
            ),
            418 => 
            array (
                'date' => '2021-08-27',
                'pcr' => 3410,
                'rtk_ag' => 5030,
                'state' => 'Perak',
            ),
            419 => 
            array (
                'date' => '2021-08-27',
                'pcr' => 194,
                'rtk_ag' => 175,
                'state' => 'Perlis',
            ),
            420 => 
            array (
                'date' => '2021-08-27',
                'pcr' => 4096,
                'rtk_ag' => 10226,
                'state' => 'Pulau Pinang',
            ),
            421 => 
            array (
                'date' => '2021-08-27',
                'pcr' => 5736,
                'rtk_ag' => 6964,
                'state' => 'Sabah',
            ),
            422 => 
            array (
                'date' => '2021-08-27',
                'pcr' => 12024,
                'rtk_ag' => 4323,
                'state' => 'Sarawak',
            ),
            423 => 
            array (
                'date' => '2021-08-27',
                'pcr' => 12672,
                'rtk_ag' => 21003,
                'state' => 'Selangor',
            ),
            424 => 
            array (
                'date' => '2021-08-27',
                'pcr' => 4148,
                'rtk_ag' => 1291,
                'state' => 'Terengganu',
            ),
            425 => 
            array (
                'date' => '2021-08-27',
                'pcr' => 4935,
                'rtk_ag' => 5129,
                'state' => 'W.P. Kuala Lumpur',
            ),
            426 => 
            array (
                'date' => '2021-08-27',
                'pcr' => 105,
                'rtk_ag' => 340,
                'state' => 'W.P. Labuan',
            ),
            427 => 
            array (
                'date' => '2021-08-27',
                'pcr' => 259,
                'rtk_ag' => 184,
                'state' => 'W.P. Putrajaya',
            ),
            428 => 
            array (
                'date' => '2021-08-28',
                'pcr' => 9866,
                'rtk_ag' => 10089,
                'state' => 'Johor',
            ),
            429 => 
            array (
                'date' => '2021-08-28',
                'pcr' => 3880,
                'rtk_ag' => 3840,
                'state' => 'Kedah',
            ),
            430 => 
            array (
                'date' => '2021-08-28',
                'pcr' => 2442,
                'rtk_ag' => 3000,
                'state' => 'Kelantan',
            ),
            431 => 
            array (
                'date' => '2021-08-28',
                'pcr' => 2006,
                'rtk_ag' => 1320,
                'state' => 'Melaka',
            ),
            432 => 
            array (
                'date' => '2021-08-28',
                'pcr' => 1608,
                'rtk_ag' => 2110,
                'state' => 'Negeri Sembilan',
            ),
            433 => 
            array (
                'date' => '2021-08-28',
                'pcr' => 4053,
                'rtk_ag' => 2216,
                'state' => 'Pahang',
            ),
            434 => 
            array (
                'date' => '2021-08-28',
                'pcr' => 3372,
                'rtk_ag' => 3356,
                'state' => 'Perak',
            ),
            435 => 
            array (
                'date' => '2021-08-28',
                'pcr' => 158,
                'rtk_ag' => 107,
                'state' => 'Perlis',
            ),
            436 => 
            array (
                'date' => '2021-08-28',
                'pcr' => 5057,
                'rtk_ag' => 7664,
                'state' => 'Pulau Pinang',
            ),
            437 => 
            array (
                'date' => '2021-08-28',
                'pcr' => 6201,
                'rtk_ag' => 5640,
                'state' => 'Sabah',
            ),
            438 => 
            array (
                'date' => '2021-08-28',
                'pcr' => 12368,
                'rtk_ag' => 4636,
                'state' => 'Sarawak',
            ),
            439 => 
            array (
                'date' => '2021-08-28',
                'pcr' => 11236,
                'rtk_ag' => 13930,
                'state' => 'Selangor',
            ),
            440 => 
            array (
                'date' => '2021-08-28',
                'pcr' => 3210,
                'rtk_ag' => 2324,
                'state' => 'Terengganu',
            ),
            441 => 
            array (
                'date' => '2021-08-28',
                'pcr' => 5265,
                'rtk_ag' => 3034,
                'state' => 'W.P. Kuala Lumpur',
            ),
            442 => 
            array (
                'date' => '2021-08-28',
                'pcr' => 128,
                'rtk_ag' => 389,
                'state' => 'W.P. Labuan',
            ),
            443 => 
            array (
                'date' => '2021-08-28',
                'pcr' => 246,
                'rtk_ag' => 53,
                'state' => 'W.P. Putrajaya',
            ),
            444 => 
            array (
                'date' => '2021-08-29',
                'pcr' => 8369,
                'rtk_ag' => 11579,
                'state' => 'Johor',
            ),
            445 => 
            array (
                'date' => '2021-08-29',
                'pcr' => 4392,
                'rtk_ag' => 4510,
                'state' => 'Kedah',
            ),
            446 => 
            array (
                'date' => '2021-08-29',
                'pcr' => 2221,
                'rtk_ag' => 2954,
                'state' => 'Kelantan',
            ),
            447 => 
            array (
                'date' => '2021-08-29',
                'pcr' => 1043,
                'rtk_ag' => 1013,
                'state' => 'Melaka',
            ),
            448 => 
            array (
                'date' => '2021-08-29',
                'pcr' => 829,
                'rtk_ag' => 1708,
                'state' => 'Negeri Sembilan',
            ),
            449 => 
            array (
                'date' => '2021-08-29',
                'pcr' => 4115,
                'rtk_ag' => 1664,
                'state' => 'Pahang',
            ),
            450 => 
            array (
                'date' => '2021-08-29',
                'pcr' => 2254,
                'rtk_ag' => 2892,
                'state' => 'Perak',
            ),
            451 => 
            array (
                'date' => '2021-08-29',
                'pcr' => 151,
                'rtk_ag' => 207,
                'state' => 'Perlis',
            ),
            452 => 
            array (
                'date' => '2021-08-29',
                'pcr' => 1659,
                'rtk_ag' => 4042,
                'state' => 'Pulau Pinang',
            ),
            453 => 
            array (
                'date' => '2021-08-29',
                'pcr' => 4386,
                'rtk_ag' => 4076,
                'state' => 'Sabah',
            ),
            454 => 
            array (
                'date' => '2021-08-29',
                'pcr' => 10662,
                'rtk_ag' => 3103,
                'state' => 'Sarawak',
            ),
            455 => 
            array (
                'date' => '2021-08-29',
                'pcr' => 7923,
                'rtk_ag' => 10402,
                'state' => 'Selangor',
            ),
            456 => 
            array (
                'date' => '2021-08-29',
                'pcr' => 3228,
                'rtk_ag' => 3340,
                'state' => 'Terengganu',
            ),
            457 => 
            array (
                'date' => '2021-08-29',
                'pcr' => 2618,
                'rtk_ag' => 2758,
                'state' => 'W.P. Kuala Lumpur',
            ),
            458 => 
            array (
                'date' => '2021-08-29',
                'pcr' => 199,
                'rtk_ag' => 144,
                'state' => 'W.P. Labuan',
            ),
            459 => 
            array (
                'date' => '2021-08-29',
                'pcr' => 181,
                'rtk_ag' => 70,
                'state' => 'W.P. Putrajaya',
            ),
            460 => 
            array (
                'date' => '2021-08-30',
                'pcr' => 8582,
                'rtk_ag' => 12963,
                'state' => 'Johor',
            ),
            461 => 
            array (
                'date' => '2021-08-30',
                'pcr' => 4073,
                'rtk_ag' => 5009,
                'state' => 'Kedah',
            ),
            462 => 
            array (
                'date' => '2021-08-30',
                'pcr' => 3276,
                'rtk_ag' => 2931,
                'state' => 'Kelantan',
            ),
            463 => 
            array (
                'date' => '2021-08-30',
                'pcr' => 1557,
                'rtk_ag' => 2578,
                'state' => 'Melaka',
            ),
            464 => 
            array (
                'date' => '2021-08-30',
                'pcr' => 1282,
                'rtk_ag' => 4170,
                'state' => 'Negeri Sembilan',
            ),
            465 => 
            array (
                'date' => '2021-08-30',
                'pcr' => 4790,
                'rtk_ag' => 3181,
                'state' => 'Pahang',
            ),
            466 => 
            array (
                'date' => '2021-08-30',
                'pcr' => 2026,
                'rtk_ag' => 4711,
                'state' => 'Perak',
            ),
            467 => 
            array (
                'date' => '2021-08-30',
                'pcr' => 89,
                'rtk_ag' => 196,
                'state' => 'Perlis',
            ),
            468 => 
            array (
                'date' => '2021-08-30',
                'pcr' => 2800,
                'rtk_ag' => 8502,
                'state' => 'Pulau Pinang',
            ),
            469 => 
            array (
                'date' => '2021-08-30',
                'pcr' => 3218,
                'rtk_ag' => 8133,
                'state' => 'Sabah',
            ),
            470 => 
            array (
                'date' => '2021-08-30',
                'pcr' => 10830,
                'rtk_ag' => 7149,
                'state' => 'Sarawak',
            ),
            471 => 
            array (
                'date' => '2021-08-30',
                'pcr' => 11085,
                'rtk_ag' => 24784,
                'state' => 'Selangor',
            ),
            472 => 
            array (
                'date' => '2021-08-30',
                'pcr' => 2705,
                'rtk_ag' => 2724,
                'state' => 'Terengganu',
            ),
            473 => 
            array (
                'date' => '2021-08-30',
                'pcr' => 6225,
                'rtk_ag' => 5874,
                'state' => 'W.P. Kuala Lumpur',
            ),
            474 => 
            array (
                'date' => '2021-08-30',
                'pcr' => 120,
                'rtk_ag' => 338,
                'state' => 'W.P. Labuan',
            ),
            475 => 
            array (
                'date' => '2021-08-30',
                'pcr' => 235,
                'rtk_ag' => 271,
                'state' => 'W.P. Putrajaya',
            ),
            476 => 
            array (
                'date' => '2021-08-31',
                'pcr' => 10228,
                'rtk_ag' => 8119,
                'state' => 'Johor',
            ),
            477 => 
            array (
                'date' => '2021-08-31',
                'pcr' => 3642,
                'rtk_ag' => 2535,
                'state' => 'Kedah',
            ),
            478 => 
            array (
                'date' => '2021-08-31',
                'pcr' => 3012,
                'rtk_ag' => 1832,
                'state' => 'Kelantan',
            ),
            479 => 
            array (
                'date' => '2021-08-31',
                'pcr' => 1179,
                'rtk_ag' => 2707,
                'state' => 'Melaka',
            ),
            480 => 
            array (
                'date' => '2021-08-31',
                'pcr' => 1555,
                'rtk_ag' => 1608,
                'state' => 'Negeri Sembilan',
            ),
            481 => 
            array (
                'date' => '2021-08-31',
                'pcr' => 3105,
                'rtk_ag' => 1267,
                'state' => 'Pahang',
            ),
            482 => 
            array (
                'date' => '2021-08-31',
                'pcr' => 2657,
                'rtk_ag' => 2287,
                'state' => 'Perak',
            ),
            483 => 
            array (
                'date' => '2021-08-31',
                'pcr' => 248,
                'rtk_ag' => 148,
                'state' => 'Perlis',
            ),
            484 => 
            array (
                'date' => '2021-08-31',
                'pcr' => 3990,
                'rtk_ag' => 6086,
                'state' => 'Pulau Pinang',
            ),
            485 => 
            array (
                'date' => '2021-08-31',
                'pcr' => 4335,
                'rtk_ag' => 4157,
                'state' => 'Sabah',
            ),
            486 => 
            array (
                'date' => '2021-08-31',
                'pcr' => 11107,
                'rtk_ag' => 4493,
                'state' => 'Sarawak',
            ),
            487 => 
            array (
                'date' => '2021-08-31',
                'pcr' => 14598,
                'rtk_ag' => 16278,
                'state' => 'Selangor',
            ),
            488 => 
            array (
                'date' => '2021-08-31',
                'pcr' => 3094,
                'rtk_ag' => 1345,
                'state' => 'Terengganu',
            ),
            489 => 
            array (
                'date' => '2021-08-31',
                'pcr' => 3960,
                'rtk_ag' => 2461,
                'state' => 'W.P. Kuala Lumpur',
            ),
            490 => 
            array (
                'date' => '2021-08-31',
                'pcr' => 259,
                'rtk_ag' => 170,
                'state' => 'W.P. Labuan',
            ),
            491 => 
            array (
                'date' => '2021-08-31',
                'pcr' => 156,
                'rtk_ag' => 80,
                'state' => 'W.P. Putrajaya',
            ),
            492 => 
            array (
                'date' => '2021-09-01',
                'pcr' => 11222,
                'rtk_ag' => 13669,
                'state' => 'Johor',
            ),
            493 => 
            array (
                'date' => '2021-09-01',
                'pcr' => 5018,
                'rtk_ag' => 5042,
                'state' => 'Kedah',
            ),
            494 => 
            array (
                'date' => '2021-09-01',
                'pcr' => 1938,
                'rtk_ag' => 2354,
                'state' => 'Kelantan',
            ),
            495 => 
            array (
                'date' => '2021-09-01',
                'pcr' => 2051,
                'rtk_ag' => 2583,
                'state' => 'Melaka',
            ),
            496 => 
            array (
                'date' => '2021-09-01',
                'pcr' => 1397,
                'rtk_ag' => 3167,
                'state' => 'Negeri Sembilan',
            ),
            497 => 
            array (
                'date' => '2021-09-01',
                'pcr' => 4422,
                'rtk_ag' => 3142,
                'state' => 'Pahang',
            ),
            498 => 
            array (
                'date' => '2021-09-01',
                'pcr' => 2451,
                'rtk_ag' => 5035,
                'state' => 'Perak',
            ),
            499 => 
            array (
                'date' => '2021-09-01',
                'pcr' => 143,
                'rtk_ag' => 187,
                'state' => 'Perlis',
            ),
        ));
        \DB::table('test_states')->insert(array (
            0 => 
            array (
                'date' => '2021-09-01',
                'pcr' => 2596,
                'rtk_ag' => 9028,
                'state' => 'Pulau Pinang',
            ),
            1 => 
            array (
                'date' => '2021-09-01',
                'pcr' => 3575,
                'rtk_ag' => 7068,
                'state' => 'Sabah',
            ),
            2 => 
            array (
                'date' => '2021-09-01',
                'pcr' => 12457,
                'rtk_ag' => 7236,
                'state' => 'Sarawak',
            ),
            3 => 
            array (
                'date' => '2021-09-01',
                'pcr' => 11435,
                'rtk_ag' => 27504,
                'state' => 'Selangor',
            ),
            4 => 
            array (
                'date' => '2021-09-01',
                'pcr' => 4931,
                'rtk_ag' => 1992,
                'state' => 'Terengganu',
            ),
            5 => 
            array (
                'date' => '2021-09-01',
                'pcr' => 4951,
                'rtk_ag' => 7549,
                'state' => 'W.P. Kuala Lumpur',
            ),
            6 => 
            array (
                'date' => '2021-09-01',
                'pcr' => 212,
                'rtk_ag' => 360,
                'state' => 'W.P. Labuan',
            ),
            7 => 
            array (
                'date' => '2021-09-01',
                'pcr' => 244,
                'rtk_ag' => 267,
                'state' => 'W.P. Putrajaya',
            ),
            8 => 
            array (
                'date' => '2021-09-02',
                'pcr' => 11264,
                'rtk_ag' => 14621,
                'state' => 'Johor',
            ),
            9 => 
            array (
                'date' => '2021-09-02',
                'pcr' => 3353,
                'rtk_ag' => 4880,
                'state' => 'Kedah',
            ),
            10 => 
            array (
                'date' => '2021-09-02',
                'pcr' => 2753,
                'rtk_ag' => 2420,
                'state' => 'Kelantan',
            ),
            11 => 
            array (
                'date' => '2021-09-02',
                'pcr' => 1531,
                'rtk_ag' => 3468,
                'state' => 'Melaka',
            ),
            12 => 
            array (
                'date' => '2021-09-02',
                'pcr' => 2140,
                'rtk_ag' => 2952,
                'state' => 'Negeri Sembilan',
            ),
            13 => 
            array (
                'date' => '2021-09-02',
                'pcr' => 3949,
                'rtk_ag' => 2495,
                'state' => 'Pahang',
            ),
            14 => 
            array (
                'date' => '2021-09-02',
                'pcr' => 3035,
                'rtk_ag' => 5133,
                'state' => 'Perak',
            ),
            15 => 
            array (
                'date' => '2021-09-02',
                'pcr' => 163,
                'rtk_ag' => 221,
                'state' => 'Perlis',
            ),
            16 => 
            array (
                'date' => '2021-09-02',
                'pcr' => 4257,
                'rtk_ag' => 9078,
                'state' => 'Pulau Pinang',
            ),
            17 => 
            array (
                'date' => '2021-09-02',
                'pcr' => 3858,
                'rtk_ag' => 6986,
                'state' => 'Sabah',
            ),
            18 => 
            array (
                'date' => '2021-09-02',
                'pcr' => 12328,
                'rtk_ag' => 8606,
                'state' => 'Sarawak',
            ),
            19 => 
            array (
                'date' => '2021-09-02',
                'pcr' => 13185,
                'rtk_ag' => 20690,
                'state' => 'Selangor',
            ),
            20 => 
            array (
                'date' => '2021-09-02',
                'pcr' => 3248,
                'rtk_ag' => 2414,
                'state' => 'Terengganu',
            ),
            21 => 
            array (
                'date' => '2021-09-02',
                'pcr' => 4649,
                'rtk_ag' => 5646,
                'state' => 'W.P. Kuala Lumpur',
            ),
            22 => 
            array (
                'date' => '2021-09-02',
                'pcr' => 128,
                'rtk_ag' => 439,
                'state' => 'W.P. Labuan',
            ),
            23 => 
            array (
                'date' => '2021-09-02',
                'pcr' => 194,
                'rtk_ag' => 183,
                'state' => 'W.P. Putrajaya',
            ),
            24 => 
            array (
                'date' => '2021-09-03',
                'pcr' => 10373,
                'rtk_ag' => 9488,
                'state' => 'Johor',
            ),
            25 => 
            array (
                'date' => '2021-09-03',
                'pcr' => 3522,
                'rtk_ag' => 3879,
                'state' => 'Kedah',
            ),
            26 => 
            array (
                'date' => '2021-09-03',
                'pcr' => 3043,
                'rtk_ag' => 1687,
                'state' => 'Kelantan',
            ),
            27 => 
            array (
                'date' => '2021-09-03',
                'pcr' => 1420,
                'rtk_ag' => 1845,
                'state' => 'Melaka',
            ),
            28 => 
            array (
                'date' => '2021-09-03',
                'pcr' => 1212,
                'rtk_ag' => 2093,
                'state' => 'Negeri Sembilan',
            ),
            29 => 
            array (
                'date' => '2021-09-03',
                'pcr' => 3720,
                'rtk_ag' => 3462,
                'state' => 'Pahang',
            ),
            30 => 
            array (
                'date' => '2021-09-03',
                'pcr' => 2613,
                'rtk_ag' => 4518,
                'state' => 'Perak',
            ),
            31 => 
            array (
                'date' => '2021-09-03',
                'pcr' => 171,
                'rtk_ag' => 208,
                'state' => 'Perlis',
            ),
            32 => 
            array (
                'date' => '2021-09-03',
                'pcr' => 4005,
                'rtk_ag' => 9049,
                'state' => 'Pulau Pinang',
            ),
            33 => 
            array (
                'date' => '2021-09-03',
                'pcr' => 2999,
                'rtk_ag' => 5689,
                'state' => 'Sabah',
            ),
            34 => 
            array (
                'date' => '2021-09-03',
                'pcr' => 16581,
                'rtk_ag' => 8189,
                'state' => 'Sarawak',
            ),
            35 => 
            array (
                'date' => '2021-09-03',
                'pcr' => 10703,
                'rtk_ag' => 20807,
                'state' => 'Selangor',
            ),
            36 => 
            array (
                'date' => '2021-09-03',
                'pcr' => 3878,
                'rtk_ag' => 1217,
                'state' => 'Terengganu',
            ),
            37 => 
            array (
                'date' => '2021-09-03',
                'pcr' => 5099,
                'rtk_ag' => 5233,
                'state' => 'W.P. Kuala Lumpur',
            ),
            38 => 
            array (
                'date' => '2021-09-03',
                'pcr' => 212,
                'rtk_ag' => 222,
                'state' => 'W.P. Labuan',
            ),
            39 => 
            array (
                'date' => '2021-09-03',
                'pcr' => 214,
                'rtk_ag' => 159,
                'state' => 'W.P. Putrajaya',
            ),
            40 => 
            array (
                'date' => '2021-09-04',
                'pcr' => 9927,
                'rtk_ag' => 9687,
                'state' => 'Johor',
            ),
            41 => 
            array (
                'date' => '2021-09-04',
                'pcr' => 3842,
                'rtk_ag' => 3489,
                'state' => 'Kedah',
            ),
            42 => 
            array (
                'date' => '2021-09-04',
                'pcr' => 1883,
                'rtk_ag' => 2102,
                'state' => 'Kelantan',
            ),
            43 => 
            array (
                'date' => '2021-09-04',
                'pcr' => 1638,
                'rtk_ag' => 4766,
                'state' => 'Melaka',
            ),
            44 => 
            array (
                'date' => '2021-09-04',
                'pcr' => 1471,
                'rtk_ag' => 1071,
                'state' => 'Negeri Sembilan',
            ),
            45 => 
            array (
                'date' => '2021-09-04',
                'pcr' => 3360,
                'rtk_ag' => 2170,
                'state' => 'Pahang',
            ),
            46 => 
            array (
                'date' => '2021-09-04',
                'pcr' => 2662,
                'rtk_ag' => 4414,
                'state' => 'Perak',
            ),
            47 => 
            array (
                'date' => '2021-09-04',
                'pcr' => 188,
                'rtk_ag' => 182,
                'state' => 'Perlis',
            ),
            48 => 
            array (
                'date' => '2021-09-04',
                'pcr' => 4228,
                'rtk_ag' => 6476,
                'state' => 'Pulau Pinang',
            ),
            49 => 
            array (
                'date' => '2021-09-04',
                'pcr' => 4936,
                'rtk_ag' => 4009,
                'state' => 'Sabah',
            ),
            50 => 
            array (
                'date' => '2021-09-04',
                'pcr' => 15066,
                'rtk_ag' => 6701,
                'state' => 'Sarawak',
            ),
            51 => 
            array (
                'date' => '2021-09-04',
                'pcr' => 10731,
                'rtk_ag' => 13035,
                'state' => 'Selangor',
            ),
            52 => 
            array (
                'date' => '2021-09-04',
                'pcr' => 3543,
                'rtk_ag' => 2548,
                'state' => 'Terengganu',
            ),
            53 => 
            array (
                'date' => '2021-09-04',
                'pcr' => 4970,
                'rtk_ag' => 3022,
                'state' => 'W.P. Kuala Lumpur',
            ),
            54 => 
            array (
                'date' => '2021-09-04',
                'pcr' => 272,
                'rtk_ag' => 347,
                'state' => 'W.P. Labuan',
            ),
            55 => 
            array (
                'date' => '2021-09-04',
                'pcr' => 246,
                'rtk_ag' => 66,
                'state' => 'W.P. Putrajaya',
            ),
            56 => 
            array (
                'date' => '2021-09-05',
                'pcr' => 7920,
                'rtk_ag' => 10679,
                'state' => 'Johor',
            ),
            57 => 
            array (
                'date' => '2021-09-05',
                'pcr' => 3220,
                'rtk_ag' => 4154,
                'state' => 'Kedah',
            ),
            58 => 
            array (
                'date' => '2021-09-05',
                'pcr' => 2283,
                'rtk_ag' => 2336,
                'state' => 'Kelantan',
            ),
            59 => 
            array (
                'date' => '2021-09-05',
                'pcr' => 1642,
                'rtk_ag' => 1498,
                'state' => 'Melaka',
            ),
            60 => 
            array (
                'date' => '2021-09-05',
                'pcr' => 1042,
                'rtk_ag' => 1026,
                'state' => 'Negeri Sembilan',
            ),
            61 => 
            array (
                'date' => '2021-09-05',
                'pcr' => 3398,
                'rtk_ag' => 2287,
                'state' => 'Pahang',
            ),
            62 => 
            array (
                'date' => '2021-09-05',
                'pcr' => 2016,
                'rtk_ag' => 3482,
                'state' => 'Perak',
            ),
            63 => 
            array (
                'date' => '2021-09-05',
                'pcr' => 119,
                'rtk_ag' => 190,
                'state' => 'Perlis',
            ),
            64 => 
            array (
                'date' => '2021-09-05',
                'pcr' => 1982,
                'rtk_ag' => 3514,
                'state' => 'Pulau Pinang',
            ),
            65 => 
            array (
                'date' => '2021-09-05',
                'pcr' => 2770,
                'rtk_ag' => 4082,
                'state' => 'Sabah',
            ),
            66 => 
            array (
                'date' => '2021-09-05',
                'pcr' => 14786,
                'rtk_ag' => 5877,
                'state' => 'Sarawak',
            ),
            67 => 
            array (
                'date' => '2021-09-05',
                'pcr' => 7159,
                'rtk_ag' => 11632,
                'state' => 'Selangor',
            ),
            68 => 
            array (
                'date' => '2021-09-05',
                'pcr' => 2670,
                'rtk_ag' => 2776,
                'state' => 'Terengganu',
            ),
            69 => 
            array (
                'date' => '2021-09-05',
                'pcr' => 2954,
                'rtk_ag' => 2151,
                'state' => 'W.P. Kuala Lumpur',
            ),
            70 => 
            array (
                'date' => '2021-09-05',
                'pcr' => 281,
                'rtk_ag' => 252,
                'state' => 'W.P. Labuan',
            ),
            71 => 
            array (
                'date' => '2021-09-05',
                'pcr' => 242,
                'rtk_ag' => 77,
                'state' => 'W.P. Putrajaya',
            ),
            72 => 
            array (
                'date' => '2021-09-06',
                'pcr' => 9266,
                'rtk_ag' => 13736,
                'state' => 'Johor',
            ),
            73 => 
            array (
                'date' => '2021-09-06',
                'pcr' => 3141,
                'rtk_ag' => 4943,
                'state' => 'Kedah',
            ),
            74 => 
            array (
                'date' => '2021-09-06',
                'pcr' => 3068,
                'rtk_ag' => 1983,
                'state' => 'Kelantan',
            ),
            75 => 
            array (
                'date' => '2021-09-06',
                'pcr' => 1191,
                'rtk_ag' => 2914,
                'state' => 'Melaka',
            ),
            76 => 
            array (
                'date' => '2021-09-06',
                'pcr' => 1141,
                'rtk_ag' => 3774,
                'state' => 'Negeri Sembilan',
            ),
            77 => 
            array (
                'date' => '2021-09-06',
                'pcr' => 5142,
                'rtk_ag' => 3950,
                'state' => 'Pahang',
            ),
            78 => 
            array (
                'date' => '2021-09-06',
                'pcr' => 1825,
                'rtk_ag' => 5546,
                'state' => 'Perak',
            ),
            79 => 
            array (
                'date' => '2021-09-06',
                'pcr' => 80,
                'rtk_ag' => 191,
                'state' => 'Perlis',
            ),
            80 => 
            array (
                'date' => '2021-09-06',
                'pcr' => 3050,
                'rtk_ag' => 6919,
                'state' => 'Pulau Pinang',
            ),
            81 => 
            array (
                'date' => '2021-09-06',
                'pcr' => 2321,
                'rtk_ag' => 6815,
                'state' => 'Sabah',
            ),
            82 => 
            array (
                'date' => '2021-09-06',
                'pcr' => 16978,
                'rtk_ag' => 8914,
                'state' => 'Sarawak',
            ),
            83 => 
            array (
                'date' => '2021-09-06',
                'pcr' => 9248,
                'rtk_ag' => 27592,
                'state' => 'Selangor',
            ),
            84 => 
            array (
                'date' => '2021-09-06',
                'pcr' => 2309,
                'rtk_ag' => 2707,
                'state' => 'Terengganu',
            ),
            85 => 
            array (
                'date' => '2021-09-06',
                'pcr' => 6313,
                'rtk_ag' => 6271,
                'state' => 'W.P. Kuala Lumpur',
            ),
            86 => 
            array (
                'date' => '2021-09-06',
                'pcr' => 176,
                'rtk_ag' => 400,
                'state' => 'W.P. Labuan',
            ),
            87 => 
            array (
                'date' => '2021-09-06',
                'pcr' => 153,
                'rtk_ag' => 262,
                'state' => 'W.P. Putrajaya',
            ),
            88 => 
            array (
                'date' => '2021-09-07',
                'pcr' => 11668,
                'rtk_ag' => 13154,
                'state' => 'Johor',
            ),
            89 => 
            array (
                'date' => '2021-09-07',
                'pcr' => 3714,
                'rtk_ag' => 4780,
                'state' => 'Kedah',
            ),
            90 => 
            array (
                'date' => '2021-09-07',
                'pcr' => 2670,
                'rtk_ag' => 1909,
                'state' => 'Kelantan',
            ),
            91 => 
            array (
                'date' => '2021-09-07',
                'pcr' => 2049,
                'rtk_ag' => 2271,
                'state' => 'Melaka',
            ),
            92 => 
            array (
                'date' => '2021-09-07',
                'pcr' => 2328,
                'rtk_ag' => 4369,
                'state' => 'Negeri Sembilan',
            ),
            93 => 
            array (
                'date' => '2021-09-07',
                'pcr' => 3584,
                'rtk_ag' => 2343,
                'state' => 'Pahang',
            ),
            94 => 
            array (
                'date' => '2021-09-07',
                'pcr' => 2918,
                'rtk_ag' => 5224,
                'state' => 'Perak',
            ),
            95 => 
            array (
                'date' => '2021-09-07',
                'pcr' => 186,
                'rtk_ag' => 274,
                'state' => 'Perlis',
            ),
            96 => 
            array (
                'date' => '2021-09-07',
                'pcr' => 4371,
                'rtk_ag' => 8624,
                'state' => 'Pulau Pinang',
            ),
            97 => 
            array (
                'date' => '2021-09-07',
                'pcr' => 3217,
                'rtk_ag' => 6777,
                'state' => 'Sabah',
            ),
            98 => 
            array (
                'date' => '2021-09-07',
                'pcr' => 14253,
                'rtk_ag' => 8820,
                'state' => 'Sarawak',
            ),
            99 => 
            array (
                'date' => '2021-09-07',
                'pcr' => 14261,
                'rtk_ag' => 22944,
                'state' => 'Selangor',
            ),
            100 => 
            array (
                'date' => '2021-09-07',
                'pcr' => 4232,
                'rtk_ag' => 2120,
                'state' => 'Terengganu',
            ),
            101 => 
            array (
                'date' => '2021-09-07',
                'pcr' => 5165,
                'rtk_ag' => 5209,
                'state' => 'W.P. Kuala Lumpur',
            ),
            102 => 
            array (
                'date' => '2021-09-07',
                'pcr' => 278,
                'rtk_ag' => 402,
                'state' => 'W.P. Labuan',
            ),
            103 => 
            array (
                'date' => '2021-09-07',
                'pcr' => 226,
                'rtk_ag' => 212,
                'state' => 'W.P. Putrajaya',
            ),
            104 => 
            array (
                'date' => '2021-09-08',
                'pcr' => 10283,
                'rtk_ag' => 12220,
                'state' => 'Johor',
            ),
            105 => 
            array (
                'date' => '2021-09-08',
                'pcr' => 3594,
                'rtk_ag' => 5018,
                'state' => 'Kedah',
            ),
            106 => 
            array (
                'date' => '2021-09-08',
                'pcr' => 2891,
                'rtk_ag' => 1858,
                'state' => 'Kelantan',
            ),
            107 => 
            array (
                'date' => '2021-09-08',
                'pcr' => 2112,
                'rtk_ag' => 1896,
                'state' => 'Melaka',
            ),
            108 => 
            array (
                'date' => '2021-09-08',
                'pcr' => 1285,
                'rtk_ag' => 2726,
                'state' => 'Negeri Sembilan',
            ),
            109 => 
            array (
                'date' => '2021-09-08',
                'pcr' => 5143,
                'rtk_ag' => 2296,
                'state' => 'Pahang',
            ),
            110 => 
            array (
                'date' => '2021-09-08',
                'pcr' => 3092,
                'rtk_ag' => 5302,
                'state' => 'Perak',
            ),
            111 => 
            array (
                'date' => '2021-09-08',
                'pcr' => 255,
                'rtk_ag' => 217,
                'state' => 'Perlis',
            ),
            112 => 
            array (
                'date' => '2021-09-08',
                'pcr' => 3988,
                'rtk_ag' => 8307,
                'state' => 'Pulau Pinang',
            ),
            113 => 
            array (
                'date' => '2021-09-08',
                'pcr' => 3552,
                'rtk_ag' => 6407,
                'state' => 'Sabah',
            ),
            114 => 
            array (
                'date' => '2021-09-08',
                'pcr' => 12211,
                'rtk_ag' => 9042,
                'state' => 'Sarawak',
            ),
            115 => 
            array (
                'date' => '2021-09-08',
                'pcr' => 13087,
                'rtk_ag' => 23080,
                'state' => 'Selangor',
            ),
            116 => 
            array (
                'date' => '2021-09-08',
                'pcr' => 4072,
                'rtk_ag' => 2222,
                'state' => 'Terengganu',
            ),
            117 => 
            array (
                'date' => '2021-09-08',
                'pcr' => 5135,
                'rtk_ag' => 4330,
                'state' => 'W.P. Kuala Lumpur',
            ),
            118 => 
            array (
                'date' => '2021-09-08',
                'pcr' => 169,
                'rtk_ag' => 482,
                'state' => 'W.P. Labuan',
            ),
            119 => 
            array (
                'date' => '2021-09-08',
                'pcr' => 184,
                'rtk_ag' => 293,
                'state' => 'W.P. Putrajaya',
            ),
            120 => 
            array (
                'date' => '2021-09-09',
                'pcr' => 9469,
                'rtk_ag' => 11204,
                'state' => 'Johor',
            ),
            121 => 
            array (
                'date' => '2021-09-09',
                'pcr' => 3193,
                'rtk_ag' => 3965,
                'state' => 'Kedah',
            ),
            122 => 
            array (
                'date' => '2021-09-09',
                'pcr' => 3067,
                'rtk_ag' => 1841,
                'state' => 'Kelantan',
            ),
            123 => 
            array (
                'date' => '2021-09-09',
                'pcr' => 1469,
                'rtk_ag' => 2059,
                'state' => 'Melaka',
            ),
            124 => 
            array (
                'date' => '2021-09-09',
                'pcr' => 1717,
                'rtk_ag' => 2343,
                'state' => 'Negeri Sembilan',
            ),
            125 => 
            array (
                'date' => '2021-09-09',
                'pcr' => 4622,
                'rtk_ag' => 3315,
                'state' => 'Pahang',
            ),
            126 => 
            array (
                'date' => '2021-09-09',
                'pcr' => 2448,
                'rtk_ag' => 4814,
                'state' => 'Perak',
            ),
            127 => 
            array (
                'date' => '2021-09-09',
                'pcr' => 191,
                'rtk_ag' => 235,
                'state' => 'Perlis',
            ),
            128 => 
            array (
                'date' => '2021-09-09',
                'pcr' => 3229,
                'rtk_ag' => 7790,
                'state' => 'Pulau Pinang',
            ),
            129 => 
            array (
                'date' => '2021-09-09',
                'pcr' => 2771,
                'rtk_ag' => 5746,
                'state' => 'Sabah',
            ),
            130 => 
            array (
                'date' => '2021-09-09',
                'pcr' => 16037,
                'rtk_ag' => 8120,
                'state' => 'Sarawak',
            ),
            131 => 
            array (
                'date' => '2021-09-09',
                'pcr' => 9960,
                'rtk_ag' => 18011,
                'state' => 'Selangor',
            ),
            132 => 
            array (
                'date' => '2021-09-09',
                'pcr' => 3195,
                'rtk_ag' => 2574,
                'state' => 'Terengganu',
            ),
            133 => 
            array (
                'date' => '2021-09-09',
                'pcr' => 4817,
                'rtk_ag' => 4410,
                'state' => 'W.P. Kuala Lumpur',
            ),
            134 => 
            array (
                'date' => '2021-09-09',
                'pcr' => 279,
                'rtk_ag' => 635,
                'state' => 'W.P. Labuan',
            ),
            135 => 
            array (
                'date' => '2021-09-09',
                'pcr' => 198,
                'rtk_ag' => 197,
                'state' => 'W.P. Putrajaya',
            ),
            136 => 
            array (
                'date' => '2021-09-10',
                'pcr' => 9002,
                'rtk_ag' => 8928,
                'state' => 'Johor',
            ),
            137 => 
            array (
                'date' => '2021-09-10',
                'pcr' => 2882,
                'rtk_ag' => 3103,
                'state' => 'Kedah',
            ),
            138 => 
            array (
                'date' => '2021-09-10',
                'pcr' => 3220,
                'rtk_ag' => 1199,
                'state' => 'Kelantan',
            ),
            139 => 
            array (
                'date' => '2021-09-10',
                'pcr' => 1716,
                'rtk_ag' => 1471,
                'state' => 'Melaka',
            ),
            140 => 
            array (
                'date' => '2021-09-10',
                'pcr' => 1088,
                'rtk_ag' => 2913,
                'state' => 'Negeri Sembilan',
            ),
            141 => 
            array (
                'date' => '2021-09-10',
                'pcr' => 3515,
                'rtk_ag' => 2867,
                'state' => 'Pahang',
            ),
            142 => 
            array (
                'date' => '2021-09-10',
                'pcr' => 2645,
                'rtk_ag' => 5128,
                'state' => 'Perak',
            ),
            143 => 
            array (
                'date' => '2021-09-10',
                'pcr' => 159,
                'rtk_ag' => 264,
                'state' => 'Perlis',
            ),
            144 => 
            array (
                'date' => '2021-09-10',
                'pcr' => 2965,
                'rtk_ag' => 7735,
                'state' => 'Pulau Pinang',
            ),
            145 => 
            array (
                'date' => '2021-09-10',
                'pcr' => 3183,
                'rtk_ag' => 5448,
                'state' => 'Sabah',
            ),
            146 => 
            array (
                'date' => '2021-09-10',
                'pcr' => 11940,
                'rtk_ag' => 8109,
                'state' => 'Sarawak',
            ),
            147 => 
            array (
                'date' => '2021-09-10',
                'pcr' => 11528,
                'rtk_ag' => 16400,
                'state' => 'Selangor',
            ),
            148 => 
            array (
                'date' => '2021-09-10',
                'pcr' => 4633,
                'rtk_ag' => 1480,
                'state' => 'Terengganu',
            ),
            149 => 
            array (
                'date' => '2021-09-10',
                'pcr' => 3505,
                'rtk_ag' => 4247,
                'state' => 'W.P. Kuala Lumpur',
            ),
            150 => 
            array (
                'date' => '2021-09-10',
                'pcr' => 221,
                'rtk_ag' => 263,
                'state' => 'W.P. Labuan',
            ),
            151 => 
            array (
                'date' => '2021-09-10',
                'pcr' => 288,
                'rtk_ag' => 176,
                'state' => 'W.P. Putrajaya',
            ),
            152 => 
            array (
                'date' => '2021-09-11',
                'pcr' => 9277,
                'rtk_ag' => 9588,
                'state' => 'Johor',
            ),
            153 => 
            array (
                'date' => '2021-09-11',
                'pcr' => 2848,
                'rtk_ag' => 3000,
                'state' => 'Kedah',
            ),
            154 => 
            array (
                'date' => '2021-09-11',
                'pcr' => 2186,
                'rtk_ag' => 1845,
                'state' => 'Kelantan',
            ),
            155 => 
            array (
                'date' => '2021-09-11',
                'pcr' => 1509,
                'rtk_ag' => 1133,
                'state' => 'Melaka',
            ),
            156 => 
            array (
                'date' => '2021-09-11',
                'pcr' => 1121,
                'rtk_ag' => 1961,
                'state' => 'Negeri Sembilan',
            ),
            157 => 
            array (
                'date' => '2021-09-11',
                'pcr' => 3633,
                'rtk_ag' => 2380,
                'state' => 'Pahang',
            ),
            158 => 
            array (
                'date' => '2021-09-11',
                'pcr' => 2366,
                'rtk_ag' => 4546,
                'state' => 'Perak',
            ),
            159 => 
            array (
                'date' => '2021-09-11',
                'pcr' => 200,
                'rtk_ag' => 146,
                'state' => 'Perlis',
            ),
            160 => 
            array (
                'date' => '2021-09-11',
                'pcr' => 4327,
                'rtk_ag' => 5653,
                'state' => 'Pulau Pinang',
            ),
            161 => 
            array (
                'date' => '2021-09-11',
                'pcr' => 3571,
                'rtk_ag' => 3943,
                'state' => 'Sabah',
            ),
            162 => 
            array (
                'date' => '2021-09-11',
                'pcr' => 17906,
                'rtk_ag' => 6748,
                'state' => 'Sarawak',
            ),
            163 => 
            array (
                'date' => '2021-09-11',
                'pcr' => 9564,
                'rtk_ag' => 11506,
                'state' => 'Selangor',
            ),
            164 => 
            array (
                'date' => '2021-09-11',
                'pcr' => 2848,
                'rtk_ag' => 2852,
                'state' => 'Terengganu',
            ),
            165 => 
            array (
                'date' => '2021-09-11',
                'pcr' => 3906,
                'rtk_ag' => 2649,
                'state' => 'W.P. Kuala Lumpur',
            ),
            166 => 
            array (
                'date' => '2021-09-11',
                'pcr' => 344,
                'rtk_ag' => 473,
                'state' => 'W.P. Labuan',
            ),
            167 => 
            array (
                'date' => '2021-09-11',
                'pcr' => 549,
                'rtk_ag' => 70,
                'state' => 'W.P. Putrajaya',
            ),
            168 => 
            array (
                'date' => '2021-09-12',
                'pcr' => 6691,
                'rtk_ag' => 9237,
                'state' => 'Johor',
            ),
            169 => 
            array (
                'date' => '2021-09-12',
                'pcr' => 3051,
                'rtk_ag' => 3186,
                'state' => 'Kedah',
            ),
            170 => 
            array (
                'date' => '2021-09-12',
                'pcr' => 2301,
                'rtk_ag' => 1910,
                'state' => 'Kelantan',
            ),
            171 => 
            array (
                'date' => '2021-09-12',
                'pcr' => 1370,
                'rtk_ag' => 3177,
                'state' => 'Melaka',
            ),
            172 => 
            array (
                'date' => '2021-09-12',
                'pcr' => 890,
                'rtk_ag' => 893,
                'state' => 'Negeri Sembilan',
            ),
            173 => 
            array (
                'date' => '2021-09-12',
                'pcr' => 4651,
                'rtk_ag' => 1791,
                'state' => 'Pahang',
            ),
            174 => 
            array (
                'date' => '2021-09-12',
                'pcr' => 1617,
                'rtk_ag' => 3063,
                'state' => 'Perak',
            ),
            175 => 
            array (
                'date' => '2021-09-12',
                'pcr' => 86,
                'rtk_ag' => 201,
                'state' => 'Perlis',
            ),
            176 => 
            array (
                'date' => '2021-09-12',
                'pcr' => 1457,
                'rtk_ag' => 3558,
                'state' => 'Pulau Pinang',
            ),
            177 => 
            array (
                'date' => '2021-09-12',
                'pcr' => 2654,
                'rtk_ag' => 3239,
                'state' => 'Sabah',
            ),
            178 => 
            array (
                'date' => '2021-09-12',
                'pcr' => 12887,
                'rtk_ag' => 4319,
                'state' => 'Sarawak',
            ),
            179 => 
            array (
                'date' => '2021-09-12',
                'pcr' => 7277,
                'rtk_ag' => 8713,
                'state' => 'Selangor',
            ),
            180 => 
            array (
                'date' => '2021-09-12',
                'pcr' => 3152,
                'rtk_ag' => 3227,
                'state' => 'Terengganu',
            ),
            181 => 
            array (
                'date' => '2021-09-12',
                'pcr' => 2554,
                'rtk_ag' => 1836,
                'state' => 'W.P. Kuala Lumpur',
            ),
            182 => 
            array (
                'date' => '2021-09-12',
                'pcr' => 149,
                'rtk_ag' => 268,
                'state' => 'W.P. Labuan',
            ),
            183 => 
            array (
                'date' => '2021-09-12',
                'pcr' => 177,
                'rtk_ag' => 78,
                'state' => 'W.P. Putrajaya',
            ),
            184 => 
            array (
                'date' => '2021-09-13',
                'pcr' => 7170,
                'rtk_ag' => 13036,
                'state' => 'Johor',
            ),
            185 => 
            array (
                'date' => '2021-09-13',
                'pcr' => 2549,
                'rtk_ag' => 4093,
                'state' => 'Kedah',
            ),
            186 => 
            array (
                'date' => '2021-09-13',
                'pcr' => 3174,
                'rtk_ag' => 1956,
                'state' => 'Kelantan',
            ),
            187 => 
            array (
                'date' => '2021-09-13',
                'pcr' => 845,
                'rtk_ag' => 4958,
                'state' => 'Melaka',
            ),
            188 => 
            array (
                'date' => '2021-09-13',
                'pcr' => 1620,
                'rtk_ag' => 3974,
                'state' => 'Negeri Sembilan',
            ),
            189 => 
            array (
                'date' => '2021-09-13',
                'pcr' => 5070,
                'rtk_ag' => 2597,
                'state' => 'Pahang',
            ),
            190 => 
            array (
                'date' => '2021-09-13',
                'pcr' => 1540,
                'rtk_ag' => 5496,
                'state' => 'Perak',
            ),
            191 => 
            array (
                'date' => '2021-09-13',
                'pcr' => 89,
                'rtk_ag' => 496,
                'state' => 'Perlis',
            ),
            192 => 
            array (
                'date' => '2021-09-13',
                'pcr' => 2032,
                'rtk_ag' => 6883,
                'state' => 'Pulau Pinang',
            ),
            193 => 
            array (
                'date' => '2021-09-13',
                'pcr' => 2048,
                'rtk_ag' => 6001,
                'state' => 'Sabah',
            ),
            194 => 
            array (
                'date' => '2021-09-13',
                'pcr' => 7962,
                'rtk_ag' => 6450,
                'state' => 'Sarawak',
            ),
            195 => 
            array (
                'date' => '2021-09-13',
                'pcr' => 9536,
                'rtk_ag' => 20999,
                'state' => 'Selangor',
            ),
            196 => 
            array (
                'date' => '2021-09-13',
                'pcr' => 2754,
                'rtk_ag' => 2283,
                'state' => 'Terengganu',
            ),
            197 => 
            array (
                'date' => '2021-09-13',
                'pcr' => 3747,
                'rtk_ag' => 5072,
                'state' => 'W.P. Kuala Lumpur',
            ),
            198 => 
            array (
                'date' => '2021-09-13',
                'pcr' => 173,
                'rtk_ag' => 290,
                'state' => 'W.P. Labuan',
            ),
            199 => 
            array (
                'date' => '2021-09-13',
                'pcr' => 142,
                'rtk_ag' => 227,
                'state' => 'W.P. Putrajaya',
            ),
            200 => 
            array (
                'date' => '2021-09-14',
                'pcr' => 8956,
                'rtk_ag' => 19011,
                'state' => 'Johor',
            ),
            201 => 
            array (
                'date' => '2021-09-14',
                'pcr' => 2929,
                'rtk_ag' => 6369,
                'state' => 'Kedah',
            ),
            202 => 
            array (
                'date' => '2021-09-14',
                'pcr' => 2546,
                'rtk_ag' => 3185,
                'state' => 'Kelantan',
            ),
            203 => 
            array (
                'date' => '2021-09-14',
                'pcr' => 1927,
                'rtk_ag' => 14068,
                'state' => 'Melaka',
            ),
            204 => 
            array (
                'date' => '2021-09-14',
                'pcr' => 1146,
                'rtk_ag' => 3157,
                'state' => 'Negeri Sembilan',
            ),
            205 => 
            array (
                'date' => '2021-09-14',
                'pcr' => 4055,
                'rtk_ag' => 1669,
                'state' => 'Pahang',
            ),
            206 => 
            array (
                'date' => '2021-09-14',
                'pcr' => 3132,
                'rtk_ag' => 3980,
                'state' => 'Perak',
            ),
            207 => 
            array (
                'date' => '2021-09-14',
                'pcr' => 218,
                'rtk_ag' => 161,
                'state' => 'Perlis',
            ),
            208 => 
            array (
                'date' => '2021-09-14',
                'pcr' => 4111,
                'rtk_ag' => 4937,
                'state' => 'Pulau Pinang',
            ),
            209 => 
            array (
                'date' => '2021-09-14',
                'pcr' => 2889,
                'rtk_ag' => 144,
                'state' => 'Sabah',
            ),
            210 => 
            array (
                'date' => '2021-09-14',
                'pcr' => 13141,
                'rtk_ag' => 10442,
                'state' => 'Sarawak',
            ),
            211 => 
            array (
                'date' => '2021-09-14',
                'pcr' => 12557,
                'rtk_ag' => 5746,
                'state' => 'Selangor',
            ),
            212 => 
            array (
                'date' => '2021-09-14',
                'pcr' => 3533,
                'rtk_ag' => 6060,
                'state' => 'Terengganu',
            ),
            213 => 
            array (
                'date' => '2021-09-14',
                'pcr' => 4508,
                'rtk_ag' => 2425,
                'state' => 'W.P. Kuala Lumpur',
            ),
            214 => 
            array (
                'date' => '2021-09-14',
                'pcr' => 294,
                'rtk_ag' => 330,
                'state' => 'W.P. Labuan',
            ),
            215 => 
            array (
                'date' => '2021-09-14',
                'pcr' => 249,
                'rtk_ag' => 216,
                'state' => 'W.P. Putrajaya',
            ),
            216 => 
            array (
                'date' => '2021-09-15',
                'pcr' => 8102,
                'rtk_ag' => 11691,
                'state' => 'Johor',
            ),
            217 => 
            array (
                'date' => '2021-09-15',
                'pcr' => 3020,
                'rtk_ag' => 3127,
                'state' => 'Kedah',
            ),
            218 => 
            array (
                'date' => '2021-09-15',
                'pcr' => 2405,
                'rtk_ag' => 2107,
                'state' => 'Kelantan',
            ),
            219 => 
            array (
                'date' => '2021-09-15',
                'pcr' => 1622,
                'rtk_ag' => 2787,
                'state' => 'Melaka',
            ),
            220 => 
            array (
                'date' => '2021-09-15',
                'pcr' => 1582,
                'rtk_ag' => 3461,
                'state' => 'Negeri Sembilan',
            ),
            221 => 
            array (
                'date' => '2021-09-15',
                'pcr' => 5577,
                'rtk_ag' => 3172,
                'state' => 'Pahang',
            ),
            222 => 
            array (
                'date' => '2021-09-15',
                'pcr' => 2306,
                'rtk_ag' => 5138,
                'state' => 'Perak',
            ),
            223 => 
            array (
                'date' => '2021-09-15',
                'pcr' => 165,
                'rtk_ag' => 181,
                'state' => 'Perlis',
            ),
            224 => 
            array (
                'date' => '2021-09-15',
                'pcr' => 3654,
                'rtk_ag' => 8440,
                'state' => 'Pulau Pinang',
            ),
            225 => 
            array (
                'date' => '2021-09-15',
                'pcr' => 2658,
                'rtk_ag' => 5368,
                'state' => 'Sabah',
            ),
            226 => 
            array (
                'date' => '2021-09-15',
                'pcr' => 10742,
                'rtk_ag' => 6519,
                'state' => 'Sarawak',
            ),
            227 => 
            array (
                'date' => '2021-09-15',
                'pcr' => 12394,
                'rtk_ag' => 18993,
                'state' => 'Selangor',
            ),
            228 => 
            array (
                'date' => '2021-09-15',
                'pcr' => 3352,
                'rtk_ag' => 2292,
                'state' => 'Terengganu',
            ),
            229 => 
            array (
                'date' => '2021-09-15',
                'pcr' => 4934,
                'rtk_ag' => 5657,
                'state' => 'W.P. Kuala Lumpur',
            ),
            230 => 
            array (
                'date' => '2021-09-15',
                'pcr' => 247,
                'rtk_ag' => 298,
                'state' => 'W.P. Labuan',
            ),
            231 => 
            array (
                'date' => '2021-09-15',
                'pcr' => 187,
                'rtk_ag' => 223,
                'state' => 'W.P. Putrajaya',
            ),
            232 => 
            array (
                'date' => '2021-09-16',
                'pcr' => 6550,
                'rtk_ag' => 7252,
                'state' => 'Johor',
            ),
            233 => 
            array (
                'date' => '2021-09-16',
                'pcr' => 2832,
                'rtk_ag' => 2486,
                'state' => 'Kedah',
            ),
            234 => 
            array (
                'date' => '2021-09-16',
                'pcr' => 1967,
                'rtk_ag' => 1484,
                'state' => 'Kelantan',
            ),
            235 => 
            array (
                'date' => '2021-09-16',
                'pcr' => 1023,
                'rtk_ag' => 2784,
                'state' => 'Melaka',
            ),
            236 => 
            array (
                'date' => '2021-09-16',
                'pcr' => 1118,
                'rtk_ag' => 1003,
                'state' => 'Negeri Sembilan',
            ),
            237 => 
            array (
                'date' => '2021-09-16',
                'pcr' => 3630,
                'rtk_ag' => 1461,
                'state' => 'Pahang',
            ),
            238 => 
            array (
                'date' => '2021-09-16',
                'pcr' => 2545,
                'rtk_ag' => 3753,
                'state' => 'Perak',
            ),
            239 => 
            array (
                'date' => '2021-09-16',
                'pcr' => 149,
                'rtk_ag' => 882,
                'state' => 'Perlis',
            ),
            240 => 
            array (
                'date' => '2021-09-16',
                'pcr' => 2485,
                'rtk_ag' => 3001,
                'state' => 'Pulau Pinang',
            ),
            241 => 
            array (
                'date' => '2021-09-16',
                'pcr' => 2578,
                'rtk_ag' => 3504,
                'state' => 'Sabah',
            ),
            242 => 
            array (
                'date' => '2021-09-16',
                'pcr' => 8223,
                'rtk_ag' => 3328,
                'state' => 'Sarawak',
            ),
            243 => 
            array (
                'date' => '2021-09-16',
                'pcr' => 8749,
                'rtk_ag' => 10589,
                'state' => 'Selangor',
            ),
            244 => 
            array (
                'date' => '2021-09-16',
                'pcr' => 3731,
                'rtk_ag' => 891,
                'state' => 'Terengganu',
            ),
            245 => 
            array (
                'date' => '2021-09-16',
                'pcr' => 2983,
                'rtk_ag' => 4591,
                'state' => 'W.P. Kuala Lumpur',
            ),
            246 => 
            array (
                'date' => '2021-09-16',
                'pcr' => 148,
                'rtk_ag' => 433,
                'state' => 'W.P. Labuan',
            ),
            247 => 
            array (
                'date' => '2021-09-16',
                'pcr' => 127,
                'rtk_ag' => 80,
                'state' => 'W.P. Putrajaya',
            ),
            248 => 
            array (
                'date' => '2021-09-17',
                'pcr' => 6059,
                'rtk_ag' => 8236,
                'state' => 'Johor',
            ),
            249 => 
            array (
                'date' => '2021-09-17',
                'pcr' => 1482,
                'rtk_ag' => 3267,
                'state' => 'Kedah',
            ),
            250 => 
            array (
                'date' => '2021-09-17',
                'pcr' => 2220,
                'rtk_ag' => 1015,
                'state' => 'Kelantan',
            ),
            251 => 
            array (
                'date' => '2021-09-17',
                'pcr' => 1371,
                'rtk_ag' => 3587,
                'state' => 'Melaka',
            ),
            252 => 
            array (
                'date' => '2021-09-17',
                'pcr' => 1129,
                'rtk_ag' => 2388,
                'state' => 'Negeri Sembilan',
            ),
            253 => 
            array (
                'date' => '2021-09-17',
                'pcr' => 3913,
                'rtk_ag' => 2116,
                'state' => 'Pahang',
            ),
            254 => 
            array (
                'date' => '2021-09-17',
                'pcr' => 1895,
                'rtk_ag' => 5015,
                'state' => 'Perak',
            ),
            255 => 
            array (
                'date' => '2021-09-17',
                'pcr' => 71,
                'rtk_ag' => 707,
                'state' => 'Perlis',
            ),
            256 => 
            array (
                'date' => '2021-09-17',
                'pcr' => 1403,
                'rtk_ag' => 6096,
                'state' => 'Pulau Pinang',
            ),
            257 => 
            array (
                'date' => '2021-09-17',
                'pcr' => 1456,
                'rtk_ag' => 4855,
                'state' => 'Sabah',
            ),
            258 => 
            array (
                'date' => '2021-09-17',
                'pcr' => 7035,
                'rtk_ag' => 4253,
                'state' => 'Sarawak',
            ),
            259 => 
            array (
                'date' => '2021-09-17',
                'pcr' => 5716,
                'rtk_ag' => 18885,
                'state' => 'Selangor',
            ),
            260 => 
            array (
                'date' => '2021-09-17',
                'pcr' => 2927,
                'rtk_ag' => 1166,
                'state' => 'Terengganu',
            ),
            261 => 
            array (
                'date' => '2021-09-17',
                'pcr' => 3657,
                'rtk_ag' => 4267,
                'state' => 'W.P. Kuala Lumpur',
            ),
            262 => 
            array (
                'date' => '2021-09-17',
                'pcr' => 170,
                'rtk_ag' => 379,
                'state' => 'W.P. Labuan',
            ),
            263 => 
            array (
                'date' => '2021-09-17',
                'pcr' => 171,
                'rtk_ag' => 237,
                'state' => 'W.P. Putrajaya',
            ),
            264 => 
            array (
                'date' => '2021-09-18',
                'pcr' => 6745,
                'rtk_ag' => 8024,
                'state' => 'Johor',
            ),
            265 => 
            array (
                'date' => '2021-09-18',
                'pcr' => 2632,
                'rtk_ag' => 3112,
                'state' => 'Kedah',
            ),
            266 => 
            array (
                'date' => '2021-09-18',
                'pcr' => 2207,
                'rtk_ag' => 1519,
                'state' => 'Kelantan',
            ),
            267 => 
            array (
                'date' => '2021-09-18',
                'pcr' => 1742,
                'rtk_ag' => 1366,
                'state' => 'Melaka',
            ),
            268 => 
            array (
                'date' => '2021-09-18',
                'pcr' => 1420,
                'rtk_ag' => 1442,
                'state' => 'Negeri Sembilan',
            ),
            269 => 
            array (
                'date' => '2021-09-18',
                'pcr' => 4255,
                'rtk_ag' => 1780,
                'state' => 'Pahang',
            ),
            270 => 
            array (
                'date' => '2021-09-18',
                'pcr' => 2458,
                'rtk_ag' => 3920,
                'state' => 'Perak',
            ),
            271 => 
            array (
                'date' => '2021-09-18',
                'pcr' => 134,
                'rtk_ag' => 370,
                'state' => 'Perlis',
            ),
            272 => 
            array (
                'date' => '2021-09-18',
                'pcr' => 3246,
                'rtk_ag' => 4627,
                'state' => 'Pulau Pinang',
            ),
            273 => 
            array (
                'date' => '2021-09-18',
                'pcr' => 2505,
                'rtk_ag' => 3375,
                'state' => 'Sabah',
            ),
            274 => 
            array (
                'date' => '2021-09-18',
                'pcr' => 7825,
                'rtk_ag' => 3279,
                'state' => 'Sarawak',
            ),
            275 => 
            array (
                'date' => '2021-09-18',
                'pcr' => 8091,
                'rtk_ag' => 14660,
                'state' => 'Selangor',
            ),
            276 => 
            array (
                'date' => '2021-09-18',
                'pcr' => 2661,
                'rtk_ag' => 2241,
                'state' => 'Terengganu',
            ),
            277 => 
            array (
                'date' => '2021-09-18',
                'pcr' => 4650,
                'rtk_ag' => 3648,
                'state' => 'W.P. Kuala Lumpur',
            ),
            278 => 
            array (
                'date' => '2021-09-18',
                'pcr' => 327,
                'rtk_ag' => 279,
                'state' => 'W.P. Labuan',
            ),
            279 => 
            array (
                'date' => '2021-09-18',
                'pcr' => 203,
                'rtk_ag' => 74,
                'state' => 'W.P. Putrajaya',
            ),
            280 => 
            array (
                'date' => '2021-09-19',
                'pcr' => 6232,
                'rtk_ag' => 12320,
                'state' => 'Johor',
            ),
            281 => 
            array (
                'date' => '2021-09-19',
                'pcr' => 2292,
                'rtk_ag' => 4992,
                'state' => 'Kedah',
            ),
            282 => 
            array (
                'date' => '2021-09-19',
                'pcr' => 1725,
                'rtk_ag' => 2104,
                'state' => 'Kelantan',
            ),
            283 => 
            array (
                'date' => '2021-09-19',
                'pcr' => 1009,
                'rtk_ag' => 1478,
                'state' => 'Melaka',
            ),
            284 => 
            array (
                'date' => '2021-09-19',
                'pcr' => 788,
                'rtk_ag' => 1898,
                'state' => 'Negeri Sembilan',
            ),
            285 => 
            array (
                'date' => '2021-09-19',
                'pcr' => 3304,
                'rtk_ag' => 2690,
                'state' => 'Pahang',
            ),
            286 => 
            array (
                'date' => '2021-09-19',
                'pcr' => 1388,
                'rtk_ag' => 6382,
                'state' => 'Perak',
            ),
            287 => 
            array (
                'date' => '2021-09-19',
                'pcr' => 105,
                'rtk_ag' => 349,
                'state' => 'Perlis',
            ),
            288 => 
            array (
                'date' => '2021-09-19',
                'pcr' => 1188,
                'rtk_ag' => 7495,
                'state' => 'Pulau Pinang',
            ),
            289 => 
            array (
                'date' => '2021-09-19',
                'pcr' => 1873,
                'rtk_ag' => 4024,
                'state' => 'Sabah',
            ),
            290 => 
            array (
                'date' => '2021-09-19',
                'pcr' => 6867,
                'rtk_ag' => 3648,
                'state' => 'Sarawak',
            ),
            291 => 
            array (
                'date' => '2021-09-19',
                'pcr' => 6488,
                'rtk_ag' => 15737,
                'state' => 'Selangor',
            ),
            292 => 
            array (
                'date' => '2021-09-19',
                'pcr' => 2678,
                'rtk_ag' => 3926,
                'state' => 'Terengganu',
            ),
            293 => 
            array (
                'date' => '2021-09-19',
                'pcr' => 2267,
                'rtk_ag' => 3320,
                'state' => 'W.P. Kuala Lumpur',
            ),
            294 => 
            array (
                'date' => '2021-09-19',
                'pcr' => 106,
                'rtk_ag' => 299,
                'state' => 'W.P. Labuan',
            ),
            295 => 
            array (
                'date' => '2021-09-19',
                'pcr' => 188,
                'rtk_ag' => 154,
                'state' => 'W.P. Putrajaya',
            ),
            296 => 
            array (
                'date' => '2021-09-20',
                'pcr' => 6549,
                'rtk_ag' => 16601,
                'state' => 'Johor',
            ),
            297 => 
            array (
                'date' => '2021-09-20',
                'pcr' => 1515,
                'rtk_ag' => 6366,
                'state' => 'Kedah',
            ),
            298 => 
            array (
                'date' => '2021-09-20',
                'pcr' => 2923,
                'rtk_ag' => 2091,
                'state' => 'Kelantan',
            ),
            299 => 
            array (
                'date' => '2021-09-20',
                'pcr' => 930,
                'rtk_ag' => 4665,
                'state' => 'Melaka',
            ),
            300 => 
            array (
                'date' => '2021-09-20',
                'pcr' => 1273,
                'rtk_ag' => 5282,
                'state' => 'Negeri Sembilan',
            ),
            301 => 
            array (
                'date' => '2021-09-20',
                'pcr' => 3231,
                'rtk_ag' => 3744,
                'state' => 'Pahang',
            ),
            302 => 
            array (
                'date' => '2021-09-20',
                'pcr' => 2104,
                'rtk_ag' => 8179,
                'state' => 'Perak',
            ),
            303 => 
            array (
                'date' => '2021-09-20',
                'pcr' => 78,
                'rtk_ag' => 252,
                'state' => 'Perlis',
            ),
            304 => 
            array (
                'date' => '2021-09-20',
                'pcr' => 2243,
                'rtk_ag' => 13190,
                'state' => 'Pulau Pinang',
            ),
            305 => 
            array (
                'date' => '2021-09-20',
                'pcr' => 1395,
                'rtk_ag' => 5869,
                'state' => 'Sabah',
            ),
            306 => 
            array (
                'date' => '2021-09-20',
                'pcr' => 6557,
                'rtk_ag' => 4980,
                'state' => 'Sarawak',
            ),
            307 => 
            array (
                'date' => '2021-09-20',
                'pcr' => 8607,
                'rtk_ag' => 35357,
                'state' => 'Selangor',
            ),
            308 => 
            array (
                'date' => '2021-09-20',
                'pcr' => 2366,
                'rtk_ag' => 2323,
                'state' => 'Terengganu',
            ),
            309 => 
            array (
                'date' => '2021-09-20',
                'pcr' => 4800,
                'rtk_ag' => 10374,
                'state' => 'W.P. Kuala Lumpur',
            ),
            310 => 
            array (
                'date' => '2021-09-20',
                'pcr' => 390,
                'rtk_ag' => 502,
                'state' => 'W.P. Labuan',
            ),
            311 => 
            array (
                'date' => '2021-09-20',
                'pcr' => 376,
                'rtk_ag' => 385,
                'state' => 'W.P. Putrajaya',
            ),
            312 => 
            array (
                'date' => '2021-09-21',
                'pcr' => 7823,
                'rtk_ag' => 16538,
                'state' => 'Johor',
            ),
            313 => 
            array (
                'date' => '2021-09-21',
                'pcr' => 2571,
                'rtk_ag' => 6122,
                'state' => 'Kedah',
            ),
            314 => 
            array (
                'date' => '2021-09-21',
                'pcr' => 3046,
                'rtk_ag' => 2003,
                'state' => 'Kelantan',
            ),
            315 => 
            array (
                'date' => '2021-09-21',
                'pcr' => 1522,
                'rtk_ag' => 3963,
                'state' => 'Melaka',
            ),
            316 => 
            array (
                'date' => '2021-09-21',
                'pcr' => 1162,
                'rtk_ag' => 4059,
                'state' => 'Negeri Sembilan',
            ),
            317 => 
            array (
                'date' => '2021-09-21',
                'pcr' => 3768,
                'rtk_ag' => 3032,
                'state' => 'Pahang',
            ),
            318 => 
            array (
                'date' => '2021-09-21',
                'pcr' => 2145,
                'rtk_ag' => 9543,
                'state' => 'Perak',
            ),
            319 => 
            array (
                'date' => '2021-09-21',
                'pcr' => 206,
                'rtk_ag' => 254,
                'state' => 'Perlis',
            ),
            320 => 
            array (
                'date' => '2021-09-21',
                'pcr' => 3090,
                'rtk_ag' => 13255,
                'state' => 'Pulau Pinang',
            ),
            321 => 
            array (
                'date' => '2021-09-21',
                'pcr' => 1679,
                'rtk_ag' => 5069,
                'state' => 'Sabah',
            ),
            322 => 
            array (
                'date' => '2021-09-21',
                'pcr' => 4983,
                'rtk_ag' => 5911,
                'state' => 'Sarawak',
            ),
            323 => 
            array (
                'date' => '2021-09-21',
                'pcr' => 12133,
                'rtk_ag' => 30167,
                'state' => 'Selangor',
            ),
            324 => 
            array (
                'date' => '2021-09-21',
                'pcr' => 3495,
                'rtk_ag' => 2306,
                'state' => 'Terengganu',
            ),
            325 => 
            array (
                'date' => '2021-09-21',
                'pcr' => 4643,
                'rtk_ag' => 8056,
                'state' => 'W.P. Kuala Lumpur',
            ),
            326 => 
            array (
                'date' => '2021-09-21',
                'pcr' => 267,
                'rtk_ag' => 293,
                'state' => 'W.P. Labuan',
            ),
            327 => 
            array (
                'date' => '2021-09-21',
                'pcr' => 256,
                'rtk_ag' => 304,
                'state' => 'W.P. Putrajaya',
            ),
            328 => 
            array (
                'date' => '2021-09-22',
                'pcr' => 6065,
                'rtk_ag' => 17638,
                'state' => 'Johor',
            ),
            329 => 
            array (
                'date' => '2021-09-22',
                'pcr' => 2196,
                'rtk_ag' => 6257,
                'state' => 'Kedah',
            ),
            330 => 
            array (
                'date' => '2021-09-22',
                'pcr' => 2255,
                'rtk_ag' => 1864,
                'state' => 'Kelantan',
            ),
            331 => 
            array (
                'date' => '2021-09-22',
                'pcr' => 1347,
                'rtk_ag' => 4168,
                'state' => 'Melaka',
            ),
            332 => 
            array (
                'date' => '2021-09-22',
                'pcr' => 1208,
                'rtk_ag' => 6659,
                'state' => 'Negeri Sembilan',
            ),
            333 => 
            array (
                'date' => '2021-09-22',
                'pcr' => 4097,
                'rtk_ag' => 3793,
                'state' => 'Pahang',
            ),
            334 => 
            array (
                'date' => '2021-09-22',
                'pcr' => 2356,
                'rtk_ag' => 9919,
                'state' => 'Perak',
            ),
            335 => 
            array (
                'date' => '2021-09-22',
                'pcr' => 153,
                'rtk_ag' => 212,
                'state' => 'Perlis',
            ),
            336 => 
            array (
                'date' => '2021-09-22',
                'pcr' => 2557,
                'rtk_ag' => 15945,
                'state' => 'Pulau Pinang',
            ),
            337 => 
            array (
                'date' => '2021-09-22',
                'pcr' => 3025,
                'rtk_ag' => 5249,
                'state' => 'Sabah',
            ),
            338 => 
            array (
                'date' => '2021-09-22',
                'pcr' => 5221,
                'rtk_ag' => 6733,
                'state' => 'Sarawak',
            ),
            339 => 
            array (
                'date' => '2021-09-22',
                'pcr' => 10766,
                'rtk_ag' => 35982,
                'state' => 'Selangor',
            ),
            340 => 
            array (
                'date' => '2021-09-22',
                'pcr' => 2474,
                'rtk_ag' => 2679,
                'state' => 'Terengganu',
            ),
            341 => 
            array (
                'date' => '2021-09-22',
                'pcr' => 4452,
                'rtk_ag' => 9838,
                'state' => 'W.P. Kuala Lumpur',
            ),
            342 => 
            array (
                'date' => '2021-09-22',
                'pcr' => 336,
                'rtk_ag' => 374,
                'state' => 'W.P. Labuan',
            ),
            343 => 
            array (
                'date' => '2021-09-22',
                'pcr' => 179,
                'rtk_ag' => 315,
                'state' => 'W.P. Putrajaya',
            ),
            344 => 
            array (
                'date' => '2021-09-23',
                'pcr' => 5806,
                'rtk_ag' => 13436,
                'state' => 'Johor',
            ),
            345 => 
            array (
                'date' => '2021-09-23',
                'pcr' => 2098,
                'rtk_ag' => 4976,
                'state' => 'Kedah',
            ),
            346 => 
            array (
                'date' => '2021-09-23',
                'pcr' => 2400,
                'rtk_ag' => 1776,
                'state' => 'Kelantan',
            ),
            347 => 
            array (
                'date' => '2021-09-23',
                'pcr' => 1177,
                'rtk_ag' => 2712,
                'state' => 'Melaka',
            ),
            348 => 
            array (
                'date' => '2021-09-23',
                'pcr' => 1135,
                'rtk_ag' => 3983,
                'state' => 'Negeri Sembilan',
            ),
            349 => 
            array (
                'date' => '2021-09-23',
                'pcr' => 4400,
                'rtk_ag' => 2621,
                'state' => 'Pahang',
            ),
            350 => 
            array (
                'date' => '2021-09-23',
                'pcr' => 2159,
                'rtk_ag' => 8891,
                'state' => 'Perak',
            ),
            351 => 
            array (
                'date' => '2021-09-23',
                'pcr' => 142,
                'rtk_ag' => 240,
                'state' => 'Perlis',
            ),
            352 => 
            array (
                'date' => '2021-09-23',
                'pcr' => 2397,
                'rtk_ag' => 12855,
                'state' => 'Pulau Pinang',
            ),
            353 => 
            array (
                'date' => '2021-09-23',
                'pcr' => 1890,
                'rtk_ag' => 4374,
                'state' => 'Sabah',
            ),
            354 => 
            array (
                'date' => '2021-09-23',
                'pcr' => 5719,
                'rtk_ag' => 5235,
                'state' => 'Sarawak',
            ),
            355 => 
            array (
                'date' => '2021-09-23',
                'pcr' => 9659,
                'rtk_ag' => 24764,
                'state' => 'Selangor',
            ),
            356 => 
            array (
                'date' => '2021-09-23',
                'pcr' => 2661,
                'rtk_ag' => 2207,
                'state' => 'Terengganu',
            ),
            357 => 
            array (
                'date' => '2021-09-23',
                'pcr' => 5796,
                'rtk_ag' => 6956,
                'state' => 'W.P. Kuala Lumpur',
            ),
            358 => 
            array (
                'date' => '2021-09-23',
                'pcr' => 162,
                'rtk_ag' => 419,
                'state' => 'W.P. Labuan',
            ),
            359 => 
            array (
                'date' => '2021-09-23',
                'pcr' => 196,
                'rtk_ag' => 255,
                'state' => 'W.P. Putrajaya',
            ),
            360 => 
            array (
                'date' => '2021-09-24',
                'pcr' => 5766,
                'rtk_ag' => 13684,
                'state' => 'Johor',
            ),
            361 => 
            array (
                'date' => '2021-09-24',
                'pcr' => 1907,
                'rtk_ag' => 4786,
                'state' => 'Kedah',
            ),
            362 => 
            array (
                'date' => '2021-09-24',
                'pcr' => 2691,
                'rtk_ag' => 1348,
                'state' => 'Kelantan',
            ),
            363 => 
            array (
                'date' => '2021-09-24',
                'pcr' => 1140,
                'rtk_ag' => 2318,
                'state' => 'Melaka',
            ),
            364 => 
            array (
                'date' => '2021-09-24',
                'pcr' => 1076,
                'rtk_ag' => 6325,
                'state' => 'Negeri Sembilan',
            ),
            365 => 
            array (
                'date' => '2021-09-24',
                'pcr' => 3633,
                'rtk_ag' => 3478,
                'state' => 'Pahang',
            ),
            366 => 
            array (
                'date' => '2021-09-24',
                'pcr' => 2296,
                'rtk_ag' => 8066,
                'state' => 'Perak',
            ),
            367 => 
            array (
                'date' => '2021-09-24',
                'pcr' => 85,
                'rtk_ag' => 464,
                'state' => 'Perlis',
            ),
            368 => 
            array (
                'date' => '2021-09-24',
                'pcr' => 2254,
                'rtk_ag' => 13821,
                'state' => 'Pulau Pinang',
            ),
            369 => 
            array (
                'date' => '2021-09-24',
                'pcr' => 2204,
                'rtk_ag' => 4138,
                'state' => 'Sabah',
            ),
            370 => 
            array (
                'date' => '2021-09-24',
                'pcr' => 5949,
                'rtk_ag' => 5093,
                'state' => 'Sarawak',
            ),
            371 => 
            array (
                'date' => '2021-09-24',
                'pcr' => 9853,
                'rtk_ag' => 24489,
                'state' => 'Selangor',
            ),
            372 => 
            array (
                'date' => '2021-09-24',
                'pcr' => 3175,
                'rtk_ag' => 1418,
                'state' => 'Terengganu',
            ),
            373 => 
            array (
                'date' => '2021-09-24',
                'pcr' => 3242,
                'rtk_ag' => 6036,
                'state' => 'W.P. Kuala Lumpur',
            ),
            374 => 
            array (
                'date' => '2021-09-24',
                'pcr' => 160,
                'rtk_ag' => 337,
                'state' => 'W.P. Labuan',
            ),
            375 => 
            array (
                'date' => '2021-09-24',
                'pcr' => 247,
                'rtk_ag' => 381,
                'state' => 'W.P. Putrajaya',
            ),
            376 => 
            array (
                'date' => '2021-09-25',
                'pcr' => 4820,
                'rtk_ag' => 11147,
                'state' => 'Johor',
            ),
            377 => 
            array (
                'date' => '2021-09-25',
                'pcr' => 1730,
                'rtk_ag' => 3744,
                'state' => 'Kedah',
            ),
            378 => 
            array (
                'date' => '2021-09-25',
                'pcr' => 1839,
                'rtk_ag' => 1833,
                'state' => 'Kelantan',
            ),
            379 => 
            array (
                'date' => '2021-09-25',
                'pcr' => 1495,
                'rtk_ag' => 2405,
                'state' => 'Melaka',
            ),
            380 => 
            array (
                'date' => '2021-09-25',
                'pcr' => 888,
                'rtk_ag' => 4289,
                'state' => 'Negeri Sembilan',
            ),
            381 => 
            array (
                'date' => '2021-09-25',
                'pcr' => 3361,
                'rtk_ag' => 1884,
                'state' => 'Pahang',
            ),
            382 => 
            array (
                'date' => '2021-09-25',
                'pcr' => 1745,
                'rtk_ag' => 6655,
                'state' => 'Perak',
            ),
            383 => 
            array (
                'date' => '2021-09-25',
                'pcr' => 211,
                'rtk_ag' => 380,
                'state' => 'Perlis',
            ),
            384 => 
            array (
                'date' => '2021-09-25',
                'pcr' => 2521,
                'rtk_ag' => 8580,
                'state' => 'Pulau Pinang',
            ),
            385 => 
            array (
                'date' => '2021-09-25',
                'pcr' => 1952,
                'rtk_ag' => 3308,
                'state' => 'Sabah',
            ),
            386 => 
            array (
                'date' => '2021-09-25',
                'pcr' => 5953,
                'rtk_ag' => 3791,
                'state' => 'Sarawak',
            ),
            387 => 
            array (
                'date' => '2021-09-25',
                'pcr' => 7307,
                'rtk_ag' => 16624,
                'state' => 'Selangor',
            ),
            388 => 
            array (
                'date' => '2021-09-25',
                'pcr' => 2853,
                'rtk_ag' => 3123,
                'state' => 'Terengganu',
            ),
            389 => 
            array (
                'date' => '2021-09-25',
                'pcr' => 3294,
                'rtk_ag' => 4316,
                'state' => 'W.P. Kuala Lumpur',
            ),
            390 => 
            array (
                'date' => '2021-09-25',
                'pcr' => 226,
                'rtk_ag' => 446,
                'state' => 'W.P. Labuan',
            ),
            391 => 
            array (
                'date' => '2021-09-25',
                'pcr' => 275,
                'rtk_ag' => 124,
                'state' => 'W.P. Putrajaya',
            ),
            392 => 
            array (
                'date' => '2021-09-26',
                'pcr' => 4732,
                'rtk_ag' => 12621,
                'state' => 'Johor',
            ),
            393 => 
            array (
                'date' => '2021-09-26',
                'pcr' => 1717,
                'rtk_ag' => 3401,
                'state' => 'Kedah',
            ),
            394 => 
            array (
                'date' => '2021-09-26',
                'pcr' => 1657,
                'rtk_ag' => 2208,
                'state' => 'Kelantan',
            ),
            395 => 
            array (
                'date' => '2021-09-26',
                'pcr' => 1332,
                'rtk_ag' => 1578,
                'state' => 'Melaka',
            ),
            396 => 
            array (
                'date' => '2021-09-26',
                'pcr' => 1010,
                'rtk_ag' => 3729,
                'state' => 'Negeri Sembilan',
            ),
            397 => 
            array (
                'date' => '2021-09-26',
                'pcr' => 3998,
                'rtk_ag' => 1690,
                'state' => 'Pahang',
            ),
            398 => 
            array (
                'date' => '2021-09-26',
                'pcr' => 1375,
                'rtk_ag' => 3948,
                'state' => 'Perak',
            ),
            399 => 
            array (
                'date' => '2021-09-26',
                'pcr' => 118,
                'rtk_ag' => 356,
                'state' => 'Perlis',
            ),
            400 => 
            array (
                'date' => '2021-09-26',
                'pcr' => 1412,
                'rtk_ag' => 6196,
                'state' => 'Pulau Pinang',
            ),
            401 => 
            array (
                'date' => '2021-09-26',
                'pcr' => 1721,
                'rtk_ag' => 2796,
                'state' => 'Sabah',
            ),
            402 => 
            array (
                'date' => '2021-09-26',
                'pcr' => 4750,
                'rtk_ag' => 3323,
                'state' => 'Sarawak',
            ),
            403 => 
            array (
                'date' => '2021-09-26',
                'pcr' => 6975,
                'rtk_ag' => 10774,
                'state' => 'Selangor',
            ),
            404 => 
            array (
                'date' => '2021-09-26',
                'pcr' => 2251,
                'rtk_ag' => 3327,
                'state' => 'Terengganu',
            ),
            405 => 
            array (
                'date' => '2021-09-26',
                'pcr' => 2366,
                'rtk_ag' => 2855,
                'state' => 'W.P. Kuala Lumpur',
            ),
            406 => 
            array (
                'date' => '2021-09-26',
                'pcr' => 94,
                'rtk_ag' => 261,
                'state' => 'W.P. Labuan',
            ),
            407 => 
            array (
                'date' => '2021-09-26',
                'pcr' => 134,
                'rtk_ag' => 106,
                'state' => 'W.P. Putrajaya',
            ),
            408 => 
            array (
                'date' => '2021-09-27',
                'pcr' => 6029,
                'rtk_ag' => 18539,
                'state' => 'Johor',
            ),
            409 => 
            array (
                'date' => '2021-09-27',
                'pcr' => 2064,
                'rtk_ag' => 5453,
                'state' => 'Kedah',
            ),
            410 => 
            array (
                'date' => '2021-09-27',
                'pcr' => 2061,
                'rtk_ag' => 2196,
                'state' => 'Kelantan',
            ),
            411 => 
            array (
                'date' => '2021-09-27',
                'pcr' => 912,
                'rtk_ag' => 2851,
                'state' => 'Melaka',
            ),
            412 => 
            array (
                'date' => '2021-09-27',
                'pcr' => 1035,
                'rtk_ag' => 4921,
                'state' => 'Negeri Sembilan',
            ),
            413 => 
            array (
                'date' => '2021-09-27',
                'pcr' => 3164,
                'rtk_ag' => 3444,
                'state' => 'Pahang',
            ),
            414 => 
            array (
                'date' => '2021-09-27',
                'pcr' => 1158,
                'rtk_ag' => 7326,
                'state' => 'Perak',
            ),
            415 => 
            array (
                'date' => '2021-09-27',
                'pcr' => 52,
                'rtk_ag' => 382,
                'state' => 'Perlis',
            ),
            416 => 
            array (
                'date' => '2021-09-27',
                'pcr' => 1598,
                'rtk_ag' => 14700,
                'state' => 'Pulau Pinang',
            ),
            417 => 
            array (
                'date' => '2021-09-27',
                'pcr' => 1383,
                'rtk_ag' => 5396,
                'state' => 'Sabah',
            ),
            418 => 
            array (
                'date' => '2021-09-27',
                'pcr' => 5387,
                'rtk_ag' => 5567,
                'state' => 'Sarawak',
            ),
            419 => 
            array (
                'date' => '2021-09-27',
                'pcr' => 8602,
                'rtk_ag' => 32312,
                'state' => 'Selangor',
            ),
            420 => 
            array (
                'date' => '2021-09-27',
                'pcr' => 2442,
                'rtk_ag' => 2719,
                'state' => 'Terengganu',
            ),
            421 => 
            array (
                'date' => '2021-09-27',
                'pcr' => 3506,
                'rtk_ag' => 11382,
                'state' => 'W.P. Kuala Lumpur',
            ),
            422 => 
            array (
                'date' => '2021-09-27',
                'pcr' => 163,
                'rtk_ag' => 454,
                'state' => 'W.P. Labuan',
            ),
            423 => 
            array (
                'date' => '2021-09-27',
                'pcr' => 166,
                'rtk_ag' => 358,
                'state' => 'W.P. Putrajaya',
            ),
            424 => 
            array (
                'date' => '2021-09-28',
                'pcr' => 5460,
                'rtk_ag' => 17710,
                'state' => 'Johor',
            ),
            425 => 
            array (
                'date' => '2021-09-28',
                'pcr' => 1975,
                'rtk_ag' => 4382,
                'state' => 'Kedah',
            ),
            426 => 
            array (
                'date' => '2021-09-28',
                'pcr' => 2543,
                'rtk_ag' => 2170,
                'state' => 'Kelantan',
            ),
            427 => 
            array (
                'date' => '2021-09-28',
                'pcr' => 1512,
                'rtk_ag' => 3708,
                'state' => 'Melaka',
            ),
            428 => 
            array (
                'date' => '2021-09-28',
                'pcr' => 1477,
                'rtk_ag' => 4589,
                'state' => 'Negeri Sembilan',
            ),
            429 => 
            array (
                'date' => '2021-09-28',
                'pcr' => 2959,
                'rtk_ag' => 2753,
                'state' => 'Pahang',
            ),
            430 => 
            array (
                'date' => '2021-09-28',
                'pcr' => 2191,
                'rtk_ag' => 7726,
                'state' => 'Perak',
            ),
            431 => 
            array (
                'date' => '2021-09-28',
                'pcr' => 142,
                'rtk_ag' => 271,
                'state' => 'Perlis',
            ),
            432 => 
            array (
                'date' => '2021-09-28',
                'pcr' => 2516,
                'rtk_ag' => 11007,
                'state' => 'Pulau Pinang',
            ),
            433 => 
            array (
                'date' => '2021-09-28',
                'pcr' => 1803,
                'rtk_ag' => 4763,
                'state' => 'Sabah',
            ),
            434 => 
            array (
                'date' => '2021-09-28',
                'pcr' => 6158,
                'rtk_ag' => 6004,
                'state' => 'Sarawak',
            ),
            435 => 
            array (
                'date' => '2021-09-28',
                'pcr' => 11717,
                'rtk_ag' => 30828,
                'state' => 'Selangor',
            ),
            436 => 
            array (
                'date' => '2021-09-28',
                'pcr' => 2067,
                'rtk_ag' => 2536,
                'state' => 'Terengganu',
            ),
            437 => 
            array (
                'date' => '2021-09-28',
                'pcr' => 4258,
                'rtk_ag' => 5952,
                'state' => 'W.P. Kuala Lumpur',
            ),
            438 => 
            array (
                'date' => '2021-09-28',
                'pcr' => 152,
                'rtk_ag' => 395,
                'state' => 'W.P. Labuan',
            ),
            439 => 
            array (
                'date' => '2021-09-28',
                'pcr' => 160,
                'rtk_ag' => 311,
                'state' => 'W.P. Putrajaya',
            ),
            440 => 
            array (
                'date' => '2021-09-29',
                'pcr' => 4593,
                'rtk_ag' => 15771,
                'state' => 'Johor',
            ),
            441 => 
            array (
                'date' => '2021-09-29',
                'pcr' => 2223,
                'rtk_ag' => 4279,
                'state' => 'Kedah',
            ),
            442 => 
            array (
                'date' => '2021-09-29',
                'pcr' => 1786,
                'rtk_ag' => 2120,
                'state' => 'Kelantan',
            ),
            443 => 
            array (
                'date' => '2021-09-29',
                'pcr' => 1451,
                'rtk_ag' => 3195,
                'state' => 'Melaka',
            ),
            444 => 
            array (
                'date' => '2021-09-29',
                'pcr' => 970,
                'rtk_ag' => 6935,
                'state' => 'Negeri Sembilan',
            ),
            445 => 
            array (
                'date' => '2021-09-29',
                'pcr' => 3307,
                'rtk_ag' => 4091,
                'state' => 'Pahang',
            ),
            446 => 
            array (
                'date' => '2021-09-29',
                'pcr' => 2089,
                'rtk_ag' => 6208,
                'state' => 'Perak',
            ),
            447 => 
            array (
                'date' => '2021-09-29',
                'pcr' => 157,
                'rtk_ag' => 372,
                'state' => 'Perlis',
            ),
            448 => 
            array (
                'date' => '2021-09-29',
                'pcr' => 2241,
                'rtk_ag' => 9126,
                'state' => 'Pulau Pinang',
            ),
            449 => 
            array (
                'date' => '2021-09-29',
                'pcr' => 2046,
                'rtk_ag' => 4571,
                'state' => 'Sabah',
            ),
            450 => 
            array (
                'date' => '2021-09-29',
                'pcr' => 5768,
                'rtk_ag' => 5505,
                'state' => 'Sarawak',
            ),
            451 => 
            array (
                'date' => '2021-09-29',
                'pcr' => 11781,
                'rtk_ag' => 29291,
                'state' => 'Selangor',
            ),
            452 => 
            array (
                'date' => '2021-09-29',
                'pcr' => 3136,
                'rtk_ag' => 2398,
                'state' => 'Terengganu',
            ),
            453 => 
            array (
                'date' => '2021-09-29',
                'pcr' => 4212,
                'rtk_ag' => 5020,
                'state' => 'W.P. Kuala Lumpur',
            ),
            454 => 
            array (
                'date' => '2021-09-29',
                'pcr' => 236,
                'rtk_ag' => 243,
                'state' => 'W.P. Labuan',
            ),
            455 => 
            array (
                'date' => '2021-09-29',
                'pcr' => 186,
                'rtk_ag' => 349,
                'state' => 'W.P. Putrajaya',
            ),
            456 => 
            array (
                'date' => '2021-09-30',
                'pcr' => 4723,
                'rtk_ag' => 16328,
                'state' => 'Johor',
            ),
            457 => 
            array (
                'date' => '2021-09-30',
                'pcr' => 1682,
                'rtk_ag' => 4507,
                'state' => 'Kedah',
            ),
            458 => 
            array (
                'date' => '2021-09-30',
                'pcr' => 2395,
                'rtk_ag' => 2605,
                'state' => 'Kelantan',
            ),
            459 => 
            array (
                'date' => '2021-09-30',
                'pcr' => 1049,
                'rtk_ag' => 3758,
                'state' => 'Melaka',
            ),
            460 => 
            array (
                'date' => '2021-09-30',
                'pcr' => 946,
                'rtk_ag' => 4093,
                'state' => 'Negeri Sembilan',
            ),
            461 => 
            array (
                'date' => '2021-09-30',
                'pcr' => 3711,
                'rtk_ag' => 3139,
                'state' => 'Pahang',
            ),
            462 => 
            array (
                'date' => '2021-09-30',
                'pcr' => 1638,
                'rtk_ag' => 5772,
                'state' => 'Perak',
            ),
            463 => 
            array (
                'date' => '2021-09-30',
                'pcr' => 142,
                'rtk_ag' => 392,
                'state' => 'Perlis',
            ),
            464 => 
            array (
                'date' => '2021-09-30',
                'pcr' => 2015,
                'rtk_ag' => 8771,
                'state' => 'Pulau Pinang',
            ),
            465 => 
            array (
                'date' => '2021-09-30',
                'pcr' => 1422,
                'rtk_ag' => 4938,
                'state' => 'Sabah',
            ),
            466 => 
            array (
                'date' => '2021-09-30',
                'pcr' => 5234,
                'rtk_ag' => 6232,
                'state' => 'Sarawak',
            ),
            467 => 
            array (
                'date' => '2021-09-30',
                'pcr' => 9334,
                'rtk_ag' => 25900,
                'state' => 'Selangor',
            ),
            468 => 
            array (
                'date' => '2021-09-30',
                'pcr' => 2899,
                'rtk_ag' => 2863,
                'state' => 'Terengganu',
            ),
            469 => 
            array (
                'date' => '2021-09-30',
                'pcr' => 5530,
                'rtk_ag' => 6811,
                'state' => 'W.P. Kuala Lumpur',
            ),
            470 => 
            array (
                'date' => '2021-09-30',
                'pcr' => 207,
                'rtk_ag' => 281,
                'state' => 'W.P. Labuan',
            ),
            471 => 
            array (
                'date' => '2021-09-30',
                'pcr' => 155,
                'rtk_ag' => 283,
                'state' => 'W.P. Putrajaya',
            ),
            472 => 
            array (
                'date' => '2021-10-01',
                'pcr' => 4718,
                'rtk_ag' => 13946,
                'state' => 'Johor',
            ),
            473 => 
            array (
                'date' => '2021-10-01',
                'pcr' => 1436,
                'rtk_ag' => 5060,
                'state' => 'Kedah',
            ),
            474 => 
            array (
                'date' => '2021-10-01',
                'pcr' => 2052,
                'rtk_ag' => 1577,
                'state' => 'Kelantan',
            ),
            475 => 
            array (
                'date' => '2021-10-01',
                'pcr' => 842,
                'rtk_ag' => 2699,
                'state' => 'Melaka',
            ),
            476 => 
            array (
                'date' => '2021-10-01',
                'pcr' => 1285,
                'rtk_ag' => 4441,
                'state' => 'Negeri Sembilan',
            ),
            477 => 
            array (
                'date' => '2021-10-01',
                'pcr' => 2563,
                'rtk_ag' => 3479,
                'state' => 'Pahang',
            ),
            478 => 
            array (
                'date' => '2021-10-01',
                'pcr' => 1697,
                'rtk_ag' => 6906,
                'state' => 'Perak',
            ),
            479 => 
            array (
                'date' => '2021-10-01',
                'pcr' => 133,
                'rtk_ag' => 465,
                'state' => 'Perlis',
            ),
            480 => 
            array (
                'date' => '2021-10-01',
                'pcr' => 1977,
                'rtk_ag' => 10329,
                'state' => 'Pulau Pinang',
            ),
            481 => 
            array (
                'date' => '2021-10-01',
                'pcr' => 2057,
                'rtk_ag' => 4305,
                'state' => 'Sabah',
            ),
            482 => 
            array (
                'date' => '2021-10-01',
                'pcr' => 4254,
                'rtk_ag' => 5985,
                'state' => 'Sarawak',
            ),
            483 => 
            array (
                'date' => '2021-10-01',
                'pcr' => 7638,
                'rtk_ag' => 30068,
                'state' => 'Selangor',
            ),
            484 => 
            array (
                'date' => '2021-10-01',
                'pcr' => 2333,
                'rtk_ag' => 1432,
                'state' => 'Terengganu',
            ),
            485 => 
            array (
                'date' => '2021-10-01',
                'pcr' => 4026,
                'rtk_ag' => 9272,
                'state' => 'W.P. Kuala Lumpur',
            ),
            486 => 
            array (
                'date' => '2021-10-01',
                'pcr' => 196,
                'rtk_ag' => 436,
                'state' => 'W.P. Labuan',
            ),
            487 => 
            array (
                'date' => '2021-10-01',
                'pcr' => 175,
                'rtk_ag' => 425,
                'state' => 'W.P. Putrajaya',
            ),
            488 => 
            array (
                'date' => '2021-10-02',
                'pcr' => 3477,
                'rtk_ag' => 8651,
                'state' => 'Johor',
            ),
            489 => 
            array (
                'date' => '2021-10-02',
                'pcr' => 1231,
                'rtk_ag' => 3676,
                'state' => 'Kedah',
            ),
            490 => 
            array (
                'date' => '2021-10-02',
                'pcr' => 1767,
                'rtk_ag' => 1994,
                'state' => 'Kelantan',
            ),
            491 => 
            array (
                'date' => '2021-10-02',
                'pcr' => 1148,
                'rtk_ag' => 1883,
                'state' => 'Melaka',
            ),
            492 => 
            array (
                'date' => '2021-10-02',
                'pcr' => 1350,
                'rtk_ag' => 2448,
                'state' => 'Negeri Sembilan',
            ),
            493 => 
            array (
                'date' => '2021-10-02',
                'pcr' => 2297,
                'rtk_ag' => 2058,
                'state' => 'Pahang',
            ),
            494 => 
            array (
                'date' => '2021-10-02',
                'pcr' => 1590,
                'rtk_ag' => 5580,
                'state' => 'Perak',
            ),
            495 => 
            array (
                'date' => '2021-10-02',
                'pcr' => 153,
                'rtk_ag' => 386,
                'state' => 'Perlis',
            ),
            496 => 
            array (
                'date' => '2021-10-02',
                'pcr' => 1825,
                'rtk_ag' => 7666,
                'state' => 'Pulau Pinang',
            ),
            497 => 
            array (
                'date' => '2021-10-02',
                'pcr' => 2150,
                'rtk_ag' => 2958,
                'state' => 'Sabah',
            ),
            498 => 
            array (
                'date' => '2021-10-02',
                'pcr' => 4019,
                'rtk_ag' => 3985,
                'state' => 'Sarawak',
            ),
            499 => 
            array (
                'date' => '2021-10-02',
                'pcr' => 7120,
                'rtk_ag' => 17192,
                'state' => 'Selangor',
            ),
        ));
        \DB::table('test_states')->insert(array (
            0 => 
            array (
                'date' => '2021-10-02',
                'pcr' => 2630,
                'rtk_ag' => 3060,
                'state' => 'Terengganu',
            ),
            1 => 
            array (
                'date' => '2021-10-02',
                'pcr' => 3133,
                'rtk_ag' => 5805,
                'state' => 'W.P. Kuala Lumpur',
            ),
            2 => 
            array (
                'date' => '2021-10-02',
                'pcr' => 174,
                'rtk_ag' => 344,
                'state' => 'W.P. Labuan',
            ),
            3 => 
            array (
                'date' => '2021-10-02',
                'pcr' => 305,
                'rtk_ag' => 141,
                'state' => 'W.P. Putrajaya',
            ),
            4 => 
            array (
                'date' => '2021-10-03',
                'pcr' => 3856,
                'rtk_ag' => 10869,
                'state' => 'Johor',
            ),
            5 => 
            array (
                'date' => '2021-10-03',
                'pcr' => 979,
                'rtk_ag' => 5471,
                'state' => 'Kedah',
            ),
            6 => 
            array (
                'date' => '2021-10-03',
                'pcr' => 1116,
                'rtk_ag' => 2925,
                'state' => 'Kelantan',
            ),
            7 => 
            array (
                'date' => '2021-10-03',
                'pcr' => 694,
                'rtk_ag' => 1483,
                'state' => 'Melaka',
            ),
            8 => 
            array (
                'date' => '2021-10-03',
                'pcr' => 924,
                'rtk_ag' => 2193,
                'state' => 'Negeri Sembilan',
            ),
            9 => 
            array (
                'date' => '2021-10-03',
                'pcr' => 1860,
                'rtk_ag' => 2782,
                'state' => 'Pahang',
            ),
            10 => 
            array (
                'date' => '2021-10-03',
                'pcr' => 914,
                'rtk_ag' => 5597,
                'state' => 'Perak',
            ),
            11 => 
            array (
                'date' => '2021-10-03',
                'pcr' => 89,
                'rtk_ag' => 393,
                'state' => 'Perlis',
            ),
            12 => 
            array (
                'date' => '2021-10-03',
                'pcr' => 1249,
                'rtk_ag' => 6786,
                'state' => 'Pulau Pinang',
            ),
            13 => 
            array (
                'date' => '2021-10-03',
                'pcr' => 1453,
                'rtk_ag' => 3160,
                'state' => 'Sabah',
            ),
            14 => 
            array (
                'date' => '2021-10-03',
                'pcr' => 2626,
                'rtk_ag' => 3665,
                'state' => 'Sarawak',
            ),
            15 => 
            array (
                'date' => '2021-10-03',
                'pcr' => 6475,
                'rtk_ag' => 15940,
                'state' => 'Selangor',
            ),
            16 => 
            array (
                'date' => '2021-10-03',
                'pcr' => 2511,
                'rtk_ag' => 3578,
                'state' => 'Terengganu',
            ),
            17 => 
            array (
                'date' => '2021-10-03',
                'pcr' => 2169,
                'rtk_ag' => 5076,
                'state' => 'W.P. Kuala Lumpur',
            ),
            18 => 
            array (
                'date' => '2021-10-03',
                'pcr' => 147,
                'rtk_ag' => 232,
                'state' => 'W.P. Labuan',
            ),
            19 => 
            array (
                'date' => '2021-10-03',
                'pcr' => 112,
                'rtk_ag' => 147,
                'state' => 'W.P. Putrajaya',
            ),
            20 => 
            array (
                'date' => '2021-10-04',
                'pcr' => 4661,
                'rtk_ag' => 20342,
                'state' => 'Johor',
            ),
            21 => 
            array (
                'date' => '2021-10-04',
                'pcr' => 930,
                'rtk_ag' => 7894,
                'state' => 'Kedah',
            ),
            22 => 
            array (
                'date' => '2021-10-04',
                'pcr' => 2463,
                'rtk_ag' => 3058,
                'state' => 'Kelantan',
            ),
            23 => 
            array (
                'date' => '2021-10-04',
                'pcr' => 759,
                'rtk_ag' => 6003,
                'state' => 'Melaka',
            ),
            24 => 
            array (
                'date' => '2021-10-04',
                'pcr' => 1145,
                'rtk_ag' => 5591,
                'state' => 'Negeri Sembilan',
            ),
            25 => 
            array (
                'date' => '2021-10-04',
                'pcr' => 2528,
                'rtk_ag' => 5542,
                'state' => 'Pahang',
            ),
            26 => 
            array (
                'date' => '2021-10-04',
                'pcr' => 952,
                'rtk_ag' => 8721,
                'state' => 'Perak',
            ),
            27 => 
            array (
                'date' => '2021-10-04',
                'pcr' => 89,
                'rtk_ag' => 473,
                'state' => 'Perlis',
            ),
            28 => 
            array (
                'date' => '2021-10-04',
                'pcr' => 1543,
                'rtk_ag' => 13996,
                'state' => 'Pulau Pinang',
            ),
            29 => 
            array (
                'date' => '2021-10-04',
                'pcr' => 1390,
                'rtk_ag' => 4989,
                'state' => 'Sabah',
            ),
            30 => 
            array (
                'date' => '2021-10-04',
                'pcr' => 3402,
                'rtk_ag' => 7029,
                'state' => 'Sarawak',
            ),
            31 => 
            array (
                'date' => '2021-10-04',
                'pcr' => 9420,
                'rtk_ag' => 41047,
                'state' => 'Selangor',
            ),
            32 => 
            array (
                'date' => '2021-10-04',
                'pcr' => 1979,
                'rtk_ag' => 3001,
                'state' => 'Terengganu',
            ),
            33 => 
            array (
                'date' => '2021-10-04',
                'pcr' => 3575,
                'rtk_ag' => 12397,
                'state' => 'W.P. Kuala Lumpur',
            ),
            34 => 
            array (
                'date' => '2021-10-04',
                'pcr' => 148,
                'rtk_ag' => 602,
                'state' => 'W.P. Labuan',
            ),
            35 => 
            array (
                'date' => '2021-10-04',
                'pcr' => 196,
                'rtk_ag' => 515,
                'state' => 'W.P. Putrajaya',
            ),
            36 => 
            array (
                'date' => '2021-10-05',
                'pcr' => 5339,
                'rtk_ag' => 16242,
                'state' => 'Johor',
            ),
            37 => 
            array (
                'date' => '2021-10-05',
                'pcr' => 1718,
                'rtk_ag' => 6031,
                'state' => 'Kedah',
            ),
            38 => 
            array (
                'date' => '2021-10-05',
                'pcr' => 1396,
                'rtk_ag' => 2684,
                'state' => 'Kelantan',
            ),
            39 => 
            array (
                'date' => '2021-10-05',
                'pcr' => 1502,
                'rtk_ag' => 3278,
                'state' => 'Melaka',
            ),
            40 => 
            array (
                'date' => '2021-10-05',
                'pcr' => 1136,
                'rtk_ag' => 5590,
                'state' => 'Negeri Sembilan',
            ),
            41 => 
            array (
                'date' => '2021-10-05',
                'pcr' => 2089,
                'rtk_ag' => 4075,
                'state' => 'Pahang',
            ),
            42 => 
            array (
                'date' => '2021-10-05',
                'pcr' => 2482,
                'rtk_ag' => 8140,
                'state' => 'Perak',
            ),
            43 => 
            array (
                'date' => '2021-10-05',
                'pcr' => 118,
                'rtk_ag' => 406,
                'state' => 'Perlis',
            ),
            44 => 
            array (
                'date' => '2021-10-05',
                'pcr' => 2353,
                'rtk_ag' => 11355,
                'state' => 'Pulau Pinang',
            ),
            45 => 
            array (
                'date' => '2021-10-05',
                'pcr' => 1719,
                'rtk_ag' => 4769,
                'state' => 'Sabah',
            ),
            46 => 
            array (
                'date' => '2021-10-05',
                'pcr' => 3813,
                'rtk_ag' => 5724,
                'state' => 'Sarawak',
            ),
            47 => 
            array (
                'date' => '2021-10-05',
                'pcr' => 11817,
                'rtk_ag' => 32423,
                'state' => 'Selangor',
            ),
            48 => 
            array (
                'date' => '2021-10-05',
                'pcr' => 2453,
                'rtk_ag' => 2572,
                'state' => 'Terengganu',
            ),
            49 => 
            array (
                'date' => '2021-10-05',
                'pcr' => 5795,
                'rtk_ag' => 9410,
                'state' => 'W.P. Kuala Lumpur',
            ),
            50 => 
            array (
                'date' => '2021-10-05',
                'pcr' => 297,
                'rtk_ag' => 475,
                'state' => 'W.P. Labuan',
            ),
            51 => 
            array (
                'date' => '2021-10-05',
                'pcr' => 201,
                'rtk_ag' => 371,
                'state' => 'W.P. Putrajaya',
            ),
            52 => 
            array (
                'date' => '2021-10-06',
                'pcr' => 5107,
                'rtk_ag' => 14520,
                'state' => 'Johor',
            ),
            53 => 
            array (
                'date' => '2021-10-06',
                'pcr' => 1117,
                'rtk_ag' => 6091,
                'state' => 'Kedah',
            ),
            54 => 
            array (
                'date' => '2021-10-06',
                'pcr' => 2143,
                'rtk_ag' => 2841,
                'state' => 'Kelantan',
            ),
            55 => 
            array (
                'date' => '2021-10-06',
                'pcr' => 1016,
                'rtk_ag' => 2488,
                'state' => 'Melaka',
            ),
            56 => 
            array (
                'date' => '2021-10-06',
                'pcr' => 1028,
                'rtk_ag' => 6819,
                'state' => 'Negeri Sembilan',
            ),
            57 => 
            array (
                'date' => '2021-10-06',
                'pcr' => 1577,
                'rtk_ag' => 4623,
                'state' => 'Pahang',
            ),
            58 => 
            array (
                'date' => '2021-10-06',
                'pcr' => 1513,
                'rtk_ag' => 7928,
                'state' => 'Perak',
            ),
            59 => 
            array (
                'date' => '2021-10-06',
                'pcr' => 343,
                'rtk_ag' => 364,
                'state' => 'Perlis',
            ),
            60 => 
            array (
                'date' => '2021-10-06',
                'pcr' => 1956,
                'rtk_ag' => 11781,
                'state' => 'Pulau Pinang',
            ),
            61 => 
            array (
                'date' => '2021-10-06',
                'pcr' => 1730,
                'rtk_ag' => 4528,
                'state' => 'Sabah',
            ),
            62 => 
            array (
                'date' => '2021-10-06',
                'pcr' => 3588,
                'rtk_ag' => 5323,
                'state' => 'Sarawak',
            ),
            63 => 
            array (
                'date' => '2021-10-06',
                'pcr' => 11197,
                'rtk_ag' => 31372,
                'state' => 'Selangor',
            ),
            64 => 
            array (
                'date' => '2021-10-06',
                'pcr' => 2325,
                'rtk_ag' => 2795,
                'state' => 'Terengganu',
            ),
            65 => 
            array (
                'date' => '2021-10-06',
                'pcr' => 4643,
                'rtk_ag' => 8022,
                'state' => 'W.P. Kuala Lumpur',
            ),
            66 => 
            array (
                'date' => '2021-10-06',
                'pcr' => 316,
                'rtk_ag' => 608,
                'state' => 'W.P. Labuan',
            ),
            67 => 
            array (
                'date' => '2021-10-06',
                'pcr' => 194,
                'rtk_ag' => 343,
                'state' => 'W.P. Putrajaya',
            ),
            68 => 
            array (
                'date' => '2021-10-07',
                'pcr' => 4047,
                'rtk_ag' => 14339,
                'state' => 'Johor',
            ),
            69 => 
            array (
                'date' => '2021-10-07',
                'pcr' => 1128,
                'rtk_ag' => 5357,
                'state' => 'Kedah',
            ),
            70 => 
            array (
                'date' => '2021-10-07',
                'pcr' => 1348,
                'rtk_ag' => 2868,
                'state' => 'Kelantan',
            ),
            71 => 
            array (
                'date' => '2021-10-07',
                'pcr' => 1364,
                'rtk_ag' => 2398,
                'state' => 'Melaka',
            ),
            72 => 
            array (
                'date' => '2021-10-07',
                'pcr' => 1489,
                'rtk_ag' => 4091,
                'state' => 'Negeri Sembilan',
            ),
            73 => 
            array (
                'date' => '2021-10-07',
                'pcr' => 2384,
                'rtk_ag' => 3931,
                'state' => 'Pahang',
            ),
            74 => 
            array (
                'date' => '2021-10-07',
                'pcr' => 1350,
                'rtk_ag' => 8078,
                'state' => 'Perak',
            ),
            75 => 
            array (
                'date' => '2021-10-07',
                'pcr' => 157,
                'rtk_ag' => 515,
                'state' => 'Perlis',
            ),
            76 => 
            array (
                'date' => '2021-10-07',
                'pcr' => 1664,
                'rtk_ag' => 11708,
                'state' => 'Pulau Pinang',
            ),
            77 => 
            array (
                'date' => '2021-10-07',
                'pcr' => 1783,
                'rtk_ag' => 4177,
                'state' => 'Sabah',
            ),
            78 => 
            array (
                'date' => '2021-10-07',
                'pcr' => 3241,
                'rtk_ag' => 5146,
                'state' => 'Sarawak',
            ),
            79 => 
            array (
                'date' => '2021-10-07',
                'pcr' => 8347,
                'rtk_ag' => 27969,
                'state' => 'Selangor',
            ),
            80 => 
            array (
                'date' => '2021-10-07',
                'pcr' => 1968,
                'rtk_ag' => 2382,
                'state' => 'Terengganu',
            ),
            81 => 
            array (
                'date' => '2021-10-07',
                'pcr' => 4922,
                'rtk_ag' => 6131,
                'state' => 'W.P. Kuala Lumpur',
            ),
            82 => 
            array (
                'date' => '2021-10-07',
                'pcr' => 52,
                'rtk_ag' => 660,
                'state' => 'W.P. Labuan',
            ),
            83 => 
            array (
                'date' => '2021-10-07',
                'pcr' => 116,
                'rtk_ag' => 403,
                'state' => 'W.P. Putrajaya',
            ),
            84 => 
            array (
                'date' => '2021-10-08',
                'pcr' => 3885,
                'rtk_ag' => 11840,
                'state' => 'Johor',
            ),
            85 => 
            array (
                'date' => '2021-10-08',
                'pcr' => 756,
                'rtk_ag' => 4302,
                'state' => 'Kedah',
            ),
            86 => 
            array (
                'date' => '2021-10-08',
                'pcr' => 2281,
                'rtk_ag' => 1745,
                'state' => 'Kelantan',
            ),
            87 => 
            array (
                'date' => '2021-10-08',
                'pcr' => 885,
                'rtk_ag' => 2691,
                'state' => 'Melaka',
            ),
            88 => 
            array (
                'date' => '2021-10-08',
                'pcr' => 1097,
                'rtk_ag' => 5963,
                'state' => 'Negeri Sembilan',
            ),
            89 => 
            array (
                'date' => '2021-10-08',
                'pcr' => 2415,
                'rtk_ag' => 4220,
                'state' => 'Pahang',
            ),
            90 => 
            array (
                'date' => '2021-10-08',
                'pcr' => 1470,
                'rtk_ag' => 7421,
                'state' => 'Perak',
            ),
            91 => 
            array (
                'date' => '2021-10-08',
                'pcr' => 145,
                'rtk_ag' => 450,
                'state' => 'Perlis',
            ),
            92 => 
            array (
                'date' => '2021-10-08',
                'pcr' => 1730,
                'rtk_ag' => 9631,
                'state' => 'Pulau Pinang',
            ),
            93 => 
            array (
                'date' => '2021-10-08',
                'pcr' => 1937,
                'rtk_ag' => 3645,
                'state' => 'Sabah',
            ),
            94 => 
            array (
                'date' => '2021-10-08',
                'pcr' => 3107,
                'rtk_ag' => 5359,
                'state' => 'Sarawak',
            ),
            95 => 
            array (
                'date' => '2021-10-08',
                'pcr' => 8111,
                'rtk_ag' => 24793,
                'state' => 'Selangor',
            ),
            96 => 
            array (
                'date' => '2021-10-08',
                'pcr' => 1746,
                'rtk_ag' => 1759,
                'state' => 'Terengganu',
            ),
            97 => 
            array (
                'date' => '2021-10-08',
                'pcr' => 2852,
                'rtk_ag' => 5523,
                'state' => 'W.P. Kuala Lumpur',
            ),
            98 => 
            array (
                'date' => '2021-10-08',
                'pcr' => 88,
                'rtk_ag' => 798,
                'state' => 'W.P. Labuan',
            ),
            99 => 
            array (
                'date' => '2021-10-08',
                'pcr' => 186,
                'rtk_ag' => 315,
                'state' => 'W.P. Putrajaya',
            ),
            100 => 
            array (
                'date' => '2021-10-09',
                'pcr' => 3087,
                'rtk_ag' => 9665,
                'state' => 'Johor',
            ),
            101 => 
            array (
                'date' => '2021-10-09',
                'pcr' => 1083,
                'rtk_ag' => 3204,
                'state' => 'Kedah',
            ),
            102 => 
            array (
                'date' => '2021-10-09',
                'pcr' => 978,
                'rtk_ag' => 2092,
                'state' => 'Kelantan',
            ),
            103 => 
            array (
                'date' => '2021-10-09',
                'pcr' => 741,
                'rtk_ag' => 1926,
                'state' => 'Melaka',
            ),
            104 => 
            array (
                'date' => '2021-10-09',
                'pcr' => 1269,
                'rtk_ag' => 4196,
                'state' => 'Negeri Sembilan',
            ),
            105 => 
            array (
                'date' => '2021-10-09',
                'pcr' => 2006,
                'rtk_ag' => 2823,
                'state' => 'Pahang',
            ),
            106 => 
            array (
                'date' => '2021-10-09',
                'pcr' => 1386,
                'rtk_ag' => 4389,
                'state' => 'Perak',
            ),
            107 => 
            array (
                'date' => '2021-10-09',
                'pcr' => 119,
                'rtk_ag' => 490,
                'state' => 'Perlis',
            ),
            108 => 
            array (
                'date' => '2021-10-09',
                'pcr' => 2060,
                'rtk_ag' => 6011,
                'state' => 'Pulau Pinang',
            ),
            109 => 
            array (
                'date' => '2021-10-09',
                'pcr' => 1437,
                'rtk_ag' => 3268,
                'state' => 'Sabah',
            ),
            110 => 
            array (
                'date' => '2021-10-09',
                'pcr' => 2918,
                'rtk_ag' => 4175,
                'state' => 'Sarawak',
            ),
            111 => 
            array (
                'date' => '2021-10-09',
                'pcr' => 7084,
                'rtk_ag' => 16198,
                'state' => 'Selangor',
            ),
            112 => 
            array (
                'date' => '2021-10-09',
                'pcr' => 1511,
                'rtk_ag' => 3633,
                'state' => 'Terengganu',
            ),
            113 => 
            array (
                'date' => '2021-10-09',
                'pcr' => 2712,
                'rtk_ag' => 4389,
                'state' => 'W.P. Kuala Lumpur',
            ),
            114 => 
            array (
                'date' => '2021-10-09',
                'pcr' => 112,
                'rtk_ag' => 541,
                'state' => 'W.P. Labuan',
            ),
            115 => 
            array (
                'date' => '2021-10-09',
                'pcr' => 246,
                'rtk_ag' => 260,
                'state' => 'W.P. Putrajaya',
            ),
            116 => 
            array (
                'date' => '2021-10-10',
                'pcr' => 2773,
                'rtk_ag' => 10960,
                'state' => 'Johor',
            ),
            117 => 
            array (
                'date' => '2021-10-10',
                'pcr' => 771,
                'rtk_ag' => 3924,
                'state' => 'Kedah',
            ),
            118 => 
            array (
                'date' => '2021-10-10',
                'pcr' => 1357,
                'rtk_ag' => 3218,
                'state' => 'Kelantan',
            ),
            119 => 
            array (
                'date' => '2021-10-10',
                'pcr' => 834,
                'rtk_ag' => 2438,
                'state' => 'Melaka',
            ),
            120 => 
            array (
                'date' => '2021-10-10',
                'pcr' => 937,
                'rtk_ag' => 4002,
                'state' => 'Negeri Sembilan',
            ),
            121 => 
            array (
                'date' => '2021-10-10',
                'pcr' => 1382,
                'rtk_ag' => 2666,
                'state' => 'Pahang',
            ),
            122 => 
            array (
                'date' => '2021-10-10',
                'pcr' => 1020,
                'rtk_ag' => 3148,
                'state' => 'Perak',
            ),
            123 => 
            array (
                'date' => '2021-10-10',
                'pcr' => 70,
                'rtk_ag' => 449,
                'state' => 'Perlis',
            ),
            124 => 
            array (
                'date' => '2021-10-10',
                'pcr' => 1104,
                'rtk_ag' => 5831,
                'state' => 'Pulau Pinang',
            ),
            125 => 
            array (
                'date' => '2021-10-10',
                'pcr' => 1518,
                'rtk_ag' => 2674,
                'state' => 'Sabah',
            ),
            126 => 
            array (
                'date' => '2021-10-10',
                'pcr' => 2400,
                'rtk_ag' => 3609,
                'state' => 'Sarawak',
            ),
            127 => 
            array (
                'date' => '2021-10-10',
                'pcr' => 7234,
                'rtk_ag' => 15261,
                'state' => 'Selangor',
            ),
            128 => 
            array (
                'date' => '2021-10-10',
                'pcr' => 1174,
                'rtk_ag' => 3916,
                'state' => 'Terengganu',
            ),
            129 => 
            array (
                'date' => '2021-10-10',
                'pcr' => 2221,
                'rtk_ag' => 4739,
                'state' => 'W.P. Kuala Lumpur',
            ),
            130 => 
            array (
                'date' => '2021-10-10',
                'pcr' => 18,
                'rtk_ag' => 338,
                'state' => 'W.P. Labuan',
            ),
            131 => 
            array (
                'date' => '2021-10-10',
                'pcr' => 167,
                'rtk_ag' => 268,
                'state' => 'W.P. Putrajaya',
            ),
            132 => 
            array (
                'date' => '2021-10-11',
                'pcr' => 5061,
                'rtk_ag' => 20958,
                'state' => 'Johor',
            ),
            133 => 
            array (
                'date' => '2021-10-11',
                'pcr' => 941,
                'rtk_ag' => 6048,
                'state' => 'Kedah',
            ),
            134 => 
            array (
                'date' => '2021-10-11',
                'pcr' => 1780,
                'rtk_ag' => 3232,
                'state' => 'Kelantan',
            ),
            135 => 
            array (
                'date' => '2021-10-11',
                'pcr' => 716,
                'rtk_ag' => 4334,
                'state' => 'Melaka',
            ),
            136 => 
            array (
                'date' => '2021-10-11',
                'pcr' => 1156,
                'rtk_ag' => 6608,
                'state' => 'Negeri Sembilan',
            ),
            137 => 
            array (
                'date' => '2021-10-11',
                'pcr' => 1055,
                'rtk_ag' => 5118,
                'state' => 'Pahang',
            ),
            138 => 
            array (
                'date' => '2021-10-11',
                'pcr' => 811,
                'rtk_ag' => 7911,
                'state' => 'Perak',
            ),
            139 => 
            array (
                'date' => '2021-10-11',
                'pcr' => 113,
                'rtk_ag' => 348,
                'state' => 'Perlis',
            ),
            140 => 
            array (
                'date' => '2021-10-11',
                'pcr' => 1244,
                'rtk_ag' => 13081,
                'state' => 'Pulau Pinang',
            ),
            141 => 
            array (
                'date' => '2021-10-11',
                'pcr' => 1318,
                'rtk_ag' => 5410,
                'state' => 'Sabah',
            ),
            142 => 
            array (
                'date' => '2021-10-11',
                'pcr' => 2856,
                'rtk_ag' => 6093,
                'state' => 'Sarawak',
            ),
            143 => 
            array (
                'date' => '2021-10-11',
                'pcr' => 8603,
                'rtk_ag' => 35302,
                'state' => 'Selangor',
            ),
            144 => 
            array (
                'date' => '2021-10-11',
                'pcr' => 1351,
                'rtk_ag' => 2643,
                'state' => 'Terengganu',
            ),
            145 => 
            array (
                'date' => '2021-10-11',
                'pcr' => 4853,
                'rtk_ag' => 10698,
                'state' => 'W.P. Kuala Lumpur',
            ),
            146 => 
            array (
                'date' => '2021-10-11',
                'pcr' => 235,
                'rtk_ag' => 694,
                'state' => 'W.P. Labuan',
            ),
            147 => 
            array (
                'date' => '2021-10-11',
                'pcr' => 198,
                'rtk_ag' => 462,
                'state' => 'W.P. Putrajaya',
            ),
            148 => 
            array (
                'date' => '2021-10-12',
                'pcr' => 4918,
                'rtk_ag' => 18160,
                'state' => 'Johor',
            ),
            149 => 
            array (
                'date' => '2021-10-12',
                'pcr' => 1101,
                'rtk_ag' => 4400,
                'state' => 'Kedah',
            ),
            150 => 
            array (
                'date' => '2021-10-12',
                'pcr' => 1199,
                'rtk_ag' => 3011,
                'state' => 'Kelantan',
            ),
            151 => 
            array (
                'date' => '2021-10-12',
                'pcr' => 1139,
                'rtk_ag' => 3117,
                'state' => 'Melaka',
            ),
            152 => 
            array (
                'date' => '2021-10-12',
                'pcr' => 1432,
                'rtk_ag' => 5813,
                'state' => 'Negeri Sembilan',
            ),
            153 => 
            array (
                'date' => '2021-10-12',
                'pcr' => 1382,
                'rtk_ag' => 3350,
                'state' => 'Pahang',
            ),
            154 => 
            array (
                'date' => '2021-10-12',
                'pcr' => 1570,
                'rtk_ag' => 5668,
                'state' => 'Perak',
            ),
            155 => 
            array (
                'date' => '2021-10-12',
                'pcr' => 102,
                'rtk_ag' => 271,
                'state' => 'Perlis',
            ),
            156 => 
            array (
                'date' => '2021-10-12',
                'pcr' => 2160,
                'rtk_ag' => 10404,
                'state' => 'Pulau Pinang',
            ),
            157 => 
            array (
                'date' => '2021-10-12',
                'pcr' => 1508,
                'rtk_ag' => 4272,
                'state' => 'Sabah',
            ),
            158 => 
            array (
                'date' => '2021-10-12',
                'pcr' => 3298,
                'rtk_ag' => 6206,
                'state' => 'Sarawak',
            ),
            159 => 
            array (
                'date' => '2021-10-12',
                'pcr' => 13129,
                'rtk_ag' => 31412,
                'state' => 'Selangor',
            ),
            160 => 
            array (
                'date' => '2021-10-12',
                'pcr' => 1419,
                'rtk_ag' => 2752,
                'state' => 'Terengganu',
            ),
            161 => 
            array (
                'date' => '2021-10-12',
                'pcr' => 5214,
                'rtk_ag' => 8488,
                'state' => 'W.P. Kuala Lumpur',
            ),
            162 => 
            array (
                'date' => '2021-10-12',
                'pcr' => 64,
                'rtk_ag' => 701,
                'state' => 'W.P. Labuan',
            ),
            163 => 
            array (
                'date' => '2021-10-12',
                'pcr' => 224,
                'rtk_ag' => 462,
                'state' => 'W.P. Putrajaya',
            ),
            164 => 
            array (
                'date' => '2021-10-13',
                'pcr' => 3877,
                'rtk_ag' => 14384,
                'state' => 'Johor',
            ),
            165 => 
            array (
                'date' => '2021-10-13',
                'pcr' => 1003,
                'rtk_ag' => 4390,
                'state' => 'Kedah',
            ),
            166 => 
            array (
                'date' => '2021-10-13',
                'pcr' => 1223,
                'rtk_ag' => 3075,
                'state' => 'Kelantan',
            ),
            167 => 
            array (
                'date' => '2021-10-13',
                'pcr' => 1134,
                'rtk_ag' => 4603,
                'state' => 'Melaka',
            ),
            168 => 
            array (
                'date' => '2021-10-13',
                'pcr' => 1027,
                'rtk_ag' => 5679,
                'state' => 'Negeri Sembilan',
            ),
            169 => 
            array (
                'date' => '2021-10-13',
                'pcr' => 1846,
                'rtk_ag' => 4442,
                'state' => 'Pahang',
            ),
            170 => 
            array (
                'date' => '2021-10-13',
                'pcr' => 1315,
                'rtk_ag' => 6046,
                'state' => 'Perak',
            ),
            171 => 
            array (
                'date' => '2021-10-13',
                'pcr' => 129,
                'rtk_ag' => 285,
                'state' => 'Perlis',
            ),
            172 => 
            array (
                'date' => '2021-10-13',
                'pcr' => 1838,
                'rtk_ag' => 10110,
                'state' => 'Pulau Pinang',
            ),
            173 => 
            array (
                'date' => '2021-10-13',
                'pcr' => 1382,
                'rtk_ag' => 4302,
                'state' => 'Sabah',
            ),
            174 => 
            array (
                'date' => '2021-10-13',
                'pcr' => 2980,
                'rtk_ag' => 5781,
                'state' => 'Sarawak',
            ),
            175 => 
            array (
                'date' => '2021-10-13',
                'pcr' => 9496,
                'rtk_ag' => 26540,
                'state' => 'Selangor',
            ),
            176 => 
            array (
                'date' => '2021-10-13',
                'pcr' => 1372,
                'rtk_ag' => 3171,
                'state' => 'Terengganu',
            ),
            177 => 
            array (
                'date' => '2021-10-13',
                'pcr' => 4155,
                'rtk_ag' => 8690,
                'state' => 'W.P. Kuala Lumpur',
            ),
            178 => 
            array (
                'date' => '2021-10-13',
                'pcr' => 109,
                'rtk_ag' => 806,
                'state' => 'W.P. Labuan',
            ),
            179 => 
            array (
                'date' => '2021-10-13',
                'pcr' => 191,
                'rtk_ag' => 434,
                'state' => 'W.P. Putrajaya',
            ),
            180 => 
            array (
                'date' => '2021-10-14',
                'pcr' => 3012,
                'rtk_ag' => 14941,
                'state' => 'Johor',
            ),
            181 => 
            array (
                'date' => '2021-10-14',
                'pcr' => 931,
                'rtk_ag' => 4942,
                'state' => 'Kedah',
            ),
            182 => 
            array (
                'date' => '2021-10-14',
                'pcr' => 1234,
                'rtk_ag' => 3180,
                'state' => 'Kelantan',
            ),
            183 => 
            array (
                'date' => '2021-10-14',
                'pcr' => 897,
                'rtk_ag' => 4181,
                'state' => 'Melaka',
            ),
            184 => 
            array (
                'date' => '2021-10-14',
                'pcr' => 1506,
                'rtk_ag' => 3979,
                'state' => 'Negeri Sembilan',
            ),
            185 => 
            array (
                'date' => '2021-10-14',
                'pcr' => 1576,
                'rtk_ag' => 3754,
                'state' => 'Pahang',
            ),
            186 => 
            array (
                'date' => '2021-10-14',
                'pcr' => 1158,
                'rtk_ag' => 5688,
                'state' => 'Perak',
            ),
            187 => 
            array (
                'date' => '2021-10-14',
                'pcr' => 118,
                'rtk_ag' => 344,
                'state' => 'Perlis',
            ),
            188 => 
            array (
                'date' => '2021-10-14',
                'pcr' => 1238,
                'rtk_ag' => 10009,
                'state' => 'Pulau Pinang',
            ),
            189 => 
            array (
                'date' => '2021-10-14',
                'pcr' => 1306,
                'rtk_ag' => 5613,
                'state' => 'Sabah',
            ),
            190 => 
            array (
                'date' => '2021-10-14',
                'pcr' => 2204,
                'rtk_ag' => 5563,
                'state' => 'Sarawak',
            ),
            191 => 
            array (
                'date' => '2021-10-14',
                'pcr' => 8300,
                'rtk_ag' => 28134,
                'state' => 'Selangor',
            ),
            192 => 
            array (
                'date' => '2021-10-14',
                'pcr' => 1257,
                'rtk_ag' => 3124,
                'state' => 'Terengganu',
            ),
            193 => 
            array (
                'date' => '2021-10-14',
                'pcr' => 4063,
                'rtk_ag' => 8041,
                'state' => 'W.P. Kuala Lumpur',
            ),
            194 => 
            array (
                'date' => '2021-10-14',
                'pcr' => 42,
                'rtk_ag' => 1297,
                'state' => 'W.P. Labuan',
            ),
            195 => 
            array (
                'date' => '2021-10-14',
                'pcr' => 179,
                'rtk_ag' => 529,
                'state' => 'W.P. Putrajaya',
            ),
            196 => 
            array (
                'date' => '2021-10-15',
                'pcr' => 3498,
                'rtk_ag' => 17149,
                'state' => 'Johor',
            ),
            197 => 
            array (
                'date' => '2021-10-15',
                'pcr' => 819,
                'rtk_ag' => 5048,
                'state' => 'Kedah',
            ),
            198 => 
            array (
                'date' => '2021-10-15',
                'pcr' => 1287,
                'rtk_ag' => 2107,
                'state' => 'Kelantan',
            ),
            199 => 
            array (
                'date' => '2021-10-15',
                'pcr' => 941,
                'rtk_ag' => 4340,
                'state' => 'Melaka',
            ),
            200 => 
            array (
                'date' => '2021-10-15',
                'pcr' => 1125,
                'rtk_ag' => 4783,
                'state' => 'Negeri Sembilan',
            ),
            201 => 
            array (
                'date' => '2021-10-15',
                'pcr' => 1926,
                'rtk_ag' => 4226,
                'state' => 'Pahang',
            ),
            202 => 
            array (
                'date' => '2021-10-15',
                'pcr' => 1745,
                'rtk_ag' => 6143,
                'state' => 'Perak',
            ),
            203 => 
            array (
                'date' => '2021-10-15',
                'pcr' => 50,
                'rtk_ag' => 298,
                'state' => 'Perlis',
            ),
            204 => 
            array (
                'date' => '2021-10-15',
                'pcr' => 1494,
                'rtk_ag' => 10262,
                'state' => 'Pulau Pinang',
            ),
            205 => 
            array (
                'date' => '2021-10-15',
                'pcr' => 1258,
                'rtk_ag' => 4829,
                'state' => 'Sabah',
            ),
            206 => 
            array (
                'date' => '2021-10-15',
                'pcr' => 2835,
                'rtk_ag' => 5681,
                'state' => 'Sarawak',
            ),
            207 => 
            array (
                'date' => '2021-10-15',
                'pcr' => 8567,
                'rtk_ag' => 29650,
                'state' => 'Selangor',
            ),
            208 => 
            array (
                'date' => '2021-10-15',
                'pcr' => 1320,
                'rtk_ag' => 2575,
                'state' => 'Terengganu',
            ),
            209 => 
            array (
                'date' => '2021-10-15',
                'pcr' => 3002,
                'rtk_ag' => 8989,
                'state' => 'W.P. Kuala Lumpur',
            ),
            210 => 
            array (
                'date' => '2021-10-15',
                'pcr' => 58,
                'rtk_ag' => 1064,
                'state' => 'W.P. Labuan',
            ),
            211 => 
            array (
                'date' => '2021-10-15',
                'pcr' => 219,
                'rtk_ag' => 521,
                'state' => 'W.P. Putrajaya',
            ),
            212 => 
            array (
                'date' => '2021-10-16',
                'pcr' => 3010,
                'rtk_ag' => 9353,
                'state' => 'Johor',
            ),
            213 => 
            array (
                'date' => '2021-10-16',
                'pcr' => 893,
                'rtk_ag' => 3431,
                'state' => 'Kedah',
            ),
            214 => 
            array (
                'date' => '2021-10-16',
                'pcr' => 792,
                'rtk_ag' => 2778,
                'state' => 'Kelantan',
            ),
            215 => 
            array (
                'date' => '2021-10-16',
                'pcr' => 1026,
                'rtk_ag' => 2427,
                'state' => 'Melaka',
            ),
            216 => 
            array (
                'date' => '2021-10-16',
                'pcr' => 1663,
                'rtk_ag' => 3081,
                'state' => 'Negeri Sembilan',
            ),
            217 => 
            array (
                'date' => '2021-10-16',
                'pcr' => 1202,
                'rtk_ag' => 3078,
                'state' => 'Pahang',
            ),
            218 => 
            array (
                'date' => '2021-10-16',
                'pcr' => 1605,
                'rtk_ag' => 4608,
                'state' => 'Perak',
            ),
            219 => 
            array (
                'date' => '2021-10-16',
                'pcr' => 126,
                'rtk_ag' => 170,
                'state' => 'Perlis',
            ),
            220 => 
            array (
                'date' => '2021-10-16',
                'pcr' => 1588,
                'rtk_ag' => 9361,
                'state' => 'Pulau Pinang',
            ),
            221 => 
            array (
                'date' => '2021-10-16',
                'pcr' => 1661,
                'rtk_ag' => 3507,
                'state' => 'Sabah',
            ),
            222 => 
            array (
                'date' => '2021-10-16',
                'pcr' => 2542,
                'rtk_ag' => 4105,
                'state' => 'Sarawak',
            ),
            223 => 
            array (
                'date' => '2021-10-16',
                'pcr' => 6913,
                'rtk_ag' => 21982,
                'state' => 'Selangor',
            ),
            224 => 
            array (
                'date' => '2021-10-16',
                'pcr' => 899,
                'rtk_ag' => 3725,
                'state' => 'Terengganu',
            ),
            225 => 
            array (
                'date' => '2021-10-16',
                'pcr' => 2990,
                'rtk_ag' => 5587,
                'state' => 'W.P. Kuala Lumpur',
            ),
            226 => 
            array (
                'date' => '2021-10-16',
                'pcr' => 45,
                'rtk_ag' => 765,
                'state' => 'W.P. Labuan',
            ),
            227 => 
            array (
                'date' => '2021-10-16',
                'pcr' => 356,
                'rtk_ag' => 259,
                'state' => 'W.P. Putrajaya',
            ),
            228 => 
            array (
                'date' => '2021-10-17',
                'pcr' => 2616,
                'rtk_ag' => 9501,
                'state' => 'Johor',
            ),
            229 => 
            array (
                'date' => '2021-10-17',
                'pcr' => 695,
                'rtk_ag' => 4851,
                'state' => 'Kedah',
            ),
            230 => 
            array (
                'date' => '2021-10-17',
                'pcr' => 1007,
                'rtk_ag' => 3250,
                'state' => 'Kelantan',
            ),
            231 => 
            array (
                'date' => '2021-10-17',
                'pcr' => 437,
                'rtk_ag' => 1875,
                'state' => 'Melaka',
            ),
            232 => 
            array (
                'date' => '2021-10-17',
                'pcr' => 735,
                'rtk_ag' => 2125,
                'state' => 'Negeri Sembilan',
            ),
            233 => 
            array (
                'date' => '2021-10-17',
                'pcr' => 678,
                'rtk_ag' => 2655,
                'state' => 'Pahang',
            ),
            234 => 
            array (
                'date' => '2021-10-17',
                'pcr' => 986,
                'rtk_ag' => 4100,
                'state' => 'Perak',
            ),
            235 => 
            array (
                'date' => '2021-10-17',
                'pcr' => 31,
                'rtk_ag' => 169,
                'state' => 'Perlis',
            ),
            236 => 
            array (
                'date' => '2021-10-17',
                'pcr' => 647,
                'rtk_ag' => 6506,
                'state' => 'Pulau Pinang',
            ),
            237 => 
            array (
                'date' => '2021-10-17',
                'pcr' => 999,
                'rtk_ag' => 3672,
                'state' => 'Sabah',
            ),
            238 => 
            array (
                'date' => '2021-10-17',
                'pcr' => 1458,
                'rtk_ag' => 3610,
                'state' => 'Sarawak',
            ),
            239 => 
            array (
                'date' => '2021-10-17',
                'pcr' => 4882,
                'rtk_ag' => 18685,
                'state' => 'Selangor',
            ),
            240 => 
            array (
                'date' => '2021-10-17',
                'pcr' => 1031,
                'rtk_ag' => 3877,
                'state' => 'Terengganu',
            ),
            241 => 
            array (
                'date' => '2021-10-17',
                'pcr' => 2265,
                'rtk_ag' => 4247,
                'state' => 'W.P. Kuala Lumpur',
            ),
            242 => 
            array (
                'date' => '2021-10-17',
                'pcr' => 73,
                'rtk_ag' => 660,
                'state' => 'W.P. Labuan',
            ),
            243 => 
            array (
                'date' => '2021-10-17',
                'pcr' => 168,
                'rtk_ag' => 191,
                'state' => 'W.P. Putrajaya',
            ),
            244 => 
            array (
                'date' => '2021-10-18',
                'pcr' => 4058,
                'rtk_ag' => 19613,
                'state' => 'Johor',
            ),
            245 => 
            array (
                'date' => '2021-10-18',
                'pcr' => 747,
                'rtk_ag' => 6987,
                'state' => 'Kedah',
            ),
            246 => 
            array (
                'date' => '2021-10-18',
                'pcr' => 1077,
                'rtk_ag' => 2840,
                'state' => 'Kelantan',
            ),
            247 => 
            array (
                'date' => '2021-10-18',
                'pcr' => 675,
                'rtk_ag' => 4902,
                'state' => 'Melaka',
            ),
            248 => 
            array (
                'date' => '2021-10-18',
                'pcr' => 1157,
                'rtk_ag' => 7518,
                'state' => 'Negeri Sembilan',
            ),
            249 => 
            array (
                'date' => '2021-10-18',
                'pcr' => 563,
                'rtk_ag' => 4471,
                'state' => 'Pahang',
            ),
            250 => 
            array (
                'date' => '2021-10-18',
                'pcr' => 741,
                'rtk_ag' => 8326,
                'state' => 'Perak',
            ),
            251 => 
            array (
                'date' => '2021-10-18',
                'pcr' => 40,
                'rtk_ag' => 226,
                'state' => 'Perlis',
            ),
            252 => 
            array (
                'date' => '2021-10-18',
                'pcr' => 1311,
                'rtk_ag' => 14255,
                'state' => 'Pulau Pinang',
            ),
            253 => 
            array (
                'date' => '2021-10-18',
                'pcr' => 1190,
                'rtk_ag' => 4965,
                'state' => 'Sabah',
            ),
            254 => 
            array (
                'date' => '2021-10-18',
                'pcr' => 2508,
                'rtk_ag' => 5844,
                'state' => 'Sarawak',
            ),
            255 => 
            array (
                'date' => '2021-10-18',
                'pcr' => 8088,
                'rtk_ag' => 34311,
                'state' => 'Selangor',
            ),
            256 => 
            array (
                'date' => '2021-10-18',
                'pcr' => 929,
                'rtk_ag' => 3076,
                'state' => 'Terengganu',
            ),
            257 => 
            array (
                'date' => '2021-10-18',
                'pcr' => 4679,
                'rtk_ag' => 9029,
                'state' => 'W.P. Kuala Lumpur',
            ),
            258 => 
            array (
                'date' => '2021-10-18',
                'pcr' => 74,
                'rtk_ag' => 891,
                'state' => 'W.P. Labuan',
            ),
            259 => 
            array (
                'date' => '2021-10-18',
                'pcr' => 186,
                'rtk_ag' => 497,
                'state' => 'W.P. Putrajaya',
            ),
            260 => 
            array (
                'date' => '2021-10-19',
                'pcr' => 3957,
                'rtk_ag' => 11385,
                'state' => 'Johor',
            ),
            261 => 
            array (
                'date' => '2021-10-19',
                'pcr' => 1030,
                'rtk_ag' => 3620,
                'state' => 'Kedah',
            ),
            262 => 
            array (
                'date' => '2021-10-19',
                'pcr' => 812,
                'rtk_ag' => 1528,
                'state' => 'Kelantan',
            ),
            263 => 
            array (
                'date' => '2021-10-19',
                'pcr' => 1053,
                'rtk_ag' => 2805,
                'state' => 'Melaka',
            ),
            264 => 
            array (
                'date' => '2021-10-19',
                'pcr' => 1085,
                'rtk_ag' => 3352,
                'state' => 'Negeri Sembilan',
            ),
            265 => 
            array (
                'date' => '2021-10-19',
                'pcr' => 1196,
                'rtk_ag' => 1978,
                'state' => 'Pahang',
            ),
            266 => 
            array (
                'date' => '2021-10-19',
                'pcr' => 1761,
                'rtk_ag' => 4544,
                'state' => 'Perak',
            ),
            267 => 
            array (
                'date' => '2021-10-19',
                'pcr' => 73,
                'rtk_ag' => 160,
                'state' => 'Perlis',
            ),
            268 => 
            array (
                'date' => '2021-10-19',
                'pcr' => 1619,
                'rtk_ag' => 7843,
                'state' => 'Pulau Pinang',
            ),
            269 => 
            array (
                'date' => '2021-10-19',
                'pcr' => 1575,
                'rtk_ag' => 2874,
                'state' => 'Sabah',
            ),
            270 => 
            array (
                'date' => '2021-10-19',
                'pcr' => 2113,
                'rtk_ag' => 3507,
                'state' => 'Sarawak',
            ),
            271 => 
            array (
                'date' => '2021-10-19',
                'pcr' => 7944,
                'rtk_ag' => 20918,
                'state' => 'Selangor',
            ),
            272 => 
            array (
                'date' => '2021-10-19',
                'pcr' => 1410,
                'rtk_ag' => 2498,
                'state' => 'Terengganu',
            ),
            273 => 
            array (
                'date' => '2021-10-19',
                'pcr' => 3826,
                'rtk_ag' => 4648,
                'state' => 'W.P. Kuala Lumpur',
            ),
            274 => 
            array (
                'date' => '2021-10-19',
                'pcr' => 132,
                'rtk_ag' => 581,
                'state' => 'W.P. Labuan',
            ),
            275 => 
            array (
                'date' => '2021-10-19',
                'pcr' => 134,
                'rtk_ag' => 225,
                'state' => 'W.P. Putrajaya',
            ),
            276 => 
            array (
                'date' => '2021-10-20',
                'pcr' => 3509,
                'rtk_ag' => 14297,
                'state' => 'Johor',
            ),
            277 => 
            array (
                'date' => '2021-10-20',
                'pcr' => 536,
                'rtk_ag' => 6077,
                'state' => 'Kedah',
            ),
            278 => 
            array (
                'date' => '2021-10-20',
                'pcr' => 633,
                'rtk_ag' => 2563,
                'state' => 'Kelantan',
            ),
            279 => 
            array (
                'date' => '2021-10-20',
                'pcr' => 719,
                'rtk_ag' => 4833,
                'state' => 'Melaka',
            ),
            280 => 
            array (
                'date' => '2021-10-20',
                'pcr' => 893,
                'rtk_ag' => 8805,
                'state' => 'Negeri Sembilan',
            ),
            281 => 
            array (
                'date' => '2021-10-20',
                'pcr' => 992,
                'rtk_ag' => 5135,
                'state' => 'Pahang',
            ),
            282 => 
            array (
                'date' => '2021-10-20',
                'pcr' => 927,
                'rtk_ag' => 6680,
                'state' => 'Perak',
            ),
            283 => 
            array (
                'date' => '2021-10-20',
                'pcr' => 81,
                'rtk_ag' => 278,
                'state' => 'Perlis',
            ),
            284 => 
            array (
                'date' => '2021-10-20',
                'pcr' => 1059,
                'rtk_ag' => 13426,
                'state' => 'Pulau Pinang',
            ),
            285 => 
            array (
                'date' => '2021-10-20',
                'pcr' => 1462,
                'rtk_ag' => 4896,
                'state' => 'Sabah',
            ),
            286 => 
            array (
                'date' => '2021-10-20',
                'pcr' => 2422,
                'rtk_ag' => 5162,
                'state' => 'Sarawak',
            ),
            287 => 
            array (
                'date' => '2021-10-20',
                'pcr' => 7994,
                'rtk_ag' => 34176,
                'state' => 'Selangor',
            ),
            288 => 
            array (
                'date' => '2021-10-20',
                'pcr' => 975,
                'rtk_ag' => 3493,
                'state' => 'Terengganu',
            ),
            289 => 
            array (
                'date' => '2021-10-20',
                'pcr' => 3532,
                'rtk_ag' => 10196,
                'state' => 'W.P. Kuala Lumpur',
            ),
            290 => 
            array (
                'date' => '2021-10-20',
                'pcr' => 79,
                'rtk_ag' => 1080,
                'state' => 'W.P. Labuan',
            ),
            291 => 
            array (
                'date' => '2021-10-20',
                'pcr' => 172,
                'rtk_ag' => 560,
                'state' => 'W.P. Putrajaya',
            ),
            292 => 
            array (
                'date' => '2021-10-21',
                'pcr' => 3627,
                'rtk_ag' => 14114,
                'state' => 'Johor',
            ),
            293 => 
            array (
                'date' => '2021-10-21',
                'pcr' => 1054,
                'rtk_ag' => 5378,
                'state' => 'Kedah',
            ),
            294 => 
            array (
                'date' => '2021-10-21',
                'pcr' => 1041,
                'rtk_ag' => 2362,
                'state' => 'Kelantan',
            ),
            295 => 
            array (
                'date' => '2021-10-21',
                'pcr' => 929,
                'rtk_ag' => 3007,
                'state' => 'Melaka',
            ),
            296 => 
            array (
                'date' => '2021-10-21',
                'pcr' => 2019,
                'rtk_ag' => 5015,
                'state' => 'Negeri Sembilan',
            ),
            297 => 
            array (
                'date' => '2021-10-21',
                'pcr' => 1008,
                'rtk_ag' => 3694,
                'state' => 'Pahang',
            ),
            298 => 
            array (
                'date' => '2021-10-21',
                'pcr' => 1420,
                'rtk_ag' => 7378,
                'state' => 'Perak',
            ),
            299 => 
            array (
                'date' => '2021-10-21',
                'pcr' => 155,
                'rtk_ag' => 186,
                'state' => 'Perlis',
            ),
            300 => 
            array (
                'date' => '2021-10-21',
                'pcr' => 1525,
                'rtk_ag' => 12759,
                'state' => 'Pulau Pinang',
            ),
            301 => 
            array (
                'date' => '2021-10-21',
                'pcr' => 1065,
                'rtk_ag' => 4144,
                'state' => 'Sabah',
            ),
            302 => 
            array (
                'date' => '2021-10-21',
                'pcr' => 1700,
                'rtk_ag' => 5234,
                'state' => 'Sarawak',
            ),
            303 => 
            array (
                'date' => '2021-10-21',
                'pcr' => 9841,
                'rtk_ag' => 28828,
                'state' => 'Selangor',
            ),
            304 => 
            array (
                'date' => '2021-10-21',
                'pcr' => 1236,
                'rtk_ag' => 2516,
                'state' => 'Terengganu',
            ),
            305 => 
            array (
                'date' => '2021-10-21',
                'pcr' => 5692,
                'rtk_ag' => 7999,
                'state' => 'W.P. Kuala Lumpur',
            ),
            306 => 
            array (
                'date' => '2021-10-21',
                'pcr' => 21,
                'rtk_ag' => 1124,
                'state' => 'W.P. Labuan',
            ),
            307 => 
            array (
                'date' => '2021-10-21',
                'pcr' => 200,
                'rtk_ag' => 461,
                'state' => 'W.P. Putrajaya',
            ),
            308 => 
            array (
                'date' => '2021-10-22',
                'pcr' => 3487,
                'rtk_ag' => 13519,
                'state' => 'Johor',
            ),
            309 => 
            array (
                'date' => '2021-10-22',
                'pcr' => 783,
                'rtk_ag' => 3901,
                'state' => 'Kedah',
            ),
            310 => 
            array (
                'date' => '2021-10-22',
                'pcr' => 887,
                'rtk_ag' => 1506,
                'state' => 'Kelantan',
            ),
            311 => 
            array (
                'date' => '2021-10-22',
                'pcr' => 798,
                'rtk_ag' => 3024,
                'state' => 'Melaka',
            ),
            312 => 
            array (
                'date' => '2021-10-22',
                'pcr' => 1012,
                'rtk_ag' => 5855,
                'state' => 'Negeri Sembilan',
            ),
            313 => 
            array (
                'date' => '2021-10-22',
                'pcr' => 1015,
                'rtk_ag' => 3624,
                'state' => 'Pahang',
            ),
            314 => 
            array (
                'date' => '2021-10-22',
                'pcr' => 1282,
                'rtk_ag' => 6069,
                'state' => 'Perak',
            ),
            315 => 
            array (
                'date' => '2021-10-22',
                'pcr' => 62,
                'rtk_ag' => 157,
                'state' => 'Perlis',
            ),
            316 => 
            array (
                'date' => '2021-10-22',
                'pcr' => 1204,
                'rtk_ag' => 13291,
                'state' => 'Pulau Pinang',
            ),
            317 => 
            array (
                'date' => '2021-10-22',
                'pcr' => 1408,
                'rtk_ag' => 3820,
                'state' => 'Sabah',
            ),
            318 => 
            array (
                'date' => '2021-10-22',
                'pcr' => 1406,
                'rtk_ag' => 5201,
                'state' => 'Sarawak',
            ),
            319 => 
            array (
                'date' => '2021-10-22',
                'pcr' => 9090,
                'rtk_ag' => 25847,
                'state' => 'Selangor',
            ),
            320 => 
            array (
                'date' => '2021-10-22',
                'pcr' => 549,
                'rtk_ag' => 1885,
                'state' => 'Terengganu',
            ),
            321 => 
            array (
                'date' => '2021-10-22',
                'pcr' => 4555,
                'rtk_ag' => 6566,
                'state' => 'W.P. Kuala Lumpur',
            ),
            322 => 
            array (
                'date' => '2021-10-22',
                'pcr' => 74,
                'rtk_ag' => 1182,
                'state' => 'W.P. Labuan',
            ),
            323 => 
            array (
                'date' => '2021-10-22',
                'pcr' => 359,
                'rtk_ag' => 422,
                'state' => 'W.P. Putrajaya',
            ),
            324 => 
            array (
                'date' => '2021-10-23',
                'pcr' => 2988,
                'rtk_ag' => 8738,
                'state' => 'Johor',
            ),
            325 => 
            array (
                'date' => '2021-10-23',
                'pcr' => 785,
                'rtk_ag' => 3206,
                'state' => 'Kedah',
            ),
            326 => 
            array (
                'date' => '2021-10-23',
                'pcr' => 617,
                'rtk_ag' => 2122,
                'state' => 'Kelantan',
            ),
            327 => 
            array (
                'date' => '2021-10-23',
                'pcr' => 1125,
                'rtk_ag' => 2066,
                'state' => 'Melaka',
            ),
            328 => 
            array (
                'date' => '2021-10-23',
                'pcr' => 1369,
                'rtk_ag' => 4937,
                'state' => 'Negeri Sembilan',
            ),
            329 => 
            array (
                'date' => '2021-10-23',
                'pcr' => 761,
                'rtk_ag' => 2405,
                'state' => 'Pahang',
            ),
            330 => 
            array (
                'date' => '2021-10-23',
                'pcr' => 1373,
                'rtk_ag' => 4354,
                'state' => 'Perak',
            ),
            331 => 
            array (
                'date' => '2021-10-23',
                'pcr' => 96,
                'rtk_ag' => 181,
                'state' => 'Perlis',
            ),
            332 => 
            array (
                'date' => '2021-10-23',
                'pcr' => 1829,
                'rtk_ag' => 5952,
                'state' => 'Pulau Pinang',
            ),
            333 => 
            array (
                'date' => '2021-10-23',
                'pcr' => 1793,
                'rtk_ag' => 3145,
                'state' => 'Sabah',
            ),
            334 => 
            array (
                'date' => '2021-10-23',
                'pcr' => 2178,
                'rtk_ag' => 4073,
                'state' => 'Sarawak',
            ),
            335 => 
            array (
                'date' => '2021-10-23',
                'pcr' => 7301,
                'rtk_ag' => 18327,
                'state' => 'Selangor',
            ),
            336 => 
            array (
                'date' => '2021-10-23',
                'pcr' => 694,
                'rtk_ag' => 3656,
                'state' => 'Terengganu',
            ),
            337 => 
            array (
                'date' => '2021-10-23',
                'pcr' => 2920,
                'rtk_ag' => 4878,
                'state' => 'W.P. Kuala Lumpur',
            ),
            338 => 
            array (
                'date' => '2021-10-23',
                'pcr' => 81,
                'rtk_ag' => 1020,
                'state' => 'W.P. Labuan',
            ),
            339 => 
            array (
                'date' => '2021-10-23',
                'pcr' => 738,
                'rtk_ag' => 290,
                'state' => 'W.P. Putrajaya',
            ),
            340 => 
            array (
                'date' => '2021-10-24',
                'pcr' => 2464,
                'rtk_ag' => 12203,
                'state' => 'Johor',
            ),
            341 => 
            array (
                'date' => '2021-10-24',
                'pcr' => 855,
                'rtk_ag' => 3848,
                'state' => 'Kedah',
            ),
            342 => 
            array (
                'date' => '2021-10-24',
                'pcr' => 666,
                'rtk_ag' => 2744,
                'state' => 'Kelantan',
            ),
            343 => 
            array (
                'date' => '2021-10-24',
                'pcr' => 741,
                'rtk_ag' => 2110,
                'state' => 'Melaka',
            ),
            344 => 
            array (
                'date' => '2021-10-24',
                'pcr' => 789,
                'rtk_ag' => 3115,
                'state' => 'Negeri Sembilan',
            ),
            345 => 
            array (
                'date' => '2021-10-24',
                'pcr' => 389,
                'rtk_ag' => 2650,
                'state' => 'Pahang',
            ),
            346 => 
            array (
                'date' => '2021-10-24',
                'pcr' => 856,
                'rtk_ag' => 3889,
                'state' => 'Perak',
            ),
            347 => 
            array (
                'date' => '2021-10-24',
                'pcr' => 44,
                'rtk_ag' => 203,
                'state' => 'Perlis',
            ),
            348 => 
            array (
                'date' => '2021-10-24',
                'pcr' => 801,
                'rtk_ag' => 5642,
                'state' => 'Pulau Pinang',
            ),
            349 => 
            array (
                'date' => '2021-10-24',
                'pcr' => 1367,
                'rtk_ag' => 2945,
                'state' => 'Sabah',
            ),
            350 => 
            array (
                'date' => '2021-10-24',
                'pcr' => 1454,
                'rtk_ag' => 3521,
                'state' => 'Sarawak',
            ),
            351 => 
            array (
                'date' => '2021-10-24',
                'pcr' => 6225,
                'rtk_ag' => 17410,
                'state' => 'Selangor',
            ),
            352 => 
            array (
                'date' => '2021-10-24',
                'pcr' => 652,
                'rtk_ag' => 5131,
                'state' => 'Terengganu',
            ),
            353 => 
            array (
                'date' => '2021-10-24',
                'pcr' => 2131,
                'rtk_ag' => 4110,
                'state' => 'W.P. Kuala Lumpur',
            ),
            354 => 
            array (
                'date' => '2021-10-24',
                'pcr' => 25,
                'rtk_ag' => 899,
                'state' => 'W.P. Labuan',
            ),
            355 => 
            array (
                'date' => '2021-10-24',
                'pcr' => 224,
                'rtk_ag' => 195,
                'state' => 'W.P. Putrajaya',
            ),
            356 => 
            array (
                'date' => '2021-10-25',
                'pcr' => 4440,
                'rtk_ag' => 21089,
                'state' => 'Johor',
            ),
            357 => 
            array (
                'date' => '2021-10-25',
                'pcr' => 793,
                'rtk_ag' => 5446,
                'state' => 'Kedah',
            ),
            358 => 
            array (
                'date' => '2021-10-25',
                'pcr' => 1082,
                'rtk_ag' => 2450,
                'state' => 'Kelantan',
            ),
            359 => 
            array (
                'date' => '2021-10-25',
                'pcr' => 621,
                'rtk_ag' => 4184,
                'state' => 'Melaka',
            ),
            360 => 
            array (
                'date' => '2021-10-25',
                'pcr' => 1003,
                'rtk_ag' => 5257,
                'state' => 'Negeri Sembilan',
            ),
            361 => 
            array (
                'date' => '2021-10-25',
                'pcr' => 681,
                'rtk_ag' => 4295,
                'state' => 'Pahang',
            ),
            362 => 
            array (
                'date' => '2021-10-25',
                'pcr' => 902,
                'rtk_ag' => 7932,
                'state' => 'Perak',
            ),
            363 => 
            array (
                'date' => '2021-10-25',
                'pcr' => 24,
                'rtk_ag' => 346,
                'state' => 'Perlis',
            ),
            364 => 
            array (
                'date' => '2021-10-25',
                'pcr' => 1173,
                'rtk_ag' => 14478,
                'state' => 'Pulau Pinang',
            ),
            365 => 
            array (
                'date' => '2021-10-25',
                'pcr' => 965,
                'rtk_ag' => 5201,
                'state' => 'Sabah',
            ),
            366 => 
            array (
                'date' => '2021-10-25',
                'pcr' => 2307,
                'rtk_ag' => 6260,
                'state' => 'Sarawak',
            ),
            367 => 
            array (
                'date' => '2021-10-25',
                'pcr' => 7655,
                'rtk_ag' => 37409,
                'state' => 'Selangor',
            ),
            368 => 
            array (
                'date' => '2021-10-25',
                'pcr' => 711,
                'rtk_ag' => 3727,
                'state' => 'Terengganu',
            ),
            369 => 
            array (
                'date' => '2021-10-25',
                'pcr' => 4520,
                'rtk_ag' => 11240,
                'state' => 'W.P. Kuala Lumpur',
            ),
            370 => 
            array (
                'date' => '2021-10-25',
                'pcr' => 96,
                'rtk_ag' => 1122,
                'state' => 'W.P. Labuan',
            ),
            371 => 
            array (
                'date' => '2021-10-25',
                'pcr' => 200,
                'rtk_ag' => 488,
                'state' => 'W.P. Putrajaya',
            ),
            372 => 
            array (
                'date' => '2021-10-26',
                'pcr' => 3693,
                'rtk_ag' => 16007,
                'state' => 'Johor',
            ),
            373 => 
            array (
                'date' => '2021-10-26',
                'pcr' => 1155,
                'rtk_ag' => 3645,
                'state' => 'Kedah',
            ),
            374 => 
            array (
                'date' => '2021-10-26',
                'pcr' => 960,
                'rtk_ag' => 2359,
                'state' => 'Kelantan',
            ),
            375 => 
            array (
                'date' => '2021-10-26',
                'pcr' => 1342,
                'rtk_ag' => 3100,
                'state' => 'Melaka',
            ),
            376 => 
            array (
                'date' => '2021-10-26',
                'pcr' => 1631,
                'rtk_ag' => 4465,
                'state' => 'Negeri Sembilan',
            ),
            377 => 
            array (
                'date' => '2021-10-26',
                'pcr' => 1125,
                'rtk_ag' => 3812,
                'state' => 'Pahang',
            ),
            378 => 
            array (
                'date' => '2021-10-26',
                'pcr' => 1211,
                'rtk_ag' => 5781,
                'state' => 'Perak',
            ),
            379 => 
            array (
                'date' => '2021-10-26',
                'pcr' => 123,
                'rtk_ag' => 200,
                'state' => 'Perlis',
            ),
            380 => 
            array (
                'date' => '2021-10-26',
                'pcr' => 1566,
                'rtk_ag' => 10015,
                'state' => 'Pulau Pinang',
            ),
            381 => 
            array (
                'date' => '2021-10-26',
                'pcr' => 1543,
                'rtk_ag' => 3898,
                'state' => 'Sabah',
            ),
            382 => 
            array (
                'date' => '2021-10-26',
                'pcr' => 2163,
                'rtk_ag' => 5334,
                'state' => 'Sarawak',
            ),
            383 => 
            array (
                'date' => '2021-10-26',
                'pcr' => 10857,
                'rtk_ag' => 31057,
                'state' => 'Selangor',
            ),
            384 => 
            array (
                'date' => '2021-10-26',
                'pcr' => 844,
                'rtk_ag' => 3653,
                'state' => 'Terengganu',
            ),
            385 => 
            array (
                'date' => '2021-10-26',
                'pcr' => 4596,
                'rtk_ag' => 8416,
                'state' => 'W.P. Kuala Lumpur',
            ),
            386 => 
            array (
                'date' => '2021-10-26',
                'pcr' => 54,
                'rtk_ag' => 1130,
                'state' => 'W.P. Labuan',
            ),
            387 => 
            array (
                'date' => '2021-10-26',
                'pcr' => 271,
                'rtk_ag' => 375,
                'state' => 'W.P. Putrajaya',
            ),
            388 => 
            array (
                'date' => '2021-10-27',
                'pcr' => 4226,
                'rtk_ag' => 11974,
                'state' => 'Johor',
            ),
            389 => 
            array (
                'date' => '2021-10-27',
                'pcr' => 909,
                'rtk_ag' => 4225,
                'state' => 'Kedah',
            ),
            390 => 
            array (
                'date' => '2021-10-27',
                'pcr' => 730,
                'rtk_ag' => 2616,
                'state' => 'Kelantan',
            ),
            391 => 
            array (
                'date' => '2021-10-27',
                'pcr' => 1010,
                'rtk_ag' => 3272,
                'state' => 'Melaka',
            ),
            392 => 
            array (
                'date' => '2021-10-27',
                'pcr' => 1500,
                'rtk_ag' => 5954,
                'state' => 'Negeri Sembilan',
            ),
            393 => 
            array (
                'date' => '2021-10-27',
                'pcr' => 879,
                'rtk_ag' => 4617,
                'state' => 'Pahang',
            ),
            394 => 
            array (
                'date' => '2021-10-27',
                'pcr' => 1553,
                'rtk_ag' => 5937,
                'state' => 'Perak',
            ),
            395 => 
            array (
                'date' => '2021-10-27',
                'pcr' => 71,
                'rtk_ag' => 308,
                'state' => 'Perlis',
            ),
            396 => 
            array (
                'date' => '2021-10-27',
                'pcr' => 1608,
                'rtk_ag' => 12527,
                'state' => 'Pulau Pinang',
            ),
            397 => 
            array (
                'date' => '2021-10-27',
                'pcr' => 1531,
                'rtk_ag' => 4187,
                'state' => 'Sabah',
            ),
            398 => 
            array (
                'date' => '2021-10-27',
                'pcr' => 2207,
                'rtk_ag' => 5360,
                'state' => 'Sarawak',
            ),
            399 => 
            array (
                'date' => '2021-10-27',
                'pcr' => 10753,
                'rtk_ag' => 29319,
                'state' => 'Selangor',
            ),
            400 => 
            array (
                'date' => '2021-10-27',
                'pcr' => 740,
                'rtk_ag' => 3431,
                'state' => 'Terengganu',
            ),
            401 => 
            array (
                'date' => '2021-10-27',
                'pcr' => 4157,
                'rtk_ag' => 6868,
                'state' => 'W.P. Kuala Lumpur',
            ),
            402 => 
            array (
                'date' => '2021-10-27',
                'pcr' => 57,
                'rtk_ag' => 1058,
                'state' => 'W.P. Labuan',
            ),
            403 => 
            array (
                'date' => '2021-10-27',
                'pcr' => 317,
                'rtk_ag' => 460,
                'state' => 'W.P. Putrajaya',
            ),
            404 => 
            array (
                'date' => '2021-10-28',
                'pcr' => 2362,
                'rtk_ag' => 11099,
                'state' => 'Johor',
            ),
            405 => 
            array (
                'date' => '2021-10-28',
                'pcr' => 985,
                'rtk_ag' => 3779,
                'state' => 'Kedah',
            ),
            406 => 
            array (
                'date' => '2021-10-28',
                'pcr' => 896,
                'rtk_ag' => 2297,
                'state' => 'Kelantan',
            ),
            407 => 
            array (
                'date' => '2021-10-28',
                'pcr' => 690,
                'rtk_ag' => 3827,
                'state' => 'Melaka',
            ),
            408 => 
            array (
                'date' => '2021-10-28',
                'pcr' => 1371,
                'rtk_ag' => 6583,
                'state' => 'Negeri Sembilan',
            ),
            409 => 
            array (
                'date' => '2021-10-28',
                'pcr' => 844,
                'rtk_ag' => 3482,
                'state' => 'Pahang',
            ),
            410 => 
            array (
                'date' => '2021-10-28',
                'pcr' => 1192,
                'rtk_ag' => 6039,
                'state' => 'Perak',
            ),
            411 => 
            array (
                'date' => '2021-10-28',
                'pcr' => 39,
                'rtk_ag' => 281,
                'state' => 'Perlis',
            ),
            412 => 
            array (
                'date' => '2021-10-28',
                'pcr' => 1394,
                'rtk_ag' => 9729,
                'state' => 'Pulau Pinang',
            ),
            413 => 
            array (
                'date' => '2021-10-28',
                'pcr' => 1290,
                'rtk_ag' => 4060,
                'state' => 'Sabah',
            ),
            414 => 
            array (
                'date' => '2021-10-28',
                'pcr' => 1537,
                'rtk_ag' => 5291,
                'state' => 'Sarawak',
            ),
            415 => 
            array (
                'date' => '2021-10-28',
                'pcr' => 9624,
                'rtk_ag' => 24057,
                'state' => 'Selangor',
            ),
            416 => 
            array (
                'date' => '2021-10-28',
                'pcr' => 656,
                'rtk_ag' => 3984,
                'state' => 'Terengganu',
            ),
            417 => 
            array (
                'date' => '2021-10-28',
                'pcr' => 4606,
                'rtk_ag' => 6002,
                'state' => 'W.P. Kuala Lumpur',
            ),
            418 => 
            array (
                'date' => '2021-10-28',
                'pcr' => 30,
                'rtk_ag' => 1476,
                'state' => 'W.P. Labuan',
            ),
            419 => 
            array (
                'date' => '2021-10-28',
                'pcr' => 233,
                'rtk_ag' => 363,
                'state' => 'W.P. Putrajaya',
            ),
            420 => 
            array (
                'date' => '2021-10-29',
                'pcr' => 3147,
                'rtk_ag' => 11589,
                'state' => 'Johor',
            ),
            421 => 
            array (
                'date' => '2021-10-29',
                'pcr' => 825,
                'rtk_ag' => 3870,
                'state' => 'Kedah',
            ),
            422 => 
            array (
                'date' => '2021-10-29',
                'pcr' => 862,
                'rtk_ag' => 1521,
                'state' => 'Kelantan',
            ),
            423 => 
            array (
                'date' => '2021-10-29',
                'pcr' => 719,
                'rtk_ag' => 2689,
                'state' => 'Melaka',
            ),
            424 => 
            array (
                'date' => '2021-10-29',
                'pcr' => 1087,
                'rtk_ag' => 3685,
                'state' => 'Negeri Sembilan',
            ),
            425 => 
            array (
                'date' => '2021-10-29',
                'pcr' => 821,
                'rtk_ag' => 3549,
                'state' => 'Pahang',
            ),
            426 => 
            array (
                'date' => '2021-10-29',
                'pcr' => 1179,
                'rtk_ag' => 5426,
                'state' => 'Perak',
            ),
            427 => 
            array (
                'date' => '2021-10-29',
                'pcr' => 8,
                'rtk_ag' => 267,
                'state' => 'Perlis',
            ),
            428 => 
            array (
                'date' => '2021-10-29',
                'pcr' => 1404,
                'rtk_ag' => 8613,
                'state' => 'Pulau Pinang',
            ),
            429 => 
            array (
                'date' => '2021-10-29',
                'pcr' => 1333,
                'rtk_ag' => 3872,
                'state' => 'Sabah',
            ),
            430 => 
            array (
                'date' => '2021-10-29',
                'pcr' => 1520,
                'rtk_ag' => 5380,
                'state' => 'Sarawak',
            ),
            431 => 
            array (
                'date' => '2021-10-29',
                'pcr' => 9625,
                'rtk_ag' => 23538,
                'state' => 'Selangor',
            ),
            432 => 
            array (
                'date' => '2021-10-29',
                'pcr' => 434,
                'rtk_ag' => 2836,
                'state' => 'Terengganu',
            ),
            433 => 
            array (
                'date' => '2021-10-29',
                'pcr' => 3600,
                'rtk_ag' => 6183,
                'state' => 'W.P. Kuala Lumpur',
            ),
            434 => 
            array (
                'date' => '2021-10-29',
                'pcr' => 51,
                'rtk_ag' => 1325,
                'state' => 'W.P. Labuan',
            ),
            435 => 
            array (
                'date' => '2021-10-29',
                'pcr' => 241,
                'rtk_ag' => 391,
                'state' => 'W.P. Putrajaya',
            ),
            436 => 
            array (
                'date' => '2021-10-30',
                'pcr' => 2874,
                'rtk_ag' => 7833,
                'state' => 'Johor',
            ),
            437 => 
            array (
                'date' => '2021-10-30',
                'pcr' => 863,
                'rtk_ag' => 3544,
                'state' => 'Kedah',
            ),
            438 => 
            array (
                'date' => '2021-10-30',
                'pcr' => 554,
                'rtk_ag' => 1985,
                'state' => 'Kelantan',
            ),
            439 => 
            array (
                'date' => '2021-10-30',
                'pcr' => 916,
                'rtk_ag' => 1603,
                'state' => 'Melaka',
            ),
            440 => 
            array (
                'date' => '2021-10-30',
                'pcr' => 1289,
                'rtk_ag' => 3998,
                'state' => 'Negeri Sembilan',
            ),
            441 => 
            array (
                'date' => '2021-10-30',
                'pcr' => 861,
                'rtk_ag' => 2251,
                'state' => 'Pahang',
            ),
            442 => 
            array (
                'date' => '2021-10-30',
                'pcr' => 1227,
                'rtk_ag' => 3629,
                'state' => 'Perak',
            ),
            443 => 
            array (
                'date' => '2021-10-30',
                'pcr' => 54,
                'rtk_ag' => 248,
                'state' => 'Perlis',
            ),
            444 => 
            array (
                'date' => '2021-10-30',
                'pcr' => 2304,
                'rtk_ag' => 6629,
                'state' => 'Pulau Pinang',
            ),
            445 => 
            array (
                'date' => '2021-10-30',
                'pcr' => 1653,
                'rtk_ag' => 3168,
                'state' => 'Sabah',
            ),
            446 => 
            array (
                'date' => '2021-10-30',
                'pcr' => 2012,
                'rtk_ag' => 4392,
                'state' => 'Sarawak',
            ),
            447 => 
            array (
                'date' => '2021-10-30',
                'pcr' => 6868,
                'rtk_ag' => 20197,
                'state' => 'Selangor',
            ),
            448 => 
            array (
                'date' => '2021-10-30',
                'pcr' => 819,
                'rtk_ag' => 3876,
                'state' => 'Terengganu',
            ),
            449 => 
            array (
                'date' => '2021-10-30',
                'pcr' => 3079,
                'rtk_ag' => 4795,
                'state' => 'W.P. Kuala Lumpur',
            ),
            450 => 
            array (
                'date' => '2021-10-30',
                'pcr' => 63,
                'rtk_ag' => 1432,
                'state' => 'W.P. Labuan',
            ),
            451 => 
            array (
                'date' => '2021-10-30',
                'pcr' => 268,
                'rtk_ag' => 245,
                'state' => 'W.P. Putrajaya',
            ),
            452 => 
            array (
                'date' => '2021-10-31',
                'pcr' => 2753,
                'rtk_ag' => 9773,
                'state' => 'Johor',
            ),
            453 => 
            array (
                'date' => '2021-10-31',
                'pcr' => 797,
                'rtk_ag' => 4869,
                'state' => 'Kedah',
            ),
            454 => 
            array (
                'date' => '2021-10-31',
                'pcr' => 650,
                'rtk_ag' => 2762,
                'state' => 'Kelantan',
            ),
            455 => 
            array (
                'date' => '2021-10-31',
                'pcr' => 627,
                'rtk_ag' => 1836,
                'state' => 'Melaka',
            ),
            456 => 
            array (
                'date' => '2021-10-31',
                'pcr' => 843,
                'rtk_ag' => 2034,
                'state' => 'Negeri Sembilan',
            ),
            457 => 
            array (
                'date' => '2021-10-31',
                'pcr' => 283,
                'rtk_ag' => 2791,
                'state' => 'Pahang',
            ),
            458 => 
            array (
                'date' => '2021-10-31',
                'pcr' => 656,
                'rtk_ag' => 3412,
                'state' => 'Perak',
            ),
            459 => 
            array (
                'date' => '2021-10-31',
                'pcr' => 21,
                'rtk_ag' => 280,
                'state' => 'Perlis',
            ),
            460 => 
            array (
                'date' => '2021-10-31',
                'pcr' => 1035,
                'rtk_ag' => 6342,
                'state' => 'Pulau Pinang',
            ),
            461 => 
            array (
                'date' => '2021-10-31',
                'pcr' => 1176,
                'rtk_ag' => 3366,
                'state' => 'Sabah',
            ),
            462 => 
            array (
                'date' => '2021-10-31',
                'pcr' => 1355,
                'rtk_ag' => 4026,
                'state' => 'Sarawak',
            ),
            463 => 
            array (
                'date' => '2021-10-31',
                'pcr' => 5831,
                'rtk_ag' => 21662,
                'state' => 'Selangor',
            ),
            464 => 
            array (
                'date' => '2021-10-31',
                'pcr' => 770,
                'rtk_ag' => 5284,
                'state' => 'Terengganu',
            ),
            465 => 
            array (
                'date' => '2021-10-31',
                'pcr' => 1949,
                'rtk_ag' => 4987,
                'state' => 'W.P. Kuala Lumpur',
            ),
            466 => 
            array (
                'date' => '2021-10-31',
                'pcr' => 18,
                'rtk_ag' => 1512,
                'state' => 'W.P. Labuan',
            ),
            467 => 
            array (
                'date' => '2021-10-31',
                'pcr' => 124,
                'rtk_ag' => 305,
                'state' => 'W.P. Putrajaya',
            ),
            468 => 
            array (
                'date' => '2021-11-01',
                'pcr' => 3531,
                'rtk_ag' => 19386,
                'state' => 'Johor',
            ),
            469 => 
            array (
                'date' => '2021-11-01',
                'pcr' => 1067,
                'rtk_ag' => 6822,
                'state' => 'Kedah',
            ),
            470 => 
            array (
                'date' => '2021-11-01',
                'pcr' => 1079,
                'rtk_ag' => 2799,
                'state' => 'Kelantan',
            ),
            471 => 
            array (
                'date' => '2021-11-01',
                'pcr' => 552,
                'rtk_ag' => 5336,
                'state' => 'Melaka',
            ),
            472 => 
            array (
                'date' => '2021-11-01',
                'pcr' => 989,
                'rtk_ag' => 7516,
                'state' => 'Negeri Sembilan',
            ),
            473 => 
            array (
                'date' => '2021-11-01',
                'pcr' => 680,
                'rtk_ag' => 4805,
                'state' => 'Pahang',
            ),
            474 => 
            array (
                'date' => '2021-11-01',
                'pcr' => 811,
                'rtk_ag' => 8130,
                'state' => 'Perak',
            ),
            475 => 
            array (
                'date' => '2021-11-01',
                'pcr' => 33,
                'rtk_ag' => 382,
                'state' => 'Perlis',
            ),
            476 => 
            array (
                'date' => '2021-11-01',
                'pcr' => 1108,
                'rtk_ag' => 12550,
                'state' => 'Pulau Pinang',
            ),
            477 => 
            array (
                'date' => '2021-11-01',
                'pcr' => 1140,
                'rtk_ag' => 5167,
                'state' => 'Sabah',
            ),
            478 => 
            array (
                'date' => '2021-11-01',
                'pcr' => 1983,
                'rtk_ag' => 7357,
                'state' => 'Sarawak',
            ),
            479 => 
            array (
                'date' => '2021-11-01',
                'pcr' => 8237,
                'rtk_ag' => 40480,
                'state' => 'Selangor',
            ),
            480 => 
            array (
                'date' => '2021-11-01',
                'pcr' => 1078,
                'rtk_ag' => 4282,
                'state' => 'Terengganu',
            ),
            481 => 
            array (
                'date' => '2021-11-01',
                'pcr' => 4489,
                'rtk_ag' => 10881,
                'state' => 'W.P. Kuala Lumpur',
            ),
            482 => 
            array (
                'date' => '2021-11-01',
                'pcr' => 17,
                'rtk_ag' => 2752,
                'state' => 'W.P. Labuan',
            ),
            483 => 
            array (
                'date' => '2021-11-01',
                'pcr' => 177,
                'rtk_ag' => 576,
                'state' => 'W.P. Putrajaya',
            ),
            484 => 
            array (
                'date' => '2021-11-02',
                'pcr' => 3032,
                'rtk_ag' => 12399,
                'state' => 'Johor',
            ),
            485 => 
            array (
                'date' => '2021-11-02',
                'pcr' => 889,
                'rtk_ag' => 4841,
                'state' => 'Kedah',
            ),
            486 => 
            array (
                'date' => '2021-11-02',
                'pcr' => 618,
                'rtk_ag' => 2633,
                'state' => 'Kelantan',
            ),
            487 => 
            array (
                'date' => '2021-11-02',
                'pcr' => 830,
                'rtk_ag' => 4644,
                'state' => 'Melaka',
            ),
            488 => 
            array (
                'date' => '2021-11-02',
                'pcr' => 1312,
                'rtk_ag' => 5092,
                'state' => 'Negeri Sembilan',
            ),
            489 => 
            array (
                'date' => '2021-11-02',
                'pcr' => 910,
                'rtk_ag' => 3552,
                'state' => 'Pahang',
            ),
            490 => 
            array (
                'date' => '2021-11-02',
                'pcr' => 902,
                'rtk_ag' => 5736,
                'state' => 'Perak',
            ),
            491 => 
            array (
                'date' => '2021-11-02',
                'pcr' => 16,
                'rtk_ag' => 582,
                'state' => 'Perlis',
            ),
            492 => 
            array (
                'date' => '2021-11-02',
                'pcr' => 1310,
                'rtk_ag' => 8255,
                'state' => 'Pulau Pinang',
            ),
            493 => 
            array (
                'date' => '2021-11-02',
                'pcr' => 1591,
                'rtk_ag' => 4859,
                'state' => 'Sabah',
            ),
            494 => 
            array (
                'date' => '2021-11-02',
                'pcr' => 1341,
                'rtk_ag' => 6332,
                'state' => 'Sarawak',
            ),
            495 => 
            array (
                'date' => '2021-11-02',
                'pcr' => 10782,
                'rtk_ag' => 29804,
                'state' => 'Selangor',
            ),
            496 => 
            array (
                'date' => '2021-11-02',
                'pcr' => 727,
                'rtk_ag' => 3305,
                'state' => 'Terengganu',
            ),
            497 => 
            array (
                'date' => '2021-11-02',
                'pcr' => 3655,
                'rtk_ag' => 7074,
                'state' => 'W.P. Kuala Lumpur',
            ),
            498 => 
            array (
                'date' => '2021-11-02',
                'pcr' => 98,
                'rtk_ag' => 2340,
                'state' => 'W.P. Labuan',
            ),
            499 => 
            array (
                'date' => '2021-11-02',
                'pcr' => 221,
                'rtk_ag' => 403,
                'state' => 'W.P. Putrajaya',
            ),
        ));
        \DB::table('test_states')->insert(array (
            0 => 
            array (
                'date' => '2021-11-03',
                'pcr' => 3446,
                'rtk_ag' => 11030,
                'state' => 'Johor',
            ),
            1 => 
            array (
                'date' => '2021-11-03',
                'pcr' => 956,
                'rtk_ag' => 4549,
                'state' => 'Kedah',
            ),
            2 => 
            array (
                'date' => '2021-11-03',
                'pcr' => 728,
                'rtk_ag' => 2738,
                'state' => 'Kelantan',
            ),
            3 => 
            array (
                'date' => '2021-11-03',
                'pcr' => 861,
                'rtk_ag' => 2505,
                'state' => 'Melaka',
            ),
            4 => 
            array (
                'date' => '2021-11-03',
                'pcr' => 1279,
                'rtk_ag' => 5655,
                'state' => 'Negeri Sembilan',
            ),
            5 => 
            array (
                'date' => '2021-11-03',
                'pcr' => 1125,
                'rtk_ag' => 4816,
                'state' => 'Pahang',
            ),
            6 => 
            array (
                'date' => '2021-11-03',
                'pcr' => 1305,
                'rtk_ag' => 4946,
                'state' => 'Perak',
            ),
            7 => 
            array (
                'date' => '2021-11-03',
                'pcr' => 49,
                'rtk_ag' => 333,
                'state' => 'Perlis',
            ),
            8 => 
            array (
                'date' => '2021-11-03',
                'pcr' => 1484,
                'rtk_ag' => 7062,
                'state' => 'Pulau Pinang',
            ),
            9 => 
            array (
                'date' => '2021-11-03',
                'pcr' => 1554,
                'rtk_ag' => 4220,
                'state' => 'Sabah',
            ),
            10 => 
            array (
                'date' => '2021-11-03',
                'pcr' => 1935,
                'rtk_ag' => 6006,
                'state' => 'Sarawak',
            ),
            11 => 
            array (
                'date' => '2021-11-03',
                'pcr' => 9884,
                'rtk_ag' => 25946,
                'state' => 'Selangor',
            ),
            12 => 
            array (
                'date' => '2021-11-03',
                'pcr' => 611,
                'rtk_ag' => 4086,
                'state' => 'Terengganu',
            ),
            13 => 
            array (
                'date' => '2021-11-03',
                'pcr' => 4481,
                'rtk_ag' => 6059,
                'state' => 'W.P. Kuala Lumpur',
            ),
            14 => 
            array (
                'date' => '2021-11-03',
                'pcr' => 104,
                'rtk_ag' => 2553,
                'state' => 'W.P. Labuan',
            ),
            15 => 
            array (
                'date' => '2021-11-03',
                'pcr' => 225,
                'rtk_ag' => 450,
                'state' => 'W.P. Putrajaya',
            ),
            16 => 
            array (
                'date' => '2021-11-04',
                'pcr' => 3694,
                'rtk_ag' => 6182,
                'state' => 'Johor',
            ),
            17 => 
            array (
                'date' => '2021-11-04',
                'pcr' => 731,
                'rtk_ag' => 2532,
                'state' => 'Kedah',
            ),
            18 => 
            array (
                'date' => '2021-11-04',
                'pcr' => 873,
                'rtk_ag' => 1899,
                'state' => 'Kelantan',
            ),
            19 => 
            array (
                'date' => '2021-11-04',
                'pcr' => 722,
                'rtk_ag' => 1785,
                'state' => 'Melaka',
            ),
            20 => 
            array (
                'date' => '2021-11-04',
                'pcr' => 921,
                'rtk_ag' => 2186,
                'state' => 'Negeri Sembilan',
            ),
            21 => 
            array (
                'date' => '2021-11-04',
                'pcr' => 516,
                'rtk_ag' => 1825,
                'state' => 'Pahang',
            ),
            22 => 
            array (
                'date' => '2021-11-04',
                'pcr' => 858,
                'rtk_ag' => 3493,
                'state' => 'Perak',
            ),
            23 => 
            array (
                'date' => '2021-11-04',
                'pcr' => 48,
                'rtk_ag' => 226,
                'state' => 'Perlis',
            ),
            24 => 
            array (
                'date' => '2021-11-04',
                'pcr' => 1592,
                'rtk_ag' => 5347,
                'state' => 'Pulau Pinang',
            ),
            25 => 
            array (
                'date' => '2021-11-04',
                'pcr' => 1401,
                'rtk_ag' => 3040,
                'state' => 'Sabah',
            ),
            26 => 
            array (
                'date' => '2021-11-04',
                'pcr' => 1676,
                'rtk_ag' => 6122,
                'state' => 'Sarawak',
            ),
            27 => 
            array (
                'date' => '2021-11-04',
                'pcr' => 7621,
                'rtk_ag' => 12297,
                'state' => 'Selangor',
            ),
            28 => 
            array (
                'date' => '2021-11-04',
                'pcr' => 516,
                'rtk_ag' => 2375,
                'state' => 'Terengganu',
            ),
            29 => 
            array (
                'date' => '2021-11-04',
                'pcr' => 2405,
                'rtk_ag' => 3019,
                'state' => 'W.P. Kuala Lumpur',
            ),
            30 => 
            array (
                'date' => '2021-11-04',
                'pcr' => 75,
                'rtk_ag' => 1496,
                'state' => 'W.P. Labuan',
            ),
            31 => 
            array (
                'date' => '2021-11-04',
                'pcr' => 158,
                'rtk_ag' => 193,
                'state' => 'W.P. Putrajaya',
            ),
            32 => 
            array (
                'date' => '2021-11-05',
                'pcr' => 2586,
                'rtk_ag' => 8284,
                'state' => 'Johor',
            ),
            33 => 
            array (
                'date' => '2021-11-05',
                'pcr' => 527,
                'rtk_ag' => 2904,
                'state' => 'Kedah',
            ),
            34 => 
            array (
                'date' => '2021-11-05',
                'pcr' => 577,
                'rtk_ag' => 1658,
                'state' => 'Kelantan',
            ),
            35 => 
            array (
                'date' => '2021-11-05',
                'pcr' => 648,
                'rtk_ag' => 2106,
                'state' => 'Melaka',
            ),
            36 => 
            array (
                'date' => '2021-11-05',
                'pcr' => 859,
                'rtk_ag' => 3068,
                'state' => 'Negeri Sembilan',
            ),
            37 => 
            array (
                'date' => '2021-11-05',
                'pcr' => 490,
                'rtk_ag' => 3433,
                'state' => 'Pahang',
            ),
            38 => 
            array (
                'date' => '2021-11-05',
                'pcr' => 948,
                'rtk_ag' => 2669,
                'state' => 'Perak',
            ),
            39 => 
            array (
                'date' => '2021-11-05',
                'pcr' => 17,
                'rtk_ag' => 334,
                'state' => 'Perlis',
            ),
            40 => 
            array (
                'date' => '2021-11-05',
                'pcr' => 949,
                'rtk_ag' => 7380,
                'state' => 'Pulau Pinang',
            ),
            41 => 
            array (
                'date' => '2021-11-05',
                'pcr' => 1020,
                'rtk_ag' => 4478,
                'state' => 'Sabah',
            ),
            42 => 
            array (
                'date' => '2021-11-05',
                'pcr' => 1717,
                'rtk_ag' => 5583,
                'state' => 'Sarawak',
            ),
            43 => 
            array (
                'date' => '2021-11-05',
                'pcr' => 7435,
                'rtk_ag' => 18706,
                'state' => 'Selangor',
            ),
            44 => 
            array (
                'date' => '2021-11-05',
                'pcr' => 284,
                'rtk_ag' => 2227,
                'state' => 'Terengganu',
            ),
            45 => 
            array (
                'date' => '2021-11-05',
                'pcr' => 3695,
                'rtk_ag' => 4634,
                'state' => 'W.P. Kuala Lumpur',
            ),
            46 => 
            array (
                'date' => '2021-11-05',
                'pcr' => 36,
                'rtk_ag' => 2290,
                'state' => 'W.P. Labuan',
            ),
            47 => 
            array (
                'date' => '2021-11-05',
                'pcr' => 167,
                'rtk_ag' => 387,
                'state' => 'W.P. Putrajaya',
            ),
            48 => 
            array (
                'date' => '2021-11-06',
                'pcr' => 3205,
                'rtk_ag' => 6619,
                'state' => 'Johor',
            ),
            49 => 
            array (
                'date' => '2021-11-06',
                'pcr' => 894,
                'rtk_ag' => 2916,
                'state' => 'Kedah',
            ),
            50 => 
            array (
                'date' => '2021-11-06',
                'pcr' => 520,
                'rtk_ag' => 2282,
                'state' => 'Kelantan',
            ),
            51 => 
            array (
                'date' => '2021-11-06',
                'pcr' => 965,
                'rtk_ag' => 1804,
                'state' => 'Melaka',
            ),
            52 => 
            array (
                'date' => '2021-11-06',
                'pcr' => 1384,
                'rtk_ag' => 5911,
                'state' => 'Negeri Sembilan',
            ),
            53 => 
            array (
                'date' => '2021-11-06',
                'pcr' => 540,
                'rtk_ag' => 2143,
                'state' => 'Pahang',
            ),
            54 => 
            array (
                'date' => '2021-11-06',
                'pcr' => 825,
                'rtk_ag' => 3245,
                'state' => 'Perak',
            ),
            55 => 
            array (
                'date' => '2021-11-06',
                'pcr' => 35,
                'rtk_ag' => 233,
                'state' => 'Perlis',
            ),
            56 => 
            array (
                'date' => '2021-11-06',
                'pcr' => 1668,
                'rtk_ag' => 5712,
                'state' => 'Pulau Pinang',
            ),
            57 => 
            array (
                'date' => '2021-11-06',
                'pcr' => 1696,
                'rtk_ag' => 2855,
                'state' => 'Sabah',
            ),
            58 => 
            array (
                'date' => '2021-11-06',
                'pcr' => 1860,
                'rtk_ag' => 4836,
                'state' => 'Sarawak',
            ),
            59 => 
            array (
                'date' => '2021-11-06',
                'pcr' => 8726,
                'rtk_ag' => 13730,
                'state' => 'Selangor',
            ),
            60 => 
            array (
                'date' => '2021-11-06',
                'pcr' => 644,
                'rtk_ag' => 4021,
                'state' => 'Terengganu',
            ),
            61 => 
            array (
                'date' => '2021-11-06',
                'pcr' => 4387,
                'rtk_ag' => 4323,
                'state' => 'W.P. Kuala Lumpur',
            ),
            62 => 
            array (
                'date' => '2021-11-06',
                'pcr' => 91,
                'rtk_ag' => 1975,
                'state' => 'W.P. Labuan',
            ),
            63 => 
            array (
                'date' => '2021-11-06',
                'pcr' => 223,
                'rtk_ag' => 228,
                'state' => 'W.P. Putrajaya',
            ),
            64 => 
            array (
                'date' => '2021-11-07',
                'pcr' => 2706,
                'rtk_ag' => 12026,
                'state' => 'Johor',
            ),
            65 => 
            array (
                'date' => '2021-11-07',
                'pcr' => 864,
                'rtk_ag' => 4575,
                'state' => 'Kedah',
            ),
            66 => 
            array (
                'date' => '2021-11-07',
                'pcr' => 587,
                'rtk_ag' => 3973,
                'state' => 'Kelantan',
            ),
            67 => 
            array (
                'date' => '2021-11-07',
                'pcr' => 607,
                'rtk_ag' => 2525,
                'state' => 'Melaka',
            ),
            68 => 
            array (
                'date' => '2021-11-07',
                'pcr' => 840,
                'rtk_ag' => 2884,
                'state' => 'Negeri Sembilan',
            ),
            69 => 
            array (
                'date' => '2021-11-07',
                'pcr' => 447,
                'rtk_ag' => 3034,
                'state' => 'Pahang',
            ),
            70 => 
            array (
                'date' => '2021-11-07',
                'pcr' => 907,
                'rtk_ag' => 5479,
                'state' => 'Perak',
            ),
            71 => 
            array (
                'date' => '2021-11-07',
                'pcr' => 34,
                'rtk_ag' => 319,
                'state' => 'Perlis',
            ),
            72 => 
            array (
                'date' => '2021-11-07',
                'pcr' => 997,
                'rtk_ag' => 7520,
                'state' => 'Pulau Pinang',
            ),
            73 => 
            array (
                'date' => '2021-11-07',
                'pcr' => 1230,
                'rtk_ag' => 3365,
                'state' => 'Sabah',
            ),
            74 => 
            array (
                'date' => '2021-11-07',
                'pcr' => 1247,
                'rtk_ag' => 4701,
                'state' => 'Sarawak',
            ),
            75 => 
            array (
                'date' => '2021-11-07',
                'pcr' => 6015,
                'rtk_ag' => 21571,
                'state' => 'Selangor',
            ),
            76 => 
            array (
                'date' => '2021-11-07',
                'pcr' => 661,
                'rtk_ag' => 5309,
                'state' => 'Terengganu',
            ),
            77 => 
            array (
                'date' => '2021-11-07',
                'pcr' => 2273,
                'rtk_ag' => 5722,
                'state' => 'W.P. Kuala Lumpur',
            ),
            78 => 
            array (
                'date' => '2021-11-07',
                'pcr' => 74,
                'rtk_ag' => 1671,
                'state' => 'W.P. Labuan',
            ),
            79 => 
            array (
                'date' => '2021-11-07',
                'pcr' => 226,
                'rtk_ag' => 365,
                'state' => 'W.P. Putrajaya',
            ),
            80 => 
            array (
                'date' => '2021-11-08',
                'pcr' => 3944,
                'rtk_ag' => 20180,
                'state' => 'Johor',
            ),
            81 => 
            array (
                'date' => '2021-11-08',
                'pcr' => 1039,
                'rtk_ag' => 7077,
                'state' => 'Kedah',
            ),
            82 => 
            array (
                'date' => '2021-11-08',
                'pcr' => 970,
                'rtk_ag' => 4389,
                'state' => 'Kelantan',
            ),
            83 => 
            array (
                'date' => '2021-11-08',
                'pcr' => 497,
                'rtk_ag' => 5759,
                'state' => 'Melaka',
            ),
            84 => 
            array (
                'date' => '2021-11-08',
                'pcr' => 919,
                'rtk_ag' => 6784,
                'state' => 'Negeri Sembilan',
            ),
            85 => 
            array (
                'date' => '2021-11-08',
                'pcr' => 384,
                'rtk_ag' => 5345,
                'state' => 'Pahang',
            ),
            86 => 
            array (
                'date' => '2021-11-08',
                'pcr' => 833,
                'rtk_ag' => 11012,
                'state' => 'Perak',
            ),
            87 => 
            array (
                'date' => '2021-11-08',
                'pcr' => 15,
                'rtk_ag' => 438,
                'state' => 'Perlis',
            ),
            88 => 
            array (
                'date' => '2021-11-08',
                'pcr' => 1103,
                'rtk_ag' => 13883,
                'state' => 'Pulau Pinang',
            ),
            89 => 
            array (
                'date' => '2021-11-08',
                'pcr' => 1530,
                'rtk_ag' => 5142,
                'state' => 'Sabah',
            ),
            90 => 
            array (
                'date' => '2021-11-08',
                'pcr' => 1843,
                'rtk_ag' => 6730,
                'state' => 'Sarawak',
            ),
            91 => 
            array (
                'date' => '2021-11-08',
                'pcr' => 8081,
                'rtk_ag' => 41506,
                'state' => 'Selangor',
            ),
            92 => 
            array (
                'date' => '2021-11-08',
                'pcr' => 849,
                'rtk_ag' => 4798,
                'state' => 'Terengganu',
            ),
            93 => 
            array (
                'date' => '2021-11-08',
                'pcr' => 3654,
                'rtk_ag' => 9472,
                'state' => 'W.P. Kuala Lumpur',
            ),
            94 => 
            array (
                'date' => '2021-11-08',
                'pcr' => 68,
                'rtk_ag' => 2280,
                'state' => 'W.P. Labuan',
            ),
            95 => 
            array (
                'date' => '2021-11-08',
                'pcr' => 304,
                'rtk_ag' => 545,
                'state' => 'W.P. Putrajaya',
            ),
            96 => 
            array (
                'date' => '2021-11-09',
                'pcr' => 5019,
                'rtk_ag' => 19270,
                'state' => 'Johor',
            ),
            97 => 
            array (
                'date' => '2021-11-09',
                'pcr' => 1285,
                'rtk_ag' => 6303,
                'state' => 'Kedah',
            ),
            98 => 
            array (
                'date' => '2021-11-09',
                'pcr' => 840,
                'rtk_ag' => 5299,
                'state' => 'Kelantan',
            ),
            99 => 
            array (
                'date' => '2021-11-09',
                'pcr' => 1020,
                'rtk_ag' => 4067,
                'state' => 'Melaka',
            ),
            100 => 
            array (
                'date' => '2021-11-09',
                'pcr' => 1239,
                'rtk_ag' => 5562,
                'state' => 'Negeri Sembilan',
            ),
            101 => 
            array (
                'date' => '2021-11-09',
                'pcr' => 912,
                'rtk_ag' => 5536,
                'state' => 'Pahang',
            ),
            102 => 
            array (
                'date' => '2021-11-09',
                'pcr' => 1724,
                'rtk_ag' => 9123,
                'state' => 'Perak',
            ),
            103 => 
            array (
                'date' => '2021-11-09',
                'pcr' => 60,
                'rtk_ag' => 416,
                'state' => 'Perlis',
            ),
            104 => 
            array (
                'date' => '2021-11-09',
                'pcr' => 1733,
                'rtk_ag' => 13141,
                'state' => 'Pulau Pinang',
            ),
            105 => 
            array (
                'date' => '2021-11-09',
                'pcr' => 1595,
                'rtk_ag' => 4860,
                'state' => 'Sabah',
            ),
            106 => 
            array (
                'date' => '2021-11-09',
                'pcr' => 1842,
                'rtk_ag' => 6133,
                'state' => 'Sarawak',
            ),
            107 => 
            array (
                'date' => '2021-11-09',
                'pcr' => 12484,
                'rtk_ag' => 38990,
                'state' => 'Selangor',
            ),
            108 => 
            array (
                'date' => '2021-11-09',
                'pcr' => 811,
                'rtk_ag' => 5345,
                'state' => 'Terengganu',
            ),
            109 => 
            array (
                'date' => '2021-11-09',
                'pcr' => 4759,
                'rtk_ag' => 9917,
                'state' => 'W.P. Kuala Lumpur',
            ),
            110 => 
            array (
                'date' => '2021-11-09',
                'pcr' => 60,
                'rtk_ag' => 1861,
                'state' => 'W.P. Labuan',
            ),
            111 => 
            array (
                'date' => '2021-11-09',
                'pcr' => 327,
                'rtk_ag' => 567,
                'state' => 'W.P. Putrajaya',
            ),
            112 => 
            array (
                'date' => '2021-11-10',
                'pcr' => 4631,
                'rtk_ag' => 16029,
                'state' => 'Johor',
            ),
            113 => 
            array (
                'date' => '2021-11-10',
                'pcr' => 1221,
                'rtk_ag' => 5546,
                'state' => 'Kedah',
            ),
            114 => 
            array (
                'date' => '2021-11-10',
                'pcr' => 829,
                'rtk_ag' => 5297,
                'state' => 'Kelantan',
            ),
            115 => 
            array (
                'date' => '2021-11-10',
                'pcr' => 1309,
                'rtk_ag' => 3865,
                'state' => 'Melaka',
            ),
            116 => 
            array (
                'date' => '2021-11-10',
                'pcr' => 1223,
                'rtk_ag' => 5906,
                'state' => 'Negeri Sembilan',
            ),
            117 => 
            array (
                'date' => '2021-11-10',
                'pcr' => 1007,
                'rtk_ag' => 5113,
                'state' => 'Pahang',
            ),
            118 => 
            array (
                'date' => '2021-11-10',
                'pcr' => 1290,
                'rtk_ag' => 7936,
                'state' => 'Perak',
            ),
            119 => 
            array (
                'date' => '2021-11-10',
                'pcr' => 63,
                'rtk_ag' => 389,
                'state' => 'Perlis',
            ),
            120 => 
            array (
                'date' => '2021-11-10',
                'pcr' => 1830,
                'rtk_ag' => 11341,
                'state' => 'Pulau Pinang',
            ),
            121 => 
            array (
                'date' => '2021-11-10',
                'pcr' => 1786,
                'rtk_ag' => 4246,
                'state' => 'Sabah',
            ),
            122 => 
            array (
                'date' => '2021-11-10',
                'pcr' => 1750,
                'rtk_ag' => 5605,
                'state' => 'Sarawak',
            ),
            123 => 
            array (
                'date' => '2021-11-10',
                'pcr' => 12444,
                'rtk_ag' => 34088,
                'state' => 'Selangor',
            ),
            124 => 
            array (
                'date' => '2021-11-10',
                'pcr' => 789,
                'rtk_ag' => 3310,
                'state' => 'Terengganu',
            ),
            125 => 
            array (
                'date' => '2021-11-10',
                'pcr' => 5353,
                'rtk_ag' => 11895,
                'state' => 'W.P. Kuala Lumpur',
            ),
            126 => 
            array (
                'date' => '2021-11-10',
                'pcr' => 78,
                'rtk_ag' => 894,
                'state' => 'W.P. Labuan',
            ),
            127 => 
            array (
                'date' => '2021-11-10',
                'pcr' => 331,
                'rtk_ag' => 440,
                'state' => 'W.P. Putrajaya',
            ),
            128 => 
            array (
                'date' => '2021-11-11',
                'pcr' => 3687,
                'rtk_ag' => 12099,
                'state' => 'Johor',
            ),
            129 => 
            array (
                'date' => '2021-11-11',
                'pcr' => 1021,
                'rtk_ag' => 4604,
                'state' => 'Kedah',
            ),
            130 => 
            array (
                'date' => '2021-11-11',
                'pcr' => 856,
                'rtk_ag' => 2910,
                'state' => 'Kelantan',
            ),
            131 => 
            array (
                'date' => '2021-11-11',
                'pcr' => 957,
                'rtk_ag' => 4144,
                'state' => 'Melaka',
            ),
            132 => 
            array (
                'date' => '2021-11-11',
                'pcr' => 1548,
                'rtk_ag' => 7014,
                'state' => 'Negeri Sembilan',
            ),
            133 => 
            array (
                'date' => '2021-11-11',
                'pcr' => 950,
                'rtk_ag' => 4434,
                'state' => 'Pahang',
            ),
            134 => 
            array (
                'date' => '2021-11-11',
                'pcr' => 1265,
                'rtk_ag' => 7365,
                'state' => 'Perak',
            ),
            135 => 
            array (
                'date' => '2021-11-11',
                'pcr' => 25,
                'rtk_ag' => 426,
                'state' => 'Perlis',
            ),
            136 => 
            array (
                'date' => '2021-11-11',
                'pcr' => 1423,
                'rtk_ag' => 8444,
                'state' => 'Pulau Pinang',
            ),
            137 => 
            array (
                'date' => '2021-11-11',
                'pcr' => 1411,
                'rtk_ag' => 3982,
                'state' => 'Sabah',
            ),
            138 => 
            array (
                'date' => '2021-11-11',
                'pcr' => 1081,
                'rtk_ag' => 5129,
                'state' => 'Sarawak',
            ),
            139 => 
            array (
                'date' => '2021-11-11',
                'pcr' => 9638,
                'rtk_ag' => 29103,
                'state' => 'Selangor',
            ),
            140 => 
            array (
                'date' => '2021-11-11',
                'pcr' => 808,
                'rtk_ag' => 4298,
                'state' => 'Terengganu',
            ),
            141 => 
            array (
                'date' => '2021-11-11',
                'pcr' => 5062,
                'rtk_ag' => 9251,
                'state' => 'W.P. Kuala Lumpur',
            ),
            142 => 
            array (
                'date' => '2021-11-11',
                'pcr' => 54,
                'rtk_ag' => 647,
                'state' => 'W.P. Labuan',
            ),
            143 => 
            array (
                'date' => '2021-11-11',
                'pcr' => 311,
                'rtk_ag' => 458,
                'state' => 'W.P. Putrajaya',
            ),
            144 => 
            array (
                'date' => '2021-11-12',
                'pcr' => 4323,
                'rtk_ag' => 11659,
                'state' => 'Johor',
            ),
            145 => 
            array (
                'date' => '2021-11-12',
                'pcr' => 1286,
                'rtk_ag' => 3690,
                'state' => 'Kedah',
            ),
            146 => 
            array (
                'date' => '2021-11-12',
                'pcr' => 581,
                'rtk_ag' => 2135,
                'state' => 'Kelantan',
            ),
            147 => 
            array (
                'date' => '2021-11-12',
                'pcr' => 1247,
                'rtk_ag' => 3150,
                'state' => 'Melaka',
            ),
            148 => 
            array (
                'date' => '2021-11-12',
                'pcr' => 861,
                'rtk_ag' => 4026,
                'state' => 'Negeri Sembilan',
            ),
            149 => 
            array (
                'date' => '2021-11-12',
                'pcr' => 743,
                'rtk_ag' => 3669,
                'state' => 'Pahang',
            ),
            150 => 
            array (
                'date' => '2021-11-12',
                'pcr' => 1937,
                'rtk_ag' => 6210,
                'state' => 'Perak',
            ),
            151 => 
            array (
                'date' => '2021-11-12',
                'pcr' => 39,
                'rtk_ag' => 266,
                'state' => 'Perlis',
            ),
            152 => 
            array (
                'date' => '2021-11-12',
                'pcr' => 1640,
                'rtk_ag' => 7393,
                'state' => 'Pulau Pinang',
            ),
            153 => 
            array (
                'date' => '2021-11-12',
                'pcr' => 1481,
                'rtk_ag' => 3445,
                'state' => 'Sabah',
            ),
            154 => 
            array (
                'date' => '2021-11-12',
                'pcr' => 1490,
                'rtk_ag' => 5293,
                'state' => 'Sarawak',
            ),
            155 => 
            array (
                'date' => '2021-11-12',
                'pcr' => 11276,
                'rtk_ag' => 27685,
                'state' => 'Selangor',
            ),
            156 => 
            array (
                'date' => '2021-11-12',
                'pcr' => 651,
                'rtk_ag' => 2850,
                'state' => 'Terengganu',
            ),
            157 => 
            array (
                'date' => '2021-11-12',
                'pcr' => 4642,
                'rtk_ag' => 6426,
                'state' => 'W.P. Kuala Lumpur',
            ),
            158 => 
            array (
                'date' => '2021-11-12',
                'pcr' => 87,
                'rtk_ag' => 828,
                'state' => 'W.P. Labuan',
            ),
            159 => 
            array (
                'date' => '2021-11-12',
                'pcr' => 320,
                'rtk_ag' => 423,
                'state' => 'W.P. Putrajaya',
            ),
            160 => 
            array (
                'date' => '2021-11-13',
                'pcr' => 2820,
                'rtk_ag' => 7875,
                'state' => 'Johor',
            ),
            161 => 
            array (
                'date' => '2021-11-13',
                'pcr' => 1202,
                'rtk_ag' => 3093,
                'state' => 'Kedah',
            ),
            162 => 
            array (
                'date' => '2021-11-13',
                'pcr' => 600,
                'rtk_ag' => 2691,
                'state' => 'Kelantan',
            ),
            163 => 
            array (
                'date' => '2021-11-13',
                'pcr' => 949,
                'rtk_ag' => 1669,
                'state' => 'Melaka',
            ),
            164 => 
            array (
                'date' => '2021-11-13',
                'pcr' => 1275,
                'rtk_ag' => 2433,
                'state' => 'Negeri Sembilan',
            ),
            165 => 
            array (
                'date' => '2021-11-13',
                'pcr' => 562,
                'rtk_ag' => 2434,
                'state' => 'Pahang',
            ),
            166 => 
            array (
                'date' => '2021-11-13',
                'pcr' => 1112,
                'rtk_ag' => 4624,
                'state' => 'Perak',
            ),
            167 => 
            array (
                'date' => '2021-11-13',
                'pcr' => 26,
                'rtk_ag' => 219,
                'state' => 'Perlis',
            ),
            168 => 
            array (
                'date' => '2021-11-13',
                'pcr' => 1777,
                'rtk_ag' => 6165,
                'state' => 'Pulau Pinang',
            ),
            169 => 
            array (
                'date' => '2021-11-13',
                'pcr' => 1856,
                'rtk_ag' => 2874,
                'state' => 'Sabah',
            ),
            170 => 
            array (
                'date' => '2021-11-13',
                'pcr' => 1663,
                'rtk_ag' => 3725,
                'state' => 'Sarawak',
            ),
            171 => 
            array (
                'date' => '2021-11-13',
                'pcr' => 9355,
                'rtk_ag' => 20969,
                'state' => 'Selangor',
            ),
            172 => 
            array (
                'date' => '2021-11-13',
                'pcr' => 785,
                'rtk_ag' => 4133,
                'state' => 'Terengganu',
            ),
            173 => 
            array (
                'date' => '2021-11-13',
                'pcr' => 3891,
                'rtk_ag' => 5128,
                'state' => 'W.P. Kuala Lumpur',
            ),
            174 => 
            array (
                'date' => '2021-11-13',
                'pcr' => 94,
                'rtk_ag' => 596,
                'state' => 'W.P. Labuan',
            ),
            175 => 
            array (
                'date' => '2021-11-13',
                'pcr' => 287,
                'rtk_ag' => 262,
                'state' => 'W.P. Putrajaya',
            ),
            176 => 
            array (
                'date' => '2021-11-14',
                'pcr' => 3969,
                'rtk_ag' => 11031,
                'state' => 'Johor',
            ),
            177 => 
            array (
                'date' => '2021-11-14',
                'pcr' => 1225,
                'rtk_ag' => 5317,
                'state' => 'Kedah',
            ),
            178 => 
            array (
                'date' => '2021-11-14',
                'pcr' => 580,
                'rtk_ag' => 4775,
                'state' => 'Kelantan',
            ),
            179 => 
            array (
                'date' => '2021-11-14',
                'pcr' => 700,
                'rtk_ag' => 1688,
                'state' => 'Melaka',
            ),
            180 => 
            array (
                'date' => '2021-11-14',
                'pcr' => 903,
                'rtk_ag' => 1967,
                'state' => 'Negeri Sembilan',
            ),
            181 => 
            array (
                'date' => '2021-11-14',
                'pcr' => 522,
                'rtk_ag' => 2991,
                'state' => 'Pahang',
            ),
            182 => 
            array (
                'date' => '2021-11-14',
                'pcr' => 980,
                'rtk_ag' => 3505,
                'state' => 'Perak',
            ),
            183 => 
            array (
                'date' => '2021-11-14',
                'pcr' => 14,
                'rtk_ag' => 191,
                'state' => 'Perlis',
            ),
            184 => 
            array (
                'date' => '2021-11-14',
                'pcr' => 1615,
                'rtk_ag' => 6142,
                'state' => 'Pulau Pinang',
            ),
            185 => 
            array (
                'date' => '2021-11-14',
                'pcr' => 1277,
                'rtk_ag' => 2823,
                'state' => 'Sabah',
            ),
            186 => 
            array (
                'date' => '2021-11-14',
                'pcr' => 1170,
                'rtk_ag' => 3220,
                'state' => 'Sarawak',
            ),
            187 => 
            array (
                'date' => '2021-11-14',
                'pcr' => 6815,
                'rtk_ag' => 22396,
                'state' => 'Selangor',
            ),
            188 => 
            array (
                'date' => '2021-11-14',
                'pcr' => 732,
                'rtk_ag' => 5220,
                'state' => 'Terengganu',
            ),
            189 => 
            array (
                'date' => '2021-11-14',
                'pcr' => 2440,
                'rtk_ag' => 5087,
                'state' => 'W.P. Kuala Lumpur',
            ),
            190 => 
            array (
                'date' => '2021-11-14',
                'pcr' => 35,
                'rtk_ag' => 601,
                'state' => 'W.P. Labuan',
            ),
            191 => 
            array (
                'date' => '2021-11-14',
                'pcr' => 187,
                'rtk_ag' => 300,
                'state' => 'W.P. Putrajaya',
            ),
            192 => 
            array (
                'date' => '2021-11-15',
                'pcr' => 4021,
                'rtk_ag' => 23220,
                'state' => 'Johor',
            ),
            193 => 
            array (
                'date' => '2021-11-15',
                'pcr' => 1087,
                'rtk_ag' => 6857,
                'state' => 'Kedah',
            ),
            194 => 
            array (
                'date' => '2021-11-15',
                'pcr' => 1098,
                'rtk_ag' => 4886,
                'state' => 'Kelantan',
            ),
            195 => 
            array (
                'date' => '2021-11-15',
                'pcr' => 675,
                'rtk_ag' => 5196,
                'state' => 'Melaka',
            ),
            196 => 
            array (
                'date' => '2021-11-15',
                'pcr' => 770,
                'rtk_ag' => 8584,
                'state' => 'Negeri Sembilan',
            ),
            197 => 
            array (
                'date' => '2021-11-15',
                'pcr' => 377,
                'rtk_ag' => 6087,
                'state' => 'Pahang',
            ),
            198 => 
            array (
                'date' => '2021-11-15',
                'pcr' => 1018,
                'rtk_ag' => 8867,
                'state' => 'Perak',
            ),
            199 => 
            array (
                'date' => '2021-11-15',
                'pcr' => 19,
                'rtk_ag' => 360,
                'state' => 'Perlis',
            ),
            200 => 
            array (
                'date' => '2021-11-15',
                'pcr' => 1188,
                'rtk_ag' => 12489,
                'state' => 'Pulau Pinang',
            ),
            201 => 
            array (
                'date' => '2021-11-15',
                'pcr' => 1327,
                'rtk_ag' => 4780,
                'state' => 'Sabah',
            ),
            202 => 
            array (
                'date' => '2021-11-15',
                'pcr' => 1608,
                'rtk_ag' => 6022,
                'state' => 'Sarawak',
            ),
            203 => 
            array (
                'date' => '2021-11-15',
                'pcr' => 9024,
                'rtk_ag' => 45150,
                'state' => 'Selangor',
            ),
            204 => 
            array (
                'date' => '2021-11-15',
                'pcr' => 793,
                'rtk_ag' => 4148,
                'state' => 'Terengganu',
            ),
            205 => 
            array (
                'date' => '2021-11-15',
                'pcr' => 4382,
                'rtk_ag' => 11327,
                'state' => 'W.P. Kuala Lumpur',
            ),
            206 => 
            array (
                'date' => '2021-11-15',
                'pcr' => 63,
                'rtk_ag' => 1133,
                'state' => 'W.P. Labuan',
            ),
            207 => 
            array (
                'date' => '2021-11-15',
                'pcr' => 257,
                'rtk_ag' => 641,
                'state' => 'W.P. Putrajaya',
            ),
            208 => 
            array (
                'date' => '2021-11-16',
                'pcr' => 4567,
                'rtk_ag' => 16113,
                'state' => 'Johor',
            ),
            209 => 
            array (
                'date' => '2021-11-16',
                'pcr' => 1279,
                'rtk_ag' => 5103,
                'state' => 'Kedah',
            ),
            210 => 
            array (
                'date' => '2021-11-16',
                'pcr' => 956,
                'rtk_ag' => 5111,
                'state' => 'Kelantan',
            ),
            211 => 
            array (
                'date' => '2021-11-16',
                'pcr' => 1416,
                'rtk_ag' => 4402,
                'state' => 'Melaka',
            ),
            212 => 
            array (
                'date' => '2021-11-16',
                'pcr' => 1500,
                'rtk_ag' => 5512,
                'state' => 'Negeri Sembilan',
            ),
            213 => 
            array (
                'date' => '2021-11-16',
                'pcr' => 1104,
                'rtk_ag' => 4649,
                'state' => 'Pahang',
            ),
            214 => 
            array (
                'date' => '2021-11-16',
                'pcr' => 1331,
                'rtk_ag' => 6551,
                'state' => 'Perak',
            ),
            215 => 
            array (
                'date' => '2021-11-16',
                'pcr' => 24,
                'rtk_ag' => 301,
                'state' => 'Perlis',
            ),
            216 => 
            array (
                'date' => '2021-11-16',
                'pcr' => 1746,
                'rtk_ag' => 8894,
                'state' => 'Pulau Pinang',
            ),
            217 => 
            array (
                'date' => '2021-11-16',
                'pcr' => 1996,
                'rtk_ag' => 4207,
                'state' => 'Sabah',
            ),
            218 => 
            array (
                'date' => '2021-11-16',
                'pcr' => 1441,
                'rtk_ag' => 4928,
                'state' => 'Sarawak',
            ),
            219 => 
            array (
                'date' => '2021-11-16',
                'pcr' => 13278,
                'rtk_ag' => 30843,
                'state' => 'Selangor',
            ),
            220 => 
            array (
                'date' => '2021-11-16',
                'pcr' => 792,
                'rtk_ag' => 3803,
                'state' => 'Terengganu',
            ),
            221 => 
            array (
                'date' => '2021-11-16',
                'pcr' => 5177,
                'rtk_ag' => 7593,
                'state' => 'W.P. Kuala Lumpur',
            ),
            222 => 
            array (
                'date' => '2021-11-16',
                'pcr' => 155,
                'rtk_ag' => 658,
                'state' => 'W.P. Labuan',
            ),
            223 => 
            array (
                'date' => '2021-11-16',
                'pcr' => 390,
                'rtk_ag' => 414,
                'state' => 'W.P. Putrajaya',
            ),
            224 => 
            array (
                'date' => '2021-11-17',
                'pcr' => 4394,
                'rtk_ag' => 13672,
                'state' => 'Johor',
            ),
            225 => 
            array (
                'date' => '2021-11-17',
                'pcr' => 1341,
                'rtk_ag' => 3915,
                'state' => 'Kedah',
            ),
            226 => 
            array (
                'date' => '2021-11-17',
                'pcr' => 1092,
                'rtk_ag' => 5062,
                'state' => 'Kelantan',
            ),
            227 => 
            array (
                'date' => '2021-11-17',
                'pcr' => 1163,
                'rtk_ag' => 3868,
                'state' => 'Melaka',
            ),
            228 => 
            array (
                'date' => '2021-11-17',
                'pcr' => 921,
                'rtk_ag' => 5850,
                'state' => 'Negeri Sembilan',
            ),
            229 => 
            array (
                'date' => '2021-11-17',
                'pcr' => 970,
                'rtk_ag' => 4800,
                'state' => 'Pahang',
            ),
            230 => 
            array (
                'date' => '2021-11-17',
                'pcr' => 1629,
                'rtk_ag' => 6413,
                'state' => 'Perak',
            ),
            231 => 
            array (
                'date' => '2021-11-17',
                'pcr' => 16,
                'rtk_ag' => 353,
                'state' => 'Perlis',
            ),
            232 => 
            array (
                'date' => '2021-11-17',
                'pcr' => 1600,
                'rtk_ag' => 10445,
                'state' => 'Pulau Pinang',
            ),
            233 => 
            array (
                'date' => '2021-11-17',
                'pcr' => 1442,
                'rtk_ag' => 4386,
                'state' => 'Sabah',
            ),
            234 => 
            array (
                'date' => '2021-11-17',
                'pcr' => 1491,
                'rtk_ag' => 4799,
                'state' => 'Sarawak',
            ),
            235 => 
            array (
                'date' => '2021-11-17',
                'pcr' => 12641,
                'rtk_ag' => 30189,
                'state' => 'Selangor',
            ),
            236 => 
            array (
                'date' => '2021-11-17',
                'pcr' => 806,
                'rtk_ag' => 3975,
                'state' => 'Terengganu',
            ),
            237 => 
            array (
                'date' => '2021-11-17',
                'pcr' => 5425,
                'rtk_ag' => 6937,
                'state' => 'W.P. Kuala Lumpur',
            ),
            238 => 
            array (
                'date' => '2021-11-17',
                'pcr' => 94,
                'rtk_ag' => 851,
                'state' => 'W.P. Labuan',
            ),
            239 => 
            array (
                'date' => '2021-11-17',
                'pcr' => 168,
                'rtk_ag' => 455,
                'state' => 'W.P. Putrajaya',
            ),
            240 => 
            array (
                'date' => '2021-11-18',
                'pcr' => 3412,
                'rtk_ag' => 9753,
                'state' => 'Johor',
            ),
            241 => 
            array (
                'date' => '2021-11-18',
                'pcr' => 1382,
                'rtk_ag' => 4893,
                'state' => 'Kedah',
            ),
            242 => 
            array (
                'date' => '2021-11-18',
                'pcr' => 1092,
                'rtk_ag' => 5004,
                'state' => 'Kelantan',
            ),
            243 => 
            array (
                'date' => '2021-11-18',
                'pcr' => 1129,
                'rtk_ag' => 3090,
                'state' => 'Melaka',
            ),
            244 => 
            array (
                'date' => '2021-11-18',
                'pcr' => 1195,
                'rtk_ag' => 4006,
                'state' => 'Negeri Sembilan',
            ),
            245 => 
            array (
                'date' => '2021-11-18',
                'pcr' => 956,
                'rtk_ag' => 4020,
                'state' => 'Pahang',
            ),
            246 => 
            array (
                'date' => '2021-11-18',
                'pcr' => 1314,
                'rtk_ag' => 5548,
                'state' => 'Perak',
            ),
            247 => 
            array (
                'date' => '2021-11-18',
                'pcr' => 33,
                'rtk_ag' => 252,
                'state' => 'Perlis',
            ),
            248 => 
            array (
                'date' => '2021-11-18',
                'pcr' => 1870,
                'rtk_ag' => 8948,
                'state' => 'Pulau Pinang',
            ),
            249 => 
            array (
                'date' => '2021-11-18',
                'pcr' => 1691,
                'rtk_ag' => 4087,
                'state' => 'Sabah',
            ),
            250 => 
            array (
                'date' => '2021-11-18',
                'pcr' => 959,
                'rtk_ag' => 4783,
                'state' => 'Sarawak',
            ),
            251 => 
            array (
                'date' => '2021-11-18',
                'pcr' => 11454,
                'rtk_ag' => 25623,
                'state' => 'Selangor',
            ),
            252 => 
            array (
                'date' => '2021-11-18',
                'pcr' => 626,
                'rtk_ag' => 3675,
                'state' => 'Terengganu',
            ),
            253 => 
            array (
                'date' => '2021-11-18',
                'pcr' => 4811,
                'rtk_ag' => 5845,
                'state' => 'W.P. Kuala Lumpur',
            ),
            254 => 
            array (
                'date' => '2021-11-18',
                'pcr' => 47,
                'rtk_ag' => 694,
                'state' => 'W.P. Labuan',
            ),
            255 => 
            array (
                'date' => '2021-11-18',
                'pcr' => 498,
                'rtk_ag' => 584,
                'state' => 'W.P. Putrajaya',
            ),
            256 => 
            array (
                'date' => '2021-11-19',
                'pcr' => 3993,
                'rtk_ag' => 11209,
                'state' => 'Johor',
            ),
            257 => 
            array (
                'date' => '2021-11-19',
                'pcr' => 1011,
                'rtk_ag' => 4026,
                'state' => 'Kedah',
            ),
            258 => 
            array (
                'date' => '2021-11-19',
                'pcr' => 774,
                'rtk_ag' => 2184,
                'state' => 'Kelantan',
            ),
            259 => 
            array (
                'date' => '2021-11-19',
                'pcr' => 1028,
                'rtk_ag' => 2558,
                'state' => 'Melaka',
            ),
            260 => 
            array (
                'date' => '2021-11-19',
                'pcr' => 867,
                'rtk_ag' => 3772,
                'state' => 'Negeri Sembilan',
            ),
            261 => 
            array (
                'date' => '2021-11-19',
                'pcr' => 847,
                'rtk_ag' => 3689,
                'state' => 'Pahang',
            ),
            262 => 
            array (
                'date' => '2021-11-19',
                'pcr' => 1277,
                'rtk_ag' => 4894,
                'state' => 'Perak',
            ),
            263 => 
            array (
                'date' => '2021-11-19',
                'pcr' => 9,
                'rtk_ag' => 293,
                'state' => 'Perlis',
            ),
            264 => 
            array (
                'date' => '2021-11-19',
                'pcr' => 1687,
                'rtk_ag' => 8927,
                'state' => 'Pulau Pinang',
            ),
            265 => 
            array (
                'date' => '2021-11-19',
                'pcr' => 1506,
                'rtk_ag' => 3759,
                'state' => 'Sabah',
            ),
            266 => 
            array (
                'date' => '2021-11-19',
                'pcr' => 1368,
                'rtk_ag' => 4562,
                'state' => 'Sarawak',
            ),
            267 => 
            array (
                'date' => '2021-11-19',
                'pcr' => 10840,
                'rtk_ag' => 23020,
                'state' => 'Selangor',
            ),
            268 => 
            array (
                'date' => '2021-11-19',
                'pcr' => 465,
                'rtk_ag' => 2198,
                'state' => 'Terengganu',
            ),
            269 => 
            array (
                'date' => '2021-11-19',
                'pcr' => 4572,
                'rtk_ag' => 5854,
                'state' => 'W.P. Kuala Lumpur',
            ),
            270 => 
            array (
                'date' => '2021-11-19',
                'pcr' => 76,
                'rtk_ag' => 714,
                'state' => 'W.P. Labuan',
            ),
            271 => 
            array (
                'date' => '2021-11-19',
                'pcr' => 246,
                'rtk_ag' => 454,
                'state' => 'W.P. Putrajaya',
            ),
            272 => 
            array (
                'date' => '2021-11-20',
                'pcr' => 3945,
                'rtk_ag' => 8228,
                'state' => 'Johor',
            ),
            273 => 
            array (
                'date' => '2021-11-20',
                'pcr' => 883,
                'rtk_ag' => 3080,
                'state' => 'Kedah',
            ),
            274 => 
            array (
                'date' => '2021-11-20',
                'pcr' => 529,
                'rtk_ag' => 2583,
                'state' => 'Kelantan',
            ),
            275 => 
            array (
                'date' => '2021-11-20',
                'pcr' => 1114,
                'rtk_ag' => 1479,
                'state' => 'Melaka',
            ),
            276 => 
            array (
                'date' => '2021-11-20',
                'pcr' => 843,
                'rtk_ag' => 5515,
                'state' => 'Negeri Sembilan',
            ),
            277 => 
            array (
                'date' => '2021-11-20',
                'pcr' => 656,
                'rtk_ag' => 2487,
                'state' => 'Pahang',
            ),
            278 => 
            array (
                'date' => '2021-11-20',
                'pcr' => 1107,
                'rtk_ag' => 3958,
                'state' => 'Perak',
            ),
            279 => 
            array (
                'date' => '2021-11-20',
                'pcr' => 32,
                'rtk_ag' => 183,
                'state' => 'Perlis',
            ),
            280 => 
            array (
                'date' => '2021-11-20',
                'pcr' => 1766,
                'rtk_ag' => 4966,
                'state' => 'Pulau Pinang',
            ),
            281 => 
            array (
                'date' => '2021-11-20',
                'pcr' => 1752,
                'rtk_ag' => 2832,
                'state' => 'Sabah',
            ),
            282 => 
            array (
                'date' => '2021-11-20',
                'pcr' => 1442,
                'rtk_ag' => 3139,
                'state' => 'Sarawak',
            ),
            283 => 
            array (
                'date' => '2021-11-20',
                'pcr' => 8855,
                'rtk_ag' => 15485,
                'state' => 'Selangor',
            ),
            284 => 
            array (
                'date' => '2021-11-20',
                'pcr' => 595,
                'rtk_ag' => 4026,
                'state' => 'Terengganu',
            ),
            285 => 
            array (
                'date' => '2021-11-20',
                'pcr' => 3809,
                'rtk_ag' => 4657,
                'state' => 'W.P. Kuala Lumpur',
            ),
            286 => 
            array (
                'date' => '2021-11-20',
                'pcr' => 71,
                'rtk_ag' => 524,
                'state' => 'W.P. Labuan',
            ),
            287 => 
            array (
                'date' => '2021-11-20',
                'pcr' => 270,
                'rtk_ag' => 318,
                'state' => 'W.P. Putrajaya',
            ),
            288 => 
            array (
                'date' => '2021-11-21',
                'pcr' => 3028,
                'rtk_ag' => 9476,
                'state' => 'Johor',
            ),
            289 => 
            array (
                'date' => '2021-11-21',
                'pcr' => 1085,
                'rtk_ag' => 4055,
                'state' => 'Kedah',
            ),
            290 => 
            array (
                'date' => '2021-11-21',
                'pcr' => 609,
                'rtk_ag' => 3791,
                'state' => 'Kelantan',
            ),
            291 => 
            array (
                'date' => '2021-11-21',
                'pcr' => 495,
                'rtk_ag' => 1814,
                'state' => 'Melaka',
            ),
            292 => 
            array (
                'date' => '2021-11-21',
                'pcr' => 676,
                'rtk_ag' => 2560,
                'state' => 'Negeri Sembilan',
            ),
            293 => 
            array (
                'date' => '2021-11-21',
                'pcr' => 480,
                'rtk_ag' => 2262,
                'state' => 'Pahang',
            ),
            294 => 
            array (
                'date' => '2021-11-21',
                'pcr' => 979,
                'rtk_ag' => 3834,
                'state' => 'Perak',
            ),
            295 => 
            array (
                'date' => '2021-11-21',
                'pcr' => 21,
                'rtk_ag' => 216,
                'state' => 'Perlis',
            ),
            296 => 
            array (
                'date' => '2021-11-21',
                'pcr' => 880,
                'rtk_ag' => 5867,
                'state' => 'Pulau Pinang',
            ),
            297 => 
            array (
                'date' => '2021-11-21',
                'pcr' => 1479,
                'rtk_ag' => 3345,
                'state' => 'Sabah',
            ),
            298 => 
            array (
                'date' => '2021-11-21',
                'pcr' => 1049,
                'rtk_ag' => 2873,
                'state' => 'Sarawak',
            ),
            299 => 
            array (
                'date' => '2021-11-21',
                'pcr' => 7102,
                'rtk_ag' => 19010,
                'state' => 'Selangor',
            ),
            300 => 
            array (
                'date' => '2021-11-21',
                'pcr' => 560,
                'rtk_ag' => 4763,
                'state' => 'Terengganu',
            ),
            301 => 
            array (
                'date' => '2021-11-21',
                'pcr' => 2968,
                'rtk_ag' => 4618,
                'state' => 'W.P. Kuala Lumpur',
            ),
            302 => 
            array (
                'date' => '2021-11-21',
                'pcr' => 27,
                'rtk_ag' => 506,
                'state' => 'W.P. Labuan',
            ),
            303 => 
            array (
                'date' => '2021-11-21',
                'pcr' => 341,
                'rtk_ag' => 292,
                'state' => 'W.P. Putrajaya',
            ),
            304 => 
            array (
                'date' => '2021-11-22',
                'pcr' => 4590,
                'rtk_ag' => 20180,
                'state' => 'Johor',
            ),
            305 => 
            array (
                'date' => '2021-11-22',
                'pcr' => 1275,
                'rtk_ag' => 6013,
                'state' => 'Kedah',
            ),
            306 => 
            array (
                'date' => '2021-11-22',
                'pcr' => 931,
                'rtk_ag' => 3941,
                'state' => 'Kelantan',
            ),
            307 => 
            array (
                'date' => '2021-11-22',
                'pcr' => 951,
                'rtk_ag' => 6540,
                'state' => 'Melaka',
            ),
            308 => 
            array (
                'date' => '2021-11-22',
                'pcr' => 927,
                'rtk_ag' => 5977,
                'state' => 'Negeri Sembilan',
            ),
            309 => 
            array (
                'date' => '2021-11-22',
                'pcr' => 624,
                'rtk_ag' => 5170,
                'state' => 'Pahang',
            ),
            310 => 
            array (
                'date' => '2021-11-22',
                'pcr' => 1029,
                'rtk_ag' => 9796,
                'state' => 'Perak',
            ),
            311 => 
            array (
                'date' => '2021-11-22',
                'pcr' => 12,
                'rtk_ag' => 351,
                'state' => 'Perlis',
            ),
            312 => 
            array (
                'date' => '2021-11-22',
                'pcr' => 1196,
                'rtk_ag' => 12492,
                'state' => 'Pulau Pinang',
            ),
            313 => 
            array (
                'date' => '2021-11-22',
                'pcr' => 1230,
                'rtk_ag' => 5013,
                'state' => 'Sabah',
            ),
            314 => 
            array (
                'date' => '2021-11-22',
                'pcr' => 1583,
                'rtk_ag' => 5193,
                'state' => 'Sarawak',
            ),
            315 => 
            array (
                'date' => '2021-11-22',
                'pcr' => 9623,
                'rtk_ag' => 38092,
                'state' => 'Selangor',
            ),
            316 => 
            array (
                'date' => '2021-11-22',
                'pcr' => 664,
                'rtk_ag' => 3334,
                'state' => 'Terengganu',
            ),
            317 => 
            array (
                'date' => '2021-11-22',
                'pcr' => 4696,
                'rtk_ag' => 9407,
                'state' => 'W.P. Kuala Lumpur',
            ),
            318 => 
            array (
                'date' => '2021-11-22',
                'pcr' => 108,
                'rtk_ag' => 1218,
                'state' => 'W.P. Labuan',
            ),
            319 => 
            array (
                'date' => '2021-11-22',
                'pcr' => 267,
                'rtk_ag' => 580,
                'state' => 'W.P. Putrajaya',
            ),
            320 => 
            array (
                'date' => '2021-11-23',
                'pcr' => 4778,
                'rtk_ag' => 14111,
                'state' => 'Johor',
            ),
            321 => 
            array (
                'date' => '2021-11-23',
                'pcr' => 1049,
                'rtk_ag' => 4593,
                'state' => 'Kedah',
            ),
            322 => 
            array (
                'date' => '2021-11-23',
                'pcr' => 919,
                'rtk_ag' => 2947,
                'state' => 'Kelantan',
            ),
            323 => 
            array (
                'date' => '2021-11-23',
                'pcr' => 1347,
                'rtk_ag' => 3985,
                'state' => 'Melaka',
            ),
            324 => 
            array (
                'date' => '2021-11-23',
                'pcr' => 978,
                'rtk_ag' => 6693,
                'state' => 'Negeri Sembilan',
            ),
            325 => 
            array (
                'date' => '2021-11-23',
                'pcr' => 1065,
                'rtk_ag' => 3915,
                'state' => 'Pahang',
            ),
            326 => 
            array (
                'date' => '2021-11-23',
                'pcr' => 1644,
                'rtk_ag' => 6350,
                'state' => 'Perak',
            ),
            327 => 
            array (
                'date' => '2021-11-23',
                'pcr' => 40,
                'rtk_ag' => 333,
                'state' => 'Perlis',
            ),
            328 => 
            array (
                'date' => '2021-11-23',
                'pcr' => 1838,
                'rtk_ag' => 11468,
                'state' => 'Pulau Pinang',
            ),
            329 => 
            array (
                'date' => '2021-11-23',
                'pcr' => 1706,
                'rtk_ag' => 3826,
                'state' => 'Sabah',
            ),
            330 => 
            array (
                'date' => '2021-11-23',
                'pcr' => 1279,
                'rtk_ag' => 3985,
                'state' => 'Sarawak',
            ),
            331 => 
            array (
                'date' => '2021-11-23',
                'pcr' => 13605,
                'rtk_ag' => 29570,
                'state' => 'Selangor',
            ),
            332 => 
            array (
                'date' => '2021-11-23',
                'pcr' => 638,
                'rtk_ag' => 3308,
                'state' => 'Terengganu',
            ),
            333 => 
            array (
                'date' => '2021-11-23',
                'pcr' => 5764,
                'rtk_ag' => 7933,
                'state' => 'W.P. Kuala Lumpur',
            ),
            334 => 
            array (
                'date' => '2021-11-23',
                'pcr' => 96,
                'rtk_ag' => 847,
                'state' => 'W.P. Labuan',
            ),
            335 => 
            array (
                'date' => '2021-11-23',
                'pcr' => 272,
                'rtk_ag' => 462,
                'state' => 'W.P. Putrajaya',
            ),
            336 => 
            array (
                'date' => '2021-11-24',
                'pcr' => 4656,
                'rtk_ag' => 13376,
                'state' => 'Johor',
            ),
            337 => 
            array (
                'date' => '2021-11-24',
                'pcr' => 1420,
                'rtk_ag' => 4326,
                'state' => 'Kedah',
            ),
            338 => 
            array (
                'date' => '2021-11-24',
                'pcr' => 854,
                'rtk_ag' => 3280,
                'state' => 'Kelantan',
            ),
            339 => 
            array (
                'date' => '2021-11-24',
                'pcr' => 1064,
                'rtk_ag' => 3862,
                'state' => 'Melaka',
            ),
            340 => 
            array (
                'date' => '2021-11-24',
                'pcr' => 1158,
                'rtk_ag' => 5038,
                'state' => 'Negeri Sembilan',
            ),
            341 => 
            array (
                'date' => '2021-11-24',
                'pcr' => 855,
                'rtk_ag' => 5170,
                'state' => 'Pahang',
            ),
            342 => 
            array (
                'date' => '2021-11-24',
                'pcr' => 1321,
                'rtk_ag' => 6497,
                'state' => 'Perak',
            ),
            343 => 
            array (
                'date' => '2021-11-24',
                'pcr' => 65,
                'rtk_ag' => 325,
                'state' => 'Perlis',
            ),
            344 => 
            array (
                'date' => '2021-11-24',
                'pcr' => 1831,
                'rtk_ag' => 9957,
                'state' => 'Pulau Pinang',
            ),
            345 => 
            array (
                'date' => '2021-11-24',
                'pcr' => 1999,
                'rtk_ag' => 3752,
                'state' => 'Sabah',
            ),
            346 => 
            array (
                'date' => '2021-11-24',
                'pcr' => 1236,
                'rtk_ag' => 3867,
                'state' => 'Sarawak',
            ),
            347 => 
            array (
                'date' => '2021-11-24',
                'pcr' => 13854,
                'rtk_ag' => 31147,
                'state' => 'Selangor',
            ),
            348 => 
            array (
                'date' => '2021-11-24',
                'pcr' => 551,
                'rtk_ag' => 2831,
                'state' => 'Terengganu',
            ),
            349 => 
            array (
                'date' => '2021-11-24',
                'pcr' => 5604,
                'rtk_ag' => 9278,
                'state' => 'W.P. Kuala Lumpur',
            ),
            350 => 
            array (
                'date' => '2021-11-24',
                'pcr' => 197,
                'rtk_ag' => 733,
                'state' => 'W.P. Labuan',
            ),
            351 => 
            array (
                'date' => '2021-11-24',
                'pcr' => 326,
                'rtk_ag' => 430,
                'state' => 'W.P. Putrajaya',
            ),
            352 => 
            array (
                'date' => '2021-11-25',
                'pcr' => 3286,
                'rtk_ag' => 13316,
                'state' => 'Johor',
            ),
            353 => 
            array (
                'date' => '2021-11-25',
                'pcr' => 1197,
                'rtk_ag' => 3804,
                'state' => 'Kedah',
            ),
            354 => 
            array (
                'date' => '2021-11-25',
                'pcr' => 712,
                'rtk_ag' => 3572,
                'state' => 'Kelantan',
            ),
            355 => 
            array (
                'date' => '2021-11-25',
                'pcr' => 969,
                'rtk_ag' => 3830,
                'state' => 'Melaka',
            ),
            356 => 
            array (
                'date' => '2021-11-25',
                'pcr' => 814,
                'rtk_ag' => 5872,
                'state' => 'Negeri Sembilan',
            ),
            357 => 
            array (
                'date' => '2021-11-25',
                'pcr' => 760,
                'rtk_ag' => 3768,
                'state' => 'Pahang',
            ),
            358 => 
            array (
                'date' => '2021-11-25',
                'pcr' => 961,
                'rtk_ag' => 6833,
                'state' => 'Perak',
            ),
            359 => 
            array (
                'date' => '2021-11-25',
                'pcr' => 23,
                'rtk_ag' => 299,
                'state' => 'Perlis',
            ),
            360 => 
            array (
                'date' => '2021-11-25',
                'pcr' => 1770,
                'rtk_ag' => 8132,
                'state' => 'Pulau Pinang',
            ),
            361 => 
            array (
                'date' => '2021-11-25',
                'pcr' => 1558,
                'rtk_ag' => 3952,
                'state' => 'Sabah',
            ),
            362 => 
            array (
                'date' => '2021-11-25',
                'pcr' => 1001,
                'rtk_ag' => 3735,
                'state' => 'Sarawak',
            ),
            363 => 
            array (
                'date' => '2021-11-25',
                'pcr' => 11480,
                'rtk_ag' => 25490,
                'state' => 'Selangor',
            ),
            364 => 
            array (
                'date' => '2021-11-25',
                'pcr' => 577,
                'rtk_ag' => 3385,
                'state' => 'Terengganu',
            ),
            365 => 
            array (
                'date' => '2021-11-25',
                'pcr' => 4306,
                'rtk_ag' => 7303,
                'state' => 'W.P. Kuala Lumpur',
            ),
            366 => 
            array (
                'date' => '2021-11-25',
                'pcr' => 86,
                'rtk_ag' => 631,
                'state' => 'W.P. Labuan',
            ),
            367 => 
            array (
                'date' => '2021-11-25',
                'pcr' => 207,
                'rtk_ag' => 446,
                'state' => 'W.P. Putrajaya',
            ),
            368 => 
            array (
                'date' => '2021-11-26',
                'pcr' => 3459,
                'rtk_ag' => 9270,
                'state' => 'Johor',
            ),
            369 => 
            array (
                'date' => '2021-11-26',
                'pcr' => 1088,
                'rtk_ag' => 3189,
                'state' => 'Kedah',
            ),
            370 => 
            array (
                'date' => '2021-11-26',
                'pcr' => 738,
                'rtk_ag' => 1973,
                'state' => 'Kelantan',
            ),
            371 => 
            array (
                'date' => '2021-11-26',
                'pcr' => 1146,
                'rtk_ag' => 2446,
                'state' => 'Melaka',
            ),
            372 => 
            array (
                'date' => '2021-11-26',
                'pcr' => 1234,
                'rtk_ag' => 3420,
                'state' => 'Negeri Sembilan',
            ),
            373 => 
            array (
                'date' => '2021-11-26',
                'pcr' => 574,
                'rtk_ag' => 3225,
                'state' => 'Pahang',
            ),
            374 => 
            array (
                'date' => '2021-11-26',
                'pcr' => 1189,
                'rtk_ag' => 5056,
                'state' => 'Perak',
            ),
            375 => 
            array (
                'date' => '2021-11-26',
                'pcr' => 22,
                'rtk_ag' => 239,
                'state' => 'Perlis',
            ),
            376 => 
            array (
                'date' => '2021-11-26',
                'pcr' => 1637,
                'rtk_ag' => 6632,
                'state' => 'Pulau Pinang',
            ),
            377 => 
            array (
                'date' => '2021-11-26',
                'pcr' => 1661,
                'rtk_ag' => 2771,
                'state' => 'Sabah',
            ),
            378 => 
            array (
                'date' => '2021-11-26',
                'pcr' => 1068,
                'rtk_ag' => 3345,
                'state' => 'Sarawak',
            ),
            379 => 
            array (
                'date' => '2021-11-26',
                'pcr' => 10526,
                'rtk_ag' => 21611,
                'state' => 'Selangor',
            ),
            380 => 
            array (
                'date' => '2021-11-26',
                'pcr' => 526,
                'rtk_ag' => 1692,
                'state' => 'Terengganu',
            ),
            381 => 
            array (
                'date' => '2021-11-26',
                'pcr' => 4684,
                'rtk_ag' => 4759,
                'state' => 'W.P. Kuala Lumpur',
            ),
            382 => 
            array (
                'date' => '2021-11-26',
                'pcr' => 68,
                'rtk_ag' => 690,
                'state' => 'W.P. Labuan',
            ),
            383 => 
            array (
                'date' => '2021-11-26',
                'pcr' => 251,
                'rtk_ag' => 298,
                'state' => 'W.P. Putrajaya',
            ),
            384 => 
            array (
                'date' => '2021-11-27',
                'pcr' => 2626,
                'rtk_ag' => 6625,
                'state' => 'Johor',
            ),
            385 => 
            array (
                'date' => '2021-11-27',
                'pcr' => 987,
                'rtk_ag' => 2396,
                'state' => 'Kedah',
            ),
            386 => 
            array (
                'date' => '2021-11-27',
                'pcr' => 450,
                'rtk_ag' => 1940,
                'state' => 'Kelantan',
            ),
            387 => 
            array (
                'date' => '2021-11-27',
                'pcr' => 886,
                'rtk_ag' => 1018,
                'state' => 'Melaka',
            ),
            388 => 
            array (
                'date' => '2021-11-27',
                'pcr' => 784,
                'rtk_ag' => 3907,
                'state' => 'Negeri Sembilan',
            ),
            389 => 
            array (
                'date' => '2021-11-27',
                'pcr' => 661,
                'rtk_ag' => 2353,
                'state' => 'Pahang',
            ),
            390 => 
            array (
                'date' => '2021-11-27',
                'pcr' => 1211,
                'rtk_ag' => 3741,
                'state' => 'Perak',
            ),
            391 => 
            array (
                'date' => '2021-11-27',
                'pcr' => 39,
                'rtk_ag' => 179,
                'state' => 'Perlis',
            ),
            392 => 
            array (
                'date' => '2021-11-27',
                'pcr' => 1837,
                'rtk_ag' => 4788,
                'state' => 'Pulau Pinang',
            ),
            393 => 
            array (
                'date' => '2021-11-27',
                'pcr' => 1729,
                'rtk_ag' => 2152,
                'state' => 'Sabah',
            ),
            394 => 
            array (
                'date' => '2021-11-27',
                'pcr' => 1273,
                'rtk_ag' => 2275,
                'state' => 'Sarawak',
            ),
            395 => 
            array (
                'date' => '2021-11-27',
                'pcr' => 11236,
                'rtk_ag' => 16805,
                'state' => 'Selangor',
            ),
            396 => 
            array (
                'date' => '2021-11-27',
                'pcr' => 651,
                'rtk_ag' => 3256,
                'state' => 'Terengganu',
            ),
            397 => 
            array (
                'date' => '2021-11-27',
                'pcr' => 3948,
                'rtk_ag' => 4390,
                'state' => 'W.P. Kuala Lumpur',
            ),
            398 => 
            array (
                'date' => '2021-11-27',
                'pcr' => 47,
                'rtk_ag' => 364,
                'state' => 'W.P. Labuan',
            ),
            399 => 
            array (
                'date' => '2021-11-27',
                'pcr' => 234,
                'rtk_ag' => 136,
                'state' => 'W.P. Putrajaya',
            ),
            400 => 
            array (
                'date' => '2021-11-28',
                'pcr' => 3427,
                'rtk_ag' => 8833,
                'state' => 'Johor',
            ),
            401 => 
            array (
                'date' => '2021-11-28',
                'pcr' => 1026,
                'rtk_ag' => 5277,
                'state' => 'Kedah',
            ),
            402 => 
            array (
                'date' => '2021-11-28',
                'pcr' => 600,
                'rtk_ag' => 4887,
                'state' => 'Kelantan',
            ),
            403 => 
            array (
                'date' => '2021-11-28',
                'pcr' => 746,
                'rtk_ag' => 1379,
                'state' => 'Melaka',
            ),
            404 => 
            array (
                'date' => '2021-11-28',
                'pcr' => 889,
                'rtk_ag' => 1738,
                'state' => 'Negeri Sembilan',
            ),
            405 => 
            array (
                'date' => '2021-11-28',
                'pcr' => 445,
                'rtk_ag' => 2565,
                'state' => 'Pahang',
            ),
            406 => 
            array (
                'date' => '2021-11-28',
                'pcr' => 979,
                'rtk_ag' => 3684,
                'state' => 'Perak',
            ),
            407 => 
            array (
                'date' => '2021-11-28',
                'pcr' => 16,
                'rtk_ag' => 252,
                'state' => 'Perlis',
            ),
            408 => 
            array (
                'date' => '2021-11-28',
                'pcr' => 1017,
                'rtk_ag' => 5372,
                'state' => 'Pulau Pinang',
            ),
            409 => 
            array (
                'date' => '2021-11-28',
                'pcr' => 1023,
                'rtk_ag' => 2973,
                'state' => 'Sabah',
            ),
            410 => 
            array (
                'date' => '2021-11-28',
                'pcr' => 735,
                'rtk_ag' => 3019,
                'state' => 'Sarawak',
            ),
            411 => 
            array (
                'date' => '2021-11-28',
                'pcr' => 7534,
                'rtk_ag' => 19455,
                'state' => 'Selangor',
            ),
            412 => 
            array (
                'date' => '2021-11-28',
                'pcr' => 545,
                'rtk_ag' => 4108,
                'state' => 'Terengganu',
            ),
            413 => 
            array (
                'date' => '2021-11-28',
                'pcr' => 2272,
                'rtk_ag' => 6017,
                'state' => 'W.P. Kuala Lumpur',
            ),
            414 => 
            array (
                'date' => '2021-11-28',
                'pcr' => 127,
                'rtk_ag' => 556,
                'state' => 'W.P. Labuan',
            ),
            415 => 
            array (
                'date' => '2021-11-28',
                'pcr' => 168,
                'rtk_ag' => 275,
                'state' => 'W.P. Putrajaya',
            ),
            416 => 
            array (
                'date' => '2021-11-29',
                'pcr' => 4026,
                'rtk_ag' => 16512,
                'state' => 'Johor',
            ),
            417 => 
            array (
                'date' => '2021-11-29',
                'pcr' => 1140,
                'rtk_ag' => 5030,
                'state' => 'Kedah',
            ),
            418 => 
            array (
                'date' => '2021-11-29',
                'pcr' => 940,
                'rtk_ag' => 5747,
                'state' => 'Kelantan',
            ),
            419 => 
            array (
                'date' => '2021-11-29',
                'pcr' => 729,
                'rtk_ag' => 4103,
                'state' => 'Melaka',
            ),
            420 => 
            array (
                'date' => '2021-11-29',
                'pcr' => 709,
                'rtk_ag' => 4655,
                'state' => 'Negeri Sembilan',
            ),
            421 => 
            array (
                'date' => '2021-11-29',
                'pcr' => 430,
                'rtk_ag' => 4818,
                'state' => 'Pahang',
            ),
            422 => 
            array (
                'date' => '2021-11-29',
                'pcr' => 801,
                'rtk_ag' => 7631,
                'state' => 'Perak',
            ),
            423 => 
            array (
                'date' => '2021-11-29',
                'pcr' => 27,
                'rtk_ag' => 306,
                'state' => 'Perlis',
            ),
            424 => 
            array (
                'date' => '2021-11-29',
                'pcr' => 1392,
                'rtk_ag' => 9537,
                'state' => 'Pulau Pinang',
            ),
            425 => 
            array (
                'date' => '2021-11-29',
                'pcr' => 1456,
                'rtk_ag' => 4011,
                'state' => 'Sabah',
            ),
            426 => 
            array (
                'date' => '2021-11-29',
                'pcr' => 1299,
                'rtk_ag' => 4135,
                'state' => 'Sarawak',
            ),
            427 => 
            array (
                'date' => '2021-11-29',
                'pcr' => 12357,
                'rtk_ag' => 35399,
                'state' => 'Selangor',
            ),
            428 => 
            array (
                'date' => '2021-11-29',
                'pcr' => 633,
                'rtk_ag' => 4142,
                'state' => 'Terengganu',
            ),
            429 => 
            array (
                'date' => '2021-11-29',
                'pcr' => 4661,
                'rtk_ag' => 9173,
                'state' => 'W.P. Kuala Lumpur',
            ),
            430 => 
            array (
                'date' => '2021-11-29',
                'pcr' => 84,
                'rtk_ag' => 738,
                'state' => 'W.P. Labuan',
            ),
            431 => 
            array (
                'date' => '2021-11-29',
                'pcr' => 187,
                'rtk_ag' => 481,
                'state' => 'W.P. Putrajaya',
            ),
            432 => 
            array (
                'date' => '2021-11-30',
                'pcr' => 5439,
                'rtk_ag' => 15593,
                'state' => 'Johor',
            ),
            433 => 
            array (
                'date' => '2021-11-30',
                'pcr' => 1310,
                'rtk_ag' => 4096,
                'state' => 'Kedah',
            ),
            434 => 
            array (
                'date' => '2021-11-30',
                'pcr' => 792,
                'rtk_ag' => 7193,
                'state' => 'Kelantan',
            ),
            435 => 
            array (
                'date' => '2021-11-30',
                'pcr' => 1335,
                'rtk_ag' => 3188,
                'state' => 'Melaka',
            ),
            436 => 
            array (
                'date' => '2021-11-30',
                'pcr' => 1408,
                'rtk_ag' => 4253,
                'state' => 'Negeri Sembilan',
            ),
            437 => 
            array (
                'date' => '2021-11-30',
                'pcr' => 990,
                'rtk_ag' => 4202,
                'state' => 'Pahang',
            ),
            438 => 
            array (
                'date' => '2021-11-30',
                'pcr' => 1650,
                'rtk_ag' => 6532,
                'state' => 'Perak',
            ),
            439 => 
            array (
                'date' => '2021-11-30',
                'pcr' => 46,
                'rtk_ag' => 321,
                'state' => 'Perlis',
            ),
            440 => 
            array (
                'date' => '2021-11-30',
                'pcr' => 1951,
                'rtk_ag' => 7887,
                'state' => 'Pulau Pinang',
            ),
            441 => 
            array (
                'date' => '2021-11-30',
                'pcr' => 1913,
                'rtk_ag' => 3718,
                'state' => 'Sabah',
            ),
            442 => 
            array (
                'date' => '2021-11-30',
                'pcr' => 1271,
                'rtk_ag' => 3367,
                'state' => 'Sarawak',
            ),
            443 => 
            array (
                'date' => '2021-11-30',
                'pcr' => 14933,
                'rtk_ag' => 32648,
                'state' => 'Selangor',
            ),
            444 => 
            array (
                'date' => '2021-11-30',
                'pcr' => 587,
                'rtk_ag' => 3383,
                'state' => 'Terengganu',
            ),
            445 => 
            array (
                'date' => '2021-11-30',
                'pcr' => 6725,
                'rtk_ag' => 7905,
                'state' => 'W.P. Kuala Lumpur',
            ),
            446 => 
            array (
                'date' => '2021-11-30',
                'pcr' => 85,
                'rtk_ag' => 538,
                'state' => 'W.P. Labuan',
            ),
            447 => 
            array (
                'date' => '2021-11-30',
                'pcr' => 230,
                'rtk_ag' => 376,
                'state' => 'W.P. Putrajaya',
            ),
            448 => 
            array (
                'date' => '2021-12-01',
                'pcr' => 4616,
                'rtk_ag' => 11639,
                'state' => 'Johor',
            ),
            449 => 
            array (
                'date' => '2021-12-01',
                'pcr' => 1124,
                'rtk_ag' => 5281,
                'state' => 'Kedah',
            ),
            450 => 
            array (
                'date' => '2021-12-01',
                'pcr' => 912,
                'rtk_ag' => 7007,
                'state' => 'Kelantan',
            ),
            451 => 
            array (
                'date' => '2021-12-01',
                'pcr' => 1095,
                'rtk_ag' => 3952,
                'state' => 'Melaka',
            ),
            452 => 
            array (
                'date' => '2021-12-01',
                'pcr' => 919,
                'rtk_ag' => 5570,
                'state' => 'Negeri Sembilan',
            ),
            453 => 
            array (
                'date' => '2021-12-01',
                'pcr' => 736,
                'rtk_ag' => 4157,
                'state' => 'Pahang',
            ),
            454 => 
            array (
                'date' => '2021-12-01',
                'pcr' => 1216,
                'rtk_ag' => 5178,
                'state' => 'Perak',
            ),
            455 => 
            array (
                'date' => '2021-12-01',
                'pcr' => 44,
                'rtk_ag' => 308,
                'state' => 'Perlis',
            ),
            456 => 
            array (
                'date' => '2021-12-01',
                'pcr' => 1668,
                'rtk_ag' => 8268,
                'state' => 'Pulau Pinang',
            ),
            457 => 
            array (
                'date' => '2021-12-01',
                'pcr' => 1836,
                'rtk_ag' => 3968,
                'state' => 'Sabah',
            ),
            458 => 
            array (
                'date' => '2021-12-01',
                'pcr' => 969,
                'rtk_ag' => 2780,
                'state' => 'Sarawak',
            ),
            459 => 
            array (
                'date' => '2021-12-01',
                'pcr' => 13546,
                'rtk_ag' => 29146,
                'state' => 'Selangor',
            ),
            460 => 
            array (
                'date' => '2021-12-01',
                'pcr' => 792,
                'rtk_ag' => 3828,
                'state' => 'Terengganu',
            ),
            461 => 
            array (
                'date' => '2021-12-01',
                'pcr' => 5954,
                'rtk_ag' => 5805,
                'state' => 'W.P. Kuala Lumpur',
            ),
            462 => 
            array (
                'date' => '2021-12-01',
                'pcr' => 151,
                'rtk_ag' => 490,
                'state' => 'W.P. Labuan',
            ),
            463 => 
            array (
                'date' => '2021-12-01',
                'pcr' => 209,
                'rtk_ag' => 339,
                'state' => 'W.P. Putrajaya',
            ),
            464 => 
            array (
                'date' => '2021-12-02',
                'pcr' => 3546,
                'rtk_ag' => 9965,
                'state' => 'Johor',
            ),
            465 => 
            array (
                'date' => '2021-12-02',
                'pcr' => 1341,
                'rtk_ag' => 4304,
                'state' => 'Kedah',
            ),
            466 => 
            array (
                'date' => '2021-12-02',
                'pcr' => 855,
                'rtk_ag' => 5698,
                'state' => 'Kelantan',
            ),
            467 => 
            array (
                'date' => '2021-12-02',
                'pcr' => 1111,
                'rtk_ag' => 2643,
                'state' => 'Melaka',
            ),
            468 => 
            array (
                'date' => '2021-12-02',
                'pcr' => 866,
                'rtk_ag' => 4429,
                'state' => 'Negeri Sembilan',
            ),
            469 => 
            array (
                'date' => '2021-12-02',
                'pcr' => 868,
                'rtk_ag' => 3326,
                'state' => 'Pahang',
            ),
            470 => 
            array (
                'date' => '2021-12-02',
                'pcr' => 1237,
                'rtk_ag' => 5288,
                'state' => 'Perak',
            ),
            471 => 
            array (
                'date' => '2021-12-02',
                'pcr' => 40,
                'rtk_ag' => 305,
                'state' => 'Perlis',
            ),
            472 => 
            array (
                'date' => '2021-12-02',
                'pcr' => 1968,
                'rtk_ag' => 8041,
                'state' => 'Pulau Pinang',
            ),
            473 => 
            array (
                'date' => '2021-12-02',
                'pcr' => 1887,
                'rtk_ag' => 3684,
                'state' => 'Sabah',
            ),
            474 => 
            array (
                'date' => '2021-12-02',
                'pcr' => 1015,
                'rtk_ag' => 2619,
                'state' => 'Sarawak',
            ),
            475 => 
            array (
                'date' => '2021-12-02',
                'pcr' => 12623,
                'rtk_ag' => 24308,
                'state' => 'Selangor',
            ),
            476 => 
            array (
                'date' => '2021-12-02',
                'pcr' => 516,
                'rtk_ag' => 2796,
                'state' => 'Terengganu',
            ),
            477 => 
            array (
                'date' => '2021-12-02',
                'pcr' => 4845,
                'rtk_ag' => 5660,
                'state' => 'W.P. Kuala Lumpur',
            ),
            478 => 
            array (
                'date' => '2021-12-02',
                'pcr' => 109,
                'rtk_ag' => 640,
                'state' => 'W.P. Labuan',
            ),
            479 => 
            array (
                'date' => '2021-12-02',
                'pcr' => 138,
                'rtk_ag' => 366,
                'state' => 'W.P. Putrajaya',
            ),
            480 => 
            array (
                'date' => '2021-12-03',
                'pcr' => 4276,
                'rtk_ag' => 10584,
                'state' => 'Johor',
            ),
            481 => 
            array (
                'date' => '2021-12-03',
                'pcr' => 1252,
                'rtk_ag' => 3997,
                'state' => 'Kedah',
            ),
            482 => 
            array (
                'date' => '2021-12-03',
                'pcr' => 738,
                'rtk_ag' => 2086,
                'state' => 'Kelantan',
            ),
            483 => 
            array (
                'date' => '2021-12-03',
                'pcr' => 887,
                'rtk_ag' => 2523,
                'state' => 'Melaka',
            ),
            484 => 
            array (
                'date' => '2021-12-03',
                'pcr' => 1268,
                'rtk_ag' => 3181,
                'state' => 'Negeri Sembilan',
            ),
            485 => 
            array (
                'date' => '2021-12-03',
                'pcr' => 677,
                'rtk_ag' => 3281,
                'state' => 'Pahang',
            ),
            486 => 
            array (
                'date' => '2021-12-03',
                'pcr' => 1064,
                'rtk_ag' => 5042,
                'state' => 'Perak',
            ),
            487 => 
            array (
                'date' => '2021-12-03',
                'pcr' => 29,
                'rtk_ag' => 299,
                'state' => 'Perlis',
            ),
            488 => 
            array (
                'date' => '2021-12-03',
                'pcr' => 1466,
                'rtk_ag' => 7473,
                'state' => 'Pulau Pinang',
            ),
            489 => 
            array (
                'date' => '2021-12-03',
                'pcr' => 1538,
                'rtk_ag' => 3520,
                'state' => 'Sabah',
            ),
            490 => 
            array (
                'date' => '2021-12-03',
                'pcr' => 962,
                'rtk_ag' => 2840,
                'state' => 'Sarawak',
            ),
            491 => 
            array (
                'date' => '2021-12-03',
                'pcr' => 11866,
                'rtk_ag' => 22255,
                'state' => 'Selangor',
            ),
            492 => 
            array (
                'date' => '2021-12-03',
                'pcr' => 393,
                'rtk_ag' => 1821,
                'state' => 'Terengganu',
            ),
            493 => 
            array (
                'date' => '2021-12-03',
                'pcr' => 5209,
                'rtk_ag' => 4230,
                'state' => 'W.P. Kuala Lumpur',
            ),
            494 => 
            array (
                'date' => '2021-12-03',
                'pcr' => 92,
                'rtk_ag' => 393,
                'state' => 'W.P. Labuan',
            ),
            495 => 
            array (
                'date' => '2021-12-03',
                'pcr' => 162,
                'rtk_ag' => 310,
                'state' => 'W.P. Putrajaya',
            ),
            496 => 
            array (
                'date' => '2021-12-04',
                'pcr' => 2642,
                'rtk_ag' => 8485,
                'state' => 'Johor',
            ),
            497 => 
            array (
                'date' => '2021-12-04',
                'pcr' => 884,
                'rtk_ag' => 3199,
                'state' => 'Kedah',
            ),
            498 => 
            array (
                'date' => '2021-12-04',
                'pcr' => 694,
                'rtk_ag' => 2579,
                'state' => 'Kelantan',
            ),
            499 => 
            array (
                'date' => '2021-12-04',
                'pcr' => 1073,
                'rtk_ag' => 1661,
                'state' => 'Melaka',
            ),
        ));
        \DB::table('test_states')->insert(array (
            0 => 
            array (
                'date' => '2021-12-04',
                'pcr' => 916,
                'rtk_ag' => 5797,
                'state' => 'Negeri Sembilan',
            ),
            1 => 
            array (
                'date' => '2021-12-04',
                'pcr' => 575,
                'rtk_ag' => 2174,
                'state' => 'Pahang',
            ),
            2 => 
            array (
                'date' => '2021-12-04',
                'pcr' => 1211,
                'rtk_ag' => 3422,
                'state' => 'Perak',
            ),
            3 => 
            array (
                'date' => '2021-12-04',
                'pcr' => 43,
                'rtk_ag' => 204,
                'state' => 'Perlis',
            ),
            4 => 
            array (
                'date' => '2021-12-04',
                'pcr' => 2014,
                'rtk_ag' => 4778,
                'state' => 'Pulau Pinang',
            ),
            5 => 
            array (
                'date' => '2021-12-04',
                'pcr' => 1367,
                'rtk_ag' => 2561,
                'state' => 'Sabah',
            ),
            6 => 
            array (
                'date' => '2021-12-04',
                'pcr' => 1070,
                'rtk_ag' => 1664,
                'state' => 'Sarawak',
            ),
            7 => 
            array (
                'date' => '2021-12-04',
                'pcr' => 13679,
                'rtk_ag' => 15246,
                'state' => 'Selangor',
            ),
            8 => 
            array (
                'date' => '2021-12-04',
                'pcr' => 538,
                'rtk_ag' => 3176,
                'state' => 'Terengganu',
            ),
            9 => 
            array (
                'date' => '2021-12-04',
                'pcr' => 3625,
                'rtk_ag' => 3633,
                'state' => 'W.P. Kuala Lumpur',
            ),
            10 => 
            array (
                'date' => '2021-12-04',
                'pcr' => 110,
                'rtk_ag' => 403,
                'state' => 'W.P. Labuan',
            ),
            11 => 
            array (
                'date' => '2021-12-04',
                'pcr' => 246,
                'rtk_ag' => 340,
                'state' => 'W.P. Putrajaya',
            ),
            12 => 
            array (
                'date' => '2021-12-05',
                'pcr' => 3110,
                'rtk_ag' => 11038,
                'state' => 'Johor',
            ),
            13 => 
            array (
                'date' => '2021-12-05',
                'pcr' => 1104,
                'rtk_ag' => 3865,
                'state' => 'Kedah',
            ),
            14 => 
            array (
                'date' => '2021-12-05',
                'pcr' => 746,
                'rtk_ag' => 6383,
                'state' => 'Kelantan',
            ),
            15 => 
            array (
                'date' => '2021-12-05',
                'pcr' => 868,
                'rtk_ag' => 2017,
                'state' => 'Melaka',
            ),
            16 => 
            array (
                'date' => '2021-12-05',
                'pcr' => 899,
                'rtk_ag' => 4426,
                'state' => 'Negeri Sembilan',
            ),
            17 => 
            array (
                'date' => '2021-12-05',
                'pcr' => 492,
                'rtk_ag' => 2813,
                'state' => 'Pahang',
            ),
            18 => 
            array (
                'date' => '2021-12-05',
                'pcr' => 993,
                'rtk_ag' => 3367,
                'state' => 'Perak',
            ),
            19 => 
            array (
                'date' => '2021-12-05',
                'pcr' => 44,
                'rtk_ag' => 209,
                'state' => 'Perlis',
            ),
            20 => 
            array (
                'date' => '2021-12-05',
                'pcr' => 1170,
                'rtk_ag' => 5761,
                'state' => 'Pulau Pinang',
            ),
            21 => 
            array (
                'date' => '2021-12-05',
                'pcr' => 1337,
                'rtk_ag' => 2686,
                'state' => 'Sabah',
            ),
            22 => 
            array (
                'date' => '2021-12-05',
                'pcr' => 843,
                'rtk_ag' => 1771,
                'state' => 'Sarawak',
            ),
            23 => 
            array (
                'date' => '2021-12-05',
                'pcr' => 9499,
                'rtk_ag' => 17151,
                'state' => 'Selangor',
            ),
            24 => 
            array (
                'date' => '2021-12-05',
                'pcr' => 591,
                'rtk_ag' => 4165,
                'state' => 'Terengganu',
            ),
            25 => 
            array (
                'date' => '2021-12-05',
                'pcr' => 2545,
                'rtk_ag' => 4510,
                'state' => 'W.P. Kuala Lumpur',
            ),
            26 => 
            array (
                'date' => '2021-12-05',
                'pcr' => 45,
                'rtk_ag' => 298,
                'state' => 'W.P. Labuan',
            ),
            27 => 
            array (
                'date' => '2021-12-05',
                'pcr' => 142,
                'rtk_ag' => 215,
                'state' => 'W.P. Putrajaya',
            ),
            28 => 
            array (
                'date' => '2021-12-06',
                'pcr' => 4200,
                'rtk_ag' => 18804,
                'state' => 'Johor',
            ),
            29 => 
            array (
                'date' => '2021-12-06',
                'pcr' => 1338,
                'rtk_ag' => 5857,
                'state' => 'Kedah',
            ),
            30 => 
            array (
                'date' => '2021-12-06',
                'pcr' => 828,
                'rtk_ag' => 8236,
                'state' => 'Kelantan',
            ),
            31 => 
            array (
                'date' => '2021-12-06',
                'pcr' => 574,
                'rtk_ag' => 6244,
                'state' => 'Melaka',
            ),
            32 => 
            array (
                'date' => '2021-12-06',
                'pcr' => 574,
                'rtk_ag' => 5960,
                'state' => 'Negeri Sembilan',
            ),
            33 => 
            array (
                'date' => '2021-12-06',
                'pcr' => 331,
                'rtk_ag' => 5461,
                'state' => 'Pahang',
            ),
            34 => 
            array (
                'date' => '2021-12-06',
                'pcr' => 771,
                'rtk_ag' => 8263,
                'state' => 'Perak',
            ),
            35 => 
            array (
                'date' => '2021-12-06',
                'pcr' => 43,
                'rtk_ag' => 427,
                'state' => 'Perlis',
            ),
            36 => 
            array (
                'date' => '2021-12-06',
                'pcr' => 1388,
                'rtk_ag' => 12729,
                'state' => 'Pulau Pinang',
            ),
            37 => 
            array (
                'date' => '2021-12-06',
                'pcr' => 1808,
                'rtk_ag' => 4482,
                'state' => 'Sabah',
            ),
            38 => 
            array (
                'date' => '2021-12-06',
                'pcr' => 1152,
                'rtk_ag' => 3500,
                'state' => 'Sarawak',
            ),
            39 => 
            array (
                'date' => '2021-12-06',
                'pcr' => 12339,
                'rtk_ag' => 36498,
                'state' => 'Selangor',
            ),
            40 => 
            array (
                'date' => '2021-12-06',
                'pcr' => 642,
                'rtk_ag' => 3732,
                'state' => 'Terengganu',
            ),
            41 => 
            array (
                'date' => '2021-12-06',
                'pcr' => 4400,
                'rtk_ag' => 8309,
                'state' => 'W.P. Kuala Lumpur',
            ),
            42 => 
            array (
                'date' => '2021-12-06',
                'pcr' => 56,
                'rtk_ag' => 1047,
                'state' => 'W.P. Labuan',
            ),
            43 => 
            array (
                'date' => '2021-12-06',
                'pcr' => 218,
                'rtk_ag' => 496,
                'state' => 'W.P. Putrajaya',
            ),
            44 => 
            array (
                'date' => '2021-12-07',
                'pcr' => 5033,
                'rtk_ag' => 16240,
                'state' => 'Johor',
            ),
            45 => 
            array (
                'date' => '2021-12-07',
                'pcr' => 1484,
                'rtk_ag' => 5226,
                'state' => 'Kedah',
            ),
            46 => 
            array (
                'date' => '2021-12-07',
                'pcr' => 770,
                'rtk_ag' => 8203,
                'state' => 'Kelantan',
            ),
            47 => 
            array (
                'date' => '2021-12-07',
                'pcr' => 1490,
                'rtk_ag' => 3266,
                'state' => 'Melaka',
            ),
            48 => 
            array (
                'date' => '2021-12-07',
                'pcr' => 1729,
                'rtk_ag' => 6512,
                'state' => 'Negeri Sembilan',
            ),
            49 => 
            array (
                'date' => '2021-12-07',
                'pcr' => 1064,
                'rtk_ag' => 4234,
                'state' => 'Pahang',
            ),
            50 => 
            array (
                'date' => '2021-12-07',
                'pcr' => 1587,
                'rtk_ag' => 5994,
                'state' => 'Perak',
            ),
            51 => 
            array (
                'date' => '2021-12-07',
                'pcr' => 103,
                'rtk_ag' => 312,
                'state' => 'Perlis',
            ),
            52 => 
            array (
                'date' => '2021-12-07',
                'pcr' => 2013,
                'rtk_ag' => 9040,
                'state' => 'Pulau Pinang',
            ),
            53 => 
            array (
                'date' => '2021-12-07',
                'pcr' => 1748,
                'rtk_ag' => 3783,
                'state' => 'Sabah',
            ),
            54 => 
            array (
                'date' => '2021-12-07',
                'pcr' => 1117,
                'rtk_ag' => 2796,
                'state' => 'Sarawak',
            ),
            55 => 
            array (
                'date' => '2021-12-07',
                'pcr' => 16294,
                'rtk_ag' => 30196,
                'state' => 'Selangor',
            ),
            56 => 
            array (
                'date' => '2021-12-07',
                'pcr' => 657,
                'rtk_ag' => 3161,
                'state' => 'Terengganu',
            ),
            57 => 
            array (
                'date' => '2021-12-07',
                'pcr' => 7096,
                'rtk_ag' => 7828,
                'state' => 'W.P. Kuala Lumpur',
            ),
            58 => 
            array (
                'date' => '2021-12-07',
                'pcr' => 167,
                'rtk_ag' => 470,
                'state' => 'W.P. Labuan',
            ),
            59 => 
            array (
                'date' => '2021-12-07',
                'pcr' => 179,
                'rtk_ag' => 430,
                'state' => 'W.P. Putrajaya',
            ),
            60 => 
            array (
                'date' => '2021-12-08',
                'pcr' => 4530,
                'rtk_ag' => 14155,
                'state' => 'Johor',
            ),
            61 => 
            array (
                'date' => '2021-12-08',
                'pcr' => 1064,
                'rtk_ag' => 5038,
                'state' => 'Kedah',
            ),
            62 => 
            array (
                'date' => '2021-12-08',
                'pcr' => 801,
                'rtk_ag' => 8003,
                'state' => 'Kelantan',
            ),
            63 => 
            array (
                'date' => '2021-12-08',
                'pcr' => 1088,
                'rtk_ag' => 4414,
                'state' => 'Melaka',
            ),
            64 => 
            array (
                'date' => '2021-12-08',
                'pcr' => 858,
                'rtk_ag' => 5764,
                'state' => 'Negeri Sembilan',
            ),
            65 => 
            array (
                'date' => '2021-12-08',
                'pcr' => 871,
                'rtk_ag' => 4631,
                'state' => 'Pahang',
            ),
            66 => 
            array (
                'date' => '2021-12-08',
                'pcr' => 1270,
                'rtk_ag' => 5485,
                'state' => 'Perak',
            ),
            67 => 
            array (
                'date' => '2021-12-08',
                'pcr' => 61,
                'rtk_ag' => 298,
                'state' => 'Perlis',
            ),
            68 => 
            array (
                'date' => '2021-12-08',
                'pcr' => 2040,
                'rtk_ag' => 8870,
                'state' => 'Pulau Pinang',
            ),
            69 => 
            array (
                'date' => '2021-12-08',
                'pcr' => 1762,
                'rtk_ag' => 3895,
                'state' => 'Sabah',
            ),
            70 => 
            array (
                'date' => '2021-12-08',
                'pcr' => 1277,
                'rtk_ag' => 2591,
                'state' => 'Sarawak',
            ),
            71 => 
            array (
                'date' => '2021-12-08',
                'pcr' => 16116,
                'rtk_ag' => 29972,
                'state' => 'Selangor',
            ),
            72 => 
            array (
                'date' => '2021-12-08',
                'pcr' => 678,
                'rtk_ag' => 3540,
                'state' => 'Terengganu',
            ),
            73 => 
            array (
                'date' => '2021-12-08',
                'pcr' => 6618,
                'rtk_ag' => 9272,
                'state' => 'W.P. Kuala Lumpur',
            ),
            74 => 
            array (
                'date' => '2021-12-08',
                'pcr' => 105,
                'rtk_ag' => 613,
                'state' => 'W.P. Labuan',
            ),
            75 => 
            array (
                'date' => '2021-12-08',
                'pcr' => 345,
                'rtk_ag' => 353,
                'state' => 'W.P. Putrajaya',
            ),
            76 => 
            array (
                'date' => '2021-12-09',
                'pcr' => 3321,
                'rtk_ag' => 12356,
                'state' => 'Johor',
            ),
            77 => 
            array (
                'date' => '2021-12-09',
                'pcr' => 1354,
                'rtk_ag' => 3677,
                'state' => 'Kedah',
            ),
            78 => 
            array (
                'date' => '2021-12-09',
                'pcr' => 836,
                'rtk_ag' => 5626,
                'state' => 'Kelantan',
            ),
            79 => 
            array (
                'date' => '2021-12-09',
                'pcr' => 1164,
                'rtk_ag' => 3413,
                'state' => 'Melaka',
            ),
            80 => 
            array (
                'date' => '2021-12-09',
                'pcr' => 1184,
                'rtk_ag' => 5961,
                'state' => 'Negeri Sembilan',
            ),
            81 => 
            array (
                'date' => '2021-12-09',
                'pcr' => 580,
                'rtk_ag' => 3644,
                'state' => 'Pahang',
            ),
            82 => 
            array (
                'date' => '2021-12-09',
                'pcr' => 1594,
                'rtk_ag' => 6767,
                'state' => 'Perak',
            ),
            83 => 
            array (
                'date' => '2021-12-09',
                'pcr' => 34,
                'rtk_ag' => 273,
                'state' => 'Perlis',
            ),
            84 => 
            array (
                'date' => '2021-12-09',
                'pcr' => 2091,
                'rtk_ag' => 7973,
                'state' => 'Pulau Pinang',
            ),
            85 => 
            array (
                'date' => '2021-12-09',
                'pcr' => 1596,
                'rtk_ag' => 4627,
                'state' => 'Sabah',
            ),
            86 => 
            array (
                'date' => '2021-12-09',
                'pcr' => 980,
                'rtk_ag' => 2601,
                'state' => 'Sarawak',
            ),
            87 => 
            array (
                'date' => '2021-12-09',
                'pcr' => 13189,
                'rtk_ag' => 24314,
                'state' => 'Selangor',
            ),
            88 => 
            array (
                'date' => '2021-12-09',
                'pcr' => 591,
                'rtk_ag' => 3234,
                'state' => 'Terengganu',
            ),
            89 => 
            array (
                'date' => '2021-12-09',
                'pcr' => 3866,
                'rtk_ag' => 7768,
                'state' => 'W.P. Kuala Lumpur',
            ),
            90 => 
            array (
                'date' => '2021-12-09',
                'pcr' => 76,
                'rtk_ag' => 405,
                'state' => 'W.P. Labuan',
            ),
            91 => 
            array (
                'date' => '2021-12-09',
                'pcr' => 190,
                'rtk_ag' => 358,
                'state' => 'W.P. Putrajaya',
            ),
            92 => 
            array (
                'date' => '2021-12-10',
                'pcr' => 3508,
                'rtk_ag' => 13043,
                'state' => 'Johor',
            ),
            93 => 
            array (
                'date' => '2021-12-10',
                'pcr' => 1162,
                'rtk_ag' => 4495,
                'state' => 'Kedah',
            ),
            94 => 
            array (
                'date' => '2021-12-10',
                'pcr' => 803,
                'rtk_ag' => 2112,
                'state' => 'Kelantan',
            ),
            95 => 
            array (
                'date' => '2021-12-10',
                'pcr' => 1109,
                'rtk_ag' => 2907,
                'state' => 'Melaka',
            ),
            96 => 
            array (
                'date' => '2021-12-10',
                'pcr' => 1339,
                'rtk_ag' => 3641,
                'state' => 'Negeri Sembilan',
            ),
            97 => 
            array (
                'date' => '2021-12-10',
                'pcr' => 709,
                'rtk_ag' => 3332,
                'state' => 'Pahang',
            ),
            98 => 
            array (
                'date' => '2021-12-10',
                'pcr' => 1341,
                'rtk_ag' => 6234,
                'state' => 'Perak',
            ),
            99 => 
            array (
                'date' => '2021-12-10',
                'pcr' => 27,
                'rtk_ag' => 267,
                'state' => 'Perlis',
            ),
            100 => 
            array (
                'date' => '2021-12-10',
                'pcr' => 1858,
                'rtk_ag' => 6423,
                'state' => 'Pulau Pinang',
            ),
            101 => 
            array (
                'date' => '2021-12-10',
                'pcr' => 1362,
                'rtk_ag' => 3123,
                'state' => 'Sabah',
            ),
            102 => 
            array (
                'date' => '2021-12-10',
                'pcr' => 979,
                'rtk_ag' => 2472,
                'state' => 'Sarawak',
            ),
            103 => 
            array (
                'date' => '2021-12-10',
                'pcr' => 14367,
                'rtk_ag' => 23234,
                'state' => 'Selangor',
            ),
            104 => 
            array (
                'date' => '2021-12-10',
                'pcr' => 382,
                'rtk_ag' => 1704,
                'state' => 'Terengganu',
            ),
            105 => 
            array (
                'date' => '2021-12-10',
                'pcr' => 5808,
                'rtk_ag' => 6023,
                'state' => 'W.P. Kuala Lumpur',
            ),
            106 => 
            array (
                'date' => '2021-12-10',
                'pcr' => 68,
                'rtk_ag' => 483,
                'state' => 'W.P. Labuan',
            ),
            107 => 
            array (
                'date' => '2021-12-10',
                'pcr' => 200,
                'rtk_ag' => 289,
                'state' => 'W.P. Putrajaya',
            ),
            108 => 
            array (
                'date' => '2021-12-11',
                'pcr' => 2761,
                'rtk_ag' => 10718,
                'state' => 'Johor',
            ),
            109 => 
            array (
                'date' => '2021-12-11',
                'pcr' => 765,
                'rtk_ag' => 3637,
                'state' => 'Kedah',
            ),
            110 => 
            array (
                'date' => '2021-12-11',
                'pcr' => 401,
                'rtk_ag' => 2277,
                'state' => 'Kelantan',
            ),
            111 => 
            array (
                'date' => '2021-12-11',
                'pcr' => 833,
                'rtk_ag' => 1782,
                'state' => 'Melaka',
            ),
            112 => 
            array (
                'date' => '2021-12-11',
                'pcr' => 1046,
                'rtk_ag' => 2243,
                'state' => 'Negeri Sembilan',
            ),
            113 => 
            array (
                'date' => '2021-12-11',
                'pcr' => 666,
                'rtk_ag' => 2336,
                'state' => 'Pahang',
            ),
            114 => 
            array (
                'date' => '2021-12-11',
                'pcr' => 952,
                'rtk_ag' => 4923,
                'state' => 'Perak',
            ),
            115 => 
            array (
                'date' => '2021-12-11',
                'pcr' => 35,
                'rtk_ag' => 168,
                'state' => 'Perlis',
            ),
            116 => 
            array (
                'date' => '2021-12-11',
                'pcr' => 2106,
                'rtk_ag' => 4863,
                'state' => 'Pulau Pinang',
            ),
            117 => 
            array (
                'date' => '2021-12-11',
                'pcr' => 1440,
                'rtk_ag' => 2062,
                'state' => 'Sabah',
            ),
            118 => 
            array (
                'date' => '2021-12-11',
                'pcr' => 990,
                'rtk_ag' => 1591,
                'state' => 'Sarawak',
            ),
            119 => 
            array (
                'date' => '2021-12-11',
                'pcr' => 13867,
                'rtk_ag' => 16164,
                'state' => 'Selangor',
            ),
            120 => 
            array (
                'date' => '2021-12-11',
                'pcr' => 676,
                'rtk_ag' => 2562,
                'state' => 'Terengganu',
            ),
            121 => 
            array (
                'date' => '2021-12-11',
                'pcr' => 3851,
                'rtk_ag' => 4948,
                'state' => 'W.P. Kuala Lumpur',
            ),
            122 => 
            array (
                'date' => '2021-12-11',
                'pcr' => 95,
                'rtk_ag' => 324,
                'state' => 'W.P. Labuan',
            ),
            123 => 
            array (
                'date' => '2021-12-11',
                'pcr' => 201,
                'rtk_ag' => 185,
                'state' => 'W.P. Putrajaya',
            ),
            124 => 
            array (
                'date' => '2021-12-12',
                'pcr' => 3270,
                'rtk_ag' => 15248,
                'state' => 'Johor',
            ),
            125 => 
            array (
                'date' => '2021-12-12',
                'pcr' => 762,
                'rtk_ag' => 5800,
                'state' => 'Kedah',
            ),
            126 => 
            array (
                'date' => '2021-12-12',
                'pcr' => 712,
                'rtk_ag' => 6865,
                'state' => 'Kelantan',
            ),
            127 => 
            array (
                'date' => '2021-12-12',
                'pcr' => 760,
                'rtk_ag' => 1551,
                'state' => 'Melaka',
            ),
            128 => 
            array (
                'date' => '2021-12-12',
                'pcr' => 876,
                'rtk_ag' => 1966,
                'state' => 'Negeri Sembilan',
            ),
            129 => 
            array (
                'date' => '2021-12-12',
                'pcr' => 454,
                'rtk_ag' => 3174,
                'state' => 'Pahang',
            ),
            130 => 
            array (
                'date' => '2021-12-12',
                'pcr' => 956,
                'rtk_ag' => 5008,
                'state' => 'Perak',
            ),
            131 => 
            array (
                'date' => '2021-12-12',
                'pcr' => 19,
                'rtk_ag' => 217,
                'state' => 'Perlis',
            ),
            132 => 
            array (
                'date' => '2021-12-12',
                'pcr' => 1011,
                'rtk_ag' => 5860,
                'state' => 'Pulau Pinang',
            ),
            133 => 
            array (
                'date' => '2021-12-12',
                'pcr' => 1152,
                'rtk_ag' => 2263,
                'state' => 'Sabah',
            ),
            134 => 
            array (
                'date' => '2021-12-12',
                'pcr' => 901,
                'rtk_ag' => 1792,
                'state' => 'Sarawak',
            ),
            135 => 
            array (
                'date' => '2021-12-12',
                'pcr' => 10775,
                'rtk_ag' => 20588,
                'state' => 'Selangor',
            ),
            136 => 
            array (
                'date' => '2021-12-12',
                'pcr' => 607,
                'rtk_ag' => 3897,
                'state' => 'Terengganu',
            ),
            137 => 
            array (
                'date' => '2021-12-12',
                'pcr' => 3044,
                'rtk_ag' => 4798,
                'state' => 'W.P. Kuala Lumpur',
            ),
            138 => 
            array (
                'date' => '2021-12-12',
                'pcr' => 54,
                'rtk_ag' => 353,
                'state' => 'W.P. Labuan',
            ),
            139 => 
            array (
                'date' => '2021-12-12',
                'pcr' => 130,
                'rtk_ag' => 196,
                'state' => 'W.P. Putrajaya',
            ),
            140 => 
            array (
                'date' => '2021-12-13',
                'pcr' => 3717,
                'rtk_ag' => 21417,
                'state' => 'Johor',
            ),
            141 => 
            array (
                'date' => '2021-12-13',
                'pcr' => 961,
                'rtk_ag' => 6194,
                'state' => 'Kedah',
            ),
            142 => 
            array (
                'date' => '2021-12-13',
                'pcr' => 906,
                'rtk_ag' => 7464,
                'state' => 'Kelantan',
            ),
            143 => 
            array (
                'date' => '2021-12-13',
                'pcr' => 631,
                'rtk_ag' => 5074,
                'state' => 'Melaka',
            ),
            144 => 
            array (
                'date' => '2021-12-13',
                'pcr' => 544,
                'rtk_ag' => 4879,
                'state' => 'Negeri Sembilan',
            ),
            145 => 
            array (
                'date' => '2021-12-13',
                'pcr' => 573,
                'rtk_ag' => 5268,
                'state' => 'Pahang',
            ),
            146 => 
            array (
                'date' => '2021-12-13',
                'pcr' => 978,
                'rtk_ag' => 8219,
                'state' => 'Perak',
            ),
            147 => 
            array (
                'date' => '2021-12-13',
                'pcr' => 26,
                'rtk_ag' => 382,
                'state' => 'Perlis',
            ),
            148 => 
            array (
                'date' => '2021-12-13',
                'pcr' => 1622,
                'rtk_ag' => 10501,
                'state' => 'Pulau Pinang',
            ),
            149 => 
            array (
                'date' => '2021-12-13',
                'pcr' => 1212,
                'rtk_ag' => 3805,
                'state' => 'Sabah',
            ),
            150 => 
            array (
                'date' => '2021-12-13',
                'pcr' => 1374,
                'rtk_ag' => 3100,
                'state' => 'Sarawak',
            ),
            151 => 
            array (
                'date' => '2021-12-13',
                'pcr' => 13915,
                'rtk_ag' => 36756,
                'state' => 'Selangor',
            ),
            152 => 
            array (
                'date' => '2021-12-13',
                'pcr' => 760,
                'rtk_ag' => 3538,
                'state' => 'Terengganu',
            ),
            153 => 
            array (
                'date' => '2021-12-13',
                'pcr' => 4959,
                'rtk_ag' => 10072,
                'state' => 'W.P. Kuala Lumpur',
            ),
            154 => 
            array (
                'date' => '2021-12-13',
                'pcr' => 118,
                'rtk_ag' => 706,
                'state' => 'W.P. Labuan',
            ),
            155 => 
            array (
                'date' => '2021-12-13',
                'pcr' => 243,
                'rtk_ag' => 447,
                'state' => 'W.P. Putrajaya',
            ),
            156 => 
            array (
                'date' => '2021-12-14',
                'pcr' => 4290,
                'rtk_ag' => 16958,
                'state' => 'Johor',
            ),
            157 => 
            array (
                'date' => '2021-12-14',
                'pcr' => 1183,
                'rtk_ag' => 5385,
                'state' => 'Kedah',
            ),
            158 => 
            array (
                'date' => '2021-12-14',
                'pcr' => 862,
                'rtk_ag' => 6960,
                'state' => 'Kelantan',
            ),
            159 => 
            array (
                'date' => '2021-12-14',
                'pcr' => 1195,
                'rtk_ag' => 3271,
                'state' => 'Melaka',
            ),
            160 => 
            array (
                'date' => '2021-12-14',
                'pcr' => 1124,
                'rtk_ag' => 3887,
                'state' => 'Negeri Sembilan',
            ),
            161 => 
            array (
                'date' => '2021-12-14',
                'pcr' => 1099,
                'rtk_ag' => 3932,
                'state' => 'Pahang',
            ),
            162 => 
            array (
                'date' => '2021-12-14',
                'pcr' => 1467,
                'rtk_ag' => 6447,
                'state' => 'Perak',
            ),
            163 => 
            array (
                'date' => '2021-12-14',
                'pcr' => 32,
                'rtk_ag' => 251,
                'state' => 'Perlis',
            ),
            164 => 
            array (
                'date' => '2021-12-14',
                'pcr' => 1978,
                'rtk_ag' => 7999,
                'state' => 'Pulau Pinang',
            ),
            165 => 
            array (
                'date' => '2021-12-14',
                'pcr' => 1658,
                'rtk_ag' => 3082,
                'state' => 'Sabah',
            ),
            166 => 
            array (
                'date' => '2021-12-14',
                'pcr' => 1203,
                'rtk_ag' => 2346,
                'state' => 'Sarawak',
            ),
            167 => 
            array (
                'date' => '2021-12-14',
                'pcr' => 15858,
                'rtk_ag' => 27363,
                'state' => 'Selangor',
            ),
            168 => 
            array (
                'date' => '2021-12-14',
                'pcr' => 523,
                'rtk_ag' => 2641,
                'state' => 'Terengganu',
            ),
            169 => 
            array (
                'date' => '2021-12-14',
                'pcr' => 6790,
                'rtk_ag' => 6500,
                'state' => 'W.P. Kuala Lumpur',
            ),
            170 => 
            array (
                'date' => '2021-12-14',
                'pcr' => 105,
                'rtk_ag' => 426,
                'state' => 'W.P. Labuan',
            ),
            171 => 
            array (
                'date' => '2021-12-14',
                'pcr' => 224,
                'rtk_ag' => 361,
                'state' => 'W.P. Putrajaya',
            ),
            172 => 
            array (
                'date' => '2021-12-15',
                'pcr' => 4182,
                'rtk_ag' => 21157,
                'state' => 'Johor',
            ),
            173 => 
            array (
                'date' => '2021-12-15',
                'pcr' => 1014,
                'rtk_ag' => 7408,
                'state' => 'Kedah',
            ),
            174 => 
            array (
                'date' => '2021-12-15',
                'pcr' => 964,
                'rtk_ag' => 6089,
                'state' => 'Kelantan',
            ),
            175 => 
            array (
                'date' => '2021-12-15',
                'pcr' => 931,
                'rtk_ag' => 3826,
                'state' => 'Melaka',
            ),
            176 => 
            array (
                'date' => '2021-12-15',
                'pcr' => 950,
                'rtk_ag' => 4769,
                'state' => 'Negeri Sembilan',
            ),
            177 => 
            array (
                'date' => '2021-12-15',
                'pcr' => 827,
                'rtk_ag' => 4560,
                'state' => 'Pahang',
            ),
            178 => 
            array (
                'date' => '2021-12-15',
                'pcr' => 1273,
                'rtk_ag' => 6060,
                'state' => 'Perak',
            ),
            179 => 
            array (
                'date' => '2021-12-15',
                'pcr' => 65,
                'rtk_ag' => 317,
                'state' => 'Perlis',
            ),
            180 => 
            array (
                'date' => '2021-12-15',
                'pcr' => 1999,
                'rtk_ag' => 9181,
                'state' => 'Pulau Pinang',
            ),
            181 => 
            array (
                'date' => '2021-12-15',
                'pcr' => 1720,
                'rtk_ag' => 2984,
                'state' => 'Sabah',
            ),
            182 => 
            array (
                'date' => '2021-12-15',
                'pcr' => 978,
                'rtk_ag' => 2497,
                'state' => 'Sarawak',
            ),
            183 => 
            array (
                'date' => '2021-12-15',
                'pcr' => 15550,
                'rtk_ag' => 30900,
                'state' => 'Selangor',
            ),
            184 => 
            array (
                'date' => '2021-12-15',
                'pcr' => 700,
                'rtk_ag' => 2951,
                'state' => 'Terengganu',
            ),
            185 => 
            array (
                'date' => '2021-12-15',
                'pcr' => 5625,
                'rtk_ag' => 6762,
                'state' => 'W.P. Kuala Lumpur',
            ),
            186 => 
            array (
                'date' => '2021-12-15',
                'pcr' => 112,
                'rtk_ag' => 406,
                'state' => 'W.P. Labuan',
            ),
            187 => 
            array (
                'date' => '2021-12-15',
                'pcr' => 144,
                'rtk_ag' => 360,
                'state' => 'W.P. Putrajaya',
            ),
            188 => 
            array (
                'date' => '2021-12-16',
                'pcr' => 3121,
                'rtk_ag' => 16318,
                'state' => 'Johor',
            ),
            189 => 
            array (
                'date' => '2021-12-16',
                'pcr' => 1075,
                'rtk_ag' => 5545,
                'state' => 'Kedah',
            ),
            190 => 
            array (
                'date' => '2021-12-16',
                'pcr' => 1413,
                'rtk_ag' => 3817,
                'state' => 'Kelantan',
            ),
            191 => 
            array (
                'date' => '2021-12-16',
                'pcr' => 896,
                'rtk_ag' => 3213,
                'state' => 'Melaka',
            ),
            192 => 
            array (
                'date' => '2021-12-16',
                'pcr' => 1209,
                'rtk_ag' => 4441,
                'state' => 'Negeri Sembilan',
            ),
            193 => 
            array (
                'date' => '2021-12-16',
                'pcr' => 635,
                'rtk_ag' => 3812,
                'state' => 'Pahang',
            ),
            194 => 
            array (
                'date' => '2021-12-16',
                'pcr' => 1188,
                'rtk_ag' => 7218,
                'state' => 'Perak',
            ),
            195 => 
            array (
                'date' => '2021-12-16',
                'pcr' => 35,
                'rtk_ag' => 291,
                'state' => 'Perlis',
            ),
            196 => 
            array (
                'date' => '2021-12-16',
                'pcr' => 1938,
                'rtk_ag' => 7744,
                'state' => 'Pulau Pinang',
            ),
            197 => 
            array (
                'date' => '2021-12-16',
                'pcr' => 1201,
                'rtk_ag' => 3171,
                'state' => 'Sabah',
            ),
            198 => 
            array (
                'date' => '2021-12-16',
                'pcr' => 748,
                'rtk_ag' => 2265,
                'state' => 'Sarawak',
            ),
            199 => 
            array (
                'date' => '2021-12-16',
                'pcr' => 14356,
                'rtk_ag' => 24372,
                'state' => 'Selangor',
            ),
            200 => 
            array (
                'date' => '2021-12-16',
                'pcr' => 557,
                'rtk_ag' => 2234,
                'state' => 'Terengganu',
            ),
            201 => 
            array (
                'date' => '2021-12-16',
                'pcr' => 5011,
                'rtk_ag' => 6315,
                'state' => 'W.P. Kuala Lumpur',
            ),
            202 => 
            array (
                'date' => '2021-12-16',
                'pcr' => 80,
                'rtk_ag' => 431,
                'state' => 'W.P. Labuan',
            ),
            203 => 
            array (
                'date' => '2021-12-16',
                'pcr' => 153,
                'rtk_ag' => 394,
                'state' => 'W.P. Putrajaya',
            ),
            204 => 
            array (
                'date' => '2021-12-17',
                'pcr' => 2897,
                'rtk_ag' => 15775,
                'state' => 'Johor',
            ),
            205 => 
            array (
                'date' => '2021-12-17',
                'pcr' => 1010,
                'rtk_ag' => 3448,
                'state' => 'Kedah',
            ),
            206 => 
            array (
                'date' => '2021-12-17',
                'pcr' => 1199,
                'rtk_ag' => 1160,
                'state' => 'Kelantan',
            ),
            207 => 
            array (
                'date' => '2021-12-17',
                'pcr' => 738,
                'rtk_ag' => 2153,
                'state' => 'Melaka',
            ),
            208 => 
            array (
                'date' => '2021-12-17',
                'pcr' => 889,
                'rtk_ag' => 5650,
                'state' => 'Negeri Sembilan',
            ),
            209 => 
            array (
                'date' => '2021-12-17',
                'pcr' => 674,
                'rtk_ag' => 2948,
                'state' => 'Pahang',
            ),
            210 => 
            array (
                'date' => '2021-12-17',
                'pcr' => 1280,
                'rtk_ag' => 5656,
                'state' => 'Perak',
            ),
            211 => 
            array (
                'date' => '2021-12-17',
                'pcr' => 23,
                'rtk_ag' => 256,
                'state' => 'Perlis',
            ),
            212 => 
            array (
                'date' => '2021-12-17',
                'pcr' => 1789,
                'rtk_ag' => 7780,
                'state' => 'Pulau Pinang',
            ),
            213 => 
            array (
                'date' => '2021-12-17',
                'pcr' => 1059,
                'rtk_ag' => 2514,
                'state' => 'Sabah',
            ),
            214 => 
            array (
                'date' => '2021-12-17',
                'pcr' => 974,
                'rtk_ag' => 2159,
                'state' => 'Sarawak',
            ),
            215 => 
            array (
                'date' => '2021-12-17',
                'pcr' => 12696,
                'rtk_ag' => 20799,
                'state' => 'Selangor',
            ),
            216 => 
            array (
                'date' => '2021-12-17',
                'pcr' => 389,
                'rtk_ag' => 1451,
                'state' => 'Terengganu',
            ),
            217 => 
            array (
                'date' => '2021-12-17',
                'pcr' => 5218,
                'rtk_ag' => 5961,
                'state' => 'W.P. Kuala Lumpur',
            ),
            218 => 
            array (
                'date' => '2021-12-17',
                'pcr' => 48,
                'rtk_ag' => 383,
                'state' => 'W.P. Labuan',
            ),
            219 => 
            array (
                'date' => '2021-12-17',
                'pcr' => 194,
                'rtk_ag' => 320,
                'state' => 'W.P. Putrajaya',
            ),
            220 => 
            array (
                'date' => '2021-12-18',
                'pcr' => 3109,
                'rtk_ag' => 11442,
                'state' => 'Johor',
            ),
            221 => 
            array (
                'date' => '2021-12-18',
                'pcr' => 888,
                'rtk_ag' => 2926,
                'state' => 'Kedah',
            ),
            222 => 
            array (
                'date' => '2021-12-18',
                'pcr' => 705,
                'rtk_ag' => 1594,
                'state' => 'Kelantan',
            ),
            223 => 
            array (
                'date' => '2021-12-18',
                'pcr' => 876,
                'rtk_ag' => 1738,
                'state' => 'Melaka',
            ),
            224 => 
            array (
                'date' => '2021-12-18',
                'pcr' => 881,
                'rtk_ag' => 5513,
                'state' => 'Negeri Sembilan',
            ),
            225 => 
            array (
                'date' => '2021-12-18',
                'pcr' => 662,
                'rtk_ag' => 2598,
                'state' => 'Pahang',
            ),
            226 => 
            array (
                'date' => '2021-12-18',
                'pcr' => 856,
                'rtk_ag' => 5677,
                'state' => 'Perak',
            ),
            227 => 
            array (
                'date' => '2021-12-18',
                'pcr' => 21,
                'rtk_ag' => 252,
                'state' => 'Perlis',
            ),
            228 => 
            array (
                'date' => '2021-12-18',
                'pcr' => 1622,
                'rtk_ag' => 5056,
                'state' => 'Pulau Pinang',
            ),
            229 => 
            array (
                'date' => '2021-12-18',
                'pcr' => 1029,
                'rtk_ag' => 2236,
                'state' => 'Sabah',
            ),
            230 => 
            array (
                'date' => '2021-12-18',
                'pcr' => 831,
                'rtk_ag' => 1520,
                'state' => 'Sarawak',
            ),
            231 => 
            array (
                'date' => '2021-12-18',
                'pcr' => 14302,
                'rtk_ag' => 13815,
                'state' => 'Selangor',
            ),
            232 => 
            array (
                'date' => '2021-12-18',
                'pcr' => 512,
                'rtk_ag' => 2875,
                'state' => 'Terengganu',
            ),
            233 => 
            array (
                'date' => '2021-12-18',
                'pcr' => 4214,
                'rtk_ag' => 4880,
                'state' => 'W.P. Kuala Lumpur',
            ),
            234 => 
            array (
                'date' => '2021-12-18',
                'pcr' => 169,
                'rtk_ag' => 314,
                'state' => 'W.P. Labuan',
            ),
            235 => 
            array (
                'date' => '2021-12-18',
                'pcr' => 241,
                'rtk_ag' => 167,
                'state' => 'W.P. Putrajaya',
            ),
            236 => 
            array (
                'date' => '2021-12-19',
                'pcr' => 3120,
                'rtk_ag' => 14888,
                'state' => 'Johor',
            ),
            237 => 
            array (
                'date' => '2021-12-19',
                'pcr' => 1006,
                'rtk_ag' => 3375,
                'state' => 'Kedah',
            ),
            238 => 
            array (
                'date' => '2021-12-19',
                'pcr' => 986,
                'rtk_ag' => 4676,
                'state' => 'Kelantan',
            ),
            239 => 
            array (
                'date' => '2021-12-19',
                'pcr' => 616,
                'rtk_ag' => 2173,
                'state' => 'Melaka',
            ),
            240 => 
            array (
                'date' => '2021-12-19',
                'pcr' => 916,
                'rtk_ag' => 4434,
                'state' => 'Negeri Sembilan',
            ),
            241 => 
            array (
                'date' => '2021-12-19',
                'pcr' => 318,
                'rtk_ag' => 1669,
                'state' => 'Pahang',
            ),
            242 => 
            array (
                'date' => '2021-12-19',
                'pcr' => 883,
                'rtk_ag' => 3595,
                'state' => 'Perak',
            ),
            243 => 
            array (
                'date' => '2021-12-19',
                'pcr' => 35,
                'rtk_ag' => 222,
                'state' => 'Perlis',
            ),
            244 => 
            array (
                'date' => '2021-12-19',
                'pcr' => 1071,
                'rtk_ag' => 5379,
                'state' => 'Pulau Pinang',
            ),
            245 => 
            array (
                'date' => '2021-12-19',
                'pcr' => 878,
                'rtk_ag' => 2036,
                'state' => 'Sabah',
            ),
            246 => 
            array (
                'date' => '2021-12-19',
                'pcr' => 795,
                'rtk_ag' => 2222,
                'state' => 'Sarawak',
            ),
            247 => 
            array (
                'date' => '2021-12-19',
                'pcr' => 9694,
                'rtk_ag' => 14125,
                'state' => 'Selangor',
            ),
            248 => 
            array (
                'date' => '2021-12-19',
                'pcr' => 771,
                'rtk_ag' => 4104,
                'state' => 'Terengganu',
            ),
            249 => 
            array (
                'date' => '2021-12-19',
                'pcr' => 2961,
                'rtk_ag' => 4385,
                'state' => 'W.P. Kuala Lumpur',
            ),
            250 => 
            array (
                'date' => '2021-12-19',
                'pcr' => 34,
                'rtk_ag' => 304,
                'state' => 'W.P. Labuan',
            ),
            251 => 
            array (
                'date' => '2021-12-19',
                'pcr' => 101,
                'rtk_ag' => 162,
                'state' => 'W.P. Putrajaya',
            ),
            252 => 
            array (
                'date' => '2021-12-20',
                'pcr' => 3288,
                'rtk_ag' => 21704,
                'state' => 'Johor',
            ),
            253 => 
            array (
                'date' => '2021-12-20',
                'pcr' => 676,
                'rtk_ag' => 5428,
                'state' => 'Kedah',
            ),
            254 => 
            array (
                'date' => '2021-12-20',
                'pcr' => 1507,
                'rtk_ag' => 5051,
                'state' => 'Kelantan',
            ),
            255 => 
            array (
                'date' => '2021-12-20',
                'pcr' => 570,
                'rtk_ag' => 5979,
                'state' => 'Melaka',
            ),
            256 => 
            array (
                'date' => '2021-12-20',
                'pcr' => 665,
                'rtk_ag' => 5272,
                'state' => 'Negeri Sembilan',
            ),
            257 => 
            array (
                'date' => '2021-12-20',
                'pcr' => 262,
                'rtk_ag' => 3750,
                'state' => 'Pahang',
            ),
            258 => 
            array (
                'date' => '2021-12-20',
                'pcr' => 881,
                'rtk_ag' => 9560,
                'state' => 'Perak',
            ),
            259 => 
            array (
                'date' => '2021-12-20',
                'pcr' => 42,
                'rtk_ag' => 334,
                'state' => 'Perlis',
            ),
            260 => 
            array (
                'date' => '2021-12-20',
                'pcr' => 1450,
                'rtk_ag' => 13144,
                'state' => 'Pulau Pinang',
            ),
            261 => 
            array (
                'date' => '2021-12-20',
                'pcr' => 1298,
                'rtk_ag' => 3455,
                'state' => 'Sabah',
            ),
            262 => 
            array (
                'date' => '2021-12-20',
                'pcr' => 1210,
                'rtk_ag' => 2711,
                'state' => 'Sarawak',
            ),
            263 => 
            array (
                'date' => '2021-12-20',
                'pcr' => 13976,
                'rtk_ag' => 26768,
                'state' => 'Selangor',
            ),
            264 => 
            array (
                'date' => '2021-12-20',
                'pcr' => 462,
                'rtk_ag' => 2635,
                'state' => 'Terengganu',
            ),
            265 => 
            array (
                'date' => '2021-12-20',
                'pcr' => 4441,
                'rtk_ag' => 7509,
                'state' => 'W.P. Kuala Lumpur',
            ),
            266 => 
            array (
                'date' => '2021-12-20',
                'pcr' => 70,
                'rtk_ag' => 525,
                'state' => 'W.P. Labuan',
            ),
            267 => 
            array (
                'date' => '2021-12-20',
                'pcr' => 214,
                'rtk_ag' => 395,
                'state' => 'W.P. Putrajaya',
            ),
            268 => 
            array (
                'date' => '2021-12-21',
                'pcr' => 4740,
                'rtk_ag' => 20659,
                'state' => 'Johor',
            ),
            269 => 
            array (
                'date' => '2021-12-21',
                'pcr' => 903,
                'rtk_ag' => 5810,
                'state' => 'Kedah',
            ),
            270 => 
            array (
                'date' => '2021-12-21',
                'pcr' => 1254,
                'rtk_ag' => 5041,
                'state' => 'Kelantan',
            ),
            271 => 
            array (
                'date' => '2021-12-21',
                'pcr' => 1009,
                'rtk_ag' => 4270,
                'state' => 'Melaka',
            ),
            272 => 
            array (
                'date' => '2021-12-21',
                'pcr' => 1351,
                'rtk_ag' => 7962,
                'state' => 'Negeri Sembilan',
            ),
            273 => 
            array (
                'date' => '2021-12-21',
                'pcr' => 488,
                'rtk_ag' => 2947,
                'state' => 'Pahang',
            ),
            274 => 
            array (
                'date' => '2021-12-21',
                'pcr' => 1385,
                'rtk_ag' => 6391,
                'state' => 'Perak',
            ),
            275 => 
            array (
                'date' => '2021-12-21',
                'pcr' => 70,
                'rtk_ag' => 262,
                'state' => 'Perlis',
            ),
            276 => 
            array (
                'date' => '2021-12-21',
                'pcr' => 1805,
                'rtk_ag' => 8850,
                'state' => 'Pulau Pinang',
            ),
            277 => 
            array (
                'date' => '2021-12-21',
                'pcr' => 1206,
                'rtk_ag' => 2632,
                'state' => 'Sabah',
            ),
            278 => 
            array (
                'date' => '2021-12-21',
                'pcr' => 1112,
                'rtk_ag' => 2446,
                'state' => 'Sarawak',
            ),
            279 => 
            array (
                'date' => '2021-12-21',
                'pcr' => 14661,
                'rtk_ag' => 23305,
                'state' => 'Selangor',
            ),
            280 => 
            array (
                'date' => '2021-12-21',
                'pcr' => 868,
                'rtk_ag' => 2453,
                'state' => 'Terengganu',
            ),
            281 => 
            array (
                'date' => '2021-12-21',
                'pcr' => 6938,
                'rtk_ag' => 6897,
                'state' => 'W.P. Kuala Lumpur',
            ),
            282 => 
            array (
                'date' => '2021-12-21',
                'pcr' => 87,
                'rtk_ag' => 376,
                'state' => 'W.P. Labuan',
            ),
            283 => 
            array (
                'date' => '2021-12-21',
                'pcr' => 189,
                'rtk_ag' => 382,
                'state' => 'W.P. Putrajaya',
            ),
            284 => 
            array (
                'date' => '2021-12-22',
                'pcr' => 3462,
                'rtk_ag' => 17686,
                'state' => 'Johor',
            ),
            285 => 
            array (
                'date' => '2021-12-22',
                'pcr' => 856,
                'rtk_ag' => 6001,
                'state' => 'Kedah',
            ),
            286 => 
            array (
                'date' => '2021-12-22',
                'pcr' => 1409,
                'rtk_ag' => 5119,
                'state' => 'Kelantan',
            ),
            287 => 
            array (
                'date' => '2021-12-22',
                'pcr' => 840,
                'rtk_ag' => 4560,
                'state' => 'Melaka',
            ),
            288 => 
            array (
                'date' => '2021-12-22',
                'pcr' => 878,
                'rtk_ag' => 4288,
                'state' => 'Negeri Sembilan',
            ),
            289 => 
            array (
                'date' => '2021-12-22',
                'pcr' => 460,
                'rtk_ag' => 3527,
                'state' => 'Pahang',
            ),
            290 => 
            array (
                'date' => '2021-12-22',
                'pcr' => 1162,
                'rtk_ag' => 6473,
                'state' => 'Perak',
            ),
            291 => 
            array (
                'date' => '2021-12-22',
                'pcr' => 50,
                'rtk_ag' => 232,
                'state' => 'Perlis',
            ),
            292 => 
            array (
                'date' => '2021-12-22',
                'pcr' => 1735,
                'rtk_ag' => 9123,
                'state' => 'Pulau Pinang',
            ),
            293 => 
            array (
                'date' => '2021-12-22',
                'pcr' => 1154,
                'rtk_ag' => 2498,
                'state' => 'Sabah',
            ),
            294 => 
            array (
                'date' => '2021-12-22',
                'pcr' => 902,
                'rtk_ag' => 2111,
                'state' => 'Sarawak',
            ),
            295 => 
            array (
                'date' => '2021-12-22',
                'pcr' => 14772,
                'rtk_ag' => 26333,
                'state' => 'Selangor',
            ),
            296 => 
            array (
                'date' => '2021-12-22',
                'pcr' => 674,
                'rtk_ag' => 2376,
                'state' => 'Terengganu',
            ),
            297 => 
            array (
                'date' => '2021-12-22',
                'pcr' => 5501,
                'rtk_ag' => 6230,
                'state' => 'W.P. Kuala Lumpur',
            ),
            298 => 
            array (
                'date' => '2021-12-22',
                'pcr' => 77,
                'rtk_ag' => 409,
                'state' => 'W.P. Labuan',
            ),
            299 => 
            array (
                'date' => '2021-12-22',
                'pcr' => 181,
                'rtk_ag' => 331,
                'state' => 'W.P. Putrajaya',
            ),
            300 => 
            array (
                'date' => '2021-12-23',
                'pcr' => 2810,
                'rtk_ag' => 15994,
                'state' => 'Johor',
            ),
            301 => 
            array (
                'date' => '2021-12-23',
                'pcr' => 930,
                'rtk_ag' => 5029,
                'state' => 'Kedah',
            ),
            302 => 
            array (
                'date' => '2021-12-23',
                'pcr' => 1351,
                'rtk_ag' => 3289,
                'state' => 'Kelantan',
            ),
            303 => 
            array (
                'date' => '2021-12-23',
                'pcr' => 665,
                'rtk_ag' => 4040,
                'state' => 'Melaka',
            ),
            304 => 
            array (
                'date' => '2021-12-23',
                'pcr' => 812,
                'rtk_ag' => 3035,
                'state' => 'Negeri Sembilan',
            ),
            305 => 
            array (
                'date' => '2021-12-23',
                'pcr' => 430,
                'rtk_ag' => 3002,
                'state' => 'Pahang',
            ),
            306 => 
            array (
                'date' => '2021-12-23',
                'pcr' => 1229,
                'rtk_ag' => 7367,
                'state' => 'Perak',
            ),
            307 => 
            array (
                'date' => '2021-12-23',
                'pcr' => 54,
                'rtk_ag' => 246,
                'state' => 'Perlis',
            ),
            308 => 
            array (
                'date' => '2021-12-23',
                'pcr' => 1433,
                'rtk_ag' => 7031,
                'state' => 'Pulau Pinang',
            ),
            309 => 
            array (
                'date' => '2021-12-23',
                'pcr' => 1329,
                'rtk_ag' => 2461,
                'state' => 'Sabah',
            ),
            310 => 
            array (
                'date' => '2021-12-23',
                'pcr' => 823,
                'rtk_ag' => 1909,
                'state' => 'Sarawak',
            ),
            311 => 
            array (
                'date' => '2021-12-23',
                'pcr' => 12649,
                'rtk_ag' => 23322,
                'state' => 'Selangor',
            ),
            312 => 
            array (
                'date' => '2021-12-23',
                'pcr' => 543,
                'rtk_ag' => 2869,
                'state' => 'Terengganu',
            ),
            313 => 
            array (
                'date' => '2021-12-23',
                'pcr' => 3833,
                'rtk_ag' => 7073,
                'state' => 'W.P. Kuala Lumpur',
            ),
            314 => 
            array (
                'date' => '2021-12-23',
                'pcr' => 57,
                'rtk_ag' => 420,
                'state' => 'W.P. Labuan',
            ),
            315 => 
            array (
                'date' => '2021-12-23',
                'pcr' => 96,
                'rtk_ag' => 353,
                'state' => 'W.P. Putrajaya',
            ),
            316 => 
            array (
                'date' => '2021-12-24',
                'pcr' => 3006,
                'rtk_ag' => 15428,
                'state' => 'Johor',
            ),
            317 => 
            array (
                'date' => '2021-12-24',
                'pcr' => 949,
                'rtk_ag' => 3792,
                'state' => 'Kedah',
            ),
            318 => 
            array (
                'date' => '2021-12-24',
                'pcr' => 1356,
                'rtk_ag' => 1257,
                'state' => 'Kelantan',
            ),
            319 => 
            array (
                'date' => '2021-12-24',
                'pcr' => 667,
                'rtk_ag' => 2677,
                'state' => 'Melaka',
            ),
            320 => 
            array (
                'date' => '2021-12-24',
                'pcr' => 732,
                'rtk_ag' => 2764,
                'state' => 'Negeri Sembilan',
            ),
            321 => 
            array (
                'date' => '2021-12-24',
                'pcr' => 351,
                'rtk_ag' => 2723,
                'state' => 'Pahang',
            ),
            322 => 
            array (
                'date' => '2021-12-24',
                'pcr' => 1089,
                'rtk_ag' => 5110,
                'state' => 'Perak',
            ),
            323 => 
            array (
                'date' => '2021-12-24',
                'pcr' => 66,
                'rtk_ag' => 209,
                'state' => 'Perlis',
            ),
            324 => 
            array (
                'date' => '2021-12-24',
                'pcr' => 1728,
                'rtk_ag' => 6408,
                'state' => 'Pulau Pinang',
            ),
            325 => 
            array (
                'date' => '2021-12-24',
                'pcr' => 1120,
                'rtk_ag' => 1692,
                'state' => 'Sabah',
            ),
            326 => 
            array (
                'date' => '2021-12-24',
                'pcr' => 915,
                'rtk_ag' => 1615,
                'state' => 'Sarawak',
            ),
            327 => 
            array (
                'date' => '2021-12-24',
                'pcr' => 12499,
                'rtk_ag' => 18674,
                'state' => 'Selangor',
            ),
            328 => 
            array (
                'date' => '2021-12-24',
                'pcr' => 268,
                'rtk_ag' => 1534,
                'state' => 'Terengganu',
            ),
            329 => 
            array (
                'date' => '2021-12-24',
                'pcr' => 4329,
                'rtk_ag' => 6325,
                'state' => 'W.P. Kuala Lumpur',
            ),
            330 => 
            array (
                'date' => '2021-12-24',
                'pcr' => 54,
                'rtk_ag' => 247,
                'state' => 'W.P. Labuan',
            ),
            331 => 
            array (
                'date' => '2021-12-24',
                'pcr' => 186,
                'rtk_ag' => 292,
                'state' => 'W.P. Putrajaya',
            ),
            332 => 
            array (
                'date' => '2021-12-25',
                'pcr' => 2352,
                'rtk_ag' => 10952,
                'state' => 'Johor',
            ),
            333 => 
            array (
                'date' => '2021-12-25',
                'pcr' => 810,
                'rtk_ag' => 4394,
                'state' => 'Kedah',
            ),
            334 => 
            array (
                'date' => '2021-12-25',
                'pcr' => 921,
                'rtk_ag' => 1246,
                'state' => 'Kelantan',
            ),
            335 => 
            array (
                'date' => '2021-12-25',
                'pcr' => 897,
                'rtk_ag' => 1501,
                'state' => 'Melaka',
            ),
            336 => 
            array (
                'date' => '2021-12-25',
                'pcr' => 985,
                'rtk_ag' => 1876,
                'state' => 'Negeri Sembilan',
            ),
            337 => 
            array (
                'date' => '2021-12-25',
                'pcr' => 446,
                'rtk_ag' => 1761,
                'state' => 'Pahang',
            ),
            338 => 
            array (
                'date' => '2021-12-25',
                'pcr' => 1137,
                'rtk_ag' => 5727,
                'state' => 'Perak',
            ),
            339 => 
            array (
                'date' => '2021-12-25',
                'pcr' => 34,
                'rtk_ag' => 207,
                'state' => 'Perlis',
            ),
            340 => 
            array (
                'date' => '2021-12-25',
                'pcr' => 1336,
                'rtk_ag' => 4373,
                'state' => 'Pulau Pinang',
            ),
            341 => 
            array (
                'date' => '2021-12-25',
                'pcr' => 735,
                'rtk_ag' => 1487,
                'state' => 'Sabah',
            ),
            342 => 
            array (
                'date' => '2021-12-25',
                'pcr' => 616,
                'rtk_ag' => 884,
                'state' => 'Sarawak',
            ),
            343 => 
            array (
                'date' => '2021-12-25',
                'pcr' => 12456,
                'rtk_ag' => 15119,
                'state' => 'Selangor',
            ),
            344 => 
            array (
                'date' => '2021-12-25',
                'pcr' => 725,
                'rtk_ag' => 1841,
                'state' => 'Terengganu',
            ),
            345 => 
            array (
                'date' => '2021-12-25',
                'pcr' => 3397,
                'rtk_ag' => 4711,
                'state' => 'W.P. Kuala Lumpur',
            ),
            346 => 
            array (
                'date' => '2021-12-25',
                'pcr' => 31,
                'rtk_ag' => 150,
                'state' => 'W.P. Labuan',
            ),
            347 => 
            array (
                'date' => '2021-12-25',
                'pcr' => 125,
                'rtk_ag' => 166,
                'state' => 'W.P. Putrajaya',
            ),
            348 => 
            array (
                'date' => '2021-12-26',
                'pcr' => 1862,
                'rtk_ag' => 15949,
                'state' => 'Johor',
            ),
            349 => 
            array (
                'date' => '2021-12-26',
                'pcr' => 817,
                'rtk_ag' => 5887,
                'state' => 'Kedah',
            ),
            350 => 
            array (
                'date' => '2021-12-26',
                'pcr' => 1056,
                'rtk_ag' => 1460,
                'state' => 'Kelantan',
            ),
            351 => 
            array (
                'date' => '2021-12-26',
                'pcr' => 534,
                'rtk_ag' => 1865,
                'state' => 'Melaka',
            ),
            352 => 
            array (
                'date' => '2021-12-26',
                'pcr' => 607,
                'rtk_ag' => 1859,
                'state' => 'Negeri Sembilan',
            ),
            353 => 
            array (
                'date' => '2021-12-26',
                'pcr' => 173,
                'rtk_ag' => 1954,
                'state' => 'Pahang',
            ),
            354 => 
            array (
                'date' => '2021-12-26',
                'pcr' => 557,
                'rtk_ag' => 4104,
                'state' => 'Perak',
            ),
            355 => 
            array (
                'date' => '2021-12-26',
                'pcr' => 19,
                'rtk_ag' => 226,
                'state' => 'Perlis',
            ),
            356 => 
            array (
                'date' => '2021-12-26',
                'pcr' => 766,
                'rtk_ag' => 4999,
                'state' => 'Pulau Pinang',
            ),
            357 => 
            array (
                'date' => '2021-12-26',
                'pcr' => 651,
                'rtk_ag' => 2294,
                'state' => 'Sabah',
            ),
            358 => 
            array (
                'date' => '2021-12-26',
                'pcr' => 622,
                'rtk_ag' => 1299,
                'state' => 'Sarawak',
            ),
            359 => 
            array (
                'date' => '2021-12-26',
                'pcr' => 9292,
                'rtk_ag' => 16585,
                'state' => 'Selangor',
            ),
            360 => 
            array (
                'date' => '2021-12-26',
                'pcr' => 498,
                'rtk_ag' => 2391,
                'state' => 'Terengganu',
            ),
            361 => 
            array (
                'date' => '2021-12-26',
                'pcr' => 2509,
                'rtk_ag' => 4907,
                'state' => 'W.P. Kuala Lumpur',
            ),
            362 => 
            array (
                'date' => '2021-12-26',
                'pcr' => 23,
                'rtk_ag' => 233,
                'state' => 'W.P. Labuan',
            ),
            363 => 
            array (
                'date' => '2021-12-26',
                'pcr' => 124,
                'rtk_ag' => 179,
                'state' => 'W.P. Putrajaya',
            ),
            364 => 
            array (
                'date' => '2021-12-27',
                'pcr' => 3699,
                'rtk_ag' => 19903,
                'state' => 'Johor',
            ),
            365 => 
            array (
                'date' => '2021-12-27',
                'pcr' => 716,
                'rtk_ag' => 7405,
                'state' => 'Kedah',
            ),
            366 => 
            array (
                'date' => '2021-12-27',
                'pcr' => 1104,
                'rtk_ag' => 4592,
                'state' => 'Kelantan',
            ),
            367 => 
            array (
                'date' => '2021-12-27',
                'pcr' => 590,
                'rtk_ag' => 4455,
                'state' => 'Melaka',
            ),
            368 => 
            array (
                'date' => '2021-12-27',
                'pcr' => 579,
                'rtk_ag' => 4393,
                'state' => 'Negeri Sembilan',
            ),
            369 => 
            array (
                'date' => '2021-12-27',
                'pcr' => 393,
                'rtk_ag' => 4440,
                'state' => 'Pahang',
            ),
            370 => 
            array (
                'date' => '2021-12-27',
                'pcr' => 899,
                'rtk_ag' => 8035,
                'state' => 'Perak',
            ),
            371 => 
            array (
                'date' => '2021-12-27',
                'pcr' => 21,
                'rtk_ag' => 274,
                'state' => 'Perlis',
            ),
            372 => 
            array (
                'date' => '2021-12-27',
                'pcr' => 1344,
                'rtk_ag' => 8243,
                'state' => 'Pulau Pinang',
            ),
            373 => 
            array (
                'date' => '2021-12-27',
                'pcr' => 1007,
                'rtk_ag' => 3633,
                'state' => 'Sabah',
            ),
            374 => 
            array (
                'date' => '2021-12-27',
                'pcr' => 961,
                'rtk_ag' => 2638,
                'state' => 'Sarawak',
            ),
            375 => 
            array (
                'date' => '2021-12-27',
                'pcr' => 12301,
                'rtk_ag' => 31651,
                'state' => 'Selangor',
            ),
            376 => 
            array (
                'date' => '2021-12-27',
                'pcr' => 486,
                'rtk_ag' => 3717,
                'state' => 'Terengganu',
            ),
            377 => 
            array (
                'date' => '2021-12-27',
                'pcr' => 3861,
                'rtk_ag' => 7782,
                'state' => 'W.P. Kuala Lumpur',
            ),
            378 => 
            array (
                'date' => '2021-12-27',
                'pcr' => 54,
                'rtk_ag' => 556,
                'state' => 'W.P. Labuan',
            ),
            379 => 
            array (
                'date' => '2021-12-27',
                'pcr' => 203,
                'rtk_ag' => 402,
                'state' => 'W.P. Putrajaya',
            ),
            380 => 
            array (
                'date' => '2021-12-28',
                'pcr' => 3500,
                'rtk_ag' => 17819,
                'state' => 'Johor',
            ),
            381 => 
            array (
                'date' => '2021-12-28',
                'pcr' => 1072,
                'rtk_ag' => 7084,
                'state' => 'Kedah',
            ),
            382 => 
            array (
                'date' => '2021-12-28',
                'pcr' => 1456,
                'rtk_ag' => 4153,
                'state' => 'Kelantan',
            ),
            383 => 
            array (
                'date' => '2021-12-28',
                'pcr' => 1102,
                'rtk_ag' => 3874,
                'state' => 'Melaka',
            ),
            384 => 
            array (
                'date' => '2021-12-28',
                'pcr' => 1041,
                'rtk_ag' => 3908,
                'state' => 'Negeri Sembilan',
            ),
            385 => 
            array (
                'date' => '2021-12-28',
                'pcr' => 849,
                'rtk_ag' => 3738,
                'state' => 'Pahang',
            ),
            386 => 
            array (
                'date' => '2021-12-28',
                'pcr' => 1415,
                'rtk_ag' => 6977,
                'state' => 'Perak',
            ),
            387 => 
            array (
                'date' => '2021-12-28',
                'pcr' => 36,
                'rtk_ag' => 254,
                'state' => 'Perlis',
            ),
            388 => 
            array (
                'date' => '2021-12-28',
                'pcr' => 1596,
                'rtk_ag' => 8776,
                'state' => 'Pulau Pinang',
            ),
            389 => 
            array (
                'date' => '2021-12-28',
                'pcr' => 1422,
                'rtk_ag' => 2768,
                'state' => 'Sabah',
            ),
            390 => 
            array (
                'date' => '2021-12-28',
                'pcr' => 922,
                'rtk_ag' => 1981,
                'state' => 'Sarawak',
            ),
            391 => 
            array (
                'date' => '2021-12-28',
                'pcr' => 13057,
                'rtk_ag' => 25463,
                'state' => 'Selangor',
            ),
            392 => 
            array (
                'date' => '2021-12-28',
                'pcr' => 532,
                'rtk_ag' => 2611,
                'state' => 'Terengganu',
            ),
            393 => 
            array (
                'date' => '2021-12-28',
                'pcr' => 5848,
                'rtk_ag' => 5822,
                'state' => 'W.P. Kuala Lumpur',
            ),
            394 => 
            array (
                'date' => '2021-12-28',
                'pcr' => 62,
                'rtk_ag' => 365,
                'state' => 'W.P. Labuan',
            ),
            395 => 
            array (
                'date' => '2021-12-28',
                'pcr' => 145,
                'rtk_ag' => 320,
                'state' => 'W.P. Putrajaya',
            ),
            396 => 
            array (
                'date' => '2021-12-29',
                'pcr' => 3392,
                'rtk_ag' => 17710,
                'state' => 'Johor',
            ),
            397 => 
            array (
                'date' => '2021-12-29',
                'pcr' => 1079,
                'rtk_ag' => 5441,
                'state' => 'Kedah',
            ),
            398 => 
            array (
                'date' => '2021-12-29',
                'pcr' => 1344,
                'rtk_ag' => 3684,
                'state' => 'Kelantan',
            ),
            399 => 
            array (
                'date' => '2021-12-29',
                'pcr' => 845,
                'rtk_ag' => 3063,
                'state' => 'Melaka',
            ),
            400 => 
            array (
                'date' => '2021-12-29',
                'pcr' => 858,
                'rtk_ag' => 6485,
                'state' => 'Negeri Sembilan',
            ),
            401 => 
            array (
                'date' => '2021-12-29',
                'pcr' => 658,
                'rtk_ag' => 3616,
                'state' => 'Pahang',
            ),
            402 => 
            array (
                'date' => '2021-12-29',
                'pcr' => 1026,
                'rtk_ag' => 5862,
                'state' => 'Perak',
            ),
            403 => 
            array (
                'date' => '2021-12-29',
                'pcr' => 32,
                'rtk_ag' => 203,
                'state' => 'Perlis',
            ),
            404 => 
            array (
                'date' => '2021-12-29',
                'pcr' => 1674,
                'rtk_ag' => 6933,
                'state' => 'Pulau Pinang',
            ),
            405 => 
            array (
                'date' => '2021-12-29',
                'pcr' => 1785,
                'rtk_ag' => 2928,
                'state' => 'Sabah',
            ),
            406 => 
            array (
                'date' => '2021-12-29',
                'pcr' => 756,
                'rtk_ag' => 1923,
                'state' => 'Sarawak',
            ),
            407 => 
            array (
                'date' => '2021-12-29',
                'pcr' => 13342,
                'rtk_ag' => 26488,
                'state' => 'Selangor',
            ),
            408 => 
            array (
                'date' => '2021-12-29',
                'pcr' => 597,
                'rtk_ag' => 2759,
                'state' => 'Terengganu',
            ),
            409 => 
            array (
                'date' => '2021-12-29',
                'pcr' => 5151,
                'rtk_ag' => 5624,
                'state' => 'W.P. Kuala Lumpur',
            ),
            410 => 
            array (
                'date' => '2021-12-29',
                'pcr' => 89,
                'rtk_ag' => 337,
                'state' => 'W.P. Labuan',
            ),
            411 => 
            array (
                'date' => '2021-12-29',
                'pcr' => 127,
                'rtk_ag' => 309,
                'state' => 'W.P. Putrajaya',
            ),
            412 => 
            array (
                'date' => '2021-12-30',
                'pcr' => 2788,
                'rtk_ag' => 17715,
                'state' => 'Johor',
            ),
            413 => 
            array (
                'date' => '2021-12-30',
                'pcr' => 885,
                'rtk_ag' => 3889,
                'state' => 'Kedah',
            ),
            414 => 
            array (
                'date' => '2021-12-30',
                'pcr' => 1366,
                'rtk_ag' => 3129,
                'state' => 'Kelantan',
            ),
            415 => 
            array (
                'date' => '2021-12-30',
                'pcr' => 731,
                'rtk_ag' => 2732,
                'state' => 'Melaka',
            ),
            416 => 
            array (
                'date' => '2021-12-30',
                'pcr' => 693,
                'rtk_ag' => 3418,
                'state' => 'Negeri Sembilan',
            ),
            417 => 
            array (
                'date' => '2021-12-30',
                'pcr' => 515,
                'rtk_ag' => 2887,
                'state' => 'Pahang',
            ),
            418 => 
            array (
                'date' => '2021-12-30',
                'pcr' => 1025,
                'rtk_ag' => 6208,
                'state' => 'Perak',
            ),
            419 => 
            array (
                'date' => '2021-12-30',
                'pcr' => 23,
                'rtk_ag' => 270,
                'state' => 'Perlis',
            ),
            420 => 
            array (
                'date' => '2021-12-30',
                'pcr' => 1571,
                'rtk_ag' => 6058,
                'state' => 'Pulau Pinang',
            ),
            421 => 
            array (
                'date' => '2021-12-30',
                'pcr' => 1073,
                'rtk_ag' => 2631,
                'state' => 'Sabah',
            ),
            422 => 
            array (
                'date' => '2021-12-30',
                'pcr' => 676,
                'rtk_ag' => 1781,
                'state' => 'Sarawak',
            ),
            423 => 
            array (
                'date' => '2021-12-30',
                'pcr' => 11506,
                'rtk_ag' => 21013,
                'state' => 'Selangor',
            ),
            424 => 
            array (
                'date' => '2021-12-30',
                'pcr' => 591,
                'rtk_ag' => 2494,
                'state' => 'Terengganu',
            ),
            425 => 
            array (
                'date' => '2021-12-30',
                'pcr' => 4765,
                'rtk_ag' => 5184,
                'state' => 'W.P. Kuala Lumpur',
            ),
            426 => 
            array (
                'date' => '2021-12-30',
                'pcr' => 98,
                'rtk_ag' => 316,
                'state' => 'W.P. Labuan',
            ),
            427 => 
            array (
                'date' => '2021-12-30',
                'pcr' => 146,
                'rtk_ag' => 309,
                'state' => 'W.P. Putrajaya',
            ),
            428 => 
            array (
                'date' => '2021-12-31',
                'pcr' => 2523,
                'rtk_ag' => 12863,
                'state' => 'Johor',
            ),
            429 => 
            array (
                'date' => '2021-12-31',
                'pcr' => 927,
                'rtk_ag' => 4101,
                'state' => 'Kedah',
            ),
            430 => 
            array (
                'date' => '2021-12-31',
                'pcr' => 1195,
                'rtk_ag' => 1260,
                'state' => 'Kelantan',
            ),
            431 => 
            array (
                'date' => '2021-12-31',
                'pcr' => 855,
                'rtk_ag' => 1937,
                'state' => 'Melaka',
            ),
            432 => 
            array (
                'date' => '2021-12-31',
                'pcr' => 1280,
                'rtk_ag' => 5181,
                'state' => 'Negeri Sembilan',
            ),
            433 => 
            array (
                'date' => '2021-12-31',
                'pcr' => 664,
                'rtk_ag' => 2573,
                'state' => 'Pahang',
            ),
            434 => 
            array (
                'date' => '2021-12-31',
                'pcr' => 1040,
                'rtk_ag' => 4443,
                'state' => 'Perak',
            ),
            435 => 
            array (
                'date' => '2021-12-31',
                'pcr' => 44,
                'rtk_ag' => 275,
                'state' => 'Perlis',
            ),
            436 => 
            array (
                'date' => '2021-12-31',
                'pcr' => 1549,
                'rtk_ag' => 5874,
                'state' => 'Pulau Pinang',
            ),
            437 => 
            array (
                'date' => '2021-12-31',
                'pcr' => 889,
                'rtk_ag' => 2521,
                'state' => 'Sabah',
            ),
            438 => 
            array (
                'date' => '2021-12-31',
                'pcr' => 953,
                'rtk_ag' => 1609,
                'state' => 'Sarawak',
            ),
            439 => 
            array (
                'date' => '2021-12-31',
                'pcr' => 10256,
                'rtk_ag' => 16451,
                'state' => 'Selangor',
            ),
            440 => 
            array (
                'date' => '2021-12-31',
                'pcr' => 279,
                'rtk_ag' => 1369,
                'state' => 'Terengganu',
            ),
            441 => 
            array (
                'date' => '2021-12-31',
                'pcr' => 4155,
                'rtk_ag' => 4614,
                'state' => 'W.P. Kuala Lumpur',
            ),
            442 => 
            array (
                'date' => '2021-12-31',
                'pcr' => 61,
                'rtk_ag' => 266,
                'state' => 'W.P. Labuan',
            ),
            443 => 
            array (
                'date' => '2021-12-31',
                'pcr' => 160,
                'rtk_ag' => 358,
                'state' => 'W.P. Putrajaya',
            ),
            444 => 
            array (
                'date' => '2022-01-01',
                'pcr' => 2142,
                'rtk_ag' => 10947,
                'state' => 'Johor',
            ),
            445 => 
            array (
                'date' => '2022-01-01',
                'pcr' => 919,
                'rtk_ag' => 3295,
                'state' => 'Kedah',
            ),
            446 => 
            array (
                'date' => '2022-01-01',
                'pcr' => 954,
                'rtk_ag' => 1310,
                'state' => 'Kelantan',
            ),
            447 => 
            array (
                'date' => '2022-01-01',
                'pcr' => 680,
                'rtk_ag' => 1159,
                'state' => 'Melaka',
            ),
            448 => 
            array (
                'date' => '2022-01-01',
                'pcr' => 1038,
                'rtk_ag' => 4289,
                'state' => 'Negeri Sembilan',
            ),
            449 => 
            array (
                'date' => '2022-01-01',
                'pcr' => 443,
                'rtk_ag' => 1500,
                'state' => 'Pahang',
            ),
            450 => 
            array (
                'date' => '2022-01-01',
                'pcr' => 972,
                'rtk_ag' => 3838,
                'state' => 'Perak',
            ),
            451 => 
            array (
                'date' => '2022-01-01',
                'pcr' => 39,
                'rtk_ag' => 212,
                'state' => 'Perlis',
            ),
            452 => 
            array (
                'date' => '2022-01-01',
                'pcr' => 1347,
                'rtk_ag' => 3280,
                'state' => 'Pulau Pinang',
            ),
            453 => 
            array (
                'date' => '2022-01-01',
                'pcr' => 568,
                'rtk_ag' => 1761,
                'state' => 'Sabah',
            ),
            454 => 
            array (
                'date' => '2022-01-01',
                'pcr' => 641,
                'rtk_ag' => 1148,
                'state' => 'Sarawak',
            ),
            455 => 
            array (
                'date' => '2022-01-01',
                'pcr' => 10056,
                'rtk_ag' => 9641,
                'state' => 'Selangor',
            ),
            456 => 
            array (
                'date' => '2022-01-01',
                'pcr' => 541,
                'rtk_ag' => 2938,
                'state' => 'Terengganu',
            ),
            457 => 
            array (
                'date' => '2022-01-01',
                'pcr' => 2683,
                'rtk_ag' => 2792,
                'state' => 'W.P. Kuala Lumpur',
            ),
            458 => 
            array (
                'date' => '2022-01-01',
                'pcr' => 63,
                'rtk_ag' => 198,
                'state' => 'W.P. Labuan',
            ),
            459 => 
            array (
                'date' => '2022-01-01',
                'pcr' => 128,
                'rtk_ag' => 165,
                'state' => 'W.P. Putrajaya',
            ),
            460 => 
            array (
                'date' => '2022-01-02',
                'pcr' => 2279,
                'rtk_ag' => 14696,
                'state' => 'Johor',
            ),
            461 => 
            array (
                'date' => '2022-01-02',
                'pcr' => 728,
                'rtk_ag' => 5255,
                'state' => 'Kedah',
            ),
            462 => 
            array (
                'date' => '2022-01-02',
                'pcr' => 1083,
                'rtk_ag' => 3718,
                'state' => 'Kelantan',
            ),
            463 => 
            array (
                'date' => '2022-01-02',
                'pcr' => 467,
                'rtk_ag' => 1645,
                'state' => 'Melaka',
            ),
            464 => 
            array (
                'date' => '2022-01-02',
                'pcr' => 482,
                'rtk_ag' => 4360,
                'state' => 'Negeri Sembilan',
            ),
            465 => 
            array (
                'date' => '2022-01-02',
                'pcr' => 190,
                'rtk_ag' => 1889,
                'state' => 'Pahang',
            ),
            466 => 
            array (
                'date' => '2022-01-02',
                'pcr' => 509,
                'rtk_ag' => 4557,
                'state' => 'Perak',
            ),
            467 => 
            array (
                'date' => '2022-01-02',
                'pcr' => 14,
                'rtk_ag' => 250,
                'state' => 'Perlis',
            ),
            468 => 
            array (
                'date' => '2022-01-02',
                'pcr' => 795,
                'rtk_ag' => 4924,
                'state' => 'Pulau Pinang',
            ),
            469 => 
            array (
                'date' => '2022-01-02',
                'pcr' => 851,
                'rtk_ag' => 2712,
                'state' => 'Sabah',
            ),
            470 => 
            array (
                'date' => '2022-01-02',
                'pcr' => 823,
                'rtk_ag' => 1971,
                'state' => 'Sarawak',
            ),
            471 => 
            array (
                'date' => '2022-01-02',
                'pcr' => 8468,
                'rtk_ag' => 15818,
                'state' => 'Selangor',
            ),
            472 => 
            array (
                'date' => '2022-01-02',
                'pcr' => 419,
                'rtk_ag' => 4046,
                'state' => 'Terengganu',
            ),
            473 => 
            array (
                'date' => '2022-01-02',
                'pcr' => 2593,
                'rtk_ag' => 4451,
                'state' => 'W.P. Kuala Lumpur',
            ),
            474 => 
            array (
                'date' => '2022-01-02',
                'pcr' => 27,
                'rtk_ag' => 361,
                'state' => 'W.P. Labuan',
            ),
            475 => 
            array (
                'date' => '2022-01-02',
                'pcr' => 130,
                'rtk_ag' => 242,
                'state' => 'W.P. Putrajaya',
            ),
            476 => 
            array (
                'date' => '2022-01-03',
                'pcr' => 3158,
                'rtk_ag' => 21706,
                'state' => 'Johor',
            ),
            477 => 
            array (
                'date' => '2022-01-03',
                'pcr' => 972,
                'rtk_ag' => 6171,
                'state' => 'Kedah',
            ),
            478 => 
            array (
                'date' => '2022-01-03',
                'pcr' => 1524,
                'rtk_ag' => 3502,
                'state' => 'Kelantan',
            ),
            479 => 
            array (
                'date' => '2022-01-03',
                'pcr' => 582,
                'rtk_ag' => 4241,
                'state' => 'Melaka',
            ),
            480 => 
            array (
                'date' => '2022-01-03',
                'pcr' => 515,
                'rtk_ag' => 4939,
                'state' => 'Negeri Sembilan',
            ),
            481 => 
            array (
                'date' => '2022-01-03',
                'pcr' => 350,
                'rtk_ag' => 3857,
                'state' => 'Pahang',
            ),
            482 => 
            array (
                'date' => '2022-01-03',
                'pcr' => 817,
                'rtk_ag' => 10891,
                'state' => 'Perak',
            ),
            483 => 
            array (
                'date' => '2022-01-03',
                'pcr' => 22,
                'rtk_ag' => 320,
                'state' => 'Perlis',
            ),
            484 => 
            array (
                'date' => '2022-01-03',
                'pcr' => 1514,
                'rtk_ag' => 10672,
                'state' => 'Pulau Pinang',
            ),
            485 => 
            array (
                'date' => '2022-01-03',
                'pcr' => 1396,
                'rtk_ag' => 4436,
                'state' => 'Sabah',
            ),
            486 => 
            array (
                'date' => '2022-01-03',
                'pcr' => 1287,
                'rtk_ag' => 2823,
                'state' => 'Sarawak',
            ),
            487 => 
            array (
                'date' => '2022-01-03',
                'pcr' => 11627,
                'rtk_ag' => 38866,
                'state' => 'Selangor',
            ),
            488 => 
            array (
                'date' => '2022-01-03',
                'pcr' => 459,
                'rtk_ag' => 2862,
                'state' => 'Terengganu',
            ),
            489 => 
            array (
                'date' => '2022-01-03',
                'pcr' => 4039,
                'rtk_ag' => 7232,
                'state' => 'W.P. Kuala Lumpur',
            ),
            490 => 
            array (
                'date' => '2022-01-03',
                'pcr' => 87,
                'rtk_ag' => 834,
                'state' => 'W.P. Labuan',
            ),
            491 => 
            array (
                'date' => '2022-01-03',
                'pcr' => 200,
                'rtk_ag' => 470,
                'state' => 'W.P. Putrajaya',
            ),
            492 => 
            array (
                'date' => '2022-01-04',
                'pcr' => 4062,
                'rtk_ag' => 20251,
                'state' => 'Johor',
            ),
            493 => 
            array (
                'date' => '2022-01-04',
                'pcr' => 1012,
                'rtk_ag' => 4770,
                'state' => 'Kedah',
            ),
            494 => 
            array (
                'date' => '2022-01-04',
                'pcr' => 1434,
                'rtk_ag' => 2989,
                'state' => 'Kelantan',
            ),
            495 => 
            array (
                'date' => '2022-01-04',
                'pcr' => 1041,
                'rtk_ag' => 5717,
                'state' => 'Melaka',
            ),
            496 => 
            array (
                'date' => '2022-01-04',
                'pcr' => 931,
                'rtk_ag' => 4743,
                'state' => 'Negeri Sembilan',
            ),
            497 => 
            array (
                'date' => '2022-01-04',
                'pcr' => 961,
                'rtk_ag' => 3561,
                'state' => 'Pahang',
            ),
            498 => 
            array (
                'date' => '2022-01-04',
                'pcr' => 1135,
                'rtk_ag' => 7624,
                'state' => 'Perak',
            ),
            499 => 
            array (
                'date' => '2022-01-04',
                'pcr' => 46,
                'rtk_ag' => 333,
                'state' => 'Perlis',
            ),
        ));
        \DB::table('test_states')->insert(array (
            0 => 
            array (
                'date' => '2022-01-04',
                'pcr' => 1760,
                'rtk_ag' => 9844,
                'state' => 'Pulau Pinang',
            ),
            1 => 
            array (
                'date' => '2022-01-04',
                'pcr' => 1449,
                'rtk_ag' => 3569,
                'state' => 'Sabah',
            ),
            2 => 
            array (
                'date' => '2022-01-04',
                'pcr' => 1149,
                'rtk_ag' => 2668,
                'state' => 'Sarawak',
            ),
            3 => 
            array (
                'date' => '2022-01-04',
                'pcr' => 16545,
                'rtk_ag' => 26442,
                'state' => 'Selangor',
            ),
            4 => 
            array (
                'date' => '2022-01-04',
                'pcr' => 479,
                'rtk_ag' => 2756,
                'state' => 'Terengganu',
            ),
            5 => 
            array (
                'date' => '2022-01-04',
                'pcr' => 5537,
                'rtk_ag' => 6998,
                'state' => 'W.P. Kuala Lumpur',
            ),
            6 => 
            array (
                'date' => '2022-01-04',
                'pcr' => 131,
                'rtk_ag' => 556,
                'state' => 'W.P. Labuan',
            ),
            7 => 
            array (
                'date' => '2022-01-04',
                'pcr' => 195,
                'rtk_ag' => 329,
                'state' => 'W.P. Putrajaya',
            ),
            8 => 
            array (
                'date' => '2022-01-05',
                'pcr' => 3352,
                'rtk_ag' => 17698,
                'state' => 'Johor',
            ),
            9 => 
            array (
                'date' => '2022-01-05',
                'pcr' => 955,
                'rtk_ag' => 5014,
                'state' => 'Kedah',
            ),
            10 => 
            array (
                'date' => '2022-01-05',
                'pcr' => 1378,
                'rtk_ag' => 3055,
                'state' => 'Kelantan',
            ),
            11 => 
            array (
                'date' => '2022-01-05',
                'pcr' => 736,
                'rtk_ag' => 3271,
                'state' => 'Melaka',
            ),
            12 => 
            array (
                'date' => '2022-01-05',
                'pcr' => 912,
                'rtk_ag' => 8483,
                'state' => 'Negeri Sembilan',
            ),
            13 => 
            array (
                'date' => '2022-01-05',
                'pcr' => 719,
                'rtk_ag' => 3444,
                'state' => 'Pahang',
            ),
            14 => 
            array (
                'date' => '2022-01-05',
                'pcr' => 940,
                'rtk_ag' => 6274,
                'state' => 'Perak',
            ),
            15 => 
            array (
                'date' => '2022-01-05',
                'pcr' => 44,
                'rtk_ag' => 262,
                'state' => 'Perlis',
            ),
            16 => 
            array (
                'date' => '2022-01-05',
                'pcr' => 1693,
                'rtk_ag' => 8217,
                'state' => 'Pulau Pinang',
            ),
            17 => 
            array (
                'date' => '2022-01-05',
                'pcr' => 1266,
                'rtk_ag' => 3175,
                'state' => 'Sabah',
            ),
            18 => 
            array (
                'date' => '2022-01-05',
                'pcr' => 926,
                'rtk_ag' => 2337,
                'state' => 'Sarawak',
            ),
            19 => 
            array (
                'date' => '2022-01-05',
                'pcr' => 13982,
                'rtk_ag' => 24454,
                'state' => 'Selangor',
            ),
            20 => 
            array (
                'date' => '2022-01-05',
                'pcr' => 550,
                'rtk_ag' => 3141,
                'state' => 'Terengganu',
            ),
            21 => 
            array (
                'date' => '2022-01-05',
                'pcr' => 5406,
                'rtk_ag' => 6015,
                'state' => 'W.P. Kuala Lumpur',
            ),
            22 => 
            array (
                'date' => '2022-01-05',
                'pcr' => 81,
                'rtk_ag' => 382,
                'state' => 'W.P. Labuan',
            ),
            23 => 
            array (
                'date' => '2022-01-05',
                'pcr' => 205,
                'rtk_ag' => 364,
                'state' => 'W.P. Putrajaya',
            ),
            24 => 
            array (
                'date' => '2022-01-06',
                'pcr' => 2796,
                'rtk_ag' => 14806,
                'state' => 'Johor',
            ),
            25 => 
            array (
                'date' => '2022-01-06',
                'pcr' => 1053,
                'rtk_ag' => 4384,
                'state' => 'Kedah',
            ),
            26 => 
            array (
                'date' => '2022-01-06',
                'pcr' => 1261,
                'rtk_ag' => 2578,
                'state' => 'Kelantan',
            ),
            27 => 
            array (
                'date' => '2022-01-06',
                'pcr' => 657,
                'rtk_ag' => 2448,
                'state' => 'Melaka',
            ),
            28 => 
            array (
                'date' => '2022-01-06',
                'pcr' => 964,
                'rtk_ag' => 3142,
                'state' => 'Negeri Sembilan',
            ),
            29 => 
            array (
                'date' => '2022-01-06',
                'pcr' => 505,
                'rtk_ag' => 2871,
                'state' => 'Pahang',
            ),
            30 => 
            array (
                'date' => '2022-01-06',
                'pcr' => 970,
                'rtk_ag' => 6637,
                'state' => 'Perak',
            ),
            31 => 
            array (
                'date' => '2022-01-06',
                'pcr' => 35,
                'rtk_ag' => 274,
                'state' => 'Perlis',
            ),
            32 => 
            array (
                'date' => '2022-01-06',
                'pcr' => 1549,
                'rtk_ag' => 7491,
                'state' => 'Pulau Pinang',
            ),
            33 => 
            array (
                'date' => '2022-01-06',
                'pcr' => 1542,
                'rtk_ag' => 3230,
                'state' => 'Sabah',
            ),
            34 => 
            array (
                'date' => '2022-01-06',
                'pcr' => 816,
                'rtk_ag' => 2349,
                'state' => 'Sarawak',
            ),
            35 => 
            array (
                'date' => '2022-01-06',
                'pcr' => 11499,
                'rtk_ag' => 23487,
                'state' => 'Selangor',
            ),
            36 => 
            array (
                'date' => '2022-01-06',
                'pcr' => 519,
                'rtk_ag' => 2339,
                'state' => 'Terengganu',
            ),
            37 => 
            array (
                'date' => '2022-01-06',
                'pcr' => 4343,
                'rtk_ag' => 6209,
                'state' => 'W.P. Kuala Lumpur',
            ),
            38 => 
            array (
                'date' => '2022-01-06',
                'pcr' => 86,
                'rtk_ag' => 420,
                'state' => 'W.P. Labuan',
            ),
            39 => 
            array (
                'date' => '2022-01-06',
                'pcr' => 126,
                'rtk_ag' => 360,
                'state' => 'W.P. Putrajaya',
            ),
            40 => 
            array (
                'date' => '2022-01-07',
                'pcr' => 2764,
                'rtk_ag' => 15199,
                'state' => 'Johor',
            ),
            41 => 
            array (
                'date' => '2022-01-07',
                'pcr' => 801,
                'rtk_ag' => 4283,
                'state' => 'Kedah',
            ),
            42 => 
            array (
                'date' => '2022-01-07',
                'pcr' => 1254,
                'rtk_ag' => 1758,
                'state' => 'Kelantan',
            ),
            43 => 
            array (
                'date' => '2022-01-07',
                'pcr' => 523,
                'rtk_ag' => 3971,
                'state' => 'Melaka',
            ),
            44 => 
            array (
                'date' => '2022-01-07',
                'pcr' => 1133,
                'rtk_ag' => 5281,
                'state' => 'Negeri Sembilan',
            ),
            45 => 
            array (
                'date' => '2022-01-07',
                'pcr' => 679,
                'rtk_ag' => 2711,
                'state' => 'Pahang',
            ),
            46 => 
            array (
                'date' => '2022-01-07',
                'pcr' => 823,
                'rtk_ag' => 6216,
                'state' => 'Perak',
            ),
            47 => 
            array (
                'date' => '2022-01-07',
                'pcr' => 13,
                'rtk_ag' => 270,
                'state' => 'Perlis',
            ),
            48 => 
            array (
                'date' => '2022-01-07',
                'pcr' => 1552,
                'rtk_ag' => 5943,
                'state' => 'Pulau Pinang',
            ),
            49 => 
            array (
                'date' => '2022-01-07',
                'pcr' => 1325,
                'rtk_ag' => 2871,
                'state' => 'Sabah',
            ),
            50 => 
            array (
                'date' => '2022-01-07',
                'pcr' => 874,
                'rtk_ag' => 2153,
                'state' => 'Sarawak',
            ),
            51 => 
            array (
                'date' => '2022-01-07',
                'pcr' => 10010,
                'rtk_ag' => 20674,
                'state' => 'Selangor',
            ),
            52 => 
            array (
                'date' => '2022-01-07',
                'pcr' => 514,
                'rtk_ag' => 1866,
                'state' => 'Terengganu',
            ),
            53 => 
            array (
                'date' => '2022-01-07',
                'pcr' => 4831,
                'rtk_ag' => 4897,
                'state' => 'W.P. Kuala Lumpur',
            ),
            54 => 
            array (
                'date' => '2022-01-07',
                'pcr' => 95,
                'rtk_ag' => 496,
                'state' => 'W.P. Labuan',
            ),
            55 => 
            array (
                'date' => '2022-01-07',
                'pcr' => 197,
                'rtk_ag' => 305,
                'state' => 'W.P. Putrajaya',
            ),
            56 => 
            array (
                'date' => '2022-01-08',
                'pcr' => 2329,
                'rtk_ag' => 12667,
                'state' => 'Johor',
            ),
            57 => 
            array (
                'date' => '2022-01-08',
                'pcr' => 750,
                'rtk_ag' => 4898,
                'state' => 'Kedah',
            ),
            58 => 
            array (
                'date' => '2022-01-08',
                'pcr' => 717,
                'rtk_ag' => 1968,
                'state' => 'Kelantan',
            ),
            59 => 
            array (
                'date' => '2022-01-08',
                'pcr' => 757,
                'rtk_ag' => 2693,
                'state' => 'Melaka',
            ),
            60 => 
            array (
                'date' => '2022-01-08',
                'pcr' => 726,
                'rtk_ag' => 1961,
                'state' => 'Negeri Sembilan',
            ),
            61 => 
            array (
                'date' => '2022-01-08',
                'pcr' => 609,
                'rtk_ag' => 2121,
                'state' => 'Pahang',
            ),
            62 => 
            array (
                'date' => '2022-01-08',
                'pcr' => 1019,
                'rtk_ag' => 4963,
                'state' => 'Perak',
            ),
            63 => 
            array (
                'date' => '2022-01-08',
                'pcr' => 20,
                'rtk_ag' => 277,
                'state' => 'Perlis',
            ),
            64 => 
            array (
                'date' => '2022-01-08',
                'pcr' => 1798,
                'rtk_ag' => 5020,
                'state' => 'Pulau Pinang',
            ),
            65 => 
            array (
                'date' => '2022-01-08',
                'pcr' => 1391,
                'rtk_ag' => 2831,
                'state' => 'Sabah',
            ),
            66 => 
            array (
                'date' => '2022-01-08',
                'pcr' => 1182,
                'rtk_ag' => 2291,
                'state' => 'Sarawak',
            ),
            67 => 
            array (
                'date' => '2022-01-08',
                'pcr' => 11399,
                'rtk_ag' => 16147,
                'state' => 'Selangor',
            ),
            68 => 
            array (
                'date' => '2022-01-08',
                'pcr' => 479,
                'rtk_ag' => 3167,
                'state' => 'Terengganu',
            ),
            69 => 
            array (
                'date' => '2022-01-08',
                'pcr' => 4189,
                'rtk_ag' => 4064,
                'state' => 'W.P. Kuala Lumpur',
            ),
            70 => 
            array (
                'date' => '2022-01-08',
                'pcr' => 118,
                'rtk_ag' => 260,
                'state' => 'W.P. Labuan',
            ),
            71 => 
            array (
                'date' => '2022-01-08',
                'pcr' => 195,
                'rtk_ag' => 233,
                'state' => 'W.P. Putrajaya',
            ),
            72 => 
            array (
                'date' => '2022-01-09',
                'pcr' => 2806,
                'rtk_ag' => 14953,
                'state' => 'Johor',
            ),
            73 => 
            array (
                'date' => '2022-01-09',
                'pcr' => 902,
                'rtk_ag' => 6362,
                'state' => 'Kedah',
            ),
            74 => 
            array (
                'date' => '2022-01-09',
                'pcr' => 1080,
                'rtk_ag' => 2715,
                'state' => 'Kelantan',
            ),
            75 => 
            array (
                'date' => '2022-01-09',
                'pcr' => 648,
                'rtk_ag' => 2641,
                'state' => 'Melaka',
            ),
            76 => 
            array (
                'date' => '2022-01-09',
                'pcr' => 723,
                'rtk_ag' => 2668,
                'state' => 'Negeri Sembilan',
            ),
            77 => 
            array (
                'date' => '2022-01-09',
                'pcr' => 421,
                'rtk_ag' => 3228,
                'state' => 'Pahang',
            ),
            78 => 
            array (
                'date' => '2022-01-09',
                'pcr' => 693,
                'rtk_ag' => 5914,
                'state' => 'Perak',
            ),
            79 => 
            array (
                'date' => '2022-01-09',
                'pcr' => 10,
                'rtk_ag' => 357,
                'state' => 'Perlis',
            ),
            80 => 
            array (
                'date' => '2022-01-09',
                'pcr' => 1043,
                'rtk_ag' => 5441,
                'state' => 'Pulau Pinang',
            ),
            81 => 
            array (
                'date' => '2022-01-09',
                'pcr' => 1207,
                'rtk_ag' => 2786,
                'state' => 'Sabah',
            ),
            82 => 
            array (
                'date' => '2022-01-09',
                'pcr' => 603,
                'rtk_ag' => 1626,
                'state' => 'Sarawak',
            ),
            83 => 
            array (
                'date' => '2022-01-09',
                'pcr' => 10173,
                'rtk_ag' => 19290,
                'state' => 'Selangor',
            ),
            84 => 
            array (
                'date' => '2022-01-09',
                'pcr' => 536,
                'rtk_ag' => 4106,
                'state' => 'Terengganu',
            ),
            85 => 
            array (
                'date' => '2022-01-09',
                'pcr' => 3037,
                'rtk_ag' => 4964,
                'state' => 'W.P. Kuala Lumpur',
            ),
            86 => 
            array (
                'date' => '2022-01-09',
                'pcr' => 28,
                'rtk_ag' => 398,
                'state' => 'W.P. Labuan',
            ),
            87 => 
            array (
                'date' => '2022-01-09',
                'pcr' => 162,
                'rtk_ag' => 294,
                'state' => 'W.P. Putrajaya',
            ),
            88 => 
            array (
                'date' => '2022-01-10',
                'pcr' => 3642,
                'rtk_ag' => 22178,
                'state' => 'Johor',
            ),
            89 => 
            array (
                'date' => '2022-01-10',
                'pcr' => 856,
                'rtk_ag' => 6764,
                'state' => 'Kedah',
            ),
            90 => 
            array (
                'date' => '2022-01-10',
                'pcr' => 1465,
                'rtk_ag' => 2740,
                'state' => 'Kelantan',
            ),
            91 => 
            array (
                'date' => '2022-01-10',
                'pcr' => 627,
                'rtk_ag' => 3951,
                'state' => 'Melaka',
            ),
            92 => 
            array (
                'date' => '2022-01-10',
                'pcr' => 481,
                'rtk_ag' => 7247,
                'state' => 'Negeri Sembilan',
            ),
            93 => 
            array (
                'date' => '2022-01-10',
                'pcr' => 278,
                'rtk_ag' => 4935,
                'state' => 'Pahang',
            ),
            94 => 
            array (
                'date' => '2022-01-10',
                'pcr' => 744,
                'rtk_ag' => 8178,
                'state' => 'Perak',
            ),
            95 => 
            array (
                'date' => '2022-01-10',
                'pcr' => 15,
                'rtk_ag' => 306,
                'state' => 'Perlis',
            ),
            96 => 
            array (
                'date' => '2022-01-10',
                'pcr' => 1006,
                'rtk_ag' => 9287,
                'state' => 'Pulau Pinang',
            ),
            97 => 
            array (
                'date' => '2022-01-10',
                'pcr' => 1302,
                'rtk_ag' => 4163,
                'state' => 'Sabah',
            ),
            98 => 
            array (
                'date' => '2022-01-10',
                'pcr' => 1241,
                'rtk_ag' => 2875,
                'state' => 'Sarawak',
            ),
            99 => 
            array (
                'date' => '2022-01-10',
                'pcr' => 10571,
                'rtk_ag' => 33125,
                'state' => 'Selangor',
            ),
            100 => 
            array (
                'date' => '2022-01-10',
                'pcr' => 547,
                'rtk_ag' => 2871,
                'state' => 'Terengganu',
            ),
            101 => 
            array (
                'date' => '2022-01-10',
                'pcr' => 3581,
                'rtk_ag' => 8060,
                'state' => 'W.P. Kuala Lumpur',
            ),
            102 => 
            array (
                'date' => '2022-01-10',
                'pcr' => 139,
                'rtk_ag' => 698,
                'state' => 'W.P. Labuan',
            ),
            103 => 
            array (
                'date' => '2022-01-10',
                'pcr' => 197,
                'rtk_ag' => 473,
                'state' => 'W.P. Putrajaya',
            ),
            104 => 
            array (
                'date' => '2022-01-11',
                'pcr' => 3256,
                'rtk_ag' => 18800,
                'state' => 'Johor',
            ),
            105 => 
            array (
                'date' => '2022-01-11',
                'pcr' => 845,
                'rtk_ag' => 4645,
                'state' => 'Kedah',
            ),
            106 => 
            array (
                'date' => '2022-01-11',
                'pcr' => 1133,
                'rtk_ag' => 2724,
                'state' => 'Kelantan',
            ),
            107 => 
            array (
                'date' => '2022-01-11',
                'pcr' => 1023,
                'rtk_ag' => 3264,
                'state' => 'Melaka',
            ),
            108 => 
            array (
                'date' => '2022-01-11',
                'pcr' => 951,
                'rtk_ag' => 3741,
                'state' => 'Negeri Sembilan',
            ),
            109 => 
            array (
                'date' => '2022-01-11',
                'pcr' => 699,
                'rtk_ag' => 3308,
                'state' => 'Pahang',
            ),
            110 => 
            array (
                'date' => '2022-01-11',
                'pcr' => 1031,
                'rtk_ag' => 6472,
                'state' => 'Perak',
            ),
            111 => 
            array (
                'date' => '2022-01-11',
                'pcr' => 26,
                'rtk_ag' => 236,
                'state' => 'Perlis',
            ),
            112 => 
            array (
                'date' => '2022-01-11',
                'pcr' => 1237,
                'rtk_ag' => 6619,
                'state' => 'Pulau Pinang',
            ),
            113 => 
            array (
                'date' => '2022-01-11',
                'pcr' => 1827,
                'rtk_ag' => 3408,
                'state' => 'Sabah',
            ),
            114 => 
            array (
                'date' => '2022-01-11',
                'pcr' => 1147,
                'rtk_ag' => 2246,
                'state' => 'Sarawak',
            ),
            115 => 
            array (
                'date' => '2022-01-11',
                'pcr' => 12190,
                'rtk_ag' => 25407,
                'state' => 'Selangor',
            ),
            116 => 
            array (
                'date' => '2022-01-11',
                'pcr' => 529,
                'rtk_ag' => 2598,
                'state' => 'Terengganu',
            ),
            117 => 
            array (
                'date' => '2022-01-11',
                'pcr' => 4398,
                'rtk_ag' => 5592,
                'state' => 'W.P. Kuala Lumpur',
            ),
            118 => 
            array (
                'date' => '2022-01-11',
                'pcr' => 145,
                'rtk_ag' => 429,
                'state' => 'W.P. Labuan',
            ),
            119 => 
            array (
                'date' => '2022-01-11',
                'pcr' => 209,
                'rtk_ag' => 350,
                'state' => 'W.P. Putrajaya',
            ),
            120 => 
            array (
                'date' => '2022-01-12',
                'pcr' => 3296,
                'rtk_ag' => 16416,
                'state' => 'Johor',
            ),
            121 => 
            array (
                'date' => '2022-01-12',
                'pcr' => 759,
                'rtk_ag' => 5596,
                'state' => 'Kedah',
            ),
            122 => 
            array (
                'date' => '2022-01-12',
                'pcr' => 1312,
                'rtk_ag' => 2677,
                'state' => 'Kelantan',
            ),
            123 => 
            array (
                'date' => '2022-01-12',
                'pcr' => 725,
                'rtk_ag' => 3401,
                'state' => 'Melaka',
            ),
            124 => 
            array (
                'date' => '2022-01-12',
                'pcr' => 679,
                'rtk_ag' => 8135,
                'state' => 'Negeri Sembilan',
            ),
            125 => 
            array (
                'date' => '2022-01-12',
                'pcr' => 558,
                'rtk_ag' => 3192,
                'state' => 'Pahang',
            ),
            126 => 
            array (
                'date' => '2022-01-12',
                'pcr' => 829,
                'rtk_ag' => 6153,
                'state' => 'Perak',
            ),
            127 => 
            array (
                'date' => '2022-01-12',
                'pcr' => 12,
                'rtk_ag' => 273,
                'state' => 'Perlis',
            ),
            128 => 
            array (
                'date' => '2022-01-12',
                'pcr' => 1265,
                'rtk_ag' => 6548,
                'state' => 'Pulau Pinang',
            ),
            129 => 
            array (
                'date' => '2022-01-12',
                'pcr' => 1636,
                'rtk_ag' => 3155,
                'state' => 'Sabah',
            ),
            130 => 
            array (
                'date' => '2022-01-12',
                'pcr' => 865,
                'rtk_ag' => 2759,
                'state' => 'Sarawak',
            ),
            131 => 
            array (
                'date' => '2022-01-12',
                'pcr' => 10814,
                'rtk_ag' => 21003,
                'state' => 'Selangor',
            ),
            132 => 
            array (
                'date' => '2022-01-12',
                'pcr' => 594,
                'rtk_ag' => 2990,
                'state' => 'Terengganu',
            ),
            133 => 
            array (
                'date' => '2022-01-12',
                'pcr' => 5160,
                'rtk_ag' => 5711,
                'state' => 'W.P. Kuala Lumpur',
            ),
            134 => 
            array (
                'date' => '2022-01-12',
                'pcr' => 132,
                'rtk_ag' => 428,
                'state' => 'W.P. Labuan',
            ),
            135 => 
            array (
                'date' => '2022-01-12',
                'pcr' => 178,
                'rtk_ag' => 356,
                'state' => 'W.P. Putrajaya',
            ),
            136 => 
            array (
                'date' => '2022-01-13',
                'pcr' => 2505,
                'rtk_ag' => 9356,
                'state' => 'Johor',
            ),
            137 => 
            array (
                'date' => '2022-01-13',
                'pcr' => 1031,
                'rtk_ag' => 1927,
                'state' => 'Kedah',
            ),
            138 => 
            array (
                'date' => '2022-01-13',
                'pcr' => 1198,
                'rtk_ag' => 158,
                'state' => 'Kelantan',
            ),
            139 => 
            array (
                'date' => '2022-01-13',
                'pcr' => 836,
                'rtk_ag' => 2497,
                'state' => 'Melaka',
            ),
            140 => 
            array (
                'date' => '2022-01-13',
                'pcr' => 1189,
                'rtk_ag' => 1003,
                'state' => 'Negeri Sembilan',
            ),
            141 => 
            array (
                'date' => '2022-01-13',
                'pcr' => 553,
                'rtk_ag' => 3927,
                'state' => 'Pahang',
            ),
            142 => 
            array (
                'date' => '2022-01-13',
                'pcr' => 1011,
                'rtk_ag' => 6688,
                'state' => 'Perak',
            ),
            143 => 
            array (
                'date' => '2022-01-13',
                'pcr' => 15,
                'rtk_ag' => 212,
                'state' => 'Perlis',
            ),
            144 => 
            array (
                'date' => '2022-01-13',
                'pcr' => 1383,
                'rtk_ag' => 4633,
                'state' => 'Pulau Pinang',
            ),
            145 => 
            array (
                'date' => '2022-01-13',
                'pcr' => 1495,
                'rtk_ag' => 460,
                'state' => 'Sabah',
            ),
            146 => 
            array (
                'date' => '2022-01-13',
                'pcr' => 813,
                'rtk_ag' => 354,
                'state' => 'Sarawak',
            ),
            147 => 
            array (
                'date' => '2022-01-13',
                'pcr' => 10448,
                'rtk_ag' => 18058,
                'state' => 'Selangor',
            ),
            148 => 
            array (
                'date' => '2022-01-13',
                'pcr' => 567,
                'rtk_ag' => 2188,
                'state' => 'Terengganu',
            ),
            149 => 
            array (
                'date' => '2022-01-13',
                'pcr' => 5550,
                'rtk_ag' => 2480,
                'state' => 'W.P. Kuala Lumpur',
            ),
            150 => 
            array (
                'date' => '2022-01-13',
                'pcr' => 111,
                'rtk_ag' => 52,
                'state' => 'W.P. Labuan',
            ),
            151 => 
            array (
                'date' => '2022-01-13',
                'pcr' => 148,
                'rtk_ag' => 107,
                'state' => 'W.P. Putrajaya',
            ),
            152 => 
            array (
                'date' => '2022-01-14',
                'pcr' => 2876,
                'rtk_ag' => 21932,
                'state' => 'Johor',
            ),
            153 => 
            array (
                'date' => '2022-01-14',
                'pcr' => 762,
                'rtk_ag' => 6618,
                'state' => 'Kedah',
            ),
            154 => 
            array (
                'date' => '2022-01-14',
                'pcr' => 1235,
                'rtk_ag' => 3064,
                'state' => 'Kelantan',
            ),
            155 => 
            array (
                'date' => '2022-01-14',
                'pcr' => 710,
                'rtk_ag' => 2744,
                'state' => 'Melaka',
            ),
            156 => 
            array (
                'date' => '2022-01-14',
                'pcr' => 1551,
                'rtk_ag' => 6306,
                'state' => 'Negeri Sembilan',
            ),
            157 => 
            array (
                'date' => '2022-01-14',
                'pcr' => 561,
                'rtk_ag' => 3408,
                'state' => 'Pahang',
            ),
            158 => 
            array (
                'date' => '2022-01-14',
                'pcr' => 941,
                'rtk_ag' => 4785,
                'state' => 'Perak',
            ),
            159 => 
            array (
                'date' => '2022-01-14',
                'pcr' => 11,
                'rtk_ag' => 230,
                'state' => 'Perlis',
            ),
            160 => 
            array (
                'date' => '2022-01-14',
                'pcr' => 1567,
                'rtk_ag' => 8595,
                'state' => 'Pulau Pinang',
            ),
            161 => 
            array (
                'date' => '2022-01-14',
                'pcr' => 1379,
                'rtk_ag' => 5349,
                'state' => 'Sabah',
            ),
            162 => 
            array (
                'date' => '2022-01-14',
                'pcr' => 953,
                'rtk_ag' => 3943,
                'state' => 'Sarawak',
            ),
            163 => 
            array (
                'date' => '2022-01-14',
                'pcr' => 9304,
                'rtk_ag' => 17772,
                'state' => 'Selangor',
            ),
            164 => 
            array (
                'date' => '2022-01-14',
                'pcr' => 203,
                'rtk_ag' => 1408,
                'state' => 'Terengganu',
            ),
            165 => 
            array (
                'date' => '2022-01-14',
                'pcr' => 3565,
                'rtk_ag' => 7538,
                'state' => 'W.P. Kuala Lumpur',
            ),
            166 => 
            array (
                'date' => '2022-01-14',
                'pcr' => 158,
                'rtk_ag' => 762,
                'state' => 'W.P. Labuan',
            ),
            167 => 
            array (
                'date' => '2022-01-14',
                'pcr' => 178,
                'rtk_ag' => 532,
                'state' => 'W.P. Putrajaya',
            ),
            168 => 
            array (
                'date' => '2022-01-15',
                'pcr' => 2555,
                'rtk_ag' => 13418,
                'state' => 'Johor',
            ),
            169 => 
            array (
                'date' => '2022-01-15',
                'pcr' => 777,
                'rtk_ag' => 4713,
                'state' => 'Kedah',
            ),
            170 => 
            array (
                'date' => '2022-01-15',
                'pcr' => 733,
                'rtk_ag' => 1686,
                'state' => 'Kelantan',
            ),
            171 => 
            array (
                'date' => '2022-01-15',
                'pcr' => 930,
                'rtk_ag' => 1716,
                'state' => 'Melaka',
            ),
            172 => 
            array (
                'date' => '2022-01-15',
                'pcr' => 956,
                'rtk_ag' => 5843,
                'state' => 'Negeri Sembilan',
            ),
            173 => 
            array (
                'date' => '2022-01-15',
                'pcr' => 442,
                'rtk_ag' => 2061,
                'state' => 'Pahang',
            ),
            174 => 
            array (
                'date' => '2022-01-15',
                'pcr' => 767,
                'rtk_ag' => 4346,
                'state' => 'Perak',
            ),
            175 => 
            array (
                'date' => '2022-01-15',
                'pcr' => 23,
                'rtk_ag' => 152,
                'state' => 'Perlis',
            ),
            176 => 
            array (
                'date' => '2022-01-15',
                'pcr' => 1377,
                'rtk_ag' => 4675,
                'state' => 'Pulau Pinang',
            ),
            177 => 
            array (
                'date' => '2022-01-15',
                'pcr' => 1365,
                'rtk_ag' => 2320,
                'state' => 'Sabah',
            ),
            178 => 
            array (
                'date' => '2022-01-15',
                'pcr' => 934,
                'rtk_ag' => 1281,
                'state' => 'Sarawak',
            ),
            179 => 
            array (
                'date' => '2022-01-15',
                'pcr' => 10600,
                'rtk_ag' => 13402,
                'state' => 'Selangor',
            ),
            180 => 
            array (
                'date' => '2022-01-15',
                'pcr' => 435,
                'rtk_ag' => 2850,
                'state' => 'Terengganu',
            ),
            181 => 
            array (
                'date' => '2022-01-15',
                'pcr' => 3482,
                'rtk_ag' => 3418,
                'state' => 'W.P. Kuala Lumpur',
            ),
            182 => 
            array (
                'date' => '2022-01-15',
                'pcr' => 77,
                'rtk_ag' => 225,
                'state' => 'W.P. Labuan',
            ),
            183 => 
            array (
                'date' => '2022-01-15',
                'pcr' => 144,
                'rtk_ag' => 171,
                'state' => 'W.P. Putrajaya',
            ),
            184 => 
            array (
                'date' => '2022-01-16',
                'pcr' => 2290,
                'rtk_ag' => 14851,
                'state' => 'Johor',
            ),
            185 => 
            array (
                'date' => '2022-01-16',
                'pcr' => 782,
                'rtk_ag' => 5205,
                'state' => 'Kedah',
            ),
            186 => 
            array (
                'date' => '2022-01-16',
                'pcr' => 811,
                'rtk_ag' => 3342,
                'state' => 'Kelantan',
            ),
            187 => 
            array (
                'date' => '2022-01-16',
                'pcr' => 610,
                'rtk_ag' => 1603,
                'state' => 'Melaka',
            ),
            188 => 
            array (
                'date' => '2022-01-16',
                'pcr' => 682,
                'rtk_ag' => 2133,
                'state' => 'Negeri Sembilan',
            ),
            189 => 
            array (
                'date' => '2022-01-16',
                'pcr' => 311,
                'rtk_ag' => 2874,
                'state' => 'Pahang',
            ),
            190 => 
            array (
                'date' => '2022-01-16',
                'pcr' => 623,
                'rtk_ag' => 4804,
                'state' => 'Perak',
            ),
            191 => 
            array (
                'date' => '2022-01-16',
                'pcr' => 14,
                'rtk_ag' => 191,
                'state' => 'Perlis',
            ),
            192 => 
            array (
                'date' => '2022-01-16',
                'pcr' => 900,
                'rtk_ag' => 4724,
                'state' => 'Pulau Pinang',
            ),
            193 => 
            array (
                'date' => '2022-01-16',
                'pcr' => 1111,
                'rtk_ag' => 2107,
                'state' => 'Sabah',
            ),
            194 => 
            array (
                'date' => '2022-01-16',
                'pcr' => 868,
                'rtk_ag' => 1228,
                'state' => 'Sarawak',
            ),
            195 => 
            array (
                'date' => '2022-01-16',
                'pcr' => 7781,
                'rtk_ag' => 16222,
                'state' => 'Selangor',
            ),
            196 => 
            array (
                'date' => '2022-01-16',
                'pcr' => 384,
                'rtk_ag' => 3809,
                'state' => 'Terengganu',
            ),
            197 => 
            array (
                'date' => '2022-01-16',
                'pcr' => 2109,
                'rtk_ag' => 4573,
                'state' => 'W.P. Kuala Lumpur',
            ),
            198 => 
            array (
                'date' => '2022-01-16',
                'pcr' => 95,
                'rtk_ag' => 407,
                'state' => 'W.P. Labuan',
            ),
            199 => 
            array (
                'date' => '2022-01-16',
                'pcr' => 82,
                'rtk_ag' => 185,
                'state' => 'W.P. Putrajaya',
            ),
            200 => 
            array (
                'date' => '2022-01-17',
                'pcr' => 3808,
                'rtk_ag' => 23100,
                'state' => 'Johor',
            ),
            201 => 
            array (
                'date' => '2022-01-17',
                'pcr' => 803,
                'rtk_ag' => 6040,
                'state' => 'Kedah',
            ),
            202 => 
            array (
                'date' => '2022-01-17',
                'pcr' => 1411,
                'rtk_ag' => 3092,
                'state' => 'Kelantan',
            ),
            203 => 
            array (
                'date' => '2022-01-17',
                'pcr' => 584,
                'rtk_ag' => 6028,
                'state' => 'Melaka',
            ),
            204 => 
            array (
                'date' => '2022-01-17',
                'pcr' => 481,
                'rtk_ag' => 6236,
                'state' => 'Negeri Sembilan',
            ),
            205 => 
            array (
                'date' => '2022-01-17',
                'pcr' => 363,
                'rtk_ag' => 4676,
                'state' => 'Pahang',
            ),
            206 => 
            array (
                'date' => '2022-01-17',
                'pcr' => 729,
                'rtk_ag' => 8645,
                'state' => 'Perak',
            ),
            207 => 
            array (
                'date' => '2022-01-17',
                'pcr' => 15,
                'rtk_ag' => 268,
                'state' => 'Perlis',
            ),
            208 => 
            array (
                'date' => '2022-01-17',
                'pcr' => 1282,
                'rtk_ag' => 9471,
                'state' => 'Pulau Pinang',
            ),
            209 => 
            array (
                'date' => '2022-01-17',
                'pcr' => 1190,
                'rtk_ag' => 4033,
                'state' => 'Sabah',
            ),
            210 => 
            array (
                'date' => '2022-01-17',
                'pcr' => 1156,
                'rtk_ag' => 3023,
                'state' => 'Sarawak',
            ),
            211 => 
            array (
                'date' => '2022-01-17',
                'pcr' => 12634,
                'rtk_ag' => 27045,
                'state' => 'Selangor',
            ),
            212 => 
            array (
                'date' => '2022-01-17',
                'pcr' => 477,
                'rtk_ag' => 2960,
                'state' => 'Terengganu',
            ),
            213 => 
            array (
                'date' => '2022-01-17',
                'pcr' => 5775,
                'rtk_ag' => 6845,
                'state' => 'W.P. Kuala Lumpur',
            ),
            214 => 
            array (
                'date' => '2022-01-17',
                'pcr' => 102,
                'rtk_ag' => 892,
                'state' => 'W.P. Labuan',
            ),
            215 => 
            array (
                'date' => '2022-01-17',
                'pcr' => 310,
                'rtk_ag' => 463,
                'state' => 'W.P. Putrajaya',
            ),
            216 => 
            array (
                'date' => '2022-01-18',
                'pcr' => 2557,
                'rtk_ag' => 18490,
                'state' => 'Johor',
            ),
            217 => 
            array (
                'date' => '2022-01-18',
                'pcr' => 791,
                'rtk_ag' => 5269,
                'state' => 'Kedah',
            ),
            218 => 
            array (
                'date' => '2022-01-18',
                'pcr' => 1285,
                'rtk_ag' => 3285,
                'state' => 'Kelantan',
            ),
            219 => 
            array (
                'date' => '2022-01-18',
                'pcr' => 1060,
                'rtk_ag' => 3844,
                'state' => 'Melaka',
            ),
            220 => 
            array (
                'date' => '2022-01-18',
                'pcr' => 675,
                'rtk_ag' => 3790,
                'state' => 'Negeri Sembilan',
            ),
            221 => 
            array (
                'date' => '2022-01-18',
                'pcr' => 565,
                'rtk_ag' => 3305,
                'state' => 'Pahang',
            ),
            222 => 
            array (
                'date' => '2022-01-18',
                'pcr' => 988,
                'rtk_ag' => 5530,
                'state' => 'Perak',
            ),
            223 => 
            array (
                'date' => '2022-01-18',
                'pcr' => 23,
                'rtk_ag' => 240,
                'state' => 'Perlis',
            ),
            224 => 
            array (
                'date' => '2022-01-18',
                'pcr' => 1466,
                'rtk_ag' => 5003,
                'state' => 'Pulau Pinang',
            ),
            225 => 
            array (
                'date' => '2022-01-18',
                'pcr' => 1441,
                'rtk_ag' => 3100,
                'state' => 'Sabah',
            ),
            226 => 
            array (
                'date' => '2022-01-18',
                'pcr' => 1223,
                'rtk_ag' => 2711,
                'state' => 'Sarawak',
            ),
            227 => 
            array (
                'date' => '2022-01-18',
                'pcr' => 10385,
                'rtk_ag' => 17360,
                'state' => 'Selangor',
            ),
            228 => 
            array (
                'date' => '2022-01-18',
                'pcr' => 443,
                'rtk_ag' => 2613,
                'state' => 'Terengganu',
            ),
            229 => 
            array (
                'date' => '2022-01-18',
                'pcr' => 3185,
                'rtk_ag' => 3699,
                'state' => 'W.P. Kuala Lumpur',
            ),
            230 => 
            array (
                'date' => '2022-01-18',
                'pcr' => 105,
                'rtk_ag' => 458,
                'state' => 'W.P. Labuan',
            ),
            231 => 
            array (
                'date' => '2022-01-18',
                'pcr' => 271,
                'rtk_ag' => 206,
                'state' => 'W.P. Putrajaya',
            ),
        ));
        
        
    }
}