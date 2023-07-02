<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//import model biodata
use App\Models\Biodata;

//return view
use Illuminate\View\View;

//return redirectResponse
use Illuminate\Http\RedirectResponse;

class BiodataController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get post
        $biodata = Biodata::get();

        //render view
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

        return redirect()->route('biodata.index')->with(['success' => 'data berhasil disimpan']);
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

}
