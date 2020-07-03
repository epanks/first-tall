<?php

use Illuminate\Database\Seeder;

class PpkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `ppk` (`id`, `nmppk`, `jabatanppk`, `kdsatker`, `phone`, `wilayah_id`, `balai_id`, `created_at`, `updated_at`) VALUES
        (1, 'Vivie Panelewen, ST', 'PPK I', '06498277', '081198951515', 3, 25, NULL, '2020-06-23 01:18:13'),
        (2, 'Romie Rihardson Tongkeles, ST, MT', 'PPK II', '06498277', NULL, 3, 25, '2020-06-22 19:01:28', '2020-06-23 01:18:33'),
        (3, 'Ridwan D Modanggu, ST', 'PPK I', '06498287', NULL, 3, 26, '2020-06-23 01:18:59', '2020-06-23 01:18:59'),
        (4, 'Maryam D Nunu, ST', 'PPK II', '06498287', NULL, 3, 26, '2020-06-23 01:19:14', '2020-06-23 01:19:14'),
        (5, 'Elieser Plantik, ST', 'PPK I', '06498297', NULL, 3, 27, '2020-06-23 01:19:40', '2020-06-23 01:19:40'),
        (6, 'Irvan Hamid. ST', 'PPK I', '06498327', NULL, 3, 27, '2020-06-23 01:19:53', '2020-06-23 01:19:53'),
        (7, 'Jose Rizal Luhut Marolop P, ST. M.Si', 'PPK I', '06498317', NULL, 3, 28, '2020-06-23 01:20:09', '2020-06-23 01:20:09'),
        (8, 'Wagio, ST', 'PPK II', '06498317', NULL, 3, 28, '2020-06-23 01:20:50', '2020-06-23 01:20:50'),
        (9, 'Zularifin, ST.', 'PAB I', '06498307', NULL, 3, 29, '2020-06-23 01:21:13', '2020-06-23 01:21:13'),
        (10, 'Achsan, ST, MT', 'PAB II', '06498307', NULL, 3, 29, '2020-06-23 01:21:34', '2020-06-23 01:21:34'),
        (11, 'Arman Achmat, SST, MT', 'PAT I', '06498307', NULL, 3, 29, '2020-06-23 01:21:53', '2020-06-23 01:21:53'),
        (12, 'Rakhmat Adi Cipta, ST', 'PAT II', '06498307', NULL, 3, 29, '2020-06-23 01:22:10', '2020-06-23 01:22:10'),
        (13, 'Jhon D.F. Hauisa, ST', 'PPK I', '06498337', NULL, 3, 30, '2020-06-23 01:22:31', '2020-06-23 01:22:31'),
        (14, 'Zainal, ST', 'PPK I', '06498637', NULL, 3, 31, '2020-06-23 01:22:48', '2020-06-23 01:22:48'),
        (15, 'Mohammad Fauzi, SP, MT', 'PPK I', '06498637', NULL, 3, 31, '2020-06-23 01:23:08', '2020-06-23 01:23:08'),
        (16, 'Wilhemson Markus Imbiri,ST,MT', 'PPK I', '06498349', NULL, 3, 33, '2020-06-23 01:23:41', '2020-06-23 01:23:41'),
        (17, 'H. Rudy, ST, MT', 'PPK I', '06498357', NULL, 3, 34, '2020-06-23 01:23:55', '2020-06-23 01:23:55');");
    }
}
