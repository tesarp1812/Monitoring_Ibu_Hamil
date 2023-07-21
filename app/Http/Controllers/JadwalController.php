<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkup;
use Illuminate\Support\Carbon;
use App\Models\Jadwal;
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

    public function jadwal()
    {
        $jadwal = Jadwal::get();
        //dd($jadwal);
        return view('/jadwal_kunjung', compact('jadwal'));
    }

    public function edit($id)
    {
        //tampil jadwal
        $tampil = Jadwal::get();
        //dd($tampil);
        $jadwal = Jadwal::where('id', $id)->first();
        //dd($jadwal);
        return view('edit_jadwal', compact('tampil', 'jadwal'));
    }

    public function update(Request $request, $id)
    {
        $jadwal = Jadwal::find($id);
        $jadwal->hari = $request->inputhari;
        $jadwal->jam1 = $request->inputjam1;
        $jadwal->jam2 = $request->inputjam2;
        $jadwal->lokasi = $request->inputlok;
        $jadwal->save();
        return redirect('/jadwal_kunjung')->with(['success' => 'Data Berhasil Diubah!']);
    }
}
