<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KonfigTglSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('konfig_tanggals')->insert([
            'tglAwal' => '2023-01-01',
            'tglAkhir' => '2023-12-31',
            'tahun_anggaran' => '2023',
            'created_at' => '2023-09-03',
            'updated_at' => '2023-09-03',

        ]);
    }
}
