<?php

use Illuminate\Database\Seeder;

class SatkerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `satker` (`id`, `kdsatker`, `nmsatker`, `no_tlp_satker`, `balai_id`, `wilayah_id`) VALUES
        (1, '06633713', 'Balai Wilayah Sungai Sumatera I', NULL, 1, 1),
        (2, '06498017', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air  Sumatera I Provinsi Aceh', NULL, 1, 1),
        (3, '06633722', 'Balai Wilayah Sungai Sumatera II', NULL, 2, 1),
        (4, '06498027', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air  Sumatera II Provinsi Sumatera Utara', NULL, 2, 1),
        (5, '06633738', 'Balai Wilayah Sungai Sumatera III', NULL, 3, 1),
        (6, '06498037', 'Satker  PJPA WS.Indragiri Akuaman,WS Kampar, WS Rokan,WS Siak  Provinsi  Riau', NULL, 3, 1),
        (7, '06633744', 'Balai Wilayah Sungai Sumatera IV', NULL, 4, 1),
        (8, '06498047', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air  Sumatera IV Provinsi Kepulauan Riau', NULL, 4, 1),
        (9, '06633750', 'Balai Wilayah Sungai Sumatera V', NULL, 5, 1),
        (10, '06498039', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air WS. Indragiri-Akuaman, WS. Kampar, WS. Rokan Provinsi Sumatera Barat', NULL, 5, 1),
        (11, '06498078', 'PJPA WS. Batanghari Provinsi Sumatera Barat', NULL, 5, 1),
        (12, '06633755', 'Balai Wilayah Sungai Sumatera VI', NULL, 6, 1),
        (13, '06498067', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air WS. Batanghari Provinsi Jambi', NULL, 6, 1),
        (14, '06633769', 'Balai Wilayah Sungai Sumatera VII', NULL, 7, 1),
        (15, '06498087', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air  Sumatera VII Provinsi Bengkulu', NULL, 7, 1),
        (16, '06633781', 'Balai Besar Wilayah Sungai Sumatera VIII', NULL, 8, 1),
        (17, '06498098', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air  Sumatera VIII Provinsi Bangka Belitung', NULL, 8, 1),
        (18, '06498097', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air  Sumatera VIII Provinsi Sumatera Selatan', NULL, 8, 1),
        (19, '06633790', 'Balai Besar Wilayah Sungai Mesuji Sekampung', NULL, 9, 1),
        (20, '06498107', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Mesuji-Sekampung', NULL, 9, 1),
        (21, '06633801', 'Balai Besar Wilayah Sungai Cidanau-Ciujung-Cidurian', NULL, 10, 2),
        (22, '06498022', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Cidanau_Ciujung_Cidurian', NULL, 10, 2),
        (23, '06633810', 'Balai Besar Wilayah Sungai Ciliwung-Cisadane', NULL, 11, 2),
        (24, '06498031', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Ciliwung-Cisadane', NULL, 11, 2),
        (25, '06633826', 'Balai Besar Wilayah Sungai Citarum', NULL, 12, 2),
        (26, '06498136', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Citarum', NULL, 12, 2),
        (27, '06633841', 'Balai Besar Wilayah Sungai Cimanuk-Cisanggarung', NULL, 13, 2),
        (28, '06498162', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Cimanuk-Cisanggarung', NULL, 13, 2),
        (29, '06633832', 'Balai Besar Wilayah Sungai Citanduy', NULL, 14, 2),
        (30, '06498145', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Citanduy', NULL, 14, 2),
        (31, '06633857', 'Balai Besar Wilayah Sungai Pemali-Juana', NULL, 15, 2),
        (32, '06498167', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Pemali Juana', NULL, 15, 2),
        (33, '06633863', 'Balai Besar Wilayah Sungai Serayu - Opak', NULL, 16, 2),
        (34, '06498177', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Serayu-Opak', NULL, 16, 2),
        (35, '06633872', 'Balai Besar Wilayah Sungai Bengawan Solo', NULL, 17, 2),
        (36, '06498187', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Bengawan Solo', NULL, 17, 2),
        (37, '06633888', 'Balai Besar Wilayah Sungai Brantas', NULL, 18, 2),
        (38, '06498197', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Brantas', NULL, 18, 2),
        (39, '06633920', 'Balai Wilayah Sungai Bali-Penida', NULL, 19, 2),
        (40, '06498248', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Bali-Penida', NULL, 19, 2),
        (41, '06633939', 'Balai Wilayah Sungai Nusa Tenggara I', NULL, 20, 3),
        (42, '06498257', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Nusa Tenggara I Provinsi Nusa Tenggara Barat', NULL, 20, 3),
        (43, '06633945', 'Balai Wilayah Sungai Nusa Tenggara II', NULL, 21, 3),
        (44, '06400712', 'SNVT Air Tanah dan Air Baku Nusa Tenggara II Provinsi Nusa Tenggara Timur', NULL, 21, 3),
        (45, '06633894', 'Balai Wilayah Sungai Kalimantan I', NULL, 22, 1),
        (46, '06498207', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air WS. Kapuas, WS. Jelai-Kendawangan Provinsi Kalimantan Barat', NULL, 22, 1),
        (47, '06633908', 'Balai Wilayah Sungai Kalimantan II', NULL, 23, 1),
        (48, '06498227', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air WS. Mentaya-Katingan, WS. Barito, WS. Jelai-Kendawangan Provinsi Kalimantan Tengah', NULL, 23, 1),
        (49, '06498217', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air WS. Barito Provinsi Kalimantan Selatan', NULL, 23, 1),
        (50, '06633914', 'Balai Wilayah Sungai Kalimantan III', NULL, 24, 1),
        (51, '06417774', 'SNVT PJPA WS.Sesayap ,WS.Mahakam ,WS.Berau-KelaiI Provinsi Kalimantan Utara', NULL, 24, 1),
        (52, '06498237', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air WS.Mahakam ,WS.Berau-KelaiI Provinsi Kalimantan Timur', NULL, 24, 1),
        (53, '06633951', 'Balai Wilayah Sungai Sulawesi I', NULL, 25, 3),
        (54, '06498277', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Sulawesi I Provinsi Sulawesi Utara', NULL, 25, 3),
        (55, '06633960', 'Balai Wilayah Sungai Sulawesi II', NULL, 26, 3),
        (56, '06498287', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Sulawesi II', NULL, 26, 3),
        (57, '06633976', 'Balai Wilayah Sungai Sulawesi III', NULL, 27, 3),
        (58, '06498297', 'Satuan Kerja Pelaksanaan Jaringan Pemanfaatan Air WS. Palu Lariang, WS. Parigi-Poso, WS. Kaluku-Karama Provinsi Sulawesi Tengah', NULL, 27, 3),
        (59, '06498327', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air WS. Kaluku-Karama, WS. Palu-Lariang Provinsi Sulawesi Barat', NULL, 27, 3),
        (60, '06447900', 'Balai Wilayah Sungai Sulawesi IV Kendari', NULL, 28, 3),
        (61, '06498317', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Sulawesi IV Provinsi Sulawesi Tenggara', NULL, 28, 3),
        (62, '06634011', 'Balai Besar Wilayah Sungai Pompengan-Jeneberang', NULL, 29, 3),
        (63, '06498307', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Pompengan-Jeneberang Provinsi Sulawesi Selatan', NULL, 29, 3),
        (64, '06633991', 'Balai Wilayah Sungai Maluku', NULL, 30, 3),
        (65, '06498337', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Maluku Provinsi Maluku', NULL, 30, 3),
        (66, '06633993', 'Balai Wilayah Sungai Maluku Utara', NULL, 31, 3),
        (67, '06498637', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Maluku Provinsi Maluku Utara', NULL, 31, 3),
        (68, '06634002', 'Balai Wilayah Sungai Papua', NULL, 32, 3),
        (69, '06498347', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Papua Provinsi Papua', NULL, 32, 3),
        (70, '06255163', 'Balai Wilayah Sungai Papua Merauke', NULL, 33, 3),
        (71, '06498349', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Papua Provinsi Papua-Merauke', NULL, 33, 3),
        (72, '06634005', 'Balai Wilayah Sungai Papua Barat', NULL, 34, 3),
        (73, '06498357', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Papua Provinsi Papua Barat', NULL, 34, 3);");
    }
}
