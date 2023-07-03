<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subjektif;

class SubjektifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Subjektif::create([
            'biodata_id' => '1',
            'keluhan' => 'Testing',
            'riwayat_penyakit' => 'Testing',
            'riwayat_penyakit_keluarga' => 'Testing',
            'menikah_ke' => '4',
            'usia_menikah' => '4',
            'lama_menikah' => '4',
            'HPHT' => '2023-06-01',
            'menarche' => '4',
            'lama_haid' => '4',
            'siklus_haid' => '4',
            'warna' => 'Testing',
            'flour_albus' => 'Testing',
            'riwayat_kehamilan' => 'Testing',
            'riwayat_kb' => 'Testing',
        ]);

        Subjektif::create([
            'biodata_id' => '2',
            'keluhan' => 'Testing',
            'riwayat_penyakit' => 'Testing',
            'riwayat_penyakit_keluarga' => 'Testing',
            'menikah_ke' => '4',
            'usia_menikah' => '4',
            'lama_menikah' => '4',
            'HPHT' => '2023-06-01',
            'menarche' => '4',
            'lama_haid' => '4',
            'siklus_haid' => '4',
            'warna' => 'Testing',
            'flour_albus' => 'Testing',
            'riwayat_kehamilan' => 'Testing',
            'riwayat_kb' => 'Testing',
        ]);
    }
}
