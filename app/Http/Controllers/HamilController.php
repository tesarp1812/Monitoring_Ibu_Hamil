<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Biodata;
use App\Models\Subjektif;
use DateTime;
use DateInterval;

class HamilController extends Controller
{
    //
    function index(Request $request)
    {
        $subjektifData = Subjektif::with('biodata')->get();
        //dd($subjektifData);
        $perkiraanLahir = [];

        foreach ($subjektifData as $subjektif) {
            $tglHPHT = $subjektif->HPHT;

            // Konversi HPHT ke objek DateTime
            $tglHPHTDate = DateTime::createFromFormat('Y-m-d', $tglHPHT);

            // Tambahkan 280 hari ke HPHT untuk perkiraan lahir
            $hpl = $tglHPHTDate->add(new DateInterval('P280D'));

            // Format tanggal perkiraan lahir
            $hplFormat = $hpl->format('Y-m-d');

            $namaPasien = $subjektif->biodata ? $subjektif->biodata->nama : 'Nama Pasien Tidak Tersedia';

            $perkiraanLahir[] = [
                'biodata_id' => $subjektif->biodata_id,
                'nama' => $namaPasien,
                'hpht' => $tglHPHT,
                'hpl' => $hplFormat,
            ];
        }

        return view('/hamil', compact('perkiraanLahir'));
    }

    function biodata()
    {
        $cek = Biodata::with('subjektif')->get();
        //dd($cek);
        return view('/cek', compact('cek'));
    }
}
