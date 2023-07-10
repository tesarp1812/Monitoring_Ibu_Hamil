<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Subjektif;
use Illuminate\View\View;

use Illuminate\Http\Request;

class SubjektifController extends Controller
{

    

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $subjektif = Subjektif::with('biodata')->where('biodata_id', $request->id)->first();
        //dd($subjektif);
        return view('subjektif', ['subjek' => $subjektif, 'biodata_id' => $request->id]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        return view('form_tambah_subjektif', ['id' => $request->id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Subjektif::create([
            'biodata_id' => $request->inputbiodata,
            'keluhan' => $request->inputkeluhan,
            'riwayat_penyakit' => $request->inputriwayat_penyakit,
            'riwayat_penyakit_keluarga' => $request->inputriwayat_penyakit_keluarga,
            'menikah_ke' => $request->inputmenikah_ke,
            'usia_menikah' => $request->inputusia_menikah,
            'lama_menikah' => $request->inputlama_menikah,
            'HPHT' => $request->inputHPHT,
            'menarche' => $request->inputmenarche,
            'lama_haid' => $request->inputlama_haid,
            'siklus_haid' => $request->inputsiklus_haid,
            'warna' => $request->inputwarna,
            'flour_albus' => $request->inputflour_albus,
            'riwayat_kehamilan' => $request->inputriwayat_kehamilan,
            'riwayat_kb' => $request->inputriwayat_kb,
        ]);

        return redirect('/subjektif/' . $request->input('inputbiodata'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $subjektif = Subjektif::where('biodata_id', $id);
        //dd($id);
        return view('data_subjektif', compact('subjektif'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $subjektif = Subjektif::where('biodata_id', $id)->first();
        //$subjektif = Subjektif::find($id);
        // 
        //dd($subjektif);
        return view('form_ubah_subjektif', ['subjektif' => $subjektif]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //ambil foreign key (biodata_id)
        $subjektif = Subjektif::where('biodata_id', $id)->first();

        //inspect subjektif
        //dd($subjektif);

        $subjektif->keluhan = $request->inputkeluhan;
        $subjektif->riwayat_penyakit = $request->inputriwayat;
        $subjektif->riwayat_penyakit_keluarga = $request->inputkeluarga;
        $subjektif->menikah_ke = $request->inputmenikah_ke;
        $subjektif->usia_menikah = $request->inputusia_menikah;
        $subjektif->HPHT = $request->inputHPHT;
        $subjektif->menarche = $request->inputmenarche;
        $subjektif->lama_haid = $request->inputlama_haid;
        $subjektif->siklus_haid = $request->inputsiklus_haid;
        $subjektif->warna = $request->inputwarna;
        $subjektif->flour_albus = $request->inputflour_albus;
        $subjektif->riwayat_kehamilan = $request->inputriwayat_kehamilan;
        $subjektif->riwayat_kb = $request->inputriwayat_kb;
        $subjektif->save();
        return redirect('/subjektif/' . $subjektif->biodata_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // hapus data
        $subjektif = Subjektif::findOrFail($id);
        $subjektif->delete();
        return redirect('/subjektif/' . $subjektif->id);
    }

    /*
    *
    */
    public function back($id)
    {
        $subjektif = Subjektif::where('id', $id)->first();
        return redirect('profil_biodata', compact('subjektif'));
    }
}
