<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjektif extends Model
{
    use HasFactory;

    /**
     * comments
     *
     * @return void
     */
    public function biodata()
    {
        return $this->belongsTo(Biodata::class, 'id');
    }

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'biodata_id',
        'keluhan',
        'riwayat_penyakit',
        'riwayat_penyakit_keluarga',
        'menikah_ke',
        'usia_menikah',
        'lama_menikah',
        'HPHT',
        'menarche',
        'lama_haid',
        'siklus_haid',
        'warna',
        'flour_albus',
        'riwayat_kehamilan',
        'riwayat_kb',
    ];
}
