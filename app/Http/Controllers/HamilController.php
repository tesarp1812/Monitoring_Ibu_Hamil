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
                'hpht' => $tglHPHT,
                'hpl' => $hplFormat,
            ];
        }

        return view('/hamil', compact('perkiraanLahir'));
    }

    function biodata()
    {
        $biodata = Biodata::with('subjektif')->get();
        //dd($biodata);
    
        foreach ($biodata as $data) {
            $subjektif = $data->subjektif;
    
            if ($subjektif) {
                $tglHPHT = $subjektif->HPHT;
    
                // Konversi HPHT ke objek DateTime
                $tglHPHTDate = DateTime::createFromFormat('Y-m-d', $tglHPHT);
    
                // Tambahkan 280 hari ke HPHT untuk perkiraan lahir (HPL)
                $hpl = $tglHPHTDate->add(new DateInterval('P280D'));
    
                // Format tanggal perkiraan lahir (HPL)
                $hplFormat = $hpl->format('Y-m-d');
                //dd($hplFormat);
    
                // Tambahkan data HPL ke objek subjektif
                $subjektif->HPL = $hplFormat;
            }
        }
    
        return view('cek', compact('biodata'));
    }
}
