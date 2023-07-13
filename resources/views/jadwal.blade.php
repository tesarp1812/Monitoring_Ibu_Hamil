@extends('layout.app')

@section('content')
    {{-- jadwal kunjungan hari ini  --}}
    <div class="container">
        <div class="row">
            <div class="p-3 border bg-light">Jadwal Kunjungan hari ini</div>
            <table class="table table-secondary table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal kunjungan Terakhir</th>
                        <th scope="col">Tanggal Chekup</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($date as $c)
                    <tr>
                        <td>{{$c->biodata->nama}}</td>
                        <td>{{$c->tgl}}</td>
                        <td>{{$c->jadwal_kembali}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- jadwal kunjungan besok  --}}
        <div class="row">
            <table class="table table-secondary table-striped">
                <div class="p-3 border bg-light">Jadwal Kunjungan Besok</div>
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal kunjungan Terakhir</th>
                        <th scope="col">Tanggal Chekup</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dateTomorrow as $dt)
                    <tr>
                        <td>{{$dt->biodata->nama}}</td>
                        <td>{{$dt->tgl}}</td>
                        <td>{{$dt->jadwal_kembali}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
