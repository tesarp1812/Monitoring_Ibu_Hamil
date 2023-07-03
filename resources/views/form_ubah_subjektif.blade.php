@extends('layout.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Biodata</h3>
            </div>
            <div class="card-body">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <ul class="list-group">
                        Keluhan <input type="text" name="inputkeluhan" required value="{{ $subjektif->keluhan }}">
                        Riwayat Penyakit <input type="text" name="inputriwayat" required
                            value="{{ $subjektif->riwayat_penyakit }}">
                        Riwayat Penyakit Keluarga <input type="text" name="inputkeluarga" required
                            value="{{ $subjektif->riwayat_penyakit_keluarga }}">
                        Menikah Ke <input type="number" name="inputmenikah_ke" required
                            value="{{ $subjektif->menikah_ke }}">
                        Usia Menikah <input type="number" name="inputusia_menikah" required
                            value="{{ $subjektif->usia_menikah }}">
                        HPHT <input type="date" name="inputHPHT" required value="{{ $subjektif->HPHT }}">
                        Menarche <input type="number" name="inputmenarche" required value="{{ $subjektif->menarche }}">
                        Lama Haid <input type="number" name="inputlama_haid" required value="{{ $subjektif->lama_haid }}">
                        Siklus Haid <input type="number" name="inputsiklus_haid" required
                            value="{{ $subjektif->siklus_haid }}">
                        Warna <input type="text" name="inputwarna" required value="{{ $subjektif->warna }}">
                        Flour Albus <input type="text" name="inputflour_albus" required
                            value="{{ $subjektif->flour_albus }}">
                        Riwayat Kehamilan <input type="text" name="inputriwayat_kehamilan" required
                            value="{{ $subjektif->riwayat_kehamilan }}">
                        Riwayat KB <input type="text" name="inputriwayat_kb" required
                            value="{{ $subjektif->riwayat_kb }}">
                    </ul>
                    <input type="submit" value="Ubah Data" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection
