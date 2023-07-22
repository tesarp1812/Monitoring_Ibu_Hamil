@extends('layout.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Biodata</h3>
            </div>
            <div class="card-body">
                <a href="{{ URL::previous() }}" class="btn btn-primary">Kembali</a>
                <form action="/biodata/update/{{ $biodata->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <ul class="list-group">
                        Nama <input type="text" name="inputnama" required value="{{ $biodata->nama }}">
                        Umur <input type="number" name="inputumur" required value="{{ $biodata->umur }}">
                        Agama <input type="text" name="inputagama" required value="{{ $biodata->agama }}">
                        Pendidikan <input type="text" name="inputpendidikan" required value="{{ $biodata->pendidikan }}">
                        Pekerjaan <input type="text" name="inputpekerjaan" required value="{{ $biodata->pekerjaan }}">
                        Alamat <input type="text" name="inputalamat" required value="{{ $biodata->alamat }}">
                        Nomer telpon <input type="number" name="inputnomer" required value="{{ $biodata->nomer_tlpn }}">
                        Nama suami <input type="text" name="inputnama_suami" required value="{{ $biodata->nama_suami }}">
                        Umur suami <input type="number" name="inputumur_suami" required
                            value="{{ $biodata->umur_suami }}">
                        Agama suami <input type="text" name="inputagama_suami" required
                            value="{{ $biodata->agama_suami }}">
                        Pendidikan suami <input type="text" name="inputpendidikan_suami" required
                            value="{{ $biodata->pendidikan_suami }}">
                        Pekerjaan suami <input type="text" name="inputpekerjaan_suami" required
                            value="{{ $biodata->pekerjaan_suami }}">
                        Alamat suami <input type="text" name="inputalamat_suami" required
                            value="{{ $biodata->alamat_suami }}">
                        Nomer suami <input type="number" name="inputnomer_suami" required
                            value="{{ $biodata->nomer_suami }}">
                    </ul>
                    <input type="submit" value="Ubah Data" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection
