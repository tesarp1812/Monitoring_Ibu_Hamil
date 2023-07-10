<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objektif;
use App\Models\Biodata;
use Illuminate\View\View;

class ObjektifController extends Controller
{           
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $objektif = Objektif::with('biodata')->where('biodata_id', $request->id)->get()->first();
        //dd($objektif);
        return view('objektif', ['objek' => $objektif, 'biodata_id' => $request->id]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        return view('form_tambah_objektif', ['id' => $request->id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Objektif::create([
            'biodata_id' => $request->inputbiodata,
            'kesadaran' => $request->inputkesadaran,
            'tekanan_darah' => $request->inputtekanan_darah,
            'suhu' => $request->inputsuhu,
            'nadi' => $request->inputnadi,
            'respirasi' => $request->inputrespirasi,
            'bb' => $request->inputbb,
            'tb' => $request->inputtb,
            'kepala' => $request->inputkepala,
            'rambut' => $request->inputrambut,
            'muka' => $request->inputmuka,
            'mata' => $request->inputmata,
            'hidung' => $request->inputhidung,
            'telinga' => $request->inputtelinga,
            'mulut' => $request->inputmulut,
            'leher' => $request->inputleher,
            'dada' => $request->inputdada,
            'abdomen' => $request->inputabdomen,
            'leopold1' => $request->inputleopold1,
            'leopold2' => $request->inputleopold2,
            'leopold3' => $request->inputleopold3,
            'leopold4' => $request->inputleopold4,
            'genetalia' => $request->inputgenetalia,
            'eks_atas' => $request->inputeks_atas,
            'eks_bawah' => $request->inputeks_bawah,
        ]);

        return redirect('/objektif/' . $request->input('inputbiodata'))->with('success', 'Data Objektif``` berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $objektif = Objektif::where('id', $id)->first();
        //dd($objektif);
        return view('form_ubah_objektif', compact('objektif'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $objektif = Objektif::find($id);
        $objektif->kesadaran = $request->inputkesadaran;
        $objektif->tekanan_darah = $request->inputtekanan_darah;
        $objektif->suhu = $request->inputsuhu;
        $objektif->nadi = $request->inputnadi;
        $objektif->respirasi = $request->inputrespirasi;
        $objektif->bb = $request->inputbb;
        $objektif->tb = $request->inputtb;
        $objektif->kepala = $request->inputkepala;
        $objektif->rambut = $request->inputrambut;
        $objektif->muka = $request->inputmuka;
        $objektif->mata = $request->inputmata;
        $objektif->hidung = $request->inputhidung;
        $objektif->telinga = $request->inputtelinga;
        $objektif->mulut = $request->inputmulut;
        $objektif->leher = $request->inputleher;
        $objektif->dada = $request->inputdada;
        $objektif->abdomen = $request->inputabdomen;
        $objektif->leopold1 = $request->inputleopold1;
        $objektif->leopold2 = $request->inputleopold2;
        $objektif->leopold3 = $request->inputleopold3;
        $objektif->leopold4 = $request->inputleopold4;
        $objektif->genetalia = $request->inputgenetalia;
        $objektif->eks_atas = $request->inputeks_atas;
        $objektif->eks_bawah = $request->inputeks_bawah;
        $objektif->save();
        return redirect('/objektif/' . $objektif->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // hapus data
        $objektif = Objektif::findOrFail($id);
        $objektif->delete();
        return redirect('/objektif/' . $objektif->id);
    }
}
