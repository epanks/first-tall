<?php

use Illuminate\Database\Seeder;

class ProvinsiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `provinsi` (`id`, `kdprovinsi`, `nmprovinsi`,`wilayah_id`) VALUES
        (1, '11', 'ACEH','1'),
        (2, '12', 'SUMATERA UTARA','1'),
        (3, '13', 'SUMATERA BARAT','1'),
        (4, '14', 'RIAU','1'),
        (5, '15', 'JAMBI','1'),
        (6, '16', 'SUMATERA SELATAN','1'),
        (7, '17', 'BENGKULU','1'),
        (8, '18', 'LAMPUNG','1'),
        (9, '19', 'KEPULAUAN BANGKA BELITUNG','1'),
        (10, '21', 'KEPULAUAN RIAU','1'),
        (11, '31', 'DKI JAKARTA','2'),
        (12, '32', 'JAWA BARAT','2'),
        (13, '33', 'JAWA TENGAH','2'),
        (14, '34', 'DI YOGYAKARTA','2'),
        (15, '35', 'JAWA TIMUR','2'),
        (16, '36', 'BANTEN','2'),
        (17, '51', 'BALI','2'),
        (18, '52', 'NUSA TENGGARA BARAT','2'),
        (19, '53', 'NUSA TENGGARA TIMUR','2'),
        (20, '61', 'KALIMANTAN BARAT','1'),
        (21, '62', 'KALIMANTAN TENGAH','1'),
        (22, '63', 'KALIMANTAN SELATAN','1'),
        (23, '64', 'KALIMANTAN TIMUR','1'),
        (24, '65', 'KALIMANTAN UTARA','1'),
        (25, '71', 'SULAWESI UTARA','3'),
        (26, '72', 'SULAWESI TENGAH','3'),
        (27, '73', 'SULAWESI SELATAN','3'),
        (28, '74', 'SULAWESI TENGGARA','3'),
        (29, '75', 'GORONTALO','3'),
        (30, '76', 'SULAWESI BARAT','3'),
        (31, '81', 'MALUKU','3'),
        (32, '82', 'MALUKU UTARA','3'),
        (33, '91', 'PAPUA BARAT','3'),
        (34, '94', 'PAPUA','3');");
    }
}
