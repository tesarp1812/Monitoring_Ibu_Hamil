@extends('layout.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Jadwal Kunjungan</h5>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Hari</th>
                            <th>Waktu</th>
                            <th>Lokasi</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jadwal as $j)
                            <tr>
                                <td>{{ $j->hari }}</td>
                                <td>
                                    {{ $j->jam1 }}.{{ $j->min1 != 0 ? str_pad($j->min1, 2, '0', STR_PAD_LEFT) : '00' }}
                                    -{{ $j->jam2 }}.{{ $j->min2 != 0 ? str_pad($j->min2, 2, '0', STR_PAD_LEFT) : '00' }}
                                </td>
                                <td>{{ $j->lokasi }}</td>
                                <td><a href="edit_jadwal/{{ $j->id }}">edit</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>

    {{-- form edit jadwal --}}
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Biodata</h3>
            </div>
            <div class="card-body">
                <a href="/biodata" class="btn btn-primary">Kembali</a>
                <form action="/biodata/update/{{ $biodata->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <ul class="list-group">
                        Nama <input type="text" name="inputnama" required value="{{ $biodata->nama }}">
                        Umur <input type="number" name="inputumur" required value="{{ $biodata->umur }}">
                        Agama <input type="text" name="inputagama" required value="{{ $biodata->agama }}">
                        Pendidikan <input type="text" name="inputpendidikan" required
                            value="{{ $biodata->pendidikan }}">
                        Pekerjaan <input type="text" name="inputpekerjaan" required value="{{ $biodata->pekerjaan }}">
                        Alamat <input type="text" name="inputalamat" required value="{{ $biodata->alamat }}">
                        Nomer telpon <input type="number" name="inputnomer" required value="{{ $biodata->nomer_tlpn }}">
                        Nama suami <input type="text" name="inputnama_suami" required
                            value="{{ $biodata->nama_suami }}">
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
