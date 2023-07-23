@extends('layout.app')
@section('content')
    <div class="container">
        <div style="width:20%">
            @if (session('success'))
                <div class="alert alert-info ">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('edit'))
                <div class="alert alert-info ">
                    {{ session('edit') }}
                </div>
            @endif

            @if (session('delete'))
                <div class="alert alert-danger ">
                    {{ session('delete') }}
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col">
                <a href="{{ URL::previous() }}" class="btn btn-secondary">Kembali</a>
                <a href="/checkup/create/{{ $biodata_id }}" class="btn btn-primary">Tambah Data</a>
                <a href="/biodata" class="btn btn-primary">Halaman Pasien</a>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>

                <th scope="col">biodata id</th>
                <th scope="col">tanggal checkup</th>
                <th scope="col">keluhan</th>
                <th scope="col">tekanan</th>
                <th scope="col">berat</th>
                <th scope="col">tinggi</th>
                <th scope="col">letak</th>
                <th scope="col">djj</th>
                <th scope="col">kaki</th>
                <th scope="col">hasil lab</th>
                <th scope="col">tindakan</th>
                <th scope="col">nasihat</th>
                <th scope="col">keterangan</th>
                <th scope="col">jadwal kembali</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">


            @foreach ($cek as $c)
                <tr>
                    <td>{{ $c->biodata_id }}</td>
                    <td>{{ $c->tgl }}</td>
                    <td>{{ $c->keluhan }}</td>
                    <td>{{ $c->tekanan }}</td>
                    <td>{{ $c->berat }} Kg</td>
                    <td>{{ $c->tinggi }} Cm</td>
                    <td>{{ $c->letak }}</td>
                    <td>{{ $c->djj }}/Menit</td>
                    <td>{{ $c->kaki }}</td>
                    <td>{{ $c->hasillab }}</td>
                    <td>{{ $c->tindakan }}</td>
                    <td>{{ $c->nasihat }}</td>
                    <td>{{ $c->keterangan }}</td>
                    <td>{{ $c->jadwal_kembali }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
