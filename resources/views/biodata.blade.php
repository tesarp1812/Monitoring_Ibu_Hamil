@extends('layout.app')
@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col">
                <a href="/tambah_biodata" class="btn btn-primary">Tambah Data</a>
            </div>
            <div class="col">
                <form action="/biodata/search" method="GET">
                    <input type="text" name="cari" placeholder="Cari Data Pasien..." value="">
                    <input type="submit" value="{{ request('cari') }}">
                </form>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Umur</th>
                <th scope="col">alamat</th>
                <th scope="col">nomer telpon</th>
                <th scope="col">nama suami</th>
                <th scope="col">nomer suami</th>
                <th scope="col">Aksi</th>
                <th scope="col">Checkup</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($biodata as $b)
                <tr>
                    <td scope="col">{{ $b->id }}</td>
                    <td scope="col">{{ $b->nama }}</td>
                    <td scope="col">{{ $b->umur }}</td>
                    <td scope="col">{{ $b->alamat }}</td>
                    <td scope="col">{{ $b->nomer_tlpn }}</td>
                    <td scope="col">{{ $b->nama_suami }}</td>
                    <td scope="col">{{ $b->nomer_suami }}</td>
                    <td scope="col">
                        <ul class="nav">
                            <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');"
                                action="/biodata/delete/{{ $b->id }}" method="POST">
                                <a scope="col" href="/biodata/edit/{{ $b->id }}"
                                    class="btn btn-primary mr-2">Edit</a>
                                <a scope="col" href="/biodata/show/{{ $b->id }}"
                                    class="btn btn-secondary">Show</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                    </td>
                    <td>
                        <a href="/subjektif/{{ $b->id }}" class="btn btn-primary mr-2">Subjektif</a>
                        <a href="/objektif/{{ $b->id }}" class="btn btn-primary mr-2">Objektif</a>
                        <a href="/checkup/{{ $b->id }}" class="btn btn-primary mr-2">Chekup</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
