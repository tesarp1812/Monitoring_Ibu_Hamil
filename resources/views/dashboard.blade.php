@extends('layout.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Dashboard
            </div>
            <div class="row justify-content-center">
                <h3 class="text-center">welcome, {{ auth()->user()->name }}</h3>
                <div class="text-center mt-3">
                    <a class="btn btn-primary mb-3" href="/jadwal">Cek Jadwal</a>
                    <a class="btn btn-primary mx-1 mb-3" href="/biodata">Data Pasien</a>
                </div>
            </div>
        </div>
    </div>
@endsection
