<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkup;
use Illuminate\Support\Carbon;
use Illuminate\View\View;

class JadwalController extends Controller
{
    //
    public function index()
    {
        //format data hari ini
        $today = Carbon::now()->format('Y-m-d');
        //get data hari ini
        $date = Checkup::Wheredate('jadwal_kembali', $today)->with('biodata')->get();
        //dd($date);

        // format data besok
        $tomorrow = Carbon::now()->addDay()->format('Y-m-d');
        //get data besok
        $dateTomorrow = Checkup::whereDate('jadwal_kembali', $tomorrow)->with('biodata')->get();
        //dd($date, $dateTomorrow);


        return View('jadwal', compact('date', 'dateTomorrow'));
    }
}
