<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Subjektif;
use Illuminate\View\View;

use Illuminate\Http\Request;

class SubjektifController extends Controller
{

    public function __invoke(Request $request)
    {
        return;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $subjektif = Subjektif::get();
        // return view('subjektif', compact('subjektif'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        //
        return view('form_tambah_subjektif', ['id' => $request->id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $subjektif = Subjektif::create([
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

        return redirect()->route('biodata.index'); //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $subjektif = Subjektif::where('id', $id)->first();
        return view('data_subjektif', compact('subjektif'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $subjektif = Subjektif::where('id', $id)->first();
        return view('form_ubah_subjektif', compact('subjektif'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $subjektif = Subjektif::find($id);
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
        // return redirect()->route('biodata.show');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
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
