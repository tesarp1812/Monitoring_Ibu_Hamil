@extends('layout.app')

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Jadwal Kunjungan</h5>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Hari</th>
                            <th>Waktu</th>
                            <th>Lokasi</th>
                            @auth
                                @if (auth()->user()->role === 'admin')
                                    <th>Edit</th>
                                @endif
                            @endauth
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
                                @auth
                                    @if (auth()->user()->role === 'admin')
                                        <td><a href="edit_jadwal/{{ $j->id }}">edit</a></td>
                                    @endif
                                @endauth
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div style="position: relative;">
                    <a href="https://api.whatsapp.com/send?phone=628123456789" target="_blank"
                        class="btn btn-success rounded-circle p-" style="position: absolute; bottom: 0px; right: 10px;">
                        <span> Chat WA</span>
                        <i class="fab fa-whatsapp fa-lg"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- WhatsApp Chat Button -->
@endsection
