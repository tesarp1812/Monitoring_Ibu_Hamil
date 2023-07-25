@extends('layout.app')

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        @if (session('edit'))
            <div class="alert alert-info mt-3">
                {{ session('edit') }}
            </div>
        @endif

        @if (session('delete'))
            <div class="alert alert-danger mt-3">
                {{ session('delete') }}
            </div>
        @endif

        <div class="row">
            <div class="col">
                @if (count($post) < 3)
                    <a href="/tambah_post" class="btn btn-primary">Tambah Data</a>
                @else
                    <button class="btn btn-primary" disabled>Tambah Data</button>
                @endif
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Konten</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($post as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->judul }}</td>
                        <td>
                            @php
                                $max_length = 100; // Tentukan jumlah karakter maksimum yang ingin ditampilkan
                                $truncated_content = strlen($p->konten) > $max_length ? substr($p->konten, 0, $max_length) . '...' : $p->konten;
                            @endphp
                            {{ $truncated_content }}
                        </td>
                        <td><img src="{{ asset('storage/post/' . $p->gambar) }}" alt="Gambar"
                                style="width: 100px; height: auto;"></td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="/post/edit/{{ $p->id }}" class="btn btn-primary">Edit</a>
                                {{-- <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');"
                                    action="/post/delete/{{ $p->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form> --}}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
