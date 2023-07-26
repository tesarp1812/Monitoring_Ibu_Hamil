@php
    use Carbon\Carbon;
@endphp
@extends('layout.app')

@section('content')
    <div class="container">
        <form>
            @if (!$subjek)
                <a href="/subjektif/create/{{ $biodata_id }}" class="btn btn-primary mr-2">Tambah Data Baru</a>
            @endif
        </form>

        <div class="container">
            <div style="width: 20%">
                @if (session('success'))
                    <div class="alert alert-info">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('edit'))
                    <div class="alert alert-info">
                        {{ session('edit') }}
                    </div>
                @endif

                @if (session('delete'))
                    <div class="alert alert-danger">
                        {{ session('delete') }}
                    </div>
                @endif
            </div>
            <div class="card" style="width: 70%">
                <h5 class="card-header bg-info">Data Subjektif</h5>
                <div class="card-body">
                    <div class="mb-4 row">
                        <label class="col-sm-4 col-form-label">Id subjektif</label>
                        <div class="col-sm-5">
                            <label class="col-sm-4 col-form-label">{{ $subjek->biodata_id ?? '' }}</label>
                        </div>

                        <label class="col-sm-4 col-form-label">Keluhan</label>
                        <div class="col-sm-5">
                            <label class="col-sm-4 col-form-label">{{ $subjek->keluhan ?? '' }}</label>
                        </div>

                        <label class="col-sm-4 col-form-label">Riwayat penyakit</label>
                        <div class="col-sm-5">
                            <label class="col-sm-4 col-form-label">{{ $subjek->riwayat_penyakit ?? '' }}</label>
                        </div>

                        <label class="col-sm-4 col-form-label">Riwayat penyakit keluarga</label>
                        <div class="col-sm-5">
                            <label class="col-sm-4 col-form-label">{{ $subjek->riwayat_penyakit_keluarga ?? '' }}</label>
                        </div>

                        <label class="col-sm-4 col-form-label">Menikah ke</label>
                        <div class="col-sm-5">
                            <label class="col-sm-4 col-form-label">{{ $subjek->menikah_ke ?? '' }}</label>
                        </div>

                        <label class="col-sm-4 col-form-label">Usia menikah</label>
                        <div class="col-sm-5">
                            <label class="col-sm-4 col-form-label">{{ $subjek->usia_menikah ?? '' }}</label>
                        </div>

                        <label class="col-sm-4 col-form-label">Lama menikah</label>
                        <div class="col-sm-5">
                            <label class="col-sm-4 col-form-label">{{ $subjek->lama_menikah ?? '' }}</label>
                        </div>

                        <label class="col-sm-4 col-form-label">HPHT</label>
                        <div class="col-sm-5">
                            <label
                                class="col-sm-4 col-form-label">{{ $subjek->HPHT ? Carbon::createFromFormat('Y-m-d', $subjek->HPHT)->format('d-m-Y') : '' }}</label>
                        </div>

                        <label class="col-sm-4 col-form-label">Menarche</label>
                        <div class="col-sm-5">
                            <label class="col-sm-4 col-form-label">{{ $subjek->menarche ?? '' }}</label>
                        </div>

                        <label class="col-sm-4 col-form-label">Lama haid</label>
                        <div class="col-sm-5">
                            <label class="col-sm-4 col-form-label">{{ $subjek->lama_haid ?? '' }}</label>
                        </div>

                        <label class="col-sm-4 col-form-label">Siklus haid</label>
                        <div class="col-sm-5">
                            <label class="col-sm-4 col-form-label">{{ $subjek->siklus_haid ?? '' }}</label>
                        </div>

                        <label class="col-sm-4 col-form-label">Warna</label>
                        <div class="col-sm-5">
                            <label class="col-sm-4 col-form-label">{{ $subjek->warna ?? '' }}</label>
                        </div>

                        <label class="col-sm-4 col-form-label">Flour albus</label>
                        <div class="col-sm-5">
                            <label class="col-sm-4 col-form-label">{{ $subjek->flour_albus ?? '' }}</label>
                        </div>

                        <label class="col-sm-4 col-form-label">Riwayat kehamilan</label>
                        <div class="col-sm-5">
                            <label class="col-sm-4 col-form-label">{{ $subjek->riwayat_kehamilan ?? '' }}</label>
                        </div>

                        <label class="col-sm-4 col-form-label">Riwayat KB</label>
                        <div class="col-sm-5">
                            <label class="col-sm-4 col-form-label">{{ $subjek->riwayat_kb ?? '' }}</label>
                        </div>
                    </div>
                    <div>
                        @if ($subjek)
                            <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');"
                                action="/subjektif/delete/{{ $subjek->id }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <a href="/subjektif/edit/{{ $subjek->biodata_id ?? '' }}"
                                    class="btn btn-primary mr-2">Edit</a>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        @endif
                        <a href="/biodata" class="btn btn-secondary mr-2">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
