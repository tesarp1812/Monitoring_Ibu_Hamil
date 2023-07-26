@php
    use Carbon\Carbon;
@endphp
@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row my-4">
            <div class="col">
                <a href="{{ URL::previous() }}" class="btn btn-secondary">Kembali</a>
                <a href="/checkup/create/{{ $biodata_id }}" class="btn btn-primary">Tambah Data</a>
                <a href="/biodata" class="btn btn-primary">Halaman Pasien</a>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-info">
                {{ session('success') }}
            </div>
        @endif

        @if (session('edit'))
            <div class="alert alert-info">
                {{ session('edit') }}
            </div>
        @endif

        @if (session('delete'))
            <div class="alert alert-danger">
                {{ session('delete') }}
            </div>
        @endif

        <table id="myTable" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Biodata ID</th>
                    <th scope="col">Tanggal Checkup</th>
                    <th scope="col">Keluhan</th>
                    <th scope="col">Tekanan</th>
                    <th scope="col">Berat (Kg)</th>
                    <th scope="col">Tinggi (Cm)</th>
                    <th scope="col">Letak</th>
                    <th scope="col">DJJ (Menit)</th>
                    <th scope="col">Kaki</th>
                    <th scope="col">Hasil Lab</th>
                    <th scope="col">Tindakan</th>
                    <th scope="col">Nasihat</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Jadwal Kembali</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cek as $c)
                    <tr>
                        <td>{{ $c->biodata_id }}</td>
                        <td>{{ $c->tgl ? Carbon::createFromFormat('Y-m-d', $c->tgl)->format('d-m-Y') : '' }}</td>
                        <td>{{ $c->keluhan }}</td>
                        <td>{{ $c->tekanan }}/{{ $c->tekanan2 }}</td>
                        <td>{{ $c->berat }}</td>
                        <td>{{ $c->tinggi }}</td>
                        <td>{{ $c->letak }}</td>
                        <td>{{ $c->djj }}</td>
                        <td>{{ $c->kaki }}</td>
                        <td>{{ $c->hasillab }}</td>
                        <td>{{ $c->tindakan }}</td>
                        <td>{{ $c->nasihat }}</td>
                        <td>{{ $c->keterangan }}</td>
                        <td>{{ $c->jadwal_kembali ? Carbon::createFromFormat('Y-m-d', $c->jadwal_kembali)->format('d-m-Y') : '' }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Memuat jQuery terlebih dahulu -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Kemudian baru memuat script DataTables -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection
