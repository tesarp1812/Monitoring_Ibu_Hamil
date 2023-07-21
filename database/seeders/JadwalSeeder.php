<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jadwal;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Jadwal::create([
            'hari' => 'senin',
            'jam1' => '12',
            'min1' => '30',
            'jam2' => '16',
            'min2' => '00',
            'lokasi' => 'Puskesmas A'
        ]);

        Jadwal::create([
            'hari' => 'selasa',
            'jam1' => '9',
            'min1' => '00',
            'jam2' => '12',
            'min2' => '00',
            'lokasi' => 'Rumah Sakit CA'
        ]);

        Jadwal::create([
            'hari' => 'Kamis',
            'jam1' => '9',
            'min1' => '00',
            'jam2' => '12',
            'min2' => '00',
            'lokasi' => 'Rumah Sakit CA'
        ]);

        Jadwal::create([
            'hari' => 'Kamis',
            'jam1' => '13',
            'min1' => '00',
            'jam2' => '16',
            'min2' => '00',
            'lokasi' => 'Rumah Sakit CA'
        ]);
    }
}
