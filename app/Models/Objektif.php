<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objektif extends Model
{
    use HasFactory;

    /**
     * comments
     *
     * @return void
     */
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
        'kesadaran',
        'tekanan_darah',
        'suhu',
        'nadi',
        'respirasi',
        'bb',
        'tb',
        'kepala',
        'rambut',
        'muka',
        'mata',
        'hidung',
        'telinga',
        'mulut',
        'leher',
        'dada',
        'abdomen',
        'leopold1',
        'leopold2',
        'leopold3',
        'leopold4',
        'genetalia',
        'eks_atas',
        'eks_bawah',
    ];
}
