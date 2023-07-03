<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class checkup extends Model
{
    use HasFactory;

    public function biodata()
    {
        return $this->belongsTo(Biodata::class);
    }

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'biodata_id',
        'tgl',
        'keluhan',
        'tekanan',
        'berat',
        'tinggi',
        'letak',
        'djj',
        'kaki',
        'hasillab',
        'tindakan',
        'nasihat',
        'keterangan',
        'jadwal_kembali',
    ];
}
