@extends('layout.app')
@section('content')
    <div class="container">
        <div class="card" style="width: 60%">
            <div class="card-header">
                <h3>Tambah Post</h3>
            </div>
            <div class="card-body">
                <a href="/admin_post" class="btn btn-primary">Kembali</a>
                <form action="{{ '/post' }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <ul class="list-group">
                        Gambar <input type="file" name="gambar" required>
                        Judul <input type="text" name="judul" required>
                        Isi
                        <textarea name="konten" id="konten" cols="30" rows="10"></textarea>
                        <input type="submit" value="Simpan Data" class="btn btn-success mt-3">
                </form>
            </div>
        </div>
    </div>
@endsection
