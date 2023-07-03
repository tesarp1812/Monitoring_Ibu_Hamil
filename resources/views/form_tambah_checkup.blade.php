@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Data Checkup</h3>
            </div>
            <div class="card-body">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
                <form action="{{ route('checkup.store') }}" method="POST">
                    @csrf
                    <ul class="list-group">

                        <input type="hidden" value="{{ $id }}" name="inputbiodata">
                        Tanggal Checkup <input type="date" name="inputtgl" required>
                        keluhan <input type="text" name="inputkeluhan" required>
                        tekanan <input type="number" name="inputtekanan" required>
                        berat <input type="number" name="inputberat" required>
                        tinggi <input type="number" name="inputtinggi" required>
                        letak <input type="text" name="inputletak" required>
                        djj <input type="number" name="inputdjj" required>

                        Kaki<div class="form-check">
                            <input class="form-check-input" type="radio" value="+" name="inputkaki"
                                id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                +
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="-" name="inputkaki"
                                id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                -
                            </label>
                        </div>
                        hasil lab <input type="text" name="inputlab" required>
                        tindakan <input type="text" name="inputtindakan" required>
                        nasihat <input type="text" name="inputnasihat" required>
                        keterangan <input type="text" name="inputketerangan" required>
                        jadwal kembali <input type="date" name="inputjadwal" required>
                    </ul>
                    <input type="submit" value="Simpan Data" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection
