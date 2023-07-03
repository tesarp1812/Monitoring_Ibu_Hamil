<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use Illuminate\View\View;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $biodata = Biodata::get();
        return view('biodata', compact('biodata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('form_tambah_biodata');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Biodata::create([
            'nama' => $request->inputnama,
            'umur' => $request->inputumur,
            'agama' => $request->inputagama,
            'pendidikan' => $request->inputpendidikan,
            'pekerjaan' => $request->inputpekerjaan,
            'alamat' => $request->inputalamat,
            'nomer_tlpn' => $request->inputnomer,
            'nama_suami' => $request->inputnama_suami,
            'umur_suami' => $request->inputumur_suami,
            'agama_suami' => $request->inputagama_suami,
            'pendidikan_suami' => $request->inputpendidikan_suami,
            'pekerjaan_suami' => $request->inputpekerjaan_suami,
            'alamat_suami' => $request->inputalamat_suami,
            'nomer_suami' => $request->inputnomer_suami,
        ]);

        return redirect()->route('biodata.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $biodata = Biodata::with('subjektif')->where('id', $id)->first();
        // dd($biodata);
        return view('profil_biodata', compact('biodata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $biodata = Biodata::where('id', $id)->first();
        return view('form_ubah_biodata', compact('biodata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $biodata = Biodata::find($id);
        $biodata->nama = $request->inputnama;
        $biodata->umur = $request->inputumur;
        $biodata->agama = $request->inputagama;
        $biodata->pendidikan = $request->inputpendidikan;
        $biodata->pekerjaan = $request->inputpekerjaan;
        $biodata->alamat = $request->inputalamat;
        $biodata->nomer_tlpn = $request->inputnomer;
        $biodata->nama_suami = $request->inputnama_suami;
        $biodata->umur_suami = $request->inputumur_suami;
        $biodata->agama_suami = $request->inputagama_suami;
        $biodata->pendidikan_suami = $request->inputpendidikan_suami;
        $biodata->pekerjaan_suami = $request->inputpekerjaan_suami;
        $biodata->alamat_suami = $request->inputalamat_suami;
        $biodata->nomer_suami = $request->inputnomer_suami;
        $biodata->save();
        return redirect()->route('biodata.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $biodata = Biodata::find($id);
        $biodata->delete();

        return redirect()->route('biodata.index');
    }

    /*
    *
    */
    public function back($id)
    {
        $biodata = Biodata::where('id', $id)->first();
        return redirect('profil_biodata', compact('biodata'));
    }
}
