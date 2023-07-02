@extends('layout.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Biodata</h3>
            </div>
            <div class="card-body">
                <a href="{{ URL::previous() }}" class="btn btn-primary">Kembali</a>
                <form action="{{ '/biodata' }}" method="POST">
                    @csrf
                    <ul class="list-group">
                        Nama <input type="text" name="inputnama" required>
                        Umur <input type="number" name="inputumur" required>
                        Agama <input type="text" name="inputagama" required>
                        Pendidikan <input type="text" name="inputpendidikan" required>
                        Pekerjaan <input type="text" name="inputpekerjaan" required>
                        Alamat <input type="text" name="inputalamat" required>
                        Nomer telpon <input type="number" name="inputnomer" required>
                        Nama suami <input type="text" name="inputnama_suami" required>
                        Umur suami <input type="number" name="inputumur_suami" required>
                        Agama suami <input type="text" name="inputagama_suami" required>
                        Pendidikan suami <input type="text" name="inputpendidikan_suami" required>
                        Pekerjaan suami <input type="text" name="inputpekerjaan_suami" required>
                        Alamat suami <input type="text" name="inputalamat_suami" required>
                        Nomer suami <input type="number" name="inputnomer_suami" required>
                    </ul>
                    <input type="submit" value="Simpan Data" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection
