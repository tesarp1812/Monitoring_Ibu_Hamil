@php
    use Carbon\Carbon;
@endphp
@extends('layout.app')

@section('content')
    <div class="container">
        <div class="card mt-4">
            <div class="card-header">
                Dashboard
            </div>
            <div class="row justify-content-center">
                <h3 class="text-center mt-3">Welcome, {{ auth()->user()->name }}</h3>
                <div class="text-center mt-3">
                    <a class="btn btn-primary mb-3" href="/jadwal">Jadwal Pasien</a>
                    <a class="btn btn-primary mb-3" href="/jadwal_kunjung">Jadwal Kunjungan</a>
                    <a class="btn btn-primary mx-1 mb-3" href="/biodata">Data Pasien</a>
                    <a class="btn btn-primary mb-3" href="/admin_post">Postingan</a>
                </div>
            </div>

            {{-- Card HPL --}}
            <div class="card-body" style="width: 18rem;">
                <div class="card mt-4">
                    <div class="card-header">
                        HPL Pasien
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>HPL</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($biodata as $b)
                                    <tr>
                                        <td><a href="/biodata/show/{{ $b->id }}">{{ $b->nama }}</a></td>
                                        <td>{{ $b->subjektif ? Carbon::createFromFormat('Y-m-d', $b->subjektif->HPL)->format('d-m-Y') : '' }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
