@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Tambah subjektif</h3>
            </div>
            <div class="card-body">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
                <form action="{{ route('subjektif.store') }}" method="POST">
                    @csrf
                    <ul class="list-group">

                        <input type="hidden" value="{{ $id }}" name="inputbiodata">
                        keluhan <input type="text" name="inputkeluhan" required>
                        Riwayat Penyakit <input type="text" name="inputriwayat_penyakit" required>
                        Riwayat Penyakit Keluarga <input type="text" name="inputriwayat_penyakit_keluarga" required>
                        Menikah Ke <input type="number" name="inputmenikah_ke" required>
                        Usia Menikah <input type="number" name="inputusia_menikah" required>
                        Lama Menikah <input type="number" name="inputlama_menikah" required>
                        HPHT <input type="date" name="inputHPHT" required>
                        Menarche <input type="number" name="inputmenarche" required>
                        Lama Haid <input type="number" name="inputlama_haid" required>
                        Siklus Haid <input type="number" name="inputsiklus_haid" required>
                        Warna <input type="text" name="inputwarna" required>
                        Flour Albus <input type="text" name="inputflour_albus" required>
                        Riwayat Kehamilan <input type="text" name="inputriwayat_kehamilan" required>
                        Riwayat Kb <input type="text" name="inputriwayat_kb" required>
                    </ul>
                    <input type="submit" value="Simpan Data" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection
