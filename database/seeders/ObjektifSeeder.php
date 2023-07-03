<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Objektif;

class ObjektifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Objektif::create([
            'biodata_id' => '1',
            'kesadaran' => 'test',
            'tekanan_darah' => '12',
            'suhu' => '11',
            'nadi' => '11',
            'respirasi' => '11',
            'bb' => '11',
            'tb' => '11',
            'kepala' => 'test',
            'rambut' => 'test',
            'muka' => 'test',
            'mata' => 'test',
            'hidung' => 'test',
            'telinga' => 'test',
            'mulut' => 'test',
            'leher' => 'test',
            'dada' => 'test',
            'abdomen' => 'test',
            'leopold1' => 'test',
            'leopold2' => 'test',
            'leopold3' => 'test',
            'leopold4' => 'test',
            'genetalia' => 'test',
            'eks_atas' => 'test',
            'eks_bawah' => 'test',
        ]);
    }
}
