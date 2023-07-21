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
                                    {{ $j->jam1 }}.00
                                    -{{ $j->jam2 }}.00
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
@endsection
