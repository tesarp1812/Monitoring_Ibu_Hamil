@extends('layout.app')
@section('content')
    <div class="card-footer text-muted">
        <a href="/biodata" class="btn btn-primary">Kembali</a>
    </div>
    <div class="card text-center">
        <div class="card-header bg-info">
            Biodata Pasien
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-sm-6 ">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-header bg-info">Pasien</h5>
                            <div class="card-body">
                                <h5 class="card-title">Nama : {{ $biodata->nama }} </h5>
                                <h5 class="card-title">Umur : {{ $biodata->umur }} </h5>
                                <h5 class="card-title">Agama : {{ $biodata->agama }} </h5>
                                <h5 class="card-title">pendidikan : {{ $biodata->pendidikan }} </h5>
                                <h5 class="card-title">pekerjaan : {{ $biodata->pekerjaan }} </h5>
                                <h5 class="card-title">alamat : {{ $biodata->alamat }} </h5>
                                <h5 class="card-title">nomer telpon : {{ $biodata->nomer_tlpn }} </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-header bg-info">Suami</h5>
                            <div class="card-body">
                                <h5 class="card-title">Nama : {{ $biodata->nama_suami }} </h5>
                                <h5 class="card-title">Umur : {{ $biodata->umur_suami }} </h5>
                                <h5 class="card-title">Agama : {{ $biodata->agama_suami }} </h5>
                                <h5 class="card-title">pendidikan : {{ $biodata->pendidikan_suami }} </h5>
                                <h5 class="card-title">pekerjaan : {{ $biodata->pekerjaan_suami }} </h5>
                                <h5 class="card-title">alamat : {{ $biodata->alamat_suami }} </h5>
                                <h5 class="card-title">nomer telpon : {{ $biodata->nomer_suami }} </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card text-center">
        <div class="card-header bg-info">
            Data Pasien
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-sm-6 ">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-header bg-info">Data Subjektif</h5>
                            <div class="card-body">
                                <div class="mb-3 row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Id subjektif</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->subjektif->biodata_id ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">Keluhan</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->subjektif->keluhan ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">riwayat penyakit</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->subjektif->riwayat_penyakit ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">riwayat penyakit
                                        keluarga</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->subjektif->riwayat_penyakit_keluarga ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">menikah ke</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->subjektif->menikah_ke ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">usia menikah</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->subjektif->usia_menikah ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">lama menikah</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->subjektif->lama_menikah ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">HPHT</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->subjektif->HPHT ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">menarche</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->subjektif->menarche ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">lama haid</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->subjektif->lama_haid ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">siklus haid</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->subjektif->siklus_haid ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">warna</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->subjektif->warna ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">flour albus</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->subjektif->flour_albus ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">riwayat kehamilan</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->subjektif->riwayat_kehamilan ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">riwayat kb</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->subjektif->riwayat_kb ?? '' }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-header bg-info">Data Objektif</h5>
                            <div class="card-body">
                                <div class="mb-3 row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">kesadaran</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->objektif->kesadaran ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">tekanan_darah</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->objektif->tekanan_darah ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">suhu</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->objektif->suhu ?? '' }}/C</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">nadi</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->objektif->nadi ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">respirasi</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->objektif->respirasi ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">bb</label>
                                    <div class="col-sm-10">
                                        <label class="col-sm-2 col-form-label">{{ $biodata->objektif->bb ?? '' }}
                                            Kg</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">tb</label>
                                    <div class="col-sm-10">
                                        <label class="col-sm-2 col-form-label">{{ $biodata->objektif->tb ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">kepala</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->objektif->kepala ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">rambut</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->objektif->rambut ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">muka</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->objektif->muka ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">mata</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->objektif->mata ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">hidung</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->objektif->hidung ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">telinga</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->objektif->telinga ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">mulut</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->objektif->mulut ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">leher</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->objektif->leher ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">dada</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->objektif->dada ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">abdomen</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->objektif->abdomen ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">leopold 1</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->objektif->leopold1 ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">leopold 2</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->objektif->leopold2 ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">leopold 3</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->objektif->leopold3 ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">leopold 4</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->objektif->leopold4 ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">genetalia</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->objektif->genetalia ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">eks_atas</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->objektif->eks_atas ?? '' }}</label>
                                    </div>

                                    <label for="staticEmail" class="col-sm-2 col-form-label">eks_bawah</label>
                                    <div class="col-sm-10">
                                        <label
                                            class="col-sm-2 col-form-label">{{ $biodata->objektif->eks_bawah ?? '' }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <a href="/biodata" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    @endsection
