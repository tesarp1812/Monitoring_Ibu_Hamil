@extends('layout.app')

@section('content')
    {{-- tabel jadwal Kunjungan --}}
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
                        @foreach ($tampil as $j)
                            <tr>
                                <td>{{ $j->hari }}</td>
                                <td>
                                    {{ $j->jam1 }}.{{ $j->min1 != 0 ? str_pad($j->min1, 2, '0', STR_PAD_LEFT) : '00' }}
                                    -{{ $j->jam2 }}.{{ $j->min2 != 0 ? str_pad($j->min2, 2, '0', STR_PAD_LEFT) : '00' }}
                                </td>
                                <td>{{ $j->lokasi }}</td>
                                <td><a href="{{ $j->id }}">edit</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>

    {{-- form ubah jadwal --}}
    <div class="container mt-4">
        <div class="card" style="width: 20rem;">
            <div class="card-header">
                <form class="row g-3" action="/edit_jadwal/update/{{ $jadwal->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <ul class="list-group">
                        Hari <input type="text" name="inputhari" required value="{{ $jadwal->hari }}">
                    </ul>

                    <!-- Kotak input untuk Hari -->
                    <div class="col-md-6">
                        <label for="inputhari" class="form-label">Jam Buka</label>
                        <input type="number" class="form-control" name="inputjam1" required value="{{ $jadwal->jam1 }}">
                    </div>

                    <!-- Kotak input untuk Jam Buka -->
                    <div class="col-md-6">
                        <label for="inputjam" class="form-label">Jam Tutup</label>
                        <input type="number" class="form-control" name="inputjam2" required value="{{ $jadwal->jam2 }}">
                    </div>

                    <ul class="list-group">
                        Lokasi <input type="text" name="inputlok" required value="{{ $jadwal->lokasi }}">
                    </ul>

                    <input type="submit" value="Ubah Data" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection
