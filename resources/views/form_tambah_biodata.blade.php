@extends('layout.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Biodata</h3>
            </div>
            <div class="card-body">
                <a href="/biodata" class="btn btn-primary">Kembali</a>
                <form action="{{ '/biodata' }}" method="POST">
                    @csrf
                    <ul class="list-group">
                        Nama <input type="text" name="inputnama" required>
                        Umur <input type="number" name="inputumur" required min="10" max="99">
                        Agama <input type="text" name="inputagama" required>
                        Pendidikan <input type="text" name="inputpendidikan" required>
                        Pekerjaan <input type="text" name="inputpekerjaan" required>
                        Alamat <input type="text" name="inputalamat" required>
                        Nomer telpon <input type="text" name="inputnomer" required pattern="8[0-9]{7,14}" minlength="8"
                            maxlength="15" title="mohon di isi nomer dengan awalah angka 8 dan minimal 8 digit maksimal 15">
                        Nama suami <input type="text" name="inputnama_suami" required>
                        Umur suami <input type="number" name="inputumur_suami" required min="10" max="99">
                        Agama suami <input type="text" name="inputagama_suami" required>
                        Pendidikan suami <input type="text" name="inputpendidikan_suami" required>
                        Pekerjaan suami <input type="text" name="inputpekerjaan_suami" required>
                        Alamat suami <input type="text" name="inputalamat_suami" required>
                        Nomer suami <input type="text" name="inputnomer_suami" required pattern="8[0-9]{7,14}"
                            minlength="8" maxlength="15"
                            title="mohon di isi nomer dengan awalah angka 8 dan minimal 8 digit maksimal 15">
                    </ul>
                    <input type="submit" value="Simpan Data" class="btn btn-success mt-3">
                </form>
            </div>
        </div>
    </div>
@endsection
