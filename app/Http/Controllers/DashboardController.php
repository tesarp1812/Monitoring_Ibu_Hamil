<?php

namespace App\Http\Controllers;

use App\Charts\GrafikChart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\checkup;
use Carbon\Carbon;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('/dashboard');
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
