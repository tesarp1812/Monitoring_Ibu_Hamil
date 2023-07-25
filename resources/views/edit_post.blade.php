@extends('layout.app')

@section('content')
    <div class="container">
        <div class="card" style="width: 60%">
            <div class="card-header">
                <h3>Edit Post</h3>
            </div>
            <div class="card-body">
                <a href="/admin_post" class="btn btn-primary">Kembali</a>
                <form action="/post/update/{{ $post->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <ul class="list-group">
                        Gambar
                        <input type="file" name="gambar" accept="image/*" value="{{ $post->gambar }}">
                        @if ($post->gambar)
                            <div>
                                <img src="{{ asset('storage/post/' . $post->gambar) }}" alt="Preview Gambar"
                                    style="max-width: 300px; margin-top: 10px;">
                            </div>
                        @endif

                        Judul
                        <input type="text" name="judul" required value="{{ $post->judul }}">

                        Isi
                        <textarea name="konten" id="konten" cols="30" rows="10">{{ $post->konten }}</textarea>

                        <input type="submit" value="Simpan Data" class="btn btn-success mt-3">
                    </ul>
                </form>
            </div>
        </div>
    </div>
@endsection
