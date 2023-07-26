<?php

namespace App\Http\Controllers;

use App\Charts\GrafikChart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\checkup;
use App\Models\Biodata;
use Illuminate\Support\Carbon;
use DateTime;
use DateInterval;

class DashboardController extends Controller
{
    // Fungsi untuk menghitung HPL
    private function hitungHPL($tglHPHT)
    {
        $tglHPHTDate = DateTime::createFromFormat('Y-m-d', $tglHPHT);
        $hpl = $tglHPHTDate->add(new DateInterval('P280D'));
        return $hpl->format('Y-m-d');
    }

    //
    public function index()
    {
        $biodata = Biodata::with('subjektif')->paginate(5);
        //dd($biodata);

        foreach ($biodata as $data) {
            $subjektif = $data->subjektif;
            if ($subjektif) {
                $tglHPHT = $subjektif->HPHT;
                $hplFormat = $this->hitungHPL($tglHPHT);
                $subjektif->HPL = $hplFormat;
            }
        }

        return view('/dashboard', compact('biodata'));
    }

    public function grafik()
    {
        $id = 1;
        $berat = Checkup::where('biodata_id', $id)->pluck('berat');
        //dd($berat);

        $tanggal = Checkup::where('biodata_id', $id)->pluck('tgl');
        //dd($tgl);

        $tgl = $tanggal->map(function ($date) {
            return Carbon::parse($date)->translatedFormat('d-m-Y');
        });

        //dd($tglFormatted);
        return view('/grafik', compact('berat', 'tgl'));
    }
}
