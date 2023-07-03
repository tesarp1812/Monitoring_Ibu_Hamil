<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\checkup;

class CheckupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Checkup::create([
            'biodata_id' => '1',
            'tgl' => '2023-06-22',
            'keluhan' => 'test',
            'tekanan' => '3',
            'berat' => '54',
            'tinggi' => '23',
            'letak' => 'kep',
            'djj' => '21',
            'kaki' => '+',
            'hasillab' => 'testing',
            'tindakan' => 'test',
            'nasihat' => 'test',
            'keterangan' => 'test',
            'jadwal_kembali' => '2023-06-30'
        ]);
    }
}
