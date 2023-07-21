<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'hari',
        'jam1',
        'min1',
        'jam2',
        'min2',
        'lokasi',
    ];
}
