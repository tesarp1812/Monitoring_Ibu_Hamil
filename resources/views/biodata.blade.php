@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="{{ route('biodata.create') }}" class="btn btn-primary">Tambah Data</a>
            </div>
            <div class="col">
                <form action="" method="GET">
                    <input type="text" name="cari" placeholder="Cari Data Pasien..." value="">
                    <input type="submit" value="CARI">
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
                            <a scope="col" href="{{ route('biodata.edit', $b->id) }}"
                                class="btn btn-primary mr-2">Edit</a>
                            <a scope="col" href="{{ route('biodata.show', $b->id) }}" class="btn btn-secondary">Show</a>
                            <form action="{{ route('biodata.destroy', $b->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Hapus
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda Yakin Hapus Data
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </ul>
                    </td>
                    <td>
                        {{-- <a href="{{ route('checkup.index') }}/{{ $b->id }}" class="btn btn-primary mr-2">Chekup</a> --}}
                        {{-- <a href="{{ route('checkup.create', $b->id) }}" class="btn btn-primary mr-2">Tambah Data --}}
                        Checkup</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
