@extends('layout.app')
@section('content')
    <form>
        @if (!$subjek)
            <a scope="col" href="/subjektif/create/{{ $biodata_id }}" class="btn btn-primary mr-2">Tambah
                Data Baru</a>
        @endif
    </form>

    <div class="container">
        <div class="card" style="width:70%">
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

                    <label class="col-sm-4 col-form-label">riwayat penyakit</label>
                    <div class="col-sm-5">
                        <label class="col-sm-4 col-form-label">{{ $subjek->riwayat_penyakit ?? '' }}</label>
                    </div>

                    <label class="col-sm-4 col-form-label">riwayat penyakit
                        keluarga</label>
                    <div class="col-sm-5">
                        <label class="col-sm-4 col-form-label">{{ $subjek->riwayat_penyakit_keluarga ?? '' }}</label>
                    </div>

                    <label class="col-sm-4 col-form-label">menikah ke</label>
                    <div class="col-sm-5">
                        <label class="col-sm-4 col-form-label">{{ $subjek->menikah_ke ?? '' }}</label>
                    </div>

                    <label class="col-sm-4 col-form-label">usia menikah</label>
                    <div class="col-sm-5">
                        <label class="col-sm-4 col-form-label">{{ $subjek->usia_menikah ?? '' }}</label>
                    </div>

                    <label class="col-sm-4 col-form-label">lama menikah</label>
                    <div class="col-sm-5">
                        <label class="col-sm-4 col-form-label">{{ $subjek->lama_menikah ?? '' }}</label>
                    </div>

                    <label class="col-sm-4 col-form-label">HPHT</label>
                    <div class="col-sm-5">
                        <label class="col-sm-4 col-form-label">{{ $subjek->HPHT ?? '' }}</label>
                    </div>

                    <label class="col-sm-4 col-form-label">menarche</label>
                    <div class="col-sm-5">
                        <label class="col-sm-4 col-form-label">{{ $subjek->menarche ?? '' }}</label>
                    </div>

                    <label class="col-sm-4 col-form-label">lama haid</label>
                    <div class="col-sm-5">
                        <label class="col-sm-4 col-form-label">{{ $subjek->lama_haid ?? '' }}</label>
                    </div>

                    <label class="col-sm-4 col-form-label">siklus haid</label>
                    <div class="col-sm-5">
                        <label class="col-sm-4 col-form-label">{{ $subjek->siklus_haid ?? '' }}</label>
                    </div>

                    <label class="col-sm-4 col-form-label">warna</label>
                    <div class="col-sm-5">
                        <label class="col-sm-4 col-form-label">{{ $subjek->warna ?? '' }}</label>
                    </div>

                    <label class="col-sm-4 col-form-label">flour albus</label>
                    <div class="col-sm-5">
                        <label class="col-sm-4 col-form-label">{{ $subjek->flour_albus ?? '' }}</label>
                    </div>

                    <label class="col-sm-4 col-form-label">riwayat kehamilan</label>
                    <div class="col-sm-5">
                        <label class="col-sm-4 col-form-label">{{ $subjek->riwayat_kehamilan ?? '' }}</label>
                    </div>

                    <label class="col-sm-4 col-form-label">riwayat kb</label>
                    <div class="col-sm-5">
                        <label class="col-sm-4 col-form-label">{{ $subjek->riwayat_kb ?? '' }}</label>
                    </div>
                </div>
                <div>
                    {{-- delete&edit form show when have data --}}
                    @if ($subjek)
                        <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');"
                            action="/subjektif/delete/{{ $subjek->id }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                            <a scope="col" href="/subjektif/edit/{{ $subjek->biodata_id ?? '' }}"
                                class="btn btn-primary mr-2">Edit</a>
                        </form>
                    @endif
                    <a scope="col" href="/biodata" class="btn btn-secondary mr-2">Kembali</a>
                </div>
            </div>
        </div>
    @endsection
